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
  if (isset($_POST['create'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];


    // SQL query to insert user data into the users table
    $query = "INSERT INTO student(name, email, contact, address) VALUES('{$name}','{$email}','{$contact}','{$address}')";
    $add_user = mysqli_query($conn, $query);

    // displaying proper message for the user to see whether the query executed perfectly or not 
    if (!$add_user) {
      echo "something went wrong " . mysqli_error($conn);
    } else {
      echo "<script type='text/javascript'>alert('Student created successfully!')</script>";
      // header("Location: index.php");
    }
  }
  ?>

  <h1 class="text-center">Add New Student </h1>
  <div class="container">
    <form action="" method="post">
      <div class="form-group">
        <strong for="name" class="form-label">Name :</strong>
        <input type="text" name="name" class="form-control" placeholder="Name" required>
      </div>

      <div class="form-group">
        <strong for="email" class="form-label">Email :</strong>
        <input type="email" name="email" class="form-control" placeholder="Email" required>
      </div>

      <div class="form-group">
        <strong for="contact" class="form-label">Contact :</strong>
        <input type="numeric" name="contact" class="form-control" placeholder="Contact" maxlength="10" required>
      </div>

      <div class="form-group">
        <strong for="address">Address :</strong>
        <textarea type="text" name="address" class="form-control" placeholder="Address" required></textarea>
      </div>

      <div class="container text-center mt-5">
        <input type="submit" name="create" class="btn btn-primary" value="Submit">
        <a href="index.php" class="btn btn-warning"> Back </a>
      </div>
    </form>
  </div>
</body>

</html>