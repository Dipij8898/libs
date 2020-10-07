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
                    <img alt="Image placeholder" src="../library/assets/img/brand/p_logo.png" id=navbar-logo>
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
                                href="record.html">Record</a>
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
                                        <a href="a_login.php" class="list-group-item " role=button>
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
                                        <a href="/pages/a_register.html" class="list-group-item " role=button>
                                            <div class=ml-3>
                                                <h6 class="heading mb-0">Register as admin</h6>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="dropdown dropdown-animate">
                                        <a href="/pages/s_register.html" class="list-group-item " role=button>
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
                        <a href="/pages/s_register.html"
                            class="btn btn-block btn-sm btn-primary" target=_blank>
                            register as student
                        </a>
                    </div>
                    <div class="d-lg-none p-2 text-center">
                        <a href="/pages/a_login.html"
                            class="btn btn-block btn-sm btn-secondary" target=_blank>
                            login as admin
                        </a>
                    </div>
                    <div class="d-lg-none p-2 text-center">
                        <a href="/pages/a_register.html"
                            class="btn btn-block btn-sm btn-primary" target=_blank>
                            register as admin
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <section class="slice slice-lg py-7 py-lg-8 bg-cover bg-size--cover"
        style="background-image:url(/assets/img/backgrounds/p3.jpg)"> <span
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
                                    <tr>
                                        <th scope="col">Book Id</th>
                                        <th scope="col">Book Name</th>
                                        <th scope="col">Author</th>
                                        <th scope="col">Publisher</th>
                                        <th scope="col">Quantity</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>Otto</td>
                                        <td>20</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>Otto</td>
                                        <td>11</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>11</td>
                                        <td>0</td>
                                    </tr>
                                </tbody>
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