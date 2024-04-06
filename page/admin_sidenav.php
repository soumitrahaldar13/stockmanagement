<!DOCTYPE html>
<?php
session_start();

require_once __DIR__ . '/../dbConnection/dbConnection.php';
?>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title>stock management system</title>
  <link rel="stylesheet" href="../css/style.css">
  <!-- Boxicons CDN Link -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
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

<body>
  <!-- side bar  -->
  <div class="sidebar">
    <div class="logo-details">
      <!-- <i class='bx bxl-c-plus-plus'></i> -->
      <i><img src="../images/logo/pngaaa.com-5968111.png" style="width: 70px;"></i>
      <span class="logo_name" style="width: 10px;">Stock Management System</span>

    </div>

    <ul class="nav-links">
      <li>
        <a href="admin_Dashboard.php" class="active">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
      </li>
      <!--  <li>
                          <a href="admin_Image.php" class="active">
                            <i class='bx bx-image-alt' ></i>
                            <span class="links_name">MONITOR</span>
                          </a>
                        </li>
                        
                        <li>
                          <a href="admin_PROJECT.php" class="active">
                            <i class='bx bx-grid-alt' ></i>
                            <span class="links_name">DESKTOP</span>
                          </a>
                        </li>
                        <li>
                          <a href="admin_donet.php" class="active">
                            <i class='bx bx-donate-heart' ></i>
                            <span class="links_name">LAPTOP</span>
                          </a>
                        </li>
                        <li>
                          <a href="admin_contact_us.php" class="active">
                            <i class='bx bx-donate-heart' ></i>
                            <span class="links_name">SCANNER</span>
                          </a>
                        </li> 
                         <li>
                          <a href="admin_contact_us.php" class="active">
                            <i class='bx bx-donate-heart' ></i>
                            <span class="links_name">ALL in ONE</span>
                          </a>
                        </li> -->
      <?php
      $query = mysqli_query($con, " SELECT * FROM `product` ORDER BY `id` DESC") or die(mysqli_error($con));
      // echo 1;die;
      while ($row = mysqli_fetch_array($query)) {
      ?>

        <li>
          <a href="<?php echo $row['url'] ?>" class="active">
            <i class='bx bx-donate-heart'></i>
            <span class="links_name"><?php echo $row['NAME'] ?></span>
          </a>
        </li>
      <?php
      }
      ?>
      <li>
        <a href="admin_USER.php" class="active">
          <i class='bx bx-image-alt'></i>
          <span class="links_name">USER</span>
        </a>
      </li>

      <li>
        <a href="admin_VENDOR.php" class="active">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">VENDOR</span>
        </a>
      </li>
      <li>
        <a href="admin_AMC.php" class="active">
          <i class='bx bx-donate-heart'></i>
          <span class="links_name">AMC</span>
        </a>
      </li>


      <li class="log_out">
        <a href="authentication/logout.php">
          <i class='bx bx-log-out'></i>
          <span class="links_name">Log out</span>
        </a>
      </li>
    </ul>
  </div>
  <!-- end side bars -->