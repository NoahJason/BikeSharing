<?php
function db()
{
    $sn = "localhost";
    $un = "root";
    $pw = "";
    $db = "BikeShare";

    $conn = new mysqli($sn, $un, $pw, $db);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failedasd: " . $conn->connect_error);
    }

    return $conn;
}

function insert_form() 
{
    // $firstName = $_POST['firstName'];
    // $lastName = $_POST['lastName'];
    // $email = $_POST['email'];
    // $message = $_POST['messages'];

    extract($_POST);

    $conn = db();

    $sql = "INSERT INTO contact(messageID, firstName, lastName, email, messages, messageDate) 
    VALUES (NULL,'$firstName', '$lastName', '$email', '$messages', NOW())";

    $ret = $conn->query($sql) or die($conn->error);
}
