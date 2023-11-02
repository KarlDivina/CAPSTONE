<?php
include "db_conn.php";
$id = $_GET["id"];

if (isset($_POST["submit"])) {
  $name = $_POST['name'];
  $value = $_POST['value'];


  $sql = "UPDATE `philhealth_variables` SET `name`='$name',`value`='$value' WHERE id = $id";

  $result = mysqli_query($conn, $sql);

  if ($result) {
    header("Location: index.php?msg=Data updated successfully");
  } else {
    echo "Failed: " . mysqli_error($conn);
  }
}

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

  <!-- philhealth -->
  <div class="container">
    <div class="text-center mt-4 mb-4">
      <h3>Edit PHILHEALTH Information</h3>
      <p class="text-muted">Click update after changing any information</p>
    </div>

    <?php
    $sql = "SELECT * FROM `philhealth_variables` WHERE id = $id LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>

    <div class="container d-flex justify-content-center">
      <form action="" method="post" style="width:50vw; min-width:300px;">
        <div class="row mb-3">
          <div class="col">
            <label class="form-label">Name:</label>
            <input type="text" class="form-control" name="name" value="<?php echo $row['name'] ?>" readonly>
          </div>

          <div class="col">
            <label class="form-label">Value:</label>
            <input type="text" class="form-control" name="value" value="<?php echo $row['value'] ?>">
          </div>
        </div>

        <div>
          <button type="submit" class="btn btn-success" name="submit">Update</button>
          <a href="index.php" class="btn btn-danger">Cancel</a>
        </div>
      </form>
    </div>
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