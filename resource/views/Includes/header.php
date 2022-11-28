<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page_name ?? '' ?></title>
    <link rel="stylesheet" href="<?= assets('CSS/bootstrap.min.css') ?>">
    
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="/">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">about</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">contact</a>
                    </li>

                    <?php
                    if (auth()->check()) {
                    ?>
                        <li class="nav-item">
                            <a class="nav-link" href="/admin">admin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" onclick="return confirm('do you want to logout?')" href="/logout">logout</a>
                        </li>
                    <?php
                    }
                    ?>

                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>