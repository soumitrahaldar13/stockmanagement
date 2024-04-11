<?php
session_start();
require_once __DIR__ . '/../dbConnection/dbConnection.php';
require_once __DIR__ . '/../helpers/session_helper.php';
if (!check_if_user_logged_in()) {
  header('Location: ../index.php');
}

include('admin_sidenav.php');
?>
<!-- <link rel="stylesheet" href="../css/style_add.css"> -->

<script src="https://code.jquery.com/jquery-3.2.1.min.js">
</script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript">
</script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
</script>

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
      <div class="box">
        <div class="right-side">
          <div class="box-topic">Total CPU</div>
          <?php
          // $CPU_count = mysqli_query($con, "SELECT * FROM `cpu` WHERE `Delevary_Date`='NAN'&`ewaste`='0'") or die('Error');
          // $count = mysqli_num_rows($CPU_count);

          ?>
          <!-- <div class="number"><?php echo $count; ?></div> -->
          <div class="indicator">
            <i class='bx bx-up-arrow-alt'></i>
            <span class="text">1 under AMC </span>
          </div>
        </div>
        <i class='bx bx-cart-alt cart'></i>
      </div>
      <div class="box">
        <div class="right-side">
          <div class="box-topic">Total Sales</div>
          <div class="number">38,876</div>
          <div class="indicator">
            <i class='bx bx-up-arrow-alt'></i>
            <span class="text">Up from yesterday</span>
          </div>
        </div>
        <i class='bx bxs-cart-add cart two'></i>
      </div>
      <div class="box">
        <div class="right-side">
          <div class="box-topic">Total Profit</div>
          <div class="number">$12,876</div>
          <div class="indicator">
            <i class='bx bx-up-arrow-alt'></i>
            <span class="text">Up from yesterday</span>
          </div>
        </div>
        <i class='bx bx-cart cart three'></i>
      </div>
      <div class="box">
        <div class="right-side">
          <div class="box-topic">Total Return</div>
          <div class="number">11,086</div>
          <div class="indicator">
            <i class='bx bx-down-arrow-alt down'></i>
            <span class="text">Down From Today</span>
          </div>
        </div>
        <i class='bx bxs-cart-download cart four'></i>
      </div>
    </div>

    <div class="sales-boxes">
      <div class="recent-sales box">
        <div class="title">User Add Product</div>
        <form action="Product_assignment.php" name="myForm" method="post" class="w3_form_post" onsubmit="return validateForm()" enctype="multipart/form-data">
          <div class='row'>
            <!-- Search by empId -->
            <div class="custom-container">
              <label for="emp-code">Search by Emp code:</label>
              <input type='text' id="emp-code-input" name="emp-code-input" placeholder="Enter employee code" class="search-input" />
            </div>
            <!-- DISPLAY IP LIST DROPDOWN -->
            <div class='mt-10' id="ip-list"></div>

            <!-- Display Available Products -->
            <?php include_once __DIR__ . '/../page/ajax-controller/get_product_list.php' ?>
          </div>
          <br />
          <div class="button" style="margin-top: 10%;">
            <input type="submit" class="btn btn-danger" value="SUBMIT" name="submit_prodict">
          </div>
          </br>
        </form>



      </div>

      <!-- start USER USED PRODUCT's div -->
      <div class="top-sales box" id="user_data">
        <div class="title">Products in use</div>
        <div class="custom-container">
          <label for="emp-code">Search by Emp code:</label>
          <input type='text' id="emp-code" name="emp-code" placeholder="Enter employee code" class="search-input" />
        </div>
        <!-- Render the list of product  -->
        <div class='result-container' id="product-list"></div>
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
            <th>ID</th>
            <th>IP:</th>
            <th>USER_MOBILE:</th>
            <th>`PRODUCT NAME.:</th>
            <th>SERIAL_NO:</th>
            <th>DATE_OF_ISSUE:</th>

            <!--  <th>modify</th> -->
            <th>return</th>

          </tr>
        </thead>
        <tbody id="myTable">
          <?php
          $query = mysqli_query($con, " SELECT * FROM `product_add` ORDER BY `id` DESC") or die(mysqli_error($con));
          // echo 1;die;
          while ($row = mysqli_fetch_array($query)) {
            $id = $row['ID'];
            $MOBILE_NO1 = $row['USER_MOBILE'];
            $Serial = $row['SERIAL_NO'];
            $product = $row['PRODUCT NAME']
          ?>
            <tr>
              <td><?php echo $row['ID'] ?></td>
              <td><?php echo $row['IP'] ?></td>


              <td><?php echo $MOBILE_NO1; ?></td>
              <td><?php echo $row['PRODUCT NAME'] ?></td>
              <td><?php echo $row['SERIAL_NO'] ?></td>
              <td><?php echo $row['DATE_OF_ISSUE'] ?></td>



              <!--   <td><button class="btn btn-warning" data-toggle="modal" type="button" data-target="#update_modal<?php echo $row['id'] ?>"><span class="glyphicon glyphicon-edit"></span> Edit</button></td> -->

              <td><a href="admin_Dashboard_product_return.php?id=<?php echo $row['ID']; ?>&uid=<?php echo $row['PRODUCT NAME']; ?>&SERIAL=<?php echo $row['SERIAL_NO']; ?>"><span class="glyphicon glyphicon-retweet" style="font-size:40px; color:#1f39c1;"></span></a></td>
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
  function getptoduct(val) {
    $.ajax({
      type: "POST",
      url: "Dashbord_ajex_page.php",
      data: 'product=' + val,
      success: function(data) {
        $("#Serial_Number").html(data);
      }
    });
  }
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
          empCode: empCode
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
          empCode: empCode
        },
        success: function(data) {
          $('#ip-list').html(data);
        }
      })
    });
  });
</script>
<!-- end search table -->