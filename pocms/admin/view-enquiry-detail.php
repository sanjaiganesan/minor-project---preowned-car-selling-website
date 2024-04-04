<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['csmsaid']==0)) {
  header('location:logout.php');
  } else{
   if(isset($_POST['submit']))
  {
    
    $cid=$_GET['viewid'];
      $remark=$_POST['remark'];
      $status='Answer';
     
 
    
     
   $query=mysqli_query($con, "update  tblenquiry set AdminRemark='$remark',Status='$status' where ID='$cid'");
    if ($query) {
    $msg="All remarks has been updated.";
  }
  else
    {
      $msg="Something Went Wrong. Please try again";
    }

  
} 

?>

<!DOCTYPE html>
<html lang="en">

<head>
  
  <link rel="shortcut icon" href="img/favicon.png">

  <title>View Enquiry | Car Showroom Management System</title>

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
            <h3 class="page-header"><i class="fa fa-table"></i>View Enquiry</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="dashboard.php">Home</a></li>
              <li><i class="fa fa-table"></i>Enquiry</li>
              <li><i class="fa fa-th-list"></i>View Enquiry</li>
            </ol>
          </div>
        </div>
        <!-- page start-->
        <div class="row">
          <div class="col-sm-12">
            <section class="panel">
              <header class="panel-heading">
                View Enquiry Details
              </header>
              <p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>

  <?php
 $cid=$_GET['viewid'];
$ret=mysqli_query($con,"select * from tblenquiry join tblcars on tblcars.ID=tblenquiry.CardId where tblenquiry.ID='$cid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
               <table border="1" class="table table-bordered mg-b-0">
   
   <tr>
                                <th>Full Name</th>
                                   <td><?php  echo $row['FullName'];?></td>
                                   </tr>  
                                   <tr>
                                <th>Car Name</th>
                                   <td><?php  echo $row['CarName'];?> (<a href="edit-car-detail.php?editid=<?php  echo $row['CardId'];?>" target="_blank">View Details</a>)</td>
                                   </tr>                           
<tr>
                                <th>Email</th>
                                   <td><?php  echo $row['Email'];?></td>
                                   </tr>
                                 
                                <tr>
                                <th>MobileNumber</th>
                                   <td><?php  echo $row['MobileNumber'];?></td>
                                   </tr>
                                   <tr>
                                    <th>Message</th>
                                      <td><?php  echo $row['Message'];?></td>
                                  </tr>
                                      <tr>  
                                       <th>Enquiry Date</th>
                                        <td><?php  echo $row['EnquiryDate'];?></td>
                                    </tr>


<tr>
    <tr>
    <th>Status</th>
    <td> <?php  
if($row['Status']=="")
{
  echo "Unanswer Enquiry";
}
if($row['Status']=="Answer")
{
  echo "Answer Enquiry";
}

     ;?></td>
  </tr>
</table>

<table class="table mb-0">

<?php if($row['Status']==""){ ?>


<form name="submit" method="post"> 

<tr>
    <th>Remark :</th>
    <td>
    <textarea name="remark" placeholder="" rows="12" cols="14" class="form-control wd-450" required="true"></textarea></td>
  </tr>



 

  <tr align="center">
    <td colspan="2"><button type="submit" name="submit" class="btn btn-primary btn-sm"><i class="fa fa-dot-circle-o"></i> Update</button></td>
  </tr>
  </form>
<?php } else { ?>
    <table border="1" class="table table-bordered mg-b-0">
  <tr>
    <th>Remark</th>
    <td><?php echo $row['AdminRemark']; ?></td>
  </tr>


<tr>
<th>Remark date</th>
<td><?php echo $row['AdminRemarkdate']; ?>  </td></tr>
<?php } ?>
</table>


  

  

<?php } ?>
            </section>
          </table>
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