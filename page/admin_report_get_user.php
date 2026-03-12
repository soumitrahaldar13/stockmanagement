<?php
require_once __DIR__ . '/../dbConnection/dbConnection.php';
// require_once __DIR__ . '/../../helpers/query_helpers.php';

if(!empty($_POST["CELL"])) 
{

	$CELL = $_POST["CELL"];
	//echo $CELL;
 // echo "SELECT * FROM `user` WHERE `CELL`='$CELL' DESC";
 ?>

  
                                     
              <?php                
              $query = mysqli_query($con, " SELECT * FROM `user` INNER JOIN product_add ON product_add.emp_code = user.emp_id LEFT JOIN ip ON ip.ID = product_add.IP WHERE `CELL`='$CELL'order by NAME ASC") or die(mysqli_error($con));
              // $query = mysqli_query($con, " SELECT * FROM `user` INNER JOIN product_add ON product_add.emp_code = user.emp_id LEFT JOIN ip ON ip.ID = product_add.IP WHERE `CELL`='$CELL'order by NAME ASC") or die(mysqli_error($con));
             $counter = 0;                       
             while ($row = mysqli_fetch_array($query)) {
              ?>
      
  
                                    
                                      <tr>
                                      <th><?php echo $row['NAME'] ?></th>
                                      <th><?php echo $row['DESIGNATION'] ?></th>
                                      <th><?php echo $row['CELL'] ?></th>
                                      <th><?php echo $row['FLOOR_NO'] ?></th>
                                      <th><?php echo $row['MOBILE_NO'] ?></th>
                                      <th><?php echo $row['emp_id'] ?></th>
                                      <th><?php echo $row['IP'] ?></th>
                                      <th><?php echo $row['PRODUCT_NAME'] ?></th>
                                      <th><?php echo $row['Serial_Number'] ?></th>
                                      <th><?php echo $row['DATE_OF_ISSUE'] ?></th>
                                     
                                    </tr>
                                    
                                    <?php
                                                        }
                                    

                            

 }

                                         
                                         
?>
