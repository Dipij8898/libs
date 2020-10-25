 <?php
include "connection.php";
include "navbar.php";
?>
<!DOCTYPE html>
<html> 
<head>
<title>change password</title>
<style type="text/css">
body{

height: 650px;
background-color: red;
background-image: url(img/bgf img.jpg);
background-repeat: no-repeat;
} 
.wrapper
{
    width: 400px;
    height: 400px;
    margin: 100px;
    background-color: black;
    opacity: .8;
    color: white;
    padding: 27px 15px;
  
}
.form-control
{
    width: 300px;
    
}
</style>

</head>
<body>
    <div class="wrapper">
    <div style="text-align: centre;">
    <head>
    <meta charset=utf-8>
    <meta name=viewport content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <title>Libs - Change your password</title>
    </head>
</div>
 <div style="padding-left: 50px">
     <form action="" method="post">
         <input type="text" name="name" class="form-control" placeholder="name" required=""><br>
         <input type="text" name="email" class="form-control" placehoder="email" required=""><br>
         <input type="text" name="password" class="form-control" placeholder="new password" required=""><br>
    <button class="btn btn-default">update</button>
    </form>
    </div>
    </div>
    </body></html>