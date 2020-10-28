<?php
        include "connection.php";
        include "navbar.php";

        ?>
<div class="pt-3 slice slice-sm bg-section-secondary">
    <div class=container>
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class=card>
                    <div class=card-body>
                        <div class="row justify-content-center">
                            <p class="mb-5 mt-4 h2 mx-5">Book Info</p>
                        </div>
                        <form method="POST">
                            <div class="row p-3 mx-3">
                                <div class=col-md-3>
                                    <div class=form-group><label class=form-control-label>Book ID</label> <input min=0
                                            step=1 class=form-control type=number name="bid"></div>
                                </div>
                                <div class=col-md-6>
                                    <div class=form-group><label class=form-control-label>Book Name</label> <input
                                            class=form-control type=text placeholder="Enter book name" name="b_name">
                                    </div>
                                </div>

                                <div class=col-md-3>
                                    <div class=form-group><label class=form-control-label>Quantity</label> <input min=0
                                            step=1 class=form-control type=number name="quantity"></div>
                                </div>
                            </div>

                            <div class="row p-3 mx-3">
                                <div class=col-md-6>
                                    <div class=form-group><label class=form-control-label>Author Name</label> <input
                                            class=form-control type=text placeholder="Enter author name" name="a_name">
                                    </div>
                                </div>
                                <div class=col-md-6>
                                    <div class=form-group><label class=form-control-label>Publisher Name</label> <input
                                            class=form-control type=text placeholder="Enter publisher name"
                                            name="p_name"></div>
                                </div>

                            </div>
                            <div class="row justify-content-center my-3">
                                <button type=submit class="btn btn-sm btn-primary" name="submit">Add Book</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
if(isset($_POST['submit']))
{
    if(isset($_SESSION['login_user']))
    {
        mysqli_query($db,"INSERT INTO books VALUES ('$_POST[bid]','$_POST[b_name]','$_POST[a_name]','$_POST[p_name]','$_POST[quantity]');")
?>
    <script typpe="text/javascript">
        alert("book added succesfully");
    </script>
    <?php
 }
 else
 {
?>
    <script typpe="text/javascript">
        alert("you need to log in first.");
    </script>
    <?php
 }
}
?>
</div>
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