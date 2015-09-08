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

<div class="container" style="margin-left: auto; margin-right: auto;">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center padding-spaced orange">Forex</h1>
        </div>
    </div>
    <div class="col-md-6 pull-left">
        <p>
            Calculate currency and foreign exchange rates with this free currency converter. Rate the Uganda shillings with the Us Dollar, Euro, British pound,
            UAE Dirhan, Cjinese Yuan, Japanese Yen, South African Rand and all world currencies.
        </p>
        <strong>3rd Septemper 2015</strong>
        <form >
            <div class="form-group">
                <input type="number" class="form-control" id="camount" placeholder="Amount">
            </div>
            <div class="form-group">
                <select name="currency1" class="form-control">
                    <option value="">USD</option>
                    <option value="">Pound Sterling</option>
                    <option value="">Japanese Yen</option>
                    <option value="">South Africaan Rand</option>
                    <option value="">Chinese Yuan</option>
                    <option value="">Kenyan Shilling</option>
                </select>
            </div>
            <div class="form-group">
                <select name="currency1" class="form-control">
                    <option value="">USD</option>
                    <option value="">Pound Sterling</option>
                    <option value="">Japanese Yen</option>
                    <option value="">South Africaan Rand</option>
                    <option value="">Chinese Yuan</option>
                    <option value="">Kenyan Shilling</option>
                </select>
            </div>
        </form>
        <p class="text-success center-block" style="border: solid 1px #f96332; height: 40px;">
            Result
        </p>
    </div>
    <div class="col-lg-4 pull-right">
        <div>
            <img src="img/01.jpg" height="200" width="300">
        </div>
        <div style="margin-top: 10px;">
            <img src="img/01.jpg" height="200" width="300">
        </div>
    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>