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
$cbcolor=$_POST['cbcolor'];
$cmodel=$_POST['cmodel'];
$cbodytype=$_POST['cbodytype'];

$makeyear=$_POST['makeyear'];
$regyear=$_POST['regyear'];
$noofowner=$_POST['noofowner'];
$insurancetype=$_POST['insurancetype'];
$rto=$_POST['rto'];
$kmdriven=$_POST['kmdriven'];


//fetured Image
$pic=$_FILES["images"]["name"];
$extension = substr($pic,strlen($pic)-4,strlen($pic));
//car  Image 1
$pic1=$_FILES["image1"]["name"];
$extension1 = substr($pic1,strlen($pic1)-4,strlen($pic1));
//car  Image 2
$pic2=$_FILES["image2"]["name"];
$extension2 = substr($pic2,strlen($pic2)-4,strlen($pic2));
//car  Image 3
$pic3=$_FILES["image3"]["name"];
$extension3 = substr($pic3,strlen($pic3)-4,strlen($pic3));
//car  Image 4
$pic4=$_FILES["image4"]["name"];
$extension4 = substr($pic4,strlen($pic4)-4,strlen($pic4));

// allowed extensions
$allowed_extensions = array(".jpg","jpeg",".png",".gif");
// Validation for allowed extensions .in_array() function searches an array for a specific value.
if(!in_array($extension,$allowed_extensions))
{
echo "<script>alert('Featured image has Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
}
if(!in_array($extension1,$allowed_extensions))
{
echo "<script>alert('Car image 1 has Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
}
if(!in_array($extension2,$allowed_extensions))
{
echo "<script>alert('Car image 2 has Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
}
if(!in_array($extension3,$allowed_extensions))
{
echo "<script>alert('Car image 3 has Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
}
if(!in_array($extension4,$allowed_extensions))
{
echo "<script>alert('Car image 4 has Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
}
else
{
//rename car images
$carpic=md5($pic).time().$extension;
$carpic1=md5($pic1).time().$extension1;
$carpic2=md5($pic2).time().$extension2;
$carpic3=md5($pic3).time().$extension3;
$carpic4=md5($pic4).time().$extension4;
     move_uploaded_file($_FILES["images"]["tmp_name"],"images/".$carpic);
     move_uploaded_file($_FILES["image1"]["tmp_name"],"images/".$carpic1);
     move_uploaded_file($_FILES["image2"]["tmp_name"],"images/".$carpic2);
     move_uploaded_file($_FILES["image3"]["tmp_name"],"images/".$carpic3);
     move_uploaded_file($_FILES["image4"]["tmp_name"],"images/".$carpic4);
    $query=mysqli_query($con, "insert into tblcars(CarName,CarImage, CarType, CarCompany, CarPrice, CarNumber,CarLength,CarWidth,CarHeight,Seatingcapacity,FuelType,Displacement,MaxPower,MaxTorque,Milage,TransmissionType,NoofGear,AirCondition,CarPowerwindow,CarCenterlocking,CarABS,AirBags,FrontType,RearType,CarDescription,FuelCapacity,BootSpace,FogLamps,EngineDisplay,CentralLocking,CarBodycolor,CarBodytype,CarModel,CarImage1,CarImage2,CarImage3,CarImage4,MakeYear,RegYear,NoOfOwner,InsuranceType,Rto,KmDriven) value('$carname','$carpic','$ctype','$ccompany','$cprice','$cnumber','$clength','$cwidth','$cheight','$cscapacity','$fueltype','$cdisplacement','$cmpower','$cmtorque','$cmilage','$ctransmission','$cnogear','$carac','$cpwindow','$cclocking','$carabs','$cairbags','$carftype','$carrtype','$cdescription','$cfuelcap','$cbootspa','$cfoglamps','$cengdis','$ccenlock','$cbcolor','$cbodytype','$cmodel','$carpic1','$carpic2','$carpic3','$carpic4','$makeyear','$regyear','$noofowner','$insurancetype','$rto','$kmdriven')");
    if ($query) {
echo "<script>alert('car details has been submitted.');</script>";
echo "<script>window.location.href ='manage-cardetail.php'</script>";
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

  <title>Car Detail | Car Showroom Management System</title>

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
    <section id="main-content" style="color:#000">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-file-text-o"></i>Add Car Detail</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="dashboard.php">Home</a></li>
              <li><i class="icon_document_alt"></i>Car</li>
              <li><i class="fa fa-file-text-o"></i>Car Detail</li>
            </ol>
          </div>
        </div>
        <div class="row">      
          <form class="form-horizontal " method="post" action="" enctype="multipart/form-data">
          <div class="col-lg-6">
            <section class="panel">
              <header class="panel-heading">
                Add Car Detail
              </header>
              <div class="panel-body">
          
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
                    <label class="col-sm-2 control-label">Car Model</label>
                    <div class="col-sm-10">
                      <input class="form-control" id="cmodel" name="cmodel"  type="text" required="true">
                    </div>
                  </div>


                  <div class="form-group">
                    <label class="col-sm-2 control-label">Featured Car Image</label>
                    <div class="col-sm-10">
                       <input type="file" class="form-control" name="images" id="images" value="" required="true">
                    </div>
                  </div>

    <div class="form-group">
                    <label class="col-sm-2 control-label">Car Image1</label>
                    <div class="col-sm-10">
                       <input type="file" class="form-control" name="image1" id="image1" value="" required="true">
                    </div>
                  </div>

  <div class="form-group">
                    <label class="col-sm-2 control-label">Car Image2</label>
                    <div class="col-sm-10">
                       <input type="file" class="form-control" name="image2" id="image2" value="" required="true">
                    </div>
                  </div>

                    <div class="form-group">
                    <label class="col-sm-2 control-label">Car Image3</label>
                    <div class="col-sm-10">
                       <input type="file" class="form-control" name="image3" id="image3" value="" required="true">
                    </div>
                  </div>

                    <div class="form-group">
                    <label class="col-sm-2 control-label">Car Image4</label>
                    <div class="col-sm-10">
                       <input type="file" class="form-control" name="image4" id="image4" value="" required="true">
                    </div>
                  </div>



                    <div class="form-group">
                    <label class="col-sm-2 control-label">Car Type</label>
                    <div class="col-sm-10">
                      <input class="form-control" id="ctype" name="ctype"  type="text" required="true">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Body Color</label>
                    <div class="col-sm-10">
                      <input class="form-control" id="cbcolor" name="cbcolor"  type="text" required="true">
                    </div>
                  </div>
           
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Body Type</label>
                    <div class="col-sm-10">
                      <input class="form-control" id="cbodytype" name="cbodytype"  type="text" required="true">
                    </div>
                  </div>
                   <div class="form-group">
                    <label class="col-sm-2 control-label">Car Company</label>
                    <div class="col-sm-10">
                      <select class="form-control m-bot15" name="ccompany" id="ccompany">
                                <option value="">Choose Company</option>
                                <?php $query=mysqli_query($con,"select * from tblcompany");
              while($row=mysqli_fetch_array($query))
              {
              ?>    
              <option value="<?php echo $row['CompanyName'];?>"><?php echo $row['CompanyName'];?></option>
                  <?php } ?> 
                            </select>
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
                          <option value="Liquid Petroleum">Petrol</option>
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

 </div>
</section>
</div>
                 

                  <div class="col-lg-6">
                        <section class="panel">
                     <div class="panel-body">

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
                      <input class="form-control " id="cairbags" type="text" name="cairbags" required="true">
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

                <div class="form-group">
                    <label class="col-sm-2 control-label">Car Make Year</label>
                    <div class="col-sm-10">
                      <input class="form-control " id="makeyear" maxlength="4" type="text" name="makeyear" required="true">
                    </div>
                  </div>

                      <div class="form-group">
                    <label class="col-sm-2 control-label">Reg. Year</label>
                    <div class="col-sm-10">
                      <input class="form-control " id="regyear" type="text" name="regyear" required="true">
                    </div>
                  </div>


    <div class="form-group">
                    <label class="col-sm-2 control-label">No of Owner(s)</label>
                    <div class="col-sm-10">
                      <input class="form-control " id="noofowner" maxlength="2" type="text" name="noofowner" required="true">
                    </div>
                  </div>


            <div class="form-group">
                    <label class="col-sm-2 control-label">Insurance Type</label>
                    <div class="col-sm-10">
                      <select name="insurancetype" class="form-control" required='true'>
                          <option value="Comprehensive">Comprehensive</option>
                          <option value="Third Party">Third Party</option>
                          <option value="Not Avaialable">Not Avaialable</option>
                        </select>
                    </div>
                  </div>
   <div class="form-group">
                    <label class="col-sm-2 control-label">RTO</label>
                    <div class="col-sm-10">
                      <input class="form-control " id="rto" type="text" name="rto" required="true">
                    </div>
                  </div>
   <div class="form-group">
                    <label class="col-sm-2 control-label">KM Driven (In Kms.)</label>
                    <div class="col-sm-10">
                      <input class="form-control " id="kmdriven" type="text" name="kmdriven" required="true">
                    </div>
                  </div>

            
              </div>
            </section>
            
          </div>
               <p style="text-align: center;"> <button type="submit" name='submit' class="btn btn-primary">Submit</button></p>
              </form>
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