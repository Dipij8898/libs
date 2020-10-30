<?php
include "connection.php";
include "navbar.php";
?>
 <section class="slice slice-lg py-7 py-lg-8 bg-cover bg-size--cover"
 style="background-image:url('../../libs/assets/img/backgrounds/p3.jpg')">  <span
        class="mask bg-dark opacity-9"></span> 

    <div data-offset-top=#navbar-main>
        <div class="container pt-xl-4">
            <div class="row justify-content-center">
                <div class=col-lg-9>
                    <h2 class="mb-4 text-center text-white">Approve requests</h2>

                    <form method="POST" class="approve" >

                        <div class="form-group bg-neutral rounded-pill mb-0 px-2 py-2 shadow">
                            <div class=row>
                                <div class=col>
                                    <div class="input-group input-group-merge shadow-none">


                                        <input  name="approve"  type="text" class="form-control form-control-flush shadow-none"
                                            placeholder="Approve or not" required=>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group bg-neutral rounded-pill mb-0 mt-3 px-2 py-2 shadow">
                            <div class=row>
                                <div class=col>

                                    <div class="input-group input-group-merge shadow-none" name="issue">
                                        
                                        <input type="text" class="form-control form-control-flush shadow-none"
                                            placeholder="Issue date DD-MM-YY" name="issue" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group bg-neutral rounded-pill mb-0 mt-3 px-2 py-2 shadow">
                            <div class=row>
                                <div class=col>

                                    <div class="input-group input-group-merge shadow-none" name="return">

                                        <input name="returns" type="text" class="form-control form-control-flush shadow-none"
                                            placeholder="Return date DD-MM-YY" required="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row col-3 mt-3">
                            <button type="submit" name="submit1"
                                class="btn btn-block btn-warning rounded-pill">Approve</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="shape-container shape-position-bottom">
        <svg xmlns=http://www.w3.org/2000/svg viewBox="0 0 1000 100" preserveAspectRatio=none>
            <path d="M 0 0 c 0 0 200 50 500 50 s 500 -50 500 -50 v 101 h -1000 v -100 z"></path>
        </svg>
    </div>
       <?php

       if(isset($_POST['submit1']))
       {
       

        mysqli_query($db,"UPDATE  `issue_book` SET  `approve` =  '$_POST[approve]', `issue` =  '$_POST[issue]', `returns` =  '$_POST[returns]' WHERE email='$_SESSION[email]' and bid='$_SESSION[bookid]';");

        mysqli_query($db,"UPDATE books SET quantity = quantity-1 where bid=' $_SESSION[bid]';");

           $res=mysqli_query($db,"SELECT quantity from books where bookid='$_SESSION[bookid]';");

           while($row=mysqli_fetch_assoc($res))
             {
                 if($row['quantity']==0)
                 {
                     mysqli_query($db,"UPDATE books SET status='not-available' where bookid='$_SESSION[bookid]';");
                 }
             }
           ?>
               <script type="text/javascript">
                 alert("Updated successfully.");
                 window.location="admin_request.php"
                 </script>
              <?php
               }
               ?>
</section>
</body>
</html>
