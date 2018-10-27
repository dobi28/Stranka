<!DOCTYPE html>
<html lang="en">
<head>
    <title><?= $title ?> </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../public/style/layout.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="../public/script/layout.js"></script>
</head>
<body>
<div class="container">
    <div id="header">
        <img class="mySlides" src="../public/pictures/Main/stiahnuť%20(1).jpg">
        <img class="mySlides" src="../public/pictures/Main/stiahnuť%20(2).jpg">
    </div>
    <nav id="navbar" class="navbar navbar-inverse">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand">Logo</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li><a href="contact">Home</a></li>
                    <li><a href="#">link</a></li>
                    <li><a href="#">link</a></li>
                    <li><a href="#">link</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <?php if (empty($_SESSION["Nick_Name"])): ?> <a href="#"><span class="glyphicon glyphicon-log-in"></span> Prihlásiť</a> <?php else:  ?> <a><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION["Nick_Name"] ?> </a> <?php endif;?>
                    </li>
                    <li class="nav-item ">
                        <?php if (empty($_SESSION["Nick_Name"])): ?> <a href="#"><span ></span> Registrovať</a> <?php else:  ?> <a class="nav-link" href="addads.php?action=logout" ><span class="glyphicon glyphicon-log-out"></span> Odhlásiť </a> <?php endif;?>
                    </li>
                </ul>
            </div>
    </nav>

    <div class="col-sm-10">
        <?php $this->controller->showView(); ?>
    </div>

    <div class="col-sm-2">
        <div id="spk">
            <a href="http://www.polovnickakomora.sk/spk/">
                <img src="../public/pictures/Main/spk_logo.jpg" alt="Slovenská poľovnícka komora Bratislava">
            </a>
        </div>
        <div id="spkZM">
            <a href="https://opkzlatemoravce-sk4.webnode.sk/">
                <img src="../public/pictures/Main/spk_logoZM.jpg" alt="Slovenská poľovnícka komora Zlaté Moravce">
            </a>
        </div>
        <div id="opk">
            <a href="https://www.polovnictvo.sk/">
                <img src="../public/pictures/Main/okp_logo.jpg" alt="Obvodná poľovnícka komora">
            </a>
        </div>
        <div id="dane">
            <a href="#">
                <img src="../public/pictures/Main/dane.jpg" alt="Daň">
            </a>
        </div>
    </div>
</div>
</body>
</html>