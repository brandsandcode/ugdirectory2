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

<nav class="navbar navbar-inverse" style="margin-bottom: 0px;">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Uganda Directory</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <form class="navbar-form navbar-right" role="search">
                <a href="adbus.php" type="button" class="btn btn-default">Add business</a>
            </form>
            <ul class="nav navbar-nav navbar-left">
                <li><a href="tourandtravel.php">tour & travel</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<nav class="navbar-default">
    <div class="container">
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="forex.php">Forex <span class="sr-only">(current)</span></a></li>
                <li><a href="business.php">Business</a></li>
                <li class="active"><a href="#">Tours & Travel</a></li>
                <li><a href="events.php">Events</a></li>
            </ul>
            <form class="navbar-form navbar-right" role="search">
                <div class="col-sm-12">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-search"></span>
                        </span>
                        <input type="text" placeholder="Search service/company" class="form-control" id="inputGroupSuccess2" aria-describedby="inputGroupSuccess2Status">
                    </div>
                </div>
            </form>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="row padding-small">
                <div class="col-md-6 shape-bg">
                    <img src="img/01.jpg" class="img-responsive" />
                </div>
                <div class="col-md-6">
                    <h4>River Nile</h4>
                    <p>Ugandan iuiu iubwi uwbiubi oiuueuqb uebieubfebfif fuefbfbfby fbeybiyi
                        ue oey eoe euubiuebfi eubeu euub dr r  rr iuiib</p>
                    <hr/>
                </div>
            </div>
            <div class="row padding-small">
                <div class="col-md-6 shape-bg">
                    <img src="img/02.jpg" class="img-responsive" />
                </div>
                <div class="col-md-6">
                    <h4>Kagera Falls</h4>
                    <p>Ugandan iuiu iubwi uwbiubi oiuueuqb uebieubfebfif fuefbfbfby fbeybiyi
                        ue oey eoe euubiuebfi eubeu euub dr r  rr iuiib</p>
                </div>
                <hr/>
            </div>
            <div class="row padding-small">
                <div class="col-md-6 shape-bg">
                    <img src="img/03.jpg" class="img-responsive" />
                </div>
                <div class="col-md-6">
                    <h4>New Viosion to serialize Wavamuno's book</h4>
                    <p>Ugandan iuiu iubwi uwbiubi oiuueuqb uebieubfebfif fuefbfbfby fbeybiyi
                        ue oey eoe euubiuebfi eubeu euub dr r  rr iuiib</p>
                </div>
                <hr/>
            </div>

        </div>
        <div class="col-md-4">
            <div class="row">
                <div>
                    <img src="img/01.jpg" height="200" width="300">
                </div>
                <div style="margin-top: 10px;">
                    <img src="img/01.jpg" height="200" width="300">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>