<?php
include "connection.php";
include "navbar.php";
?>
<!DOCTYPE html>
<html>
<head>
<title>profile</title>
<style type="text/css">
.wrapper
{
    width: 300px;
    margin: 0 auto;
    color: white;
} 
</style>
</head>
<body style= "backround-color: #004528; ">
<div class="container"></div>
<form action="" method="post">
<button class="btn btn-default" style="float: right;" name="submit1">Edit</button>
</form>
<div class="wrapper">
<?php

$q=mysqli_query($db,"SELECT * FROM a_register where name='$_SESSION[login_user]';");
?>
<h2 style="text-align:centre;"> my profile </h2>
<?php
$row=mysqli_fetch_assoc($q);
echo"<div style='text-align:center'>
<img class='img-circle profile-img' height=110 width=120 src='images/".$_SESSION[pic]."'></div>";

?>
<div style="text-align:center;"><b>welcome,</b>
<h4>
<?php
echo $_SESSION['login_user'];
?>
</h4>
</div>   
<?php
echo "<b>";
echo "<table class='table table-bordered'>";
echo "<tr>";
    echo "<td>";
      echo "<b> name: </b>";
    echo "</td>";

    echo "<td>";
      echo $row['name'];
    echo "</td>";
echo"</tr>";

echo"<tr>";
     echo "<td>";
     echo "<b> mobile no: </b>";
     echo "</td>";

     echo "<td>";
     echo $row['mobile'];
     echo "</td>";
echo"</tr>";

echo"<tr>";
    echo "<td>";
    echo "<b> email id: </b>";
    echo "</td>";

    echo "<td>";
    echo $row['email'];
    echo "</td>";
echo"</tr>";

echo"<tr>";
    echo "<td>";
    echo "<b> password: </b>";
    echo "</td>";

    echo "<td>";
    echo $row['password'];
    echo "</td>";
echo"</tr>";

echo"<tr>";
    echo "<td>";
    echo "<b> profile pic: </b>";
    echo "</td>";

    echo "<td>";
    echo $row['pic'];
    echo "</td>";
echo"</tr>";
echo "</table>";
echo "</b>";
?>
</body>
</html>