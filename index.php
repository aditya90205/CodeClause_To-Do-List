<!DOCTYPE html>
<html>

<head>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>To Do Application By Aditya Srivastav</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
 
</head>
</head>

<body>
<div class="cursor"></div>
  
  <nav class="navbar py-1">
    <div class="logo">
      <img src="https://stock-note.netlify.app/media/Logo.png" alt="Stock Tasks">
    </div>
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
    <button data-text="Awesome" class="button" id="hireme">
      <span class="actual-text">&nbsp;Hire_Me&nbsp;</span>
      <span class="hover-text" aria-hidden="true">&nbsp;Hire_Me&nbsp;</span>
  </button>
  </nav>
  
    <h1 class="text-center my-4 py-4">Welcome To ToDo List</h1>
    <div class="container">
      <div class="w-50 m-auto">
        <form action="data.php" method="post">
          <label for="title" class="h5">Task:</label>
          <input class="form-control mb-3" type="text" id="title" name="title" placeholder="Enter Your Task" require>
          <label for="description" class="h5">Description:</label>
          <input class="form-control mb-3" type="text" id="description" name="description" placeholder="Enter Your Description" require>
          <button class="btn btn-success w-20 mx-auto add">Add To ToDo</button>
        </form>
      </div>
      <br>
      <hr class="bg-dark w-50 m-auto">
      <div class="w-80 mx-4">
        <h2 class="my-2 list" style="text-align: center;">Your Lists</h2>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">S.No</th>
      <th scope="col">Task</th>
      <th scope="col">Description</th>
      <th scope="col">Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
     <?php
     include 'database.php';
     $sql = "SELECT * FROM todos";
     $result = mysqli_query($conn,$sql);
     if($result){
      while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $title = $row['Title'];
        $description = $row['Description'];
        $date = $row['Date'];
      
      ?>
      <tr>
        <td><?php echo $id ?></td>
        <td><?php echo $title ?></td>
        <td><?php echo $description ?></td>
        <td><?php echo $date ?></td>
        <td>
          <a href="edit.php?id=<?php echo $id ?>" class="btn btn-success btn-sm">Edit</a>
          <a href="delete.php?id=<?php echo $id ?>" class="btn btn-danger btn-sm">Delete</a>
        </td>
      </tr>
      <?php
      }
     }
     ?>
  </tbody>
</table>
      </div>
    </div>
  <script src="script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>
