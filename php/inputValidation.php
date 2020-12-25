<?php

$firstName = $lastName = $gender = $maritalStatus = $dateOfBirth = "";
$addressLine1 = $addressLine2 = $city = $state = $zip = $tel = "";
$userName = $email = $initialPassword = $verifyPassword = $survey ="";

$firstNameErr = $lastNameErr = $genderErr = $maritalStatusErr = $dateOfBirthErr = "";
$addressLine1Err = $addressLine2Err = $cityErr = $stateErr = $zipErr = $telErr = "";
$userNameErr = $emailErr = $initialPasswordErr = $verifyPasswordErr = $surveyErr ="";

$isValid = false;

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $isValid = true;

    $firstName = clean($_POST["firstName"]);
    if(empty($firstName)) {
        $firstNameErr = "Server: Please enter a first name.";
        $isValid = false;
    }
    else {
        if(strlen($firstName) > 50) {
            $firstNameErr = "Server: First name is too long.";
            $isValid = false;
        }
    }

    $lastName = clean($_POST["lastName"]);
    if(empty($lastName)) {
        $lastNameErr = "Server: Please enter a last name.";
        $isValid = false;
    }
    else {
        if(strlen($lastName) > 50) {
            $lastNameErr = "Server: Last name is too long.";
            $isValid = false;
        }
    }

    if (isset($_POST["gender"])) {
        $gender = clean($_POST["gender"]);
        if (empty($gender)){
            $genderErr = "Server: Please choose a gender.";
            $isValid = false;
        }
    }
    else {
        $genderErr = "Server: Please choose a gender.";
        $isValid = false;
    }

    if (isset($_POST["maritalStatus"])) {
        $maritalStatus = clean($_POST["maritalStatus"]);
        if (empty($maritalStatus)) {
            $maritalStatusErr = "Server: Please choose a marital status.";
            $isValid = false;
        }
    }
    else {
        $maritalStatusErr = "Server: Please choose a marital status";
        $isValid = false;
    }

    $dateOfBirth = clean($_POST["dateOfBirth"]);
    if(empty($dateOfBirth)) {
        $dateOfBirthErr = "Server: Please pick a date of birth.";
        $isValid = false;
    }

    $addressLine1 = clean($_POST["addressLine1"]);
    if(empty($addressLine1)) {
        $addressLine1Err = "Server: Please enter an address.";
        $isValid = false;
    }
    else {
        if(strlen($addressLine1) > 100) {
            $addressLine1Err = "Server: Address is too long.";
            $isValid = false;
        }
    }

    $addressLine2 = clean($_POST["addressLine2"]);
    if(strlen($addressLine2) > 100) {
        $addressLine2Err = "Server: Address is too long.";
        $isValid = false;
    }

    $city = clean($_POST["city"]);
    if(empty($city)) {
        $cityErr = "Server: Please enter a city name.";
        $isValid = false;
    }
    else {
        if(strlen($city) > 50) {
            $cityErr = "Server: City name is too long.";
            $isValid = false;
        }
    }

    $state = clean($_POST["state"]);
    if($state == "") {
        $stateErr = "Server: Please choose a state.";
        $isValid = false;
    }

    $zip = clean($_POST["zip"]);
    if(empty($zip)) {
        $zipErr = "Server: Please enter a zip code.";
        $isValid = false;
    }
    else if(!preg_match('/(^\d{5}$)|(^\d{5}-\d{4}$)/', $zip)) {
                    $zipErr = "Server: Invalid zip code format.";
                    $isValid = false;
    }

    $tel = clean($_POST["tel"]);
    if(empty($tel)) {
        $telErr = "Server: Please enter a phone number.";
        $isValid = false;
    }
    else if(!preg_match('/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/', $tel)) {
        $telErr = "Server: Invalid zip code format.";
        $isValid = false;
    }

    $userName = clean($_POST["userName"]);
    if(empty($userName)) {
        $userNameErr = "Server: Please enter a user name.";
        $isValid = false;
    }
    else {
        if (strlen($userName) < 6 || strlen($userName) > 50) {
            $userNameErr = "Server: Please enter a username between 6-50 characters long.";
            $isValid = false;
        }
    }

    $email = clean($_POST["email"]);
    if(empty($email)) {
        $emailErr = "Server: Please enter an email address.";
        $isValid = false;
    }
    else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Server: Email address is invalid.";
        }
    }

    $initialPassword = clean($_POST["initialPassword"]);
    if(empty($initialPassword)) {
        $initialPasswordErr = "Server: Please enter a password.";
        $isValid = false;
    }
    else {
        if(!preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,50}$/", $initialPassword)) {
                $initialPasswordErr = "Server: Password must contain a capital letter, a digit, and a special character";
                $isValid = false;
            }
    }

    $verifyPassword = clean($_POST["verifyPassword"]);
    if(empty($verifyPassword)) {
        $verifyPasswordErr = "Server: Please enter a password.";
        $isValid = false;
    }
    else if($verifyPassword != $initialPassword) {
            $verifyPasswordErr = "Server: Passwords does not match.";
            $isValid = false;
    }

    $survey = clean($_POST["survey"]);
    if($survey == "") {
        $surveyErr = "Server: Please select a map.";
        $isValid = false;
    }
}

function clean($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>