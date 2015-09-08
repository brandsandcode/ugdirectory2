<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>


<?php include("includes/nav.php") ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center padding-spaced orange">Keep your self informed about...</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 text-center padding-spaced">
            <img src="img/person.png" alt="advert here" class="img-rounded text-center"/>
            <p class="text-center padding-spaced">forex</p>
        </div>
        <div class="col-md-3 text-center padding-spaced">
            <img src="img/person.png" alt="advert here" class="img-rounded"/>
            <p class="text-center padding-spaced">forex</p>
        </div>
        <div class="col-md-3 text-center padding-spaced">
            <img src="img/person.png" alt="advert here" class="img-rounded"/>
            <p class="text-center padding-spaced">forex</p>
        </div>
        <div class="col-md-3 text-center padding-spaced">
            <img src="img/person.png" alt="advert here" class="img-rounded"/>
            <p class="text-center padding-spaced">forex</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 whitesmoke-back pointed-div-hover">
            <p class="text-center">dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco read more</p>
        </div>
        <div class="col-md-3 whitesmoke-back pointed-div-hover">
            <p class="text-center">dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco read more</p>
        </div>
        <div class="col-md-3 whitesmoke-back pointed-div-hover">
            <p class="text-center">dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco read more</p>
        </div>
        <div class="col-md-3 whitesmoke-back pointed-div-hover">
            <p class="text-center">dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco read more</p>
        </div>
    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script type="application/javascript">
    $(document).ready(function(){
        $(".pointed-div-hover").hover(function(){
            $(this).removeClass("whitesmoke-back");
            $(this).addClass("orange-back");
        },function(){
            $(this).removeClass("orange-back");
            $(this).addClass("whitesmoke-back");
        });
    });
</script>
</body>
</html>