<?php
    $name= $_POST['name'];
    $value= $_POST['value'];
    $sql= "insert into roles (name, value) values ('$name', '$value')";
    $db= new PDO("mysql:dbhost=localhost;dbname=project", "root", "");
    $db->query($sql);
    header('Location: index.php');