<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdnjs.com/libraries/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous" />
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous" />
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <!-- Mis CSS -->
    <link rel="stylesheet" href="css/blocks.css" />
    <link rel="stylesheet" href="css/buttons.css" />

    <title>Metal Pizza</title>

</head>

<body>
    <div id="header">
        <div id="saludo" class="header-izq col-md-10">
            Buenos días Steven
        </div>
        <div class="header-der col-md-2">
            Ordenar ahora
        </div>
    </div>
    <div class="logo">

    </div>
    <div class="nav">
        <button class="nav-btn nav-btn-left col-md-2 col-sm-2 col-xs-2 col-lg-2">INICIO</button>
        <button class="nav-btn col-md-2 col-sm-2 col-xs-2 col-lg-2">MENÚ</button>
        <button class="nav-btn col-md-2 col-sm-2 col-xs-2 col-lg-2">PROMOCIONES</button>
        <button class="nav-btn col-md-2 col-sm-2 col-xs-2 col-lg-2">SUCURSALES</button>
        <button class="nav-btn col-md-2 col-sm-2 col-xs-2 col-lg-2">LOG IN</button>
        <button class="nav-btn nav-btn-right col-md-2 col-sm-2 col-xs-2 col-lg-2">CONTÁCTANOS</button>
    </div>
    <div class="container">
        <h3 class="text">En Metal Pizza te ofrecemos el mejor servicio. Garantizado.</h3>
        <div id="promos" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#promos" data-slide-to="0" class="active"></li>
                <li data-target="#promos" data-slide-to="1"></li>
                <li data-target="#promos" data-slide-to="2"></li>
                <li data-target="#promos" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="img/other/promo01.jpg" class="img-rounded" alt="">
                </div>
                <div class="item">
                    <img src="img/other/promo02.jpeg"  class="img-rounded" alt="">
                </div>
                <div class="item">
                    <img src="img/other/promo03.jpg" class="img-rounded" alt="">
                </div>
                <div class="item">
                    <img src="img/other/promo04.jpeg" class="img-rounded" alt="">
                </div>
            </div>
            <a class="left carousel-control" href="#promos" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#promos" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</body>

</html>
