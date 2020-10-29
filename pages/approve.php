<?php
include "connection.php";
include "navbar.php";
?>
<section class="slice slice-lg py-7 py-lg-8 bg-cover bg-size--cover"
    style="background-image:url('../../libs/assets/img/backgrounds/p3.jpg')"> <span
        class="mask bg-dark opacity-9"></span>
    <div data-offset-top=#navbar-main>
        <div class="container pt-xl-4">
            <div class="row justify-content-center">
                <div class=col-lg-9>
                    <h2 class="mb-4 text-center text-white">Approve requests</h2>
                    <form method="POST" name="form1">
                        <div class="form-group bg-neutral rounded-pill mb-0 px-2 py-2 shadow">
                            <div class=row>
                                <div class=col>
                                    <div class="input-group input-group-merge shadow-none">
                                        <input type=text class="form-control form-control-flush shadow-none"
                                            placeholder="Approve or not" name="email" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group bg-neutral rounded-pill mb-0 mt-3 px-2 py-2 shadow">
                            <div class=row>
                                <div class=col>
                                    <div class="input-group input-group-merge shadow-none">
                                        
                                        <input type=date class="form-control form-control-flush shadow-none"
                                            placeholder="Issue date DD-MM-YY" name=bookid required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group bg-neutral rounded-pill mb-0 mt-3 px-2 py-2 shadow">
                            <div class=row>
                                <div class=col>
                                    <div class="input-group input-group-merge shadow-none">

                                        <input type=date class="form-control form-control-flush shadow-none"
                                            placeholder="Return date DD-MM-YY" name=bookid required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row col-3 mt-3">
                            <button type=submit name="submit"
                                class="btn btn-block btn-warning rounded-pill">Approve</button>
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
</body>
</html>