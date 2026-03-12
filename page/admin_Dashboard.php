<?php
session_start();
require_once __DIR__ . '/../dbConnection/dbConnection.php';
require_once __DIR__ . '/../helpers/session_helper.php';
include('../authentication/session.php');
if (!check_if_user_logged_in()) {
  header('Location: ../index.php');
}

include('admin_sidenav.php');
?>
<link rel="stylesheet" href="../css/page_sytyles/index.css">
<!-- <link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../css/DT_bootstrap11.css">
<link rel="stylesheet" href="../css/style.css"> -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript">
</script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
</script>

<!-- table  -->
  <link href="https://cdn.datatables.net/1.11.1/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<!-- table -->

<!-- top manu -->
<section class="home-section">
  <nav>
    <div class="sidebar-button">

      <i class='bx bx-menu sidebarBtn'></i>
      <span class="dashboard">Dashboard</span>
    </div>

    <?php
    include('admin_right_side_login.php');
    ?>
  </nav>
  <!-- end top manu -->
  <div class="home-content">
    <div class="overview-boxes">
      <div class="box" style="background: #64c13f;">
        <div class="right-side">
          <div class="box-topic">Total AIO </div>
            <?php
             $query = "SELECT COUNT(*) FROM `aio` WHERE `ewaste`=0 AND `Delivery_Date`=0;";
           
                        $result = mysqli_query($con, $query) or die(mysqli_error($con));
                        while ($row = mysqli_fetch_array($result)) {

                         ?><h3>In Stock</h3><h2>  <?php  echo "$row[0]";?></h2><?php

                }
            ?>



          <div class="number"><?php echo $data['total']; ?></div> 
          <div class="indicator">
            <i class='bx bx-up-arrow-alt'></i>
            <span class="text"> </span>
          </div>
        </div>
        <i class='bx bx-cart-alt cart'></i>
      </div>
       <div class="box" style="background: #64c13f;">
        <div class="right-side">
          <div class="box-topic">Total Laptop </div>
            <?php
             $query = "SELECT COUNT(*) FROM `laptop` WHERE `ewaste`=0 AND `Delivery_Date`=0;";
           
                        $result = mysqli_query($con, $query) or die(mysqli_error($con));
                        while ($row = mysqli_fetch_array($result)) {

                         ?><h3>In Stock</h3><h2>  <?php  echo "$row[0]";?></h2><?php

                }
            ?>



          <div class="number"><?php echo $data['total']; ?></div> 
          <div class="indicator">
            <i class='bx bx-up-arrow-alt'></i>
            <span class="text"> </span>
          </div>
        </div>
        <i class='bx bx-cart-alt cart'></i>
      </div>
      <div class="box" style="background: #64c13f;">
        <div class="right-side">
          <div class="box-topic">Total CPU </div>
            <?php
             $query = "SELECT COUNT(*) FROM `cpu` WHERE `ewaste`=0 AND `Delivery_Date`=0;";
           
                        $result = mysqli_query($con, $query) or die(mysqli_error($con));
                        while ($row = mysqli_fetch_array($result)) {

                         ?><h3>In Stock</h3><h2>  <?php  echo "$row[0]";?></h2><?php

                }
            ?>



          <div class="number"><?php echo $data['total']; ?></div> 
          <div class="indicator">
            <i class='bx bx-up-arrow-alt'></i>
            <span class="text"> </span>
          </div>
        </div>
        <i class='bx bx-cart-alt cart'></i>
      </div>
    <div class="box" style="background: #35a596;">
        <div class="right-side">
          <div class="box-topic">Total Printer </div>
            <?php
             $query = "SELECT COUNT(*) FROM `printerscanner` WHERE `ewaste`=0 AND `Delivery_Date`=0;";
           
                        $result = mysqli_query($con, $query) or die(mysqli_error($con));
                        while ($row = mysqli_fetch_array($result)) {

                         ?><h3>In Stock</h3><h2>  <?php  echo "$row[0]";?></h2><?php

                }
            ?>



          <div class="number"><?php echo $data['total']; ?></div> 
          <div class="indicator">
            <i class='bx bx-up-arrow-alt'></i>
            <span class="text"> </span>
          </div>
        </div>
        <i class='bx bx-cart-alt cart'></i>
      </div>
      <div class="box" style="background: #35a596;">
        <div class="right-side">
          <div class="box-topic">Total Scanner</div>
            <?php
             $query = "SELECT COUNT(*) FROM `scanner` WHERE `ewaste`=0 AND `Delivery_Date`=0;";
           
                        $result = mysqli_query($con, $query) or die(mysqli_error($con));
                        while ($row = mysqli_fetch_array($result)) {

                         ?><h3>In Stock</h3><h2>  <?php  echo "$row[0]";?></h2><?php

                }
            ?>



          <div class="number"><?php echo $data['total']; ?></div> 
          <div class="indicator">
            <i class='bx bx-up-arrow-alt'></i>
            <span class="text"> </span>
          </div>
        </div>
        <i class='bx bx-cart-alt cart'></i>
      </div>
     <div class="box" style="background: #a53558;">
        <div class="right-side">
          <div class="box-topic">Total Monitor</div>
            <?php
             $query = "SELECT COUNT(*) FROM `monitor` WHERE `ewaste`=0 AND `Delivery_Date`=0;";
           
                        $result = mysqli_query($con, $query) or die(mysqli_error($con));
                        while ($row = mysqli_fetch_array($result)) {

                         ?><h3>In Stock</h3><h2>  <?php  echo "$row[0]";?></h2><?php

                }
            ?>



          <div class="number"><?php echo $data['total']; ?></div> 
          <div class="indicator">
            <i class='bx bx-up-arrow-alt'></i>
            <span class="text"> </span>
          </div>
        </div>
        <i class='bx bx-cart-alt cart'></i>
      </div>

     <div class="box" style="background: #d5c818;">
        <div class="right-side">
          <div class="box-topic">Total UPS      </div>
            <?php
             $query = "SELECT COUNT(*) FROM `ups` WHERE `ewaste`=0 AND `Delivery_Date`=0;";
           
                        $result = mysqli_query($con, $query) or die(mysqli_error($con));
                        while ($row = mysqli_fetch_array($result)) {

                         ?><h3>In Stock</h3><h2>  <?php  echo "$row[0]";?></h2><?php

                }
            ?>



          <div class="number"><?php echo $data['total']; ?></div> 
          <div class="indicator">
            <i class='bx bx-up-arrow-alt'></i>
            <span class="text"> </span>
          </div>
        </div>
        <i class='bx bx-cart-alt cart'></i>
      </div>
       <div class="box" style="background: #d5c818;">
        <div class="right-side">
          <div class="box-topic">Total Ewaste.</div>
            <?php
             $query_byback = "SELECT COUNT(*) FROM `byback` ;";
           
                        $result = mysqli_query($con, $query_byback) or die(mysqli_error($con));
                        while ($row = mysqli_fetch_array($result)) {

                         ?><h3>In Stock</h3><h2> <?php  echo "$row[0]";?></h2><?php

                }
            ?>



          <div class="number"><?php echo $data['total']; ?></div> 
          <div class="indicator">
            <i class='bx bx-up-arrow-alt'></i>
            <span class="text"> </span>
          </div>
        </div>
        <i class='bx bx-cart-alt cart'></i>
      </div>
    </div>

    <div class="sales-boxes">
      <div class="recent-sales box">
        <div class="title">Mapping Product</div>
        <form action="admin_Dashboard_Product_assignment.php" name="myForm" method="post" class="w3_form_post" onsubmit="return validateForm()" enctype="multipart/form-data">
          <div class='row'>
            <!-- Search by empId -->
            <div class="custom-container">
              <label for="emp-code">Search by Emp code:</label>
              <input type='text' id="emp-code-input" name="emp-code-input" placeholder="Enter employee code" class="search-input" />
            </div>
            <!-- DISPLAY IP LIST DROPDOWN -->
            <div class='mt-10' id="ip-list"></div>

            <!-- Display Available Products -->
            <?php include_once __DIR__ . '/../page/component/get_product_list.php' ?>
            <!-- Display Available Products serial_no -->


            <div id="Serial_Number"></div>
          </div>

          <br />
          <div class="button" style="margin-top: 10%;">
            <input type="submit" class="btn btn-danger" value="SUBMIT" name="submit_product">
          </div>
          </br>
        </form>



      </div>

      <!-- start USER USED PRODUCT's div -->
      <div class="top-sales box" id="user_data" >
        <button onclick="exportTbToCSVformat('export_details.csv')">Export to CSV</button>
         <button id="button">Generate PDF</button>
             <div class="card" id="makepdf">
                   <div class="title">Products in use</div>
                       <div class="custom-container">
             
                            <label for="emp-code">Search by Emp code:</label>
                            <input type='text' id="emp-code" name="emp-code" placeholder="Enter employee code" class="search-input" />
                       </div>
        <!-- Render the list of product  -->
                       <div class='result-container' id="product-list"></div>
                   <p hidden>This Project used by <b>Debabrata Biswas,AIO</p>
             </div>
      </div>



    </div>

  </div>
  <!-- end ip div -->




  <br>

  <div class="recent-sales box" style="width: 100%;background: #fff;padding: 20px 25px;margin: 0 20px 0 0;border-radius: 12px;box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);">
    <div class="title">PRODUCT Assignment </div>

    <div class="table-responsive box">
      <table cellpadding="0" cellspacing="0" border="0" class="table table-condensed" id="example">
        <thead>
          <tr>
            <th>Sl.No.</th>
            <th>IP:</th>
             <th>NAME:</th>
            <th>Emp-code:</th>
            <th>PRODUCT NAME:</th>
            <th>SERIAL_NO:</th>
            <th>DATE_OF_ISSUE:</th>
            <th>New IP</th>
           <!--  <th>New IP ID</th>
            <th>Submit</th> -->
            <th>return</th>

          </tr>
        </thead>
        <tbody id="myTable">
          <?php
          // $query = mysqli_query($con, "SELECT * FROM product_add INNER JOIN ip ON product_add.IP = ip.ID ORDER BY `emp_code` ASC ") or die(mysqli_error($con));
          $query = mysqli_query($con, "SELECT * FROM product_add INNER JOIN ip ON product_add.IP = ip.ID INNER JOIN user ON product_add.emp_code = user.emp_id ORDER BY `emp_code` ASC ") or die(mysqli_error($con));
           //echo SELECT * FROM product_add INNER JOIN ip ON product_add.IP = ip.ID;
           $counter = 0;
          while ($row = mysqli_fetch_array($query)) {
             //print_r($row);

          ?>
            <tr>
              <td><?php echo ++$$counter ?></td>
              <td><?php echo $row['IP'] ?></td>

			  <td><?php echo $row['NAME'] ?></td>

              <td><?php echo $row['emp_code']  ?></td>
              <td><?php echo $row['PRODUCT_NAME'] ?></td>
              <td><?php echo $row['Serial_Number'] ?></td>
              <td><?php echo $row['DATE_OF_ISSUE'] ?></td>

              <td><?php echo $row['New_IP'] ?></td>
             <!--  <td><?php echo $row['ID'] ?></td>
               <td><a href="admin_IP_New.php?ipid=<?php echo $row['ID']; ?>&AMC=<?php echo $row['is_amc']; ?>"><?php if ($row['is_amc'] == 0) { ?><span class="glyphicon glyphicon-unchecked" style="font-size:20px; color:red;">N</span> <?php } else { ?><span class="glyphicon glyphicon-unchecked" style="font-size:20px; color:GREEN;">Y</span><?php } ?></span></a></td> -->



              <!--   <td><button class="btn btn-warning" data-toggle="modal" type="button" data-target="#update_modal<?php echo $row['id'] ?>"><span class="glyphicon glyphicon-edit"></span> Edit</button></td> -->
              <!-- Are you sure return or not js script USED "onclick="return checkDelete()" "-->
              <td><a href="admin_Dashboard_product_return.php?id=<?php echo $row['0']; ?>&uid=<?php echo $row['PRODUCT_NAME']; ?>&SERIAL=<?php echo $row['Serial_Number'];?>&ip=<?php echo $row['ID'];?>&emp=<?php echo $row['emp-code'];?>" onclick="return checkDelete()"><span class="glyphicon glyphicon-retweet" style="font-size:40px; color:#1f39c1;"></span></a></td>
            <?php
            include 'admin_Dashboard_product_assignment_modify.php';
          }

            ?>


            </tr>
        </tbody>
      </table>
    </div>
  </div>







  </div>


  </div>

</section>
<?php
include('admin_footer.php');
?>

<!-- dropdown add product -->
<script>

</script>
<!-- end dropdown add product -->


<!-- <script>
function myFunction() {
  let x = document.getElementById("USER_IP");
  x.value = x.value.toUpperCase();
}
</script> -->

<!-- search table -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script>
  $(document).ready(function() {
    $('#example').DataTable();

    $("#USER").change(function() {

      var user = $('#USER').val();
      //alert(user);
      $.ajax({
        type: "POST",
        url: "Dashbord_ajex_user_page.php",
        data: 'user=' + user,
        success: function(data) {
          $("#user_data").html(data);
        }
      });

    });

    // Get products list by emp code
    $('#emp-code').blur(function() {
      const empCode = $('#emp-code').val();
      $.ajax({
        type: 'POST',
        url: 'ajax-controller/ajax_get_product_details.php',
        data: {
          empCode
        },
        success: function(data) {
          $('#product-list').html(data);
        }
      })
    });

    // Get all IPs by emp code
    $('#emp-code-input').blur(function() {
      const empCode = $('#emp-code-input').val();
      $.ajax({
        type: 'POST',
        url: 'ajax-controller/ajax_get_ip_list.php',
        data: {
          empCode
        },
        success: function(data) {
          $('#ip-list').html(data);
        }
      })
    });

  });
  // Get product serial number by product Id
  function getProduct(productName) {
    // console.log('product function called', productName);
    var user = $('#Serial_Number').val();
    //alert(user);
    $.ajax({
      type: "POST",
      url: "component/get_product_serial_no.php",
      data: {
        productName: productName
      },
      success: function(data) {
        //alert;
        $("#Serial_Number").html(data);

      }
    });
  }
</script>
<!-- end search table -->

<!-- pdf -->
<script>
        let button = document.getElementById("button");
        let makepdf = document.getElementById("makepdf");
 
        button.addEventListener("click", function () {
            html2pdf().from(makepdf).save();
        });
    </script>

    <!-- Are you sure return or not -->
    <script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Are you sure you want to Return?');
}
</script>
<!-- Download CSV file -->
<script  type="text/javascript">
    
      function downloadToCSV(csv, filename) {
        var csvFile;
        var downloadLink;
      
        // CSV file
        csvFile = new Blob([csv], {type: "text/csv"});
      
        // Download link
        downloadLink = document.createElement("a");
      
        // File name
        downloadLink.download = filename;
      
        // Create a link to the file
        downloadLink.href = window.URL.createObjectURL(csvFile);
      
        // Hide download link
        downloadLink.style.display = "none";
      
        // Add the link to DOM
        document.body.appendChild(downloadLink);
      
        // Click download link
        downloadLink.click();
      }
      
      function exportTbToCSVformat(filename) {
        var csv = [];
        var rows = document.querySelectorAll("#makepdf tr");
        
        for (var i = 0; i < rows.length; i++) {
          var row = [], cols = rows[i].querySelectorAll("td, th");
          
          for (var j = 0; j < cols.length; j++) 
            row.push(cols[j].innerText);
          
          csv.push(row.join(","));        
        }
      
        // Download CSV file
        downloadToCSV(csv.join("\n"), filename);
      }
    </script>
<!-- new IP -->
    <script type="text/javascript">

$(document).ready(function(){
    $('#Serial_Number').keyup(function() {
      const Serial_Number = $('#Serial_Number').val();
      alert(Serial_Number);
      $.ajax({
        type: 'POST',
        url: 'admin_UPS-SLNO_check.php',
        data: {'Serial_Number':Serial_Number},
        success: function(data) {
            alert(data);
          $('#Serial_Number_check').html(data);
        }
      })
    });

});
</script>