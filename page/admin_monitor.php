<?php
    session_start();
    require_once('dbConnection.php');
    include('admin_sidenav.php');

        if(isset($_POST['submit1'])!=""){
             // echo 1;die;
          $GEM_NO=$_POST['GEM_NO'];
          $GEM_Date=$_POST['GEM_Date'];
          $VENDOR_NAME = $_POST['VENDOR_NAME'];
          $BRAND_NAME=$_POST['BRAND_NAME'];
          $Serial_Number = $_POST['Serial_Number'];
          $Model_No = $_POST['Model_No'];
          $Display_Size=$_POST['Display_Size'];
          $Delevary_Date=$_POST['Delevary_Date'];
          $Defunct=$_POST['Defunct'];
          $text = acos(2);
                if($Delevary_Date > 0){
                    $Delevary_Date1 = $Delevary_Date;
                }else{
                 
                   $Delevary_Date1= $text;
                }

           $Problem=$_POST['Problem'];
                   if($Problem > 0){
                    $Problem1 = $Problem;
                    }else{
                 
                      $Problem1 = $text;
                    }

            $START_DATE=$_POST['START_DATE'];
            $END_DATE=$_POST['END_DATE'];

                    if($START_DATE > 0){
                    $START_DATE1 = $START_DATE;
                    $END_DATE1=$END_DATE;
                }else{
                 
                   $START_DATE1=  $text;
                   $END_DATE1= $text;
                }




//echo $Delevary_Date1;die;
 //echo "INSERT INTO `monitor`(`id`, `GEM_NO`, `GEM_Date`, `VENDOR_NAME`, `BRAND_NAME`, `Serial_Number`, `Model_No`, `Delevary_Date`, `Problem`, `START_DATE`, `END_DATE`, `Defunct`, `AMC`, `ewaste`, `Display_Size`) VALUES ('','$GEM_NO','$GEM_Date','$VENDOR_NAME','$BRAND_NAME','$Serial_Number','$Model_No','$Delevary_Date1','$Problem1','$START_DATE1','$END_DATE1','0','0','0','$Display_Size')";die;
  
$query=$con->query("INSERT INTO `monitor`(`id`, `GEM_NO`, `GEM_Date`, `VENDOR_NAME`, `BRAND_NAME`, `Serial_Number`, `Model_No`, `Delevary_Date`, `Problem`, `START_DATE`, `END_DATE`, `Defunct`, `AMC`, `ewaste`, `Display_Size`) VALUES ('','$GEM_NO','$GEM_Date','$VENDOR_NAME','$BRAND_NAME','$Serial_Number','$Model_No','$Delevary_Date1','$Problem1','$START_DATE1','$END_DATE1','0','0','0','$Display_Size')");
if($query){
echo "<script>alert('update Monitor Sucessfully');window.location.href='admin_monitor.php'; </script>";
// header("location:admin_image.php");

}
else{
die(mysqli_error($conn));
}
}
?>
 <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style type="text/css">
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  
}

td, th {
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
ol, ul {
    margin-top: 0;
    margin-bottom: 10px;
}
* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
user agent stylesheet
ul {
    display: block;
    list-style-type: disc;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    padding-inline-start: 40px;
}


</style>


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
    $(function () {
        $("input[name='chkPassPort']").click(function () {
            if ($("#chkYes").is(":checked")) {
                $("#yes").show();
            } else {
                $("#yes").hide();
            }
            if ($("#chkNo").is(":checked")) {
                    $("#no").show();
                } else {
                    $("#no").hide();
                }
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $("input[name='chkPassPort1']").click(function () {
            if ($("#chkYes1").is(":checked")) {
                $("#yes1").show();
            } else {
                $("#yes1").hide();
            }
            if ($("#chkNo1").is(":checked")) {
                    $("#no1").show();
                } else {
                    $("#no1").hide();
                }
        });
    });
</script>
                          
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



 <!-- top manu -->
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Monitor</span>
      </div>
      
      <?php
      include('admin_right_side_login.php');
      ?>
    </nav>
  <!-- end top manu -->

<div class="home-content">

      <div class="sales-boxes">
                <div class="recent-sales box" style="width: 99%;text-align: center;">
                        <div class="title">Monitor</div>
                        <br>
                       <!-- <div class="sales-details" > -->
                              <form enctype="multipart/form-data"  action="" id="wb_Form1" name="form" method="post">
                             <!-- <table cellpadding="0" cellspacing="0" border="0"> -->
                        <div class="row ">
                          <div class="col-md-2">
                              <label for="validationDefault01" class="form-label">GEM NO:</label>
                            <input type="text" class="form-control" name="GEM_NO" id="GEM_NO" placeholder="GEM NO" required="required">
                                 </div>
                                 <div class="col-md-2">
                              <label for="validationDefault01" class="form-label">GEM Date:</label>
                            <input type="date" class="form-control" name="GEM_Date" id="GEM_Date"   placeholder="GEM Date" required="required">
                                 </div>
                                 <div class="col-md-2">
                              <label for="validationDefault01" class="form-label">VENDOR NAME:</label>
                                         <select id="VENDOR_NAME" name="VENDOR_NAME" class="form-control" required="required">
                                       <option value="">Choose</option>
                                        <?php 
                                        $ret=mysqli_query($con,"SELECT * FROM `vendor`");
                                         
                                         while($row=mysqli_fetch_array($ret))
                                         {?> 
                                       <option value="<?php echo $row['NAME'];?>"><?php echo $row['NAME'];?></option>
                                          <?php }?>
                                        
                                   </select>
                                 </div>
            							       <div class="col-md-2">
                              <label for="validationDefault01" class="form-label">BRAND NAME:</label>
                            <input type="text" class="form-control" name="BRAND_NAME" id="BRAND_NAME"   placeholder="BRAND NAME" required="required">
                                 </div>
                                 <div class="col-md-2">
                              <label for="validationDefault01" class="form-label"> Serial Number :</label>
                            <input type="text" class="form-control" name="Serial_Number" id="Serial_Number"   placeholder="Serial Number" required="required">
                                 </div>
                                 <div class="col-md-2">
                              <label for="validationDefault01" class="form-label">Model No.:</label>
                            <input type="text" class="form-control" name="Model_No" id="Model_No"  placeholder="Model No" required="required">
                                 </div>
                        </div>
                          <br>
                        <div class="row">
                           <div class="col-md-2">
                              <label for="validationDefault01" class="form-label">Display Size:</label>
                          <input type="text" class="form-control" name="Display_Size" id="Display_Size"  placeholder="Display Size" required="required">
                           
                        </div>
                                 <!--  <div class="col-md-2">
                              <label for="validationDefault02" class="form-label">Delevary Date:</label>
                              <input type="date" class="form-control" id="Delevary_Date" name="Delevary_Date" value="">
                                   </div> -->

                                   <div class="col-md-2">
                                <label for="validationDefault02" class="form-label">Problem:</label>
                                 <label for="chkYes">
                              <input type="radio" id="chkYes" name="chkPassPort" checked/>
                              NO
                          </label>
                          <label for="chkNo">
                              <input type="radio" id="chkNo" name="chkPassPort" />
                              YES
                          </label>
                                 <div id="yes" >
                                  
                                 </div>
                                 <div id="no" style="display: none">
                                    <textarea class="form-control" id="Problem" name="Problem"  placeholder="Problem" ></textarea>
                                   
                                 </div>
                                    </div>
                                 
                                   <div class="col-md-2">
                              <label for="validationDefault02" class="form-label">Warranty:</label>
                               <label for="chkYes">
                              <input type="radio" id="chkYes1" name="chkPassPort1" checked/>
                              NO
                          </label>
                          <label for="chkNo">
                              <input type="radio" id="chkNo1" name="chkPassPort1" />
                              YES
                          </label>

                              
                                   </div>
                             
                                   <div  id="yes1">

                                   </div> 

                              <div id="no1" style="display: none">
                                     <div class="col-md-2">
                                    <label for="validationDefault02" class="form-label">START  DATE:</label>
                              <input type="date" class="form-control" id="START_DATE" name="START_DATE" >
                                    </div>
                                     <div class="col-md-2">
                               <label for="validationDefault02" class="form-label">END DATE:</label>
                              <input type="date" class="form-control" id="END_DATE" name="END_DATE" >

                                      </div>
                              </div>
                                   <!-- <div class="col-md-2">
                              <label for="validationDefault02" class="form-label">Delivery DATE:</label>
                              <input type="date" class="form-control" id="validationDefault02" value="Doe" required>
                                   </div> -->
                          </div>

                          
                          <br>
							            <div class="row ">
                              <strong>SUBMIT HERE</strong>
                              <input type="submit" class="btn btn-danger" value="SUBMIT" name="submit1">
                          </div>
                         </form> 

                             <!-- </table> -->
                
                     <!--    </div> -->
                 </div>
       </div>     






      <br>
      <div class="sales-boxes">
                <div class="recent-sales box" style="width: 99%;">
                        <div class="title">Display image</div>

                  <div class="table-responsive box">

                        
							    <form method="post" action="" >
                        <table cellpadding="0" cellspacing="0" border="0" class="table table-condensed" id="example">
                            
                            <thead>
						
                                <tr> 
                                   <th>ID</th>
                                   <th>GEM NO:</th>
                                   <th>GEM Date:</th>
                                   <th>VENDOR NAME:</th>
                                   <th>BRAND NAME::</th>
                                   <th>Serial Number:</th>
                                   <th>Model No.:</th>
                                   <th>Display Size</th>
                                   <th>Delevary date</th>
                                   <th>Problem:</th>
                                   <th>Warranty START DATE:</th>
                                   <th>Warranty END DATE:</th>
                                   <th>AMC:</th>
                                   <th>modify</th>
                                   <th>Send to Ewaste</th>
                                  
                                </tr>
                            </thead>
                            <tbody>
                            							<?php 
                            							$query=mysqli_query($con," SELECT * FROM `monitor` WHERE `ewaste`='0' ORDER BY `id` DESC")or die(mysqli_error($con));
                            							// echo 1;die;
                            							while($row=mysqli_fetch_array($query)){
                            							$id=$row['id'];
                            							$BRAND_NAME=$row['BRAND_NAME'];
                            							$date=$row['date'];
                            							?>
                                                          
										            <tr>
										
                    
                                         <td><?php echo $row['id'] ?></td>
                                         <td><?php echo $row['GEM_NO'] ?></td>
                                         <td><?php echo $row['GEM_Date'] ?></td>
                                         <td><?php echo $row['VENDOR_NAME'] ?></td>
                                         <td><?php echo $row['BRAND_NAME'] ?></td>
                                         <td><?php echo $row['Serial_Number'] ?></td>
                                         <td><?php echo $row['Model_No'] ?></td>
                                         <td><?php echo $row['Display_Size'] ?></td>
                                          <td><?php echo $row['Delevary_Date'] ?></td>
                                         <td><?php echo $row['Problem'] ?></td>
                                         <td><?php echo $row['START_DATE'] ?></td>
                                         <td><?php echo $row['END_DATE'] ?></td>
									                   
                                        
  <td><a href="admin_monitor_AMC.php?id=<?php echo $row['id'];?>&AMC=<?php echo $row['AMC'];?>" ><?php if($row['AMC']==0){?><span class="glyphicon glyphicon-unchecked" style="font-size:20px; color:red;">N</span> <?php }else{?><span class="glyphicon glyphicon-unchecked" style="font-size:20px; color:GREEN;">Y</span><?php } ?></span></a></td>

                                         <td><button class="btn btn-warning" data-toggle="modal" type="button" data-target="#update_modal<?php echo $row['id']?>"><span class="glyphicon glyphicon-edit"></span> Edit</button></td>  

                                         <td <?php if($row['Defunct']==0  ){?>hidden <?php } else{ }?>><a href="admin_monitor_ewaste.php?id=<?php echo $row['id'];?>" ><span class="glyphicon glyphicon-send" style="font-size:20px; color:blue;"></span></a></td>
                                          <?php 
include 'admin_monitor_modify.php';
                              } 
                                 
                                ?>
                                </tr>
                         
						         
                            </tbody>
                        </table>
						
                              <!-- admin_PROJECT_modify - Copy.php -->
                               
								
                 </div>
							
							

						  
                </div>
                 
                </div>
        </div>
       
</div>
  
 


  <?php
    include('admin_footer.php');
    ?>


                          