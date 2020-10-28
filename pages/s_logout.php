<?php
if(isset($_SESSION['s_login_user'])))
{
    unset($_SESSION['s_login_user']);
}
header("location:index.php");
?>