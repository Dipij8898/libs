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
       <header class="" id=header-main>
        <nav class="navbar navbar-main navbar-expand-lg navbar-light" id=navbar-main>
            <div class=container>
                <a class=navbar-brand href=#> <img alt="Image placeholder" src="/assets/img/brand/p_logo.png"
                        id=navbar-logo> </a><button class=navbar-toggler type=button data-toggle=collapse
                    data-target=#navbar-main-collapse aria-controls=navbar-main-collapse aria-expanded=false
                    aria-label="Toggle navigation"><span class=navbar-toggler-icon></span></button>
                <div class="collapse navbar-collapse navbar-collapse-overlay" id=navbar-main-collapse>
                    <div class=position-relative><button class=navbar-toggler type=button data-toggle=collapse
                            data-target=#navbar-main-collapse aria-controls=navbar-main-collapse aria-expanded=false
                            aria-label="Toggle navigation"><i data-feather=x></i></button></div>
                    <ul class="navbar-nav ml-lg-auto">
                        <li class="nav-item nav-item-spaced d-none d-lg-block"><a class=nav-link href="/pages/index.html">Home </a></li>
                        <li class="nav-item nav-item-spaced d-none d-lg-block"><a class=nav-link href="/pages/books.html">Books</a></li>
                        <li class="nav-item nav-item-spaced d-none d-lg-block"><a class=nav-link href="/pages/support.html">Support</a>
                        </li>
                        <li class="nav-item nav-item-spaced d-none d-lg-block"><a class=nav-link href="/pages/mybooks.html">My books</a>
                        </li>
                        <li class="nav-item nav-item-spaced d-none d-lg-block"><a class=nav-link href="/pages/faq.html">FAQ's</a></li>
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
                            <a class="btn btn-sm btn-primary btn-icon ml-3" href=# role=button data-toggle=dropdown aria-haspopup=true
                                aria-expanded=false><span
                                    class=btn-inner--icon><i data-feather=award></i></span> <span
                                    class=btn-inner--text>Register</span></a>
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
                </div>
        </nav>
    </header>
      <div id=omnisearch class=omnisearch>
         <div class=container>
            <div class=omnisearch-container>
               <form class=omnisearch-form>
                  <div class=form-group>
                     <div class="input-group input-group-merge input-group-flush">
                        <div class=input-group-prepend><span class=input-group-text><i data-feather=search></i></span></div>
                        <input type=text class=form-control placeholder="Type and hit enter ...">
                     </div>
                  </div>
               </form>
               <div class=omnisearch-suggestions>
                  <h6 class=heading>Search Suggestions</h6>
                  <div class=row>
                     <div class=col-sm-12>
                        <ul class="list-unstyled mb-0">
                           <li><a class=list-link href=#><i data-feather=clock></i> <span>macbook pro</span> in Laptops</a></li>
                           <li><a class=list-link href=#><i data-feather=clock></i> <span>iphone 8</span> in Smartphones</a></li>
                           <li><a class=list-link href=#><i data-feather=clock></i> <span>macbook pro</span> in Laptops</a></li>
                           <li><a class=list-link href=#><i data-feather=clock></i> <span>beats pro solo 3</span> in Headphones</a></li>
                           <li><a class=list-link href=#><i data-feather=clock></i> <span>smasung galaxy 10</span> in Phones</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <section class="slice py-6 pt-lg-7 pb-lg-8 bg-gradient-primary">
         <div class="container d-flex align-items-center text-center text-lg-left">
            <div class="col px-0">
               <div class="row row-grid align-items-center">
                  <div class=col-lg-6>
                     <h1 class="h1 text-white text-center text-lg-left my-4">Have a project <strong>in mind?</strong></h1>
                     <p class="lead text-white text-center text-lg-left opacity-8">Build a beautiful, modern website with flexible Bootstrap components built from scratch.</p>
                     <div class="mt-5 text-center text-lg-left"><a href=#sct-form-contact data-scroll-to class="btn btn-white btn-lg btn-icon"><span class=btn-inner--icon><i data-feather=edit-2></i> </span><span class=btn-inner--text>Write a message</span></a></div>
                     <div class="d-flex align-items-center justify-content-center justify-content-lg-left mt-5">
                        <div class="col-auto text-sm text-white pl-0 pr-4">Trusted by:</div>
                        <div class="client-group col">
                           <div class=row>
                              <div class="client col-3 py-3"><img alt="Image placeholder" src=../../assets/img/clients/svg/google-gray.svg></div>
                              <div class="client col-3 py-3"><img alt="Image placeholder" src=../../assets/img/clients/svg/spotify-gray.svg></div>
                              <div class="client col-3 py-3"><img alt="Image placeholder" src=../../assets/img/clients/svg/airbnb-gray.svg></div>
                              <div class="client col-3 py-3"><img alt="Image placeholder" src=../../assets/img/clients/svg/paypal-gray.svg></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="shape-container shape-line shape-position-bottom">
            <svg width=2560px height=100px xmlns=http://www.w3.org/2000/svg xmlns:xlink=http://www.w3.org/1999/xlink preserveAspectRatio=none x=0px y=0px viewBox="0 0 2560 100" style="enable-background:new 0 0 2560 100" xml:space=preserve class="">
               <polygon points="2560 0 2560 100 0 100"></polygon>
            </svg>
         </div>
      </section>
      <section class="slice slice-lg">
         <div class=container>
            <div class=row>
               <div class=col-lg-4>
                  <div class="card text-center hover-translate-y-n10 hover-shadow-lg">
                     <div class="px-5 pb-5">
                        <div class=py-5>
                           <div class="icon text-warning mx-auto"><i data-feather=phone-call></i></div>
                        </div>
                        <h5 class="">Sales department</h5>
                        <p class="mt-2 mb-0">Lorem ipsum dolor sit amet consectetur adipiscing.</p>
                        <div class=mt-4><a href=# class=link-underline-warning>sales@example.com</a></div>
                     </div>
                  </div>
               </div>
               <div class=col-lg-4>
                  <div class="card text-center hover-translate-y-n10 hover-shadow-lg">
                     <div class="px-5 pb-5">
                        <div class=py-5>
                           <div class="icon text-warning mx-auto"><i data-feather=settings></i></div>
                        </div>
                        <h5 class="">Technical support</h5>
                        <p class="mt-2 mb-0">Lorem ipsum dolor sit amet consectetur adipiscing.</p>
                        <div class=mt-4><a href=# class=link-underline-warning>support@example.com</a></div>
                     </div>
                  </div>
               </div>
               <div class=col-lg-4>
                  <div class="card text-center hover-translate-y-n10 hover-shadow-lg">
                     <div class="px-5 pb-5">
                        <div class=py-5>
                           <div class="icon text-warning mx-auto"><i data-feather=users></i></div>
                        </div>
                        <h5 class="">Custom projects</h5>
                        <p class="mt-2 mb-0">Lorem ipsum dolor sit amet consectetur adipiscing.</p>
                        <div class=mt-4><a href=# class=link-underline-warning>project@example.com</a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="slice slice-lg">
         <div class=container>
            <div class="row row-grid justify-content-between align-items-center">
               <div class=col-lg-5>
                  <h3>150 Southeast Pidgeon Meadow<br>Claflin Terrace, 305458</h3>
                  <p class="lead my-4">E: <a href=#>support@webpixels.io</a><br>T: (555) 257-393</p>
                  <p>Want to share any feedback with us, report a technical issue or just ask us a question? Fill free to contact us and we will get back to you shortly.</p>
               </div>
               <div class=col-lg-6>
                  <div id=map-custom class="map-canvas rounded-left" data-lat=25.7617 data-lng=-80.1918 data-color=#0c66ff style=height:600px></div>
               </div>
            </div>
         </div>
      </section>
      <section class=section-half-rounded>
         <div class="jumbotron section-inner left-0 rounded-bottom-right bg-section-secondary overflow-hidden col-lg-11"></div>
         <div class="container text-center text-lg-left">
            <div class=row>
               <div class="col-lg-6 col-md-10">
                  <span class="badge badge-primary badge-pill">Support team</span>
                  <h5 class="h5 lh-180 mt-4 mb-6">Our support team is available 24/7 for any issues you might have with our products.</h5>
               </div>
            </div>
            <div class=row>
               <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0">
                  <div data-animate-hover=2>
                     <div class=animate-this><a href=#><img alt="Image placeholder" class="img-fluid rounded shadow" src=../../assets/img/theme/light/person-1.jpg></a></div>
                     <div class=mt-3>
                        <h5 class="h6 mb-0">Heather Wright</h5>
                        <p class="text-muted text-sm mb-0">Founded &amp; Chairman</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0">
                  <div data-animate-hover=2>
                     <div class=animate-this><a href=#><img alt="Image placeholder" class="img-fluid rounded shadow" src=../../assets/img/theme/light/person-2.jpg></a></div>
                     <div class=mt-3>
                        <h5 class="h6 mb-0">Monroe Parker</h5>
                        <p class="text-muted text-sm mb-0">Back End Developer</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0">
                  <div data-animate-hover=2>
                     <div class=animate-this><a href=#><img alt="Image placeholder" class="img-fluid rounded shadow" src=../../assets/img/theme/light/person-3.jpg></a></div>
                     <div class=mt-3>
                        <h5 class="h6 mb-0">John Sullivan</h5>
                        <p class="text-muted text-sm mb-0">Front End Developer</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0">
                  <div data-animate-hover=2>
                     <div class=animate-this><a href=#><img alt="Image placeholder" class="img-fluid rounded shadow" src=../../assets/img/theme/light/person-4.jpg></a></div>
                     <div class=mt-3>
                        <h5 class="h6 mb-0">James Lewis</h5>
                        <p class="text-muted text-sm mb-0">Vice Chairman</p>
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
                  <p class=lh-190>If there's something we can help you with, jut let us know. We'll be more than happy to offer you our help</p>
               </div>
            </div>
            <div class="row justify-content-center">
               <div class=col-lg-6>
                  <form id=form-contact>
                     <div class=form-group><input class="form-control form-control-lg" type=text placeholder="Your name" required></div>
                     <div class=form-group><input class="form-control form-control-lg" type=email placeholder=email@example.com required></div>
                     <div class=form-group><input class="form-control form-control-lg" type=text placeholder=+40-745-234-567 required></div>
                     <div class=form-group><textarea class="form-control form-control-lg" data-toggle=autosize placeholder="Tell us a few words ..." rows=3 required></textarea></div>
                     <div class=text-center><button type=reset class="btn-reset d-none"></button> <button type=submit class="btn btn-block btn-lg btn-primary mt-4">Send your message</button></div>
                  </form>
               </div>
            </div>
         </div>
      </section>
      <footer class=position-relative id=footer-main>
         <div class="footer pt-lg-7 footer-dark bg-dark">
            <div class="shape-container shape-line shape-position-top shape-orientation-inverse">
               <svg width=2560px height=100px xmlns=http://www.w3.org/2000/svg xmlns:xlink=http://www.w3.org/1999/xlink preserveAspectRatio=none x=0px y=0px viewBox="0 0 2560 100" style="enable-background:new 0 0 2560 100" xml:space=preserve class="">
                  <polygon points="2560 0 2560 100 0 100"></polygon>
               </svg>
            </div>
            <div class="container pt-4">
               <div class="row justify-content-center">
                  <div class=col-lg-12>
                     <div class="row align-items-center">
                        <div class=col-lg-7>
                           <h3 class="text-secondary mb-2">Brilliant solutions for your ideas</h3>
                           <p class="lead mb-0 text-white opacity-8">Build modern looking websites fast and easy using Quick.</p>
                        </div>
                        <div class="col-lg-5 text-lg-right mt-4 mt-lg-0"><a href=../../docs/index.html class="btn btn-white btn-icon my-2" target=_blank><span class=btn-inner--icon><i data-feather=book class=text-primary></i> </span><span class=btn-inner--text>Documentation</span> </a><a href=https://themes.getbootstrap.com/product/quick-website-ui-kit-2/ class="btn btn-primary my-2 ml-0 ml-sm-3" target=_blank>Purchase now</a></div>
                     </div>
                  </div>
               </div>
               <hr class="divider divider-fade divider-dark my-5">
               <div class=row>
                  <div class="col-lg-4 mb-5 mb-lg-0">
                     <a href=../../index-2.html><img alt="Image placeholder" src=../../assets/img/brand/light.svg id=footer-logo></a>
                     <p class="mt-4 text-sm opacity-8 pr-lg-4">Webpixels attempts to bring the best development experience to designers and developers by offering the tools needed for having a quick and solid start in most web projects.</p>
                     <ul class="nav mt-4">
                        <li class=nav-item><a class="nav-link pl-0" href=https://dribbble.com/webpixels target=_blank><i class="fab fa-dribbble"></i></a></li>
                        <li class=nav-item><a class=nav-link href=https://github.com/webpixels target=_blank><i class="fab fa-github"></i></a></li>
                        <li class=nav-item><a class=nav-link href=https://www.instagram.com/webpixelsofficial target=_blank><i class="fab fa-instagram"></i></a></li>
                        <li class=nav-item><a class=nav-link href=https://www.facebook.com/webpixels target=_blank><i class="fab fa-facebook"></i></a></li>
                     </ul>
                  </div>
                  <div class="col-lg-2 col-6 col-sm-4 ml-lg-auto mb-5 mb-lg-0">
                     <h6 class="heading mb-3">Account</h6>
                     <ul class=list-unstyled>
                        <li><a href=#>Profile</a></li>
                        <li><a href=#>Settings</a></li>
                        <li><a href=#>Billing</a></li>
                        <li><a href=#>Notifications</a></li>
                     </ul>
                  </div>
                  <div class="col-lg-2 col-6 col-sm-4 mb-5 mb-lg-0">
                     <h6 class="heading mb-3">About</h6>
                     <ul class=list-unstyled>
                        <li><a href=#>Services</a></li>
                        <li><a href=#>Pricing</a></li>
                        <li><a href=#>Contact</a></li>
                        <li><a href=#>Careers</a></li>
                     </ul>
                  </div>
                  <div class="col-lg-2 col-6 col-sm-4 mb-5 mb-lg-0">
                     <h6 class="heading mb-3">Company</h6>
                     <ul class=list-unstyled>
                        <li><a href=#>Community</a></li>
                        <li><a href=#>Help center</a></li>
                        <li><a href=#>Support</a></li>
                     </ul>
                  </div>
               </div>
               <hr class="divider divider-fade divider-dark my-4">
               <div class="row align-items-center justify-content-md-between pb-4">
                  <div class=col-md-6>
                     <div class="copyright text-sm font-weight-bold text-center text-md-left">&copy; 2020 <a href=https://webpixels.io/ class=font-weight-bold target=_blank>Webpixels</a>. All rights reserved</div>
                  </div>
                  <div class=col-md-6>
                     <ul class="nav justify-content-center justify-content-md-end mt-3 mt-md-0">
                        <li class=nav-item><a class=nav-link href=#>Terms</a></li>
                        <li class=nav-item><a class=nav-link href=#>Privacy</a></li>
                        <li class=nav-item><a class=nav-link href=#>Cookies</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </footer>
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
                        <div class="copyright text-sm font-weight-bold text-center">&copy; 2020 <a
                                class=font-weight-bold target=_blank>Libs.</a> All
                            rights reserved
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src=../../assets/libs/jquery/dist/jquery.min.js> </script> <script
        src=../../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js> </script>  <script
        src=../../assets/libs/feather-icons/dist/feather.min.js> </script>  <script
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