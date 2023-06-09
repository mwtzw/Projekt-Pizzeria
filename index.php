<?php require "php/functions.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Italiana
  </title>
  <link href="libraries/bootstrap.min.css" rel="stylesheet">
  <script src="libraries/bootstrap.bundle.min.js"></script>
  <script src="libraries/jquery-3.6.4.js"></script>
  <link rel="stylesheet" href="style/style.css">
  <link rel="stylesheet" href="style/main.css">
  <link rel="stylesheet" href="style/jquery.nice-number.css">
  <script src="javascript/jquery.nice-number.js"></script>
  <link rel="stylesheet" href="libraries/aos.css" />
  <link rel="stylesheet" href="libraries/owl.carousel.min.css">
  <script src="libraries/owl.carousel.min.js"></script>
  <script src="libraries/popper.min.js"></script>
  <script src="libraries/bootstrap.min.js"></script>
  <link rel="shortcut icon" href="img/icons/favicon.svg" type="image/x-icon">
</head>

<body>
  <script src="libraries/aos.js"></script>
  <script>
    AOS.init();
  </script>

  <header>

    <!-- =====================MEUN======================= -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <div class="container py-3">
        <a href="." class="navbar-brand d-flex align-items-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="me-2" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#fff" height="50px" width="50px" version="1.1" id="Capa_1" viewBox="0 0 448.898 448.898" xml:space="preserve">
            <path id="XMLID_1423_" d="M110.646,307.839c0,3.866-3.134,7-7,7h-1.866c-3.866,0-7-3.134-7-7s3.134-7,7-7h1.866  C107.512,300.839,110.646,303.973,110.646,307.839z M67.648,243.445h-1.865c-3.866,0-7,3.134-7,7s3.134,7,7,7h1.865  c3.866,0,7-3.134,7-7S71.515,243.445,67.648,243.445z M135.299,186.951h-1.867c-3.866,0-7,3.134-7,7c0,3.866,3.134,7,7,7h1.867  c3.866,0,7-3.134,7-7C142.299,190.084,139.165,186.951,135.299,186.951z M178.345,95.274h-1.864c-3.866,0-7,3.134-7,7  c0,3.866,3.134,7,7,7h1.864c3.866,0,7-3.134,7-7C185.345,98.409,182.211,95.274,178.345,95.274z M265.215,173.492  c0-12.365,10.062-22.425,22.428-22.425c12.365,0,22.425,10.06,22.425,22.425c0,12.366-10.06,22.426-22.425,22.426  C275.276,195.917,265.215,185.857,265.215,173.492z M279.215,173.492c0,4.646,3.78,8.426,8.428,8.426  c4.646,0,8.425-3.78,8.425-8.426c0-4.646-3.779-8.425-8.425-8.425C282.995,165.066,279.215,168.846,279.215,173.492z   M128.421,154.241c0,12.366-10.061,22.426-22.427,22.426s-22.427-10.06-22.427-22.426s10.061-22.426,22.427-22.426  S128.421,141.875,128.421,154.241z M114.421,154.241c0-4.646-3.78-8.426-8.427-8.426s-8.427,3.78-8.427,8.426  c0,4.646,3.78,8.426,8.427,8.426S114.421,158.887,114.421,154.241z M75.207,186.951h-1.866c-3.866,0-7,3.134-7,7  c0,3.866,3.134,7,7,7h1.866c3.866,0,7-3.134,7-7C82.207,190.084,79.073,186.951,75.207,186.951z M212.961,109.274h1.866  c3.866,0,7-3.134,7-7c0-3.866-3.134-7-7-7h-1.866c-3.866,0-7,3.134-7,7C205.961,106.141,209.095,109.274,212.961,109.274z   M362.357,300.713c1.026,0.529,2.123,0.78,3.203,0.78c2.536,0,4.983-1.383,6.227-3.792l0.855-1.658  c1.772-3.436,0.425-7.658-3.012-9.431c-3.436-1.773-7.657-0.423-9.43,3.012l-0.855,1.658  C357.573,294.718,358.921,298.94,362.357,300.713z M296.04,380.534c1.855,3.215,0.872,7.29-2.173,9.32  c-0.217,0.161-0.444,0.31-0.684,0.448c-29.535,17.014-63.261,26.006-97.531,26.006c-35.34,0-68.525-9.421-97.171-25.879  c-0.222-0.099-0.44-0.21-0.655-0.334c-0.222-0.128-0.435-0.267-0.637-0.415C39.101,355.713,0,292.666,0,220.657  C0,148.646,39.1,85.6,97.188,51.632c0.203-0.148,0.416-0.287,0.639-0.416c0.216-0.124,0.435-0.236,0.656-0.334  c28.646-16.458,61.83-25.878,97.17-25.878s68.524,9.419,97.169,25.877c0.223,0.099,0.441,0.21,0.656,0.335  c0.223,0.128,0.435,0.267,0.638,0.415c58.089,33.968,97.19,97.015,97.19,169.024v0v0.001c0,3.866-3.134,7-7,7H225.305  c-0.049,0-0.098,0-0.146-0.001h-17.408l8.311,14.457c0.173,0.229,0.333,0.471,0.48,0.726L296.04,380.534z M280.067,381.543  l-90.483-157.399c-1.245-2.166-1.242-4.832,0.01-6.995c1.251-2.163,3.561-3.494,6.059-3.494h152.86  c-1.913-41.889-20.932-81.228-52.842-108.812c-2.925-2.528-3.246-6.949-0.718-9.874c2.529-2.926,6.947-3.248,9.874-0.718  c34.99,30.247,55.777,73.441,57.699,119.403h14.646c-2.348-61.702-35.62-115.614-84.724-146.658l-75.907,131.478  c-1.933,3.348-6.214,4.496-9.563,2.562c-3.348-1.933-4.495-6.214-2.563-9.562l61.618-106.729  c-21.635-11.212-45.826-17.111-70.383-17.111c-18.206,0-36.02,3.165-52.946,9.407c-3.631,1.338-7.652-0.519-8.989-4.146  c-1.338-3.627,0.519-7.652,4.146-8.99c18.482-6.815,37.926-10.271,57.79-10.271c27.013,0,53.624,6.542,77.39,18.975l7.294-12.634  c-25.3-13.388-54.122-20.974-84.684-20.974s-59.385,7.586-84.685,20.975l75.919,131.499c1.933,3.348,0.785,7.629-2.563,9.562  c-3.35,1.934-7.63,0.786-9.563-2.562L113.148,91.756c-36.889,23.611-61.756,61.431-68.621,104.75  c-0.605,3.818-4.194,6.427-8.01,5.818c-3.818-0.605-6.423-4.191-5.818-8.009c7.529-47.508,34.883-88.953,75.442-114.695  l-7.287-12.622C49.751,98.042,16.48,151.955,14.133,213.657h151.868c3.866,0,7,3.134,7,7s-3.134,7-7,7H42.792  c1.934,42.515,21.419,82.257,54.131,109.911c2.952,2.496,3.322,6.913,0.826,9.865c-2.495,2.952-6.912,3.324-9.865,0.827  c-35.866-30.321-57.164-73.956-59.105-120.603H14.133c2.348,61.702,35.618,115.613,84.722,146.657l75.907-131.478  c1.935-3.348,6.215-4.495,9.563-2.562s4.495,6.214,2.563,9.562l-61.618,106.728c21.635,11.214,45.828,17.113,70.384,17.113  c18.223,0,36.049-3.169,52.983-9.42c3.628-1.338,7.652,0.517,8.991,4.143c1.338,3.626-0.517,7.652-4.144,8.991  c-18.491,6.826-37.948,10.287-57.831,10.287c-27.012,0-53.625-6.543-77.391-18.978l-7.294,12.635  c25.3,13.388,54.123,20.975,84.685,20.975C225.125,402.309,254.161,395.147,280.067,381.543z M345.613,333.125  c1.027,0.531,2.125,0.782,3.206,0.782c2.535,0,4.981-1.381,6.226-3.789l0.856-1.658c1.773-3.435,0.428-7.658-3.008-9.432  c-3.437-1.776-7.656-0.427-9.432,3.007l-0.856,1.658C340.832,327.128,342.178,331.351,345.613,333.125z M319.987,299.362  c1.027,0.531,2.125,0.782,3.207,0.782c2.535,0,4.981-1.381,6.225-3.789l0.856-1.658c1.774-3.435,0.429-7.657-3.006-9.432  c-3.432-1.774-7.657-0.428-9.432,3.006l-0.856,1.658C315.207,293.365,316.553,297.588,319.987,299.362z M448.898,253.32  c0,35.017-9.362,69.376-27.075,99.365c-17.192,29.106-41.761,53.41-71.048,70.282c-1.072,0.618-3.202,1.298-5.315,0.693  c-1.786-0.511-3.321-1.66-4.247-3.27L247.18,256.809c-1.245-2.167-1.242-4.832,0.01-6.995c1.251-2.163,3.561-3.494,6.059-3.494  h188.65C445.765,246.32,448.898,249.454,448.898,253.32z M434.763,260.32H265.346l70.162,122.054  c35.927-22.916,60.66-59.542,68.285-101.506c0.691-3.803,4.323-6.329,8.14-5.636c3.804,0.691,6.326,4.335,5.635,8.139  c-8.363,46.026-35.573,86.168-75.075,111.152l7.298,12.697C400.485,375.336,432.438,320.095,434.763,260.32z M220.884,339.619h1.866  c3.866,0,7-3.134,7-7s-3.134-7-7-7h-1.866c-3.866,0-7,3.134-7,7S217.018,339.619,220.884,339.619z M199.384,335.786  c0,12.366-10.061,22.426-22.427,22.426c-12.364,0-22.424-10.06-22.424-22.426s10.06-22.426,22.424-22.426  C189.323,313.359,199.384,323.42,199.384,335.786z M185.384,335.786c0-4.646-3.78-8.426-8.427-8.426  c-4.645,0-8.424,3.78-8.424,8.426c0,4.646,3.779,8.426,8.424,8.426C181.604,344.211,185.384,340.432,185.384,335.786z   M186.537,279.413c0,3.866,3.134,7,7,7h1.865c3.866,0,7-3.134,7-7c0-3.866-3.134-7-7-7h-1.865  C189.671,272.413,186.537,275.547,186.537,279.413z M194.721,147.535h1.867c3.866,0,7-3.134,7-7s-3.134-7-7-7h-1.867  c-3.866,0-7,3.134-7,7S190.854,147.535,194.721,147.535z M139.072,262.14c0,12.366-10.061,22.426-22.427,22.426  c-12.365,0-22.425-10.06-22.425-22.426s10.06-22.426,22.425-22.426C129.012,239.714,139.072,249.774,139.072,262.14z   M125.072,262.14c0-4.646-3.78-8.426-8.427-8.426c-4.646,0-8.425,3.78-8.425,8.426s3.779,8.426,8.425,8.426  C121.292,270.565,125.072,266.786,125.072,262.14z" />
          </svg>
          <strong class="fs-5 text-white">Italiana</strong>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse-sm navbar-collapse collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">

          </ul>
          <div class="d-flex justify-content-center">
            <ul class="text-white navbar-nav mb-2 mb-md-0">
              <li class="nav-item m-1 d-flex justify-content-center align-items-center">
                <a href="menu.php" class="nav-link">Menu</a>
              </li>
              <li class="nav-item m-1 d-flex justify-content-center align-items-center">
                <a href="./#bestsellers" class="nav-link ">Bestsellery</a>
              </li>
              <li class="nav-item m-1 d-flex justify-content-center align-items-center">
                <a href="./#aboutUs" class="nav-link ">O nas</a>
              </li>
              <?php
              if (User->isNotLoggedIn()) {
                Content->generateLoginButton();
              }

              if (User->isLoggedIn()) {
                Content->generateBasketButton();
              }

              if (User->isLoggedIn()) {
                Content->generateUserMenu();
              }

              ?>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <!-- =====================MEUN======================= -->
    <?php if (User->isLoggedIn()) {
      Content->generateBasket();
    }
    ?>
  </header>
  </div>
  </div>
  </header>
  <?php Content->generateMessage(); ?>
  <!-- MAIN ================================ -->
  <div class="container-fluid main-banner">
    <div class="h-100 align-items-center d-flex justify-content-center flex-column">
      <div data-aos="zoom-in-up" class="align-middle d-flex justify-content-center align-items-center flex-column position-relative">
        <h1 id="menu">ITALIANA</h1>
        <h1 id="menu-opis"> Prawdziwa Włoska Pizzeria</h1>
      </div>

    </div>
  </div>
  <div data-aos="fade-up" class="container-fluid">
    <div id="test" class="d-flex justify-content-center">
      <div id="find" class="justify-content-center align-items-center d-flex flex-column">
        <h2 class="mb-3 fw-bold">
          <svg xmlns="http://www.w3.org/2000/svg" class="me-2" xmlns:xlink="http://www.w3.org/1999/xlink" fill="black" height="50px" width="50px" version="1.1" id="Capa_1" viewBox="0 0 448.898 448.898" xml:space="preserve">
            <path id="XMLID_1423_" d="M110.646,307.839c0,3.866-3.134,7-7,7h-1.866c-3.866,0-7-3.134-7-7s3.134-7,7-7h1.866  C107.512,300.839,110.646,303.973,110.646,307.839z M67.648,243.445h-1.865c-3.866,0-7,3.134-7,7s3.134,7,7,7h1.865  c3.866,0,7-3.134,7-7S71.515,243.445,67.648,243.445z M135.299,186.951h-1.867c-3.866,0-7,3.134-7,7c0,3.866,3.134,7,7,7h1.867  c3.866,0,7-3.134,7-7C142.299,190.084,139.165,186.951,135.299,186.951z M178.345,95.274h-1.864c-3.866,0-7,3.134-7,7  c0,3.866,3.134,7,7,7h1.864c3.866,0,7-3.134,7-7C185.345,98.409,182.211,95.274,178.345,95.274z M265.215,173.492  c0-12.365,10.062-22.425,22.428-22.425c12.365,0,22.425,10.06,22.425,22.425c0,12.366-10.06,22.426-22.425,22.426  C275.276,195.917,265.215,185.857,265.215,173.492z M279.215,173.492c0,4.646,3.78,8.426,8.428,8.426  c4.646,0,8.425-3.78,8.425-8.426c0-4.646-3.779-8.425-8.425-8.425C282.995,165.066,279.215,168.846,279.215,173.492z   M128.421,154.241c0,12.366-10.061,22.426-22.427,22.426s-22.427-10.06-22.427-22.426s10.061-22.426,22.427-22.426  S128.421,141.875,128.421,154.241z M114.421,154.241c0-4.646-3.78-8.426-8.427-8.426s-8.427,3.78-8.427,8.426  c0,4.646,3.78,8.426,8.427,8.426S114.421,158.887,114.421,154.241z M75.207,186.951h-1.866c-3.866,0-7,3.134-7,7  c0,3.866,3.134,7,7,7h1.866c3.866,0,7-3.134,7-7C82.207,190.084,79.073,186.951,75.207,186.951z M212.961,109.274h1.866  c3.866,0,7-3.134,7-7c0-3.866-3.134-7-7-7h-1.866c-3.866,0-7,3.134-7,7C205.961,106.141,209.095,109.274,212.961,109.274z   M362.357,300.713c1.026,0.529,2.123,0.78,3.203,0.78c2.536,0,4.983-1.383,6.227-3.792l0.855-1.658  c1.772-3.436,0.425-7.658-3.012-9.431c-3.436-1.773-7.657-0.423-9.43,3.012l-0.855,1.658  C357.573,294.718,358.921,298.94,362.357,300.713z M296.04,380.534c1.855,3.215,0.872,7.29-2.173,9.32  c-0.217,0.161-0.444,0.31-0.684,0.448c-29.535,17.014-63.261,26.006-97.531,26.006c-35.34,0-68.525-9.421-97.171-25.879  c-0.222-0.099-0.44-0.21-0.655-0.334c-0.222-0.128-0.435-0.267-0.637-0.415C39.101,355.713,0,292.666,0,220.657  C0,148.646,39.1,85.6,97.188,51.632c0.203-0.148,0.416-0.287,0.639-0.416c0.216-0.124,0.435-0.236,0.656-0.334  c28.646-16.458,61.83-25.878,97.17-25.878s68.524,9.419,97.169,25.877c0.223,0.099,0.441,0.21,0.656,0.335  c0.223,0.128,0.435,0.267,0.638,0.415c58.089,33.968,97.19,97.015,97.19,169.024v0v0.001c0,3.866-3.134,7-7,7H225.305  c-0.049,0-0.098,0-0.146-0.001h-17.408l8.311,14.457c0.173,0.229,0.333,0.471,0.48,0.726L296.04,380.534z M280.067,381.543  l-90.483-157.399c-1.245-2.166-1.242-4.832,0.01-6.995c1.251-2.163,3.561-3.494,6.059-3.494h152.86  c-1.913-41.889-20.932-81.228-52.842-108.812c-2.925-2.528-3.246-6.949-0.718-9.874c2.529-2.926,6.947-3.248,9.874-0.718  c34.99,30.247,55.777,73.441,57.699,119.403h14.646c-2.348-61.702-35.62-115.614-84.724-146.658l-75.907,131.478  c-1.933,3.348-6.214,4.496-9.563,2.562c-3.348-1.933-4.495-6.214-2.563-9.562l61.618-106.729  c-21.635-11.212-45.826-17.111-70.383-17.111c-18.206,0-36.02,3.165-52.946,9.407c-3.631,1.338-7.652-0.519-8.989-4.146  c-1.338-3.627,0.519-7.652,4.146-8.99c18.482-6.815,37.926-10.271,57.79-10.271c27.013,0,53.624,6.542,77.39,18.975l7.294-12.634  c-25.3-13.388-54.122-20.974-84.684-20.974s-59.385,7.586-84.685,20.975l75.919,131.499c1.933,3.348,0.785,7.629-2.563,9.562  c-3.35,1.934-7.63,0.786-9.563-2.562L113.148,91.756c-36.889,23.611-61.756,61.431-68.621,104.75  c-0.605,3.818-4.194,6.427-8.01,5.818c-3.818-0.605-6.423-4.191-5.818-8.009c7.529-47.508,34.883-88.953,75.442-114.695  l-7.287-12.622C49.751,98.042,16.48,151.955,14.133,213.657h151.868c3.866,0,7,3.134,7,7s-3.134,7-7,7H42.792  c1.934,42.515,21.419,82.257,54.131,109.911c2.952,2.496,3.322,6.913,0.826,9.865c-2.495,2.952-6.912,3.324-9.865,0.827  c-35.866-30.321-57.164-73.956-59.105-120.603H14.133c2.348,61.702,35.618,115.613,84.722,146.657l75.907-131.478  c1.935-3.348,6.215-4.495,9.563-2.562s4.495,6.214,2.563,9.562l-61.618,106.728c21.635,11.214,45.828,17.113,70.384,17.113  c18.223,0,36.049-3.169,52.983-9.42c3.628-1.338,7.652,0.517,8.991,4.143c1.338,3.626-0.517,7.652-4.144,8.991  c-18.491,6.826-37.948,10.287-57.831,10.287c-27.012,0-53.625-6.543-77.391-18.978l-7.294,12.635  c25.3,13.388,54.123,20.975,84.685,20.975C225.125,402.309,254.161,395.147,280.067,381.543z M345.613,333.125  c1.027,0.531,2.125,0.782,3.206,0.782c2.535,0,4.981-1.381,6.226-3.789l0.856-1.658c1.773-3.435,0.428-7.658-3.008-9.432  c-3.437-1.776-7.656-0.427-9.432,3.007l-0.856,1.658C340.832,327.128,342.178,331.351,345.613,333.125z M319.987,299.362  c1.027,0.531,2.125,0.782,3.207,0.782c2.535,0,4.981-1.381,6.225-3.789l0.856-1.658c1.774-3.435,0.429-7.657-3.006-9.432  c-3.432-1.774-7.657-0.428-9.432,3.006l-0.856,1.658C315.207,293.365,316.553,297.588,319.987,299.362z M448.898,253.32  c0,35.017-9.362,69.376-27.075,99.365c-17.192,29.106-41.761,53.41-71.048,70.282c-1.072,0.618-3.202,1.298-5.315,0.693  c-1.786-0.511-3.321-1.66-4.247-3.27L247.18,256.809c-1.245-2.167-1.242-4.832,0.01-6.995c1.251-2.163,3.561-3.494,6.059-3.494  h188.65C445.765,246.32,448.898,249.454,448.898,253.32z M434.763,260.32H265.346l70.162,122.054  c35.927-22.916,60.66-59.542,68.285-101.506c0.691-3.803,4.323-6.329,8.14-5.636c3.804,0.691,6.326,4.335,5.635,8.139  c-8.363,46.026-35.573,86.168-75.075,111.152l7.298,12.697C400.485,375.336,432.438,320.095,434.763,260.32z M220.884,339.619h1.866  c3.866,0,7-3.134,7-7s-3.134-7-7-7h-1.866c-3.866,0-7,3.134-7,7S217.018,339.619,220.884,339.619z M199.384,335.786  c0,12.366-10.061,22.426-22.427,22.426c-12.364,0-22.424-10.06-22.424-22.426s10.06-22.426,22.424-22.426  C189.323,313.359,199.384,323.42,199.384,335.786z M185.384,335.786c0-4.646-3.78-8.426-8.427-8.426  c-4.645,0-8.424,3.78-8.424,8.426c0,4.646,3.779,8.426,8.424,8.426C181.604,344.211,185.384,340.432,185.384,335.786z   M186.537,279.413c0,3.866,3.134,7,7,7h1.865c3.866,0,7-3.134,7-7c0-3.866-3.134-7-7-7h-1.865  C189.671,272.413,186.537,275.547,186.537,279.413z M194.721,147.535h1.867c3.866,0,7-3.134,7-7s-3.134-7-7-7h-1.867  c-3.866,0-7,3.134-7,7S190.854,147.535,194.721,147.535z M139.072,262.14c0,12.366-10.061,22.426-22.427,22.426  c-12.365,0-22.425-10.06-22.425-22.426s10.06-22.426,22.425-22.426C129.012,239.714,139.072,249.774,139.072,262.14z   M125.072,262.14c0-4.646-3.78-8.426-8.427-8.426c-4.646,0-8.425,3.78-8.425,8.426s3.779,8.426,8.425,8.426  C121.292,270.565,125.072,266.786,125.072,262.14z" />
          </svg>
          <strong class="fs-3">Italiana</strong>
        </h2>
        <div id="locals" class="d-flex flex-column">
          <div class="d-flex">
            <button class="guziki active2"> Warszawa </button>
            <button class="guziki fw-lighter"> Kraków </button>
            <button class="guziki fw-lighter"> Poznań </button>
            <button class="guziki fw-lighter"> Wyszków </button>
          </div>
          <!-- INFO  -->
          <div class="local-info d-flex justify-content-center align-items-center h-100">
            <div class="w-50 d-flex justify-content-center align-items-center flex-column">
              <img loading="lazy" src="img/icons/phone.png" class="mb-3" alt="phone">
              <h1 class="fw-bold fs-4"> Numer Telefonu</h1>
              <h1 class="fw-light fs-4">tel: 702-304-302</h1>
              <button class="call2 border rounded-5 w-50 text-white mt-1" disabled> Zadzwoń </button>
            </div>
            <div class="w-50 d-flex justify-content-center align-items-center flex-column">
              <img loading="lazy" src="img/icons/location.png" class="mb-3" alt="location">
              <h1 class="fw-bold fs-4"> Warszawa</h1>
              <h1 class="fw-light fs-4"> ul. Kapucyńska 32</h1>
              <button class="call border rounded-5 w-50 text-white mt-1" data-bs-toggle="modal" data-bs-target="#staticBackdrop"> Odwiedź </button>
            </div>
          </div>


          <div class="local-info d-none justify-content-center align-items-center h-100">
            <div class="w-50 d-flex justify-content-center align-items-center flex-column">
              <img loading="lazy" src="img/icons/phone.png" class="mb-3" alt="phone">
              <h1 class="fw-bold fs-4"> Numer Telefonu</h1>
              <h1 class="fw-light fs-4">tel: 603-203-321</h1>
              <button class="call2 border rounded-5 w-50 text-white mt-1" disabled> Zadzwoń </button>
            </div>
            <div class="w-50 d-flex justify-content-center align-items-center flex-column">
              <img loading="lazy" src="img/icons/location.png" class="mb-3" alt="location">
              <h1 class="fw-bold fs-4"> Kraków</h1>
              <h1 class="fw-light fs-4"> ul. Floriańska 57</h1>
              <button class="call border rounded-5 w-50 text-white mt-1" data-bs-toggle="modal" data-bs-target="#staticBackdrop2"> Odwiedź </button>
            </div>
          </div>

          <div class="local-info d-none justify-content-center align-items-center h-100">
            <div class="w-50 d-flex justify-content-center align-items-center flex-column">
              <img loading="lazy" src="img/icons/phone.png" class="mb-3" alt="phone">
              <h1 class="fw-bold fs-4"> Numer Telefonu</h1>
              <h1 class="fw-light fs-4">tel: 032-321-532</h1>
              <button class="call2 border rounded-5 w-50 text-white mt-1" disabled> Zadzwoń </button>
            </div>
            <div class="w-50 d-flex justify-content-center align-items-center flex-column">
              <img loading="lazy" src="img/icons/location.png" class="mb-3" alt="location">
              <h1 class="fw-bold fs-4"> Poznań</h1>
              <h1 class="fw-light fs-4"> ul. Kramarska 234</h1>
              <button class="call border rounded-5 w-50 text-white mt-1" data-bs-toggle="modal" data-bs-target="#staticBackdrop3"> Odwiedź </button>
            </div>
          </div>


          <div class="local-info d-none justify-content-center align-items-center h-100">
            <div class="w-50 d-flex justify-content-center align-items-center flex-column">
              <img loading="lazy" src="img/icons/phone.png" class="mb-3" alt="phone">
              <h1 class="fw-bold fs-4"> Numer Telefonu</h1>
              <h1 class="fw-light fs-4">tel: 200-300-400</h1>
              <button class="call2 border rounded-5 w-50 text-white mt-1" disabled> Zadzwoń </button>
            </div>
            <div class="w-50 d-flex justify-content-center align-items-center flex-column">
              <img loading="lazy" src="img/icons/location.png" class="mb-3" alt="location">
              <h1 class="fw-bold fs-4"> Wyszków</h1>
              <h1 class="fw-light fs-4"> ul. Matejki 9</h1>
              <button class="call border rounded-5 w-50 text-white mt-1" data-bs-toggle="modal" data-bs-target="#staticBackdrop4"> Odwiedź </button>
              <!-- INFO  -->
            </div>
          </div>
        </div>
        <div id="zam-online">
        </div>
      </div>
    </div>
  </div>

  <!-- BESTSELLERY ================================ -->
  <?php Content->generateBestsellers() ?>
  <!-- BESTSELLERY ================================ -->

  <!-- GALERIA ZDJĘĆ  -->
  <div data-aos="fade-up" data-aos-delay="300" class="container-sm gallery mt-2 mb-3 w-50">
    <div class="mt-5 mb-5 carousel-container position-relative row">
      <h1 class="text-center mb-5 nasze-pizze "> Nasze Pizzerie</h1>
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-slide-number="0">
            <img loading="lazy" src="img/galeria/pizzeria2.jpg" class="d-block w-100" alt="..." data-toggle="lightbox" data-gallery="example-gallery">
          </div>
          <div class="carousel-item" data-slide-number="1">
            <img loading="lazy" src="img/galeria/pizzeria1.jpg" class="d-block w-100" alt="..." data-toggle="lightbox" data-gallery="example-gallery">
          </div>
          <div class="carousel-item" data-slide-number="2">
            <img loading="lazy" src="img/galeria/pizzeria3.jpg" class="d-block w-100" alt="..." data-toggle="lightbox" data-gallery="example-gallery">
          </div>
          <div class="carousel-item" data-slide-number="3">
            <img loading="lazy" src="img/galeria/pizzeria4.jpg" class="d-block w-100" alt="..." data-toggle="lightbox" data-gallery="example-gallery">
          </div>
          <div class="carousel-item" data-slide-number="4">
            <img loading="lazy" src="img/galeria/pizzeria5.jpg" class="d-block w-100" alt="..." data-toggle="lightbox" data-gallery="example-gallery">
          </div>
          <div class="carousel-item" data-slide-number="5">
            <img loading="lazy" src="img/galeria/pizzeria6.jpg" class="d-block w-100" alt="..." data-toggle="lightbox" data-gallery="example-gallery">
          </div>

        </div>
      </div>

      <!-- Carousel Navigation -->
      <div id="carousel-thumbs" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row mx-0">
              <div id="carousel-selector-0" class="thumb col-4 col-sm-2 px-1 py-2 selected" data-target="#myCarousel" data-slide-to="0">
                <img loading="lazy" src="img/galeria/pizzeria2.jpg" class="img-fluid" alt="...">
              </div>
              <div id="carousel-selector-1" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="1">
                <img loading="lazy" src="img/galeria/pizzeria1.jpg" class="img-fluid" alt="...">
              </div>
              <div id="carousel-selector-2" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="2">
                <img loading="lazy" src="img/galeria/pizzeria3.jpg" class="img-fluid" alt="...">
              </div>
              <div id="carousel-selector-3" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="3">
                <img loading="lazy" src="img/galeria/pizzeria4.jpg" class="img-fluid" alt="...">
              </div>
              <div id="carousel-selector-4" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="4">
                <img loading="lazy" src="img/galeria/pizzeria5.jpg" class="img-fluid" alt="...">
              </div>
              <div id="carousel-selector-5" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="5">
                <img loading="lazy" src="img/galeria/pizzeria6.jpg" class="img-fluid" alt="...">
              </div>
            </div>
          </div>

        </div>

      </div>

    </div>
  </div>
  <!-- GALERIA ZDJĘĆ  -->

  <!-- ------------------O NAS ----------------------- -->

  <div id="aboutUs" class="aboutus container-fluid d-flex flex-wrap align-items-center">
    <div class="container aboutus-content">
      <div data-aos="fade-up" data-aos-delay="300" class="mb-5 d-flex justify-content-center flex-wrap ">
        <div class="aboutus-photo d-flex justify-content-center align-items-center ">
          <img loading="lazy" src="img/background/historia.jpg" alt="aboutuusphoot">
        </div>
        <div class="aboutus-description d-flex justify-content-center align-items-start flex-column">
          <h1> Historia Italiany</h1>
          <p class="fw-lighter"> W małym, urokliwym miasteczku W Polsce, otwarta została pizzeria o nazwie "Italiana". Była prowadzona przez starego, uśmiechniętego Włocha imieniem Luigi.
            Luigi urodził się i wychował w rodzinie z długą tradycją wypieku pizzy.
            Pizzeria "La Piazza" stała się miejscem, gdzie ludzie ze wszystkich okolicznych wiosek
            i miast przychodzili, by delektować się prawdziwie włoską pizzą. Pianista grający na fortepianie
            w kącie lokalu tworzył przyjemną atmosferę, a zapach świeżo pieczonej pizzy unosił się w powietrzu.
            Luigi słynął z niezwykłego talentu do tworzenia wyjątkowych kompozycji smaków na swoich daniach.
            Jego sosy pomidorowe były długo gotowane, aż do uzyskania perfekcyjnej konsystencji, a składniki
            takie jak świeże owoce morza, aromatyczne zioła i oliwki pochodziły z lokalnych upraw i ryneczków.</p>
        </div>
      </div>
      <div data-aos="fade-up" data-aos-delay="300" class="d-flex mt-5 justify-content-center flex-wrap flex-row-reverse">
        <div class="aboutus-photo d-flex justify-content-center align-items-center flex-wrap">
          <img loading="lazy" src="img/background/ciasto.jpg" alt="aboutuusphoot">
        </div>
        <div class="aboutus-description d-flex justify-content-center align-items-start flex-column">
          <h1> Włoskie Ciasto</h1>
          <p class="fw-lighter"> Cienkie ciasto w pizzerii, często nazywane także jako ciasto na pizzę w stylu neapolitańskim, to rodzaj ciasta używanego do przygotowywania autentycznych włoskich pizz. Jest charakterystyczne ze względu na swoją cienką, elastyczną i chrupiącą konsystencję, która jest jednym z kluczowych elementów prawdziwej pizzy neapolitańskiej.

            Aby przygotować cienkie ciasto w pizzerii, potrzebne są podstawowe składniki, takie jak mąka pszenna, woda, drożdże, sól i ewentualnie oliwa z oliwek. Składniki są dokładnie wymieszane, a następnie wyrabiane, aby uzyskać elastyczne i jednolite ciasto. Ciasto jest wałkowane na okrągłą formę, a jego grubość jest zwykle utrzymana na minimalnym poziomie, zazwyczaj wynoszącym około 2-3 mm.</p>
        </div>
      </div>
    </div>
  </div>
  <div id="back3"> </div>

  <!-- ------------------O NAS ----------------------- -->

  <!-- OPINIE KARUZELA============================================ -->
  <div class="gtco-testimonials mt-5">
    <div class="owl-carousel owl-carousel1 owl-theme">
      <?php Content->generateReviews() ?>
    </div>
  </div>
  <?php if (User->isLoggedIn()) Content->generateReviewButton(); ?>

  <!-- OPINIE KARUZELA============================================ -->
  <!-- stopka =================================================== -->
  <div id="stopka">
    <div class="d-flex justify-content-center align-items-center flex-wrap">
      <div class="stopkablock text-white d-flex flex-column ">
        <h2 class="ms-4 mt-3"> Nasze Pizzerie</h2>
        <ul class="fs-5 fst-italic">
          <li> Poznań</li>
          <li> Warszawa</li>
          <li> Wyszków</li>
          <li> Katowice</li>
          <li> Kraków</li>
        </ul>
      </div>
      <div class="stopkablock text-white d-flex flex-column ">
        <h2 class="ms-4 mt-3"> Informacje</h2>
        <ul class="fs-5 fst-italic">
          <a href="regulamin.html" style="color:white;">
            <li> Regulamin</li>
          </a>
          <li> Promocje</li>
          <a href="kontakt.html" style="color:white;">
            <li> Kontakt</li>
          </a>
          <li> Polityka Prywatności</li>
        </ul>
      </div>

      <div class="stopkablock text-white d-flex flex-column">
        <h2 class="ms-4 mt-3"> Znajdziesz nas</h2>
        <ul class="fs-5 fst-italic">
          <li> Instagram</li>
          <li> Tiktok</li>
          <li> Facebook</li>
          <a style="text-decoration: none;" href="https://github.com/Matitek24">
            <img loading="lazy" class="m-2 mt-3" src="img/icons/instagram.png" alt="insta">
          </a>
          <a style="text-decoration: none;" href="https://github.com/Matitek24">
            <img loading="lazy" class="m-2 mt-3" src="img/icons/tiktok.png" alt="insta">
          </a>
          <a style="text-decoration: none;" href="https://github.com/Matitek24">
            <img loading="lazy" class="m-2 mt-3" src="img/icons/facebook.png" alt="insta">
          </a>
        </ul>
      </div>
    </div>
    <div id="authors" class="d-flex justify-content-center text-white">
      <h4 class="fw-lighter"> Mateusz Skrzypek <a style="text-decoration: none;" href="https://github.com/Matitek24"><img loading="lazy" src="img/icons/github.png" alt="github"> </a>
        |<a style="text-decoration: none;" href="https://github.com/mwtzw"> <img loading="lazy" src="img/icons/github.png" alt="github"> </a>Mateusz Wyszogrodzki </h4>

    </div>
  </div>
  <!-- stopka =================================================== -->
  <script src="javascript/mainscript.js"> </script>
  <script src="javascript/karuzela.js"> </script>
  <script src="javascript/galeria.js"> </script>
  <!-- MAIN -->

  <?php
  if (User->isNotLoggedIn()) {
    Content->generateLoginForm();
  }
  if (User->isLoggedIn()) Content->generateReviewForm();
  ?>

  <!-- MODAL LOKALIZACJI -->
  <div class="modal fade" id="staticBackdrop" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog ">
      <div class="modal-content">
        <div class="modal-header">
          <svg xmlns="http://www.w3.org/2000/svg" class="me-2" xmlns:xlink="http://www.w3.org/1999/xlink" fill="black" height="50px" width="50px" version="1.1" id="Capa_1" viewBox="0 0 448.898 448.898" xml:space="preserve">
            <path id="XMLID_1423_" d="M110.646,307.839c0,3.866-3.134,7-7,7h-1.866c-3.866,0-7-3.134-7-7s3.134-7,7-7h1.866  C107.512,300.839,110.646,303.973,110.646,307.839z M67.648,243.445h-1.865c-3.866,0-7,3.134-7,7s3.134,7,7,7h1.865  c3.866,0,7-3.134,7-7S71.515,243.445,67.648,243.445z M135.299,186.951h-1.867c-3.866,0-7,3.134-7,7c0,3.866,3.134,7,7,7h1.867  c3.866,0,7-3.134,7-7C142.299,190.084,139.165,186.951,135.299,186.951z M178.345,95.274h-1.864c-3.866,0-7,3.134-7,7  c0,3.866,3.134,7,7,7h1.864c3.866,0,7-3.134,7-7C185.345,98.409,182.211,95.274,178.345,95.274z M265.215,173.492  c0-12.365,10.062-22.425,22.428-22.425c12.365,0,22.425,10.06,22.425,22.425c0,12.366-10.06,22.426-22.425,22.426  C275.276,195.917,265.215,185.857,265.215,173.492z M279.215,173.492c0,4.646,3.78,8.426,8.428,8.426  c4.646,0,8.425-3.78,8.425-8.426c0-4.646-3.779-8.425-8.425-8.425C282.995,165.066,279.215,168.846,279.215,173.492z   M128.421,154.241c0,12.366-10.061,22.426-22.427,22.426s-22.427-10.06-22.427-22.426s10.061-22.426,22.427-22.426  S128.421,141.875,128.421,154.241z M114.421,154.241c0-4.646-3.78-8.426-8.427-8.426s-8.427,3.78-8.427,8.426  c0,4.646,3.78,8.426,8.427,8.426S114.421,158.887,114.421,154.241z M75.207,186.951h-1.866c-3.866,0-7,3.134-7,7  c0,3.866,3.134,7,7,7h1.866c3.866,0,7-3.134,7-7C82.207,190.084,79.073,186.951,75.207,186.951z M212.961,109.274h1.866  c3.866,0,7-3.134,7-7c0-3.866-3.134-7-7-7h-1.866c-3.866,0-7,3.134-7,7C205.961,106.141,209.095,109.274,212.961,109.274z   M362.357,300.713c1.026,0.529,2.123,0.78,3.203,0.78c2.536,0,4.983-1.383,6.227-3.792l0.855-1.658  c1.772-3.436,0.425-7.658-3.012-9.431c-3.436-1.773-7.657-0.423-9.43,3.012l-0.855,1.658  C357.573,294.718,358.921,298.94,362.357,300.713z M296.04,380.534c1.855,3.215,0.872,7.29-2.173,9.32  c-0.217,0.161-0.444,0.31-0.684,0.448c-29.535,17.014-63.261,26.006-97.531,26.006c-35.34,0-68.525-9.421-97.171-25.879  c-0.222-0.099-0.44-0.21-0.655-0.334c-0.222-0.128-0.435-0.267-0.637-0.415C39.101,355.713,0,292.666,0,220.657  C0,148.646,39.1,85.6,97.188,51.632c0.203-0.148,0.416-0.287,0.639-0.416c0.216-0.124,0.435-0.236,0.656-0.334  c28.646-16.458,61.83-25.878,97.17-25.878s68.524,9.419,97.169,25.877c0.223,0.099,0.441,0.21,0.656,0.335  c0.223,0.128,0.435,0.267,0.638,0.415c58.089,33.968,97.19,97.015,97.19,169.024v0v0.001c0,3.866-3.134,7-7,7H225.305  c-0.049,0-0.098,0-0.146-0.001h-17.408l8.311,14.457c0.173,0.229,0.333,0.471,0.48,0.726L296.04,380.534z M280.067,381.543  l-90.483-157.399c-1.245-2.166-1.242-4.832,0.01-6.995c1.251-2.163,3.561-3.494,6.059-3.494h152.86  c-1.913-41.889-20.932-81.228-52.842-108.812c-2.925-2.528-3.246-6.949-0.718-9.874c2.529-2.926,6.947-3.248,9.874-0.718  c34.99,30.247,55.777,73.441,57.699,119.403h14.646c-2.348-61.702-35.62-115.614-84.724-146.658l-75.907,131.478  c-1.933,3.348-6.214,4.496-9.563,2.562c-3.348-1.933-4.495-6.214-2.563-9.562l61.618-106.729  c-21.635-11.212-45.826-17.111-70.383-17.111c-18.206,0-36.02,3.165-52.946,9.407c-3.631,1.338-7.652-0.519-8.989-4.146  c-1.338-3.627,0.519-7.652,4.146-8.99c18.482-6.815,37.926-10.271,57.79-10.271c27.013,0,53.624,6.542,77.39,18.975l7.294-12.634  c-25.3-13.388-54.122-20.974-84.684-20.974s-59.385,7.586-84.685,20.975l75.919,131.499c1.933,3.348,0.785,7.629-2.563,9.562  c-3.35,1.934-7.63,0.786-9.563-2.562L113.148,91.756c-36.889,23.611-61.756,61.431-68.621,104.75  c-0.605,3.818-4.194,6.427-8.01,5.818c-3.818-0.605-6.423-4.191-5.818-8.009c7.529-47.508,34.883-88.953,75.442-114.695  l-7.287-12.622C49.751,98.042,16.48,151.955,14.133,213.657h151.868c3.866,0,7,3.134,7,7s-3.134,7-7,7H42.792  c1.934,42.515,21.419,82.257,54.131,109.911c2.952,2.496,3.322,6.913,0.826,9.865c-2.495,2.952-6.912,3.324-9.865,0.827  c-35.866-30.321-57.164-73.956-59.105-120.603H14.133c2.348,61.702,35.618,115.613,84.722,146.657l75.907-131.478  c1.935-3.348,6.215-4.495,9.563-2.562s4.495,6.214,2.563,9.562l-61.618,106.728c21.635,11.214,45.828,17.113,70.384,17.113  c18.223,0,36.049-3.169,52.983-9.42c3.628-1.338,7.652,0.517,8.991,4.143c1.338,3.626-0.517,7.652-4.144,8.991  c-18.491,6.826-37.948,10.287-57.831,10.287c-27.012,0-53.625-6.543-77.391-18.978l-7.294,12.635  c25.3,13.388,54.123,20.975,84.685,20.975C225.125,402.309,254.161,395.147,280.067,381.543z M345.613,333.125  c1.027,0.531,2.125,0.782,3.206,0.782c2.535,0,4.981-1.381,6.226-3.789l0.856-1.658c1.773-3.435,0.428-7.658-3.008-9.432  c-3.437-1.776-7.656-0.427-9.432,3.007l-0.856,1.658C340.832,327.128,342.178,331.351,345.613,333.125z M319.987,299.362  c1.027,0.531,2.125,0.782,3.207,0.782c2.535,0,4.981-1.381,6.225-3.789l0.856-1.658c1.774-3.435,0.429-7.657-3.006-9.432  c-3.432-1.774-7.657-0.428-9.432,3.006l-0.856,1.658C315.207,293.365,316.553,297.588,319.987,299.362z M448.898,253.32  c0,35.017-9.362,69.376-27.075,99.365c-17.192,29.106-41.761,53.41-71.048,70.282c-1.072,0.618-3.202,1.298-5.315,0.693  c-1.786-0.511-3.321-1.66-4.247-3.27L247.18,256.809c-1.245-2.167-1.242-4.832,0.01-6.995c1.251-2.163,3.561-3.494,6.059-3.494  h188.65C445.765,246.32,448.898,249.454,448.898,253.32z M434.763,260.32H265.346l70.162,122.054  c35.927-22.916,60.66-59.542,68.285-101.506c0.691-3.803,4.323-6.329,8.14-5.636c3.804,0.691,6.326,4.335,5.635,8.139  c-8.363,46.026-35.573,86.168-75.075,111.152l7.298,12.697C400.485,375.336,432.438,320.095,434.763,260.32z M220.884,339.619h1.866  c3.866,0,7-3.134,7-7s-3.134-7-7-7h-1.866c-3.866,0-7,3.134-7,7S217.018,339.619,220.884,339.619z M199.384,335.786  c0,12.366-10.061,22.426-22.427,22.426c-12.364,0-22.424-10.06-22.424-22.426s10.06-22.426,22.424-22.426  C189.323,313.359,199.384,323.42,199.384,335.786z M185.384,335.786c0-4.646-3.78-8.426-8.427-8.426  c-4.645,0-8.424,3.78-8.424,8.426c0,4.646,3.779,8.426,8.424,8.426C181.604,344.211,185.384,340.432,185.384,335.786z   M186.537,279.413c0,3.866,3.134,7,7,7h1.865c3.866,0,7-3.134,7-7c0-3.866-3.134-7-7-7h-1.865  C189.671,272.413,186.537,275.547,186.537,279.413z M194.721,147.535h1.867c3.866,0,7-3.134,7-7s-3.134-7-7-7h-1.867  c-3.866,0-7,3.134-7,7S190.854,147.535,194.721,147.535z M139.072,262.14c0,12.366-10.061,22.426-22.427,22.426  c-12.365,0-22.425-10.06-22.425-22.426s10.06-22.426,22.425-22.426C129.012,239.714,139.072,249.774,139.072,262.14z   M125.072,262.14c0-4.646-3.78-8.426-8.427-8.426c-4.646,0-8.425,3.78-8.425,8.426s3.779,8.426,8.425,8.426  C121.292,270.565,125.072,266.786,125.072,262.14z" />
          </svg>
          <strong class="fs-5">Italiana</strong>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body d-flex justify-content-center mt-2 mb-2">
          <iframe loading="lazy" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2442.801315114377!2d21.010373899999998!3d52.246992399999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471ecc65b7036bb9%3A0x220526641b287b21!2sKapucy%C5%84ska%2032%2C%2000-245%20Warszawa!5e0!3m2!1spl!2spl!4v1681335616736!5m2!1spl!2spl" width="600" height="450" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="modal-footer d-flex justify-content-center">
          <h1 class="fs-3 fw-light">Warszawa, Kapucyńska 32</h1>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="staticBackdrop2" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog ">
      <div class="modal-content">
        <div class="modal-header">
          <svg xmlns="http://www.w3.org/2000/svg" class="me-2" xmlns:xlink="http://www.w3.org/1999/xlink" fill="black" height="50px" width="50px" version="1.1" id="Capa_1" viewBox="0 0 448.898 448.898" xml:space="preserve">
            <path id="XMLID_1423_" d="M110.646,307.839c0,3.866-3.134,7-7,7h-1.866c-3.866,0-7-3.134-7-7s3.134-7,7-7h1.866  C107.512,300.839,110.646,303.973,110.646,307.839z M67.648,243.445h-1.865c-3.866,0-7,3.134-7,7s3.134,7,7,7h1.865  c3.866,0,7-3.134,7-7S71.515,243.445,67.648,243.445z M135.299,186.951h-1.867c-3.866,0-7,3.134-7,7c0,3.866,3.134,7,7,7h1.867  c3.866,0,7-3.134,7-7C142.299,190.084,139.165,186.951,135.299,186.951z M178.345,95.274h-1.864c-3.866,0-7,3.134-7,7  c0,3.866,3.134,7,7,7h1.864c3.866,0,7-3.134,7-7C185.345,98.409,182.211,95.274,178.345,95.274z M265.215,173.492  c0-12.365,10.062-22.425,22.428-22.425c12.365,0,22.425,10.06,22.425,22.425c0,12.366-10.06,22.426-22.425,22.426  C275.276,195.917,265.215,185.857,265.215,173.492z M279.215,173.492c0,4.646,3.78,8.426,8.428,8.426  c4.646,0,8.425-3.78,8.425-8.426c0-4.646-3.779-8.425-8.425-8.425C282.995,165.066,279.215,168.846,279.215,173.492z   M128.421,154.241c0,12.366-10.061,22.426-22.427,22.426s-22.427-10.06-22.427-22.426s10.061-22.426,22.427-22.426  S128.421,141.875,128.421,154.241z M114.421,154.241c0-4.646-3.78-8.426-8.427-8.426s-8.427,3.78-8.427,8.426  c0,4.646,3.78,8.426,8.427,8.426S114.421,158.887,114.421,154.241z M75.207,186.951h-1.866c-3.866,0-7,3.134-7,7  c0,3.866,3.134,7,7,7h1.866c3.866,0,7-3.134,7-7C82.207,190.084,79.073,186.951,75.207,186.951z M212.961,109.274h1.866  c3.866,0,7-3.134,7-7c0-3.866-3.134-7-7-7h-1.866c-3.866,0-7,3.134-7,7C205.961,106.141,209.095,109.274,212.961,109.274z   M362.357,300.713c1.026,0.529,2.123,0.78,3.203,0.78c2.536,0,4.983-1.383,6.227-3.792l0.855-1.658  c1.772-3.436,0.425-7.658-3.012-9.431c-3.436-1.773-7.657-0.423-9.43,3.012l-0.855,1.658  C357.573,294.718,358.921,298.94,362.357,300.713z M296.04,380.534c1.855,3.215,0.872,7.29-2.173,9.32  c-0.217,0.161-0.444,0.31-0.684,0.448c-29.535,17.014-63.261,26.006-97.531,26.006c-35.34,0-68.525-9.421-97.171-25.879  c-0.222-0.099-0.44-0.21-0.655-0.334c-0.222-0.128-0.435-0.267-0.637-0.415C39.101,355.713,0,292.666,0,220.657  C0,148.646,39.1,85.6,97.188,51.632c0.203-0.148,0.416-0.287,0.639-0.416c0.216-0.124,0.435-0.236,0.656-0.334  c28.646-16.458,61.83-25.878,97.17-25.878s68.524,9.419,97.169,25.877c0.223,0.099,0.441,0.21,0.656,0.335  c0.223,0.128,0.435,0.267,0.638,0.415c58.089,33.968,97.19,97.015,97.19,169.024v0v0.001c0,3.866-3.134,7-7,7H225.305  c-0.049,0-0.098,0-0.146-0.001h-17.408l8.311,14.457c0.173,0.229,0.333,0.471,0.48,0.726L296.04,380.534z M280.067,381.543  l-90.483-157.399c-1.245-2.166-1.242-4.832,0.01-6.995c1.251-2.163,3.561-3.494,6.059-3.494h152.86  c-1.913-41.889-20.932-81.228-52.842-108.812c-2.925-2.528-3.246-6.949-0.718-9.874c2.529-2.926,6.947-3.248,9.874-0.718  c34.99,30.247,55.777,73.441,57.699,119.403h14.646c-2.348-61.702-35.62-115.614-84.724-146.658l-75.907,131.478  c-1.933,3.348-6.214,4.496-9.563,2.562c-3.348-1.933-4.495-6.214-2.563-9.562l61.618-106.729  c-21.635-11.212-45.826-17.111-70.383-17.111c-18.206,0-36.02,3.165-52.946,9.407c-3.631,1.338-7.652-0.519-8.989-4.146  c-1.338-3.627,0.519-7.652,4.146-8.99c18.482-6.815,37.926-10.271,57.79-10.271c27.013,0,53.624,6.542,77.39,18.975l7.294-12.634  c-25.3-13.388-54.122-20.974-84.684-20.974s-59.385,7.586-84.685,20.975l75.919,131.499c1.933,3.348,0.785,7.629-2.563,9.562  c-3.35,1.934-7.63,0.786-9.563-2.562L113.148,91.756c-36.889,23.611-61.756,61.431-68.621,104.75  c-0.605,3.818-4.194,6.427-8.01,5.818c-3.818-0.605-6.423-4.191-5.818-8.009c7.529-47.508,34.883-88.953,75.442-114.695  l-7.287-12.622C49.751,98.042,16.48,151.955,14.133,213.657h151.868c3.866,0,7,3.134,7,7s-3.134,7-7,7H42.792  c1.934,42.515,21.419,82.257,54.131,109.911c2.952,2.496,3.322,6.913,0.826,9.865c-2.495,2.952-6.912,3.324-9.865,0.827  c-35.866-30.321-57.164-73.956-59.105-120.603H14.133c2.348,61.702,35.618,115.613,84.722,146.657l75.907-131.478  c1.935-3.348,6.215-4.495,9.563-2.562s4.495,6.214,2.563,9.562l-61.618,106.728c21.635,11.214,45.828,17.113,70.384,17.113  c18.223,0,36.049-3.169,52.983-9.42c3.628-1.338,7.652,0.517,8.991,4.143c1.338,3.626-0.517,7.652-4.144,8.991  c-18.491,6.826-37.948,10.287-57.831,10.287c-27.012,0-53.625-6.543-77.391-18.978l-7.294,12.635  c25.3,13.388,54.123,20.975,84.685,20.975C225.125,402.309,254.161,395.147,280.067,381.543z M345.613,333.125  c1.027,0.531,2.125,0.782,3.206,0.782c2.535,0,4.981-1.381,6.226-3.789l0.856-1.658c1.773-3.435,0.428-7.658-3.008-9.432  c-3.437-1.776-7.656-0.427-9.432,3.007l-0.856,1.658C340.832,327.128,342.178,331.351,345.613,333.125z M319.987,299.362  c1.027,0.531,2.125,0.782,3.207,0.782c2.535,0,4.981-1.381,6.225-3.789l0.856-1.658c1.774-3.435,0.429-7.657-3.006-9.432  c-3.432-1.774-7.657-0.428-9.432,3.006l-0.856,1.658C315.207,293.365,316.553,297.588,319.987,299.362z M448.898,253.32  c0,35.017-9.362,69.376-27.075,99.365c-17.192,29.106-41.761,53.41-71.048,70.282c-1.072,0.618-3.202,1.298-5.315,0.693  c-1.786-0.511-3.321-1.66-4.247-3.27L247.18,256.809c-1.245-2.167-1.242-4.832,0.01-6.995c1.251-2.163,3.561-3.494,6.059-3.494  h188.65C445.765,246.32,448.898,249.454,448.898,253.32z M434.763,260.32H265.346l70.162,122.054  c35.927-22.916,60.66-59.542,68.285-101.506c0.691-3.803,4.323-6.329,8.14-5.636c3.804,0.691,6.326,4.335,5.635,8.139  c-8.363,46.026-35.573,86.168-75.075,111.152l7.298,12.697C400.485,375.336,432.438,320.095,434.763,260.32z M220.884,339.619h1.866  c3.866,0,7-3.134,7-7s-3.134-7-7-7h-1.866c-3.866,0-7,3.134-7,7S217.018,339.619,220.884,339.619z M199.384,335.786  c0,12.366-10.061,22.426-22.427,22.426c-12.364,0-22.424-10.06-22.424-22.426s10.06-22.426,22.424-22.426  C189.323,313.359,199.384,323.42,199.384,335.786z M185.384,335.786c0-4.646-3.78-8.426-8.427-8.426  c-4.645,0-8.424,3.78-8.424,8.426c0,4.646,3.779,8.426,8.424,8.426C181.604,344.211,185.384,340.432,185.384,335.786z   M186.537,279.413c0,3.866,3.134,7,7,7h1.865c3.866,0,7-3.134,7-7c0-3.866-3.134-7-7-7h-1.865  C189.671,272.413,186.537,275.547,186.537,279.413z M194.721,147.535h1.867c3.866,0,7-3.134,7-7s-3.134-7-7-7h-1.867  c-3.866,0-7,3.134-7,7S190.854,147.535,194.721,147.535z M139.072,262.14c0,12.366-10.061,22.426-22.427,22.426  c-12.365,0-22.425-10.06-22.425-22.426s10.06-22.426,22.425-22.426C129.012,239.714,139.072,249.774,139.072,262.14z   M125.072,262.14c0-4.646-3.78-8.426-8.427-8.426c-4.646,0-8.425,3.78-8.425,8.426s3.779,8.426,8.425,8.426  C121.292,270.565,125.072,266.786,125.072,262.14z" />
          </svg>
          <strong class="fs-5">Italiana</strong>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body d-flex justify-content-center mt-2 mb-2">
          <iframe loading="lazy" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2561.15122834644!2d19.93883197687947!3d50.06472941506112!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47165b103cd158f9%3A0xdd903fa4685ee6da!2sFloria%C5%84ska%2057%2C%2031-015%20Krak%C3%B3w!5e0!3m2!1spl!2spl!4v1681335891310!5m2!1spl!2spl" width="600" height="450" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="modal-footer d-flex justify-content-center">
          <h1 class="fs-3 fw-light">Kraków, Floriańska 57</h1>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="staticBackdrop3" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog ">
      <div class="modal-content">
        <div class="modal-header">
          <svg xmlns="http://www.w3.org/2000/svg" class="me-2" xmlns:xlink="http://www.w3.org/1999/xlink" fill="black" height="50px" width="50px" version="1.1" id="Capa_1" viewBox="0 0 448.898 448.898" xml:space="preserve">
            <path id="XMLID_1423_" d="M110.646,307.839c0,3.866-3.134,7-7,7h-1.866c-3.866,0-7-3.134-7-7s3.134-7,7-7h1.866  C107.512,300.839,110.646,303.973,110.646,307.839z M67.648,243.445h-1.865c-3.866,0-7,3.134-7,7s3.134,7,7,7h1.865  c3.866,0,7-3.134,7-7S71.515,243.445,67.648,243.445z M135.299,186.951h-1.867c-3.866,0-7,3.134-7,7c0,3.866,3.134,7,7,7h1.867  c3.866,0,7-3.134,7-7C142.299,190.084,139.165,186.951,135.299,186.951z M178.345,95.274h-1.864c-3.866,0-7,3.134-7,7  c0,3.866,3.134,7,7,7h1.864c3.866,0,7-3.134,7-7C185.345,98.409,182.211,95.274,178.345,95.274z M265.215,173.492  c0-12.365,10.062-22.425,22.428-22.425c12.365,0,22.425,10.06,22.425,22.425c0,12.366-10.06,22.426-22.425,22.426  C275.276,195.917,265.215,185.857,265.215,173.492z M279.215,173.492c0,4.646,3.78,8.426,8.428,8.426  c4.646,0,8.425-3.78,8.425-8.426c0-4.646-3.779-8.425-8.425-8.425C282.995,165.066,279.215,168.846,279.215,173.492z   M128.421,154.241c0,12.366-10.061,22.426-22.427,22.426s-22.427-10.06-22.427-22.426s10.061-22.426,22.427-22.426  S128.421,141.875,128.421,154.241z M114.421,154.241c0-4.646-3.78-8.426-8.427-8.426s-8.427,3.78-8.427,8.426  c0,4.646,3.78,8.426,8.427,8.426S114.421,158.887,114.421,154.241z M75.207,186.951h-1.866c-3.866,0-7,3.134-7,7  c0,3.866,3.134,7,7,7h1.866c3.866,0,7-3.134,7-7C82.207,190.084,79.073,186.951,75.207,186.951z M212.961,109.274h1.866  c3.866,0,7-3.134,7-7c0-3.866-3.134-7-7-7h-1.866c-3.866,0-7,3.134-7,7C205.961,106.141,209.095,109.274,212.961,109.274z   M362.357,300.713c1.026,0.529,2.123,0.78,3.203,0.78c2.536,0,4.983-1.383,6.227-3.792l0.855-1.658  c1.772-3.436,0.425-7.658-3.012-9.431c-3.436-1.773-7.657-0.423-9.43,3.012l-0.855,1.658  C357.573,294.718,358.921,298.94,362.357,300.713z M296.04,380.534c1.855,3.215,0.872,7.29-2.173,9.32  c-0.217,0.161-0.444,0.31-0.684,0.448c-29.535,17.014-63.261,26.006-97.531,26.006c-35.34,0-68.525-9.421-97.171-25.879  c-0.222-0.099-0.44-0.21-0.655-0.334c-0.222-0.128-0.435-0.267-0.637-0.415C39.101,355.713,0,292.666,0,220.657  C0,148.646,39.1,85.6,97.188,51.632c0.203-0.148,0.416-0.287,0.639-0.416c0.216-0.124,0.435-0.236,0.656-0.334  c28.646-16.458,61.83-25.878,97.17-25.878s68.524,9.419,97.169,25.877c0.223,0.099,0.441,0.21,0.656,0.335  c0.223,0.128,0.435,0.267,0.638,0.415c58.089,33.968,97.19,97.015,97.19,169.024v0v0.001c0,3.866-3.134,7-7,7H225.305  c-0.049,0-0.098,0-0.146-0.001h-17.408l8.311,14.457c0.173,0.229,0.333,0.471,0.48,0.726L296.04,380.534z M280.067,381.543  l-90.483-157.399c-1.245-2.166-1.242-4.832,0.01-6.995c1.251-2.163,3.561-3.494,6.059-3.494h152.86  c-1.913-41.889-20.932-81.228-52.842-108.812c-2.925-2.528-3.246-6.949-0.718-9.874c2.529-2.926,6.947-3.248,9.874-0.718  c34.99,30.247,55.777,73.441,57.699,119.403h14.646c-2.348-61.702-35.62-115.614-84.724-146.658l-75.907,131.478  c-1.933,3.348-6.214,4.496-9.563,2.562c-3.348-1.933-4.495-6.214-2.563-9.562l61.618-106.729  c-21.635-11.212-45.826-17.111-70.383-17.111c-18.206,0-36.02,3.165-52.946,9.407c-3.631,1.338-7.652-0.519-8.989-4.146  c-1.338-3.627,0.519-7.652,4.146-8.99c18.482-6.815,37.926-10.271,57.79-10.271c27.013,0,53.624,6.542,77.39,18.975l7.294-12.634  c-25.3-13.388-54.122-20.974-84.684-20.974s-59.385,7.586-84.685,20.975l75.919,131.499c1.933,3.348,0.785,7.629-2.563,9.562  c-3.35,1.934-7.63,0.786-9.563-2.562L113.148,91.756c-36.889,23.611-61.756,61.431-68.621,104.75  c-0.605,3.818-4.194,6.427-8.01,5.818c-3.818-0.605-6.423-4.191-5.818-8.009c7.529-47.508,34.883-88.953,75.442-114.695  l-7.287-12.622C49.751,98.042,16.48,151.955,14.133,213.657h151.868c3.866,0,7,3.134,7,7s-3.134,7-7,7H42.792  c1.934,42.515,21.419,82.257,54.131,109.911c2.952,2.496,3.322,6.913,0.826,9.865c-2.495,2.952-6.912,3.324-9.865,0.827  c-35.866-30.321-57.164-73.956-59.105-120.603H14.133c2.348,61.702,35.618,115.613,84.722,146.657l75.907-131.478  c1.935-3.348,6.215-4.495,9.563-2.562s4.495,6.214,2.563,9.562l-61.618,106.728c21.635,11.214,45.828,17.113,70.384,17.113  c18.223,0,36.049-3.169,52.983-9.42c3.628-1.338,7.652,0.517,8.991,4.143c1.338,3.626-0.517,7.652-4.144,8.991  c-18.491,6.826-37.948,10.287-57.831,10.287c-27.012,0-53.625-6.543-77.391-18.978l-7.294,12.635  c25.3,13.388,54.123,20.975,84.685,20.975C225.125,402.309,254.161,395.147,280.067,381.543z M345.613,333.125  c1.027,0.531,2.125,0.782,3.206,0.782c2.535,0,4.981-1.381,6.226-3.789l0.856-1.658c1.773-3.435,0.428-7.658-3.008-9.432  c-3.437-1.776-7.656-0.427-9.432,3.007l-0.856,1.658C340.832,327.128,342.178,331.351,345.613,333.125z M319.987,299.362  c1.027,0.531,2.125,0.782,3.207,0.782c2.535,0,4.981-1.381,6.225-3.789l0.856-1.658c1.774-3.435,0.429-7.657-3.006-9.432  c-3.432-1.774-7.657-0.428-9.432,3.006l-0.856,1.658C315.207,293.365,316.553,297.588,319.987,299.362z M448.898,253.32  c0,35.017-9.362,69.376-27.075,99.365c-17.192,29.106-41.761,53.41-71.048,70.282c-1.072,0.618-3.202,1.298-5.315,0.693  c-1.786-0.511-3.321-1.66-4.247-3.27L247.18,256.809c-1.245-2.167-1.242-4.832,0.01-6.995c1.251-2.163,3.561-3.494,6.059-3.494  h188.65C445.765,246.32,448.898,249.454,448.898,253.32z M434.763,260.32H265.346l70.162,122.054  c35.927-22.916,60.66-59.542,68.285-101.506c0.691-3.803,4.323-6.329,8.14-5.636c3.804,0.691,6.326,4.335,5.635,8.139  c-8.363,46.026-35.573,86.168-75.075,111.152l7.298,12.697C400.485,375.336,432.438,320.095,434.763,260.32z M220.884,339.619h1.866  c3.866,0,7-3.134,7-7s-3.134-7-7-7h-1.866c-3.866,0-7,3.134-7,7S217.018,339.619,220.884,339.619z M199.384,335.786  c0,12.366-10.061,22.426-22.427,22.426c-12.364,0-22.424-10.06-22.424-22.426s10.06-22.426,22.424-22.426  C189.323,313.359,199.384,323.42,199.384,335.786z M185.384,335.786c0-4.646-3.78-8.426-8.427-8.426  c-4.645,0-8.424,3.78-8.424,8.426c0,4.646,3.779,8.426,8.424,8.426C181.604,344.211,185.384,340.432,185.384,335.786z   M186.537,279.413c0,3.866,3.134,7,7,7h1.865c3.866,0,7-3.134,7-7c0-3.866-3.134-7-7-7h-1.865  C189.671,272.413,186.537,275.547,186.537,279.413z M194.721,147.535h1.867c3.866,0,7-3.134,7-7s-3.134-7-7-7h-1.867  c-3.866,0-7,3.134-7,7S190.854,147.535,194.721,147.535z M139.072,262.14c0,12.366-10.061,22.426-22.427,22.426  c-12.365,0-22.425-10.06-22.425-22.426s10.06-22.426,22.425-22.426C129.012,239.714,139.072,249.774,139.072,262.14z   M125.072,262.14c0-4.646-3.78-8.426-8.427-8.426c-4.646,0-8.425,3.78-8.425,8.426s3.779,8.426,8.425,8.426  C121.292,270.565,125.072,266.786,125.072,262.14z" />
          </svg>
          <strong class="fs-5">Italiana</strong>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body d-flex justify-content-center mt-2 mb-2">
          <iframe loading="lazy" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2433.8547880098963!2d16.931325476986828!3d52.40930794441853!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47045b474ba7a0af%3A0x3dc3c5e07ebf902f!2sKramarska%2C%2061-001%20Pozna%C5%84!5e0!3m2!1spl!2spl!4v1681335932791!5m2!1spl!2spl" width="600" height="450" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="modal-footer d-flex justify-content-center">
          <h1 class="fs-3 fw-light">Poznań, Kramarska 234</h1>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="staticBackdrop4" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog ">
      <div class="modal-content">
        <div class="modal-header">
          <svg xmlns="http://www.w3.org/2000/svg" class="me-2" xmlns:xlink="http://www.w3.org/1999/xlink" fill="black" height="50px" width="50px" version="1.1" id="Capa_1" viewBox="0 0 448.898 448.898" xml:space="preserve">
            <path id="XMLID_1423_" d="M110.646,307.839c0,3.866-3.134,7-7,7h-1.866c-3.866,0-7-3.134-7-7s3.134-7,7-7h1.866  C107.512,300.839,110.646,303.973,110.646,307.839z M67.648,243.445h-1.865c-3.866,0-7,3.134-7,7s3.134,7,7,7h1.865  c3.866,0,7-3.134,7-7S71.515,243.445,67.648,243.445z M135.299,186.951h-1.867c-3.866,0-7,3.134-7,7c0,3.866,3.134,7,7,7h1.867  c3.866,0,7-3.134,7-7C142.299,190.084,139.165,186.951,135.299,186.951z M178.345,95.274h-1.864c-3.866,0-7,3.134-7,7  c0,3.866,3.134,7,7,7h1.864c3.866,0,7-3.134,7-7C185.345,98.409,182.211,95.274,178.345,95.274z M265.215,173.492  c0-12.365,10.062-22.425,22.428-22.425c12.365,0,22.425,10.06,22.425,22.425c0,12.366-10.06,22.426-22.425,22.426  C275.276,195.917,265.215,185.857,265.215,173.492z M279.215,173.492c0,4.646,3.78,8.426,8.428,8.426  c4.646,0,8.425-3.78,8.425-8.426c0-4.646-3.779-8.425-8.425-8.425C282.995,165.066,279.215,168.846,279.215,173.492z   M128.421,154.241c0,12.366-10.061,22.426-22.427,22.426s-22.427-10.06-22.427-22.426s10.061-22.426,22.427-22.426  S128.421,141.875,128.421,154.241z M114.421,154.241c0-4.646-3.78-8.426-8.427-8.426s-8.427,3.78-8.427,8.426  c0,4.646,3.78,8.426,8.427,8.426S114.421,158.887,114.421,154.241z M75.207,186.951h-1.866c-3.866,0-7,3.134-7,7  c0,3.866,3.134,7,7,7h1.866c3.866,0,7-3.134,7-7C82.207,190.084,79.073,186.951,75.207,186.951z M212.961,109.274h1.866  c3.866,0,7-3.134,7-7c0-3.866-3.134-7-7-7h-1.866c-3.866,0-7,3.134-7,7C205.961,106.141,209.095,109.274,212.961,109.274z   M362.357,300.713c1.026,0.529,2.123,0.78,3.203,0.78c2.536,0,4.983-1.383,6.227-3.792l0.855-1.658  c1.772-3.436,0.425-7.658-3.012-9.431c-3.436-1.773-7.657-0.423-9.43,3.012l-0.855,1.658  C357.573,294.718,358.921,298.94,362.357,300.713z M296.04,380.534c1.855,3.215,0.872,7.29-2.173,9.32  c-0.217,0.161-0.444,0.31-0.684,0.448c-29.535,17.014-63.261,26.006-97.531,26.006c-35.34,0-68.525-9.421-97.171-25.879  c-0.222-0.099-0.44-0.21-0.655-0.334c-0.222-0.128-0.435-0.267-0.637-0.415C39.101,355.713,0,292.666,0,220.657  C0,148.646,39.1,85.6,97.188,51.632c0.203-0.148,0.416-0.287,0.639-0.416c0.216-0.124,0.435-0.236,0.656-0.334  c28.646-16.458,61.83-25.878,97.17-25.878s68.524,9.419,97.169,25.877c0.223,0.099,0.441,0.21,0.656,0.335  c0.223,0.128,0.435,0.267,0.638,0.415c58.089,33.968,97.19,97.015,97.19,169.024v0v0.001c0,3.866-3.134,7-7,7H225.305  c-0.049,0-0.098,0-0.146-0.001h-17.408l8.311,14.457c0.173,0.229,0.333,0.471,0.48,0.726L296.04,380.534z M280.067,381.543  l-90.483-157.399c-1.245-2.166-1.242-4.832,0.01-6.995c1.251-2.163,3.561-3.494,6.059-3.494h152.86  c-1.913-41.889-20.932-81.228-52.842-108.812c-2.925-2.528-3.246-6.949-0.718-9.874c2.529-2.926,6.947-3.248,9.874-0.718  c34.99,30.247,55.777,73.441,57.699,119.403h14.646c-2.348-61.702-35.62-115.614-84.724-146.658l-75.907,131.478  c-1.933,3.348-6.214,4.496-9.563,2.562c-3.348-1.933-4.495-6.214-2.563-9.562l61.618-106.729  c-21.635-11.212-45.826-17.111-70.383-17.111c-18.206,0-36.02,3.165-52.946,9.407c-3.631,1.338-7.652-0.519-8.989-4.146  c-1.338-3.627,0.519-7.652,4.146-8.99c18.482-6.815,37.926-10.271,57.79-10.271c27.013,0,53.624,6.542,77.39,18.975l7.294-12.634  c-25.3-13.388-54.122-20.974-84.684-20.974s-59.385,7.586-84.685,20.975l75.919,131.499c1.933,3.348,0.785,7.629-2.563,9.562  c-3.35,1.934-7.63,0.786-9.563-2.562L113.148,91.756c-36.889,23.611-61.756,61.431-68.621,104.75  c-0.605,3.818-4.194,6.427-8.01,5.818c-3.818-0.605-6.423-4.191-5.818-8.009c7.529-47.508,34.883-88.953,75.442-114.695  l-7.287-12.622C49.751,98.042,16.48,151.955,14.133,213.657h151.868c3.866,0,7,3.134,7,7s-3.134,7-7,7H42.792  c1.934,42.515,21.419,82.257,54.131,109.911c2.952,2.496,3.322,6.913,0.826,9.865c-2.495,2.952-6.912,3.324-9.865,0.827  c-35.866-30.321-57.164-73.956-59.105-120.603H14.133c2.348,61.702,35.618,115.613,84.722,146.657l75.907-131.478  c1.935-3.348,6.215-4.495,9.563-2.562s4.495,6.214,2.563,9.562l-61.618,106.728c21.635,11.214,45.828,17.113,70.384,17.113  c18.223,0,36.049-3.169,52.983-9.42c3.628-1.338,7.652,0.517,8.991,4.143c1.338,3.626-0.517,7.652-4.144,8.991  c-18.491,6.826-37.948,10.287-57.831,10.287c-27.012,0-53.625-6.543-77.391-18.978l-7.294,12.635  c25.3,13.388,54.123,20.975,84.685,20.975C225.125,402.309,254.161,395.147,280.067,381.543z M345.613,333.125  c1.027,0.531,2.125,0.782,3.206,0.782c2.535,0,4.981-1.381,6.226-3.789l0.856-1.658c1.773-3.435,0.428-7.658-3.008-9.432  c-3.437-1.776-7.656-0.427-9.432,3.007l-0.856,1.658C340.832,327.128,342.178,331.351,345.613,333.125z M319.987,299.362  c1.027,0.531,2.125,0.782,3.207,0.782c2.535,0,4.981-1.381,6.225-3.789l0.856-1.658c1.774-3.435,0.429-7.657-3.006-9.432  c-3.432-1.774-7.657-0.428-9.432,3.006l-0.856,1.658C315.207,293.365,316.553,297.588,319.987,299.362z M448.898,253.32  c0,35.017-9.362,69.376-27.075,99.365c-17.192,29.106-41.761,53.41-71.048,70.282c-1.072,0.618-3.202,1.298-5.315,0.693  c-1.786-0.511-3.321-1.66-4.247-3.27L247.18,256.809c-1.245-2.167-1.242-4.832,0.01-6.995c1.251-2.163,3.561-3.494,6.059-3.494  h188.65C445.765,246.32,448.898,249.454,448.898,253.32z M434.763,260.32H265.346l70.162,122.054  c35.927-22.916,60.66-59.542,68.285-101.506c0.691-3.803,4.323-6.329,8.14-5.636c3.804,0.691,6.326,4.335,5.635,8.139  c-8.363,46.026-35.573,86.168-75.075,111.152l7.298,12.697C400.485,375.336,432.438,320.095,434.763,260.32z M220.884,339.619h1.866  c3.866,0,7-3.134,7-7s-3.134-7-7-7h-1.866c-3.866,0-7,3.134-7,7S217.018,339.619,220.884,339.619z M199.384,335.786  c0,12.366-10.061,22.426-22.427,22.426c-12.364,0-22.424-10.06-22.424-22.426s10.06-22.426,22.424-22.426  C189.323,313.359,199.384,323.42,199.384,335.786z M185.384,335.786c0-4.646-3.78-8.426-8.427-8.426  c-4.645,0-8.424,3.78-8.424,8.426c0,4.646,3.779,8.426,8.424,8.426C181.604,344.211,185.384,340.432,185.384,335.786z   M186.537,279.413c0,3.866,3.134,7,7,7h1.865c3.866,0,7-3.134,7-7c0-3.866-3.134-7-7-7h-1.865  C189.671,272.413,186.537,275.547,186.537,279.413z M194.721,147.535h1.867c3.866,0,7-3.134,7-7s-3.134-7-7-7h-1.867  c-3.866,0-7,3.134-7,7S190.854,147.535,194.721,147.535z M139.072,262.14c0,12.366-10.061,22.426-22.427,22.426  c-12.365,0-22.425-10.06-22.425-22.426s10.06-22.426,22.425-22.426C129.012,239.714,139.072,249.774,139.072,262.14z   M125.072,262.14c0-4.646-3.78-8.426-8.427-8.426c-4.646,0-8.425,3.78-8.425,8.426s3.779,8.426,8.425,8.426  C121.292,270.565,125.072,266.786,125.072,262.14z" />
          </svg>
          <strong class="fs-5">Italiana</strong>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body d-flex justify-content-center mt-2 mb-2">
          <iframe loading="lazy" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2423.0399227180246!2d21.460423676995912!3d52.60504922992886!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471ee50976711853%3A0x916bb99713fbbb34!2sJana%20Matejki%209%2C%2007-200%20Wyszk%C3%B3w!5e0!3m2!1spl!2spl!4v1681336001984!5m2!1spl!2spl" width="600" height="450" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="modal-footer d-flex justify-content-center">
          <h1 class="fs-3 fw-light">Wyszków, Matejki 9</h1>
        </div>
      </div>
    </div>
  </div>
  <!-- MODAL LOKALIZACJI -->

</body>

</html>