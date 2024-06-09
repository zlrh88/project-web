<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Pustaka Online</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">

    <style>
       
    </style>
    
</head>


<body>
        <nav class="navbar navbar-expand-lg bg-info text-white">
            <div class="container-fluid">
                <a class="navbar-brand fs-2 text" href="#">Lini Masa Coffee</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?= base_url('welcome/index')?>">Home</a>
                        </li> 
                        <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('about/index')?>">About</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('buku/index');?>">Menu</a>
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
