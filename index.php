<!DOCTYPE html>
<html lang="en">
<head>
  <title>admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style type="text/css">

    body{
    
    color: #fff;
    background-image: url(images/header1.jpg);
    background-size: cover;
    background-position: center;
    -webkit-transition: .2s;
    transition: .2s;
    -webkit-transition-timing-function: linear;
    transition-timing-function: linear;
    z-index: 990;
    position: relative;
    height: 100%;
    min-height: 600px;
    text-align: center;
}
.overlay {
  position: absolute;
  left: 0;
  top: 0;
  height: 100%;
  width: 100%;
  background-image: -webkit-radial-gradient(48% 42%, 140% 110%, rgba(33, 37, 41, 0.5), rgba(33, 37, 41, 0.6), rgba(33, 37, 41, 0.7), rgba(33, 37, 41, 0.8), rgba(33, 37, 41, 0.93), #212529 55%, #212529 200%);
  background-image: radial-gradient(140% 110% at 48% 42%, rgba(33, 37, 41, 0.5), rgba(33, 37, 41, 0.6), rgba(33, 37, 41, 0.7), rgba(33, 37, 41, 0.8), rgba(33, 37, 41, 0.93), #212529 55%, #212529 200%);
}


.form_bg {
	 /* background-image: url("images/blog-2.jpg");*/
    background-color:#eee;
    color:#666;
    padding:20px;
    border-radius:10px;
    position: absolute;
    border:1px solid #fff;
    margin: auto;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    width: 320px;
    height: 280px;
}

.align-center {
    
    text-align:center;
}
.form_bg {
    background-image: url(img/3.jpg);
    /* background-color: #eee; */
    color: #666;
    padding: 20px;
    border-radius: 10px;
    position: absolute;
    border: 1px solid #fff;
    margin: auto;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    width: 320px;
    height: 280px;
}
</style>
<body >
    <div class="overlay"></div>
<div class="container">
    <div class="row">
        <div class="form_bg">
            <form action="page/admin_login_action.php" name="myForm" method="post" class="w3_form_post" onsubmit="return validateForm()" enctype="multipart/form-data">
                 <h2 class="text-center">admin page</h2>
                <br/>
                <div class="form-group">
                    <input type="name" class="form-control" id="name" name="name" placeholder="name">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password">
                
                    </div>
                    <br/>
                   <div class="align-center">
                <button type="submit" name="submit" value="Submit" class="btn btn-default" id="login">Login</button>
                    </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>