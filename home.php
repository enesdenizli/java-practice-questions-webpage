<!DOCTYPE html>
<html lang="en">
<head>
    <title>Project 4</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrapStyles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse container-fluid">
    <div class="navbar-header">
        <img id="pogo" href="./home.php" src="img/PUBG_logo.png" alt="PUBG">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
            <li class="active"><a href="./home.php">Home</a></li>
            <li><a href="php/reg.php">Registration</a></li>
            <li><a href="php/anims.php">Animations</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <!--<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>-->
        </ul>
    </div>
</nav>

<div class="container-fluid text-center">
    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 sidenav container-fluid">
        <p><a class="btn btn-pubg" href="./home.php">Home</a></p>
        <p><a class="btn btn-pubg" href="php/reg.php">Registration</a></p>
        <p><a class="btn btn-pubg" href="php/anims.php">Animations</a></p>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 container-fluid">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="img/pubg_season7.jpg" alt="Season 7">
                    <div class="carousel-caption">
                        <h3><b>Season 7 is here!</b></h3>
                        <p>Get your special loots by earning BPs in several maps!</p>
                    </div>
                </div>

                <div class="item">
                    <img src="img/pubg_fight.jpg" alt="fight">
                    <div class="carousel-caption">
                        <h3><b>Did you try the new Rank-Mode?</b></h3>
                        <p>New Rank-Mode gives better fights as good as you get!</p>
                    </div>
                </div>

                <div class="item">
                    <img src="img/pubg_war.jpg" alt="war">
                    <div class="carousel-caption">
                        <h3><b>Pick your favorite map!</b></h3>
                        <p>Did you pick your favorite map? You can pick your favorite map on registration
                            page!</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="rightSide container-fluid">
            <h1>What is PUBG?</h1>
            <p class="lead">
                PlayerUnknown's Battlegrounds (PUBG) is an online first person shooter (FPS) and third person
                shooter (TPS) multiplayer battle royale game that up to 100 players parachute from an ongoing
                plane to a particular map where each player tries survive without getting killed by other
                players. The safe area of the game's map decreases in size over time by a circle shaped
                blue-zone, directing surviving players into tighter areas to force encounters. The last player
                or team standing wins the round.
            </p>
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

<!--<div id="goTop">-->
<!--    <a href="#pogo" class="btn-pubg">^</a>-->
<!--</div>-->

</body>
</html>
