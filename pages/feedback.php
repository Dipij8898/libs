<?php
    include "connection.php";
    include "navbar.php";
?>
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
                                <span class="btn-inner--icon text-primary">
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
    <section class="slice slice-lg" id=sct-faq>
        <div class=container>
            <div class="row row-grid">
                <div class=col-lg-3>
                    <div data-toggle=sticky data-sticky-offset=50>
                        <div class=card>
                            <div class="list-group list-group-flush">
                                <a href=#borrow_return_books data-scroll-to data-scroll-to-offset=50
                                    class="list-group-item list-group-item-action d-flex justify-content-between">
                                    <div><i data-feather=layout class="mr-2 text-primary"></i> <span>Borrow / Return
                                            books</span></div>
                                    <div class="text-primary"><i data-feather=chevron-right></i></div>
                                </a>
                                <a href=#request_book data-scroll-to data-scroll-to-offset=50
                                    class="list-group-item list-group-item-action d-flex justify-content-between">
                                    <div><i data-feather=sliders class="mr-2 text-primary"></i> <span>Request
                                            books</span></div>
                                    <div class="text-primary"><i data-feather=chevron-right></i></div>
                                </a>
                                <a href=#refund data-scroll-to data-scroll-to-offset=50
                                    class="list-group-item list-group-item-action d-flex justify-content-between">
                                    <div><i data-feather=edit-3 class="mr-2 text-primary"></i> <span>Refund</span></div>
                                    <div class="text-primary"><i data-feather=chevron-right></i></div>
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
                                            borrow
                                            by paying extra chages for that.</p>
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
                                            the
                                            record and you will notbee fined. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-right py-4"><a href=#borrow_return_books data-scroll-to
                                data-scroll-to-offset=50 class="text-sm font-weight-bold">Back to top<i
                                    data-feather=chevron-up class=ml-2></i></a>
                        </div>
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
                                            that
                                            book to our collection But if that book is rare it might take a bit longer
                                            time
                                            or in the worst case scenario it might not be added to the collection.</p>
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
                                            that
                                            depending on the situation.</p>
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
                                    class=ml-2></i></a>
                        </div>
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
                                    class=ml-2></i></a>
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
                    <form id=form-contact name="login" action="" method="post">

                        <div class=form-group><input class="form-control form-control-lg" type=text
                                placeholder="Your name" required name="name"></div>

                        <div class=form-group><input class="form-control form-control-lg" type=email
                                placeholder=email@example.com required name="email"></div>

                        <div class=form-group><input class="form-control form-control-lg" type=text
                                placeholder=+40-745-234-567 required name="mobile"></div>

                        <div class=form-group><textarea class="form-control form-control-lg" data-toggle=autosize
                                placeholder="Tell us a few words ..." rows=3 required name="help"></textarea></div>

          <div class=text-center><button type=reset class="btn-reset d-none" name="submit"></button> <button type=submit
                                class="btn btn-block btn-lg btn-dark mt-4" name="submit">Send your message</button></div>
                    </form>
                </div>
            </div>
        </div>
    </section>



    <?php

if(isset($_POST['submit']))

{
  $count=0;

  $sql="SELECT name from `query`";
  $res=mysqli_query($db,$sql);

 


  if($count==0)
  {
 mysqli_query($db,"INSERT INTO `query` VALUES('$_POST[name]', '$_POST[email]', '$_POST[mobile]', '$_POST[help]');");


  ?>
    <script type="text/javascript">
        alert("Your query is forwarded!!!.");
      </script>
    <?php
  
   ?>
   
  <?php
  }


  else
  {

    ?>
      <script type="text/javascript">
        alert("The username already exist.");
      </script>
    <?php

  }

}

?>
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