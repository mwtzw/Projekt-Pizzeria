<?php require("config.php");

    class DatabaseClass {
        function getData($query) {
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
            } 
            catch(Exception $e) {
                $result->success = 0;
                $result->error = $e;
                $result->resultNum = null;
                $result->results = null;
                return $result;
            }
        }
    }
    define("Database", new DatabaseClass());


    class UserClass {
        public $isLoggedIn = false;
        public $userId = -1;
        


    }
    define("User", new UserClass()); 
    
    class TemplateClass {
        function bestsellerCard($data) {
            return <<< TEMPLATE
                <div class=" card m-4 rounded-5"> 
                    <div class="pizza-photo w-100 d-flex justify-content-center">
                        <img src="../php/getImage.php?name=product&id=$data[0]" class=" w-75 h-100 p-1">
                    </div>
                    <div class="pizza-description rounded-5 rounded-top-0 w-100 h-100 text-center" style="background-color: #4f8f5b;">
                        <H1 class="mt-2 text-white fw-bold fst-italic mt-3">$data[1]</H1>
                        <H2 class="mt-2 text-white fw-lighter fs-6 ps-4 pe-4">$data[2]</H2>
                        <h1 class="pizza-price text-white fw-bold">$data[3] zł</h1>
                        <button class="btn1 w-50 h-25 fs-4 rounded-5 border-0 fw-normal mt-2" type="button">  Do koszyka </button>
                    </div>
                </div>
            TEMPLATE;
        }
    }
    define("Template", new TemplateClass());

    class ContentClass { 
        function generateBestsellers($count = 4) {
            $query = "SELECT id, name, description, price FROM products ORDER BY sold DESC LIMIT $count";
            $result = Database->getData($query)->results;
            for($i = 0; $i < $count; $i++) {
                echo Template->bestsellerCard($result[$i]);
            }
        }
    }
    define("Content", new ContentClass());

    class BasketClass {

    }
    define("Basket", new BasketClass());
    