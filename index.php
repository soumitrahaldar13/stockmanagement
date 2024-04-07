<?php
include_once __DIR__ . '/authentication/admin_login_action.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/page_styles/index.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="form_bg">
                <form action="authentication/admin_login_action.php" name="myForm" method="post" class="w3_form_post" onsubmit="return validateForm()" enctype="multipart/form-data">
                    <h2 class="text-center">Admin Page</h2>
                    <br />
                    <div class="form-group">
                        <input type="name" class="form-control" id="name" name="name" placeholder="name">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password">

                    </div>
                    <br />
                    <div class="align-center">
                        <button type="submit" name="submit" value="Submit" class="btn btn-default" id="login">Login</button>
                    </div>
                    <?php
                    if (isset($_SESSION['error_msg'])) {
                        echo '<p class="error">' . $_SESSION["error_msg"] . '</p>';
                        unset($_SESSION['error_msg']);
                    }
                    ?>
                </form>
            </div>
        </div>
    </div>
</body>

</html>