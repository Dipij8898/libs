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
    <link rel=stylesheet href="../library/assets/libs/%40fancyapps/fancybox/dist/jquery.fancybox.min.css"> 
    <link rel=stylesheet href="../library/assets/libs/%40fortawesome/fontawesome-free/css/all.min.css">
</head>

<body>
    <header id=header-main>
        <nav class="navbar navbar-main navbar-expand-lg navbar-light" id=navbar-main>
            <div class=container>
                <a class=navbar-brand>
                    <img alt="Image placeholder" src="p_logo.png" id=navbar-logo>
                </a>
                <button class=navbar-toggler type=button data-toggle=collapse data-target=#navbar-main-collapse
                    aria-controls=navbar-main-collapse aria-expanded=false aria-label="Toggle navigation">
                    <span class=navbar-toggler-icon></span>
                </button>
                <div class="collapse navbar-collapse navbar-collapse-overlay" id=navbar-main-collapse>
                    <div class=position-relative>
                        <button class=navbar-toggler type=button data-toggle=collapse data-target=#navbar-main-collapse
                            aria-controls=navbar-main-collapse aria-expanded=false aria-label="Toggle navigation"><i
                                data-feather=x></i>
                        </button>
                    </div>
                    <ul class="navbar-nav ml-lg-auto">
                        <li class="nav-item nav-item-spaced dropdown dropdown-animate"><a class=nav-link
                                href="index.php">Home </a></li>
                        <li class="nav-item nav-item-spaced dropdown dropdown-animate"><a class=nav-link
                                href="books.php">Books</a></li>
                        <li class="nav-item nav-item-spaced dropdown dropdown-animate"><a class=nav-link
                                href="record.php">Record</a>
                        </li>
                        <li class="nav-item nav-item-spaced dropdown dropdown-animate"><a class=nav-link
                                href="feedback.php">Feedback</a>
                        </li>
                        <li class="nav-item nav-item-spaced dropdown dropdown-animate"><a class=nav-link
                                href="admin.php">Admin</a></li>
                    </ul>
                    <ul class="navbar-nav align-items-lg-center d-none d-lg-flex ml-lg-auto">
                        <li class="nav-item nav-item-spaced dropdown dropdown-animate" data-toggle=hover>
                            <a class=nav-link href=# role=button data-toggle=dropdown aria-haspopup=true
                                aria-expanded=false>Login</a>
                            <div class="dropdown-menu dropdown-menu-md p-0">
                                <ul class="list-group list-group-flush px-lg-4">
                                    <li class="dropdown dropdown-animate">
                                        <a href="/pages/a_login.html" class="list-group-item " role=button>
                                            <div class=ml-3>
                                                <h6 class="heading mb-0">Login as admin</h6>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="dropdown dropdown-animate">
                                        <a href="s_login.php" class="list-group-item " role=button>
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
                                        <a href="a_register.php" class="list-group-item " role=button>
                                            <div class=ml-3>
                                                <h6 class="heading mb-0">Register as admin</h6>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="dropdown dropdown-animate">
                                        <a href="s_register.php" class="list-group-item " role=button>
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
                        <a href="/pages/s_login.html"
                            class="btn btn-block btn-sm btn-secondary" target=_blank>
                            login as student
                        </a>
                    </div>
                    <div class="d-lg-none p-2 text-center">
                        <a href="s_register.php"
                            class="btn btn-block btn-sm btn-primary" target=_blank>
                            register as student
                        </a>
                    </div>
                    <div class="d-lg-none p-2 text-center">
                        <a href="a_login.php"
                            class="btn btn-block btn-sm btn-secondary" target=_blank>
                            login as admin
                        </a>
                    </div>
                    <div class="d-lg-none p-2 text-center">
                        <a href="a_register.php"
                            class="btn btn-block btn-sm btn-primary" target=_blank>
                            register as admin
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
<section class="slice py-5">


    <div class="container"> 
        <div class="row row-grid align-items-center">
            <div class="col-12 col-md-5 col-lg-6 order-md-2">
                <figure class=w-100><img alt="Image placeholder"
                src="../library/assets/img/svg/illustrations/illustration-2.svg" class="img-fluid mw-md-120">
                </figure>
            </div>
            <div class="col-12 col-md-7 col-lg-6 order-md-1 pr-md-5">
                <h1 class="text-center text-md-left mb-3"><b>Hello</b> <br>Can't find the book you wanted ? <br> <strong
                        class=text-primary>Put a request now.</strong></h1>
                <p class="lead text-center text-md-left text-muted">If you want us to add any specific book to our
                    library you can put a request for that book.
                </p>
                <div class="text-center text-md-left mt-5"><a href="/pages/req.html"
                        class="btn btn-secondary btn-icon"><span class=btn-inner--text>Request Now</span><span
                        class=btn-inner--icon><i data-feather=arrow-right></i></span></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="slice slice-lg bg-section-dark pt-5 pt-lg-8">
    <div class="shape-container shape-line shape-position-top shape-orientation-inverse">
        <svg width=2560px height=100px xmlns=http://www.w3.org/2000/svg xmlns:xlink=http://www.w3.org/1999/xlink
            preserveAspectRatio=none x=0px y=0px viewBox="0 0 2560 100" style="enable-background:new 0 0 2560 100"
            xml:space=preserve class="">
            <polygon points="2560 0 2560 100 0 100"></polygon>
        </svg>
    </div>
    <div class="container position-relative zindex-100">
        <div class=col>
            <div class="row justify-content-center">
                <div class="col-md-10 text-center">
                    <div class="mt-4 mb-6">
                        <h2 class="h1 text-white">Haven't subscribed yet ?</h2>
                        <h4 class="text-white mt-3">Check our plans now... </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="slice pt-0">
    <div class="container position-relative zindex-100">
        <div class=row>
            <div class="col-xl-4 col-sm-6 mt-n7">
                <div class="card card-pricing bg-soft-primary text-center px-3 shadow hover-scale-110">
                    <div class="card-header py-5    border-0 delimiter-bottom">
                        <div class="h1 text-center mb-0">&#8377 <span class="price font-weight-bolder">200</span>
                        </div>
                        <span class="h6 text-muted">Standard Subscription</span>
                    </div>
                    <div class=card-body>
                        <ul class="list-unstyled text-sm mb-4">
                            <li>1 month subscription</li>
                            <li>Access to all our books.</li>
                            <li>Borrow the book for 15 days.</li>
                            <li>Get a privilege to put upto 1 book requests.</li>
                        </ul>
                        <a href=#
                            class="btn btn-sm btn-primary hover-translate-y-n3 hover-shadow-lg mb-3"
                            target=_blank>Purchase now</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6 mt-n7">
                <div class="card card-pricing bg-soft-warning text-center px-3 shadow hover-scale-110">
                    <div class="card-header py-5    border-0 delimiter-bottom">
                        <div class="h1 text-center mb-0">&#8377 <span class="price font-weight-bolder">1000</span>
                        </div>
                        <span class="h6 text-muted">Golden Subscription</span>
                    </div>
                    <div class=card-body>
                        <ul class="list-unstyled text-sm mb-4">
                            <li>6 months subscription</li>
                            <li>Access to all our books.</li>
                            <li>Borrow the book for 15 days.</li>
                            <li>Get a privilege to put upto 6 book requests.</li>
                        </ul>
                        <a href=#
                            class="btn btn-sm btn-warning hover-translate-y-n3 hover-shadow-lg mb-3"
                            target=_blank>Purchase now</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6 mt-n7">
                <div class="card card-pricing bg-soft-success text-center px-3 shadow hover-scale-110">
                    <div class="card-header py-5    border-0 delimiter-bottom">
                        <div class="h1 text-center mb-0">&#8377 <span class="price font-weight-bolder">1800</span>
                        </div>
                        <span class="h6 text-muted">Platinum Subscription</span>
                    </div>
                    <div class=card-body>
                        <ul class="list-unstyled text-sm mb-4">
                            <li>1 Year subscription</li>
                            <li>Access to all our books.</li>
                            <li>Borrow the book for 15 days.</li>
                            <li>Get a privilege to put upto 12 book requests.</li>
                        </ul>
                        <a href=# class="btn btn-sm btn-success hover-translate-y-n3 hover-shadow-lg mb-3"
                            target=_blank>Purchase now</a>
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
    <script src="../library/assets/libs/jquery/dist/jquery.min.js"> </script> <script
        src="../library/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"> </script> <script
        src="../library/assets/libs/feather-icons/dist/feather.min.js"> </script> <script
        src="../library/assets/libs/%40fancyapps/fancybox/dist/jquery.fancybox.min.js"> </script> <script
        src="../library/assets/js/main.js"> </script>
    <script>
        feather.replace({
            width: "1em",
            height: "1em"
        })
    </script>
</body>

</html>