<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['csmsaid']==0)) {
  header('location:logout.php');
  } else{

//Code for Deletion
if($_GET['action']=='delete'){
$carid=intval($_GET['cid']);
$query=mysqli_query($con,"delete from tblcars where ID='$carid'");
if($query){
unlink($cpicpath);
echo "<script>alert('Car details deleted');</script>";
echo "<script type='text/javascript'> document.location = 'manage-cardetail.php'; </script>";
}else {
echo "<script>alert('Something went wrong. Please try again.');</script>"; 
}
}

  ?>
<!DOCTYPE html>
<html lang="en">

<head>
  
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Manage Car Detail | Car Showroom Management System</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />

</head>

<body>
  <!-- container section start -->
  <section id="container" class="">
    <!--header start-->
    <?php include_once('includes/header.php');?>
    <!--header end-->

    <!--sidebar start-->
    <?php include_once('includes/sidebar.php');?>

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-table"></i> Manage Car Detail</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="dashboard.php">Home</a></li>
              <li><i class="fa fa-table"></i>Car Detail</li>
              <li><i class="fa fa-th-list"></i>Manage Car Detail</li>
            </ol>
          </div>
        </div>
        <!-- page start-->
        <div class="row">
          <div class="col-sm-12">
            <section class="panel">
              <header class="panel-heading">
                Manage Car Detail
              </header>
              <table class="table">
                <thead>
                                        <tr>
                                            <tr>
                  <th>S.NO</th>
            
                  <th>Car Name</th>
                    <th>Car Company</th>
                    <th>Car Price</th>
                          <th>Action</th>
                </tr>
                                        </tr>
                                        </thead>
               <?php
$ret=mysqli_query($con,"select *from tblcars");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
              
                <tr>
                  <td><?php echo $cnt;?></td>
            
                  <td><?php  echo $row['CarName'];?></td>
                  <td><?php  echo $row['CarCompany'];?></td>
                  <td><?php  echo $row['CarPrice'];?></td>
                  <td><a href="edit-car-detail.php?editid=<?php echo $row['ID'];?>">Edit</a> | 
<a href="manage-cardetail.php?action=delete&&cid=<?php echo $row['ID'];?>" onclick="return confirm('Do you really want to delete the car details');" style="color:red;"> Delete</a></td>
                </tr>
                <?php 
$cnt=$cnt+1;
}?>
              </table>
            </section>
          </div>
       
        </div>
       
        <!-- page end-->
      </section>
    </section>
    <!--main content end-->
    <?php include_once('includes/footer.php');?>
  </section>
  <!-- container section end -->
  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- nicescroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!--custome script for all page-->
  <script src="js/scripts.js"></script>


</body>

</html>
<?php }  ?>