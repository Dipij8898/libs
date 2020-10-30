<!-- <?php
 session_start();

 ?> -->
 
 <!-- <?php
     include "connection.php";
 ?> -->
 
 
 <!DOCTYPE html>
 <html lang=en>
 <meta http-equiv="content-type" content="text/html;charset=utf-8" />
 
 <head>
     <meta charset=utf-8>
     <meta name=viewport content="width=device-width,initial-scale=1,shrink-to-fit=no">
     <title>Libs - library management system</title>
     <link rel=stylesheet href="../../libs/assets/libs/fancyapps/jquery.fancybox.min.css">
     <link rel=stylesheet href="../../libs/assets/libs/fontawesome/css/all.min.css">
     <link rel="stylesheet" href="style.css">
 </head>
 
 <body style="background-image:url('e.jpg'); background-repeat: no-repeat;background-size: cover;">
 
 
     <!-- 
     <styl>
         div
           background-image: url('edit.jpg');
         
 
          </style>
         -->
 
 
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
                                 <p class=text-muted>One year support, monthly updates for up to 5 team members.
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
 
                                 <li class="nav-item nav-item-spaced dropdown dropdown-animate" data-toggle=hover>
                         <a class=nav-link href=# role=button data-toggle=dropdown aria-haspopup=true aria-expanded=false>Books</a>
                         <div class="dropdown-menu dropdown-menu-md p-0">
                            <ul class="list-group list-group-flush px-lg-4">
                                  <a href="../../libs/pages/books.php" class="list-group-item list-group-item-action" >
                                     <div class=d-flex>
                                        <div class=ml-3>
                                           <h6 class="heading mb-0">All Book</h6>
                                        </div>
                                     </div>
                                  </a>
                                  <a href="../../libs/pages/b_request.php" class="list-group-item list-group-item-action" >
                                     <div class=d-flex>
                                        <div class=ml-3>
                                           <h6 class="heading mb-0">Book request</h6>
                                        </div>
                                     </div>
                                  </a>
                                  <a href="#" class="list-group-item list-group-item-action" >
                                     <div class=d-flex>
                                        <div class=ml-3>
                                           <h6 class="heading mb-0">Issue Information</h6>
                                        </div>
                                     </div>
                                  </a>
                            </ul>
                         </div>
                      </li>
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
                                  <a href="../../libs/pages/admin_request.php" class="list-group-item list-group-item-action" >
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
                        
                         
                         
                         
                         
                                           
                                         </li>
                                     </ul>
                                 </div>
                             </li>
                         </ul>
                         
                         </div>
                        
                        
                         </div>
                         <div class="d-lg-none p-2 text-center">
                             <a href="../../libs/pages/a_register.php" class="btn btn-block btn-sm btn-primary"
                                 target=_blank>
                                 
                             </a>
                         </div>
 
 
 
                         
                 </div>
             </div>
         </nav>
         
 
     </header>
 
 
 
        <!--------------------------------------------- PHP-------------------------------------------- -->
 
        <?php
        if(isset($_SESSION['login_user']))
        {
          ?>
  
        <div style="float: left; padding-left:  5px; padding-top: 20px;">
        <form method="post" action="">
            <button name="submit2" type="submit" class="btn btn-default" style="background-color: #06861a; color: yellow;">RETURNED</button> 
                        &nbsp&nbsp
            <button name="submit3" type="submit" class="btn btn-default" style="background-color: red; color: yellow;">EXPIRED</button>
        </form>
        </div>
        <div style="float: right;padding-top: 10px;">
          
          <?php 
          $var=0;
            $result=mysqli_query($db,"SELECT * FROM `fine` where username='$_SESSION[login_user]' and status='not paid' ;");
            while($r=mysqli_fetch_assoc($result))
            {
              $var=$var+$r['fine'];
            }
            $var2=$var+$_SESSION['fine'];
  
           ?>
          <h3>Your fine is: 
            <?php
              echo "$ ".$var2;
            ?>
          </h3>
        </div>
  <br><br><br><br>
          <?php
        }
  
        
           $ret='<p style="color:yellow; background-color:green;">RETURNED</p>';
           $exp='<p style="color:yellow; background-color:red;">EXPIRED</p>';
          
          if(isset($_POST['submit2']))
          {
            
          $sql="SELECT student.username,roll,books.bid,name,authors,edition,approve,issue,issue_book.return FROM student inner join issue_book ON student.username=issue_book.username inner join books ON issue_book.bid=books.bid WHERE issue_book.approve ='$ret' and issue_book.username ='$_SESSION[login_user]'  ORDER BY `issue_book`.`return` DESC";
          $res=mysqli_query($db,$sql);
  
          }
          else if(isset($_POST['submit3']))
          {
          $sql="SELECT student.username,roll,books.bid,name,authors,edition,approve,issue,issue_book.return FROM student inner join issue_book ON student.username=issue_book.username inner join books ON issue_book.bid=books.bid WHERE issue_book.approve ='$exp' and issue_book.username ='$_SESSION[login_user]' ORDER BY `issue_book`.`return` DESC";
          $res=mysqli_query($db,$sql);
          }
          else
          {
          $sql="SELECT student.username,roll,books.bid,name,authors,edition,approve,issue,issue_book.return FROM student inner join issue_book ON student.username=issue_book.username inner join books ON issue_book.bid=books.bid WHERE issue_book.approve !='' and issue_book.approve !='Yes'  and issue_book.username ='$_SESSION[login_user]' ORDER BY `issue_book`.`return` DESC";
          $res=mysqli_query($db,$sql);
          }
  
          echo "<table class='table table-bordered' style='width:100%;' >";
          //Table header
          
          echo "<tr style='background-color: #6db6b9e6;'>";
          echo "<th>"; echo "name";  echo "</th>";
          echo "<th>"; echo "BID";  echo "</th>";
          echo "<th>"; echo "Book Name";  echo "</th>";
          echo "<th>"; echo "Authors Name";  echo "</th>";
          echo "<th>"; echo "Edition";  echo "</th>";
          echo "<th>"; echo "Status";  echo "</th>";
          echo "<th>"; echo "Issue Date";  echo "</th>";
          echo "<th>"; echo "Return Date";  echo "</th>";
  
        echo "</tr>"; 
        echo "</table>";
  
         echo "<div class='scroll'>";
          echo "<table class='table table-bordered' >";
        while($row=mysqli_fetch_assoc($res))
        {
          echo "<tr>";
            echo "<td>"; echo $row['name']; echo "</td>"
            echo "<td>"; echo $row['bid']; echo "</td>";
            echo "<td>"; echo $row['bookname']; echo "</td>";
            echo "<td>"; echo $row['authors']; echo "</td>";
            echo "<td>"; echo $row['edition']; echo "</td>";
            echo "<td>"; echo $row['approve']; echo "</td>";
            echo "<td>"; echo $row['issue']; echo "</td>";
            echo "<td>"; echo $row['return']; echo "</td>";
          echo "</tr>";
        }
      echo "</table>";
          echo "</div>";
  
      ?>
    </div>
  </div>
  </body>
  </html>
 