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
          <h3 style="text-align: center;"><strong>Income Tax</strong></h3>
          <p>
            Income tax is a type of tax we pay to our government from our earnings, or income. This can be calculated by first computing any deductions, such as payments to PhilHealth, SSS, and PagIBIG. Afterwards, we may apply the graduated income tax table to identify where in the tax bracket we would fall. Identifying our tax bracket allows us to apply the correct formula for calculating the amount of income tax we must pay to our government.
          </p>
          <h4 style="text-align: center;"><strong>Deductions</strong></h4>
          <p>Before calculating for our Income Tax, we must first calculate the deductions, which is the amount of contributions we've paid to government agencies such as PhilHealth, SSS, and PagIBIG.</p>
          <h5><strong>PhilHealth</strong></h5>
          <p>The PhilHealth contribution has a premium rate of 4% of your monthly basic salary. This has a floor of ₱400 per month and a ceiling of ₱3,200 per month. This contribution is split in half between you and your employer.</p>
          <h5><strong>SSS</strong></h5>
          <p>Your SSS contribution increases incrementally depending on your monthly basic salary. This ranges from below ₱4,250 up to above ₱29,750. Refer to the <a href="https://sprout.ph/blog/how-to-calculate-your-sss-monthly-contribution/" style="color: black; font-weight: bold;">SSS Contribution Table</a> for detailed information regarding your contribution dependent on your monthly basic salary. This contribution is paid in half by you, the employee, and in half by your employer.</p>
          <h5><strong>PagIBIG</strong></h5>
          <p>Your PagIBIG contribution is also paid in half by you and your employer. If you're monthly income is ₱1,500 or below, it is 1% of your monthly basic income. If it is above ₱1,500, this is 2%. This is capped at ₱100 for both you and your employer per month.</p>
          <h4 style="text-align: center;"><strong>Graduated Income Tax Table</strong></h4>
          <p>After deductions, your income tax bracket is dependent on the graduated income tax table, which can be found <a href="https://taxsummaries.pwc.com/philippines/individual/taxes-on-personal-income" style="color: black; font-weight: bold;">here</a>. The calculation to be used is dependent on where you fall within the tax bracket.</p>
          <h4 style="text-align: center;"><strong>Income Tax Calculation</strong></h4>
          <p>As an example, let us take someone with a basic monthly salary of ₱30,000 and calculate their income tax.</p>
          <p>Monthly Income - ₱30,000</p>
          <p>Annual Income - ₱360,000</p>
          <p>PhilHealth - ₱360,000 x 0.04 / 2 = ₱7,200</p>
          <p>SSS - per the contribution table, you will be paying ₱16,200 annually.</p>
          <p>PagIBIG - ₱30,000 > ₱1,500, therefore ₱100 x 12 = ₱1,200</p>
          <h4><strong>Deductions = ₱24,600</strong></h4>
          <p>Annual - Deductions = ₱360,000 - ₱24,600 = 335,400</p>
          <p>Income Tax - ₱250,000 < ₱335,400 < ₱400,000, therefore you will be taxed 15% the excess of ₱250,000, after deductions.</p>
              <h4><strong>₱335,400 - ₱250,000 = ₱85,400 * 15% = ₱12,810 in income tax.</strong></h4>

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