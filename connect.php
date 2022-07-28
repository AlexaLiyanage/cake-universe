<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $c_name = $_POST['c_name'];
    $address = $_POST['address'];

   
    //database connection

    $conn = new mysqli('localhost','root','','test');
    if($conn->connect_error){
        die('Connection Failed :' .$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into cakeorder(name, email, number, c_name, address)
        values(?, ?, ?, ?, ?)");
        $stmt-> bind_param("ssiss", $name, $email, $number, $c_name, $address);
        $stmt->execute();
        echo "Order Successfully......";
        $stmt->close();
        $conn->close();
    }


?>
