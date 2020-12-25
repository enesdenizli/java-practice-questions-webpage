<!DOCTYPE html>
<html lang="en">
<head>
    <title>Project 4</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrapStyles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <img id="pogo" href="./home.php" src="../img/PUBG_logo.png" alt="PUBG">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="../home.php">Home</a></li>
                <li><a href="reg.php">Registration</a></li>
                <li class="active"><a href="./anims.php">Animations</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <!--<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>-->
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid text-center">
    <div class="container-fluid">
        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 sidenav">
            <p><a class="btn btn-pubg" href="../home.php">Home</a></p>
            <p><a class="btn btn-pubg" href="reg.php">Registration</a></p>
            <p><a class="btn btn-pubg" href="./anims.php">Animations</a></p>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
            <div class="container-fluid">
                <div class="container-fluid img-responsive" id="wrapper">
                    <div class="background container-fluid"><img class="img-responsive" src="../img/pubg_first.jpg"
                                                                 alt="animation background"/>
                    </div>
                    <div class="dust container-fluid"><img class="img-responsive" src="../img/smok.png"
                                                           alt="smoke effect"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="container-fluid text-center">
    <div class="col-xs-12 col-sm-12 col-md-4">
        <label>Related Websites</label>
        <p><a class="btn-pubg" href="https://www.pubg.com/en-us/" target="_blank"><b>PUBG Official
            Website</b></a></p>
        <p><a class="btn-pubg" href="https://pubg.gamepedia.com/PLAYERUNKNOWNS_BATTLEGROUNDS_Wiki"
              target="_blank"><b>PUBG Gamepedia</b></a></p>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-4">
        <label>Social Media</label>
        <p><a class="btn-pubg" href="https://www.youtube.com/channel/UCnXDQbqIdp-HQuDyM4p12ng"
              target="_blank"><b>Official YouTube Channel</b></a></p>
        <p><a class="btn-pubg" href="https://www.twitch.tv/pubg?twitch5=0"
              target="_blank"><b>Official Twitch Channel</b></a></p>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-4">
        <label>PUBG Game Access</label>
        <p><a class="btn-pubg" href="https://store.steampowered.com/app/578080/PLAYERUNKNOWNS_BATTLEGROUNDS/"
              target="_blank"><b>Steam</b></a></p>
        <p><a class="btn-pubg"
              href="https://stadia.google.com/store/details/a4c5eb3f4e614b7fadbba64cba68f849rcp1/sku/be9526126d394061b0eef9b16352357e"
              target="_blank"><b>Stadia</b></a></p>
    </div>
</footer>

</body>
</html>
