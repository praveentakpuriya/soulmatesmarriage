<!DOCTYPE html>
<html lang="en">

<head>
    <title>Soulmates Marraige</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<style>
    .slider-text h1 {
        font-size: 30px;
        color: #fff;
        line-height: 1.1;
        font-weight: 200;
    }

    .slider-text {
        height: 480px;
    }


    .ftco-navbar-light {
        background: #2a2929ba !important;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        z-index: 3;
        height: 110px;
    }

    .msgg {
        border-bottom: 1px solid #ece1e1;
        text-align: center;
    }

    label.control-label.labell {
        font-size: 15px;
    }

    .dropdown-menu li {
        background: #ca5b61;
        margin-bottom: 0px;
        padding: 8px;
        color: #ffffff;
        border-bottom: 1px solid;
    }
</style>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">

        <div class="container">
            <h5 class="logotext">Soulmates Marraige</h5>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span>
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="<?php echo base_url() ?>" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="<?php echo base_url('About') ?>" class="nav-link">About</a></li>

                    <li class="nav-item"><a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Search</a>
                        <ul class="dropdown-menu">
                            <li><a href="Searching">Quick Search</a></li>
                            <li><a href="Searching">Advance Search</a></li>
                            <li><a href="Searching">Keyword Search</a></li>
                            <li><a href="Searching">Search by ID</a></li>
                        </ul>
                    </li>

                    <li class="nav-item"><a href="<?php echo base_url('Membership') ?>" class="nav-link">Membership</a></li>
                    <li class="nav-item"><a href="<?php echo base_url('Contact') ?>" class="nav-link">Contact</a></li>
                </ul>
            </div>
            <div style="position: relative; width: 208px;">
                <?php if($this->session->userdata('username') != ''){  ?>
                    <a href="<?php echo base_url('Login/logout') ?>" id="registration" class="button" style="margin-right: 10px;">Logout</a>
                <?php }else{ ?>
                <a href="<?php echo base_url('Registration') ?>" id="registration" class="button" style="margin-right: 10px;">Register</a>
                <a href="<?php echo base_url('Login') ?>" id="registration" class="button">Login</a>
                <?php }?>
            </div>

        </div>
    </nav> <!-- END nav -->