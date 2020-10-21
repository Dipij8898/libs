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
    <div class="modal fade fixed-right" id=modal-profile tabindex=-1 role=dialog aria-hidden=true>
        <div class="modal-dialog modal-vertical" role=document>
            <div class=modal-content>
                <div class=modal-body>
                    <div><button type=button class=close data-dismiss=modal aria-label=Close><span
                                aria-hidden=true>&times;</span></button></div>
                    <div class=px-4>
                        <div class="d-flex my-4">
                            <div class="avatar-parent-child mx-auto"><img alt="Image placeholder"
                                    src="../assets/img/svg/icons/User_male.svg" class="avatar avatar-xl rounded-circle">
                                <span class="avatar-child avatar-badge bg-success"></span></div>
                        </div>
                        <div class="text-center mb-4">
                            <h6 class="h5 mb-0">User Name</h6>
                            <span class="d-block text-muted">Useremail@gmail.com</span>
                        </div>
                        <div class="d-flex mb-5">
                            <div class="col-4 text-center"><a href=#
                                    class="h5 font-weight-bolder text-warning mb-0">5</a> <span
                                    class="d-block text-sm">Borrowed</span></div>
                            <div class="col-4 text-center"><a href=#
                                    class="h5 font-weight-bolder text-warning mb-0">3</a> <span
                                    class="d-block text-sm">Purchased</span></div>
                            <div class="col-4 text-center"><a href=#
                                    class="h5 font-weight-bolder text-warning mb-0">20</a> <span
                                    class="d-block text-sm">Points</span></div>
                        </div>
                        <div class=mb-5>
                            <div class="mt-4 pt-4 border-top">
                                <div class="row align-items-center mb-3">
                                    <div class=col-auto>
                                        <div class="icon icon-shape bg-soft-warning text-warning"><i
                                                class="fas fa-image"></i></div>
                                    </div>
                                    <div class="col pl-0">
                                        <span class="d-block h6 text-sm mb-0">Images</span>
                                        <p class="mb-0 text-sm">2580 files</p>
                                    </div>
                                    <div class="col-auto text-right"><a href=# class="h6 text-sm">18 GB</a>
                                    </div>
                                </div>
                                <div class="row align-items-center mb-3">
                                    <div class=col-auto>
                                        <div class="icon icon-shape bg-soft-success text-success"><i
                                                class="fas fa-file-alt"></i></div>
                                    </div>
                                    <div class="col pl-0">
                                        <span class="d-block h6 text-sm mb-0">Documents</span>
                                        <p class="mb-0 text-sm">375 files</p>
                                    </div>
                                    <div class="col-auto text-right"><a href=# class="h6 text-sm">5 GB</a></div>
                                </div>
                                <div class="row align-items-center mb-3">
                                    <div class=col-auto>
                                        <div class="icon icon-shape bg-soft-danger text-danger"><i
                                                class="fas fa-video"></i></div>
                                    </div>
                                    <div class="col pl-0">
                                        <span class="d-block h6 text-sm mb-0">Media</span>
                                        <p class="mb-0 text-sm">190 files</p>
                                    </div>
                                    <div class="col-auto text-right"><a href=# class="h6 text-sm">10 GB</a>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class=col-auto>
                                        <div class="icon icon-shape bg-soft-primary text-primary"><i
                                                class="fas fa-question"></i></div>
                                    </div>
                                    <div class="col pl-0">
                                        <span class="d-block h6 text-sm mb-0">Misc</span>
                                        <p class="mb-0 text-sm">376 files</p>
                                    </div>
                                    <div class="col-auto text-right"><a href=# class="h6 text-sm">3 GB</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="card shadow-none border-0 bg-section-secondary mt-8">
                            <div class="card-body pt-0 px-3 text-center">
                                <div class="pb-4 px-5 mt-n6"><img
                                        src="../../libs/assets/img/svg/illustrations/illustration-15.svg"
                                        class="img-fluid img-center" alt=Illustration></div>
                                <h5 class="h5 mb-3">Upgrade to Pro</h5>
                                <p class=text-muted>One year support, montlhy updates for up to 5 team members.
                                </p>
                                <a href=# class="btn btn-sm btn-primary">Upgrade</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer py-3 mt-auto"><a href=#
                        class="btn btn-block btn-sm btn-neutral btn-icon rounded-pill"><span class=btn-inner--icon><i
                                data-feather=log-out></i></span> <span class=btn-inner--text>Sign out</span></a></div>
            </div>
        </div>
    </div>
    <header class="" id=header-main>

        <nav class="navbar navbar-main navbar-expand-lg shadow navbar-light" id=navbar-main>

            <div class="container-fluid">

                <button class="navbar-toggler order-lg-2 ml-n3 ml-lg-0" type=button data-toggle=collapse
                    data-target=#navbar-main-collapse aria-controls=navbar-main-collapse aria-expanded=false
                    aria-label="Toggle navigation"><span class=navbar-toggler-icon></span></button>
                <a class="navbar-brand ml-5 order-lg-1" href="../../libs/pages/index.php"> <img alt="Image placeholder"
                        src="../../libs/assets/img/brand/p_logo.png" id=navbar-logo></a>
                <div class="collapse navbar-collapse navbar-collapse-overlay order-lg-3" id=navbar-main-collapse>
                    <div class=position-relative><button class=navbar-toggler type=button data-toggle=collapse
                            data-target=#navbar-main-collapse aria-controls=navbar-main-collapse aria-expanded=false
                            aria-label="Toggle navigation"><i data-feather=x></i></button>
                    </div>
                    <ul class="navbar-nav ml-lg-auto">
                        <li class="nav-item nav-item-spaced dropdown dropdown-animate"><a class=nav-link
                                href="../../libs/pages/index.php">Home </a></li>
                        <li class="nav-item nav-item-spaced dropdown dropdown-animate"><a class=nav-link
                                href="../../libs/pages/books.php">Books</a></li>
                        <li class="nav-item nav-item-spaced dropdown dropdown-animate"><a class=nav-link
                                href="../../libs/pages/record.php">Record</a>
                        </li>
                        <li class="nav-item nav-item-spaced dropdown dropdown-animate"><a class=nav-link
                                href="../../libs/pages/feedback.php">Feedback</a>
                        </li>
                        <li class="nav-item nav-item-spaced dropdown dropdown-animate"><a class=nav-link
                                href="../../libs/pages/admin.php">Admin</a></li>
                    </ul>
                    <ul class="navbar-nav align-items-lg-center d-none d-lg-flex ml-lg-auto">
                        <li class="nav-item nav-item-spaced dropdown dropdown-animate" data-toggle=hover>
                            <a class=nav-link href=# role=button data-toggle=dropdown aria-haspopup=true
                                aria-expanded=false>Login</a>
                            <div class="dropdown-menu dropdown-menu-md p-0">
                                <ul class="list-group list-group-flush px-lg-4">
                                    <li class="dropdown dropdown-animate">
                                        <a href="../../libs/pages/a_login.php" class="list-group-item " role=button>
                                            <div class=ml-3>
                                                <h6 class="heading mb-0">Login as admin</h6>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="dropdown dropdown-animate">
                                        <a href="../../libs/pages/s_login.php" class="list-group-item " role=button>
                                            <div class=ml-3>
                                                <h6 class="heading mb-0">Login as student</h6>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item nav-item-spaced dropdown dropdown-animate" data-toggle=hover>
                            <a class="btn btn-sm btn-dark btn-icon ml-3" href=# role=button data-toggle=dropdown
                                aria-haspopup=true aria-expanded=false><span class=btn-inner--icon><i
                                        data-feather=award></i></span> <span class=btn-inner--text>Register</span></a>
                            <div class="dropdown-menu dropdown-menu-md p-0">
                                <ul class="list-group list-group-flush px-lg-4">
                                    <li class="dropdown dropdown-animate">
                                        <a href="../../libs/pages/a_register.php" class="list-group-item " role=button>
                                            <div class=ml-3>
                                                <h6 class="heading mb-0">Register as admin</h6>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="dropdown dropdown-animate">
                                        <a href="../../libs/pages/s_register.php" class="list-group-item " role=button>
                                            <div class=ml-3>
                                                <h6 class="heading mb-0">Register as student</h6>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    <div class="d-lg-none p-2 text-center">
                        <a href="../../libs/pages/s_login.php" class="btn btn-block btn-sm btn-secondary" target=_blank>
                            login as student
                        </a>
                    </div>
                    <div class="d-lg-none p-2 text-center">
                        <a href="../../libs/pages/s_register.php" class="btn btn-block btn-sm btn-primary"
                            target=_blank>
                            register as student
                        </a>
                    </div>
                    <div class="d-lg-none p-2 text-center">
                        <a href="/pages/a_login.php" class="btn btn-block btn-sm btn-secondary" target=_blank>
                            login as admin
                        </a>
                    </div>
                    <div class="d-lg-none p-2 text-center">
                        <a href="../../libs/pages/a_register.php" class="btn btn-block btn-sm btn-primary"
                            target=_blank>
                            register as admin
                        </a>
                    </div>
                    <div class="order-lg-2 ml-lg-3">
                        <a class="avatar" href="../../libs/pages/cart.php" role=button>
                            <img alt="Image placeholder" src="../assets/img/svg/icons/Cart_Pay.svg">
                        </a>
                    </div>
                    <div class="order-lg-3 ml-lg-3"><a class="" href=#modal-profile role=button data-toggle=modal>
                            <span class="avatar rounded-circle"><img alt="Image placeholder"
                                    src="../assets/img/svg/icons/User_male.svg">
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <section class="slice slice-lg py-7 py-lg-8 bg-cover bg-size--cover"
        style="background-image:url('../../libs/assets/img/backgrounds/p3.jpg')"> <span
            class="mask bg-dark opacity-9"></span>
        <div data-offset-top=#navbar-main>
            <div class="container pt-xl-4">
                <div class="row justify-content-center">
                    <div class=col-lg-9>
                        <h2 class="mb-4 text-center text-white">Enter name of the book</h2>
                        <form>
                            <div class="form-group bg-neutral rounded-pill mb-0 px-2 py-2 shadow">
                                <div class=row>
                                    <div class=col>
                                        <div class="input-group input-group-merge shadow-none">
                                            <div class=input-group-prepend><span
                                                    class="input-group-text bg-transparent"><i
                                                        data-feather=search></i></span></div>
                                            <input type=text class="form-control form-control-flush shadow-none"
                                                placeholder="Search for the books">
                                        </div>
                                    </div>
                                    <div class=col-auto><button type=button
                                            class="btn btn-block btn-warning rounded-pill">Search</button></div>
                                </div>
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
                                    <p class="lead lh-180">All the books available in the library will be shown here</p>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table text-center">
                                <thead class="thead-dark">

                                    <?php

if(isset($_POST['submit']))
{
    $q=mysqli_query($db,"SELECT * from books where name like '%$_POST[search]%' ");

    if(mysqli_num_rows($q)==0)
    {
        echo "Sorry! No book found. Try searching again.";
    }
    else
    {
echo "<table class='table table-bordered table-hover' >";
echo "<thead class='thead-dark'>";
    echo "<tr>";
        //Table header
        echo "<th>"; echo "ID";	echo "</th>";
        echo "<th>"; echo "Book-Name";  echo "</th>";
        echo "<th>"; echo "Authors Name";  echo "</th>";
        echo "<th>"; echo "Publisher";  echo "</th>";
        echo "<th>"; echo "Quantity";  echo "</th>";
       
    echo "</tr>";	
    echo "</thead>";

    while($row=mysqli_fetch_assoc($q))
    {
        echo "<tr>";
        echo "<td>"; echo $row['bookid']; echo "</td>";
        echo "<td>"; echo $row['bookname']; echo "</td>";
        echo "<td>"; echo $row['author']; echo "</td>";
        echo "<td>"; echo $row['publisher']; echo "</td>";
        echo "<td>"; echo $row['quantity']; echo "</td>";
        

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
        
        echo "<th>"; echo "ID";	echo "</th>";
        echo "<th>"; echo "Book-Name";  echo "</th>";
        echo "<th>"; echo "Authors Name";  echo "</th>";
        echo "<th>"; echo "Publisher";  echo "</th>";
        echo "<th>"; echo "Quantity";  echo "</th>";
        
    
    echo "</tr>";	
    echo "</thead>";

    while($row=mysqli_fetch_assoc($res))
    {
        echo "<tr>";
        echo "<td>"; echo $row['bookid']; echo "</td>";
        echo "<td>"; echo $row['bookname']; echo "</td>";
        echo "<td>"; echo $row['author']; echo "</td>";
        echo "<td>"; echo $row['publisher']; echo "</td>";
        echo "<td>"; echo $row['quantity']; echo "</td>";
    

        echo "</tr>";
    }
echo "</table>";
}

if(isset($_POST['submit1']))
{
    if(isset($_SESSION['login_user']))
    {
        mysqli_query($db,"INSERT INTO issue_book Values('$_SESSION[login_user]', '$_POST[bookid]', '', '', '');");
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
                    preserveAspectRatio=none x=0px y=0px viewBox="0 0 2560 100"
                    style="enable-background:new 0 0 2560 100" xml:space=preserve class=fill-section-secondary>
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