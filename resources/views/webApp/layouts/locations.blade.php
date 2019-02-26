<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Design System for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Argon Design System - Free Design System for Bootstrap 4</title>
    <!-- Favicon -->
    <link href="assets/img/brand/favicon.png" rel="icon" type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Argon CSS -->
    <link type="text/css" href="assets/css/argon.css?v=1.0.0" rel="stylesheet">
    <!-- Docs CSS -->
    <link type="text/css" href="assets/css/docs.min.css" rel="stylesheet">
    <link type="text/css" href="assets/css/style.css" rel="stylesheet">
</head>

<body>

<div class="desktop"  id="nav-main">

    <img id="image-profile" src="/assets/img/1.png" alt="">
    <ul style="margin-top: 60px" id="list-menu">
        <li  data-toggle="tooltip" data-placement="left" title="پروفایل " data-container="body" data-animation="true" data-delay="100">
            <img src="/assets/img/icons/user.png" class="icon" />
        </li>
        <li data-toggle="tooltip" data-placement="left" title="مکان ها" data-container="body" data-animation="true" data-delay="100" id="select-menu-li">
            <img id="select-menu-img" src="/assets/img/icons/navigation.png" class="icon" />
        </li>
        <li  data-toggle="tooltip" data-placement="left" title="محبوب ترین ها" data-container="body" data-animation="true" data-delay="100">
            <img src="/assets/img/icons/like.png" class="icon" />
        </li>
        <li  data-toggle="tooltip" data-placement="left" title="جستجو" data-container="body" data-animation="true" data-delay="100">
            <img src="/assets/img/icons/search.png" class="icon" />
        </li>
        <li  data-toggle="tooltip" data-placement="left" title="خروج" data-container="body" data-animation="true" data-delay="100">
            <img src="/assets/img/icons/logout.png" class="icon" />
        </li>

    </ul>


</div>
<div  id="body">
    <div style="height: 20px"></div>
    <table style="direction: rtl">
        <tr>
            <td>
                <h2 class="title-part">رستوران ها</h2>
            </td>
            <td>
                <input placeholder="نام مکان را وارد نمایید" class="search" type="search" name="" id="">
            </td>
            <td>
                <span>فیلتر مکان ها</span>
                <img class="img-filter" src="/assets/img/icons/funnel.png" alt="">
            </td>
            <td>
                <a href="/addLocation" >
                <button  type="button" class="btn btn-success desktop">اضافه کردن مکان</button>
                </a>
            </td>
        </tr>
    </table>
    <div class="col-lg-12">
        <div class="row row-grid">
            <div class="col-lg-4">
                <div class="card card-lift--hover shadow border-0">
                    <div class="container-img">
                        <img src="/assets/img/test.jpg" alt="">
                        <ul>
                            <li>
                                <h6 class="text-uppercase">رستوران نشاط</h6>
                            </li>
                            <li>
                                <h5 class="text-uppercase">
                                    <span>استان تهران</span>
                                    <span> ، </span>
                                    <span>شهر تهران</span>
                                </h5>
                            </li>
                        </ul>


                    </div>
                    <div class="card-body py-5">

                        <p class="description mt-3">
                            از بناهای قدیمی و ارزشمند تهران قدیم عماری و هنر به کار رفته در ساخت آن و چه از نظر موقعیت کنونی
                        </p>
                        <div>
                            <span class="badge badge-pill badge-primary">اتوبوس</span>
                            <span class="badge badge-pill badge-primary">تاکسی</span>
                            <span class="badge badge-pill badge-primary">مترو</span>

                            <span class="options" style="float: left">
                                <img src="/assets/img/icons/location/chat.png" alt="">
                                <img src="/assets/img/icons/location/like.png" alt="">
                            </span>
                        </div>
                        <div class="adviser">
                            <h6 style="    font-family: aviny;font-size: 19px;">مشاوران این مکان</h6>
                            <img data-toggle="tooltip" data-placement="bottom" title="حسین فراهانی" data-container="body" data-animation="true" src="../assets/img/theme/team-1-800x800.jpg" class="rounded-circle img-fluid shadow shadow-lg--hover" style="width: 50px;">
                            <img data-toggle="tooltip" data-placement="bottom" title="ساناز ایمانی" data-container="body" data-animation="true" src="../assets/img/theme/team-2-800x800.jpg" class="rounded-circle img-fluid shadow shadow-lg--hover" style="width: 50px;">
                            <img data-toggle="tooltip" data-placement="bottom" title="علی اکبری" data-container="body" data-animation="true" src="../assets/img/theme/team-3-800x800.jpg" class="rounded-circle img-fluid shadow shadow-lg--hover" style="width: 50px;">
                            <img data-toggle="tooltip" data-placement="bottom" title="محمد محدی" data-container="body" data-animation="true" src="../assets/img/theme/team-4-800x800.jpg" class="rounded-circle img-fluid shadow shadow-lg--hover" style="width: 50px;">
                            <span class="price">2000 تومان</span>
                        </div>
                        <a href="#" class="visit-location btn btn-primary mt-4">مشاهده جزئیات</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card card-lift--hover shadow border-0">
                    <div class="container-img">
                        <img src="/assets/img/test.jpg" alt="">
                        <ul>
                            <li>
                                <h6 class="text-uppercase">رستوران نشاط</h6>
                            </li>
                            <li>
                                <h5 class="text-uppercase">
                                    <span>استان تهران</span>
                                    <span> ، </span>
                                    <span>شهر تهران</span>
                                </h5>
                            </li>
                        </ul>


                    </div>
                    <div class="card-body py-5">

                        <p class="description mt-3">
                            از بناهای قدیمی و ارزشمند تهران قدیم عماری و هنر به کار رفته در ساخت آن و چه از نظر موقعیت کنونی
                        </p>
                        <div>
                            <span class="badge badge-pill badge-primary">اتوبوس</span>
                            <span class="badge badge-pill badge-primary">تاکسی</span>
                            <span class="badge badge-pill badge-primary">مترو</span>

                            <span class="options" style="float: left">
                                <img src="/assets/img/icons/location/chat.png" alt="">
                                <img src="/assets/img/icons/location/like.png" alt="">
                            </span>
                        </div>
                        <div class="adviser">
                            <h6 style="    font-family: aviny;font-size: 19px;">مشاوران این مکان</h6>
                            <img data-toggle="tooltip" data-placement="bottom" title="حسین فراهانی" data-container="body" data-animation="true" src="../assets/img/theme/team-1-800x800.jpg" class="rounded-circle img-fluid shadow shadow-lg--hover" style="width: 50px;">
                            <img data-toggle="tooltip" data-placement="bottom" title="ساناز ایمانی" data-container="body" data-animation="true" src="../assets/img/theme/team-2-800x800.jpg" class="rounded-circle img-fluid shadow shadow-lg--hover" style="width: 50px;">
                            <img data-toggle="tooltip" data-placement="bottom" title="علی اکبری" data-container="body" data-animation="true" src="../assets/img/theme/team-3-800x800.jpg" class="rounded-circle img-fluid shadow shadow-lg--hover" style="width: 50px;">
                            <img data-toggle="tooltip" data-placement="bottom" title="محمد محدی" data-container="body" data-animation="true" src="../assets/img/theme/team-4-800x800.jpg" class="rounded-circle img-fluid shadow shadow-lg--hover" style="width: 50px;">
                            <span class="price">2000 تومان</span>
                        </div>
                        <a href="#" class="visit-location btn btn-primary mt-4">مشاهده جزئیات</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card card-lift--hover shadow border-0">
                    <div class="container-img">
                        <img src="/assets/img/test.jpg" alt="">
                        <ul>
                            <li>
                                <h6 class="text-uppercase">رستوران نشاط</h6>
                            </li>
                            <li>
                                <h5 class="text-uppercase">
                                    <span>استان تهران</span>
                                    <span> ، </span>
                                    <span>شهر تهران</span>
                                </h5>
                            </li>
                        </ul>


                    </div>
                    <div class="card-body py-5">

                        <p class="description mt-3">
                            از بناهای قدیمی و ارزشمند تهران قدیم عماری و هنر به کار رفته در ساخت آن و چه از نظر موقعیت کنونی
                        </p>
                        <div>
                            <span class="badge badge-pill badge-primary">اتوبوس</span>
                            <span class="badge badge-pill badge-primary">تاکسی</span>
                            <span class="badge badge-pill badge-primary">مترو</span>

                            <span class="options" style="float: left">
                                <img src="/assets/img/icons/location/chat.png" alt="">
                                <img src="/assets/img/icons/location/like.png" alt="">
                            </span>
                        </div>
                        <div class="adviser">
                            <h6 style="    font-family: aviny;font-size: 19px;">مشاوران این مکان</h6>
                            <img data-toggle="tooltip" data-placement="bottom" title="حسین فراهانی" data-container="body" data-animation="true" src="../assets/img/theme/team-1-800x800.jpg" class="rounded-circle img-fluid shadow shadow-lg--hover" style="width: 50px;">
                            <img data-toggle="tooltip" data-placement="bottom" title="ساناز ایمانی" data-container="body" data-animation="true" src="../assets/img/theme/team-2-800x800.jpg" class="rounded-circle img-fluid shadow shadow-lg--hover" style="width: 50px;">
                            <img data-toggle="tooltip" data-placement="bottom" title="علی اکبری" data-container="body" data-animation="true" src="../assets/img/theme/team-3-800x800.jpg" class="rounded-circle img-fluid shadow shadow-lg--hover" style="width: 50px;">
                            <img data-toggle="tooltip" data-placement="bottom" title="محمد محدی" data-container="body" data-animation="true" src="../assets/img/theme/team-4-800x800.jpg" class="rounded-circle img-fluid shadow shadow-lg--hover" style="width: 50px;">
                            <span class="price">2000 تومان</span>
                        </div>
                        <a href="#" class="visit-location btn btn-primary mt-4">مشاهده جزئیات</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="seprate">
        <div class="fill-seprate"></div>
    </div>


    <div class="col-lg-12">
        <div class="row row-grid">
            <div class="col-lg-4">
                <div class="card card-lift--hover shadow border-0">
                    <div class="container-img">
                        <img src="/assets/img/test.jpg" alt="">
                        <ul>
                            <li>
                                <h6 class="text-uppercase">رستوران نشاط</h6>
                            </li>
                            <li>
                                <h5 class="text-uppercase">
                                    <span>استان تهران</span>
                                    <span> ، </span>
                                    <span>شهر تهران</span>
                                </h5>
                            </li>
                        </ul>


                    </div>
                    <div class="card-body py-5">

                        <p class="description mt-3">
                            از بناهای قدیمی و ارزشمند تهران قدیم عماری و هنر به کار رفته در ساخت آن و چه از نظر موقعیت کنونی
                        </p>
                        <div>
                            <span class="badge badge-pill badge-primary">اتوبوس</span>
                            <span class="badge badge-pill badge-primary">تاکسی</span>
                            <span class="badge badge-pill badge-primary">مترو</span>

                            <span class="options" style="float: left">
                                <img src="/assets/img/icons/location/chat.png" alt="">
                                <img src="/assets/img/icons/location/like.png" alt="">
                            </span>
                        </div>
                        <div class="adviser">
                            <h6 style="    font-family: aviny;font-size: 19px;">مشاوران این مکان</h6>
                            <img data-toggle="tooltip" data-placement="bottom" title="حسین فراهانی" data-container="body" data-animation="true" src="../assets/img/theme/team-1-800x800.jpg" class="rounded-circle img-fluid shadow shadow-lg--hover" style="width: 50px;">
                            <img data-toggle="tooltip" data-placement="bottom" title="ساناز ایمانی" data-container="body" data-animation="true" src="../assets/img/theme/team-2-800x800.jpg" class="rounded-circle img-fluid shadow shadow-lg--hover" style="width: 50px;">
                            <img data-toggle="tooltip" data-placement="bottom" title="علی اکبری" data-container="body" data-animation="true" src="../assets/img/theme/team-3-800x800.jpg" class="rounded-circle img-fluid shadow shadow-lg--hover" style="width: 50px;">
                            <img data-toggle="tooltip" data-placement="bottom" title="محمد محدی" data-container="body" data-animation="true" src="../assets/img/theme/team-4-800x800.jpg" class="rounded-circle img-fluid shadow shadow-lg--hover" style="width: 50px;">
                            <span class="price">2000 تومان</span>
                        </div>
                        <a href="#" class="visit-location btn btn-primary mt-4">مشاهده جزئیات</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card card-lift--hover shadow border-0">
                    <div class="container-img">
                        <img src="/assets/img/test.jpg" alt="">
                        <ul>
                            <li>
                                <h6 class="text-uppercase">رستوران نشاط</h6>
                            </li>
                            <li>
                                <h5 class="text-uppercase">
                                    <span>استان تهران</span>
                                    <span> ، </span>
                                    <span>شهر تهران</span>
                                </h5>
                            </li>
                        </ul>


                    </div>
                    <div class="card-body py-5">

                        <p class="description mt-3">
                            از بناهای قدیمی و ارزشمند تهران قدیم عماری و هنر به کار رفته در ساخت آن و چه از نظر موقعیت کنونی
                        </p>
                        <div>
                            <span class="badge badge-pill badge-primary">اتوبوس</span>
                            <span class="badge badge-pill badge-primary">تاکسی</span>
                            <span class="badge badge-pill badge-primary">مترو</span>

                            <span class="options" style="float: left">
                                <img src="/assets/img/icons/location/chat.png" alt="">
                                <img src="/assets/img/icons/location/like.png" alt="">
                            </span>
                        </div>
                        <div class="adviser">
                            <h6 style="    font-family: aviny;font-size: 19px;">مشاوران این مکان</h6>
                            <img data-toggle="tooltip" data-placement="bottom" title="حسین فراهانی" data-container="body" data-animation="true" src="../assets/img/theme/team-1-800x800.jpg" class="rounded-circle img-fluid shadow shadow-lg--hover" style="width: 50px;">
                            <img data-toggle="tooltip" data-placement="bottom" title="ساناز ایمانی" data-container="body" data-animation="true" src="../assets/img/theme/team-2-800x800.jpg" class="rounded-circle img-fluid shadow shadow-lg--hover" style="width: 50px;">
                            <img data-toggle="tooltip" data-placement="bottom" title="علی اکبری" data-container="body" data-animation="true" src="../assets/img/theme/team-3-800x800.jpg" class="rounded-circle img-fluid shadow shadow-lg--hover" style="width: 50px;">
                            <img data-toggle="tooltip" data-placement="bottom" title="محمد محدی" data-container="body" data-animation="true" src="../assets/img/theme/team-4-800x800.jpg" class="rounded-circle img-fluid shadow shadow-lg--hover" style="width: 50px;">
                            <span class="price">2000 تومان</span>
                        </div>
                        <a href="#" class="visit-location btn btn-primary mt-4">مشاهده جزئیات</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card card-lift--hover shadow border-0">
                    <div class="container-img">
                        <img src="/assets/img/test.jpg" alt="">
                        <ul>
                            <li>
                                <h6 class="text-uppercase">رستوران نشاط</h6>
                            </li>
                            <li>
                                <h5 class="text-uppercase">
                                    <span>استان تهران</span>
                                    <span> ، </span>
                                    <span>شهر تهران</span>
                                </h5>
                            </li>
                        </ul>


                    </div>
                    <div class="card-body py-5">

                        <p class="description mt-3">
                            از بناهای قدیمی و ارزشمند تهران قدیم عماری و هنر به کار رفته در ساخت آن و چه از نظر موقعیت کنونی
                        </p>
                        <div>
                            <span class="badge badge-pill badge-primary">اتوبوس</span>
                            <span class="badge badge-pill badge-primary">تاکسی</span>
                            <span class="badge badge-pill badge-primary">مترو</span>

                            <span class="options" style="float: left">
                                <img src="/assets/img/icons/location/chat.png" alt="">
                                <img src="/assets/img/icons/location/like.png" alt="">
                            </span>
                        </div>
                        <div class="adviser">
                            <h6 style="    font-family: aviny;font-size: 19px;">مشاوران این مکان</h6>
                            <img data-toggle="tooltip" data-placement="bottom" title="حسین فراهانی" data-container="body" data-animation="true" src="../assets/img/theme/team-1-800x800.jpg" class="rounded-circle img-fluid shadow shadow-lg--hover" style="width: 50px;">
                            <img data-toggle="tooltip" data-placement="bottom" title="ساناز ایمانی" data-container="body" data-animation="true" src="../assets/img/theme/team-2-800x800.jpg" class="rounded-circle img-fluid shadow shadow-lg--hover" style="width: 50px;">
                            <img data-toggle="tooltip" data-placement="bottom" title="علی اکبری" data-container="body" data-animation="true" src="../assets/img/theme/team-3-800x800.jpg" class="rounded-circle img-fluid shadow shadow-lg--hover" style="width: 50px;">
                            <img data-toggle="tooltip" data-placement="bottom" title="محمد محدی" data-container="body" data-animation="true" src="../assets/img/theme/team-4-800x800.jpg" class="rounded-circle img-fluid shadow shadow-lg--hover" style="width: 50px;">
                            <span class="price">2000 تومان</span>
                        </div>
                        <a href="#" class="visit-location btn btn-primary mt-4">مشاهده جزئیات</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="seprate">
        <div class="fill-seprate"></div>
    </div>


    <h2 class="title-part">بناهای تاریخی</h2>
    <div class="col-lg-12">
        <div class="row row-grid">
            <div class="col-lg-4">
                <div class="card card-lift--hover shadow border-0">
                    <div class="container-img">
                        <img src="/assets/img/test.jpg" alt="">
                        <ul>
                            <li>
                                <h6 class="text-uppercase">رستوران نشاط</h6>
                            </li>
                            <li>
                                <h5 class="text-uppercase">
                                    <span>استان تهران</span>
                                    <span> ، </span>
                                    <span>شهر تهران</span>
                                </h5>
                            </li>
                        </ul>


                    </div>
                    <div class="card-body py-5">

                        <p class="description mt-3">
                            از بناهای قدیمی و ارزشمند تهران قدیم عماری و هنر به کار رفته در ساخت آن و چه از نظر موقعیت کنونی
                        </p>
                        <div>
                            <span class="badge badge-pill badge-primary">اتوبوس</span>
                            <span class="badge badge-pill badge-primary">تاکسی</span>
                            <span class="badge badge-pill badge-primary">مترو</span>

                            <span class="options" style="float: left">
                                <img src="/assets/img/icons/location/chat.png" alt="">
                                <img src="/assets/img/icons/location/like.png" alt="">
                            </span>
                        </div>
                        <div class="adviser">
                            <h6 style="    font-family: aviny;font-size: 19px;">مشاوران این مکان</h6>
                            <img data-toggle="tooltip" data-placement="bottom" title="حسین فراهانی" data-container="body" data-animation="true" src="../assets/img/theme/team-1-800x800.jpg" class="rounded-circle img-fluid shadow shadow-lg--hover" style="width: 50px;">
                            <img data-toggle="tooltip" data-placement="bottom" title="ساناز ایمانی" data-container="body" data-animation="true" src="../assets/img/theme/team-2-800x800.jpg" class="rounded-circle img-fluid shadow shadow-lg--hover" style="width: 50px;">
                            <img data-toggle="tooltip" data-placement="bottom" title="علی اکبری" data-container="body" data-animation="true" src="../assets/img/theme/team-3-800x800.jpg" class="rounded-circle img-fluid shadow shadow-lg--hover" style="width: 50px;">
                            <img data-toggle="tooltip" data-placement="bottom" title="محمد محدی" data-container="body" data-animation="true" src="../assets/img/theme/team-4-800x800.jpg" class="rounded-circle img-fluid shadow shadow-lg--hover" style="width: 50px;">
                            <span class="price">2000 تومان</span>
                        </div>
                        <a href="#" class="visit-location btn btn-primary mt-4">مشاهده جزئیات</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card card-lift--hover shadow border-0">
                    <div class="container-img">
                        <img src="/assets/img/test.jpg" alt="">
                        <ul>
                            <li>
                                <h6 class="text-uppercase">رستوران نشاط</h6>
                            </li>
                            <li>
                                <h5 class="text-uppercase">
                                    <span>استان تهران</span>
                                    <span> ، </span>
                                    <span>شهر تهران</span>
                                </h5>
                            </li>
                        </ul>


                    </div>
                    <div class="card-body py-5">

                        <p class="description mt-3">
                            از بناهای قدیمی و ارزشمند تهران قدیم عماری و هنر به کار رفته در ساخت آن و چه از نظر موقعیت کنونی
                        </p>
                        <div>
                            <span class="badge badge-pill badge-primary">اتوبوس</span>
                            <span class="badge badge-pill badge-primary">تاکسی</span>
                            <span class="badge badge-pill badge-primary">مترو</span>

                            <span class="options" style="float: left">
                                <img src="/assets/img/icons/location/chat.png" alt="">
                                <img src="/assets/img/icons/location/like.png" alt="">
                            </span>
                        </div>
                        <div class="adviser">
                            <h6 style="    font-family: aviny;font-size: 19px;">مشاوران این مکان</h6>
                            <img data-toggle="tooltip" data-placement="bottom" title="حسین فراهانی" data-container="body" data-animation="true" src="../assets/img/theme/team-1-800x800.jpg" class="rounded-circle img-fluid shadow shadow-lg--hover" style="width: 50px;">
                            <img data-toggle="tooltip" data-placement="bottom" title="ساناز ایمانی" data-container="body" data-animation="true" src="../assets/img/theme/team-2-800x800.jpg" class="rounded-circle img-fluid shadow shadow-lg--hover" style="width: 50px;">
                            <img data-toggle="tooltip" data-placement="bottom" title="علی اکبری" data-container="body" data-animation="true" src="../assets/img/theme/team-3-800x800.jpg" class="rounded-circle img-fluid shadow shadow-lg--hover" style="width: 50px;">
                            <img data-toggle="tooltip" data-placement="bottom" title="محمد محدی" data-container="body" data-animation="true" src="../assets/img/theme/team-4-800x800.jpg" class="rounded-circle img-fluid shadow shadow-lg--hover" style="width: 50px;">
                            <span class="price">2000 تومان</span>
                        </div>
                        <a href="#" class="visit-location btn btn-primary mt-4">مشاهده جزئیات</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card card-lift--hover shadow border-0">
                    <div class="container-img">
                        <img src="/assets/img/test.jpg" alt="">
                        <ul>
                            <li>
                                <h6 class="text-uppercase">رستوران نشاط</h6>
                            </li>
                            <li>
                                <h5 class="text-uppercase">
                                    <span>استان تهران</span>
                                    <span> ، </span>
                                    <span>شهر تهران</span>
                                </h5>
                            </li>
                        </ul>


                    </div>
                    <div class="card-body py-5">

                        <p class="description mt-3">
                            از بناهای قدیمی و ارزشمند تهران قدیم عماری و هنر به کار رفته در ساخت آن و چه از نظر موقعیت کنونی
                        </p>
                        <div>
                            <span class="badge badge-pill badge-primary">اتوبوس</span>
                            <span class="badge badge-pill badge-primary">تاکسی</span>
                            <span class="badge badge-pill badge-primary">مترو</span>

                            <span class="options" style="float: left">
                                <img src="/assets/img/icons/location/chat.png" alt="">
                                <img src="/assets/img/icons/location/like.png" alt="">
                            </span>
                        </div>
                        <div class="adviser">
                            <h6 style="    font-family: aviny;font-size: 19px;">مشاوران این مکان</h6>
                            <img data-toggle="tooltip" data-placement="bottom" title="حسین فراهانی" data-container="body" data-animation="true" src="../assets/img/theme/team-1-800x800.jpg" class="rounded-circle img-fluid shadow shadow-lg--hover" style="width: 50px;">
                            <img data-toggle="tooltip" data-placement="bottom" title="ساناز ایمانی" data-container="body" data-animation="true" src="../assets/img/theme/team-2-800x800.jpg" class="rounded-circle img-fluid shadow shadow-lg--hover" style="width: 50px;">
                            <img data-toggle="tooltip" data-placement="bottom" title="علی اکبری" data-container="body" data-animation="true" src="../assets/img/theme/team-3-800x800.jpg" class="rounded-circle img-fluid shadow shadow-lg--hover" style="width: 50px;">
                            <img data-toggle="tooltip" data-placement="bottom" title="محمد محدی" data-container="body" data-animation="true" src="../assets/img/theme/team-4-800x800.jpg" class="rounded-circle img-fluid shadow shadow-lg--hover" style="width: 50px;">
                            <span class="price">2000 تومان</span>
                        </div>
                        <a href="#" class="visit-location btn btn-primary mt-4">مشاهده جزئیات</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="seprate">
        <div class="fill-seprate"></div>
    </div>
    <div style="height: 100px"></div>

    <a href="addLocation" type="button" class="btn btn-success mobile add-location" style="">+</a>

</div>



</div>



<!-- Core -->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/popper/popper.min.js"></script>
<script src="assets/vendor/bootstrap/bootstrap.min.js"></script>
<script src="assets/vendor/headroom/headroom.min.js"></script>
<!-- Optional JS -->
<script src="assets/vendor/onscreen/onscreen.min.js"></script>
<script src="assets/vendor/nouislider/js/nouislider.min.js"></script>
<script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<!-- Argon JS -->
<script src="assets/js/argon.js?v=1.0.0"></script>
</body>

</html>