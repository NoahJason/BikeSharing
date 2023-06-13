<?php
include "db.php";

//sign up
function invalidUsername($username) {
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $result = true;
    }

    else {
        $result = false;
    }
    
    return $result;
}

function invalidEmail($email) {
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }

    else {
        $result = false;
    }
    
    return $result;
}

function passwordMatch($password, $passwordRepeat) {
    $result;
    if ($password !== $passwordRepeat) {
        $result = true;
    }

    else {
        $result = false;
    }
    
    return $result;
}

function usernameExists($conn, $username, $email) {
    $sql = "SELECT * FROM users Where usersUsername = ? OR usersEmail = ?;";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $email);

    $stmt->execute();

    $result = $stmt->get_result(); // get the mysqli result
    $result = $result->fetch_assoc();
    
    //die(var_dump($result));
    return !!$result;
}

function createUser() {
    if (isset($_POST["username_signup"]) && isset($_POST["email"]) && isset($_POST["password_signup"])) {  
        $conn = db();
        $username = $_POST["username_signup"];
        $email = $_POST["email"];
        $username = $_POST["username_signup"];
        $password = $_POST["password_signup"];
    
        $password = password_hash($password, PASSWORD_BCRYPT);
        $sql = "INSERT INTO `users`(`usersUsername`, `usersEmail`, `usersPassword`) 
        VALUES ('$username','$email','$password');";
        $conn->query($sql) or die();
    }
}

function updateUser(){
    // $firstName = $_POST['firstName'];
    // $lastName = $_POST['lastName'];
    // $email = $_POST['email'];
    // $message = $_POST['messages'];
    extract($_POST);

    $conn = db();

   $sql = "INSERT INTO `users`(`usersStreet`, `usersNr`, `usersNrAdd`, `usersZip`, `usersCountry`, `usersNumber`) VALUES ('$street','$nr'v '$toevoeging','$zip','$country','$phone')";

   $sql = "UPDATE users SET usersStreet = $streets , column2 = value2, ... WHERE usersId = $userId";

    $ret = $conn->query($sql) or die($conn->error);

}

//Login
function emptyInputLogin($username, $password) {
    $result;
    if (empty($username) || empty($password)) {
        $result = true;
    }
    else {
        $result = false;
    }

    return $result;
}

function userExist($conn, $username)
{
    $sql = "SELECT * FROM users Where usersUsername = ?;";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);

    $stmt->execute();

    $result = $stmt->get_result(); // get the mysqli result
    $result = $result->fetch_assoc();

    return true;
}

function login()
{
    $conn = db();
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        $username = $_POST["username"];
        $passwordUser = $_POST["password"];
        $password = $_POST["password"];
        $sql2 = "SELECT * FROM `users` WHERE usersUsername = '$username'";
        $result2 = $conn->query($sql2);
        while($row = $result2->fetch_assoc()){
            if ($username == $row["usersUsername"]) {
                $passwordUser = $row["usersPassword"];
            }
        }
        $checkPassword = password_verify($password, $passwordUser);
        $sql = "SELECT * FROM `users` WHERE usersUsername = '$username' AND usersPassword = '$passwordUser'";
        if ($checkPassword) {
            $result = $conn->query($sql);
            if ($result->num_rows == 1) {
                $user = $result->fetch_assoc();
                $_SESSION["user"] = $user;
                header("location: ../index.php");
            } else {
                echo "wrong username";
            }
        } else {
            echo "wrong username or password";
        }
    }
}