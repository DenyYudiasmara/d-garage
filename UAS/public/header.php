<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D'Garage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/public-style.css">
</head>
<body>
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <div class="container-fluid p-0">
                        <a class="navbar-brand ms-5" href="index.php">D'Garage</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link menu-home" aria-current="page" href="index.php">Home</a>
                                </li>
                                <!--<li class="nav-item">
                                    <a class="nav-link menu-garage" href="garage.php">Garage</a>
                                </li>-->
                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle menu-garage" id="garage-dropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Garage
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="garage-dropdown">
                                        <?php 
                                            require_once '../include/koneksi.php';
                                            $sql = 'SELECT * FROM kategori';
                                            $query = mysqli_query($conn, $sql);
                                            while($result = mysqli_fetch_assoc($query)) {
                                                echo '<li><a href="garage.php?kat='.$result['id'].'" class="dropdown-item">'.$result['kategori'].'</a>';
                                            }
                                        ?>
                                        <!--<li><a href="#" class="dropdown-item">Action</a></li>
                                        <li><a href="#" class="dropdown-item"></a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a href="#" class="dropdown-item"></a></li>-->
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link menu-about" href="about.php">About</a>
                                </li>
                            </ul>
                            <span class="d-flex" role="search">
                                <ul class="navbar-nav me-5 mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="../admin">Login</a>
                                    </li>
                                </ul>
                            </span>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <!-- Carousel -->
                    <div id="slide-motor" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#slide-motor" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#slide-motor" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#slide-motor" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="../img/carousel1.jpeg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h2>Kategori 2 Tak</h2>
                                    <p>Motor berasap tenaga tinggi</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="../img/carousel4.jpeg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h2>Kategori 4 Tak</h2>
                                    <p>Motor anti asap dan irit</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="../img/carousel5.jpeg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h2>Kategori Elektrik</h2>
                                    <p>Teknologi baru 5.0</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#slide-motor" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#slide-motor" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                <!-- Carousel -->
            </div>
        </div>