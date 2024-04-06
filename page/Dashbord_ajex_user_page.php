
<?php
require_once("dbconnection.php");
//echo '1';
if(!empty($_POST["user"])) 
{
	//echo '2';SELECT * FROM `ups` WHERE `ewaste`='0'
$user=$_POST["user"];
//echo "SELECT * FROM product_add WHERE `USER_MOBILE`=$user";die;

                               $query1=mysqli_query($con," SELECT * FROM `user` WHERE `MOBILE_NO`=$user")or die(mysqli_error($con));
                                while($row=mysqli_fetch_array($query1))
                                {    $username=$row["NAME"];   }

$query=mysqli_query($con," SELECT * FROM product_add WHERE `USER_MOBILE`=$user")or die(mysqli_error($con));
?>
<?php
while($row=mysqli_fetch_array($query))
{
?>
          <div class="title">USER USED PRODUCT's:</div>
            <div class="col-md-6">
                <div class="col-md-4">
                              <label for="validationDefault01" class="form-label">USER IP</label>
                               <input type="text" id="USER_IP" name="USER_IP" class="form-control" required="required" onkeyup="myFunction()"  value="<?php echo $row["IP"]?>"/> 
                              
                    </div>
                <div class="col-md-4">
                              <label for="validationDefault01" class="form-label">USER</label>
                               <!-- <input type="text" id="SELECT_USER" name="SELECT_USER" class="form-control" required="required" onkeyup="myfunction()" value=""/>  -->
                              
                               <input type="text" id="USER" name="USER" class="form-control" placeholder="ABCD123A" value="<?php echo$username ?>">
                              
                    </div>
                     <div class="col-md-4">
                              <label for="validationDefault01" class="form-label">USER MOBILE NO.</label>
                               <input type="text" id="USER_mob" name="USER_mob" class="form-control" required="required"  value="<?php echo $row["USER_MOBILE"]?>"/> 
                              
                    </div>
            </div>
            <div class="col-md-6">
                  <div class="row">
                     <div class="col-md-6">
                              <label for="validationDefault01" class="form-label">PRODUCT NAME</label>
                               <input type="text" id="SELECT_USER" name="SELECT_USER" class="form-control" required="required"  value="<?php echo $row["PRODUCT NAME"]?>"/> 
                                
                    </div> 
                    <div class="col-md-6">
                              <label for="validationDefault01" class="form-label">Serial Number</label>
                               <input type="text" id="SELECT_USER" name="SELECT_USER" class="form-control" required="required"  value="<?php echo $row["SERIAL_NO"]?>"/> 
                              
                    </div> 
                  </div>
                 <!--  <div class="row">
                     <div class="col-md-6">
                              <label for="validationDefault01" class="form-label">PRODUCT NAME</label>
                               <input type="text" id="SELECT_USER" name="SELECT_USER" class="form-control" required="required"  value=""/> 
                              
                    </div> 
                    <div class="col-md-6">
                              <label for="validationDefault01" class="form-label">Serial Number</label>
                               <input type="text" id="SELECT_USER" name="SELECT_USER" class="form-control" required="required"  value=""/> 
                              
                    </div> 
                  </div> -->
            </div>



           </div>
    
	  
<?php
}
}
?>