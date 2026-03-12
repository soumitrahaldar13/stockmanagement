<?php
session_start();
require_once __DIR__ . '/../dbConnection/dbConnection.php';
$nam = $_SESSION["name"];
$query = mysqli_query($con, " SELECT * FROM `login` WHERE `NAME`='$nam'") or die(mysqli_error($con));
// echo 1;die;
while ($row = mysqli_fetch_array($query)) {
  $id = $row['ID'];
  $image = $row['image'];
  $name = $row['NAME'];
  
  //$_SESSION['name'] = $row['NAME'];
  
}



?>
<div class="search-box row" style="color: Green; text-align: right;">
          <a href="admin_IObox_New.php" style="color: red;"> <p>I/O Box Update </p></a>
</div>

 <div class="search-box row" style="color: red; text-align: right;">
          <a href="admin_IP_New.php" style="color: red;"> <p>IP Update </p></a>
</div> 
<!--  <i class='bx bx-message-rounded-dots'></i> -->
 <?php
 //echo "SELECT COUNT(*) FROM amc WHERE `Reminder_date` < 2024-10-20 AND `end_date`> 2024-10-20";
 $query = "SELECT COUNT(*) FROM amc WHERE `Reminder_date` < NOW() AND `end_date`> now()";
           
                        $result = mysqli_query($con, $query) or die(mysqli_error($con));
                        while ($row = mysqli_fetch_array($result)) {
                        	$count_date=$row[0];
                        	//echo $count_date;
                        	IF ( $count_date ==1){

                         ?>

<div class="search-box row" style="color: red; text-align: right;">
          <a href="admin_AMC.php" style="color: red;"> <p>AMC Expired </p><i class='bx bxs-bell-ring bx-flashing'  style="font-size: 33px;width: 15em;"></i></a>
</div>
<?php
									}
      }
            ?>

<div class="profile-details">
     <img src="../images/admin/<?php echo $image; ?>" alt="">
		  <span class="admin_name"><?php echo $name ?></span>
		 <a href="admin_PROFILE.php?id=<?php echo $id; ?> "><i class='bx bx-chevron-down'> </i></a>
  
</div>