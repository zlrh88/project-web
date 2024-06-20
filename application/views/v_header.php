<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Lini Masa</title>
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
    <link rel="icon" href="<?= base_url('assets/img/LOGO BLACK.png')?>" type="image/png">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
       body {
        font-family: 'Poppins';
        font-size: 18px;
       }

      

       .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }

        .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }

        .carousel {
        margin-bottom: 4rem;
        }
        /* Since positioning the image, we need to help out the caption */
        .carousel-caption {
        bottom: 3rem;
        z-index: 10;
        }

        /* Declare heights because of positioning of img element */
        .carousel-item {
        height: 32rem;
        }

    </style>
    
</head>


<body>  
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#212b4f;">
        <div class="container-fluid">
                <img src="<?=base_url('assets/img/LOGO WHITE.png')?>" height="50">
                <a class="ms-2 navbar-brand fs-2 text" href="#">Lini Masa Coffee</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?= base_url('welcome/index')?>">Home</a>
                        </li> 
                        <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('about/index')?>">About</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('menu/index');?>">Menu</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('categories/index');?>" >Kategori</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('login/index');?>" >Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
