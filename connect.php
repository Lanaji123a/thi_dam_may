<?php
    $servername="localhost";
    $username="root";
    $password = "";
    $database ="learnning";

    $conn = mysqli_connect($servername,$username,$password,$database);
    if(!$conn){
        echo("Connect failed");
    }
    else{
        echo("Connect successful");
    }

?>