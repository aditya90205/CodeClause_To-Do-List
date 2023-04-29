<?php
    $title = $_POST['title'];
    $description = $_POST['description'];

    include 'database.php';

    $sql = "INSERT INTO todos(title,description)VALUES('$title','$description')";

    $result = mysqli_query($conn,$sql);
    if($result){
        header("location:./index.php");
    }
?>