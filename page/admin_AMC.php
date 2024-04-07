<?php
session_start();
require_once __DIR__ . '/../dbConnection/dbConnection.php';
include('admin_sidenav.php');

if (isset($_POST['submit1']) != "") {
  //echo 1;die;
  $AMC_Name = $_POST['AMC_Name'];
  $AMC_Address = $_POST['AMC_Address'];
  $Mobile_No = $_POST['Mobile_No'];
  $START_DATE = $_POST['START_DATE'];
  //echo $START_DATE;die;
  $END_DATE = $_POST['END_DATE'];
  $date1 = date_create("$START_DATE");
  date_modify($date1, "+32 days");
  $Reminder_DATE = date_format($date1, "Y-m-d");




  //$Reminder_DATE=$_POST['$START_DATE'];


  // echo "INSERT INTO `amc`(`id`, `name`, `address`, `mobile`, `start date`, `end date`, `Reminder date`) VALUES ('','$AMC_Name','$AMC_Address','$Mobile_No','$START_DATE','$END_DATE','$Reminder_DATE')";die;




  $query = $con->query("INSERT INTO `amc`(`id`, `name`, `address`, `mobile`, `start_date`, `end_date`, `Reminder_date`) VALUES ('','$AMC_Name','$AMC_Address','$Mobile_No','$START_DATE','$END_DATE','$Reminder_DATE')");
  if ($query) {
    echo "<script>alert('update AMC Sucessfully');window.location.href='admin_AMC.php'; </script>";
    // header("location:admin_image.php");

  } else {
    die(mysqli_error($conn));
  }
}
?>
<!-- <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style type="text/css">
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}



.pagination ul {
    display: inline-block;
    *display: inline;
    margin-bottom: 0;
    margin-left: 0;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
    *zoom: 1;
    -webkit-box-shadow: 0 1px 2px rgb(0 0 0 / 5%);
    -moz-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
    box-shadow: 0 1px 2px rgb(0 0 0 / 5%);
}
ol, ul {
    margin-top: 0;
    margin-bottom: 10px;
}
* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
user agent stylesheet
ul {
    display: block;
    list-style-type: disc;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    padding-inline-start: 40px;
}


</style> -->


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
              <label for="validationDefault01" class="form-label">AMC Name:</label>
              <input type="text" class="form-control" name="AMC_Name" id="AMC_Name" required="required" placeholder="AMC Name">
            </div>
            <div class="col-md-3">
              <label for="validationDefault02" class="form-label">AMC Address:</label>
              <textarea class="form-control" id="AMC_Address" name="AMC_Address" required="required" placeholder="AMC Address"></textarea>
            </div>
            <div class="col-md-2">
              <label for="validationDefault01" class="form-label">AMC Mobile No.:</label>
              <input type="text" class="form-control" id="Mobile_No" name="Mobile_No" required>
            </div>
            <div class="col-md-2">
              <label for="validationDefault02" class="form-label">START DATE:</label>
              <input type="date" class="form-control" id="START_DATE" name="START_DATE" required>
            </div>
            <div class="col-md-2">
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
                <th>AMC Name:</th>
                <th>AMC Address:</th>
                <th>AMC Mobile No.:</th>
                <th>START DATE:</th>
                <th>END DATE:</th>
                <th>Reminder DATE:</th>
                <th>modify</th>
                <!-- <th>Remove</th> -->

              </tr>
            </thead>
            <tbody>
              <?php
              $query = mysqli_query($con, " SELECT * FROM `amc` ORDER BY `id` DESC") or die(mysqli_error($con));
              // echo 1;die;
              while ($row = mysqli_fetch_array($query)) {
                $id = $row['id'];
                $name = $row['name'];
                $date = $row['end date'];
              ?>

                <tr>

                  <td><?php echo $row['id'] ?></td>
                  <td><?php echo $row['name'] ?></td>
                  <td><?php echo $row['address'] ?></td>
                  <td><?php echo $row['mobile'] ?></td>
                  <td><?php echo $row['start_date'] ?></td>
                  <td><?php echo $row['end_date'] ?></td>
                  <td><?php echo $row['Reminder_date'] ?></td>
                  <!-- <td><a href="../images/project/<?= $row['name']; ?>" download title="click to download"><span class="glyphicon glyphicon-paperclip" style="font-size:20px; color:blue"></span></a></td> -->
                  <!-- <td><a href="admin_PROJECT_modify.php?del=<?php echo $row['id']; ?>" ><span class="glyphicon glyphicon-edit" style="font-size:20px; color:red;"></span></a></td> -->

                  <td><button class="btn btn-warning" data-toggle="modal" type="button" data-target="#update_modal<?php echo $row['id'] ?>"><span class="glyphicon glyphicon-edit"></span> Edit</button></td>

                  <!--  <td><a href="admin_AMC_deleted.php?del=<?php echo $row['id']; ?>" ><span class="glyphicon glyphicon-trash" style="font-size:20px; color:red;"></span></a></td> -->
                <?php
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