<!DOCTYPE html>
<?php include 'connectionInfo.php';?>
<html lang="en">
<head>
    <title>Confirmation Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrapStyles.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<?php include 'selectUserData.php'; ?>
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
                <li class="active"><a href="reg.php">Registration</a></li>
                <li><a href="anims.php">Animations</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <!--<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>-->
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid text-center">
    <div class="top">
        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 sidenav">
            <p><a class="btn btn-pubg" href="../home.php">Home</a></p>
            <p><a class="btn btn-pubg" href="reg.php">Registration</a></p>
            <p><a class="btn btn-pubg" href="anims.php">Animations</a></p>
        </div>
        <form style="color: black" id="myForm" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 text-left">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <h1 text-center style="color: #72FF29; text-shadow: 0 0 1px #297B00, 0 0 6px #555555;">
                            <b>Submitted!</b>
                        </h1>
                        <h3><b>Personal Information</b></h3>

                        <div id="firstNameDiv" class="form-group">
                            <label for="firstName">First Name:<sup style="color:red;">*</sup></label>
                            <input id="firstName" name="firstName" class="form-control"
                                   type="text" value="<?php echo $firstName; ?>" readonly/>
                        </div>

                        <div id="lastNameDiv" class="form-group">
                            <label for="lastName">Last Name:<sup style="color:red;">*</sup></label>
                            <input id="lastName" name="lastName" class="form-control"
                                   type="text" value="<?php echo $lastName; ?>" readonly/>
                        </div>

                        <div id="genderDiv" class="form-group">
                            <label>Gender:<sup style="color:red;">*</sup></label><br/>
                            <input id="maleGender" name="gender" value="maleGender"
                                   type="radio" <?php if($gender == "maleGender"){echo "checked";}else{ echo "disabled";} ?>>
                            <label for="maleGender">Male</label>
                            <input id="femaleGender" name="gender" value="femaleGender"
                                   type="radio" <?php if($gender == "femaleGender"){echo "checked";}else{ echo "disabled";} ?>>
                            <label for="femaleGender">Female</label>
                            <input id="otherGender" name="gender" value="otherGender"
                                   type="radio" <?php if($gender == "otherGender"){echo "checked";}else{ echo "disabled";} ?>>
                            <label for="otherGender">Other</label>
                        </div>

                        <div id="martialStatDiv" class="form-group">
                            <label>Martial Status:<sup style="color:red;">*</sup></label><br/>
                            <input id="single" name="martialStatus" value="single"
                                   type="radio" <?php if($maritalStatus == "single"){echo "checked";}else{ echo "disabled";} ?>>
                            <label for="single">Single</label>
                            <input id="married" name="martialStatus" value="married"
                                   type="radio"  <?php if($maritalStatus == "married"){echo "checked";}else{ echo "disabled";} ?>>
                            <label for="married">Married</label>
                            <input id="divorced" name="martialStatus" value="divorced"
                                   type="radio"  <?php if($maritalStatus == "divorced"){echo "checked";}else{ echo "disabled";} ?>>
                            <label for="divorced">Divorced</label>
                            <input id="widowed" name="martialStatus" value="widowed"
                                   type="radio"  <?php if($maritalStatus == "widowed"){echo "checked";}else{ echo "disabled";} ?>>
                            <label for="widowed">Widowed</label>
                        </div>

                        <div id="dateofbirthDiv" class="form-group">
                            <label for="dateofbirth">Date Of Birth:<sup style="color:red;">*</sup></label>
                            <input type="date" name="dateofbirth" id="dateofbirth" value="<?php echo $dateOfBirth; ?>" readonly>
                        </div>
                        <div id="addressLine1Div" class="form-group">
                            <label for="addressLine1">Address Line 1:<sup style="color:red;">*</sup></label>
                            <input id="addressLine1" name="addressLine1" class="form-control"
                                   type="text" value="<?php echo $addressLine1; ?>" readonly/>
                        </div>
                        <div id="addressLine2Div" class="form-group">
                            <label for="addressLine2">Address Line 2:</label>
                            <input id="addressLine2" name="addressLine2" class="form-control"
                                   type="text" value="<?php echo $addressLine2; ?>" readonly/>
                        </div>
                        <div id="cityDiv" class="form-group">
                            <label for="city">City:<sup style="color:red;">*</sup></label>
                            <input id="city" name="city" class="form-control"
                                   type="text" value="<?php echo $city; ?>" readonly/>
                        </div>
                        <div id="stateDiv" class="form-group">
                            <label for="state">State:<sup style="color:red;">*</sup></label>
                            <select id="state" name="state" class="form-control" disabled>
                                <option value="">--Please Select--</option>
                                <option value="AL" <?php if($state == "AL"){echo "selected";} ?> >Alabama</option>
                                <option value="AK" <?php if($state == "AK"){echo "selected";} ?> >Alaska</option>
                                <option value="AZ" <?php if($state == "AZ"){echo "selected";} ?> >Arizona</option>
                                <option value="AR" <?php if($state == "AR"){echo "selected";} ?> >Arkansas</option>
                                <option value="CA" <?php if($state == "CA"){echo "selected";} ?> >California</option>
                                <option value="CO" <?php if($state == "CO"){echo "selected";} ?> >Colorado</option>
                                <option value="CT" <?php if($state == "CT"){echo "selected";} ?> >Connecticut</option>
                                <option value="DE" <?php if($state == "DE"){echo "selected";} ?> >Delaware</option>
                                <option value="DC" <?php if($state == "DC"){echo "selected";} ?> >District of Columbia</option>
                                <option value="FL" <?php if($state == "FL"){echo "selected";} ?> >Florida</option>
                                <option value="GA" <?php if($state == "GA"){echo "selected";} ?> >Georgia</option>
                                <option value="HI" <?php if($state == "HI"){echo "selected";} ?> >Hawaii</option>
                                <option value="ID" <?php if($state == "ID"){echo "selected";} ?> >Idaho</option>
                                <option value="IL" <?php if($state == "IL"){echo "selected";} ?> >Illinois</option>
                                <option value="IN" <?php if($state == "IN"){echo "selected";} ?> >Indiana</option>
                                <option value="IA" <?php if($state == "IA"){echo "selected";} ?> >Iowa</option>
                                <option value="KS" <?php if($state == "KS"){echo "selected";} ?> >Kansas</option>
                                <option value="KY" <?php if($state == "KY"){echo "selected";} ?> >Kentucky</option>
                                <option value="LA" <?php if($state == "LA"){echo "selected";} ?> >Louisiana</option>
                                <option value="ME" <?php if($state == "ME"){echo "selected";} ?> >Maine</option>
                                <option value="MD" <?php if($state == "MD"){echo "selected";} ?> >Maryland</option>
                                <option value="MA" <?php if($state == "MA"){echo "selected";} ?> >Massachusetts</option>
                                <option value="MI" <?php if($state == "MI"){echo "selected";} ?> >Michigan</option>
                                <option value="MN" <?php if($state == "MN"){echo "selected";} ?> >Minnesota</option>
                                <option value="MS" <?php if($state == "MS"){echo "selected";} ?> >Mississippi</option>
                                <option value="MO" <?php if($state == "MO"){echo "selected";} ?> >Missouri</option>
                                <option value="MT" <?php if($state == "MT"){echo "selected";} ?> >Montana</option>
                                <option value="NE" <?php if($state == "NE"){echo "selected";} ?> >Nebraska</option>
                                <option value="NV" <?php if($state == "NV"){echo "selected";} ?> >Nevada</option>
                                <option value="NH" <?php if($state == "NH"){echo "selected";} ?> >New Hampshire</option>
                                <option value="NJ" <?php if($state == "NJ"){echo "selected";} ?> >New Jersey</option>
                                <option value="NM" <?php if($state == "NM"){echo "selected";} ?> >New Mexico</option>
                                <option value="NY" <?php if($state == "NY"){echo "selected";} ?> >New York</option>
                                <option value="NC" <?php if($state == "NC"){echo "selected";} ?> >North Carolina</option>
                                <option value="ND" <?php if($state == "ND"){echo "selected";} ?> >North Dakota</option>
                                <option value="OH" <?php if($state == "OH"){echo "selected";} ?> >Ohio</option>
                                <option value="OK" <?php if($state == "OK"){echo "selected";} ?> >Oklahoma</option>
                                <option value="OR" <?php if($state == "OR"){echo "selected";} ?> >Oregon</option>
                                <option value="PA" <?php if($state == "PA"){echo "selected";} ?> >Pennsylvania</option>
                                <option value="RI" <?php if($state == "RI"){echo "selected";} ?> >Rhode Island</option>
                                <option value="SC" <?php if($state == "SC"){echo "selected";} ?> >South Carolina</option>
                                <option value="SD" <?php if($state == "SD"){echo "selected";} ?> >South Dakota</option>
                                <option value="TN" <?php if($state == "TN"){echo "selected";} ?> >Tennessee</option>
                                <option value="TX" <?php if($state == "TX"){echo "selected";} ?> >Texas</option>
                                <option value="UT" <?php if($state == "UT"){echo "selected";} ?> >Utah</option>
                                <option value="VT" <?php if($state == "VT"){echo "selected";} ?> >Vermont</option>
                                <option value="VA" <?php if($state == "VA"){echo "selected";} ?> >Virginia</option>
                                <option value="WA" <?php if($state == "WA"){echo "selected";} ?> >Washington</option>
                                <option value="WV" <?php if($state == "WV"){echo "selected";} ?> >West Virginia</option>
                                <option value="WI" <?php if($state == "WI"){echo "selected";} ?> >Wisconsin</option>
                                <option value="WY" <?php if($state == "WY"){echo "selected";} ?> >Wyoming</option>
                            </select>
                        </div>
                        <div id="zipDiv" class="form-group">
                            <label for="zip">Zip:<sup style="color:red;">*</sup></label>
                            <input id="zip" name="zip" class="form-control"
                                   type="text" placeholder="xxxxx or xxxxx-xxxx" value="<?php echo $zip; ?>" readonly/>
                        </div>
                        <div id="telDiv" class="form-group">
                            <label for="tel">Phone Number:<sup style="color:red;">*</sup></label>
                            <input id="tel" name="tel" class="form-control"
                                   type="tel" placeholder="xxx-xxx-xxxx" value="<?php echo $tel; ?>" readonly/>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <h3><b>Registration</b></h3>
                        <div id="usernameDiv" class="form-group">
                            <label for="username">Username:<sup style="color:red;">*</sup></label>
                            <input id="username" name="username" class="form-control"
                                   type="text" value="<?php echo $userName; ?>" readonly/>
                        </div>
                        <div id="emailDiv" class="form-group">
                            <label for="email">Email:<sup style="color:red;">*</sup></label>
                            <input id="email" name="email" class="form-control"
                                   type="email" placeholder="x@x.xx" value="<?php echo $email; ?>" readonly/>
                        </div>
                        <div id="initPassDiv" class="form-group">
                            <label for="initialPassword">Password:<sup style="color:red;">*</sup></label>
                            <input id="initialPassword" name="initialPassword" class="form-control"
                                   type="password" value="<?php echo $initialPassword; ?>" readonly/>
                        </div>
                        <div id="verPassDiv" class="form-group">
                            <label for="verifyPassword">Verify Password:<sup style="color:red;">*</sup></label>
                            <input id="verifyPassword" name="verifyPassword" class="form-control"
                                   type="password" value="<?php echo $initialPassword; ?>" readonly/>
                        </div>
                        <div id="favMapDiv" class="form-group">
                            <label for="survey">Select Your Favorite Map:<sup style="color:red;">*</sup></label>
                            <select id="survey" name="survey" class="form-control" disabled>
                                <option value="">--Please Select--</option>
                                <option value="ER" <?php if($survey == "ER"){echo "selected";} ?>>Erangel</option>
                                <option value="MR" <?php if($survey == "MR"){echo "selected";} ?>>Miramar</option>
                                <option value="SH" <?php if($survey == "SH"){echo "selected";} ?>>Sanhok</option>
                                <option value="VK" <?php if($survey == "VK"){echo "selected";} ?>>Vikendi</option>
                                <option value="KR" <?php if($survey == "KR"){echo "selected";} ?>>Karakin</option>
                                <option value="TM" <?php if($survey == "TM"){echo "selected";} ?>>Traning Map</option>
                            </select>
                        </div>
                        <input id="submitButton" type="submit" class="btn btn-pubg" value="Submit Button" disabled>
                        <input id="resetButton" type="reset" class="btn btn-reset" value="Reset Button" disabled>
                        <p><sup style="color:red;">*</sup><b style="color: black;">Required</b></p>
                    </div>
                </div>
            </div>
        </form>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 sidenav">
            <video class="video-fluid z-depth-1" autoplay loop controls muted>
                <source id="pogger" src="../img/PUBG_GameplayTrailer.mp4" type="video/mp4"/>
            </video>
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