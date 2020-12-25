<?php
try {
    $last_id = $_SESSION["last_id"];
    //echo "<br/>ID: $last_id<br/>";
    $conn = new PDO("mysql:host=$servername;dbname=$dbname",
        $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT firstName, lastName, gender, maritalStatus, 
        dateOfBirth, addressLine1, addressLine2, city, state, zip, tel, userName, email, initialPassword, survey ".
        " FROM registration WHERE id = :last_id");
    $stmt->bindParam(':last_id', $last_id);
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    //var_dump($stmt->fetchAll()[0]);
    $assocArray = $stmt->fetchAll()[0];
    $firstName = $assocArray["firstName"];
    $lastName = $assocArray["lastName"];
    $gender = $assocArray["gender"];
    $maritalStatus = $assocArray["maritalStatus"];
    $dateOfBirth = $assocArray["dateOfBirth"];
    $addressLine1 = $assocArray["addressLine1"];
    $addressLine2 = $assocArray["addressLine2"];
    $city = $assocArray["city"];
    $state = $assocArray["state"];
    $zip = $assocArray["zip"];
    $tel = $assocArray["tel"];
    $userName = $assocArray["userName"];
    $email = $assocArray["email"];
    $initialPassword = $assocArray["initialPassword"];
    $survey = $assocArray["survey"];
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
} finally {
    $conn = null;
}
?>