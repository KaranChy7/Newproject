<!doctype html>
<html lang="en">


<?php
    $name       = "Mahesh Yadav";
    $phone      = "+91- 7091382938";
    $email      = "maheshydvcool@gmail.com";  
    $facebook   = "https://www.facebook.com/ ";
    $instagram  = "https://www.instagram.com/";
    $twitter     = "https://www.twitter.com/";
    $linkedin   = "https://www.linkedin.com/";
    $youtube    = "https://www.youtube.com/";
    $thanks     = "";
?>

<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio</title>

    <!-- LInks -->
    <!-- Boostrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" />
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <!-- Magnific Popup -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" />
    <!-- Slick Slider -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <!-- Custom Style -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.png">


</head>
<!-- End of Head Section -->

<body>
    <?php if($page !='thanks' ) { ?>
    <header class="header <?php if($page != 'home'){ echo 'main-header' ;} ?>">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation" id="burgerBtn">
                    <svg viewBox="0 0 100 80" width="22" height="20" class="burger">
                        <rect width="100" height="10"></rect>
                        <rect y="30" width="100" height="10"></rect>
                        <rect y="60" width="100" height="10"></rect>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" class="cross">
                        <path fill="none" stroke="#000" stroke-width="2" d="M5,5 L19,19 M19,5 L5,19" />
                    </svg>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item <?= $page == 'home' ? 'active' : '';?>">
                            <a href="./" class="nav-link">home</a>
                        </li> 
                         <li class="nav-item <?= $page == 'our_gallery' ? 'active' : '';?>">
                            <a href="#our_gallery" class="nav-link">Portfolio</a>
                        </li>
                        <li class="nav-item <?= $page == 'our_services' ? 'active' : '';?>">
                            <a href="#our_services" class="nav-link">our services</a>
                        </li>
                        <li class="nav-item <?= $page == 'contact_us' ? 'active' : '';?>">
                            <a href="#contact_us" class="nav-link">contact us</a>
                        </li>
                       
                        <li  class="nav-item btn btn-primary btn-custom-mid ">
                            <a href="tel:<?= $phone ?>">
                                <i class="fas fa-phone-alt"></i>  Call Us
                            </a>

                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!-- Header Ends -->
    <?php } ?>