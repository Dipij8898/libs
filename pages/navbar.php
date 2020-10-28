<?php
 session_start();

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
    <?php
if(isset($_SESSION['login_user'])){
$q=mysqli_query($db,"SELECT * FROM s_register where name='$_SESSION[login_user]';");
}
?>
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
                            
                            <h6 class="h5 mb-0">
                            <?php
                            
                                echo $_SESSION['username'];
                            
                            ?>
                            <h6>
                            <span class="d-block text-muted">
                            <?php
                            
                                echo $_SESSION['login_user'];
                            
                            ?></span>
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
                <div class="modal-footer py-3 mt-auto"><a href="logout.php"
                        class="btn btn-block btn-sm btn-neutral btn-icon rounded-pill"><span class=btn-inner--icon><i
                                data-feather=log-out></i></span> <span class=btn-inner--text>logout</span></a></div>

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
                        
                        <li class="nav-item nav-item-spaced dropdown dropdown-animate" data-toggle=hover>
                        <a class=nav-link href=# role=button data-toggle=dropdown aria-haspopup=true aria-expanded=false>Admin</a>
                        <div class="dropdown-menu dropdown-menu-md p-0">
                           <ul class="list-group list-group-flush px-lg-4">
                                 <a href="../../libs/pages/add.php" class="list-group-item list-group-item-action" >
                                    <div class=d-flex>
                                       <div class=ml-3>
                                          <h6 class="heading mb-0">Add Book</h6>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="../../libs/pages/remove.php" class="list-group-item list-group-item-action" >
                                    <div class=d-flex>
                                       <div class=ml-3>
                                          <h6 class="heading mb-0">Remove Book</h6>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="../../libs/pages/b_request.php" class="list-group-item list-group-item-action" >
                                    <div class=d-flex>
                                       <div class=ml-3>
                                          <h6 class="heading mb-0">Requested books</h6>
                                       </div>
                                    </div>
                                 </a>
                           </ul>
                        </div>
                     </li>
                    </ul>

                    <!-- before login start-->
                    <?php
                                if(isset($_SESSION['login_user']))
                              {?>
                    <ul class="navbar-nav align-items-lg-center d-none d-lg-flex ml-lg-auto">
                        <li class="nav-item nav-item-spaced dropdown dropdown-animate" data-toggle=hover>
                            <div class="order-lg-2 ml-lg-3">
                                <a class="avatar" href="../../libs/pages/cart.php" role=button>
                                    <img alt="Image placeholder" src="../assets/img/svg/icons/Cart_Pay.svg">
                                </a>
                            </div>
                        </li>
                        <li class="nav-item nav-item-spaced dropdown dropdown-animate" data-toggle=hover>
                            <div class="order-lg-3 ml-lg-3"><a class="" href=#modal-profile role=button
                                    data-toggle=modal>
                                    <span class="avatar rounded-circle"><img alt="Image placeholder"
                                            src="../assets/img/svg/icons/User_male.svg">
                                    </span>
                                </a>
                            </div>
                        </li>
                        <?php
                        } 
                        else 
                       { ?>
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
                                            data-feather=award></i></span> <span
                                        class=btn-inner--text>Register</span></a>
                                <div class="dropdown-menu dropdown-menu-md p-0">
                                    <ul class="list-group list-group-flush px-lg-4">
                                        <li class="dropdown dropdown-animate">
                                            <a href="../../libs/pages/a_register.php" class="list-group-item "
                                                role=button>
                                                <div class=ml-3>
                                                    <h6 class="heading mb-0">Register as admin</h6>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="dropdown dropdown-animate">
                                            <a href="../../libs/pages/s_register.php" class="list-group-item "
                                                role=button>
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
                            <a href="../../libs/pages/s_login.php" class="btn btn-block btn-sm btn-secondary"
                                target=_blank>
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

                        <?php }
                        ?>
                </div>
            </div>
        </nav>

    </header>