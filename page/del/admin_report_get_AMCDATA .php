<?php
require_once __DIR__ . '/../dbConnection/dbConnection.php';
// require_once __DIR__ . '/../../helpers/query_helpers.php';

  if (isset($_POST['login']))
//if(!empty($_POST["ED,SD"])) 
{

        
          $SD = $_POST["SD"];
          $ED = $_POST["ED"];
            //echo $SD ,$ED;die;
	
              echo " SELECT * FROM `amc_working` WHERE `problem_solved_date`>='$SD' and `problem_solved_date`<='$ED'" ;             
              $query_amc = mysqli_query($con, " SELECT * FROM `amc_working` WHERE `problem_solved_date`>='$SD' and `problem_solved_date`<='$ED'") or die(mysqli_error($con));
             $counter = 0;   
             echo $counter;die;                    
             while ($row = mysqli_fetch_array($query_amc)) {
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

	