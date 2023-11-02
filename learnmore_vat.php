<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tax Calculator</title>
  <link rel="icon" type="image/x-icon" href="./assets/site_icon.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="stylesheet" href="capstone.css">
</head>

<body class="container-fluid">
  <div class="row py-2" style="background-color:#ffa500; top: 0;">
    <div class="col-12">
      <ul class="nav nav-underline justify-content-center">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="homepage.php" style="font-weight: bold; color: white;">Compute your tax</a>
        </li>
      </ul>
    </div>
  </div>

  <div class="content">
    <div class="container my-2">
      <div class="card">
        <div class="card-body terms-and-conditions">
          <h3 style="text-align: center;"><strong>Value-Added Tax</strong></h3>
          <p>
            Value-Added Tax is a type of business tax which can be deferred to the consumers. Its amount is equal to the price of the product multiplied by the VAT Rate.
          </p>
          <h4 style="text-align: center;"><strong>Types of Value-Added Tax</strong></h4>
          <h5><strong>Gross Amount</strong></h5>
          <p>This is the amount which is inclusive of the VAT, the price after VAT is calculated and added onto the original price.</p>
          <h5><strong>Nett Amount</strong></h5>
          <p>This is the amount which is exclusive of the VAT, the original price of the product.</p>
          <h4 style="text-align: center;"><strong>Value-Added Tax Calculation</strong></h4>
          <h5><strong>Gross Amount</strong></h5>
          <p>To calculate for the Gross Amount, we must first identify the price of the product. Afterwards, we can multiply the original price by the VAT Rate, which under TRAIN Law is 12%.</p>
          <h5><strong>Nett Amount</strong></h5>
          <p>To calculate for the Nett Amount, or the orginal price from the Gross Amount, first identify the Gross Amount. Afterwards, multiply the Gross amount by the VAT rate, which under TRAIN Law is 12%. Once we get the product, divide it by the Gross Amount again, and the quotient is the original price of the product.</p>

        </div>
      </div>
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>