<?php

include("dbconfig.php");

if (isset($_POST["userSignup"])) {
    $userName = $_POST["userName"];
    $userPassword = $_POST["userPassword"];
    $firstName = $_POST["firstName"];
    $middleName = $_POST["middleName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $role = $_POST["roles"];

    $query = "INSERT INTO `users`(`userName`, `userPassword`, `email`, `fistName`, `middleName`, `lastName`, `role`) VALUES ( '$userName', '$userPassword', '$email', '$firstName', '$middleName', '$lastName', '$role')";

    if ($conn->query($query) === TRUE) {
        echo "Inserted Successfully";
    } else {
        echo "Insertion Failed";
    }

    $conn->close();
}

?>