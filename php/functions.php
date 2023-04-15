<?php 
require "config.php";
require "templates.php";

class DatabaseClass
{
    public function getData($query)
    {
        $result = new stdClass();
        try {
            $server = new mysqli(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DATABASE);
            $r = $server->query($query);

            $result->success = 1;
            $result->error = null;
            $result->resultNum = $r->num_rows;
            $result->results = $r->fetch_all();

            $r->free_result();
            $server->close();

            return $result;
        } catch (Exception $e) {
            $result->success = 0;
            $result->error = $e;
            $result->resultNum = null;
            $result->results = null;
            return $result;
        }
    }
    public function setData($query)
    {
        try {
            $server = new mysqli(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DATABASE);
            $server->query($query);
            $server->close();
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
}
define("Database", new DatabaseClass());

class UserClass
{
    public function loginUser($post)
    {
        session_destroy();
        session_start();
        $email = $post["email"];
        $password = md5($post["password"]);
        $result = Database->getData("SELECT id, name, surname, email, phone, image FROM users WHERE email='$email' AND password='$password'");
        if ($result->resultNum) {
            $_SESSION['isLoggedIn'] = true;
            $_SESSION['userId'] = $result->results[0][0];
            $_SESSION['userData'] = $result->results[0];
            return true;
        } else {
            return false;
        }
    }
    public function getUserId()
    {
        return $_SESSION['userId'];
    }
    public function getUserData()
    {
        return $_SESSION['userData'];
    }
    public function isLoggedIn()
    {
        return isset($_SESSION['isLoggedIn']);
    }
    public function isNotLoggedIn()
    {
        return !isset($_SESSION['isLoggedIn']);
    }
    public function logout()
    {
        session_destroy();
    }
    public function register($POST)
    {
        $name = $POST['name'];
        $surname = $POST['surname'];
        $phone = $POST['phone'];
        $email = $POST['email'];
        $password = md5($POST['password']);

        Database->setData("INSERT INTO users(email, phone, password, name, surname) VALUES ('$email', '$phone', '$password', '$name', '$surname')");
        $result = Database->getData("SELECT id FROM users WHERE email='$email' AND password='$password'")->results[0][0];
        $basket = array("products" => [], "customProducts" => []);
        $basket = json_encode($basket);
        Database->setData("INSERT INTO baskets (userId, basketData) VALUES ('$result', '$basket')");
    }
    public function addReview($POST) {
        $review = $POST['review'];
        $userId = User->getUserId();
        $result = Database->setData("INSERT INTO reviews (userId, review) VALUES ('$userId', '$review')");
    }
    public function setMessage($title, $message, $type) {
        $_SESSION['message']['title'] = $title;
        $_SESSION['message']['message'] = $message;
        $_SESSION['message']['type'] = $type;
    }
}
define("User", new UserClass());

class ContentClass
{
    public function generateProducts()
    {
        $query = "SELECT id, name, description, price, image FROM products";
        $result = Database->getData($query);
        for ($i = 0; $i < $result->resultNum; $i++) {
            if (!$result->results[$i][0] == 0) {
                echo Template->productCard($result->results[$i]);
            }
        }
    }
    public function generateIngredients()
    {
        $query = "SELECT id, name, price, image FROM ingredients";
        $result = Database->getData($query);
        for ($i = 0; $i < $result->resultNum; $i++) {
            echo Template->ingredientCard($result->results[$i]);
        }
    }
    public function generateBasket()
    {
        echo Template->basket(Basket->getPaymentMethods(), "12345678", Basket->getBasketCards(), Basket->getCalculatedPrice(), Basket->getCustomBasketCards());
    }
    public function generateLoginForm()
    {
        echo Template->loginForm();
    }
    public function generateLoginButton()
    {
        echo Template->loginButton();
    }
    public function generateBasketButton()
    {
        echo Template->basketButton();
    }
    public function generateUserMenu()
    {
        $result = Database->getData("SELECT image FROM users WHERE id=" . User->getUserId())->results[0][0];
        echo Template->userMenu($result);
    }
    public function generateUserDashboard()
    {
        echo Template->userDashboard(User->getUserData());
    }
    public function generateUserPromotions()
    {
        $query = "SELECT promoCode, image FROM specialOffers WHERE isUsed = 0 AND userId = " . User->getUserId();
        $result = Database->getData($query);
        if ($result->success && $result->resultNum) {
            for ($i = 0; $i < $result->resultNum; $i++) {
                echo Template->userPromotion($result->results[$i]);
            }
        } else {
            echo Template->userNoPromotion();
        }
    }
    public function generateUserFavoritePizzas()
    {
        $user = User->getUserId();
        $query = "SELECT JSON_VALUE(orderData, '$.products[*].id'), SUM(JSON_VALUE(orderData, '$.products[*].count')) AS purchased FROM orders WHERE userId = $user GROUP BY JSON_VALUE(orderData, '$.products[*].id') ORDER BY purchased DESC LIMIT 3";
        $result = Database->getData($query);
        if ($result->resultNum == 3) {
            $paths = [];
            for ($i = 0; $i < 3; $i++) {
                $image = Database->getData("SELECT image FROM products WHERE id = " . $result->results[$i][0]);
                array_push($paths, $image->results[0][0]);
            }
            echo Template->userFavoritePizzas($paths);
        } else {
            echo Template->noUserFavoritePizzas();
        }
    }
    public function generateUserOrderHistory()
    {
        $user = User->getUserId();
        $query = "SELECT orders.id, date, address, paymentMethods.name, cost FROM orders JOIN paymentMethods ON orders.paymentMethod = paymentMethods.id WHERE userId = $user ORDER BY date DESC";
        $result = Database->getData($query);
        if ($result->resultNum > 0) {
            $historyRows = "";
            for ($i = 0; $i < $result->resultNum; $i++) {
                $historyRows .= Template->userOrderHistoryRow($result->results[$i]);
            }
            echo Template->userOrderHistory($historyRows);
        } else {
            echo Template->noUserOrderHistory();
        }
    }
    public function generateBestsellers()
    {
        $query = "SELECT products.image, products.name, SUM(JSON_VALUE(orderData, '$.products[*].count')) AS S FROM orders, products WHERE products.id = JSON_VALUE(orderData, '$.products[*].id') GROUP BY products.id ORDER BY S DESC LIMIT 3;";
        $result = Database->getData($query);
        if ($result->resultNum == 3) {
            $pizzas = array();
            for ($i = 0; $i < $result->resultNum; $i++) {
                array_push($pizzas, array("image" => $result->results[$i][0], "name" => $result->results[$i][1]));
            }

            echo Template->bestsellers($pizzas);
        }
    }
    public function generateMessage()
    {
        if ($_SESSION['message']['message'] != "") {
            echo Template->message($_SESSION['message']['type'], $_SESSION['message']['title'], $_SESSION['message']['message']);
            unset($_SESSION['message']);
        }
    }
    public function generateReviewButton()
    {
        echo Template->reviewButton();
    }
    public function generateReviewForm()
    {
        echo Template->reviewForm();
    }
    public function generateReviews()
    {
        $results = Database->getData("SELECT users.name, users.surname, reviews.review, users.image FROM reviews JOIN users ON reviews.userId = users.id");
        if($results->resultNum > 0) {
            $reviews = "";
            for($i = 0; $i < $results->resultNum; $i++) {
                $reviews .= Template->review($results->results[$i]);
            }
            echo $reviews;
        }
    }
}
define("Content", new ContentClass());

class BasketClass
{
    public $price = 0;
    public function getJsonBasket($user)
    {
        return Database->getData("SELECT basketData FROM baskets WHERE userId = $user")->results[0][0];
    }
    public function getObjectBasket($user)
    {
        return json_decode($this->getJsonBasket($user));
    }
    public function getArrayBasket($user, $property = "products")
    {
        return json_decode($this->getJsonBasket($user), true)[$property];
    }
    public function setBasket($user, $data)
    {
        $data = json_encode($data);
        $query = "UPDATE baskets SET basketData='$data' WHERE userId = $user";
        return Database->setData($query);
    }
    public function getBasketCards()
    {
        $data = Basket->getArrayBasket(User->getUserId());
        $cards = "";
        foreach ($data as $key) {
            $id = $key['id'];
            $count = $key['count'];
            $size = $key['size'];
            $query = "SELECT id, name, shortDescription, price, image FROM products WHERE id=$id";
            $result = Database->getData($query)->results;
            $cards .= Template->basketProductCard($result[0], $count, $size);
        }
        return $cards;
    }
    public function calculateProductPrice(float $price, int $size = 45)
    {
        if ($size === 30) {
            $price = $price * 0.8;
        }

        if ($size === 60) {
            $price = $price * 1.2;
        }

        return $price;
    }
    public function getCustomBasketCards()
    {
        $data = Basket->getArrayBasket(User->getUserId(), "customProducts");
        $cards = "";
        $price = 20;
        $i = 0;
        foreach ($data as $key) {
            $count = $key['count'];
            $ingredients = $key["ingredients"];
            $desc = "";
            foreach ($ingredients as $ing) {
                $id = $ing["id"];
                $ingCount = $ing["count"];
                $query = "SELECT id, name, price FROM ingredients WHERE id=$id";
                $result = Database->getData($query)->results[0];
                $desc .= $result[1] . "(x" . $ingCount . "), ";
                $price += $result[2] * $ingCount;
            }
            $card = array(0, "Twoja Pizza", $desc, $price);
            $cards .= Template->basketProductCard($card, $count, 0, $i);
            $price = 20;
            $i++;
        }
        return $cards;
    }
    public function getCalculatedPrice()
    {
        $price = $this->getProductsPrice() + $this->getCustomProductsPrice();
        return $price;
    }
    public function getProductsPrice()
    {
        $data = $this->getArrayBasket(User->getUserId());
        $price = 0;
        foreach ($data as $key) {
            $id = $key['id'];
            $count = $key['count'];
            $size = $key['size'];
            $query = "SELECT price FROM products WHERE id=$id";
            $result = Database->getData($query)->results;
            $price = $price + ($count * $this->calculateProductPrice($result[0][0], $size));
        }
        return $price;
    }
    public function getCustomProductsPrice()
    {
        $data = Basket->getArrayBasket(User->getUserId(), "customProducts");
        $price = 0;
        foreach ($data as $key) {
            $pizzaPrice = 20;
            $count = $key['count'];
            $ingredients = $key["ingredients"];
            foreach ($ingredients as $ing) {
                $id = $ing["id"];
                $ingCount = $ing["count"];
                $query = "SELECT id, name, price FROM ingredients WHERE id=$id";
                $result = Database->getData($query)->results[0];
                $pizzaPrice += $result[2] * $ingCount;
            }
            $price += $pizzaPrice * $count;
        }
        return $price;
    }
    public function removeProduct($id, $size, $count = 1)
    {
        $basket = $this->getObjectBasket(User->getUserId());
        for ($i = 0; $i < count($basket->products); $i++) {
            if ($basket->products[$i]->id == $id && $basket->products[$i]->size == $size) {
                if ($basket->products[$i]->count > $count) {
                    $count = $basket->products[$i]->count - $count;
                    $data = array("id" => intval($id), "count" => $count, "size" => $size);
                    $basket->products[$i] = $data;
                    $this->setBasket(User->getUserId(), $basket);
                } else {
                    unset($basket->products[$i]);
                    $basket->products = array_values($basket->products);
                    $this->setBasket(User->getUserId(), $basket);
                }
            }
        }
    }
    public function addProduct($id, $size, $count = 1)
    {
        $basket = $this->getObjectBasket(User->getUserId());
        for ($i = 0; $i < count($basket->products); $i++) {
            if ($basket->products[$i]->id == $id) {
                if ($basket->products[$i]->size == intval($size)) {
                    $basket->products[$i]->count += $count;
                    $this->setBasket(User->getUserId(), $basket);
                    echo "ZA";
                    return;
                }
            }
        }
        $data = array("id" => intval($id), "count" => intval($count), "size" => intval($size));
        array_push($basket->products, $data);
        $this->setBasket(User->getUserId(), $basket);
    }
    public function removeCustomProduct($number)
    {
        $basket = $this->getObjectBasket(User->getUserId());
        if (count($basket->customProducts) >= $number) {
            unset($basket->customProducts[$number]);
            $basket->customProducts = array_values($basket->customProducts);
            $this->setBasket(User->getUserId(), $basket);
        }
    }
    public function addCustomProduct($data, $count = 1)
    {
        $basket = $this->getObjectBasket(User->getUserId());
        $ingredients = [];
        foreach ($data as $key => $value) {
            if ($value != 0) {
                array_push($ingredients, array("id" => intval($key), "count" => intval($value)));
            }
        }
        $customProduct = array(
            "count" => intval($count),
            "ingredients" => $ingredients,
        );
        array_push($basket->customProducts, $customProduct);
        $this->setBasket(User->getUserId(), $basket);
    }
    public function clearBasket()
    {
        $basket = $this->getObjectBasket(User->getUserId());
        $basket->products = [];
        $basket->customProducts = [];
        $this->setBasket(User->getUserId(), $basket);
    }
    public function getPaymentMethods()
    {
        $methods = "";
        $result = Database->getData("SELECT id, name FROM paymentMethods");
        for ($i = 0; $i < $result->resultNum; $i++) {
            $methods .= Template->paymentMethod($result->results[$i]);
        }
        return $methods;
    }
    public function order($POST)
    {
        $userId = intval(User->getUserId());
        $orderData = $this->getJsonBasket(User->getUserId());
        $address = $POST['address'];
        $paymentMethod = intval($POST['paymentMethod']);
        $cost = number_format(floatval($this->getCalculatedPrice()), 2);
        $phone = $POST['phone'];

        Database->setData("INSERT INTO orders (userId, orderData, address, paymentMethod, cost, phone) VALUES ($userId, '$orderData', '$address', $paymentMethod, $cost, '$phone')");
        $this->clearBasket();
    }
}
define("Basket", new BasketClass());