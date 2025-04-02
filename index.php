<?php
    // $a  = 10;
    // $a = "milan";
    // $b = 5;
    // $array = ["Milan", 1, 10.5];
    // print_r($array);
    // echo "<br><h1> This is HTML COde heh</h1>";


    // foreach($array as  $value){
    //     echo "<br>";
    //     echo $value;
    // }

    // associative array
    // $assoc_array = [
    //     "name" => "Milan", 
    //     "age" => 25,
    //     "city" => "Kathmandu"
    // ];
    // print_r($assoc_array);

    // for ($i = 0; $i < count($array); $i++){
    //     echo "<br>";
    //     echo $array[$i];
    // }

    // echo "foreach with key and value pair";
    // foreach($assoc_array as $key => $value){
    //     echo "<br>";
    //     echo $key . " : " . $value;
    // }

    // echo "foreach with only value";
    // foreach($assoc_array as $value){
    //     echo "<br>";
    //     echo $value;
    // }



    // echo "Checking if b it is array";
    // echo is_array($b);

    // if(is_array($b)){
    //     echo "Yes, b is array";
    // }else{
    //     echo "No, b is not array";
    // }

    // if(is_array($array)){
    //     echo "Yes, array is array";
    // }

    

    // print($a);
    // print($b);

    // Database connection with php
    // $conn is object of mysqli class
    // class or constructor
    $conn = new mysqli("localhost", "root", "", "php_db");
    if($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }

    // creating table 

    // sql query of creating table
    $sql = "CREATE TABLE student(id int, name varchar(255), age int)";

    // executing sql query
    if($conn->query($sql) === TRUE){
        echo "Table created successfully";
    }

    // print_r($conn);
    // echo "Connected successfully";
?>