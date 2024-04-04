<?php include_once('includes/dbconnection.php'); ?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

   
    <title>Preowned/Used Car Selling Portal</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

<?php include_once('includes/header.php');?>

    <!-- Page Content -->
    <div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-3-1920x500.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h2>Car Companies</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="services section-background">
      <div class="container">
        <div class="row">
<?php
$query=mysqli_query($con,"select * from tblcompany");
while ($row=mysqli_fetch_array($query)) {

?>

          <div class="col-md-3">
            <div class="service-item">
              <div class="icon">
            <img src="admin/images/<?php echo $row['CompanyImage'];?>" width="200" height="100">
              </div>
<a href="companywise-cars.php?company=<?php echo $row['CompanyName'];?>">
              <div class="down-content">
                <h4><?php echo $row['CompanyName'];?></h4>

              </div>
            </a>
            </div>
          </div>
   <?php } ?>
        </div>

    
      </div>
    </div>
    
<?php include_once('includes/footer.php');?>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
  </body>

</html>
