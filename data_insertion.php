<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "newdb";

    $conn = new mysqli($servername, $username, $password, $db_name);

//    Super Globals like $_GET and $_POST
    $name = $_POST['name'];
    $address = $_POST['address'];

    $sql = "INSERT INTO student(name, address) VALUES ($name, $address)";
    $result = $conn->query($sql);

    if(!$result) {
        die ("Connection failed: " . $conn->error);
    }else{
        echo "New Record Created with the name " . $name. " Successfully";
    }

?>