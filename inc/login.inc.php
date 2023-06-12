<?php
require 'functions.inc.php';

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];


    if (emptyInputLogin($username, $password)) {
        header("location: ../php/login.php?error=emptyinput");
        exit();
    }

    if (userExist($conn ,$username)) {
        header("location: ../php/login.php?error=userInvalid");
        exit();
    }

    loginUser($conn, $username, $password);

}

if (isset($_POST["submit"])) {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $passwordRepeat = $_POST["passwordRepeat"];

    $conn = db();


    if (invalidUsername($username) !== false) {
        header("location: ../php/signup.php?error=usernameInvalid");
        exit();
    }

    if (invalidEmail($email) !== false) {
        header("location: ../php/signup.php?error=emailInvalid");
        exit();
    }

    if (passwordMatch($password, $passwordRepeat) !== false) {
        header("location: ../php/signup.php?error=passwordsdontmatch");
        exit();
    }

    if (usernameExists($conn, $username, $email) !== false) {
        header("location: ../php/signup.php?error=userOrEmailInvalid");
        exit();
    }

    createUser($name, $email, $username, $password);
}

else {
    header("location: ../php/signup.php");
}
