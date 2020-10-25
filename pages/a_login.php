<?php
    include "connection.php";
?>

<!DOCTYPE html>
<html lang=en>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset=utf-8>
    <meta name=viewport content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <title>Libs - library management system</title>
    <link rel=stylesheet href="../../libs/assets/libs/fancyapps/jquery.fancybox.min.css"> 
    <link rel=stylesheet href="../../libs/assets/libs/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../../libs/assets/css/style.css">
</head>
<body>
    <a href="../../libs/pages/index.php"
        class="btn btn-white btn-icon-only rounded-circle position-absolute zindex-101 opacity-7 left-4 top-4 d-none d-lg-inline-flex"
        data-toggle=tooltip data-placement=right title="Go back"><span class=btn-inner--icon><i
                data-feather=arrow-left></i></span></a>
    <section class="section-half-rounded bg-cover bg-size--cover py-4 py-sm-0"
        style="background-image:url('../../libs/assets/img/backgrounds/p4.jpg')"> <div
        class="container-fluid d-flex flex-column">
        <div class="row align-items-center min-vh-100">
            <div class="col-md-6 col-lg-5 col-xl-4 mx-auto">
                <div class="card shadow-lg border-0 mb-0">
                    <div class="card-body py-5 px-sm-5">
                        <div class="mb-5 text-center">
                            <p class="h1 mb-1">Admin Login</p>
                            <p class="text-muted mb-0">Sign in to your account to continue.</p>
                        </div><span class=clearfix></span>

                        <form name="login" action="" method="post">

                            <div class=form-group><label class=form-control-label name="email">Email</label>
                                <div class="input-group input-group-merge" autocomplete="off">

                                    <input type=email class="form-control form-control-prepend" id=input-email
                                        placeholder=name@example.com name="email" autocomplete="off">

                                    <div class=input-group-prepend>
                                        <span class=input-group-text>
                                            <i data-feather=user></i></span></div>
                                </div>
                            </div>
                            <div class="form-group mb-0">
                                <div class="d-flex align-items-center justify-content-between" name="password">
                                    <div>
                                        <label class=form-control-label name="password" autocomplete="off">Password</label>
                                    </div>
                                    <div class=mb-2>
                                        <a href=# class="small text-muted text-underline--dashed border-primary"
                                            data-toggle=password-text data-target=#input-password >Show password
                                        </a>
                                    </div>
                                </div>

                                <div class="input-group input-group-merge"><input type=password
                                        class="form-control form-control-prepend" id=input-password
                                        placeholder=Password name="password">

                                    <div class=input-group-prepend><span class=input-group-text><i
                                                data-feather=key></i></span></div>
                                </div>
                                <div class="text-right">
                                    <a href="/pages/recover.php" class="small font-weight-bold">forgot password ?</a>
                                </div>
                            </div>
                            <div class=mt-4><button type=submit class="btn btn-block btn-primary" name="submit">Sign in</button>
                            </div>
                        </form>
                        <div class="mt-4 text-center"><small>Not registered yet?</small> <a href="/pages/a_register.html"
                                class="small font-weight-bold">Create an account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!---------------------------------------PHP---------------------------------------------------- -->

    <?php

if(isset($_POST['submit']))
{
  $count=0;
  $res=mysqli_query($db,"SELECT * FROM `a_register` WHERE email='$_POST[email]' && password='$_POST[password]';");
  
  $row= mysqli_fetch_assoc($res);
  $count=mysqli_num_rows($res);

  if($count==0)
  {
    ?>
        <script type="text/javascript">
       alert("not match");
      </script>
    <?php
  }
  else
  {
      $_SESSION['login_user'] = $_POST['name'];
      $_SESSION['pic'] = $row['pic'];
  
    ?>
      <script type="text/javascript">
        window.location="index.php"
      </script>
    <?php
  }
}

?>
   <script src="../../libs/assets/libs/jquery/dist/jquery.min.js"> </script> <script
        src="../../libs/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"> </script> <script
        src="../../libs/assets/libs/feather-icons/dist/feather.min.js"> </script> <script
        src="../../libs/assets/libs/fancyapps/jquery.fancybox.min.js"> </script> <script
        src="../../libs/assets/js/main.js"> </script>
    <script>
        feather.replace({
            width: "1em",
            height: "1em"
        })
    </script>


</body>

</html>