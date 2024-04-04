<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['csmsaid']==0)) {
  header('location:logout.php');
  }
  else{

if(isset($_POST['submit']))
  {
    $aid=$_SESSION['csmsaid'];
    $carname=$_POST['cname'];
    $ctype=$_POST['ctype'];
    $ccompany=$_POST['ccompany'];
    $cprice=$_POST['cprice'];
    $cnumber=$_POST['cnumber'];
    $clength=$_POST['clength'];
    $cwidth=$_POST['cwidth'];
    $cheight=$_POST['cheight'];
    $images=$_POST['images'];

    $cscapacity=$_POST['cscapacity'];

    $fueltype=$_POST['fueltype'];
    $cdisplacement=$_POST['cdisplacement'];
    $cmpower=$_POST['cmpower'];
    $cmtorque=$_POST['cmtorque'];
    $cmilage=$_POST['cmilage'];
    $ctransmission=$_POST['ctransmission'];
    $cnogear=$_POST['cnogear'];
    $carac=$_POST['carac'];
     $cpwindow=$_POST['cpwindow'];
      $cclocking=$_POST['cclocking'];
     $carabs=$_POST['carabs'];
$cairbags=$_POST['cairbags'];
$carftype=$_POST['carftype'];
$carrtype=$_POST['carrtype'];
$cdescription=$_POST['cdescription'];
$cfuelcap=$_POST['cfuelcap'];
$cbootspa=$_POST['cbootspa'];
$cfoglamps=$_POST['cfoglamps'];
$cengdis=$_POST['cengdis'];
$ccenlock=$_POST['ccenlock'];
     $pic=$_FILES["images"]["name"];
     $extension = substr($pic,strlen($pic)-4,strlen($pic));
// allowed extensions
$allowed_extensions = array(".jpg","jpeg",".png",".gif");
// Validation for allowed extensions .in_array() function searches an array for a specific value.
if(!in_array($extension,$allowed_extensions))
{
echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
}
else
{
//r
$carpic=md5($pic).$extension;
     move_uploaded_file($_FILES["images"]["tmp_name"],"images/".$carpic);
    $query=mysqli_query($con, "insert into tblcars(CarName,CarImage, CarType, CarCompany, CarPrice, CarNumber,CarLength,CarWidth,CarHeight,Seatingcapacity,FuelType,Displacement,MaxPower,MaxTorque,Milage,TransmissionType,NoofGear,AirCondition,CarPowerwindow,CarCenterlocking,CarABS,AirBags,FrontType,RearType,CarDescription,FuelCapacity,BootSpace,FogLamps,EngineDisplay,CentralLocking) value('$carname','$images','$ctype','$ccompany','$cprice','$cnumber','$clength','$cwidth','$cheight','$cscapacity','$fueltype','$cdisplacement','$cmpower','$cmtorque','$cmilage','$ctransmission','$cnogear','$carac','$cpwindow','$cclocking','$carabs','$cairbags','$carftype','$carrtype','$cdescription','$cfuelcap','$cbootspa','$cfoglamps','$cengdis','$ccenlock')");
    if ($query) {
    $msg="Car details has been submitted.";
  }
  else
    {
      $msg="Something Went Wrong. Please try again";
    }

  }
}
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Car Company | Car Showroom Management System</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <link href="css/daterangepicker.css" rel="stylesheet" />
  <link href="css/bootstrap-datepicker.css" rel="stylesheet" />
  <link href="css/bootstrap-colorpicker.css" rel="stylesheet" />
  <!-- date picker -->

  <!-- color picker -->

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
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-file-text-o"></i> Company Detail</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
              <li><i class="icon_document_alt"></i>Company Detail</li>
              <li><i class="fa fa-file-text-o"></i>Company Detail</li>
            </ol>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Company Detail
              </header>
              <div class="panel-body">
                <form class="form-horizontal " method="post" action="" enctype="multipart/form-data">
                  <p style="font-size:16px; color:red" align="left"> <?php if($msg){
    echo $msg;
  }  ?> </p>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Car Name</label>
                    <div class="col-sm-10">
                      <input class="form-control" id="cname" name="cname"  type="text" required="true" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Car Image</label>
                    <div class="col-sm-10">
                       <input type="file" class="form-control" name="images" id="images" value="" required="true">
                    </div>
                  </div>
                    <div class="form-group">
                    <label class="col-sm-2 control-label">Car Type</label>
                    <div class="col-sm-10">
                      <input class="form-control" id="ctype" name="ctype"  type="text" required="true">
                    </div>
                  </div>
                   <div class="form-group">
                    <label class="col-sm-2 control-label">Car Company</label>
                    <div class="col-sm-10">
                      <input class="form-control" id="ccompany" name="ccompany"  type="text" required="true">
                    </div>
                  </div>
                    <div class="form-group">
                    <label class="col-sm-2 control-label">Car Price</label>
                    <div class="col-sm-10">
                      <input class="form-control" id="cprice" name="cprice"  type="text" required="true">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Car Number</label>
                    <div class="col-sm-10">
                      <input class="form-control" id="cnumber" name="cnumber"  type="text" required="true">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Car Length</label>
                    <div class="col-sm-10">
                      <input class="form-control" id="clength" name="clength"  type="text" required="true">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Car Width</label>
                    <div class="col-sm-10">
                      <input class="form-control" id="cwidth" name="cwidth"  type="text" required="true">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Car Height</label>
                    <div class="col-sm-10">
                      <input class="form-control" id="cheight" name="cheight"  type="text" required="true">
                    </div>
                  </div>
                   <div class="form-group">
                    <label class="col-sm-2 control-label">Car Seating capacity</label>
                    <div class="col-sm-10">
                      <input class="form-control" id="cscapacity" name="cscapacity"  type="text" required="true">
                    </div>
                  </div>
<div class="form-group">
                    <label class="col-sm-2 control-label">Fuel Type</label>
                    <div class="col-sm-10">
                      <select name="fueltype" class="form-control" required='true'>
                          <option value="Fuel Type">Choose Type of Fuel</option>
                          <option value="Gasoline">Gasoline</option>
                          <option value="Diesel">Diesel</option>
                          <option value="Liquid Petroleum">Liquid Petroleum</option>
                          <option value="Compressed Natural Gas">Compressed Natural Gas(CNG)</option>
                          <option value="Ethanol">Ethanol</option>
                          <option value="Biodiesel">Bio-Diesel</option>
                        </select>
                    </div>
                  </div>
                 <div class="form-group">
                    <label class="col-sm-2 control-label">Displacement</label>
                    <div class="col-sm-10">
                      <input class="form-control " id="cdisplacement" type="text" name="cdisplacement" required="true">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Max Power</label>
                    <div class="col-sm-10">
                      <input class="form-control " id="cmpower" type="text" name="cmpower" required="true">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Max Torque</label>
                    <div class="col-sm-10">
                      <input class="form-control " id="cmtorque" type="text" name="cmtorque" required="true">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Milage</label>
                    <div class="col-sm-10">
                      <input class="form-control " id="cmilage" type="text" name="cmilage" required="true">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Transmission Type</label>
                    <div class="col-sm-10">
                      <select name="ctransmission" class="form-control" required='true'>
                          <option value="Transmission Type">Choose Transmission Type</option>
                          <option value="Manual transmission">Manual Transmission</option>
                          <option value="Automatic transmission">Automatic transmission</option>
                          <option value="Continuously variable transmission">Continuously variable transmission</option>
                          <option value="Semi-automatic and dual-clutch transmissions">Semi-automatic and dual-clutch transmissions</option>
                          
                        </select>
                    </div>
                  </div>
                   <div class="form-group">
                    <label class="col-sm-2 control-label">No. of Gear</label>
                    <div class="col-sm-10">
                      <input class="form-control " id="cnogear" type="text" name="cnogear" required="true">
                    </div>
                  </div>
                   <div class="form-group">
                    <label class="col-sm-2 control-label">Air Condition</label>
                    <div class="col-sm-10">
                       <label class="checkbox-inline">
                        <input class="form-control " id="carac" type="radio" name="carac" value="Yes" required="true"/>Yes</label>
                        <label class="checkbox-inline">
                        <input class="form-control " id="carac" type="radio" name="carac" value="No" required="true"/>No</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Car Power Window</label>
                    <div class="col-sm-10">
                      <input class="form-control " id="cpwindow" type="text" name="cpwindow" required="true">
                    </div>
                  </div>
                   <div class="form-group">
                    <label class="col-sm-2 control-label">Car Center Locking</label>
                    <div class="col-sm-10">
                      <input class="form-control " id="cclocking" type="text" name="cclocking" required="true">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Car ABS</label>
                    <div class="col-sm-10">
                      <label class="checkbox-inline">
                        <input class="form-control " id="carabs" type="radio" name="carabs" value="Yes" required="true"/>Yes</label>
                        <label class="checkbox-inline">
                        <input class="form-control " id="carabs" type="radio" name="carabs" value="No" required="true"/>No</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Car Air Bags</label>
                    <div class="col-sm-10">
                      <input class="form-control " id="carftype" type="text" name="carftype" required="true">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Car Front Type</label>
                    <div class="col-sm-10">
                      <input class="form-control " id="carftype" type="text" name="carftype" required="true">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Car Rear Type</label>
                    <div class="col-sm-10">
                      <input class="form-control " id="carrtype" type="text" name="carrtype" required="true">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Car Description</label>
                    <div class="col-sm-10">
                      <textarea class="form-control " id="cdescription" type="text" name="cdescription" rows="12" cols="4" required="true"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Car Fuel Capacity</label>
                    <div class="col-sm-10">
                      <input class="form-control " id="cfuelcap" type="text" name="cfuelcap" required="true">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Boot Space</label>
                    <div class="col-sm-10">
                      <input class="form-control " id="cbootspa" type="text" name="cbootspa" required="true">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Fog Lamp</label>
                    <div class="col-sm-10">
                      <input class="form-control " id="cfoglamps" type="text" name="cfoglamps" required="true">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Engine Display</label>
                    <div class="col-sm-10">
                      <input class="form-control " id="cengdis" type="text" name="cengdis" required="true">
                    </div>
                  </div>
                   <div class="form-group">
                    <label class="col-sm-2 control-label">Central Locking</label>
                    <div class="col-sm-10">
                       <label class="checkbox-inline">
                        <input class="form-control " id="ccenlock" type="radio" name="ccenlock" value="Yes" required="true">Yes</label>
                        <label class="checkbox-inline">
                        <input class="form-control " id="ccenlock" type="radio" name="ccenlock" value="No" required="true">No</label>
                    </div>
                  </div>

                 <p style="text-align: center;"> <button type="submit" name='submit' class="btn btn-primary">Submit</button></p>
                </form>
              </div>
            </section>
            
          </div>
        </div>
        <!-- Basic Forms & Horizontal Forms-->

        
         
      
        <!-- page end-->
      </section>
    </section>
 <?php include_once('includes/footer.php');?>
  </section>
  <!-- container section end -->
  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>

  <!-- jquery ui -->
  <script src="js/jquery-ui-1.9.2.custom.min.js"></script>

  <!--custom checkbox & radio-->
  <script type="text/javascript" src="js/ga.js"></script>
  <!--custom switch-->
  <script src="js/bootstrap-switch.js"></script>
  <!--custom tagsinput-->
  <script src="js/jquery.tagsinput.js"></script>

  <!-- colorpicker -->

  <!-- bootstrap-wysiwyg -->
  <script src="js/jquery.hotkeys.js"></script>
  <script src="js/bootstrap-wysiwyg.js"></script>
  <script src="js/bootstrap-wysiwyg-custom.js"></script>
  <script src="js/moment.js"></script>
  <script src="js/bootstrap-colorpicker.js"></script>
  <script src="js/daterangepicker.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <!-- ck editor -->
  <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
  <!-- custom form component script for this page-->
  <script src="js/form-component.js"></script>
  <!-- custome script for all page -->
  <script src="js/scripts.js"></script>


</body>

</html>
<?php  } ?>