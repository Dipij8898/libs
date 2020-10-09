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
    <header id=header-main>
        <nav class="navbar navbar-main navbar-expand-lg navbar-light" id=navbar-main>
            <div class=container>
                <a class=navbar-brand>
                    <img alt="Image placeholder" src="/assets/img/brand/p_logo.png" id=navbar-logo>
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
                                href="/pages/index.html">Home </a></li>
                        <li class="nav-item nav-item-spaced dropdown dropdown-animate"><a class=nav-link
                                href="/pages/books.html">Books</a></li>
                        <li class="nav-item nav-item-spaced dropdown dropdown-animate"><a class=nav-link
                                href="/pages/record.html">Record</a>
                        </li>
                        <li class="nav-item nav-item-spaced dropdown dropdown-animate"><a class=nav-link
                                href="/pages/feedback.html">Feedback</a>
                        </li>
                        <li class="nav-item nav-item-spaced dropdown dropdown-animate"><a class=nav-link
                                href="/pages/admin.html">Admin</a></li>
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
                                        <a href="/pages/s_login.html" class="list-group-item " role=button>
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
    <section class="slice py-6 pt-lg-7 pb-lg-8 bg-gradient-dark">
        <div class="container d-flex align-items-center text-center text-lg-left">
            <div class="col px-0">
                <div class="row row-grid align-items-center">
                    <div class=col-lg-6>
                        <h1 class="h1 text-white text-center text-lg-left my-4">Have Something <strong>in mind?</strong>
                        </h1>
                        <p class="lead text-white text-center text-lg-left opacity-8">Feel free to communicate with us.
                        </p>
                        <div class="mt-5 text-center text-lg-left">
                            <a href=#sct-form-contact data-scroll-to class="btn btn-white btn-lg btn-icon">
                                <span class=btn-inner--icon>
                                    <i data-feather=edit-2></i>
                                </span>
                                <span class=btn-inner--text>Write amessage</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-container shape-line shape-position-bottom">
            <svg width=2560px height=100px xmlns=http://www.w3.org/2000/svg xmlns:xlink=http://www.w3.org/1999/xlink
                preserveAspectRatio=none x=0px y=0px viewBox="0 0 2560 100" style="enable-background:new 0 0 2560 100"
                xml:space=preserve class="">
                <polygon points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </section>
    <section class=section-half-rounded>
        <div class="jumbotron section-inner left-0 rounded-bottom-right bg-section-secondary overflow-hidden col-lg-11">
        </div>
        <div class="container text-center text-lg-left">
            <div class=row>
                <div class="col-lg-6 col-md-10">
                    <span class="badge badge-primary badge-pill">Support team</span>
                    <h5 class="h5 lh-180 mt-4 mb-6">Our support team for any issues you might have.</h5>
                </div>
            </div>
            <div class=row>
                <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0">
                    <div data-animate-hover=2>
                        <div class=mt-3>
                            <h5 class="h6 mb-0">Harshal Ogale</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0">
                    <div data-animate-hover=2>
                        <div class=mt-3>
                            <h5 class="h6 mb-0">Hiamnshu Patil</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0">
                    <div data-animate-hover=2>
                        <div class=mt-3>
                            <h5 class="h6 mb-0">Sayali Kotkar</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0">
                    <div data-animate-hover=2>
                        <div class=mt-3>
                            <h5 class="h6 mb-0">Divya Jangid</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="slice slice-lg" id=sct-form-contact>
        <div class="container position-relative zindex-100">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-6 text-center">
                    <h3>Contact us</h3>
                    <p class=lh-190>If there's something we can help you with, jut let us know. We'll be more than happy
                        to offer you our help</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class=col-lg-6>
                    <form id=form-contact>
                        <div class=form-group><input class="form-control form-control-lg" type=text
                                placeholder="Your name" required></div>
                        <div class=form-group><input class="form-control form-control-lg" type=email
                                placeholder=email@example.com required></div>
                        <div class=form-group><input class="form-control form-control-lg" type=text
                                placeholder=+40-745-234-567 required></div>
                        <div class=form-group><textarea class="form-control form-control-lg" data-toggle=autosize
                                placeholder="Tell us a few words ..." rows=3 required></textarea></div>
                        <div class=text-center><button type=reset class="btn-reset d-none"></button> <button type=submit
                                class="btn btn-block btn-lg btn-primary mt-4">Send your message</button></div>
                    </form>
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
    <script src=../../assets/libs/jquery/dist/jquery.min.js> </script> <script
        src=../../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js> </script> <script
        src=../../assets/libs/feather-icons/dist/feather.min.js> </script> <script
        src=../../assets/libs/%40fancyapps/fancybox/dist/jquery.fancybox.min.js> </script> <script
        src="/assets/js/main.js"> </script>
    <script>
        feather.replace({
            width: "1em",
            height: "1em"
        })
    </script>

</body>


</html>