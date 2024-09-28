<?php
    echo $id= $_POST['id'];
    echo $name= $_POST['name'];
    echo $value= $_POST['value'];
    $sql= "update roles set name='$name', value='$value' where id=$id";
    $db= new PDO("mysql:dbhost=localhost;dbname=project", "root", "");
    $db->query($sql);
    header('Location: index.php');