<?php
    session_start();
    if(!$_SESSION['auth']) {
        header('Location: index.php?auth=forbidden');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body class="admin-body">
    <div class="container-xxl">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand ms-3" href="home.php"><h2>Admin</h2></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-5 mt-3 mb-lg-0 position-absolute top-0 end-0">
                        <li class="nav-item">
                        <a class="nav-link" href="../public/index.php">Front Page</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link menu-home" aria-current="page" href="home.php">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link menu-kategori" href="kategori.php">Kategori</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link menu-garage" href="garage.php">Garage</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                        </li>
                    </div>
                </div>
                </nav>
            </div>
        </div>