<?php
session_start();
require_once __DIR__ . '/../dbConnection/dbConnection.php';
include('admin_sidenav.php');


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
            <span class="dashboard">I/O BOX</span>
        </div>

        <?php
        include('admin_right_side_login.php');
        ?>
    </nav>
    <!-- end top manu -->

    <div class="home-content">

        <br>
        <div class="sales-boxes">
            <div class="recent-sales box" style="width: 99%;">
                <div class="title">STOCK ALL IO BOX</div>

                <div class="table-responsive box">


                    <!-- <form method="post" action=""> -->
                        <table cellpadding="0" cellspacing="0" border="0" class="table table-condensed" id="example">

                            <thead>

                                <tr>
                                    <th>ID</th>
                                    <th>IP ID:</th>
                                    <th>ACTIVE:</th>
                                    <th>UPDATE IP</th>
                                  

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = mysqli_query($con, " SELECT * FROM `i/o_box` ORDER BY `ID` DESC") or die(mysqli_error($con));
                                // echo 1;die;
                                $counter = 0;
                                while ($row = mysqli_fetch_array($query)) {
                                    $id = $row['ID'];
                                    $BRAND_NAME = $row['BRAND_NAME'];
                                    $date = $row['date'];
                                ?>

                                    <tr>


                                        <td><?php echo ++$counter ?></td>
                                        <td><?php echo $row['I/O_box'] ?></td>
                                        <td><?php echo $row['Active'] ?></td>
                                        <td><button class="btn btn-warning" data-toggle="modal" type="button" data-target="#update_modal<?php echo $row['ID'] ?>" ><span class="glyphicon glyphicon-edit"></span> Edit</button> </td>

                                      
                                    <?php
                                    include 'admin_IObox_modify.php';
                                }

                                    ?>
                                    </tr>


                            </tbody>
                        </table>

                        <!-- admin_PROJECT_modify - Copy.php -->

                    </form>
                </div>




            </div>

        </div>
    </div>

    </div>




    <?php
    include('admin_footer.php');
    ?>
</section>

