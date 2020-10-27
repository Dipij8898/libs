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
                    <h2 class="mb-4 text-center text-white">requests</h2>

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
                                <p class="lead lh-180">All the books requested will be shown here</p>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-center">
                            <thead class="thead-dark">

<?php                                
if(isset($_SESSION['login_user']))
{
    $q=mysqli_query($db,"SELECT * from record where name='$_SESSION[login_user]'; ");

    if(mysqli_num_rows($q)==0)
    {
        echo "There's no request.";
    }
    else
    {
echo "<table class='table table-bordered table-hover' >";
echo "<thead class='thead-dark'>";
    echo "<tr>";
        //Table header
        echo "<th>"; echo "Book ID";	echo "</th>";
        echo "<th>"; echo "Approve Status";  echo "</th>";
        echo "<th>"; echo "Issue date";  echo "</th>";
        echo "<th>"; echo "Return date";  echo "</th>";
       
    echo "</tr>";	
    echo "</thead>";

    while($row=mysqli_fetch_assoc($q))
    {
        echo "<tr>";
        echo "<td>"; echo $row['bookid']; echo "</td>";
        echo "<td>"; echo $row['bookname']; echo "</td>";
        echo "<td>"; echo $row['author']; echo "</td>";
        echo "<td>"; echo $row['publisher']; echo "</td>";
        

        echo "</tr>";
    }
echo "</table>";
    }
}
    /*if button is not pressed.*/
else
{
    $res=mysqli_query($db,"SELECT * FROM `books` ORDER BY `books`.`bookname` ASC;");

echo "<table class='table table-bordered table-hover' >";
echo "<thead class='thead-dark'>";
    echo "<tr>";
        
    echo "<th>"; echo "Book ID";	echo "</th>";
    echo "<th>"; echo "Approve Status";  echo "</th>";
    echo "<th>"; echo "Issue date";  echo "</th>";
    echo "<th>"; echo "Return date";  echo "</th>";
        
    
    echo "</tr>";	
    echo "</thead>";

    while($row=mysqli_fetch_assoc($res))
    {
        echo "<tr>";
        echo "<td>"; echo $row['bookid']; echo "</td>";
        echo "<td>"; echo $row['approve']; echo "</td>";
        echo "<td>"; echo $row['issue']; echo "</td>";
        echo "<td>"; echo $row['return']; echo "</td>";
        

        echo "</tr>";
    }
echo "</table>";
}



if(isset($_POST['submit1']))
{
    if(isset($_SESSION['login_user']))
    {
        mysqli_query($db,"INSERT INTO record Values('$_SESSION[s_name]', '$_POST[bookid]', '', '', '');");
                                ?>
                                <script type="text/javascript">
                                    window.location = "request.php"
                                </script>
                                <?php
                                }
                                else
                                {
                                ?>
                                
                                <script type="text/javascript">
                                    alert("You must login to Request a book");
                                </script>
                                <?php
                                }
                                }

                                ?>
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