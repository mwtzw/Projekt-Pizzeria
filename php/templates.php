<?php
class TemplateClass
{
    public function productCard($data)
    {
        return <<< TEMPLATE
                <form method="POST" action="php/basket.php">
                    <div class="pizzee" data-aos="zoom-in-up" data-aos-delay="300">
                        <div class=" card m-4 rounded-5">
                        <div class="pizza-photo w-100 d-flex justify-content-center">
                            <img src="$data[4]" class=" w-75 h-100 p-1">
                        </div>
                        <div class="pizza-description rounded-5 rounded-top-0 w-100 h-100 text-center">
                            <H1 class="mt-2 text-white fw-bold fst-italic mt-3">$data[1]</H1>
                            <H2 class="mt-2 text-white fw-lighter fs-6 ps-4 pe-4">$data[2]</H2>
                            <div class="buttons d-flex justify-content-center align-items-center">
                            <input label="30cm" type="radio" name="size" value="30cm">
                            <input label="45cm" type="radio" name="size" value="45cm" checked>
                            <input label="60cm" type="radio" name="size" value="60cm">
                            </div>
                            <h1 class="pizza-price text-white fw-bold">$data[3] zł</h1>
                            <input type="hidden" name="id" value="$data[0]">
                            <input class="btn1 w-50 h-25 fs-5 rounded-5 border-0 fw-normal mt-2" type="submit" value="Do koszyka">
                        </div>
                        </div>
                    </div>
                </form>
            TEMPLATE;
    }
    public function ingredientCard($data)
    {
        return <<< TEMPLATE
                <div class="product border rounded-5 d-flex flex-column align-items-center justify-content-start">
                    <img src="$data[3]">
                    <div class="pizza-ingredient rounded-5 rounded-top-0 w-100 h-100 text-center" style="background-color: #4f8f5b;">
                    <h1 class="mt-3 fs-3 text-white">$data[1]</h1>
                        <div id="incrementor">
                            <input class="fs-5 nr" type="number" value="0" name="ingredient[$data[0]]" id="nr" min="0" max="5">
                        </div>
                        <h1 class="mt-2 fs-6 text-white fst-italic fw-lighter">Cena:$data[2]zł/szt</h1>
                    </div>
                </div>
            TEMPLATE;
    }
    public function basketProductCard($data, $count, $size = 45, $number = -1)
    {
        $price = ($size != 45) ? Basket->calculateProductPrice($data[3], $size) : $data[3] * $count;
        $price = number_format($price, 2);
        $link = ($number != -1) ? "?action=removeCustom&id=" . $number : "?action=remove&id=" . $data[0] . "&size=" . $size;
        $count = ($count == 1) ? " " : "x" . $count;
        $size = ($size == 0) ? " " : $size . "cm";
        $image = (isset($data[4])) ? $data[4] : "img/products/custom.png";
        return <<< TEMPLATE
                <div class="d-flex flex-row align-items-center align-items-center">
                    <div id="cart-product" class=" d-flex align-items-center rounded-4 mt-3 mb-3">
                        <div class="cart-product-photo d-flex justify-content-start ms-1 align-items-center">
                            <img src="$image" class="pizza" alt="pizza">
                        </div>
                        <div class="cart-product-description h-100 d-flex align-items-center justify-content-center flex-column">
                            <h1 class=" text-center fs-4 pt-4">$data[1] $size $count
                                <p class="fs-5 fw-lighter">$data[2]</p>
                            </h1>
                        </div>
                        <div class="cena-koszyk d-flex flex-column">
                            <h1 class="text-center fw-light fst-italic fs-4 w-30 ms-3 me-3" style="font-size:4px; ">$price zł</h1>
                            <a href="php/basket.php$link"><img class="bin" src="img/icons/bin.png" style="width:30px;" alt="bin"></a>
                        </div>
                    </div>
                </div>
            TEMPLATE;
    }
    public function basket($paymentMethods, $phone, $cards, $price, $customCards = "")
    {
        $price = number_format($price, 2);
        $display = "";
        if ($cards == "" && $customCards == "") {
            $cards = "<div class='text-center w-100'>Jeszcze nic tu niema</div>";
            $display = "disabled style='background-color: #828282'";
        }
        return <<< TEMPLATE
            <!-- koszyk -->
            <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasScrollingLabel">
            <div class="offcanvas-header">
                <div class="d-flex justify-content-center align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="me-2" xmlns:xlink="http://www.w3.org/1999/xlink"
                        fill="black" height="50px" width="50px" version="1.1" id="Capa_1" viewBox="0 0 448.898 448.898"
                        xml:space="preserve">
                        <path id="XMLID_1423_"
                            d="M110.646,307.839c0,3.866-3.134,7-7,7h-1.866c-3.866,0-7-3.134-7-7s3.134-7,7-7h1.866  C107.512,300.839,110.646,303.973,110.646,307.839z M67.648,243.445h-1.865c-3.866,0-7,3.134-7,7s3.134,7,7,7h1.865  c3.866,0,7-3.134,7-7S71.515,243.445,67.648,243.445z M135.299,186.951h-1.867c-3.866,0-7,3.134-7,7c0,3.866,3.134,7,7,7h1.867  c3.866,0,7-3.134,7-7C142.299,190.084,139.165,186.951,135.299,186.951z M178.345,95.274h-1.864c-3.866,0-7,3.134-7,7  c0,3.866,3.134,7,7,7h1.864c3.866,0,7-3.134,7-7C185.345,98.409,182.211,95.274,178.345,95.274z M265.215,173.492  c0-12.365,10.062-22.425,22.428-22.425c12.365,0,22.425,10.06,22.425,22.425c0,12.366-10.06,22.426-22.425,22.426  C275.276,195.917,265.215,185.857,265.215,173.492z M279.215,173.492c0,4.646,3.78,8.426,8.428,8.426  c4.646,0,8.425-3.78,8.425-8.426c0-4.646-3.779-8.425-8.425-8.425C282.995,165.066,279.215,168.846,279.215,173.492z   M128.421,154.241c0,12.366-10.061,22.426-22.427,22.426s-22.427-10.06-22.427-22.426s10.061-22.426,22.427-22.426  S128.421,141.875,128.421,154.241z M114.421,154.241c0-4.646-3.78-8.426-8.427-8.426s-8.427,3.78-8.427,8.426  c0,4.646,3.78,8.426,8.427,8.426S114.421,158.887,114.421,154.241z M75.207,186.951h-1.866c-3.866,0-7,3.134-7,7  c0,3.866,3.134,7,7,7h1.866c3.866,0,7-3.134,7-7C82.207,190.084,79.073,186.951,75.207,186.951z M212.961,109.274h1.866  c3.866,0,7-3.134,7-7c0-3.866-3.134-7-7-7h-1.866c-3.866,0-7,3.134-7,7C205.961,106.141,209.095,109.274,212.961,109.274z   M362.357,300.713c1.026,0.529,2.123,0.78,3.203,0.78c2.536,0,4.983-1.383,6.227-3.792l0.855-1.658  c1.772-3.436,0.425-7.658-3.012-9.431c-3.436-1.773-7.657-0.423-9.43,3.012l-0.855,1.658  C357.573,294.718,358.921,298.94,362.357,300.713z M296.04,380.534c1.855,3.215,0.872,7.29-2.173,9.32  c-0.217,0.161-0.444,0.31-0.684,0.448c-29.535,17.014-63.261,26.006-97.531,26.006c-35.34,0-68.525-9.421-97.171-25.879  c-0.222-0.099-0.44-0.21-0.655-0.334c-0.222-0.128-0.435-0.267-0.637-0.415C39.101,355.713,0,292.666,0,220.657  C0,148.646,39.1,85.6,97.188,51.632c0.203-0.148,0.416-0.287,0.639-0.416c0.216-0.124,0.435-0.236,0.656-0.334  c28.646-16.458,61.83-25.878,97.17-25.878s68.524,9.419,97.169,25.877c0.223,0.099,0.441,0.21,0.656,0.335  c0.223,0.128,0.435,0.267,0.638,0.415c58.089,33.968,97.19,97.015,97.19,169.024v0v0.001c0,3.866-3.134,7-7,7H225.305  c-0.049,0-0.098,0-0.146-0.001h-17.408l8.311,14.457c0.173,0.229,0.333,0.471,0.48,0.726L296.04,380.534z M280.067,381.543  l-90.483-157.399c-1.245-2.166-1.242-4.832,0.01-6.995c1.251-2.163,3.561-3.494,6.059-3.494h152.86  c-1.913-41.889-20.932-81.228-52.842-108.812c-2.925-2.528-3.246-6.949-0.718-9.874c2.529-2.926,6.947-3.248,9.874-0.718  c34.99,30.247,55.777,73.441,57.699,119.403h14.646c-2.348-61.702-35.62-115.614-84.724-146.658l-75.907,131.478  c-1.933,3.348-6.214,4.496-9.563,2.562c-3.348-1.933-4.495-6.214-2.563-9.562l61.618-106.729  c-21.635-11.212-45.826-17.111-70.383-17.111c-18.206,0-36.02,3.165-52.946,9.407c-3.631,1.338-7.652-0.519-8.989-4.146  c-1.338-3.627,0.519-7.652,4.146-8.99c18.482-6.815,37.926-10.271,57.79-10.271c27.013,0,53.624,6.542,77.39,18.975l7.294-12.634  c-25.3-13.388-54.122-20.974-84.684-20.974s-59.385,7.586-84.685,20.975l75.919,131.499c1.933,3.348,0.785,7.629-2.563,9.562  c-3.35,1.934-7.63,0.786-9.563-2.562L113.148,91.756c-36.889,23.611-61.756,61.431-68.621,104.75  c-0.605,3.818-4.194,6.427-8.01,5.818c-3.818-0.605-6.423-4.191-5.818-8.009c7.529-47.508,34.883-88.953,75.442-114.695  l-7.287-12.622C49.751,98.042,16.48,151.955,14.133,213.657h151.868c3.866,0,7,3.134,7,7s-3.134,7-7,7H42.792  c1.934,42.515,21.419,82.257,54.131,109.911c2.952,2.496,3.322,6.913,0.826,9.865c-2.495,2.952-6.912,3.324-9.865,0.827  c-35.866-30.321-57.164-73.956-59.105-120.603H14.133c2.348,61.702,35.618,115.613,84.722,146.657l75.907-131.478  c1.935-3.348,6.215-4.495,9.563-2.562s4.495,6.214,2.563,9.562l-61.618,106.728c21.635,11.214,45.828,17.113,70.384,17.113  c18.223,0,36.049-3.169,52.983-9.42c3.628-1.338,7.652,0.517,8.991,4.143c1.338,3.626-0.517,7.652-4.144,8.991  c-18.491,6.826-37.948,10.287-57.831,10.287c-27.012,0-53.625-6.543-77.391-18.978l-7.294,12.635  c25.3,13.388,54.123,20.975,84.685,20.975C225.125,402.309,254.161,395.147,280.067,381.543z M345.613,333.125  c1.027,0.531,2.125,0.782,3.206,0.782c2.535,0,4.981-1.381,6.226-3.789l0.856-1.658c1.773-3.435,0.428-7.658-3.008-9.432  c-3.437-1.776-7.656-0.427-9.432,3.007l-0.856,1.658C340.832,327.128,342.178,331.351,345.613,333.125z M319.987,299.362  c1.027,0.531,2.125,0.782,3.207,0.782c2.535,0,4.981-1.381,6.225-3.789l0.856-1.658c1.774-3.435,0.429-7.657-3.006-9.432  c-3.432-1.774-7.657-0.428-9.432,3.006l-0.856,1.658C315.207,293.365,316.553,297.588,319.987,299.362z M448.898,253.32  c0,35.017-9.362,69.376-27.075,99.365c-17.192,29.106-41.761,53.41-71.048,70.282c-1.072,0.618-3.202,1.298-5.315,0.693  c-1.786-0.511-3.321-1.66-4.247-3.27L247.18,256.809c-1.245-2.167-1.242-4.832,0.01-6.995c1.251-2.163,3.561-3.494,6.059-3.494  h188.65C445.765,246.32,448.898,249.454,448.898,253.32z M434.763,260.32H265.346l70.162,122.054  c35.927-22.916,60.66-59.542,68.285-101.506c0.691-3.803,4.323-6.329,8.14-5.636c3.804,0.691,6.326,4.335,5.635,8.139  c-8.363,46.026-35.573,86.168-75.075,111.152l7.298,12.697C400.485,375.336,432.438,320.095,434.763,260.32z M220.884,339.619h1.866  c3.866,0,7-3.134,7-7s-3.134-7-7-7h-1.866c-3.866,0-7,3.134-7,7S217.018,339.619,220.884,339.619z M199.384,335.786  c0,12.366-10.061,22.426-22.427,22.426c-12.364,0-22.424-10.06-22.424-22.426s10.06-22.426,22.424-22.426  C189.323,313.359,199.384,323.42,199.384,335.786z M185.384,335.786c0-4.646-3.78-8.426-8.427-8.426  c-4.645,0-8.424,3.78-8.424,8.426c0,4.646,3.779,8.426,8.424,8.426C181.604,344.211,185.384,340.432,185.384,335.786z   M186.537,279.413c0,3.866,3.134,7,7,7h1.865c3.866,0,7-3.134,7-7c0-3.866-3.134-7-7-7h-1.865  C189.671,272.413,186.537,275.547,186.537,279.413z M194.721,147.535h1.867c3.866,0,7-3.134,7-7s-3.134-7-7-7h-1.867  c-3.866,0-7,3.134-7,7S190.854,147.535,194.721,147.535z M139.072,262.14c0,12.366-10.061,22.426-22.427,22.426  c-12.365,0-22.425-10.06-22.425-22.426s10.06-22.426,22.425-22.426C129.012,239.714,139.072,249.774,139.072,262.14z   M125.072,262.14c0-4.646-3.78-8.426-8.427-8.426c-4.646,0-8.425,3.78-8.425,8.426s3.779,8.426,8.425,8.426  C121.292,270.565,125.072,266.786,125.072,262.14z" />
                    </svg>
                    <strong class="fs-5">Italiana</strong>
                </div>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <hr class="m-auto mt-2 mb-2" style="width:80%;height:3px;">
                    <div class="offcanvas-body">
                    <div class="d-flex justify-content-center align-items-start flex-column">
                        $cards $customCards
                    </div>
                    <hr class="m-auto mt-4 mb-2" style="width:85%;height:3px;">

                    <!-- order form  -->
                    <form method="POST" action="php/basket.php?action=order">
                        <div class="d-flex flex-column">
                            <div class="d-flex flex-row text-align-center align-items-center m-1 mt-2">
                                <label class="fw-lighter fst-italic w-50"> Podaj adres dostawy: </label>
                                <input name="address" required type="text" class="form-control adres w-50" placeholder="Podaj Adres">
                            </div>
                            <div class="d-flex flex-row text-align-center align-items-center m-1 mt-2">
                                <label class="fw-lighter fst-italic w-50"> Podaj numer telefonu: </label>
                                <input name="phone" required type="tel" class="form-control adres w-50" placeholder="Podaj Telefon" value="$phone">
                            </div>
                            <div class="d-flex flex-row text-align-center align-items-center  m-1 mb-2">
                                <label class="fw-lighter fst-italic w-50"> Metoda Płatności: </label>
                                <select name="paymentMethod" required class="form-select paymethod  w-50" aria-label="Default select example">
                                    $paymentMethods
                                </select>
                            </div>
                        </div>

                    <!-- order form  -->

                    <div class="mt-3 d-flex justify-content-center align-items-center">
                        <input type="submit" class="finish  text-white" value="Zamów" $display">
                        <h1 class="fs-2 text-center fw-bold ms-4">$price zł </h1>
                    </div>
                    </form>
                </div>
            </div>
            <!-- koszyk -->
        TEMPLATE;
    }
    public function loginForm()
    {
        return <<< TEMPLATE
            <!-- login page -->
            <div class="modal fade" id="login-page" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content rounded-5">
                    <div class="modal-header">
                    <div class="d-flex justify-content-center align-items-center ">
                        <svg xmlns="http://www.w3.org/2000/svg" class="me-2" xmlns:xlink="http://www.w3.org/1999/xlink" fill="black" height="50px" width="50px" version="1.1" id="Capa_1" viewBox="0 0 448.898 448.898" xml:space="preserve">
                        <path id="XMLID_1423_" d="M110.646,307.839c0,3.866-3.134,7-7,7h-1.866c-3.866,0-7-3.134-7-7s3.134-7,7-7h1.866  C107.512,300.839,110.646,303.973,110.646,307.839z M67.648,243.445h-1.865c-3.866,0-7,3.134-7,7s3.134,7,7,7h1.865  c3.866,0,7-3.134,7-7S71.515,243.445,67.648,243.445z M135.299,186.951h-1.867c-3.866,0-7,3.134-7,7c0,3.866,3.134,7,7,7h1.867  c3.866,0,7-3.134,7-7C142.299,190.084,139.165,186.951,135.299,186.951z M178.345,95.274h-1.864c-3.866,0-7,3.134-7,7  c0,3.866,3.134,7,7,7h1.864c3.866,0,7-3.134,7-7C185.345,98.409,182.211,95.274,178.345,95.274z M265.215,173.492  c0-12.365,10.062-22.425,22.428-22.425c12.365,0,22.425,10.06,22.425,22.425c0,12.366-10.06,22.426-22.425,22.426  C275.276,195.917,265.215,185.857,265.215,173.492z M279.215,173.492c0,4.646,3.78,8.426,8.428,8.426  c4.646,0,8.425-3.78,8.425-8.426c0-4.646-3.779-8.425-8.425-8.425C282.995,165.066,279.215,168.846,279.215,173.492z   M128.421,154.241c0,12.366-10.061,22.426-22.427,22.426s-22.427-10.06-22.427-22.426s10.061-22.426,22.427-22.426  S128.421,141.875,128.421,154.241z M114.421,154.241c0-4.646-3.78-8.426-8.427-8.426s-8.427,3.78-8.427,8.426  c0,4.646,3.78,8.426,8.427,8.426S114.421,158.887,114.421,154.241z M75.207,186.951h-1.866c-3.866,0-7,3.134-7,7  c0,3.866,3.134,7,7,7h1.866c3.866,0,7-3.134,7-7C82.207,190.084,79.073,186.951,75.207,186.951z M212.961,109.274h1.866  c3.866,0,7-3.134,7-7c0-3.866-3.134-7-7-7h-1.866c-3.866,0-7,3.134-7,7C205.961,106.141,209.095,109.274,212.961,109.274z   M362.357,300.713c1.026,0.529,2.123,0.78,3.203,0.78c2.536,0,4.983-1.383,6.227-3.792l0.855-1.658  c1.772-3.436,0.425-7.658-3.012-9.431c-3.436-1.773-7.657-0.423-9.43,3.012l-0.855,1.658  C357.573,294.718,358.921,298.94,362.357,300.713z M296.04,380.534c1.855,3.215,0.872,7.29-2.173,9.32  c-0.217,0.161-0.444,0.31-0.684,0.448c-29.535,17.014-63.261,26.006-97.531,26.006c-35.34,0-68.525-9.421-97.171-25.879  c-0.222-0.099-0.44-0.21-0.655-0.334c-0.222-0.128-0.435-0.267-0.637-0.415C39.101,355.713,0,292.666,0,220.657  C0,148.646,39.1,85.6,97.188,51.632c0.203-0.148,0.416-0.287,0.639-0.416c0.216-0.124,0.435-0.236,0.656-0.334  c28.646-16.458,61.83-25.878,97.17-25.878s68.524,9.419,97.169,25.877c0.223,0.099,0.441,0.21,0.656,0.335  c0.223,0.128,0.435,0.267,0.638,0.415c58.089,33.968,97.19,97.015,97.19,169.024v0v0.001c0,3.866-3.134,7-7,7H225.305  c-0.049,0-0.098,0-0.146-0.001h-17.408l8.311,14.457c0.173,0.229,0.333,0.471,0.48,0.726L296.04,380.534z M280.067,381.543  l-90.483-157.399c-1.245-2.166-1.242-4.832,0.01-6.995c1.251-2.163,3.561-3.494,6.059-3.494h152.86  c-1.913-41.889-20.932-81.228-52.842-108.812c-2.925-2.528-3.246-6.949-0.718-9.874c2.529-2.926,6.947-3.248,9.874-0.718  c34.99,30.247,55.777,73.441,57.699,119.403h14.646c-2.348-61.702-35.62-115.614-84.724-146.658l-75.907,131.478  c-1.933,3.348-6.214,4.496-9.563,2.562c-3.348-1.933-4.495-6.214-2.563-9.562l61.618-106.729  c-21.635-11.212-45.826-17.111-70.383-17.111c-18.206,0-36.02,3.165-52.946,9.407c-3.631,1.338-7.652-0.519-8.989-4.146  c-1.338-3.627,0.519-7.652,4.146-8.99c18.482-6.815,37.926-10.271,57.79-10.271c27.013,0,53.624,6.542,77.39,18.975l7.294-12.634  c-25.3-13.388-54.122-20.974-84.684-20.974s-59.385,7.586-84.685,20.975l75.919,131.499c1.933,3.348,0.785,7.629-2.563,9.562  c-3.35,1.934-7.63,0.786-9.563-2.562L113.148,91.756c-36.889,23.611-61.756,61.431-68.621,104.75  c-0.605,3.818-4.194,6.427-8.01,5.818c-3.818-0.605-6.423-4.191-5.818-8.009c7.529-47.508,34.883-88.953,75.442-114.695  l-7.287-12.622C49.751,98.042,16.48,151.955,14.133,213.657h151.868c3.866,0,7,3.134,7,7s-3.134,7-7,7H42.792  c1.934,42.515,21.419,82.257,54.131,109.911c2.952,2.496,3.322,6.913,0.826,9.865c-2.495,2.952-6.912,3.324-9.865,0.827  c-35.866-30.321-57.164-73.956-59.105-120.603H14.133c2.348,61.702,35.618,115.613,84.722,146.657l75.907-131.478  c1.935-3.348,6.215-4.495,9.563-2.562s4.495,6.214,2.563,9.562l-61.618,106.728c21.635,11.214,45.828,17.113,70.384,17.113  c18.223,0,36.049-3.169,52.983-9.42c3.628-1.338,7.652,0.517,8.991,4.143c1.338,3.626-0.517,7.652-4.144,8.991  c-18.491,6.826-37.948,10.287-57.831,10.287c-27.012,0-53.625-6.543-77.391-18.978l-7.294,12.635  c25.3,13.388,54.123,20.975,84.685,20.975C225.125,402.309,254.161,395.147,280.067,381.543z M345.613,333.125  c1.027,0.531,2.125,0.782,3.206,0.782c2.535,0,4.981-1.381,6.226-3.789l0.856-1.658c1.773-3.435,0.428-7.658-3.008-9.432  c-3.437-1.776-7.656-0.427-9.432,3.007l-0.856,1.658C340.832,327.128,342.178,331.351,345.613,333.125z M319.987,299.362  c1.027,0.531,2.125,0.782,3.207,0.782c2.535,0,4.981-1.381,6.225-3.789l0.856-1.658c1.774-3.435,0.429-7.657-3.006-9.432  c-3.432-1.774-7.657-0.428-9.432,3.006l-0.856,1.658C315.207,293.365,316.553,297.588,319.987,299.362z M448.898,253.32  c0,35.017-9.362,69.376-27.075,99.365c-17.192,29.106-41.761,53.41-71.048,70.282c-1.072,0.618-3.202,1.298-5.315,0.693  c-1.786-0.511-3.321-1.66-4.247-3.27L247.18,256.809c-1.245-2.167-1.242-4.832,0.01-6.995c1.251-2.163,3.561-3.494,6.059-3.494  h188.65C445.765,246.32,448.898,249.454,448.898,253.32z M434.763,260.32H265.346l70.162,122.054  c35.927-22.916,60.66-59.542,68.285-101.506c0.691-3.803,4.323-6.329,8.14-5.636c3.804,0.691,6.326,4.335,5.635,8.139  c-8.363,46.026-35.573,86.168-75.075,111.152l7.298,12.697C400.485,375.336,432.438,320.095,434.763,260.32z M220.884,339.619h1.866  c3.866,0,7-3.134,7-7s-3.134-7-7-7h-1.866c-3.866,0-7,3.134-7,7S217.018,339.619,220.884,339.619z M199.384,335.786  c0,12.366-10.061,22.426-22.427,22.426c-12.364,0-22.424-10.06-22.424-22.426s10.06-22.426,22.424-22.426  C189.323,313.359,199.384,323.42,199.384,335.786z M185.384,335.786c0-4.646-3.78-8.426-8.427-8.426  c-4.645,0-8.424,3.78-8.424,8.426c0,4.646,3.779,8.426,8.424,8.426C181.604,344.211,185.384,340.432,185.384,335.786z   M186.537,279.413c0,3.866,3.134,7,7,7h1.865c3.866,0,7-3.134,7-7c0-3.866-3.134-7-7-7h-1.865  C189.671,272.413,186.537,275.547,186.537,279.413z M194.721,147.535h1.867c3.866,0,7-3.134,7-7s-3.134-7-7-7h-1.867  c-3.866,0-7,3.134-7,7S190.854,147.535,194.721,147.535z M139.072,262.14c0,12.366-10.061,22.426-22.427,22.426  c-12.365,0-22.425-10.06-22.425-22.426s10.06-22.426,22.425-22.426C129.012,239.714,139.072,249.774,139.072,262.14z   M125.072,262.14c0-4.646-3.78-8.426-8.427-8.426c-4.646,0-8.425,3.78-8.425,8.426s3.779,8.426,8.425,8.426  C121.292,270.565,125.072,266.786,125.072,262.14z" />
                        </svg>
                        <strong class="fs-5">Italiana</strong>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body pd-2 rounded-5">

                    <!-- form  do LOGOWANIA -->
                    <form id="form1" action="php/user.php?action=login" method="post" class="m-3 d-block">
                        <div class="form-floating mb-3">
                        <input name="email" type="email" class="form-control rounded-4" id="floatingInput" placeholder=".">
                        <label for="floatingInput">Adres e-mail</label>
                        </div>
                        <div class="form-floating mb-3">
                        <input name="password" type="password" id="password-field" class="form-control rounded-4" id="floatingPassword" placeholder=".">
                        <label for="floatingPassword">Hasło</label>

                        </div>
                        <div class="d-flex justify-content-center align-items-center">
                        <button class="w-50 mb-3 mt-2 btn btn-lg rounded-3 guzik-login" type="submit">Zaloguj się</button>
                        </div>
                        <p class="fw-lighter text-center"> Nie masz konta <b class="fw-bold" id="res"> Zarejestruj się </b> </p>
                        <p class="fw-lighter text-center"> Zaloguj się za pomocą </p>
                        <div class="login-social d-flex justify-content-center">
                        <img src="img/icons/instagram2.png" class="ms-3 me-3" alt="insta">
                        <img src="img/icons/facebook2.png" class="ms-3 me-3" alt="facebook">
                        <img src="img/icons/social2.png" class="ms-3 me-3" alt="social">
                        </div>
                    </form>
                    <!-- form  -->
                    <!-- form  do REJESTRACJI -->
                    <form id="form2" action="php/user.php?action=register" method="post" class="m-3 d-none">
                        <div class="form-floating mb-3">
                        <input name="name" required type="text" class="form-control rounded-4" id="floatingInput" placeholder=".">
                        <label for="floatingInput">Imię</label>
                        </div>

                        <div class="form-floating mb-3">
                        <input name="surname" required type="text" class="form-control rounded-4" id="floatingInput" placeholder=".">
                        <label for="floatingInput">Nazwisko</label>
                        </div>


                        <div class="form-floating mb-3">
                        <input name="phone" required pattern="[0-9]{9}" type="text" class="form-control rounded-4" id="floatingInput" placeholder=".">
                        <label for="floatingInput">Numer</label>
                        </div>

                        <div class="form-floating mb-3">
                        <input name="email" required  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" type="text" class="form-control rounded-4" id="floatingInput" placeholder=".">
                        <label for="floatingInput">Adres e-mail</label>
                        </div>


                        <div class="form-floating mb-3">
                        <input name="password" required type="password" id="password-field" class="form-control rounded-4" id="floatingPassword" placeholder=".">
                        <label for="floatingPassword">Hasło</label>

                        </div>
                        <div class="d-flex justify-content-center align-items-center">
                        <button class="w-50 mb-3 mt-2 btn btn-lg rounded-3 guzik-login" type="submit">Zarejestruj
                            się</button>
                        </div>
                        <p class="fw-lighter text-center"> Masz już konto <b class="fw-bold" id="log"> Zaloguj się </b>
                        </p>
                        <p class="fw-lighter text-center"> Zarejestruj się za pomocą </p>
                        <div class="login-social d-flex justify-content-center">
                        <img src="img/icons/instagram2.png" class="ms-3 me-3" alt="insta">
                        <img src="img/icons/facebook2.png" class="ms-3 me-3" alt="facebook">
                        <img src="img/icons/social2.png" class="ms-3 me-3" alt="social">
                        </div>
                    </form>
                    <!-- form  -->
                    </div>

                </div>
                </div>
            </div>

            <!-- login page -->
            TEMPLATE;
    }
    public function loginButton()
    {
        return <<< TEMPLATE
            <li class="nav-item m-1 d-flex justify-content-center align-items-center">
                <button type="button" data-bs-toggle="modal" data-bs-target="#login-page" class="button-style2 btn fs-5 text-align-center fw-bolder">Zaloguj się</button>
            </li>
        TEMPLATE;
    }
    public function basketButton()
    {
        return <<< TEMPLATE
            <li class="nav-item m-1 d-flex justify-content-center align-items-center">
                <button class="btn cart pb-1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
                <img src="img/icons/shopping-cart2.png" style="width:30px;" alt="koszyk"></button>
            </li>
        TEMPLATE;
    }
    public function userMenu($userImage)
    {
        return <<< TEMPLATE
            <li class="nav-item d-flex justify-content-center align-items-center">
                <div class="dropdown-center  d-flex flex-column justify-content-center pt-2">
                    <button class="profile btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="$userImage" alt="icon">
                    </button>
                    <ul class="dropdown-menu dropdown-menu-lg-start">
                        <li><a class="dropdown-item" href="dashboard.php">Dashbord</a></li>
                        <li><a class="dropdown-item" href="php/user.php?action=logout">Wyloguj się</a></li>
                    </ul>
                </div>
            </li>
        TEMPLATE;
    }
    public function userDashboard($data)
    {
        $phone = join(" ", str_split($data[4], 3));
        return <<< TEMPLATE
            <div class="d-flex justify-content-center flex-wrap">
                <div data-aos="zoom-in-up" id="user-info" class="d-flex justify-content-center m-3">
                <div id="user-photo" class="d-flex flex-column justify-content-center align-items-center">
                    <img src="$data[5]" alt="user-photo">
                </div>
                <div id="user-description" class="d-flex flex-column justify-content-center align-items-start">
                    <div>
                        <h1>$data[1] $data[2]</h1>
                    </div>
                    <h3 class="mt-2 ms-4 fst-italic fw-lighter fs-5">Imie: <b class="fs-4">$data[1]</b></h3>
                    <h3 class="mt-2 ms-4 fst-italic fw-lighter fs-5">Nazwisko: <b class="fs-4">$data[2]</b> </h3>
                    <h3 class="mt-2 ms-4 fst-italic fw-lighter fs-5">E-mail: <b class="email">$data[3]</b> </h3>
                    <h3 class="mt-2 ms-4 fst-italic fw-lighter fs-5">Telefon: <b class="fs-4">$phone</b></h3>
                    <div class="social-media d-flex justify-content-center align-items-center flex-row m-3">
                        <img src="img/icons/facebook.png" class="m-2" alt="facebook">
                        <img src="img/icons/instagram.png" class="m-2" alt="facebook">
                        <img src="img/icons/github.png" class="m-2" alt="facebook">
                    </div>
                </div>
            </div>
        TEMPLATE;
    }
    public function userPromotion($data)
    {
        return <<< TEMPLATE
            <div class="promocja2">
                <div class=" kod d-flex justify-content-center align-items-center"> Kod: $data[0] </div>
                <img src="$data[1]" class="mb-3" alt="promocja">
            </div>
        TEMPLATE;
    }
    public function userNoPromotion()
    {
        return <<< TEMPLATE
            <div class="promocja2">
                <div class="d-flex justify-content-center align-items-center text-white">Nie ma promocji ciebie </div>
            </div>
        TEMPLATE;
    }
    public function paymentMethod($data)
    {
        return <<< TEMPLATE
            <option value="$data[0]">$data[1]</option>
        TEMPLATE;
    }
    public function userFavoritePizzas($data)
    {
        return <<< TEMPLATE
            <div data-aos="zoom-in-up" id="top-pizza" class="m-3 pt-4">
                <div class="h-100 d-flex justify-content-center align-items-center flex-column">
                    <h1 class="text-white text-center "> Ulubione pizze </h1>
                    <div class="d-flex justify-content-center align-items-center ps-5 pe-5 h-100">
                        <div class="podium-space d-flex justify-content-center align-items-center flex-column m-2">
                            <img data-aos="zoom-in-up" data-aos-delay="500" src="$data[1]" alt="mięsna">
                            <div id="drugie-podium" class="d-flex justify-content-center align-items-center fs-1 fw-bold">2</div>
                        </div>
                        <div class="podium-space d-flex justify-content-center align-items-center flex-column m-2">
                            <img data-aos="zoom-in-up" data-aos-delay="650" src="$data[0]" alt="peperoni">
                            <div id="pierwsze-podium" class="d-flex justify-content-center align-items-center fs-1 fw-bold">1</div>
                        </div>
                        <div class="podium-space d-flex justify-content-center align-items-center flex-column m-2">
                            <img data-aos="zoom-in-up" data-aos-delay="350" src="$data[2]" alt="hawajska">
                            <div id="trzecie-podium" class="d-flex justify-content-center align-items-center fs-1 fw-bold">3</div>
                        </div>
                    </div>
                </div>
            </div>
        TEMPLATE;
    }
    public function noUserFavoritePizzas()
    {
        return <<< TEMPLATE
        <div data-aos="zoom-in-up" id="top-pizza" class="m-3 p-4">
            <div class="d-flex justify-content-center align-items-center flex-column">
                <h1 class="text-white text-center "> Ulubione pizze </h1>
                <div class="d-flex justify-content-center align-items-center ps-5 pe-5 h-100 text-white">
                    Nie masz jeszcze ulubionych pizz
                </div>
            </div>
        </div>
        TEMPLATE;
    }
    public function userOrderHistory($rows)
    {
        return <<< TEMPLATE
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">DATA</th>
                    <th scope="col">ADRES</th>
                    <th scope="col">METODA</th>
                    <th scope="col">KWOTA</th>
                </tr>
                </thead>
                <tbody>
                    $rows
                </tbody>
            </table>
        TEMPLATE;
    }
    public function noUserOrderHistory()
    {
        return <<< TEMPLATE
        <div class="tabelka text-white align-items-center">
            Jeszcze nic nie zamówiłeś
        </div>
        TEMPLATE;
    }
    public function userOrderHistoryRow($data)
    {
        $date = date_create($data[1]);
        $date = date_format($date, "d.m.Y H:i");
        return <<< TEMPLATE
            <tr>
                <th scope="row">$data[0]</th>
                <td>$date</td>
                <td>$data[2]</td>
                <td>$data[3]</td>
                <td>$data[4] zł</td>
            </tr>
        TEMPLATE;
    }
    public function bestsellers($data)
    {
        return <<< TEMPLATE
            <DIV  class="container-fluid bestse" id="bestsellers">
                <div  data-aos="fade-up" data-aos-delay="300" class="top d-flex justify-content-center flex-wrap">
                    <div class="best d-flex justify-content-between align-items-center flex-column">
                        <img src="img/icons/laur2.png" alt="laur" class="laur">
                        <div class="best-zdjecie mt-2">
                        <img src="{$data[1]['image']}" alt="{$data[1]['name']}">
                        </div>
                        <div id="podium-drugie" class="mb-5 p-4 text-center text-white d-flex justify-content-center align-items-center fs-1 fw-bold">2. {$data[1]['name']}</div>
                    </div>
                    <div class="bestsellers d-flex justify-content-center align-items-center flex-column">
                        <img src="img/icons/laur1.png" alt="laur" class="laur2">
                        <div class="best-zdjecie">
                        <img src="{$data[0]['image']}" alt="{$data[0]['name']}">
                        </div>
                        <div id="podium-pierwsze" class="p-4 text-center text-white d-flex justify-content-center align-items-center fs-1 fw-bold">1. {$data[0]['name']}</div>
                    </div>
                    <div class="best d-flex justify-content-between align-items-center flex-column">
                        <img src="img/icons/laur3.png" alt="laur" class="laur">
                        <div class="best-zdjecie mt-2">
                        <img src="{$data[2]['image']}" alt="{$data[2]['name']}">
                        </div>
                        <div id="podium-trzecie" class="mb-5 p-4 text-center text-white d-flex justify-content-center align-items-center fs-1 fw-bold">3. {$data[2]['name']}</div>
                    </div>
                </div>
            </DIV>
            <div id="back2"></div>
        TEMPLATE;
    }
    public function message($type, $title, $message)
    {

        if ($type == "success") {
            $color = "alert-success";
        }

        if ($type == "error") {
            $color = "alert-danger";
        }

        if ($type == "info") {
            $color = "alert-primary";
        }

        return <<< TEMPLATE
            <div class="message alert $color alert-dismissible fade show" role="alert" style="display: none">
                <strong>$title</strong> $message
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <script>
                $(document).ready(function() {
                    $(".alert").slideDown(500);
                    $(".alert").delay(5000).slideUp(500, function() {
                        $(this).alert('close');
                    });
                });
            </script>
        TEMPLATE;
    }
    public function reviewButton()
    {
        return <<< TEMPLATE
            <div class="d-flex justify-content-center">
                <button class="call border rounded-5 text-white mt-3 p-3" data-bs-toggle="modal" data-bs-target="#opinion"> Napisz opinie </button>
            </div>
        TEMPLATE;
    }
    public function reviewForm()
    {
        return <<< TEMPLATE
            <!-- MODAL ============== OPINIA -->
            <div class="modal fade" id="opinion" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog  modal-dialog-centered ">
                <div class="modal-content">
                <div class="modal-header">
                <svg xmlns="http://www.w3.org/2000/svg" class="me-2" xmlns:xlink="http://www.w3.org/1999/xlink" fill="black" height="50px" width="50px" version="1.1" id="Capa_1" viewBox="0 0 448.898 448.898" xml:space="preserve">
                        <path id="XMLID_1423_" d="M110.646,307.839c0,3.866-3.134,7-7,7h-1.866c-3.866,0-7-3.134-7-7s3.134-7,7-7h1.866  C107.512,300.839,110.646,303.973,110.646,307.839z M67.648,243.445h-1.865c-3.866,0-7,3.134-7,7s3.134,7,7,7h1.865  c3.866,0,7-3.134,7-7S71.515,243.445,67.648,243.445z M135.299,186.951h-1.867c-3.866,0-7,3.134-7,7c0,3.866,3.134,7,7,7h1.867  c3.866,0,7-3.134,7-7C142.299,190.084,139.165,186.951,135.299,186.951z M178.345,95.274h-1.864c-3.866,0-7,3.134-7,7  c0,3.866,3.134,7,7,7h1.864c3.866,0,7-3.134,7-7C185.345,98.409,182.211,95.274,178.345,95.274z M265.215,173.492  c0-12.365,10.062-22.425,22.428-22.425c12.365,0,22.425,10.06,22.425,22.425c0,12.366-10.06,22.426-22.425,22.426  C275.276,195.917,265.215,185.857,265.215,173.492z M279.215,173.492c0,4.646,3.78,8.426,8.428,8.426  c4.646,0,8.425-3.78,8.425-8.426c0-4.646-3.779-8.425-8.425-8.425C282.995,165.066,279.215,168.846,279.215,173.492z   M128.421,154.241c0,12.366-10.061,22.426-22.427,22.426s-22.427-10.06-22.427-22.426s10.061-22.426,22.427-22.426  S128.421,141.875,128.421,154.241z M114.421,154.241c0-4.646-3.78-8.426-8.427-8.426s-8.427,3.78-8.427,8.426  c0,4.646,3.78,8.426,8.427,8.426S114.421,158.887,114.421,154.241z M75.207,186.951h-1.866c-3.866,0-7,3.134-7,7  c0,3.866,3.134,7,7,7h1.866c3.866,0,7-3.134,7-7C82.207,190.084,79.073,186.951,75.207,186.951z M212.961,109.274h1.866  c3.866,0,7-3.134,7-7c0-3.866-3.134-7-7-7h-1.866c-3.866,0-7,3.134-7,7C205.961,106.141,209.095,109.274,212.961,109.274z   M362.357,300.713c1.026,0.529,2.123,0.78,3.203,0.78c2.536,0,4.983-1.383,6.227-3.792l0.855-1.658  c1.772-3.436,0.425-7.658-3.012-9.431c-3.436-1.773-7.657-0.423-9.43,3.012l-0.855,1.658  C357.573,294.718,358.921,298.94,362.357,300.713z M296.04,380.534c1.855,3.215,0.872,7.29-2.173,9.32  c-0.217,0.161-0.444,0.31-0.684,0.448c-29.535,17.014-63.261,26.006-97.531,26.006c-35.34,0-68.525-9.421-97.171-25.879  c-0.222-0.099-0.44-0.21-0.655-0.334c-0.222-0.128-0.435-0.267-0.637-0.415C39.101,355.713,0,292.666,0,220.657  C0,148.646,39.1,85.6,97.188,51.632c0.203-0.148,0.416-0.287,0.639-0.416c0.216-0.124,0.435-0.236,0.656-0.334  c28.646-16.458,61.83-25.878,97.17-25.878s68.524,9.419,97.169,25.877c0.223,0.099,0.441,0.21,0.656,0.335  c0.223,0.128,0.435,0.267,0.638,0.415c58.089,33.968,97.19,97.015,97.19,169.024v0v0.001c0,3.866-3.134,7-7,7H225.305  c-0.049,0-0.098,0-0.146-0.001h-17.408l8.311,14.457c0.173,0.229,0.333,0.471,0.48,0.726L296.04,380.534z M280.067,381.543  l-90.483-157.399c-1.245-2.166-1.242-4.832,0.01-6.995c1.251-2.163,3.561-3.494,6.059-3.494h152.86  c-1.913-41.889-20.932-81.228-52.842-108.812c-2.925-2.528-3.246-6.949-0.718-9.874c2.529-2.926,6.947-3.248,9.874-0.718  c34.99,30.247,55.777,73.441,57.699,119.403h14.646c-2.348-61.702-35.62-115.614-84.724-146.658l-75.907,131.478  c-1.933,3.348-6.214,4.496-9.563,2.562c-3.348-1.933-4.495-6.214-2.563-9.562l61.618-106.729  c-21.635-11.212-45.826-17.111-70.383-17.111c-18.206,0-36.02,3.165-52.946,9.407c-3.631,1.338-7.652-0.519-8.989-4.146  c-1.338-3.627,0.519-7.652,4.146-8.99c18.482-6.815,37.926-10.271,57.79-10.271c27.013,0,53.624,6.542,77.39,18.975l7.294-12.634  c-25.3-13.388-54.122-20.974-84.684-20.974s-59.385,7.586-84.685,20.975l75.919,131.499c1.933,3.348,0.785,7.629-2.563,9.562  c-3.35,1.934-7.63,0.786-9.563-2.562L113.148,91.756c-36.889,23.611-61.756,61.431-68.621,104.75  c-0.605,3.818-4.194,6.427-8.01,5.818c-3.818-0.605-6.423-4.191-5.818-8.009c7.529-47.508,34.883-88.953,75.442-114.695  l-7.287-12.622C49.751,98.042,16.48,151.955,14.133,213.657h151.868c3.866,0,7,3.134,7,7s-3.134,7-7,7H42.792  c1.934,42.515,21.419,82.257,54.131,109.911c2.952,2.496,3.322,6.913,0.826,9.865c-2.495,2.952-6.912,3.324-9.865,0.827  c-35.866-30.321-57.164-73.956-59.105-120.603H14.133c2.348,61.702,35.618,115.613,84.722,146.657l75.907-131.478  c1.935-3.348,6.215-4.495,9.563-2.562s4.495,6.214,2.563,9.562l-61.618,106.728c21.635,11.214,45.828,17.113,70.384,17.113  c18.223,0,36.049-3.169,52.983-9.42c3.628-1.338,7.652,0.517,8.991,4.143c1.338,3.626-0.517,7.652-4.144,8.991  c-18.491,6.826-37.948,10.287-57.831,10.287c-27.012,0-53.625-6.543-77.391-18.978l-7.294,12.635  c25.3,13.388,54.123,20.975,84.685,20.975C225.125,402.309,254.161,395.147,280.067,381.543z M345.613,333.125  c1.027,0.531,2.125,0.782,3.206,0.782c2.535,0,4.981-1.381,6.226-3.789l0.856-1.658c1.773-3.435,0.428-7.658-3.008-9.432  c-3.437-1.776-7.656-0.427-9.432,3.007l-0.856,1.658C340.832,327.128,342.178,331.351,345.613,333.125z M319.987,299.362  c1.027,0.531,2.125,0.782,3.207,0.782c2.535,0,4.981-1.381,6.225-3.789l0.856-1.658c1.774-3.435,0.429-7.657-3.006-9.432  c-3.432-1.774-7.657-0.428-9.432,3.006l-0.856,1.658C315.207,293.365,316.553,297.588,319.987,299.362z M448.898,253.32  c0,35.017-9.362,69.376-27.075,99.365c-17.192,29.106-41.761,53.41-71.048,70.282c-1.072,0.618-3.202,1.298-5.315,0.693  c-1.786-0.511-3.321-1.66-4.247-3.27L247.18,256.809c-1.245-2.167-1.242-4.832,0.01-6.995c1.251-2.163,3.561-3.494,6.059-3.494  h188.65C445.765,246.32,448.898,249.454,448.898,253.32z M434.763,260.32H265.346l70.162,122.054  c35.927-22.916,60.66-59.542,68.285-101.506c0.691-3.803,4.323-6.329,8.14-5.636c3.804,0.691,6.326,4.335,5.635,8.139  c-8.363,46.026-35.573,86.168-75.075,111.152l7.298,12.697C400.485,375.336,432.438,320.095,434.763,260.32z M220.884,339.619h1.866  c3.866,0,7-3.134,7-7s-3.134-7-7-7h-1.866c-3.866,0-7,3.134-7,7S217.018,339.619,220.884,339.619z M199.384,335.786  c0,12.366-10.061,22.426-22.427,22.426c-12.364,0-22.424-10.06-22.424-22.426s10.06-22.426,22.424-22.426  C189.323,313.359,199.384,323.42,199.384,335.786z M185.384,335.786c0-4.646-3.78-8.426-8.427-8.426  c-4.645,0-8.424,3.78-8.424,8.426c0,4.646,3.779,8.426,8.424,8.426C181.604,344.211,185.384,340.432,185.384,335.786z   M186.537,279.413c0,3.866,3.134,7,7,7h1.865c3.866,0,7-3.134,7-7c0-3.866-3.134-7-7-7h-1.865  C189.671,272.413,186.537,275.547,186.537,279.413z M194.721,147.535h1.867c3.866,0,7-3.134,7-7s-3.134-7-7-7h-1.867  c-3.866,0-7,3.134-7,7S190.854,147.535,194.721,147.535z M139.072,262.14c0,12.366-10.061,22.426-22.427,22.426  c-12.365,0-22.425-10.06-22.425-22.426s10.06-22.426,22.425-22.426C129.012,239.714,139.072,249.774,139.072,262.14z   M125.072,262.14c0-4.646-3.78-8.426-8.427-8.426c-4.646,0-8.425,3.78-8.425,8.426s3.779,8.426,8.425,8.426  C121.292,270.565,125.072,266.786,125.072,262.14z" />
                </svg>
                <strong class="fs-5">Italiana</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex justify-content-center mt-2 mb-2">
                <form id="form1" action="php/user.php?action=review" method="POST" class="m-3 d-block">
                    <div class="form-floating mb-3" id="opinia">
                        <textarea name="review" maxlength="200" class="form-control" placeholder="opinia" id="floatingTextarea"></textarea>
                        <label for="floatingTextarea">Opinia</label>
                    </div>
                        <div class="d-flex justify-content-center align-items-center">
                            <button class="w-50 mb-3 mt-2 btn btn-lg rounded-3 guzik-login" type="submit">Wystaw Opinię</button>
                        </div>

                        <p class="fw-lighter text-center"> Prosimy o napisanie konstruktywnej opinni </p>
                        <div class="login-social d-flex justify-content-center">
                            <img src="img/icons/instagram2.png" class="ms-3 me-3" alt="insta">
                            <img src="img/icons/facebook2.png" class="ms-3 me-3" alt="facebook">
                            <img src="img/icons/social2.png" class="ms-3 me-3" alt="social">
                        </div>
                    </form>
                </div>
                </div>
            </div>
            </div>
            <!-- MODAL ============== OPINIA -->
        TEMPLATE;
    }
    public function review($data)
    {
        return <<< TEMPLATE
            <div>
                <div class="card text-center"><img class="card-img-top" src="$data[3]" alt="">
                <div class="card-body">
                    <h5>$data[0] $data[1]<br />
                    <span> Uzytkownik </span>
                    </h5>
                    <p class="card-text">$data[2]</p>
                </div>
                </div>
            </div>
        TEMPLATE;
    }
}
define("Template", new TemplateClass());
