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
<style type="text/css">
	.text{
		  
		  /*z-index: -3;*/
		  color: #fff;;
		  font-size: 61px;
		  font-weight: bold;
		  text-align: center;
}

</style>


<!-- top manu -->
<section class="home-section" style="height: 100%;">
  <nav>
    <div class="sidebar-button">
      <i class='bx bx-menu sidebarBtn'></i>
      <span class="dashboard">INDEX</span>
    </div>

    <?php
    include('admin_right_side_login.php');
    ?>
  </nav>
  <!-- end top manu -->

  <div class="home-content">

    <div class="sales-boxes">
		      <div  style=" width: 99%; height: 100%; text-align: center; background-image: url('../images/SYSTEM.jpeg'); filter: blur(1px); background-position: center; z-index: 99;
  background-size: cover;
  position: relative; background-repeat: no-repeat;
  background-size: auto;"> 
		       <!--  <div class="title">call log</div> -->
				         <div class="text" >
						     <label> Welcome </label>
						    <br>
						    <br>
						    <label>To</label>
						 	 <br>
						 	 <br>
						    <label> Stock Management System  </label>
						     <br>
						 	 <br>
						      
				      	   </div>
   				</div>
  </div>
 </section>
 



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