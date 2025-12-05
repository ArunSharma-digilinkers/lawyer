<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

     <!-- bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Merriweather Sans font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">

    <!-- Source Sans Pro font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">

    <!-- fontawesome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"/>
    
</head>
<body>

<!-- ========== Header ========== -->
    <nav class="navbar navbar-expand-lg navbar-light" id="navbar">
    <div class="container">
        <a class="navbar-brand" href="<?php echo $path; ?>">
            <img src="assets/img/logo.jpg" alt="" class="img-fluid logo-img">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                <img src="<?php echo $path; ?>img/toggler.png" alt="" class="img-fluid">
            </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $path; ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $path; ?>home-two">Home Two</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="<?php echo $path; ?>home-three">Home Three</a>
                </li>
                 <!-- <li class="nav-item">
                    <a class="nav-link" href="<?php //echo $path; ?>#">Beawar Plant</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="<?php //echo $path; ?>#">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php //echo $path; ?>#">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php //echo $path; ?>contact-us">Contact</a> -->
                </li>
            </ul>
        </div>
    </div>
</nav>