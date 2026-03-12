<?php
session_start();
require_once __DIR__ . '/../dbConnection/dbConnection.php';
include('admin_sidenav.php');

if (isset($_POST['submit1']) != "") {
  //echo 1;die;    
  $VENDOR_ID = $_POST['VENDOR_ID'];
  $TENDER_DETAILS = $_POST['TENDER_DETAILS'];
  $START_DATE = $_POST['START_DATE'];
  //echo $START_DATE;die;
  $END_DATE = $_POST['END_DATE'];
  $date1 = date_create("$END_DATE");
  date_modify($date1, "-2 days");
  $Reminder_DATE = date_format($date1, "Y-m-d");




  //$Reminder_DATE=$_POST['$START_DATE'];


  //echo "INSERT INTO `amc`(`id`, `name`, `tender`, `active`, `start_date`, `end_date`, `Reminder_date`) VALUES ('','$VENDOR_ID','$TENDER_DETAILS','0','$START_DATE','$END_DATE','$Reminder_DATE')";die;




  $query = $con->query("INSERT INTO `amc`(`id`, `name`, `tender`, `active`, `start_date`, `end_date`, `Reminder_date`) VALUES ('','$VENDOR_ID','$TENDER_DETAILS','0','$START_DATE','$END_DATE','$Reminder_DATE')");
  if ($query) {
    echo "<script>alert('update AMC Sucessfully');window.location.href='admin_AMC.php'; </script>";
    // header("location:admin_image.php");

  } else {
    die(mysqli_error($conn));
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
      <span class="dashboard">AMC</span>
    </div>

    <?php
    include('admin_right_side_login.php');
    ?>
  </nav>
  <!-- end top manu -->

  <div class="home-content">

    <div class="sales-boxes">
      <div class="recent-sales box" style="width: 99%;text-align: center;">
        <div class="title">AMC</div>
        <br>
        <!-- <div class="sales-details" > -->
        <form enctype="multipart/form-data" action="" id="wb_Form1" name="form" method="post">
          <!-- <table cellpadding="0" cellspacing="0" border="0"> -->
          <div class="row ">
            <div class="col-md-3">
              <label for="validationDefault01" class="form-label">VENDOR NAME:</label>
              <select id="VENDOR_ID" name="VENDOR_ID" class="form-control" required="required">
                <option value="">Choose</option>
                <?php
                $ret = mysqli_query($con, "SELECT * FROM `vendor`");

                while ($row = mysqli_fetch_array($ret)) { ?>
                  <option value="<?php echo $row['ID']; ?>"><?php echo $row['NAME']; ?></option>
                <?php } ?>

              </select>
            </div>
            <div class="col-md-3">
              <label for="validationDefault02" class="form-label">TENDER DETAILS:</label>
              <textarea class="form-control" id="TENDER_DETAILS" name="TENDER_DETAILS" required="required" placeholder="AMC Address" maxlength="30" minlength="6"></textarea>
            </div>
           
            <div class="col-md-3">
              <label for="validationDefault02" class="form-label">START DATE:</label>
              <input type="date" class="form-control" id="START_DATE" name="START_DATE" required>
            </div>
            <div class="col-md-3">
              <label for="validationDefault02" class="form-label">END DATE:</label>
              <input type="date" class="form-control" id="END_DATE" name="END_DATE" required>
            </div>
          </div>

          <div class="row ">
            <strong>SUBMIT HERE</strong>
            <input type="submit" class="btn btn-danger" value="SUBMIT" name="submit1">
          </div>
        </form>

        <!-- </table> -->

        <!--    </div> -->
      </div>
    </div>






    <br>
    <div class="sales-boxes">
      <div class="recent-sales box" style="width: 99%;">
        <div class="title">Display image</div>

        <div class="table-responsive box">


          <!--   <form method="post" action="delete.php" > -->
          <table cellpadding="0" cellspacing="0" border="0" class="table table-condensed" id="example">

            <thead>

              <tr>
                <th>ID</th>
                <th>Name:</th>
                <th>Mobile:</th>
                <th>TENDER DETAILS:</th>
                <th>START DATE:</th>
                <th>END DATE:</th>
                <th>Reminder DATE:</th>
                <th>active</th>
                <th>modify</th>
                <!-- <th>Remove</th> -->

              </tr>
            </thead>
            <tbody>
              <?php
              $query = mysqli_query($con, " SELECT * FROM amc,vendor WHERE amc.name=vendor.ID ") or die(mysqli_error($con));
              // echo 1;die;   id`, `name`, `address`, `active`, `start_date`, `end_date`, `Reminder_date`
              while ($row = mysqli_fetch_array($query)) {
                $id = $row['id'];
                $name = $row['name'];
                $date = $row['start_date'];
                $today = date("Y-m-d");
                //echo $today;die;
              ?>

                <tr>

                  <td><?php echo $row['id'] ?></td>
                  <td><?php echo $row['NAME'] ?></td>
                   <td><?php echo $row['mobile'] ?></td>
                  <td><?php echo $row['tender'] ?></td>
                  <td><?php echo $row['start_date'] ?></td>
                  <td><?php echo $row['end_date'] ?></td>
                  <td><?php echo $row['Reminder_date'] ?></td>
                  <td><?php echo $row['active'] ?></td>
                  <!-- <td><?php echo $today ?></td> -->

                  <!-- <td><a href="../images/project/<?= $row['name']; ?>" download title="click to download"><span class="glyphicon glyphicon-paperclip" style="font-size:20px; color:blue"></span></a></td> -->
                  <!-- <td><a href="admin_PROJECT_modify.php?del=<?php echo $row['id']; ?>" ><span class="glyphicon glyphicon-edit" style="font-size:20px; color:red;"></span></a></td> -->
                  
                  <td><?php if ( $today > $row['end_date'] ){
                    //echo "UPDATE `amc` SET `active`=1 WHERE `id`='$id'";
                   
                $AMC_DEACTIVE=$con->query("UPDATE `amc` SET `active`=1 WHERE `id`='$id'");
                      ?>
                    <p style="color: red">Expired</p>

                <?php
                      }else{
                        ?>
                         <button class="btn btn-warning" data-toggle="modal" type="button" data-target="#update_modal<?php echo $row['id']?>"><span class="glyphicon glyphicon-edit"></span> Edit</button></td>
                         
                        <?php
                      }
                    include 'admin_AMC_modify.php';
              }

                ?>
                </tr>


            </tbody>
          </table>

          <!-- admin_PROJECT_modify - Copy.php -->


        </div>




      </div>

    </div>
  </div>

  </div>



  <?php



  include('admin_footer.php');
  ?>