<?php
    $id= $_GET['id'];
    $db= new PDO("mysql:dbhost=localhost;dbname=project", "root", "");
    $sql= "delete from roles where id=$id";
    $db->query($sql);
    header('Location: index.php');