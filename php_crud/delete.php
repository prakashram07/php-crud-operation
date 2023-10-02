<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>CRUD Operation</title>
</head>

<body>
    <?php include "db.php" ?>
    <?php
    if (isset($_GET['delete'])) {
        $id = $_GET['delete'];
        $query = "DELETE FROM student WHERE id = {$id}";
        $delete_query = mysqli_query($conn, $query);
        echo "<script type='text/javascript'>alert('Student data deleted successfully!')</script>";
        header("Location: index.php");
    }
    ?>
</body>

</html>