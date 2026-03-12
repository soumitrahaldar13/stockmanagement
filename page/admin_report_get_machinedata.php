<?php
require_once __DIR__ . '/../dbConnection/dbConnection.php';

if(!empty($_POST["Stock_used"])) {

	$Stock_used = $_POST["Stock_used"];
	$machine_id = $_POST["machine_id"];
	//echo $Stock_used;
	//echo $machine_id;
    if ($Stock_used =='Stock') {
      //echo 1;
      // stock
      ?>
        
      <table cellpadding="0" cellspacing="0" border="0" class="table table-condensed" id="example">

                                    <thead>

                                      <tr>
                                        <th>Serial_Number</th>
                                        <th>Product</th>
                                        <th>BRAND_NAME:</th>

                                      </tr>
                                    </thead>
                <?php                
                   $query = mysqli_query($con, "SELECT * FROM `$machine_id` WHERE `Delivery_Date`=0 AND `ewaste`=0 ORDER BY `Serial_Number` ASC") or die(mysqli_error($con));
                                    $counter = 0;                       
                while ($row = mysqli_fetch_array($query)) {
    ?>
      
 
                                    <tbody >
                                      <tr>
                                      <th><?php echo $row['Serial_Number'] ?></th>
                                      <th><?php echo $machine_id; ?></th>
                                      <th><?php echo $row['BRAND_NAME'] ?></th>
                                    </tr>
                                    </tbody>
                                    <?php
                                                        }
                                    ?>
                                  </table>
<?php

    }else{
      //echo 2;
      // used
       ?>
        
      <table cellpadding="0" cellspacing="0" border="0" class="table table-condensed" id="example">

                                    <thead>

                                      <tr>
                                        <th>Sl.No.:</th>
                                         <th>NAME:</th>
                                          <th>DESIGNATION:</th>
                                          <th>CELL:</th>
                                          <th>FLOOE NO:</th>
                                          <th>MOBILE NO :</th>
                                          <th>EMP ID:</th>
                                          <th>IP</th>
                                          <th>PRODUCT NAME:</th>
                                          <th>SERIAL NUMBER:</th>

                                      </tr>
                                    </thead>
                <?php    
                 // echo "SELECT * FROM product_add  INNER JOIN ip ON product_add.IP = ip.ID JOIN user ON product_add.emp_code = user.emp_id WHERE product_add.PRODUCT_NAME='$machine_id'"  ;
                 // echo " SELECT * FROM `$machine_id` WHERE `Delivery_Date`!=0";die;              
                   $query = mysqli_query($con, "SELECT * FROM product_add  INNER JOIN ip ON product_add.IP = ip.ID JOIN user ON product_add.emp_code = user.emp_id WHERE product_add.PRODUCT_NAME='$machine_id'") or die(mysqli_error($con));
                                    $counter = 0;                       
                while ($row = mysqli_fetch_array($query)) {
    ?>
      

                                    <tbody>
                                      <tr style="text-align: left;">
                                    <td><?php echo ++$counter ?></td>
                                    <td><?php echo $row['NAME'] ?></td>
                                    <td><?php echo $row['DESIGNATION'] ?></td>
                                    <td><?php echo $row['CELL'] ?></td>
                                    <td><?php echo $row['FLOOR_NO'] ?></td>
                                    <td><?php echo $row['MOBILE_NO'] ?></td>
                                    <td><?php echo $row['emp_code'] ?></td>
                                    <td><?php echo $row['IP'] ?></td>
                                    <td><?php echo $row['PRODUCT_NAME'] ?></td>
                                    <td><?php echo $row['Serial_Number'] ?></td>
                                    </tr>
                                    </tbody>
                                    <?php
                                                        }
                                    ?>
                                  </table>
<?php
    }

          
}

?>
