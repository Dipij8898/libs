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
      class="container-fluid d-flex flex-column py-4 py-sm-0 py-lg-5 py-xl-0">
      <div class="row align-items-center min-vh-100">
         <div class="col-md-8 col-lg-6 col-xl-4 mx-auto">
            <div class="card shadow-lg border-0 mb-0">
               <div class="card-body py-4 px-sm-5">
                  <div>
                     <div class="mb-2 text-center">
                        <h6 class="h3 mb-1">Create an admin account</h6>
                        <p class="text-muted mb-0"> Join us to access our large collection of books   .</p>
                     </div>
                     <span class=clearfix></span>

                     <form name="a_register" action="" method="post">
                        <div class=form-group>
                           <label class=form-control-label>Name</label>
                           <div class="input-group input-group-merge">

                              <input type=text class="form-control form-control-prepend" id=input-name
                                 placeholder="John Ive" name="name" autocomplete="off">

                              <div class=input-group-prepend><span class=input-group-text><i
                                       data-feather=user></i></span></div>
                           </div>
                        </div>
                        <div class=form-group>
                           <label class=form-control-label>Mobile Number</label>
                           <div class="input-group input-group-merge">

                              <input type=tel class="form-control form-control-prepend" id=input-name
                                 placeholder="+91 9999999999" name="mobile" autocomplete="off">

                              <div class=input-group-prepend><span class=input-group-text><i
                                       data-feather=phone></i></span></div>
                           </div>
                        </div>
                        <div class=form-group>
                           <label class=form-control-label>Email address</label>
                           <div class="input-group input-group-merge" autocomplete="off">

                              <input type=email class="form-control form-control-prepend" id=input-email
                                 placeholder=name@example.com name="email" autocomplete="off" >

                              <div class=input-group-prepend><span class=input-group-text><i
                                       data-feather=at-sign></i></span></div>
                           </div>
                        </div>
                        <div class="form-group mb-2">
                           <div class="d-flex align-items-center justify-content-between">
                              
                              <div><label class=form-control-label name="password" autocomplete="off">Password</label></div>

                              <div class=mb-2><a href=# class="small text-muted text-underline--dashed border-primary"
                                    data-toggle=password-text data-target=#input-password>Show password</a>
                              </div>
                           </div>
                           <div class="input-group input-group-merge">

                              <input type=password class="form-control form-control-prepend" id=input-password
                                 placeholder=******** name="password">

                              <div class=input-group-prepend><span class=input-group-text><i
                                       data-feather=key></i></span></div>
                           </div>
                        </div>
                        <div class=my-2>
                           <div class="custom-control custom-checkbox mb-3"><input type=checkbox
                                 class=custom-control-input id=check-terms required> <label class=custom-control-label
                                 for=check-terms>I agree to the <a href=#>terms and conditions</a>


                     </label> </div> </div> <div class=mt-4><button type=submit
                      class="btn btn-block btn-primary" name="submit">Create my account</button>



                     </div>


                     </form>
                     <div class="py-2 text-center"><span class="text-xs text-uppercase">or</span></div>
                     <div class="text-center"><small>Already have an account?</small> <a href="/pages/a_login.html"
                           class="small font-weight-bold" >Sign in</a></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>



   <!-- -------------------------------------PHP-------------------------------------------------------  -->


   <?php

if(isset($_POST['submit']))

{
  $count=0;

  $sql="SELECT name from `a_register`";
  $res=mysqli_query($db,$sql);

  while($row=mysqli_fetch_assoc($res))
  {
    if($row['name']==$_POST['name'])
    {
      $count=$count+1;
    }
  }


  if($count==0)
  {
 mysqli_query($db,"INSERT INTO `a_register` VALUES('$_POST[name]', '$_POST[mobile]', '$_POST[email]', '$_POST[password]');");


  ?>
  <script type="text/javascript">
  alert("registration successfull");
  </script>   
    <?php
  echo "<script> location.href='a_login.php'; </script>";
  exit;
   ?>
   
  <?php
  }


  else
  {

    ?>
      <script type="text/javascript">
        alert("The username already exist.");
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