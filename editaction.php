<?php
   $id  = $_POST['id'];
   $title = $_POST['title'];
   $description = $_POST['description'];
//    $date = $_POST['Date'];
//    $date = $_POST['date'];

   include 'database.php';

   $sql = "UPDATE todos SET title='$title',description='$description' WHERE id=$id";

   $result = mysqli_query($conn, $sql);

   if($result){
    header("location: ./index.php");
   }
?>