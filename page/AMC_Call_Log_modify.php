

<?php
session_start();
require_once __DIR__ . '/../dbConnection/dbConnection.php';
include('admin_sidenav.php');
$i_d = $_GET['i_d'];
$SERIAL = $_GET['SERIAL'];
//echo $i_d;die;
if (isset($_POST['ACL']) != "") {
  $product_name = $_POST['product_name'];
   $product1 = $_POST['productname'];
  //echo $product1;
  //echo $product_name;
  $remark = $_POST['remark'];
  //echo $remark;
  $indicator = $_POST['indicator'];
  if($indicator=='done'){
 $done=1;
        }else{
 $done=0;
              }
   if($indicator=='upgrade'){
 $upgrade=1;
        }else{
 $upgrade=0;
              }
  //$done = $_POST['done'];
  $date = date("Y-m-d");
  $text = 'Null';
//echo $upgrade;die;
   

   if ($done == '1'){
   $PSD = date("Y-m-d");
   $d='1';
   }else{
    $PSD = $text;
    $d='0';
   }

if ($upgrade == '1'){
    $u='1';
   //echo "UPDATE $product_name SET `upgrade`='$u' WHERE `Serial_Number`='$SERIAL'";die;
      $query_cpu=$con->query(" UPDATE `$product_name` SET `upgrade`='$u' WHERE `Serial_Number`='$SERIAL' ");
   }else{
    $u='0';
   }


   
// echo "UPDATE `amc_working` SET `upgrade`='$u',`remark`='$remark',`done`='$d',`problem_solved_date`='$PSD' WHERE `id`='$i_d'";die;

$query=$con->query("UPDATE `amc_working` SET `upgrade`='$u',`remark`='$remark',`done`='$d',`problem_solved_date`='$PSD' WHERE `id`='$i_d'");

    
    if($query){
    echo "<script>alert('your complaint has been done.....');window.location.href='AMC_Call_Log.php'; </script>";
    } else {
      echo "failed";

    }

}
?>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<link href="globe.png" rel="shortcut icon">
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
<link rel="stylesheet" type="text/css" href="../css/DT_bootstrap11.css">

</head>


<script type="text/javascript" charset="utf-8" language="javascript" src="../js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf-8" language="javascript" src="../js/DT_bootstrap.js"></script>

<?php
date_default_timezone_set("Asia/Calcutta");
//echo date_default_timezone_get();
?>



<!-- top manu -->
<section class="home-section">
  <nav>
    <div class="sidebar-button">
      <i class='bx bx-menu sidebarBtn'></i>
      <span class="dashboard"> AMC Call log </span>
    </div>

    <?php
    include('admin_right_side_login.php');
    ?>
  </nav>
  <!-- end top manu -->

  <div class="home-content">

    <div class="sales-boxes">
     <div class="recent-sales box" style="width: 99%;text-align: center;">
        

		<?php
                $query = mysqli_query($con, " SELECT * FROM `amc_working` WHERE `id`= $i_d") or die(mysqli_error($con));
                // echo 1;die;
                while ($row = mysqli_fetch_array($query)) {
                	$P_N = $row['product_name'];
                	$S_N = $row['SERIAL_NUMBER'];

        ?>
        <div class="title">Product Details <?php echo $row['product_name'] ?></div>
        <br>
        <form enctype="multipart/form-data" action="" id="wb_Form1" name="form" method="post">
          <div class="row ">
           <div class="col-md-2">
              <label for="validationDefault01" class="form-label">name</label>
              <input type="text" class="form-control" name="name" id="name" placeholder="GEM NO" value="<?php echo $row['name'] ?>" disabled>
            </div>
            <div class="col-md-2">
              <label for="validationDefault01" class="form-label">designation</label>
              <input type="text" class="form-control" name="designation" id="designation" value="<?php echo $row['designation'] ?>" disabled>
            </div>
            <div class="col-md-2">
              <label for="validationDefault01" class="form-label">floor_no</label>
              <input type="text" class="form-control" name="floor_no" id="floor_no"  value="<?php echo $row['floor_no'] ?>" disabled>
            </div>
            <div class="col-md-2">
              <label for="validationDefault01" class="form-label">mobile_no</label>
              <input type="text" class="form-control" name="mobile_no" id="mobile_no"  value="<?php echo $row['mobile_no'] ?>" disabled>
            </div>
             <div class="col-md-2">
              <label for="validationDefault01" class="form-label">cell</label>
              <input type="text" class="form-control" name="cell" id="cell"  value="<?php echo $row['cell'] ?>" disabled>
            </div>
             <div class="col-md-2">
              <label for="validationDefault01" class="form-label">emp_code</label>
              <input type="text" class="form-control" name="emp_no" id="emp_no"  value="<?php echo $row['emp_no'] ?>" disabled>
            </div>
          </div>
          <div class="row" style="padding-top: 3%;">
          	<div class="col-md-4"></div>
            <div class="col-md-4">
              <label for="validationDefault01" class="form-label">IP</label>
              <input type="text" class="form-control" name="IP" id="IP"  value="<?php echo $row['IP'] ?>" disabled>
            </div>
            <div class="col-md-4"></div>
          </div>
          <div class="row" style="padding-top: 3%;">
            <div class="col-md-3">
            	<label for="validationDefault01" class="form-label">PRODUCT NAME</label>
                <input type="text" class="form-control" name="productname" id="productname" value="<?php echo $row['product_name'] ?>" disabled>
                 <input type="hidden" class="form-control" name="product_name" id="product_name" value="<?php echo $row['product_name'] ?>" hidden>
            </div>
            <div class="col-md-3" >
              <label for="validationDefault01" class="form-label">SERIAL_NUMBER</label>
              <input type="text" class="form-control" name="SERIAL_NUMBER" id="SERIAL_NUMBER" value="<?php echo $row['SERIAL_NUMBER'] ?>" disabled>
            </div>
            <div class="col-md-3" >
              <label for="validationDefault01" class="form-label">PROBLEM</label>
              <input type="text" class="form-control" name="PROBLEM" id="PROBLEM" value="<?php echo $row['PROBLEM'] ?>" disabled>
            
            </div>
            <div class="col-md-3" >
              <label for="validationDefault01" class="form-label">problem_date</label>
              <input type="text" class="form-control" name="problem_date" id="problem_date" value="<?php echo $row['problem_date'] ?>" disabled>
            </div>
          </div>
          <div class="row" style="padding-top: 3%;text-align: center;">
              <label for="validationDefault01" class="form-label">remark</label>
              <textarea class="form-control" id="remark" name="remark" placeholder="remark"><?php echo $row['remark'] ?></textarea>
       
            </div>
            <div class="row"style="padding-top: 3%">
               <?php
                  if (($row['product_name'] =='cpu') or ($row['product_name'] =='aio') or ($row['product_name'] =='laptop')){
               ?>
              <input type="radio" id="upgrade" name="indicator" value="upgrade">
              <label for="upgrade">upgrade</label><br>
              <?php
                 }
               ?>
              
      			  <input type="radio" id="done" name="indicator" value="done">
      			  <label for="done">DONE</label><br>  
            </div>
            <div class="row" style="padding-top: 3%">
            <strong>SUBMIT HERE</strong>
            <input type="submit" class="btn btn-danger" value="SUBMIT" name="ACL">
          </div>
        </form>
     </div>


        <?php
        	
        }
        ?>

      </div>
    </div>
  </div>



  <?php
  include('admin_footer.php');
  ?>
  