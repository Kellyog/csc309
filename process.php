<?php
    $server = 'localhost'; // 127.0.0.1
    $username = 'root';
    $password = 'rootroot';
    $db = 'csc309';

    // Open a new connection
    $con = new mysqli($server, $username, $password, $db);

    // Check connection
    if ($con->connect_error){
        die("Connection failed: " . $con->connect_error);
    }

    // Query
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $date_of_birth = $_POST['date of birth'];

    $sql = "INSERT INTO users (firstname, lastname, email) 
    VALUES ('$firstname', '$lastname', '$email', '$gender','$date_of_birth')";

    $result = $con->query($sql);

    if ($result === true) {
        echo 'Record inserted successfully';
    } else {
        echo 'Error inserting record: ' . $con->error;
    }

    // Close connection
    $con->close();
?>
