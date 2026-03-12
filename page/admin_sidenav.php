<!DOCTYPE html>
<?php
session_start();

require_once __DIR__ . '/../dbConnection/dbConnection.php';
// following code for a refreshing page 
$page = $_SERVER['PHP_SELF'];
$sec = "260";
// following code for a refreshing page 
?>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title>stock management system</title>

  <link rel="stylesheet" href="../css/style.css">
  <link href="../images/logo/pngaaa.com-5968111.png" rel="icon">
  <link href="../images/logo/5968111-middle.png" rel="apple-touch-icon">
  <!-- Boxicons CDN Link -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--following code for a refreshing page  -->
   <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
   <!-- following code for a refreshing page -->
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
    margin-bottom: 0;
    margin-left: 0;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
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
/*add*/
.sidebar .submenu {
  display: none;
  background: #3d566e;
  padding-left: 15px;
}

/* Submenu list items */
.sidebar .submenu li {
  padding: 10px 20px;
  color: #fff;
  cursor: pointer;
}

.sidebar .submenu li:hover {
  background: #4b6584;
}

/* Arrow style */
.arrow {
  float: right;
  transition: 0.3s;
}
.rotate {
  transform: rotate(90deg);
}




</style>

<body>
  <!-- side bar  -->
  <div class="sidebar">
    <div class="logo-details">
      <span class="logo_name" style="width: 10px;">Stock Management System</span>

    </div>
  
    <ul class="nav-links">
    	<h4 style="text-align: center;color: #ffff"><?php echo $_SESSION['role']._.$_SESSION['Cell']; ?></h4>
      <?php
      $role = $_SESSION['role'];
       // $query = mysqli_query($con, "SELECT * FROM `product` WHERE $role = 1 ORDER BY `id` ASC") or die(mysqli_error($con));
      $query = mysqli_query($con, "SELECT * FROM `product` WHERE `$role` = 1 && `ACTIVE`= 1 ORDER BY `id` ASC") or die(mysqli_error($con));
      while ($row = mysqli_fetch_array($query)) {
      ?>

        <li>
          <a href="<?php echo $row['url'] ?>" class="active">
            <i class='bx bx-donate-heart'></i>
            <span class="links_name"><?php echo $row['USED _NAME'] ?></span>
          </a>
        </li>
      <?php
      }
 		if($role == 'SuperAdmin'){
      ?>

       <li class="has-sub" style="text-align: center;color: #ffff">
       		<i class='bx bx-donate-heart'></i>
		      PRODUCT <span class="arrow">▶</span>
		      <ul class="submenu">
		      	<?php
		      	 $query = mysqli_query($con, "SELECT * FROM `product` WHERE `$role` = 1 && `ACTIVE`= 2 ORDER BY `id` ASC") or die(mysqli_error($con));
		      while ($row = mysqli_fetch_array($query)) {
		      ?>
		        <li>
		        	<a href="<?php echo $row['url'] ?>">
		        		<i class='bx bx-donate-heart'></i>
		        		<span class="links_name"><?php echo $row['USED _NAME'] ?></span>
		        	</a>
		        </li>
		      <?php
			  }
			  ?>
		      </ul>
       </li>
       <?php
       }
       ?>
      <li class="log_out">
        <a href="../authentication/logout.php">
          <i class='bx bx-log-out'></i>
          <span class="links_name">Log out</span>
        </a>
      </li>
    </ul>
  </div>
  <!-- end side bars -->



 <script>
$(document).ready(function(){
  $(".has-sub").click(function(){
    // toggle submenu under clicked item
    $(this).children(".submenu").slideToggle();
    // rotate arrow
    $(this).find(".arrow").toggleClass("rotate");
  });
});
</script>