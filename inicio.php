<?php session_start();

if (isset($_SESSION['usuario'])) {

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  
<!-- Page Content -->
    <div class="container mt-4">
        
    <h1>Bienvenido al album: <?php echo $_SESSION['usuario']  ?></h1>

    <a href="./procesos/logout.php"><button class="btn btn-danger">Salir del sistema</button>  </a>

    <h1 class="fw-light text-center text-lg-start mt-4 mb-0">Album de imagenes</h1>

    <hr class="mt-2 mb-5">

    <div class="row text-center text-lg-start">

        <div class="col-lg-3 col-md-4 col-6">
        <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="./public/img/img1.jpg" alt="">
        </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
        <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="./public/img/img2.jpg" alt="">
        </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
        <a href="#" class="d-block mb-4 h-10">
            <img class="img-fluid img-thumbnail" src="./public/img/img3.jpg" width="540px" height="600px" alt="">
        </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
        <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="./public/img/img4.jpg" alt="">
        </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
        <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="./public/img/img5.jpg" alt="">
        </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
        <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="./public/img/img6.jpg" alt="">
        </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
        <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="./public/img/img7.jpg" alt="">
        </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
        <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="./public/img/img8.jpg" alt="">
        </a>
        </div>

    </div>

    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

<?php 

}else{
    header('location:./index.php');
}

?>