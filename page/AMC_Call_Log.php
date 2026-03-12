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
      <span class="dashboard"> AMC Call log</span>
    </div>

    <?php
    include('admin_right_side_login.php');
    ?>
  </nav>
  <!-- end top manu -->

  <div class="home-content">

    <div class="sales-boxes">
      <div class="recent-sales box" style="width: 99%;text-align: center;">
        <div class="title">AMC call log</div>
        <br>
        
          <div class="row ">
            <div class="col-md-12"> 
              <label for="validationDefault01" class="form-label" >SEARCH :</label>
            </div>
          </div>
          <div class="row ">
            <div class="col-md-12">   
            <!--  <input type="text" class="form-control" id="search" placeholder="Type to search"> -->
                    
                <input type="search" class="rounded btn-dark" placeholder="Search....." aria-label="Search" id="search" aria-describedby="search-addon" style="padding: 10px" />
            </div>
          </div>
      </div>
    </div>






    <br>
    <div class="sales-boxes">
      <div class="recent-sales box" style="width: 100%;">
        <div class="title">call log</div>
<!-- SELECT * FROM product_add INNER JOIN ip ON product_add.IP = ip.ID LEFT JOIN user ON product_add.emp_code = user.emp_id -->
        <div class="box">
            <table >
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
                  <th>PROBLEM </th>
                  <th>Make a Complain</th>
                  
                </tr>
              </thead>
              <tbody id="table">
                <?php
                $query = mysqli_query($con, " SELECT * FROM `amc_working` WHERE `done`='0'") or die(mysqli_error($con));
                // echo 1;die;
                $counter = 0;
                while ($row = mysqli_fetch_array($query)) {
                  $id = $row['id'];
                  $BRAND_NAME = $row['BRAND_NAME'];
                  $date = $row['date'];
                ?>
                  <tr>
                    <td><?php echo ++$counter ?></td>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['designation'] ?></td>
                    <td><?php echo $row['cell'] ?></td>
                    <td><?php echo $row['floor_no'] ?></td>
                    <td><?php echo $row['mobile_no'] ?></td>
                    <td><?php echo $row['emp_no'] ?></td>
                    <td><?php echo $row['IP'] ?></td>
                    <td><?php echo $row['product_name'] ?></td>
                    <td><?php echo $row['SERIAL_NUMBER'] ?></td>
                    <td> <?php echo $row['PROBLEM'] ?></td>

                    <td><a href="AMC_Call_Log_modify.php?i_d=<?php echo $row['id'];?>&SERIAL=<?php echo $row['SERIAL_NUMBER'];?>"><button class="btn btn-warning" data-toggle="modal" type="button"><span class="glyphicon glyphicon-edit"></span> Open Complain lodge</button></a></td>
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