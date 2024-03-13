<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>The Art of Living</title>

</head>

<body>
    <style>
        *,
        html {
            scroll-behavior: smooth;
        }

        *,
        *:after,
        *:before {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        :root {
            scrollbar-color: rgb(210, 210, 210) rgb(46, 54, 69) !important;
            scrollbar-width: thin !important;
        }

        ::-webkit-scrollbar {
            height: 12px;
            width: 8px;
            background: #000;
        }

        ::-webkit-scrollbar-thumb {
            background: gray;
            -webkit-box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.75);
        }

        ::-webkit-scrollbar-corner {
            background: #000;
        }






        /*DEFAULT*/
        body {
            margin: 0;
            overflow-x: hidden;
            font-family: 'Source Sans Pro', sans-serif;
        }

        a {
            text-decoration: none;
            transition: 0.5s;
        }







        /*ANIMATION*/
        @-webkit-keyframes slideIn {
            from {
                bottom: -300px;
                opacity: 0
            }

            to {
                bottom: -140px;
                opacity: 1
            }
        }

        @keyframes slideIn {
            from {
                bottom: -300px;
                opacity: 0
            }

            to {
                bottom: -140px;
                opacity: 1
            }
        }

        @-webkit-keyframes fadeIn {
            from {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }


        .animate {
            -webkit-animation: animatezoom 0.6s;
            animation: animatezoom 0.6s
        }

        @-webkit-keyframes animatezoom {
            from {
                -webkit-transform: scale(0)
            }

            to {
                -webkit-transform: scale(1)
            }
        }

        @keyframes animatezoom {
            from {
                transform: scale(0)
            }

            to {
                transform: scale(1)
            }
        }




        header {
            width: 100%;
            height: auto;
            position: relative;
            top: 0;
        }

        .banner {
            background-color: #f1c40f;
            width: 100%;
            padding: 10px 0;
        }

        .banner .section-right {
            float: right;
        }

        .banner a {
            margin: 0 10px;
            color: #000;
        }

        .logo {
            background: #f1c40f;
            color: #000;
            padding: 25px;
            width: 230px;
            position: absolute;
            left: -20px;
            top: 30px;
        }

        .logo img {
            width: 180px;
            height: 25px;
        }

        .parallelogram {
            transform: skew(-20deg);
        }

        .skew-fix {
            width: 60%;
            display: inline-block;
            transform: skew(20deg);
        }

        @media (max-width:820px) {
            .banner .section-right {
                float: none;
                width: 100%;
            }

            .banner .section-left {
                display: none;
            }
        }











        /*NAVIGATION*/
        .topnav {
            overflow: hidden;
            background-color: #000;
        }

        .topnav a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .active {
            color: #f1c40f;
            margin-left: 250px;
        }

        .topnav .icon {
            display: none;
            outline: none !important;
        }

        .dropdown {
            float: left;
            overflow: hidden;
        }

        .dropdown .dropbtn {
            font-size: 17px;
            border: none;
            outline: none;
            color: white;
            padding: 14px 16px;
            background-color: inherit;
            font-family: inherit;
            margin: 0;
        }

        .dropdown-content {
            overflow: hidden;
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            border-top: 2px solid #f1c40f;
            z-index: 1;
            -webkit-animation-name: slideIn;
            -webkit-animation-duration: 1s;
            animation-name: slideIn;
            animation-duration: 1s;
        }

        .dropdown-content a {
            float: none;
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .topnav a:hover,
        .dropdown:hover .dropbtn {
            color: #f1c40f;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
            color: black;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        @media screen and (max-width: 820px) {
            .dropdown-content {
                -webkit-animation-name: none;
                -webkit-animation-duration: 1s;
                animation-name: none;
                animation-duration: 1s;
            }

            .topnav a,
            .dropdown .dropbtn {
                display: none;
            }

            .topnav a.icon {
                float: right;
                display: block;
            }
        }

        @media screen and (max-width: 820px) {
            .active {
                margin-left: 0;
            }

            .topnav {
                height: 50px;
                width: 100%;
                transition: 0.5s;
            }

            .topnav.responsive {
                position: relative;
                height: 70vh;
                overflow-y: auto;
            }

            .topnav.responsive .icon {
                position: absolute;
                right: 0;
                top: 0;
            }

            .topnav.responsive a {
                float: none;
                display: block;
                text-align: left;
            }

            .topnav.responsive .dropdown {
                float: none;
            }

            .topnav.responsive .dropdown-content {
                position: relative;
            }

            .topnav.responsive .dropdown .dropbtn {
                display: block;
                width: 100%;
                text-align: left;
            }
        }





        * {
            box-sizing: border-box;
        }

        body {
            font-family: "Lato", sans-serif;
            line-height: 1.25;
            background-color: #f4f4f4;
            color: #2a2a2a;
            font-weight: 500;
        }

        .container {
            max-width: 1280px;
            margin: 3rem auto;
            padding: 1rem;
        }

        h1 {
            text-align: center;
        }

        button {
            font-size: 1rem;
            padding: 0.35em 0.75em;
            line-height: 1;
            background-color: transparent;
            border: 0.125rem solid #2a2a2a;
            border-radius: 2rem;
            cursor: pointer;
            transition: 0.1s;
            outline: 0;
        }

        button:hover {
            background-color: #2a2a2a;
            color: #fff;
        }

        button .fa {
            font-size: 0.75em;
            margin-left: 0.5em;
        }

        button.btn--primary {
            border-color: #042A4F;
            color: #042A4F;
        }

        button.btn--primary:hover {
            background-color: #042A4F;
            color: #fff;
        }

        button.btn--accent {
            border-color: #E65891;
            color: #E65891;
        }

        button.btn--accent:hover {
            background-color: #E65891;
            color: #fff;
        }

        .posts {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 2.5rem;
        }

        @media (max-width: 1140px) {
            .posts {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .posts {
                grid-template-columns: repeat(1, 1fr);
            }
        }

        .post__image {
            width: 100%;
            height: 240px;
            position: relative;
            overflow: hidden;
        }

        .post__image:before,
        .post__image:after {
            content: "";
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            width: 100%;
            height: 100%;
        }

        .post__image:before {
            background-size: cover;
            background-position: center center;
            transform: scale(1);
            filter: blur(0);
            transition: 2s cubic-bezier(0, 0.6, 0.2, 1);
        }

        .post__image:after {
            background: linear-gradient(30deg, #042A4F 0%, #E65891 100%);
            background-size: 100% 300%;
            background-position: bottom left;
            opacity: 0.15;
            transition: 2s cubic-bezier(0, 0.6, 0.2, 1);
        }

        .post__image--1:before {
            background-image: url("https://images.unsplash.com/photo-1510951459752-aac634df6e86?h=240&ixlib=rb-0.3.5&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ&s=50bdf8b5068e794a82c849cc7e269ed3");
        }

        .post__image--2:before {
            background-image: url("https://images.unsplash.com/photo-1529392960549-df4af50eac23?h=240&ixlib=rb-0.3.5&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ&s=b482040f9d3a25a5e5352948f68f3a0e");
        }

        .post__image--3:before {
            background-image: url("https://images.unsplash.com/photo-1506258998-82810ddc75a3?h=240&ixlib=rb-0.3.5&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ&s=68da264c24bc024a0b2ff92c349e89ed");
        }

        .post__image--4:before {
            background-image: url("https://images.unsplash.com/photo-1520875777965-f99b03dc86e8?h=240&ixlib=rb-0.3.5&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ&s=34ff37a297e7e9e7be972356103b6750");
        }

        .post__image--5:before {
            background-image: url("https://images.unsplash.com/photo-1527664557558-a2b352fcf203?h=240&ixlib=rb-0.3.5&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ&s=d06ac80d600822cb010987a6af4ff02a");
        }

        .post__image--6:before {
            background-image: url("https://images.unsplash.com/photo-1507679799987-c73779587ccf?h=240&ixlib=rb-0.3.5&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ&s=f982b6bf45d8a72d038b60a010e16767");
        }

        .post__content {
            margin: -3rem 1.5rem 0;
            padding: 1.5rem;
            background-color: #fff;
            border-radius: 3px;
            box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.15);
            transition: margin 0.2s ease-in-out;
            position: relative;
            z-index: 1;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .post__inside {
            overflow: hidden;
            height: 4.85rem;
            transition: height 0.2s ease-in-out;
        }

        .post__title {
            font-size: 1.35rem;
            line-height: 1;
            margin: 0 0 1rem;
            font-weight: 300;
            color: #042A4F;
        }

        .post__excerpt {
            overflow: hidden;
            margin: 0;
            max-height: 6.25rem;
            position: relative;
        }

        .post__button {
            margin-top: 1rem;
        }

        /* ====== HOVER ====== */
        .post:hover .post__content {
            margin-top: -9.8rem;
        }

        .post:hover .post__inside {
            height: 11.65rem;
        }

        .post:hover .post__image:after {
            opacity: 0.5;
        }

        .post:hover .post__image:before {
            transform: scale(1.1);
            filter: blur(10px);
        }

        .footer {
            background-color: #f1c40f;
            color: #000;
            text-align: center;
            padding: 10px;
        }

        #image_div_id {
            height: 320px;
        }




        .pd-wrap {
            padding: 40px 0;
            font-family: 'Poppins', sans-serif;
        }

        .heading-section {
            text-align: center;
            margin-bottom: 20px;
        }

        .sub-heading {
            font-family: 'Poppins', sans-serif;
            font-size: 12px;
            display: block;
            font-weight: 600;
            color: #2e9ca1;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .heading-section h2 {
            font-size: 32px;
            font-weight: 500;
            padding-top: 10px;
            padding-bottom: 15px;
            font-family: 'Poppins', sans-serif;
        }

        .user-img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            position: relative;
            min-width: 80px;
            background-size: 100%;
        }

        .carousel-testimonial .item {
            padding: 30px 10px;
        }

        .quote {
            position: absolute;
            top: -23px;
            color: #2e9da1;
            font-size: 27px;
        }

        .name {
            margin-bottom: 0;
            line-height: 14px;
            font-size: 17px;
            font-weight: 500;
        }

        .position {
            color: #adadad;
            font-size: 14px;
        }

        .owl-nav button {
            position: absolute;
            top: 50%;
            transform: translate(0, -50%);
            outline: none;
            height: 25px;
        }

        .owl-nav button svg {
            width: 25px;
            height: 25px;
        }

        .owl-nav button.owl-prev {
            left: 25px;
        }

        .owl-nav button.owl-next {
            right: 25px;
        }

        .owl-nav button span {
            font-size: 45px;
        }

        .product-thumb .item img {
            height: 100px;
        }

        .product-name {
            font-size: 22px;
            font-weight: 500;
            line-height: 22px;
            margin-bottom: 4px;
        }

        .product-price-discount {
            font-size: 22px;
            font-weight: 400;
            padding: 10px 0;
            clear: both;
        }

        .product-price-discount span.line-through {
            text-decoration: line-through;
            margin-left: 10px;
            font-size: 14px;
            vertical-align: middle;
            color: #a5a5a5;
        }

        .display-flex {
            display: flex;
        }

        .align-center {
            align-items: center;
        }

        .product-info {
            width: 100%;
        }

        .reviews-counter {
            font-size: 13px;
        }

        .reviews-counter span {
            vertical-align: -2px;
        }

        .rate {
            float: left;
            padding: 0 10px 0 0;
        }

        .rate:not(:checked)>input {
            position: absolute;
            top: -9999px;
        }

        .rate:not(:checked)>label {
            float: right;
            width: 15px;
            overflow: hidden;
            white-space: nowrap;
            cursor: pointer;
            font-size: 21px;
            color: #ccc;
            margin-bottom: 0;
            line-height: 21px;
        }

        .rate:not(:checked)>label:before {
            content: '\2605';
        }

        .rate>input:checked~label {
            color: #ffc700;
        }

        .rate:not(:checked)>label:hover,
        .rate:not(:checked)>label:hover~label {
            color: #deb217;
        }

        .rate>input:checked+label:hover,
        .rate>input:checked+label:hover~label,
        .rate>input:checked~label:hover,
        .rate>input:checked~label:hover~label,
        .rate>label:hover~input:checked~label {
            color: #c59b08;
        }

        .product-dtl p {
            font-size: 14px;
            line-height: 24px;
            color: #7a7a7a;
        }

        .product-dtl .form-control {
            font-size: 15px;
        }

        .product-dtl label {
            line-height: 16px;
            font-size: 15px;
        }

        .form-control:focus {
            outline: none;
            box-shadow: none;
        }

        .product-count {
            margin-top: 15px;
        }

        .product-count .qtyminus,
        .product-count .qtyplus {
            width: 34px;
            height: 34px;
            background: #212529;
            text-align: center;
            font-size: 19px;
            line-height: 36px;
            color: #fff;
            cursor: pointer;
        }

        .product-count .qtyminus {
            border-radius: 3px 0 0 3px;
        }

        .product-count .qtyplus {
            border-radius: 0 3px 3px 0;
        }

        .product-count .qty {
            width: 60px;
            text-align: center;
        }

        .round-black-btn {
            border-radius: 4px;
            background: #212529;
            color: #fff;
            padding: 7px 45px;
            display: inline-block;
            margin-top: 20px;
            border: solid 2px #212529;
            transition: all 0.5s ease-in-out 0s;
        }

        .round-black-btn:hover,
        .round-black-btn:focus {
            background: transparent;
            color: #212529;
            text-decoration: none;
        }

        .product-info-tabs {
            margin-top: 25px;
        }

        .product-info-tabs .nav-tabs {
            border-bottom: 2px solid #d8d8d8;
        }

        .product-info-tabs .nav-tabs .nav-item {
            margin-bottom: 0;
        }

        .product-info-tabs .nav-tabs .nav-link {
            border: none;
            border-bottom: 2px solid transparent;
            color: #323232;
        }

        .product-info-tabs .nav-tabs .nav-item .nav-link:hover {
            border: none;
        }

        .product-info-tabs .nav-tabs .nav-item.show .nav-link,
        .product-info-tabs .nav-tabs .nav-link.active,
        .product-info-tabs .nav-tabs .nav-link.active:hover {
            border: none;
            border-bottom: 2px solid #d8d8d8;
            font-weight: bold;
        }

        .product-info-tabs .tab-content .tab-pane {
            padding: 30px 20px;
            font-size: 15px;
            line-height: 24px;
            color: #7a7a7a;
        }

        .review-form .form-group {
            clear: both;
        }

        .mb-20 {
            margin-bottom: 20px;
        }

        .review-form .rate {
            float: none;
            display: inline-block;
        }

        .review-heading {
            font-size: 24px;
            font-weight: 600;
            line-height: 24px;
            margin-bottom: 6px;
            text-transform: uppercase;
            color: #000;
        }

        .review-form .form-control {
            font-size: 14px;
        }

        .review-form input.form-control {
            height: 40px;
        }

        .review-form textarea.form-control {
            resize: none;
        }

        .review-form .round-black-btn {
            text-transform: uppercase;
            cursor: pointer;
        }
    </style>
    <!-- partial:index.partial.html -->
    
  <!-- partial:index.partial.html -->
  <title>MenuBar</title>

<!--META TAG-->
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

<!--EXTERNAL CSS-->
<link rel="stylesheet" href="<?php echo  base_url('/css/style.css'); ?>">

<!--GOOGLE FONTS-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400&display=swap" rel="stylesheet">

<!--FONT AWESOME-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>

<body>

  <!--HEADER-->
  <header>
    <div class="banner">
      <span class="section-left">
        <a href="emailto:">info@vvmvp.org</a>
        <a href="tel:">+(91)-80 67262626</a>
      </span>
      <span class="section-right">
        <a href="#" title="Facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" title="Instagram"><i class="fa fa-instagram"></i></a>
        <a href="#" title="Twitter"><i class="fa fa-twitter"></i></a>
      </span>
    </div>

    <div class="logo parallelogram">
    <span class="skew-fix"><img src='<?php echo  base_url(); ?>/assets/image/logo.png' alt='Art of Living Logo' style='width:120px; height:60px;' /></span>
    </div>

    <div class="topnav" id="myTopnav">
      <a href="#" class="active"></a>
    
      <a href="<?php echo  base_url('camp'); ?>">Campuses</a>
      <a href="<?php echo  base_url('camp'); ?>">Donate</a>
      <a href="<?php echo  base_url('camp'); ?>">FAQs</a>
      <a href="<?php echo  base_url('camp'); ?>">Contact Us</a>

      
      
            <?
            if (isset($_SESSION['publicuser'])) {

            ?>
              <a href='<? echo site_url("public/campus/receipts"); ?>'>Receipts</a>
          
          <a href='<? echo site_url("public/user/profile"); ?>'>Profile</a>
          
            <a href='<? echo site_url("public/login/logout") . "?next=" . urlencode(base_url("index.php/" . uri_string())); ?>'>Logout</a>
          <?
            } else {
          ?>
            <a href='<? echo site_url("public/welcome/login/") . "?next=" . urlencode(base_url("index.php/" . uri_string())); ?>'>Login</a>
          <?
            }
          ?>
          
      <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
    </div>
  </header>

      <?php
// Assuming $asha is an array, access its elements using keys
$ash = $data['asha'];
$pa = $data['pro'];

// Check if $id is a valid index in the array

    $row = $ash[$id - 1];
    $p =$pa[$id];
?>
   <h2>Product Details:<p style='font-size: 42px;'> <?= $p['program_name'] ?></p>

    <div class="container">
        <section class="half-banner-mask white-text">

        
   
                    <div class="banner">
                        <center>
                            <h1>Art of Living Campus at <?= $row['displayname'] ?></h1>
                            <h2>Product Details:<p style='font-size: 42px;'> <?= $p['program_name'] ?></p>

                            <h3><?= $row['address'] ?></h3>

                            <h3><?= $row['email'] ?></h3>
                        </center>
                    </div>
              
        </section>
        <div>




        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->

        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
        <div class="pd-wrap">
            <div class="container">
                <div class="heading-section">
          
                    </h2>

                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div id="slider" class="owl-carousel product-slider">
                            <div class="item">
                                <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" />
                            </div>
                            <div class="item">
                                <img src="https://i.ytimg.com/vi/PJ_zomNMK_s/maxresdefault.jpg" />
                            </div>
                            <div class="item">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQI6nUmObt62eDkqNSmIvCN_KkQExtbpJmUbVx_eTh_Y3v3r-Jw" />
                            </div>
                            <div class="item">
                                <img src="https://i.ytimg.com/vi/PJ_zomNMK_s/maxresdefault.jpg" />
                            </div>
                            <div class="item">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQI6nUmObt62eDkqNSmIvCN_KkQExtbpJmUbVx_eTh_Y3v3r-Jw" />
                            </div>
                            <div class="item">
                                <img src="https://i.ytimg.com/vi/PJ_zomNMK_s/maxresdefault.jpg" />
                            </div>
                            <div class="item">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQI6nUmObt62eDkqNSmIvCN_KkQExtbpJmUbVx_eTh_Y3v3r-Jw" />
                            </div>
                        </div>
                        <div id="thumb" class="owl-carousel product-thumb">
                            <div class="item">
                                <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" />
                            </div>
                            <div class="item">
                                <img src="https://i.ytimg.com/vi/PJ_zomNMK_s/maxresdefault.jpg" />
                            </div>
                            <div class="item">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQI6nUmObt62eDkqNSmIvCN_KkQExtbpJmUbVx_eTh_Y3v3r-Jw" />
                            </div>
                            <div class="item">
                                <img src="https://i.ytimg.com/vi/PJ_zomNMK_s/maxresdefault.jpg" />
                            </div>
                            <div class="item">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQI6nUmObt62eDkqNSmIvCN_KkQExtbpJmUbVx_eTh_Y3v3r-Jw" />
                            </div>
                            <div class="item">
                                <img src="https://i.ytimg.com/vi/PJ_zomNMK_s/maxresdefault.jpg" />
                            </div>
                            <div class="item">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQI6nUmObt62eDkqNSmIvCN_KkQExtbpJmUbVx_eTh_Y3v3r-Jw" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product-dtl">
                            <div class="product-info">
                                <div class="product-name">Variable Product</div>
                                <div class="reviews-counter">
                                    <div class="rate">
                                        <input type="radio" id="star5" name="rate" value="5" checked />
                                        <label for="star5" title="text">5 stars</label>
                                        <input type="radio" id="star4" name="rate" value="4" checked />
                                        <label for="star4" title="text">4 stars</label>
                                        <input type="radio" id="star3" name="rate" value="3" checked />
                                        <label for="star3" title="text">3 stars</label>
                                        <input type="radio" id="star2" name="rate" value="2" />
                                        <label for="star2" title="text">2 stars</label>
                                        <input type="radio" id="star1" name="rate" value="1" />
                                        <label for="star1" title="text">1 star</label>
                                    </div>
                                    <span>3 Reviews</span>
                                </div>
                                <div class="product-price-discount"><span>$39.00</span><span class="line-through">$29.00</span></div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="size">Size</label>
                                    <select id="size" name="size" class="form-control">
                                        <option>S</option>
                                        <option>M</option>
                                        <option>L</option>
                                        <option>XL</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="color">Color</label>
                                    <select id="color" name="color" class="form-control">
                                        <option>Blue</option>
                                        <option>Green</option>
                                        <option>Red</option>
                                    </select>
                                </div>
                            </div>
                            <div class="product-count">
                                <label for="size">Quantity</label>
                                <form action="#" class="display-flex">
                                    <div class="qtyminus">-</div>
                                    <input type="text" name="quantity" value="1" class="qty">
                                    <div class="qtyplus">+</div>
                                </form>
                                <a href="#" class="round-black-btn">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-info-tabs">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Description</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false">Reviews (0)</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
                        </div>
                        <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                            <div class="review-heading">REVIEWS</div>
                            <p class="mb-20">There are no reviews yet.</p>
                            <form class="review-form">
                                <div class="form-group">
                                    <label>Your rating</label>
                                    <div class="reviews-counter">
                                        <div class="rate">
                                            <input type="radio" id="star5" name="rate" value="5" />
                                            <label for="star5" title="text">5 stars</label>
                                            <input type="radio" id="star4" name="rate" value="4" />
                                            <label for="star4" title="text">4 stars</label>
                                            <input type="radio" id="star3" name="rate" value="3" />
                                            <label for="star3" title="text">3 stars</label>
                                            <input type="radio" id="star2" name="rate" value="2" />
                                            <label for="star2" title="text">2 stars</label>
                                            <input type="radio" id="star1" name="rate" value="1" />
                                            <label for="star1" title="text">1 star</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Your message</label>
                                    <textarea class="form-control" rows="10"></textarea>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="" class="form-control" placeholder="Name*">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="" class="form-control" placeholder="Email Id*">
                                        </div>
                                    </div>
                                </div>
                                <button class="round-black-btn">Submit Review</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div style="text-align:center;font-size:14px;padding-bottom:20px;">Get free icon packs for your next project at <a href="http://iiicons.in/" target="_blank" style="color:#ff5e63;font-weight:bold;">www.iiicons.in</a></div>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="   sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
     
        <div class="footer">
            <p class="copyright text-muted small">Copyright &copy; 2016 -
                <?= date('Y') ?>
                & Onwords Central ICT , Art of Living International Center, Bangalore. All rights reserved. Version 3.2.0</p>
        </div>
        <!-- partial -->
        <script>
            function myFunction() {
                var x = document.getElementById("myTopnav");
                if (x.className === "topnav") {
                    x.className += " responsive";
                } else {
                    x.className = "topnav";
                }
            }
        </script>

        <script type="text/javascript">
            $(function() {
                $(".thumbnail-button").click(function() {
                    console.log("button clicked with loc: ", $(this).data("loc"));
                    var locx = $(this).data("loc");
                    if (locx !== '') {
                        var win = window.open('<?= site_url("public/campus/index/") ?>' + locx, '_blank');
                        if (win) {
                            // Browser has allowed it to be opened
                            win.focus();
                        } else {
                            // Browser has blocked it
                            // alert('Please allow popups for this website');
                            window.location = '<?= site_url("public/campus/index/") ?>/' + locx;
                        }
                    }
                });
            });

            document.addEventListener("DOMContentLoaded", function() {
                const body = document.body;
                // const content = document.querySelector(".content");
                const footer = document.querySelector(".footer");

                const adjustFooter = () => {
                    const contentHeight = content.offsetHeight;
                    const windowHeight = window.innerHeight;

                    if (contentHeight < windowHeight) {
                        const footerHeight = footer.offsetHeight;
                        content.style.minHeight = `calc(100vh - ${footerHeight}px)`;
                    }
                };

                // Call adjustFooter initially and on window resize
                adjustFooter();
                window.addEventListener("resize", adjustFooter);
            });

            function currentSlide(n) {
                showSlides(slideIndex = n);
            }

            function showSlides(n) {
                var i;
                var slides = document.getElementsByClassName("bannerSlides");
                var dots = document.getElementsByClassName("bannerDot");
                if (n > slides.length) {
                    slideIndex = 1
                }
                if (n < 1) {
                    slideIndex = slides.length
                }
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                    slides[i].style.opacity = "0";
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                if (slides.length > 0) {
                    slides[slideIndex - 1].style.display = "flex";
                    slides[slideIndex - 1].style.opacity = "1";
                }
                if (dots.length > 0) {
                    dots[slideIndex - 1].className += " active";
                }
            }

            var backButton = document.querySelector('.back-button')

            function backAnim() {
                if (backButton.classList.contains('back')) {
                    backButton.classList.remove('back');
                } else {
                    backButton.classList.add('back');
                    setTimeout(backAnim, 1000);
                }
            }

            jQuery(function($) {
                $('.double-click-open').dblclick(function() {
                    return false;
                }).dblclick(function() {
                    window.location = this.href;
                    return false;
                });
            });

            $(function() {
                $('.qa-box').matchHeight();
            });

            $(document).ready(function() {
                var slider = $("#slider");
                var thumb = $("#thumb");
                var slidesPerPage = 4; //globaly define number of elements per page
                var syncedSecondary = true;
                slider.owlCarousel({
                    items: 1,
                    slideSpeed: 2000,
                    nav: false,
                    autoplay: false,
                    dots: false,
                    loop: true,
                    responsiveRefreshRate: 200
                }).on('changed.owl.carousel', syncPosition);
                thumb
                    .on('initialized.owl.carousel', function() {
                        thumb.find(".owl-item").eq(0).addClass("current");
                    })
                    .owlCarousel({
                        items: slidesPerPage,
                        dots: false,
                        nav: true,
                        item: 4,
                        smartSpeed: 200,
                        slideSpeed: 500,
                        slideBy: slidesPerPage,
                        navText: ['<svg width="18px" height="18px" viewBox="0 0 11 20"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"/></svg>', '<svg width="25px" height="25px" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"/></svg>'],
                        responsiveRefreshRate: 100
                    }).on('changed.owl.carousel', syncPosition2);

                function syncPosition(el) {
                    var count = el.item.count - 1;
                    var current = Math.round(el.item.index - (el.item.count / 2) - .5);
                    if (current < 0) {
                        current = count;
                    }
                    if (current > count) {
                        current = 0;
                    }
                    thumb
                        .find(".owl-item")
                        .removeClass("current")
                        .eq(current)
                        .addClass("current");
                    var onscreen = thumb.find('.owl-item.active').length - 1;
                    var start = thumb.find('.owl-item.active').first().index();
                    var end = thumb.find('.owl-item.active').last().index();
                    if (current > end) {
                        thumb.data('owl.carousel').to(current, 100, true);
                    }
                    if (current < start) {
                        thumb.data('owl.carousel').to(current - onscreen, 100, true);
                    }
                }

                function syncPosition2(el) {
                    if (syncedSecondary) {
                        var number = el.item.index;
                        slider.data('owl.carousel').to(number, 100, true);
                    }
                }
                thumb.on("click", ".owl-item", function(e) {
                    e.preventDefault();
                    var number = $(this).index();
                    slider.data('owl.carousel').to(number, 300, true);
                });

                $(".qtyminus").on("click", function() {
                    var now = $(".qty").val();
                    if ($.isNumeric(now)) {
                        if (parseInt(now) - 1 > 0) {
                            now--;
                        }
                        $(".qty").val(now);
                    }
                })
                $(".qtyplus").on("click", function() {
                    var now = $(".qty").val();
                    if ($.isNumeric(now)) {
                        $(".qty").val(parseInt(now) + 1);
                    }
                });
            });
        </script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.4/lodash.min.js'></script>
    </body>

</html>