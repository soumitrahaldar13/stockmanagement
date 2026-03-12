<?php
session_start();
require_once __DIR__ . '/../dbConnection/dbConnection.php';
include('admin_sidenav.php');
$id = $_GET['id'];
//echo $id;die;
if (isset($_POST['submit'])) {
    $confirmpassword = $_POST['confirmpassword'];
    $NAME = $_POST['NAME'];
    $password = $_POST['password'];

    if ($password == $confirmpassword) {
        
        // Check if an image was uploaded
	             if (!isset($_FILES['image']) || $_FILES['image']['error'] == UPLOAD_ERR_NO_FILE) {
	             			//echo "UPDATE `login` SET `NAME`='$NAME', `password`='$password' WHERE `ID`='$id'"; die;
	                            $query = $con->query("UPDATE `login` SET `NAME`='$NAME', `password`='$password' WHERE `ID`='$id'");

         						   if ($query) {
              				  header("Location: admin_Dashboard.php");
           						 } else {
             				   echo "Database update failed.";
           						 }
	              }

               $Image = $_FILES['image']['name'];

            if (empty($Image)) {
                  echo "Image is empty.";
             }

        // Directory to upload the image
        $imageDir = '../images/admin/';
        $uploadfile = $imageDir . basename($Image);
        
        // Check file extension
        $extensions = pathinfo($uploadfile, PATHINFO_EXTENSION);

        // OPTIONAL: You can add allowed file type validation
        $allowed = ['jpg', 'jpeg', 'png', 'gif'];
        if (!in_array(strtolower($extensions), $allowed)) {
            echo "Invalid image format."; 
        }

        // Upload file
        if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
            // Hash password
            //$hashed_password = password_hash($password, PASSWORD_BCRYPT);

            // Assuming $id and $con are already defined
             // echo "UPDATE `login` SET `NAME`='$NAME', `password`='$password', `image`='$Image' WHERE `ID`='$id'"; die;
            
            $query = $con->query("UPDATE `login` SET `NAME`='$NAME', `password`='$password', `image`='$Image' WHERE `ID`='$id'");

            if ($query) {
                header("Location: admin_Dashboard.php");
            } else {
                echo "Database update failed.";
            }

        } else {
            echo "Upload failed.";
        }

    } else {
        echo "<script>alert('Password and confirm password do not match'); window.location.href='admin_PROFILE.php';</script>";
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
      <span class="dashboard">PROFILE</span>
    </div>

    <?php
    include('admin_right_side_login.php');
    ?>
  </nav>
  <!-- end top manu -->
          
  <div class="home-content">
     <div class="sales-boxes">
        <div class="recent-sales box" style="width: 99%;text-align: center;">
        <a href="../authentication/logout.php"><div class="title">PROFILE LOG OUT </div></a>

      </div>
     </div>

    <div class="sales-boxes" style="padding: 5px;">
      <div class="recent-sales box" style="width: 99%;text-align: center;">
        <div class="title">PROFILE UPDATE </div>
        <br>
        <!-- <div class="sales-details" > -->
          
             <?php
                $query = mysqli_query($con, "SELECT * FROM `login` WHERE `ID`='".$id."'") or die(mysqli_error($con));
                // echo 1;die;
                $counter = 0;
                while ($row = mysqli_fetch_array($query)) {
                  $id = $row['id'];
                  $NAME = $row['NAME'];
                   $password = $row['password'];

                  //$password = '12345';

                 // $hashed_password = password_hash($password, PASSWORD_BCRYPT);

                 // echo $hashed_password;die;
                  $image = $row['image'];
                }
                ?>
        <form enctype="multipart/form-data" action="" id="wb_Form1" name="form" method="post">
          <!-- <table cellpadding="0" cellspacing="0" border="0"> -->
            
              <div class="row ">
                <div class="col-md-2">
                  <label for="validationDefault01" class="form-label">NAME: </label>
                  <input type="text" class="form-control" name="NAME" id="NAME" placeholder="NAME"  required="required" value="<?php echo $NAME;?>" >
                  <div id="Serial_Number_check"></div>
                </div>
                <div class="col-md-2">
                  <label for="validationDefault01" class="form-label">Email:</label>
                  <input type="text" class="form-control" name="password" id="password" required="required" value="" >
                </div>
                 <div class="col-md-2">
                  <label for="validationDefault01" class="form-label">confirm Email:</label>
                  <input type="text" class="form-control" name="confirmpassword" id="confirmpassword" required="required" value="" >
                </div>
                <div class="col-md-2">
                     <label for="validationDefault01" class="form-label">IMAGE:</label>
                   <input type='file' id="image" name="image" value=""><br><br> 
                 </div>
                  <div class="col-md-2">
                     
                    <img src="../images/admin/<?php echo $image; ?>"  width="100" height="132">
                 </div>
          </div>
<BR></BR>
          <div class="row ">
            <strong>SUBMIT HERE</strong>
            <input type="submit" class="btn btn-danger" value="SUBMIT" name="submit">
          </div>
        </form>

        <!-- </table> -->

        <!--    </div> -->
      </div>
    </div>






    <br>

<?php  
$role = $_SESSION['role'];

if ($role == "SuperAdmin") {
?>

<div class="sales-boxes">
  <div class="recent-sales box" style="width: 100%;">
    <div class="title" style="text-align: center;">ID Creation</div>
    <div class="table-responsive box">

      <form action="admin_PROFILE_ID_creation.php" 
            name="myForm" 
            method="post" 
            class="w3_form_post" 
            onsubmit="return validateForm()" 
            enctype="multipart/form-data">

        <div class="row">
          <!-- Name -->
          <div class="col-md-2 mb-2">
            <label for="NAME" class="form-label">Name:</label>
            <input type="text" class="form-control" name="NAME" id="NAME" placeholder="Enter Name" required>
          </div>

          <!-- Email -->
          <div class="col-md-3 mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email" required>
          </div>

          <!-- Password -->
          <div class="col-md-3 mb-3">
            <label for="password" class="form-label">Password:</label>
            <input type="password" class="form-control" name="password" id="password" required>
          </div>

          <!-- Role -->
          <div class="col-md-2 mb-2">
            <label for="role" class="form-label">Role:</label>
            <select name="role" id="role" class="form-control" required>
              <option value="">Select Role</option>
              <option value="SuperAdmin">SuperAdmin</option>
              <option value="Admin">Admin</option>
              <option value="AMC">AMC</option>
            </select>
          </div>
        </div>
          <div class="row ">
          <!-- Submit -->
          <div class="col-md-3 mb-3">
            <label class="form-label">&nbsp;</label>
            <input type="submit" class="btn btn-danger form-control" value="SUBMIT" name="submit_id_creation">
          </div>
         </div>
       

      </form>

    </div>
  </div>
</div>

<?php 
} else {
   echo "<p style='color:red;text-align:center;'>Access Denied</p>";
}
?>
  </div>

  
</section>



  <?php
  include('admin_footer.php');
  ?>


<script type="text/javascript">

$(document).ready(function(){
    $('#NAME').keyup(function() {
      const NAME = $('#NAME').val();
      //alert(NAME);
      $.ajax({
        type: 'POST',
        url: 'admin_PROFILE_name_check.php',
        data: {'NAME':NAME},
        success: function(data) {
            //alert(data);
          $('#Serial_Number_check').html(data);
        }
      })
    });

});
</script>
<script type="text/javascript">

 imgInp.onchange = evt => {
  const [file] = imgInp.files
  if (file) {
    blah.src = URL.createObjectURL(file)
  }
}


</script>