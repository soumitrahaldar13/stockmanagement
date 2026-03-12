<?php
session_start();
require_once __DIR__ . '/../dbConnection/dbConnection.php';
include('admin_sidenav.php');
$S_N = $_GET['S_N'];
$id = $_GET['id'];
$PRODUCT= $_GET['PRODUCT'];
//echo $id . $PRODUCT ;die;
session_start();
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
      <span class="dashboard">Call Log upgrade</span>
    </div>

    <?php
    include('admin_right_side_login.php');
    ?>
  </nav>
  <!-- end top manu -->

  <div class="home-content">

    <div class="sales-boxes">
      <div class="recent-sales box" style="width: 99%;text-align: center;">
        <div class="title">Call Log upgrade <?php echo $S_N ?></div>


        <!-- CPU -->

        <?php
        //echo "SELECT * FROM `cpu` WHERE `Serial_Number`='$id'";die;
        $cpudisplay = mysqli_query($con, "SELECT * FROM `$PRODUCT` WHERE `Serial_Number`='$S_N'") or die(mysqli_error($con));
        while ($row = mysqli_fetch_array($cpudisplay)) {

        ?>

          <div style="text-align: center;">
            <form enctype="multipart/form-data" name="form" method="post" action="Call_Log_upgrade_action.php">
              <div class="form-group">
                <label>SSD Capacity:</label>

                <input type="text" name="SSD_Capacity" value="<?php echo $row['SSD_Capacity'] ?>" class="form-control" required="required" />
              </div>
              <div class="form-group">
                <label>HDD Capacity:</label>
                <input type="text" name="HDD_Capacity" value="<?php echo $row['HDD_Capacity'] ?>" class="form-control" required="required" />
              </div>
              <div class="form-group">
                <label>RAM:</label>
                <input type="hidden" name="S_N" value="<?php echo $S_N ?>" />
                <!-- <input type="text" name="RAM" value="<?php echo $row['RAM'] ?>" class="form-control" />  -->
                <select id="RAM" name="RAM" class="form-control" required="required">
                  <option value="<?php echo $row['RAM'] ?>"><?php echo $row['RAM'] ?></option>
                  <option value="1GB">1GB</option>
                  <option value="2GB">2GB</option>
                  <option value="4GB">4GB</option>
                  <option value="6GB">6GB</option>
                  <option value="8GB">8GB</option>
                  <option value="12GB">12GB</option>
                  <option value="512MB">512MB</option>
                </select>
              </div>
              <div class="form-group">
                <label>Graphic Card Description:</label>
                <input type="hidden" name="S_N" value="<?php echo $S_N ?> ?>" />
                <input type="text" name="Graphic_Card" value="<?php echo $row['Graphic_Card'] ?>" class="form-control" required="required" />
              </div>
              <div class="form-group">
                <label>so:</label>
                <input type="hidden" name="S_N" value="<?php echo $S_N ?>" />
                <input type="text" name="OS" value="<?php echo $row['OS'] ?>" class="form-control" required="required" />
              </div>
              <div class="form-group">
                <label>OS (Serial number)</label>
                <input type="hidden" name="S_N" value="<?php echo $S_N ?>" />
                <input type="hidden" name="product" id="product" value="<?php echo $PRODUCT ?>" />
                <input type="text" name="OS_Serial_no" value="<?php echo $row['OS_Serial_no'] ?>" class="form-control" required="required" />
              </div>
              <?php
              $amc_working_remark = mysqli_query($con, "SELECT * FROM `amc_working` WHERE `done`='0' AND `SERIAL_NUMBER`='$S_N'") or die(mysqli_error($con));
              while ($row1 = mysqli_fetch_array($amc_working_remark)) {
              ?>

                <div class="form-group">
                  <label for="validationDefault01" class="form-label">remark</label>
                  <input type="hidden" name="table_id" id="table_id" value="<?php echo $row1['id'] ?>" />
                  <textarea class="form-control" id="remark" name="remark" placeholder="remark"><?php echo $row1['remark'] ?></textarea>

                </div>
              <?php
              }
              ?>
              <div class="row ">
                <strong>SUBMIT HERE</strong>
                <button name="update_cpu" id="update_ups" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Update</button>
              </div>
            </form>
          </div>



          <!-- end CPU -->
        <?php
        }

        ?>
      </div>
    </div>
  </div>
  </div>





  <?php
  include('admin_footer.php');
  ?>