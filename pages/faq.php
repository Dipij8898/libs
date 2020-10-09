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
                <a class="navbar-brand ml-5 order-lg-1" href="/pages/index.php"> <img alt="Image placeholder"
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
    <section class="slice slice-lg bg-cover bg-size--cover"
        style="background-image:url('/assets/img/backgrounds/p1.jpg')"> <span class="mask bg-dark opacity-8">
        </span>
        <div class="container pt-5 pb-8">
            <div class="row justify-content-center">
                <div class=col-lg-9>
                    <h2 class="text-center text-light display-3 font-weight-bolder">How can we help?</h2>
                </div>
            </div>
        </div>
        <div class="shape-container shape-position-bottom">
            <svg xmlns=http://www.w3.org/2000/svg viewBox="0 0 1000 100" preserveAspectRatio=none>
                <path d="M 0 0 c 0 0 200 50 500 50 s 500 -50 500 -50 v 101 h -1000 v -100 z"></path>
            </svg>
        </div>
    </section>
    <section class="slice slice-lg" id=sct-faq>
        <div class=container>
            <div class="row row-grid">
                <div class=col-lg-3>
                    <div data-toggle=sticky data-sticky-offset=50>
                        <div class=card>
                            <div class="list-group list-group-flush">
                                <a href=#borrow_return_books data-scroll-to data-scroll-to-offset=50
                                    class="list-group-item list-group-item-action d-flex justify-content-between">
                                    <div><i data-feather=layout class=mr-2></i> <span>Borrow / Return books</span></div>
                                    <div><i data-feather=chevron-right></i></div>
                                </a>
                                <a href=#request_book data-scroll-to data-scroll-to-offset=50
                                    class="list-group-item list-group-item-action d-flex justify-content-between">
                                    <div><i data-feather=sliders class=mr-2></i> <span>Request books</span></div>
                                    <div><i data-feather=chevron-right></i></div>
                                </a>
                                <a href=#refund data-scroll-to data-scroll-to-offset=50
                                    class="list-group-item list-group-item-action d-flex justify-content-between">
                                    <div><i data-feather=edit-3 class=mr-2></i> <span>Refund</span></div>
                                    <div><i data-feather=chevron-right></i></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 ml-lg-auto">
                    <div class=mb-5>
                        <h4 class=mb-4 id=borrow_return_books>Borrow / Return books</h4>
                        <div id=accordion-1 class="accordion accordion-spaced">
                            <div class=card>
                                <div class="card-header py-4" id=heading-1-1 data-toggle=collapse role=button
                                    data-target=#collapse-1-1 aria-expanded=false aria-controls=collapse-1-1>
                                    <h6 class=mb-0>How many books can i borrow at a time?</h6>
                                </div>
                                <div id=collapse-1-1 class=collapse aria-labelledby=heading-1-1
                                    data-parent=#accordion-1>
                                    <div class=card-body>
                                        <p>You can borrow 3 books at a time.If you want to borrow more books you can
                                            borrow by paying extra chages for that.</p>
                                    </div>
                                </div>
                            </div>
                            <div class=card>
                                <div class="card-header py-4" id=heading-1-2 data-toggle=collapse role=button
                                    data-target=#collapse-1-2 aria-expanded=false aria-controls=collapse-1-2>
                                    <h6 class=mb-0>How can i extend the return date?
                                    </h6>
                                </div>
                                <div id=collapse-1-2 class=collapse aria-labelledby=heading-1-2
                                    data-parent=#accordion-1>
                                    <div class=card-body>
                                        <p>You can come to library on the issued return date and get an extended return
                                            date.</p>
                                    </div>
                                </div>
                            </div>
                            <div class=card>
                                <div class="card-header py-4" id=heading-1-3 data-toggle=collapse role=button
                                    data-target=#collapse-1-3 aria-expanded=false aria-controls=collapse-1-3>
                                    <h6 class=mb-0>What if the pages of book are already missing or teared?
                                    </h6>
                                </div>
                                <div id=collapse-1-3 class=collapse aria-labelledby=heading-1-3
                                    data-parent=#accordion-1>
                                    <div class=card-body>
                                        <p>You should check the book before borrowing it , If you found anything you can
                                            tell that to theh libary staff before borrowing it they will note that in
                                            the record and you will notbee fined. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-right py-4"><a href=#borrow_return_books data-scroll-to
                                data-scroll-to-offset=50 class="text-sm font-weight-bold">Back to top<i
                                    data-feather=chevron-up class=ml-2></i></a></div>
                    </div>
                    <div class=mb-md>
                        <h4 class=mb-4 id=request_book>Request books</h4>
                        <div id=accordion-2 class="accordion accordion-spaced">
                            <div class=card>
                                <div class="card-header py-4" id=heading-2-1 data-toggle=collapse role=button
                                    data-target=#collapse-2-1 aria-expanded=false aria-controls=collapse-2-1>
                                    <h6 class=mb-0>If i request a book what is the possibility of getting that book?
                                    </h6>
                                </div>
                                <div id=collapse-2-1 class=collapse aria-labelledby=heading-2-1
                                    data-parent=#accordion-2>
                                    <div class=card-body>
                                        <p>It depends on the book If the book is available easily we will surely add
                                            that book to our collection But if that book is rare it might take a bit
                                            longer time or in the worst case scenario it might not be added to the
                                            collection.</p>
                                    </div>
                                </div>
                            </div>
                            <div class=card>
                                <div class="card-header py-4" id=heading-2-2 data-toggle=collapse role=button
                                    data-target=#collapse-2-2 aria-expanded=false aria-controls=collapse-2-2>
                                    <h6 class=mb-0></i>How much time will it take to get the requested book?
                                    </h6>
                                </div>
                                <div id=collapse-2-2 class=collapse aria-labelledby=heading-2-2
                                    data-parent=#accordion-2>
                                    <div class=card-body>
                                        <p>It generally take 5-10 business days but sometimes it might take more than
                                            that depending on the situation.</p>
                                    </div>
                                </div>
                            </div>
                            <div class=card>
                                <div class="card-header py-4" id=heading-2-3 data-toggle=collapse role=button
                                    data-target=#collapse-2-3 aria-expanded=false aria-controls=collapse-2-3>
                                    <h6 class=mb-0>How will i get to know when the requested book gets added to the
                                        collection?
                                    </h6>
                                </div>
                                <div id=collapse-2-3 class=collapse aria-labelledby=heading-2-3
                                    data-parent=#accordion-2>
                                    <div class=card-body>
                                        <p>You can check it out in library after 10-15 days or else you will also get
                                            notified on your provided E-mail id.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-right py-4"><a href=#request_book data-scroll-to data-scroll-to-offset=50
                                class="text-sm font-weight-bold">Back to top<i data-feather=chevron-up
                                    class=ml-2></i></a></div>
                    </div>
                    <div class=mb-md>
                        <h4 class=mb-4 id=refund>Refund</h4>
                        <div id=accordion-3 class="accordion accordion-spaced">
                            <div class=card>
                                <div class="card-header py-4" id=heading-3-1 data-toggle=collapse role=button
                                    data-target=#collapse-3-1 aria-expanded=false aria-controls=collapse-3-1>
                                    <h6 class=mb-0>Can we get refund When we cancle the subscription?</h6>
                                </div>
                                <div id=collapse-3-1 class=collapse aria-labelledby=heading-3-1
                                    data-parent=#accordion-3>
                                    <div class=card-body>
                                        <p>Yes ,you can get refund.</p>
                                    </div>
                                </div>
                            </div>
                            <div class=card>
                                <div class="card-header py-4" id=heading-3-2 data-toggle=collapse role=button
                                    data-target=#collapse-3-2 aria-expanded=false aria-controls=collapse-3-2>
                                    <h6 class=mb-0>How much money will be deducted when i apply for refund?
                                    </h6>
                                </div>
                                <div id=collapse-3-2 class=collapse aria-labelledby=heading-3-2
                                    data-parent=#accordion-3>
                                    <div class=card-body>
                                        <p>5% will be charged as a transaction fees and some money will be deducted
                                            according to the number of days your subscription was active.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-right py-4"><a href=#refund data-scroll-to data-scroll-to-offset=50
                                class="text-sm font-weight-bold">Back to top<i data-feather=chevron-up
                                    class=ml-2></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class=position-relative id=footer-main>
                <div class="footer footer-dark bg-dark">
                    <div class="shape-container shape-line shape-position-top shape-orientation-inverse">
                        <svg width=2560px height=100px xmlns=http://www.w3.org/2000/svg
                            xmlns:xlink=http://www.w3.org/1999/xlink preserveAspectRatio=none x=0px y=0px
                            viewBox="0 0 2560 100" style="enable-background:new 0 0 2560 100" xml:space=preserve
                            class=fill-section-secondary>
                            <polygon points="2560 0 2560 100 0 100"></polygon>
                        </svg>
                    </div>
                    <hr class="divider divider-fade divider-dark">
                    <div class="container">
                        <div class="row justify-content-center pb-3">
                            <div class="copyright text-sm font-weight-bold text-center">&copy; 2020 <a
                                    class=font-weight-bold target=_blank>Libs.</a> All
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