<?php
session_start();
require_once __DIR__ . '/../dbConnection/dbConnection.php';
include('admin_sidenav.php');


?>


<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<link href="globe.png" rel="shortcut icon">
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
<link rel="stylesheet" type="text/css" href="../css/DT_bootstrap11.css">
<!-- table  -->
 <!--  <script src="https://code.jquery.com/jquery-3.5.1.js" type="text/javascript"></script>


          <script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>

           <script src="https://cdn.datatables.net/1.11.1/js/dataTables.bootstrap4.min.js" type="text/javascript"></script>

 <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet">

 <link href="https://cdn.datatables.net/1.11.1/css/dataTables.bootstrap4.min.css" rel="stylesheet"> -->




<!-- text -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" charset="utf-8" language="javascript" src="../js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf-8" language="javascript" src="../js/DT_bootstrap.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<!-- 
    <script>

     $(document).ready(function(){

  $("#datatable").dataTable();

});

   </script> -->


<!-- table -->
</head>


<!-- <script type="text/javascript" charset="utf-8" language="javascript" src="../js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf-8" language="javascript" src="../js/DT_bootstrap.js"></script> -->
<?php
date_default_timezone_set("Asia/Calcutta");
//echo date_default_timezone_get();
?>



<!-- top manu -->
<section class="home-section">
  <nav>
    <div class="sidebar-button">
      <i class='bx bx-menu sidebarBtn'></i>
      <span class="dashboard">Call log</span>
    </div>

    <?php
    include('admin_right_side_login.php');
    ?>
  </nav>
  <!-- end top manu -->

  <div class="home-content">

    <div class="sales-boxes">
      <div class="recent-sales box" style="width: 99%;text-align: center;">
        <div class="title">call log</div>
        <br>
          <div class="row ">
            <div class="col-md-12"> 
              <label for="validationDefault01" class="form-label" >SEARCH :</label>
            </div>
          </div>
          <div class="row">
            <div class="search-box col-md-12"  >
              <input type="search" class="rounded " placeholder="Search....." aria-label="Search" id="search" aria-describedby="search-addon" style="padding: 10px; width:50%"/>
              <i class='bx bx-search'></i>
            </div>
            <!-- <div class="col-md-12">   
                    
                <input type="search" class="rounded btn-dark" placeholder="Search....." aria-label="Search" id="search" aria-describedby="search-addon" />
            </div> -->
          </div>
      </div>
    </div>






    <br>
    <div class="sales-boxes">
      <div class="recent-sales box" style="width: 100%;">
        <div class="title">call log</div>
<!-- SELECT * FROM product_add INNER JOIN ip ON product_add.IP = ip.ID LEFT JOIN user ON product_add.emp_code = user.emp_id -->
        <div class="box">
            <table id="datatable" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>NAME:</th>
                  <th>DESIGNATION:</th>
                  <th>CELL:</th>
                  <th>FLOOE NO:</th>
                  <th>MOBILE NO :</th>
                  <th>EMP ID:</th>
                  <th>IP</th>
                  <th>PRODUCT NAME:</th>
                  <th>SERIAL NUMBER:</th>
                 <!--  <th>done</th> -->
                  <th>Complain lodge</th>
                  <th>Working /Not Working</th> 
                </tr>
              </thead>
              <tbody id="table">
                <?php
                $role = $_SESSION['role'];
                $CELL = $_SESSION['Cell'];
               
                if ($_SESSION['Cell'] =='0'){
                	
                	$query = mysqli_query($con, " SELECT * FROM product_add INNER JOIN ip ON product_add.IP = ip.ID JOIN user ON product_add.emp_code = user.emp_id") or die(mysqli_error($con));
                }else{
                
                	$query = mysqli_query($con, "SELECT * FROM product_add INNER JOIN ip ON product_add.IP = ip.ID INNER JOIN user ON product_add.emp_code = user.emp_id WHERE user.CELL = '$CELL'") or die(mysqli_error($con));
                }
                
                $counter = 0;
                while ($row = mysqli_fetch_array($query)) {
                  $p_ID = $row['0'];
                  //echo $p_ID;die;
                
                  $BRAND_NAME = $row['BRAND_NAME'];
                  $date = $row['date'];
                  $serial = $row['Serial_Number'];
                  $PRODUCT = $row['PRODUCT_NAME'];
                ?>
                  <tr>
                    <td><?php echo ++$counter ?></td>
                    <td><?php echo $row['NAME'] ?></td>
                    <td><?php echo $row['DESIGNATION'] ?></td>
                    <td><?php echo $row['CELL'] ?></td>
                    <td><?php echo $row['FLOOR_NO']; ?></td>
                    <td><?php echo $row['MOBILE_NO']; ?></td>
                    <td><?php echo $row['emp_code']; ?></td>
                    <td><?php echo $row['IP']; ?></td>
                    <td><?php echo $row['PRODUCT_NAME'] ?></td>
                    <td><?php echo $row['Serial_Number'] ?></td>
                 
                   
                    <td><button class="btn btn-warning" data-toggle="modal" type="button" data-target="#update_modal_CALL_LOG<?php echo $p_ID?>"><span class="glyphicon glyphicon-edit"></span> Complain lodge</button></td>
                  <!--   <button class="btn btn-warning" data-toggle="modal" type="button" data-target="#update_modal<?php echo $row['id'] ?>" disabled><span class="glyphicon glyphicon-edit"> -->
                    <?php
                                  $amc_working_remark= mysqli_query($con, "SELECT * FROM `amc_working` WHERE `done`='0' AND `SERIAL_NUMBER`='$serial'") or die(mysqli_error($con));

                                  while ($amc_working_list = mysqli_fetch_array($amc_working_remark)) {  
                                    
                                 ?> <td><font color="red"> WORKING </font></td>  <?php

                                  } 
                                  ?>
                    </tr>
                <?php
                  include 'Call_Log_modify.php';
                 
                }

                  ?>

              </tbody>
            
            </table>


        </div>




      </div>

    </div>
  </div>

  </div>



  <?php
  include('admin_footer.php');
  ?>
  <script type="text/javascript">
    var $rows = $('#table tr');
$('#search').keyup(function() {
    var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();
    
    $rows.show().filter(function() {
        var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
        return !~text.indexOf(val);
    }).hide();
});
  </script>