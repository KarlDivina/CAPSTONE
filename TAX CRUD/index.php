<?php
include "db_conn.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tax Calculator</title>
  <link rel="icon" type="image/x-icon" href="../assets/site_icon.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="stylesheet" href="../capstone.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body class="container-fluid">
  <div class="row py-2" style="background-color:#ffa500; top: 0;">
    <div class="col-12">
      <ul class="nav nav-underline justify-content-center">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="homepage.php" style="font-weight: bold; color: white;">Compute your tax</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="../login system/logout.php" style="font-weight: bold; color: white;">Logout</a>
        </li>
      </ul>
    </div>
  </div>
  <!-- <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
    TAX CRUD Application
  </nav> -->

  <div class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>

    <!-- <a href="add-new.php" class="btn btn-dark mb-3">Add New</a> -->
    <h3 style="margin-top: 2em;">Rates</h3>
    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Name</th>
          <th scope="col">Value</th>
          <th scope="col">Edit</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM `rates`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["name"] ?></td>
            <td><?php echo $row["value"] ?></td>
            <td>
              <a href="edit_rates.php?id=<?php echo $row["id"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
              <!-- <a href="delete.php?id= <?php echo $row["id"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a> -->
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
    <br>


    <!-- <a href="add-new.php" class="btn btn-dark mb-3">Add New</a> -->
    <h3>PAG-IBIG</h3>
    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Name</th>
          <th scope="col">Value</th>
          <th scope="col">Edit</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM `pagibig_variables`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["name"] ?></td>
            <td><?php echo $row["value"] ?></td>
            <td>
              <a href="edit_pagibig.php?id=<?php echo $row["id"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
              <!-- <a href="delete.php?id=<?php echo $row["id"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a> -->
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
    <br>

    <!-- <a href="add-new.php" class="btn btn-dark mb-3">Add New</a> -->
    <h3>PHILHEALTH</h3>
    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Name</th>
          <th scope="col">Value</th>
          <th scope="col">Edit</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM `philhealth_variables`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["name"] ?></td>
            <td><?php echo $row["value"] ?></td>
            <td>
              <a href="edit_philhealth.php?id=<?php echo $row["id"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
              <!-- <a href="delete.php?id=<?php echo $row["id"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a> -->
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
    <br>

    <!-- <a href="add-new.php" class="btn btn-dark mb-3">Add New</a> -->
    <h3>SSS</h3>
    <table class="table table-hover text-center" style="margin-bottom: 5em;">
      <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Name</th>
          <th scope="col">Value</th>
          <th scope="col">Edit</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM `sss_variables`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["name"] ?></td>
            <td><?php echo $row["value"] ?></td>
            <td>
              <a href="edit_sss.php?id=<?php echo $row["id"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
              <!-- <a href="delete.php?id=<?php echo $row["id"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a> -->
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>

  <div class="footer row d-flex justify-content-between" style="width: inherit; bottom: 0; position: fixed; margin-bottom: -1em;">
    <div class="col-2">
      <strong>
        <p><a href="terms.php" style="text-decoration: none; color: white;">Terms and Conditions</a></p>
      </strong>
    </div>
    <div class="col-8">
      <strong>
        <p>Divina & Sison &copy; 2023
      </strong>
    </div>
    <div class="col-2">
      <strong>
        <p><a href="privacy.php" style="text-decoration: none; color: white;">Privacy Policy</a></p>
      </strong>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>

</html>