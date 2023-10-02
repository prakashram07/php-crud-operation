<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  <!-- Bootstrap Icon -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <title>CRUD Operation</title>
</head>

<body>
  <?php include "db.php" ?>

  <?php
  // checking if the variable is set or not and if set adding the set data value to variable userid
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
  }
  // SQL query to select all the data from the table where id = $userid
  $query = "SELECT * FROM student WHERE id = $id ";
  $view_users = mysqli_query($conn, $query);

  while ($row = mysqli_fetch_assoc($view_users)) {
    $id = $row['id'];
    $name = $row['name'];
    $email = $row['email'];
    $contact = $row['contact'];
    $address = $row['address'];
  }

  ?>

  <h1 class="text-center">Show Student Details</h1>
  <div class="container ">
    <form action="" method="post">
      <div class="form-group">
        <strong for="name">Name :</strong>
        <input type="text" name="name" class="form-control" readonly value="<?php echo $name  ?>">
      </div>

      <div class="form-group">
        <strong for="email">Email :</strong>
        <input type="email" name="email" class="form-control" readonly value="<?php echo $email  ?>">
      </div>

      <div class="form-group">
        <strong for="contact">Contact :</strong>
        <input type="numeric" name="contact" class="form-control" readonly value="<?php echo $contact  ?>">
      </div>

      <div class="form-group">
        <strong for="address">Address :</strong>
        <textarea type="text" name="address" class="form-control" readonly><?php echo $address  ?></textarea>
      </div>

      <div class="container text-center mt-5">
        <a href="index.php" class="btn btn-warning"> Back </a>
        <div>
    </form>
  </div>
</body>

</html>