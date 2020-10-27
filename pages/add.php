<?php
include "connection.php";
include "navbar.php";
?>

    <section class="slice slice-lg py-7 py-lg-8 bg-cover bg-size--cover"
        style="background-image:url('../../libs/assets/img/backgrounds/p3.jpg')"> <span
            class="mask bg-dark opacity-9"></span>
<!-- searchbar start -->
        <div data-offset-top=#navbar-main>
            <div class="container pt-xl-4">
                <div class="row justify-content-center">
                    <div class=col-lg-9>
                        <h2 class="mb-4 text-center text-white">Search for the books</h2>
                        <form action="submit" method="POST">
                            <div class="form-group bg-neutral rounded-pill mb-0 px-2 py-2 shadow">
                                <div class=row>
                                    <div class=col>
                                        <div class="input-group input-group-merge shadow-none">
                                            <div class=input-group-prepend><span
                                                    class="input-group-text bg-transparent"><i
                                                        data-feather=search></i></span></div>
                                            <input type=text class="form-control form-control-flush shadow-none"
                                                placeholder="Enter name of the book">
                                        </div>
                                    </div>
                                    <div class=col-auto><button type=button
                                            class="btn btn-block btn-warning rounded-pill">Search</button></div>
                                </div>
                            </div>
                        </form>
                    </div>
 <!--searchbar end-->                   