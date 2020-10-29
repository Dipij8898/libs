<?php
include "connection.php";
include "navbar.php";
?>
<section class="slice slice-lg py-7 py-lg-8 bg-cover bg-size--cover"
    style="background-image:url('../../libs/assets/img/backgrounds/p3.jpg')"> <span
        class="mask bg-dark opacity-9"></span>
    <div data-offset-top=#navbar-main>
        <div class="container pt-xl-4">
            <div class="row justify-content-center">
                <div class=col-lg-9>
                    <h2 class="mb-4 text-center text-white">Book requests</h2>
                    <form method="POST" name="form1">
                        <div class="form-group bg-neutral rounded-pill mb-0 px-2 py-2 shadow">
                            <div class=row>
                                <div class=col>
                                    <div class="input-group input-group-merge shadow-none">
                                        <input type=text class="form-control form-control-flush shadow-none"
                                            placeholder="Enter Email" name="email" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group bg-neutral rounded-pill mb-0 mt-3 px-2 py-2 shadow">
                            <div class=row>
                                <div class=col>
                                    <div class="input-group input-group-merge shadow-none">
                                       
                                        <input type=text class="form-control form-control-flush shadow-none"
                                            placeholder="Enter ID of the book" name=bookid required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row col-3 mt-3">
                            <button type=submit name="submit"
                                class="btn btn-block btn-warning rounded-pill">Search</button>
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
</section>
<section class="slice slice-lg">
    <div class=container>
        <div class="card">
            <div class="card-body row align-items-center">
                <div class="col-md-12 col tab-content">
                    <div class="row mb-5 justify-content-center text-center">
                        <div class="col-lg-8 col-md-10">
                            <div class=mt-2>
                                <p class="h3">All the books requested will be shown here</p>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-center">
                            <thead class="thead-dark">

                                <?php  
if(isset($_SESSION['login_user']))
{
    $sql="SELECT s_register.email,s_id,books.bookid,bookname,author,publisher FROM s_register inner join issue_book ON s_register.email=issue_book.email inner join books on issue_book.bid=books.bookid WHERE issue_book.approve=''";
    $res=mysqli_query($db,$sql);

    if(mysqli_num_rows($res)==0)
         {
             echo "There's no request.";
         }
         else
         {
            echo "<table class='table table-bordered table-hover' >";
             echo "<thead class='thead-dark'>";
                echo "<tr>";
                     //Table header
                     echo "<th>"; echo " Student email";	echo "</th>";
                    echo "<th>"; echo "Student id";  echo "</th>";
                     echo "<th>"; echo "Book id";  echo "</th>";
                     echo "<th>"; echo "Book name";  echo "</th>";
                     echo "<th>"; echo "Author name";  echo "</th>";
                     echo "<th>"; echo "Publisher name";  echo "</th>";
                     
                 echo "</tr>";	
                 echo "</thead>";
            
                 while($row=mysqli_fetch_assoc($res))
                 {
                     echo "<tr>";
                     echo "<td>"; echo $row['email']; echo "</td>";
                     echo "<td>"; echo $row['s_id']; echo "</td>";
                     echo "<td>"; echo $row['bookid']; echo "</td>";
                     echo "<td>"; echo $row['bookname']; echo "</td>";
                     echo "<td>"; echo $row['author']; echo "</td>";
                     echo "<td>"; echo $row['publisher']; echo "</td>";
                    
            
                     echo "</tr>";
                 }
             echo "</table>";
         }
}           
else
{
    ?>
    <br>
    <h5 class="mb-4 text-center text-black ">You need to login to see the request.</h5>

<?php
}                   

if(isset($_POST['submit']))
    {
         $_SESSION['email']=$_POST['email'];
         $_SESSION['bookid']=$_POST['bookid'];
     
         
         ?>
          
         <?php
       echo "<script> location.href='approve.php'; </script>";
       exit;
        ?>
        
        <?php      }?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>







<footer class=position-relative id=footer-main>
    <div class="footer footer-dark bg-dark">
        <div class="shape-container shape-line shape-position-top shape-orientation-inverse">
            <svg width=2560px height=100px xmlns=http://www.w3.org/2000/svg xmlns:xlink=http://www.w3.org/1999/xlink
                preserveAspectRatio=none x=0px y=0px viewBox="0 0 2560 100" style="enable-background:new 0 0 2560 100"
                xml:space=preserve class=fill-section-secondary>
                <polygon points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
        <hr class="divider divider-fade divider-dark">
        <div class="container">
            <div class="row justify-content-center pb-3">
                <div class="copyright text-sm font-weight-bold text-center">&copy; 2020 <a class=font-weight-bold
                        target=_blank>Libs.</a> All
                    rights reserved
                </div>
            </div>
        </div>
    </div>
    </div>
</footer>

<script src="../../libs/assets/libs/jquery/dist/jquery.min.js"> </script>
<script src="../../libs/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"> </script>
<script src="../../libs/assets/libs/feather-icons/dist/feather.min.js"> </script>
<script src="../../libs/assets/libs/fancyapps/jquery.fancybox.min.js"> </script>
<script src="../../libs/assets/js/main.js"> </script>
<script>
    feather.replace({
        width: "1em",
        height: "1em"
    })
</script>

</body>

</html>