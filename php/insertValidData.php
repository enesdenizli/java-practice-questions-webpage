<?php
if ($isValid) {
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname",
            $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = $conn->prepare("INSERT INTO registration (firstName, lastName, gender, maritalStatus, 
        dateOfBirth, addressLine1, addressLine2, city, state, zip, tel, userName, email, initialPassword, survey)
		VALUES (:firstName, :lastName, :gender, :maritalStatus, :dateOfBirth,
		:addressLine1, :addressLine2, :city, :state, :zip, :tel,
		:userName, :email, :initialPassword, :survey)");
        $sql->bindParam(':firstName', $firstName);
        $sql->bindParam(':lastName', $lastName);
        $sql->bindParam(':gender', $gender);
        $sql->bindParam(':maritalStatus', $maritalStatus);
        $sql->bindParam(':dateOfBirth', $dateOfBirth);
        $sql->bindParam(':addressLine1', $addressLine1);
        $sql->bindParam(':addressLine2', $addressLine2);
        $sql->bindParam(':city', $city);
        $sql->bindParam(':state', $state);
        $sql->bindParam(':zip', $zip);
        $sql->bindParam(':tel', $tel);
        $sql->bindParam(':userName', $userName);
        $sql->bindParam(':email', $email);
        $sql->bindParam(':initialPassword', $initialPassword);
        $sql->bindParam(':survey', $survey);
        $sql->execute();

        $last_id = $conn->lastInsertId();
        $_SESSION["last_id"] = "$last_id";

        header("Location: confirmation.php");
    }
    catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    finally {
        $conn = null;
    }
}
