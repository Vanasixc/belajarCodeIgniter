<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My web</title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container bg">
            <a class="navbar-brand" href="#">My Web</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link" href="<?= base_url('pages/home')?>">Home</a>
                    <a class="nav-item nav-link" href="<?= base_url('pages/welcome')?>">CI Welcome</a>
                    <a class="nav-item nav-link" href="<?= base_url('pages/form')?>">Form</a>
                    <a class="nav-item nav-link" href="<?= base_url('pages/login')?>">Login</a>
                    <a class="nav-item nav-link" href="<?= base_url('pages/coba')?>">Hello World</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- end of navbar -->