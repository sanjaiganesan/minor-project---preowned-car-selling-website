<?php include_once('includes/dbconnection.php');
if(isset($_POST['send']))
  {
    $fullname=$_POST['fullname'];
    $email=$_POST['email'];
    $mobilenumber=$_POST['mobnum'];
    $message=$_POST['message'];
    $enquirynumber = mt_rand(100000000, 999999999);
$carid=$_GET['carid'];
    $query1=mysqli_query($con,"insert into  tblenquiry(CardId,FullName,Email,MobileNumber,Message,EnquiryNumber) value('$carid','$fullname','$email','$mobilenumber','$message','$enquirynumber')");
        if ($query1) {
 echo '<script>alert("Your enquiry successfully send. Your Enquiry number is "+"'.$enquirynumber.'")</script>';
echo "<script>window.location.href='cars.php'</script>";
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

<?php include_once('includes/header.php');?>
<?php $cid=intval($_GET['carid']);
$query=mysqli_query($con,"select * from tblcars where ID='$cid'");
while ($row=mysqli_fetch_array($query)) {
?>


    <!-- Page Content -->
    <div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-6-1920x500.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4> <strong class="text-primary">$<?php echo $row['CarPrice'];?></strong></h4>
              <h2><?php echo $row['CarName'];?></h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="products">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div>
           <img src="admin/images/<?php echo $row['CarImage'];?>"  class="img-fluid wc-image">
            </div>
            <br>
            <div class="row">
              <div class="col-sm-6 col-6">
                <div>
                  <img src="admin/images/<?php echo $row['CarImage1'];?>" alt="" class="img-fluid">
                </div>
                <br>
              </div>
              <div class="col-sm-6 col-6">
                <div>
                  <img src="admin/images/<?php echo $row['CarImage2'];?>" alt="" class="img-fluid">
                </div>
                <br>
              </div>
              <div class="col-sm-6 col-6">
                <div>
                  <img src="admin/images/<?php echo $row['CarImage3'];?>" alt="" class="img-fluid">
                </div>
                <br>
              </div>

              <div class="col-sm-6 col-6">
                <div>
                  <img src="admin/images/<?php echo $row['CarImage4'];?>" alt="" class="img-fluid">
                </div>
                <br>
              </div>
         
            </div>
          </div>

          <div class="col-md-6">
            <form action="#" method="post" class="form">
              <ul class="list-group list-group-flush">


                   <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Car Name</span>

                         <strong class="pull-right"><?php echo $row['CarName'];?></strong>
                    </div>
               </li>
                 <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Car Company</span>

                         <strong class="pull-right"><?php echo $row['CarCompany'];?></strong>
                    </div>
               </li>

               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Car Type</span>

                         <strong class="pull-right"><?php echo $row['CarType'];?></strong>
                    </div>
               </li>
  <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Car Model</span>

                         <strong class="pull-right"><?php echo $row['CarModel'];?></strong>
                    </div>
               </li>
               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Make Year</span>

                         <strong class="pull-right"><?php echo $row['MakeYear'];?></strong>
                    </div>
               </li>

            

               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Registration Year</span>

                         <strong class="pull-right"><?php echo $row['RegYear'];?></strong>
                    </div>
               </li>

               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">No of owner</span>

                         <strong class="pull-right"><?php echo $row['NoOfOwner'];?></strong>
                    </div>
               </li>

               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">KM Driven</span>

                         <strong class="pull-right"><?php echo $row['KmDriven'];?></strong>
                    </div>
               </li>

         

               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">RTO</span>

                         <strong class="pull-right"><?php echo $row['Rto'];?></strong>
                    </div>
               </li>


               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Insurance Type</span>

                         <strong class="pull-right"><?php echo $row['InsuranceType'];?></strong>
                    </div>
               </li>

               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Car Body Color</span>

                         <strong class="pull-right"><?php echo $row['CarBodycolor'];?></strong>
                    </div>
               </li>

               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Car Body Type</span>

                         <strong class="pull-right"><?php echo $row['CarBodytype'];?></strong>
                    </div>
               </li>

               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Car Number</span>

                         <strong class="pull-right"><?php echo $row['CarNumber'];?></strong>
                    </div>
               </li>

                  <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Car Price</span>

                         <strong class="pull-right"><?php echo $row['CarPrice'];?></strong>
                    </div>
               </li>

                <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Car Fuel Type</span>

                         <strong class="pull-right"><?php echo $row['FuelType'];?></strong>
                    </div>
               </li>
              </ul>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="section">
      <div class="container">
          <div class="section-heading">
              <h2>Vehicle Extras</h2>
            </div>
        <div class="row">
          <div class="col-md-6">
          

            <div class="left-content">
        <ul>
          
                <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Car Length</span>

                         <strong class="pull-right"><?php echo $row['CarLength'];?></strong>
                    </div>
               </li>

                <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Car Width</span>

                         <strong class="pull-right"><?php echo $row['CarWidth'];?></strong>
                    </div>
               </li>
                <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Car Height</span>

                         <strong class="pull-right"><?php echo $row['CarHeight'];?></strong>
                    </div>
               </li>
                <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Car Searing Capacity</span>

                         <strong class="pull-right"><?php echo $row['Seatingcapacity'];?></strong>
                    </div>
               </li>
                <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Displacement</span>

                         <strong class="pull-right"><?php echo $row['Displacement'];?></strong>
                    </div>
               </li>
                <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Max Power</span>

                         <strong class="pull-right"><?php echo $row['MaxPower'];?></strong>
                    </div>
               </li>
                <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Max Torque</span>

                         <strong class="pull-right"><?php echo $row['MaxTorque'];?></strong>
                    </div>
               </li>
                <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Milage</span>

                         <strong class="pull-right"><?php echo $row['Milage'];?></strong>
                    </div>
               </li>
                <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Transmission Type</span>

                         <strong class="pull-right"><?php echo $row['TransmissionType'];?></strong>
                    </div>
               </li>
                <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">No of Gear</span>

                         <strong class="pull-right"><?php echo $row['NoofGear'];?></strong>
                    </div>
               </li>
                <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Air Condition</span>

                         <strong class="pull-right"><?php echo $row['AirCondition'];?></strong>
                    </div>
               </li>
         
             
           

        </ul>
            </div>
          </div>

          <div class="col-md-6">
        
                   <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Car Power Window</span>

                         <strong class="pull-right"><?php echo $row['CarPowerwindow'];?></strong>
                    </div>
               </li>
   <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Car Center Locking</span>

                         <strong class="pull-right"><?php echo $row['CarCenterlocking'];?></strong>
                    </div>
               </li>
                <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Car ABS</span>

                         <strong class="pull-right"><?php echo $row['CarABS'];?></strong>
                    </div>
               </li>
                <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">AirBags</span>

                         <strong class="pull-right"><?php echo $row['AirBags'];?></strong>
                    </div>
               </li>
                <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Front Type</span>

                         <strong class="pull-right"><?php echo $row['FrontType'];?></strong>
                    </div>
               </li>
                <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Rear Type</span>

                         <strong class="pull-right"><?php echo $row['RearType'];?></strong>
                    </div>
               </li>
                <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Fuel Capacity</span>

                         <strong class="pull-right"><?php echo $row['FuelCapacity'];?></strong>
                    </div>
               </li>
                <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">BootSpace</span>

                         <strong class="pull-right"><?php echo $row['BootSpace'];?></strong>
                    </div>
               </li>
                <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Fog Lamps</span>

                         <strong class="pull-right"><?php echo $row['FogLamps'];?></strong>
                    </div>
               </li>
                <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Engine Display</span>

                         <strong class="pull-right"><?php echo $row['EngineDisplay'];?></strong>
                    </div>
               </li>
                <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Car Fuel Type</span>

                         <strong class="pull-right"><?php echo $row['FuelType'];?></strong>
                    </div>
               </li>

            <div class="left-content">
           
            </div>
          </div>
        </div>

    <div class="row" style="margin-top:3%;">
          <div class="col-md-12">
            <div class="section-heading">
              <h4>Vehicle Description</h4>
            </div>
            
            <div class="left-content">
           <p><?php echo $row['CarDescription'];?></p>
            </div>
          </div>
        </div>



      </div>
    </div>

  

<?php } ?>

<!-- Contact Details ---->
<?php
$ret=mysqli_query($con,"select * from tblpages where PageType='contactus'");
while($result=mysqli_fetch_array($ret)){

?>
    <div class="section">
      <div class="container">
          <div class="section-heading">
              <h2>Contact Details</h2>
            </div>
        <div class="row">
          <div class="col-md-6">
          
            
            <div class="left-content">
              <p>
                <span>Address</span>

                <br>

                <strong><?php echo $result['HeadOffice'];?></strong>
              </p>

              <p>
                <span>Phone</span>

                <br>
                
                <strong>
                  <a href="tel:123-456-789"><?php echo $result['PhoneNumber'];?></a>
                </strong>
              </p>

         

              <p>
                <span>Email</span>

                <br>
                
                <strong>
                  <a href="mailto:john@carsales.com"><?php echo $result['Email'];?></a>
                </strong>
              </p>
            </div>
          </div>
   <div class="col-md-6">
 <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Make a Enquiry</button></div>

        </div>
      </div>
    </div>
<?php } ?>
<?php include_once('includes/footer.php');?>

    <!-- Modal -->
   <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
               <h4 class="modal-title">Enquiry</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
     
        </div>
        <div class="modal-body">
    <form method="post">
                          <div class="form-group">
                            <input class="form-control" type="text" name="fullname" required="true" placeholder="Name"/>
                          </div>
                            <div class="form-group">
                            <input class="form-control" type="email" name="email" required="true" placeholder="Email"/>
                          </div>
                            <div class="form-group">
                            <input class="form-control" type="text" name="mobnum" maxlength="10" pattern="[0-9]+" placeholder="Mobile Number" required="true"/>
                          </div>
                          <div class="form-group">
                            <textarea class="form-control" name="message" placeholder="Message" required="true" rows="4"></textarea>
                          </div>
                          <button class="btn btn-red btn-lg w-100" name="send" type="submit">Submit</button>
                        </form>
        </div>
      <!--   <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div> -->
      </div>
      
    </div>
  </div>
  
</div>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
  </body>

</html>
