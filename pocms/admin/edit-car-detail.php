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
     $cid=$_GET['editid'];
    $eid=$_GET['editid'];
    $carname=$_POST['cname'];
    $ctype=$_POST['ctype'];
    $cmodel=$_POST['cmodel'];
    $btype=$_POST['cbodytype'];
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
$makeyear=$_POST['makeyear'];
$regyear=$_POST['regyear'];
$noofowner=$_POST['noofowner'];
$insurancetype=$_POST['insurancetype'];
$rto=$_POST['rto'];
$kmdriven=$_POST['kmdriven'];     
    
    $query=mysqli_query($con, "update tblcars set CarName='$carname', CarType='$ctype', CarCompany='$ccompany', CarPrice='$cprice', CarNumber='$cnumber',CarLength='$clength',CarWidth='$cwidth',CarHeight='$cheight',Seatingcapacity='$cscapacity',FuelType='$fueltype',Displacement='$cdisplacement',MaxPower='$cmpower',MaxTorque='$cmtorque',Milage='$cmilage',TransmissionType='$ctransmission',NoofGear='$cnogear',AirCondition='$carac',CarPowerwindow='$cpwindow',CarCenterlocking='$cclocking',CarABS='$carabs',AirBags='$cairbags',FrontType='$carftype',RearType='$carrtype',CarDescription='$cdescription',FuelCapacity='$cfuelcap',BootSpace='$cbootspa',FogLamps='$cfoglamps',EngineDisplay='$cengdis',CentralLocking='$ccenlock',CarModel='$cmodel',CarBodytype='$btype',MakeYear='$makeyear',RegYear='$regyear',NoOfOwner='$noofowner',InsuranceType='$insurancetype',Rto='$rto',KmDriven='$kmdriven' where ID='$cid'");
    if ($query) {
 echo "<script>alert('Car details has been updated.');</script>";
  }
  else
    {
      echo "<script>alert('Something Went Wrong. Please try again.');</script>";
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

  <title>Car update | Car Showroom Management System</title>

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
            <h3 class="page-header"><i class="fa fa-file-text-o"></i> Update Car Detail</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="dashboard.php">Home</a></li>
              <li><i class="icon_document_alt"></i>Car Detail</li>
              <li><i class="fa fa-file-text-o"></i>Update Car Detail</li>
            </ol>
          </div>
        </div>
        <div class="row">
        
            <section class="panel">
              <header class="panel-heading">
                Update Car Detail
              </header>
              <div class="panel-body">
                <form class="form-horizontal " method="post" action="" enctype="multipart/form-data">
                  <p style="font-size:16px; color:red" align="left"> <?php if($msg){
    echo $msg;
  }  ?> </p>

  <?php
 $cid=$_GET['editid'];
$ret=mysqli_query($con,"select * from tblcars where ID='$cid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
  <div class="col-lg-6">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Car Name</label>
                    <div class="col-sm-10">
                      <input class="form-control" id="cname" name="cname"  type="text" required="true" value="<?php echo $row['CarName'];?>">
                    </div>
                  </div>

  <div class="form-group">
                    <label class="col-sm-2 control-label">Car Model</label>
                    <div class="col-sm-10">
                      <input class="form-control" id="cmodel" name="cmodel"  type="text" required="true" value="<?php echo $row['CarModel'];?>">
                    </div>
                  </div>

                  
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Featured Car Image</label>
                    <div class="col-sm-10">
                      <img src="images/<?php echo $row['CarImage'];?>" width="200" height="150" value="<?php  echo $row['CarImage'];?>"><a href="changeimage.php?editid=<?php echo $row['ID'];?>"> &nbsp; Edit Image</a>
                    </div>
                  </div>

  <div class="form-group">
                    <label class="col-sm-2 control-label"> Car Image 1</label>
                    <div class="col-sm-10">
                      <img src="images/<?php echo $row['CarImage1'];?>" width="200" height="150"><a href="changeimage1.php?editid=<?php echo $row['ID'];?>"> &nbsp; Edit Image</a>
                    </div>
                  </div>

 <div class="form-group">
                    <label class="col-sm-2 control-label"> Car Image 2</label>
                    <div class="col-sm-10">
                      <img src="images/<?php echo $row['CarImage2'];?>" width="200" height="150">
                      <a href="changeimage2.php?editid=<?php echo $row['ID'];?>"> &nbsp;Edit Image</a>
                    </div>
                  </div>


 <div class="form-group">
                    <label class="col-sm-2 control-label"> Car Image 3</label>
                    <div class="col-sm-10">
                      <img src="images/<?php echo $row['CarImage3'];?>" width="200" height="150" ><a href="changeimage3.php?editid=<?php echo $row['ID'];?>"> &nbsp; Edit Image</a>
                    </div>
                  </div>


 <div class="form-group">
                    <label class="col-sm-2 control-label"> Car Image 4</label>
                    <div class="col-sm-10">
                      <img src="images/<?php echo $row['CarImage4'];?>" width="200" height="150"><a href="changeimage4.php?editid=<?php echo $row['ID'];?>"> &nbsp; Edit Image</a>
                    </div>
                  </div>                  

                    <div class="form-group">
                    <label class="col-sm-2 control-label">Car Type</label>
                    <div class="col-sm-10">
                      <input class="form-control" id="ctype" name="ctype"  type="text" required="true" value="<?php echo $row['CarType'];?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Body Color</label>
                    <div class="col-sm-10">
                      <input class="form-control" id="cbcolor" name="cbcolor"  type="text" required="true" value="<?php echo $row['CarBodycolor'];?>">
                    </div>
                  </div>
                 
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Body Type</label>
                    <div class="col-sm-10">
                      <input class="form-control" id="cbodytype" name="cbodytype"  type="text" required="true" value="<?php echo $row['CarBodytype'];?>">
                    </div>
                  </div>
                   <div class="form-group">
                    <label class="col-sm-2 control-label">Car Company</label>
                    <div class="col-sm-10">
                      <select class="form-control m-bot15" name="ccompany" id="ccompany">
                               
               <option value="<?php echo $row['CarCompany'];?>"><?php echo $row['CarCompany'];?></option>
                                <?php $query1=mysqli_query($con,"select * from tblcompany");
              while($row1=mysqli_fetch_array($query1))
              {
              ?>    
              <option value="<?php echo $row1['CompanyName'];?>"><?php echo $row1['CompanyName'];?></option>
                  <?php } ?> 
                 
                            </select>

                    </div>
                  </div>
                    <div class="form-group">
                    <label class="col-sm-2 control-label">Car Price</label>
                    <div class="col-sm-10">
                      <input class="form-control" id="cprice" name="cprice"  type="text" required="true" value="<?php echo $row['CarPrice'];?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Car Number</label>
                    <div class="col-sm-10">
                      <input class="form-control" id="cnumber" name="cnumber"  type="text" required="true" value="<?php echo $row['CarNumber'];?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Car Length</label>
                    <div class="col-sm-10">
                      <input class="form-control" id="clength" name="clength"  type="text" required="true" value="<?php echo $row['CarLength'];?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Car Width</label>
                    <div class="col-sm-10">
                      <input class="form-control" id="cwidth" name="cwidth"  type="text" required="true" value="<?php echo $row['CarWidth'];?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Car Height</label>
                    <div class="col-sm-10">
                      <input class="form-control" id="cheight" name="cheight"  type="text" required="true" value="<?php echo $row['CarHeight'];?>">
                    </div>
                  </div>
                   <div class="form-group">
                    <label class="col-sm-2 control-label">Car Seating capacity</label>
                    <div class="col-sm-10">
                      <input class="form-control" id="cscapacity" name="cscapacity"  type="text" required="true" value="<?php echo $row['Seatingcapacity'];?>">
                    </div>
                  </div>
<div class="form-group">
                    <label class="col-sm-2 control-label">Fuel Type</label>
                    <div class="col-sm-10">
                      <select name="fueltype" class="form-control" required='true'>
                          <option value="<?php echo $row['FuelType'];?>"><?php echo $row['FuelType'];?></option>
                        </select>
                    </div>
                  </div>
                 <div class="form-group">
                    <label class="col-sm-2 control-label">Displacement</label>
                    <div class="col-sm-10">
                      <input class="form-control " id="cdisplacement" type="text" name="cdisplacement" required="true" value="<?php echo $row['Displacement'];?>">
                    </div>
                  </div>
</div>
  <div class="col-lg-6">

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Max Power</label>
                    <div class="col-sm-10">
                      <input class="form-control " id="cmpower" type="text" name="cmpower" required="true" value="<?php echo $row['MaxPower'];?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Max Torque</label>
                    <div class="col-sm-10">
                      <input class="form-control " id="cmtorque" type="text" name="cmtorque" required="true" value="<?php echo $row['MaxTorque'];?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Milage</label>
                    <div class="col-sm-10">
                      <input class="form-control " id="cmilage" type="text" name="cmilage" required="true" value="<?php echo $row['Milage'];?>">
                    </div>
                  </div>


                  <div class="form-group">
                    <label class="col-sm-2 control-label">Transmission Type</label>
                    <div class="col-sm-10">
                      <select name="ctransmission" class="form-control" required='true'>
                        
                          <option value="<?php echo $row['TransmissionType'];?>"><?php echo $row['TransmissionType'];?></option>

                        </select>
                          
                        </select>
                    </div>
                  </div>


                   <div class="form-group">
                    <label class="col-sm-2 control-label">No. of Gear</label>
                    <div class="col-sm-10">
                      <input class="form-control " id="cnogear" type="text" name="cnogear" required="true" value="<?php echo $row['NoofGear'];?>">
                    </div>
                  </div>
                   <div class="form-group">
                    <label class="col-sm-2 control-label">Air Condition</label>
                    <div class="col-sm-10">
                       <label class="checkbox-inline">
                                        <?php  if($row['AirCondition']=="Yes"){ ?>
<input type="radio" id="carac" name="carac" value="Yes" checked="true"> Yes
<input type="radio" id="carac" name="carac" value="No" > No
<?php } else { ?>
<input type="radio" id="carac" name="carac" value="Yes"> Yes
<input type="radio" id="carac" name="carac" value="No" checked="true"> No
<?php } ?>
                    </div>

                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Car Power Window</label>
                    <div class="col-sm-10">
                      <input class="form-control " id="cpwindow" type="text" name="cpwindow" required="true" value="<?php echo $row['CarPowerwindow'];?>">
                    </div>
                  </div>
                   <div class="form-group">
                    <label class="col-sm-2 control-label">Car Center Locking</label>
                    <div class="col-sm-10">
                      <input class="form-control " id="cclocking" type="text" name="cclocking" required="true" value="<?php echo $row['CarCenterlocking'];?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Car ABS</label>
                    <div class="col-sm-10">
                      <label class="checkbox-inline">
                       <?php  if($row['CarABS']=="Yes"){ ?>
<input type="radio" id="carabs" name="carabs" value="Yes" checked="true"> Yes
<input type="radio" id="carabs" name="carabs" value="No" > No
<?php } else { ?>
<input type="radio" id="carabs" name="carabs" value="Yes"> Yes
<input type="radio" id="carabs" name="carabs" value="No" checked="true"> No
<?php } ?>
                    </div>

                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Car Air Bags</label>
                    <div class="col-sm-10">
                      <input class="form-control " id="cairbags" type="text" name="cairbags" required="true" value="<?php echo $row['AirBags'];?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Car Front Type</label>
                    <div class="col-sm-10">
                      <input class="form-control " id="carftype" type="text" name="carftype" required="true" value="<?php echo $row['FrontType'];?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Car Rear Type</label>
                    <div class="col-sm-10">
                      <input class="form-control " id="carrtype" type="text" name="carrtype" required="true" value="<?php echo $row['RearType'];?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Car Description</label>
                    <div class="col-sm-10">
                      <textarea class="form-control " id="cdescription" type="text" name="cdescription" rows="12" cols="4" required="true"><?php echo $row['CarDescription'];?></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Car Fuel Capacity</label>
                    <div class="col-sm-10">
                      <input class="form-control " id="cfuelcap" type="text" name="cfuelcap" required="true" value="<?php echo $row['FuelCapacity'];?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Boot Space</label>
                    <div class="col-sm-10">
                      <input class="form-control " id="cbootspa" type="text" name="cbootspa" required="true" value="<?php echo $row['BootSpace'];?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Fog Lamp</label>
                    <div class="col-sm-10">
                      <input class="form-control " id="cfoglamps" type="text" name="cfoglamps" required="true" value="<?php echo $row['FogLamps'];?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Engine Display</label>
                    <div class="col-sm-10">
                      <input class="form-control " id="cengdis" type="text" name="cengdis" required="true" value="<?php echo $row['EngineDisplay'];?>">
                    </div>
                  </div>
                   <div class="form-group">
                    <label class="col-sm-2 control-label">Central Locking</label>
                    <div class="col-sm-10">
                       <label class="checkbox-inline">
                        <?php  if($row['CentralLocking']=="Yes"){ ?>
<input type="radio" id="ccenlock" name="ccenlock" value="Yes" checked="true"> Yes
<input type="radio" id="ccenlock" name="ccenlock" value="No" > No
<?php } else { ?>
<input type="radio" id="ccenlock" name="ccenlock" value="Yes"> Yes
<input type="radio" id="ccenlock" name="ccenlock" value="No" checked="true"> No
<?php } ?>
</div>
</div>



<div class="form-group">
                    <label class="col-sm-2 control-label">Car Make Year</label>
                    <div class="col-sm-10">
                      <input class="form-control " id="makeyear" maxlength="4" type="text" name="makeyear" required="true" value="<?php echo $row['MakeYear'];?>">
                    </div>
                  </div>

                      <div class="form-group">
                    <label class="col-sm-2 control-label">Reg. Year</label>
                    <div class="col-sm-10">
                <input class="form-control " id="regyear" type="text" name="regyear" required="true" value="<?php echo $row['RegYear'];?>">
                    </div>
                  </div>


    <div class="form-group">
                    <label class="col-sm-2 control-label">No of Owner(s)</label>
                    <div class="col-sm-10">
                      <input class="form-control " id="noofowner" maxlength="2" type="text" name="noofowner" required="true" value="<?php echo $row['NoOfOwner'];?>">
                    </div>
                  </div>


            <div class="form-group">
                    <label class="col-sm-2 control-label">Insurance Type</label>
                    <div class="col-sm-10">
                      <select name="insurancetype" class="form-control" required='true'>
                         <option value="<?php echo $row['InsuranceType'];?>"><?php echo $row['InsuranceType'];?></option>
                          <option value="Comprehensive">Comprehensive</option>
                          <option value="Third Party">Third Party</option>
                          <option value="Not Avaialable">Not Avaialable</option>
                        </select>
                    </div>
                  </div>
   <div class="form-group">
                    <label class="col-sm-2 control-label">RTO</label>
                    <div class="col-sm-10">
                      <input class="form-control " id="rto" type="text" name="rto" required="true" value="<?php echo $row['Rto'];?>">
                    </div>
                  </div>
   <div class="form-group">
                    <label class="col-sm-2 control-label">KM Driven (In Kms.)</label>
                    <div class="col-sm-10">
                      <input class="form-control " id="kmdriven" type="text" name="kmdriven" required="true" value="<?php echo $row['KmDriven'];?>">
                    </div>
                  </div>


<?php } ?>
                 <p style="text-align: center;"> <button type="submit" name='submit' class="btn btn-primary">Update</button></p>
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