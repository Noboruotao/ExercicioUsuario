<!DOCTYPE html>
<html lang="en">
<?php
session_start();

if(isset($_SESSION['message'])) {
  $message = $_SESSION['message'];
  unset($_SESSION['message']);

  echo "<script type='text/javascript'>alert('$message');</script>";

  unset($_SESSION['message']);
}
?>

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>HOME</title>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
<style>
.carousel{
    background: #2f4357;
    margin-top: 20px;
}
.carousel-item{
    text-align: center;
    min-height: 280px; 
}
</style>
</head>
<body>
<div >
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a href="#" class="navbar-brand">ExercicioUsuario</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="nav-item">
                    <a href="home.php" class="nav-link active">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Paginas</a>
                    <div class="dropdown-menu">
                        <a href="page01.php" class="dropdown-item">Page01</a>
                        <a href="page02.php" class="dropdown-item">Page02</a>

                    </div>
                </li>
            </ul>
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Account</a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="change.php" class="dropdown-item">MudarDados</a>
                        <div class="dropdown-divider"></div>
                        <a href="#myModal"class="dropdown-item"data-toggle="modal">Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>

<div class="m-4">
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="home.php">Home</a></li>
        
      </ol>
    </nav>
</div>

<div id="myModal" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Confirmation</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p>are you sure want to logout?</p>
                    <p class="text-secondary"><small>the session will be ended.</small></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <a href="logout.php"><button type="button" class="btn btn-primary">LOGOUT</button></a>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="container-lg my-3">
<div id="mycarousel" class="carousel slide" data-interval="3000" data-ride="carousel">        
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">

            <div class="carousel-item active">
                <img src="../_images/animal_neko.png" alt="First Slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>aaa</h5>
                    <p>AAA</p>
                </div>
            </div>

            <div class="carousel-item ">
                <img src="../_images/animal_inu.png" alt="Second Slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>bbb</h5>
                    <p>BBB</p>
                </div>
            </div>

            <div class="carousel-item ">
                <img src="../_images/animal_kuma.png" alt="Third Slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>ccc</h5>
                    <p>CCC</p>
                </div>
            </div>
            
            <div class="carousel-item ">
                <img src="../_images/animal_panda.png" alt="Third Slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>ccc</h5>
                    <p>CCC</p>
                </div>
            </div>


        </div>
<a class="carousel-control-prev" href="#mycarousel"data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next"href="#mycarousel"data-slide="next">
    <span class="carousel-control-next-icon"></span>
</a>

    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>                            