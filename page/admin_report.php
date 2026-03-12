<?php
session_start();
require_once __DIR__ . '/../dbConnection/dbConnection.php';
require_once __DIR__ . '/../helpers/session_helper.php';
if (!check_if_user_logged_in()) {
  header('Location: ../index.php');
}
if(isset($_POST['submit_filter'])){
  $from=$_POST['from'];
  $to=$_POST['to'];
//echo  $from .  $to;
$sub_sql= " where `problem_solved_date` >= '$from' && `problem_solved_date` <= '$to' ";
}

$res=mysqli_query($con,"SELECT * FROM `amc_working` $sub_sql order by id desc");
//echo "SELECT * FROM `amc_working` $sub_sql order by id desc";
//SELECT * FROM `amc_working` WHERE `problem_solved_date`>='$SD' and `problem_solved_date`<='$ED'" ;

?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
  <title>stock management system</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!-- pdf link -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js">
</script>
<!-- end pdf link -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <!--  -->
   <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
   <script type="text/javascript" charset="utf-8" language="javascript" src="../js/jquery.dataTables.js"></script>
 <style>
  body {
    font: 400 15px Lato, sans-serif;
    line-height: 1.8;
    color: #818181;
  }
 .logo-small {
    color: #1e85f4;;
    font-size: 50px;
  }
  .logo {
    color: #1e85f4;;
    font-size: 200px;
  }
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  
}
</style>
 <!--  <script type="text/javascript">
        $(function () {
            $("#report").change(function () {
                if ($(this).val() == "R1") {
                   $("#REPORT1").hide();
                } else {
                    
                     $("#REPORT2").show();
                }
            });
        });
    </script> -->
    <script>
      $(document).ready(function(){
        $("#report_cell_wish").click(function(){
          $("#CELL_report").toggle();
        });
      });

       $(document).ready(function(){
        $("#report_Product_wish").click(function(){
          $("#PRODUCT_report").toggle();
        });
      });
         $(document).ready(function(){
        $("#AMC_REPORT").click(function(){
          $("#AMC_report").toggle();
        });
      });
// AMC REPORT
    </script>
</head>
<body >
	<div style="text-align: left;">
	<button class="btn btn-success btn-group-lg" onclick="history.back()" style="font-size: 30px" >Go Back</button>
	</div>

 <div class="recent-sales box" style="width: 99%; padding-left: 1%;">

<div id="services" class="container-fluid text-center" style="background-color: #ac9c9c21;">
	
      <h2 class="">In Stock</h2>
      <h4>Present In Stock</h4>
      <br>
          <div class="row slideanim ">
                  <div class="col-sm-2 card">
                    <span class="glyphicon glyphicon-off logo-small" ></span>
                    <h4>Total CPU </h4>
                          <?php
                            $query = "SELECT COUNT(*) FROM `cpu` WHERE `ewaste`=0 AND `Delivery_Date`=0 AND`select_item`='CPU';";
                         
                                      $result = mysqli_query($con, $query) or die(mysqli_error($con));
                                      while ($row = mysqli_fetch_array($result)) {

                                       ?><h3>In Stock</h3><h2>  <?php  echo "$row[0]";?></h2><?php

                              }
                          ?>
                  </div>
                  <div class="col-sm-2 card">
                    <span class="glyphicon glyphicon-off logo-small " ></span>
                    <h4>Total AIO</h4>
                          <?php
                            $query = "SELECT COUNT(*) FROM `cpu` WHERE `ewaste`=0 AND `Delivery_Date`=0 AND`select_item`='laptop';";
                         
                                      $result = mysqli_query($con, $query) or die(mysqli_error($con));
                                      while ($row = mysqli_fetch_array($result)) {

                                       ?><h3>In Stock</h3><h2>  <?php  echo "$row[0]";?></h2><?php

                              }
                          ?>
                  </div>
                  <div class="col-sm-1 card">
                    <span class="glyphicon glyphicon-off logo-small" ></span>
                    <h4>Total  Laptop</h4>
                          <?php
                            $query = "SELECT COUNT(*) FROM `cpu` WHERE `ewaste`=0 AND `Delivery_Date`=0 AND`select_item`='AIO';";
                         
                                      $result = mysqli_query($con, $query) or die(mysqli_error($con));
                                      while ($row = mysqli_fetch_array($result)) {

                                       ?><h3>In Stock</h3><h2>  <?php  echo "$row[0]";?></h2><?php

                              }
                          ?>
                  </div>

         
                  <div class="col-sm-1 card">
                    <span class="glyphicon glyphicon-off logo-small" ></span>
                    <h4>Total Printer</h4>
                          <?php
                            $query = "SELECT COUNT(*) FROM `printerscanner` WHERE `ewaste`=0 AND `Delivery_Date`=0 AND `Item`='Printer';";
                         
                                      $result = mysqli_query($con, $query) or die(mysqli_error($con));
                                      while ($row = mysqli_fetch_array($result)) {

                                       ?><h3>In Stock</h3><h2>  <?php  echo "$row[0]";?></h2><?php

                              }
                          ?>
                  </div>
                  <div class="col-sm-1 card">
                    <span class="glyphicon glyphicon-off logo-small" ></span>
                    <h4>Total Scanner</h4>
                          <?php
                            $query = "SELECT COUNT(*) FROM `printerscanner` WHERE `ewaste`=0 AND `Delivery_Date`=0 AND `Item`='Scanner';";
                         
                                      $result = mysqli_query($con, $query) or die(mysqli_error($con));
                                      while ($row = mysqli_fetch_array($result)) {

                                       ?><h3>In Stock</h3><h2>  <?php  echo "$row[0]";?></h2><?php

                              }
                          ?>
                  </div>
                   <div class="col-sm-1 card">
                    <span class="glyphicon glyphicon-off logo-small" ></span>
                    <h4>Total Monitor</h4>
                          <?php
                            $query = "SELECT COUNT(*) FROM `monitor` WHERE `ewaste`=0 AND `Delivery_Date`=0;";
                         
                                      $result = mysqli_query($con, $query) or die(mysqli_error($con));
                                      while ($row = mysqli_fetch_array($result)) {

                                       ?><h3>In Stock</h3><h2>  <?php  echo "$row[0]";?></h2><?php

                              }
                          ?>
                  </div>
                   <div class="col-sm-2 card">
                    <span class="glyphicon glyphicon-off logo-small" ></span>
                    <h4>Total UPS</h4>
                          <?php
                            $query = "SELECT COUNT(*) FROM `ups` WHERE `ewaste`=0 AND `Delivery_Date`=0;";
                         
                                      $result = mysqli_query($con, $query) or die(mysqli_error($con));
                                      while ($row = mysqli_fetch_array($result)) {

                                       ?><h3>In Stock</h3><h2>  <?php  echo "$row[0]";?></h2><?php

                              }
                          ?>
                  </div>
                   <div class="col-sm-2 card">
                    <span class="glyphicon glyphicon-off logo-small" ></span>
                    <h4>Total Ewaste</h4>
                          <?php
                            $query = "SELECT COUNT(*) FROM `byback` WHERE `date`=0 ;";
                         
                                      $result = mysqli_query($con, $query) or die(mysqli_error($con));
                                      while ($row = mysqli_fetch_array($result)) {

                                       ?><h3>In Stock</h3><h2>  <?php  echo "$row[0]";?></h2><?php

                              }
                          ?>
                  </div>


           </div>
</div>

<br>

<div id="services" class="container-fluid text-center" style="background-color: #8196a76e; ">
   <h2>REPORT</h2>
 <div class="row " style="padding-bottom: 4%">
            <div class="col-sm-4 card" style="background-color: #00f4ff8a">
             <button id="AMC_REPORT">AMC REPORT</button>  
            </div>
            <div class="col-md-4 card" style="background-color: #00ff4b8a">
                 <!-- <label for="validationDefault01" class="form-label">Select REPORT1</label> -->
                    <button id="report_cell_wish">Report Cell Wise</button>                
             </div>  
             <div class="col-md-4 card" style="background-color: #ff00978a">
                 <!-- <label for="validationDefault01" class="form-label">Select REPORT1</label> -->
                    <button id="report_Product_wish">Report Product Wise</button>                
             </div> 
            <!--  <div class="col-sm-3"></div> -->
    </div>
</div>
<br>
<!-- Container (REPORT Section) -->
<!-- <div id="services" class="container-fluid text-center" id="REPORT1" style="display: none" style="background-color: #ac9c9c21;"> -->
  <div id="CELL_report" class="container-fluid text-center" style="background-color: #ac9c9c21;display: none;">
  <h2>CELL Wise Report</h2>
  <h4>CELL report</h4>
  <br>
  

        <div class="col-sm-12 card">
              <div class="row">
                <div class="col-sm-4"></div>
                  <div class="col-sm-4" style="text-align: center;">
                     <label for="validationDefault01" class="form-label">type of CELL:</label>
                         <select name="CELL" id="CELL" class="form-control" required="required">
                                <option value="">Choose</option>
                                <?php
                                $ret = mysqli_query($con, "SELECT `CELL` FROM user GROUP BY `CELL`");

                                while ($row = mysqli_fetch_array($ret)) { ?>
                                    <option value="<?php echo $row['CELL']; ?>"><?php echo $row['CELL']; ?></option>
                                <?php } ?>

                            </select>
                  </div>
                   <div class="col-sm-4"></div>
                        <!-- downlord CSV -->
                             <button onclick="CELL_exportTbToCSVformat('CELL.csv')" style="color: white;background-color: blue;">Export to CSV</button>
                                 <div class="card" id="CELL_makeItem">
                   <!-- table -->
                    <div class="row">
                    <div class="col-sm-12" >
                      
                        <div class="table-responsive box" >
                           <br>
                           <br>
                           
                          <table cellpadding="0" cellspacing="0" border="0" class="table table-condensed" id="example">

                                      <thead>

                                        <tr>
                                          <th>NAME</th>
                                          <th>DESIGNATION</th>
                                          <th>CELL</th>
                                          <th>FLOOR_NO</th>
                                          <th>MOBILE_NO</th>
                                          <th>emp_id</th>
                                          <th>IP</th>
                                          <th>PRODUCT_NAME</th>
                                          <th>Serial_Number</th>
                                          <th>DATE_OF_ISSUE</th>
                                          
                                        </tr>
                                      </thead>  
                                       <tbody id="celldata">

                                        <!-- data grt 'admin_report_get_user' psge -->
                                       </tbody>  

                           </table>
                                


                         </div>




                    </div>

                   </div>
                            </div>
                            <!-- end downlord pdf -->

               </div>         
     </div>
</div>
<!-- report 2 -->
<br>
<div id="PRODUCT_report" class="container-fluid text-center" id="REPORT1"  style="background-color: #ac9c9c21;display: none;">
   <h2>Product Wise Report</h2>
  <h4>PRODUCT report</h4>
  <br>
     <div class="col-sm-12 card" >
           
              <div class="row">
                <div class="col-sm-3"></div>
                 <div class="col-sm-3">
                      <label for="validationDefault01" class="form-label">type of Item:</label>
                         <select  name="machine_select" id="machine_select" class="form-control" >
                          <option value="">Select</option>
                           <option value="CPU">CPU</option>
                           <option value="aio">AIO </option>
                           <option value="laptop">Laptop</option>
                           <option value="printerscanner">Printer</option>
                           <option value="monitor">Monitor</option>
                           <option value="ups">UPS</option>   
                           <option value="scanner">scanner</option>       
                         </select>
                 </div>
                 <div class="col-sm-3" id="demo">
                      <label for="validationDefault01" class="form-label">type of Stock or used:</label>
                                <select name="Stock_used" id="Stock_used" class="form-control">
                                      <option value="">Choose</option>                                     
                                </select> 
                 </div>
                      <!-- stock and used details -->
              </div>
             <div class="col-sm-3"></div>
           
          <br>
           <!-- downlord CSV -->
         <button onclick="ITEMexportTbToCSVformat('ITEM.csv')" style="color: white;background-color: blue;">Export to CSV</button>
           <div class="card" id="ITEMmakeItem">
             <div class="row">
                 <div class="col-sm-12" id="data">
                 
                 


                </div>
             </div>
           </div>
               
        </div>

</div>
<div id="AMC_report" class="container-fluid text-center"  style="background-color: #ac9c9c21;display: none;">
   <h2>AMC Report</h2>
  <h4>AMC Report</h4>

   <div class="col-sm-12 card">
       <!-- <form action="admin_report_get_AMCDATA .php" method="post">
              <div class="row">

                <div class="col-sm-4"></div>
                     <div class="col-sm-2" style="text-align: center;">
                       <label for="validationDefault01" class="form-label">STSRT DATE</label>
                       <br><input type="date"id="SD" name="SD">
                     </div>
                     <div class="col-sm-2" style="text-align: center;">
                       <label for="validationDefault01" class="form-label">END DATE</label>
                       <br><input type="date" id="ED" name="ED">
                     </div>
                   <div class="col-sm-4"></div>
              </div>  
              <div class="row">
                <br>

               <input type="submit" class="button" title="Log In" name="login" value="Login"></input>

              </div>  
         </form>  -->  
              <br></br>
              <form method="post">
                  <label for="from">From</label>
                  <input type="text" id="from" name="from" required value="<?php echo $fromDate?>">
                  <label for="to">to</label>
                  <input type="text" id="to" name="to" required value="<?php echo $toDate?>">
                  <input type="submit" name="submit_filter" value="Filter">
                </form>
                <br></br>
                
     </div>
      <!-- table -->
    <div class="col-sm-12 card">
                    <div class="row">
                    <div class="col-sm-12" >
                      
                        <div class="table-responsive box" >
                           <br>
                           <br>
                            <button onclick="DateFilterAMCexportTbToCSVformat('filterAMC.csv')" style="color: white;background-color: blue;">Export to CSV</button>
                            <br>
           <div class="card" id="DateFilterAMCmakeItem">
                           <?php if(mysqli_num_rows($res)>0){ ?>
                          <table cellpadding="0" cellspacing="0" border="0" class="table table-condensed" id="example">

                                      <thead>

                                        <tr>
                                          <th>id</th>
                                          <th>NAME</th>
                                          <th>DESIGNATION</th>
                                          <th>FLOOR_NO</th>
                                          <th>MOBILE_NO</th>
                                          <th>emp_id</th>
                                          <th>IP</th>
                                          <th>PRODUCT_NAME</th>
                                          <th>Serial_Number</th>
                                          <th>PROBLEM</th>
                                          <th>PROBLEM Date</th>
                                          <th>solved_date</th>
                                          
                                        </tr>
                                      </thead>

                                       <tbody style="text-align: left;">
                                           <?php while($row=mysqli_fetch_assoc($res)){ $counter = 0; ?>              
                                      <tr>
                                          <td><?php echo ++$$counter ?></td>
                                          <td><?php echo $row['name']?></td>
                                          <td><?php echo $row['designation']?></td>
                                          <td><?php echo $row['floor_no']?></td>
                                          <td><?php echo $row['mobile_no']?></td>
                                          <td><?php echo $row['emp_no']?></td>
                                          <td><?php echo $row['IP']?></td>
                                          <td><?php echo $row['product_name']?></td>
                                          <td><?php echo $row['SERIAL_NUMBER']?></td>
                                          <td><?php echo $row['PROBLEM']?></td>
                                          <td><?php echo $row['problem_date']?></td>
                                          <td><?php echo $row['problem_solved_date']?></td>
                                      </tr>
                                      <?php } ?>
                                       </tbody>
                          </table>
                                    <?php } else {
                                    echo "No data found";  
                                    }
                                    ?>
     </div>

                         </div>




                    </div>

                   </div>
                   <!-- end table -->
    </div>
</div>

<?php
include('admin_footer.php');
?>


</div>

</body>
</html>

<!-- get cell data in ajax -->
 <script type="text/javascript">

$(document).ready(function(){
  $('#CELL').change(function() {
    //alert('1');
     var CELL = $("#CELL option:selected").val();
     //alert(machine_id);

      $.ajax({
        type: 'POST',
        url: 'admin_report_get_user.php',
        data: {'CELL':CELL},
        success: function(data) {
            //alert(data);
           $("#celldata").html(data);
        }
      })

    });

});
</script>
<!-- amc report -->
<script type="text/javascript">

$(document).ready(function(){
  $('#SD').change(function(),
   $('#ED').change(function() {
    alert('1');
     var SD = $("#SD option:selected").val();
     var ED = $("#ED option:selected").val();
     // alert(ED,SD);

      $.ajax({
        type: 'POST',
        url: 'admin_report_get_AMCDATA .php',
        data: {'SD':SD,'ED':ED},
        success: function(data) {
            alert(data);
           $("#AMC_data").html(data);
        }
      })

    });

});
</script>


<!-- end amc report -->
<!-- get product in  ajax -->
<script type="text/javascript">

$(document).ready(function(){
  $('#machine_select').change(function() {
    //alert('1');
     var machine_id = $("#machine_select option:selected").val();
     //alert(machine_id);

      $.ajax({
        type: 'POST',
        url: 'admin_report_get_machine.php',
        data: {'machine_id':machine_id},
        success: function(data) {
            //alert(data);
            $("#Stock_used").html(data);
        }
      })

    });

});


$(document).ready(function(){
  $('#Stock_used').change(function() {
   //alert('1');
     var Stock_used = $("#Stock_used option:selected").val();
     var machine_id = $("#machine_select option:selected").val();
     //alert(Stock_used);
          $.ajax({
        type: 'POST',
        url: 'admin_report_get_machinedata.php',
        data: {'Stock_used':Stock_used ,'machine_id':machine_id},
        success: function(data) {
           // alert(data);
            $("#data").html(data);
        }
      })
     
    });

});
</script> 

<!-- downlord pdf  -->
<!-- <script>
        let button = document.getElementById("button");
        let makepdf = document.getElementById("makepdf");
 
        button.addEventListener("click", function () {
            html2pdf().from(makepdf).save();
        });
    </script> -->

  
<!-- filter to and from date -->
    <script>
  $( function() {
    var dateFormat = "yy/mm/dd",
      from = $( "#from" )
        .datepicker({
          defaultDate: "+1w",
          changeMonth: true,
          numberOfMonths: 1,
      dateFormat:"yy/mm/dd",
        })
        .on( "change", function() {
          to.datepicker( "option", "minDate", getDate( this ) );
        }),
      to = $( "#to" ).datepicker({
        defaultDate: "+1w",
        changeMonth: true,
        numberOfMonths: 1,
    dateFormat:"yy/mm/dd",
      })
      .on( "change", function() {
        from.datepicker( "option", "maxDate", getDate( this ) );
      });
 
    function getDate( element ) {
      var date;
      try {
        date = $.datepicker.parseDate( dateFormat, element.value );
      } catch( error ) {
        date = null;
      }
 
      return date;
    }
  } );
  </script>
    <!-- Download CSV file CELL WISH -->
<script  type="text/javascript">
    
      function downloadToCSV(csv, filename) {
        var csvFile;
        var downloadLink;
      
        // CSV file
        csvFile = new Blob([csv], {type: "text/csv"});
      
        // Download link
        downloadLink = document.createElement("a");
      
        // File name
        downloadLink.download = filename;
      
        // Create a link to the file
        downloadLink.href = window.URL.createObjectURL(csvFile);
      
        // Hide download link
        downloadLink.style.display = "none";
      
        // Add the link to DOM
        document.body.appendChild(downloadLink);
      
        // Click download link
        downloadLink.click();
      }
      
      function CELL_exportTbToCSVformat(filename) {
        var csv = [];
        var rows = document.querySelectorAll("#CELL_makeItem tr");
        
        for (var i = 0; i < rows.length; i++) {
          var row = [], cols = rows[i].querySelectorAll("td, th");
          
          for (var j = 0; j < cols.length; j++) 
            row.push(cols[j].innerText);
          
          csv.push(row.join(","));        
        }
      
        // Download CSV file
        downloadToCSV(csv.join("\n"), filename);
      }
    </script>
    
   


     <!-- Download CSV file ITEM USED OR NOT -->
<script  type="text/javascript">
    
      function downloadToCSV(csv, filename) {
        var csvFile;
        var downloadLink;
      
        // CSV file
        csvFile = new Blob([csv], {type: "text/csv"});
      
        // Download link
        downloadLink = document.createElement("a");
      
        // File name
        downloadLink.download = filename;
      
        // Create a link to the file
        downloadLink.href = window.URL.createObjectURL(csvFile);
      
        // Hide download link
        downloadLink.style.display = "none";
      
        // Add the link to DOM
        document.body.appendChild(downloadLink);
      
        // Click download link
        downloadLink.click();
      }
      
      function ITEMexportTbToCSVformat(filename) {
        var csv = [];
        var rows = document.querySelectorAll("#ITEMmakeItem tr");
        
        for (var i = 0; i < rows.length; i++) {
          var row = [], cols = rows[i].querySelectorAll("td, th");
          
          for (var j = 0; j < cols.length; j++) 
            row.push(cols[j].innerText);
          
          csv.push(row.join(","));        
        }
      
        // Download CSV file
        downloadToCSV(csv.join("\n"), filename);
      }
    </script>
    
     <!-- Download CSV file date wish filter AMC -->
<script  type="text/javascript">
    
      function downloadToCSV(csv, filename) {
        var csvFile;
        var downloadLink;
      
        // CSV file
        csvFile = new Blob([csv], {type: "text/csv"});
      
        // Download link
        downloadLink = document.createElement("a");
      
        // File name
        downloadLink.download = filename;
      
        // Create a link to the file
        downloadLink.href = window.URL.createObjectURL(csvFile);
      
        // Hide download link
        downloadLink.style.display = "none";
      
        // Add the link to DOM
        document.body.appendChild(downloadLink);
      
        // Click download link
        downloadLink.click();
      }
      
      function DateFilterAMCexportTbToCSVformat(filename) {
        var csv = [];
        var rows = document.querySelectorAll("#DateFilterAMCmakeItem tr");
        
        for (var i = 0; i < rows.length; i++) {
          var row = [], cols = rows[i].querySelectorAll("td, th");
          
          for (var j = 0; j < cols.length; j++) 
            row.push(cols[j].innerText);
          
          csv.push(row.join(","));        
        }
      
        // Download CSV file
        downloadToCSV(csv.join("\n"), filename);
      }
    </script>
    
    