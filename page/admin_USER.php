<?php
session_start();
require_once __DIR__ . '/../dbConnection/dbConnection.php';
include('admin_sidenav.php');

if (isset($_POST['submit1']) != "") {
  // echo 1;die;
  $name = $_POST['name'];
  $DESIGNATION = $_POST['DESIGNATION'];
  $CELL = $_POST['CELL'];
  $FLOOR_NO = $_POST['FLOOR_NO'];
  $Mobile_No = $_POST['Mobile_No'];

  //echo "INSERT INTO `user`(`id`, `NAME`, `DESIGNATION`, `CELL`, `FLOOR_NO`, `MOBILE_NO`) VALUES ('','$name',' $DESIGNATION','$CELL','$FLOOR_NO','$Mobile_No')";die;


  $query = $con->query("INSERT INTO `user`(`id`, `NAME`, `DESIGNATION`, `CELL`, `FLOOR_NO`, `MOBILE_NO`) VALUES ('','$name',' $DESIGNATION','$CELL','$FLOOR_NO','$Mobile_No')");
  if ($query) {
    echo "<script>alert('update  USER Sucessfully');window.location.href='admin_USER.php'; </script>";
    // header("location:admin_image.php");

  } else {
    die(mysqli_error($conn));
  }
}
?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style type="text/css">
  table {
    font-family: arial, sans-serif;
    border-collapse: collapse;

  }

  td,
  th {
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

  ol,
  ul {
    margin-top: 0;
    margin-bottom: 10px;
  }

  * {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
  }

  user agent stylesheet ul {
    display: block;
    list-style-type: disc;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    padding-inline-start: 40px;
  }
</style>


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
      <span class="dashboard">USER</span>
    </div>

    <?php
    include('admin_right_side_login.php');
    ?>
  </nav>
  <!-- end top manu -->

  <div class="home-content">

    <div class="sales-boxes">
      <div class="recent-sales box" style="width: 99%;text-align: center;">
        <div class="title">USER</div>
        <br>
        <!-- <div class="sales-details" > -->
        <form enctype="multipart/form-data" action="" id="wb_Form1" name="form" method="post">
          <!-- <table cellpadding="0" cellspacing="0" border="0"> -->
          <div class="row ">
            <div class="col-md-3">
              <label for="validationDefault01" class="form-label">Name:</label>
              <input type="text" class="form-control" name="name" id="name" required="required" placeholder=" Name">
            </div>
            <div class="col-md-2">
              <label for="validationDefault02" class="form-label">DESIGNATION:</label>
              <input type="text" class="form-control" id="DESIGNATION" name="DESIGNATION" required="required" placeholder="DESIGNATION">
            </div>
            <div class="col-md-2">
              <label for="validationDefault01" class="form-label">CELL:</label>
              <input type="text" class="form-control" name="CELL" id="CELL" required="required" placeholder="CELL">
            </div>


            <div class="col-md-2">
              <label for="validationDefault01" class="form-label">FLOOR NO.:</label>
              <select name="FLOOR_NO" id="FLOOR_NO" class="form-control" required="required">
                <option value="">SELECT FLOOR</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
              </select>
              <!-- <input type="text" class="form-control" name="name1" id="name1"  required="required" placeholder="VENDOR Name"> -->
            </div>
            <div class="col-md-3">
              <label for="validationDefault01" class="form-label">Mobile No.:</label>
              <input type="text" class="form-control" id="Mobile_No" name="Mobile_No" required>
            </div>
            <!--  <div class="col-md-3">
                              <label for="validationDefault02" class="form-label">DELIVERY DATE:</label>
                              <input type="date" class="form-control" id="validationDefault02" value="Doe" required>
                                   </div>
                                   <div class="col-md-3">
                              <label for="validationDefault02" class="form-label">TRANSFER DATE:</label>
                              <input type="date" class="form-control" id="validationDefault02" value="Doe" required>
                                   </div> -->
          </div>
          <BR>
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


          <!-- <form method="post" action="delete.php" > -->
          <table cellpadding="0" cellspacing="0" border="0" class="table table-condensed" id="example">

            <thead>

              <tr>
                <th>ID</th>
                <th>Name:</th>
                <th>DESIGNATION:</th>
                <th>CELL</th>
                <th>FLOOR NO.</th>
                <th>Mobile No.:</th>
                <th>EMP code:</th>
                <!-- <th>TRANSFER DATE:</th> -->
                <th>modify</th>
                <th>transfer user</th>

              </tr>
            </thead>
            <tbody>
              <?php
              $query = mysqli_query($con, " SELECT * FROM `user` ORDER BY `id` DESC") or die(mysqli_error($con));
              // echo 1;die;
              while ($row = mysqli_fetch_array($query)) {
                $id = $row['id'];
                $name = $row['name'];
                $date = $row['date'];
              ?>

                <tr>

                  <td><?php echo $row['id'] ?></td>
                  <td><?php echo $row['NAME'] ?></td>
                  <td><?php echo $row['DESIGNATION'] ?></td>
                  <td><?php echo $row['CELL'] ?></td>
                  <td><?php echo $row['FLOOR_NO'] ?></td>
                  <td><?php echo $row['MOBILE_NO'] ?></td>
                  <td><?php echo $row['emp_code'] ?></td>

                  <td><button class="btn btn-warning" data-toggle="modal" type="button" data-target="#update_modal<?php echo $row['id'] ?>"><span class="glyphicon glyphicon-edit"></span> Edit</button></td>

                  <td><a href="admin_USER_A_D.php?id=<?php echo $row['id']; ?>&ACT=<?php echo $row['active']; ?>"><?php if ($row['active'] == 1) {   ?> <span class="glyphicon glyphicon-unchecked" style="font-size:20px; color:red;">NO</span> <?php } else { ?> <span class="glyphicon glyphicon-unchecked" style="font-size:20px; color:GREEN;">YES</span><?php } ?></span></a></td>
                <?php
                include 'admin_USER_modify.php';
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