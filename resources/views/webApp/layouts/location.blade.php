<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Design System for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>ویسیر، شبکه اجتماعی گردش و سفر</title>
    <!-- Favicon -->
    <link href="/assets/img/brand/favicon.png" rel="icon" type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="/assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
    <link href="/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Argon CSS -->
    <link type="text/css" href="/assets/css/argon.css?v=1.0.0" rel="stylesheet">
    <!-- Docs CSS -->
    <link type="text/css" href="/assets/css/docs.min.css" rel="stylesheet">
    <link type="text/css" href="/assets/css/style.css" rel="stylesheet">
    <link type="text/css" href="/assets/css/location.css" rel="stylesheet">
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


    <ul id="list-menu">
        <li  data-toggle="tooltip" data-placement="left" title="دانلود اپلیکیشن اندروید " data-container="body" data-animation="true" data-delay="100">
            <img src="/assets/img/icons/google-play.png" class="icon" />
        </li>
        <li  data-toggle="tooltip" data-placement="left" title="دانلود اپلیکیشن ios " data-container="body" data-animation="true" data-delay="100">
            <img src="/assets/img/icons/app-store.png" class="icon" />
        </li>

    </ul>

</div>
<div  id="body">
    <div style="height: 20px"></div>

    <div class="col-lg-12">
        <div class="row row-grid">

            <div class="col-lg-12">


                <div class="card shadow border-0">
                    <div style="padding: 0;padding-bottom: 0px !important;" class="card-body py-5">

                        <div class="row">
                            <div class="col-lg-8 mb-lg-auto" style="
        padding: 0;
    ">
                                <div class=" overflow-hidden ">
                                    <div id="carousel_example" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <?php $i=0; ?>
                                            @foreach($result->images as $image)
                                                @if($i==0)
                                                    <li data-target="#carousel_example" data-slide-to="1" class="active"></li>
                                                @else
                                                    <li data-target="#carousel_example" data-slide-to="0" class=""></li>
                                                @endif
                                                <?php $i++ ?>
                                            @endforeach
                                        </ol>
                                        <div class="carousel-inner">
                                            <?php $i=0; ?>
                                            @foreach($result->images as $image)
                                                @if($i==0)
                                                        <div class="carousel-item active">
                                                            <img itemprop="image" style="width: 100%;height: 681px;" class="img-fluid" src="{{$image->image_path}}" alt="{{$result->location_name}}">
                                                        </div>
                                                @else
                                                        <div class="carousel-item">
                                                            <img itemprop="image" style="width: 100%;height: 681px;" class="img-fluid" src="{{$image->image_path}}" alt="{{$result->location_name}}">
                                                        </div>
                                                @endif
                                                <?php $i++ ?>
                                            @endforeach
                                        </div>
                                        <a class="carousel-control-prev" href="#carousel_example" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carousel_example" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div id="information-lg" class="col-lg-4">
                                <div id="information-user" style="padding-top: 10px;" class="row">
                                    <div class="col-lg-3">
                                        <img src="/assets/img/theme/team-2-800x800.jpg" alt="Circle image" class="img-fluid rounded-circle" style="/* width: 99px; */height: 70px;">
                                    </div>
                                    <div id="writer" class="col-lg-8">
                                        <h6 >نام فرد</h6>
                                        <h7>اطلاعاتی در مورد شخص</h7>
                                    </div>
                                </div>

                                <div class="row" style="margin: 10px 0;">
                                    <div itemtype="http://schema.org/TouristAttraction" itemscope style="padding-left: 0;" id="name" class="col-lg-6" >
                                        <h4 itemprop="name" style="margin-bottom: -11px;font-size: 19px;">{{$result->location_name}}</h4>
                                        <meta itemprop="alternateName" content="{{$result->location_name." در ".$result->city}}" />
                                        <span itemprop="addressRegion">{{$result->state}}</span> ,
                                        <span itemprop="addressLocality">{{$result->city}}</span>
                                    </div>
                                     <div itemprop="offers" itemscope itemtype="http://schema.org/Offer" id="price" class="col-lg-6">
                                        <h6 itemprop="price" >{{$result->price}} تومان</h6>
                                    </div>
                                </div>
                                <div id="transport" style="padding: 0 15px;" class="row">
                                    <h5 >امکانات حمل و نقل</h5>
                                    <div>
                                        @foreach($result->transfers as $item)
                                            <img data-toggle="tooltip" data-placement="bottom" title="" data-container="body" data-animation="true" data-delay="100" data-original-title="{{$item->title}}" src="{{$item->image_path}}" alt="">
                                        @endforeach
                                    </div>
                                </div>
                                <div id="transport" style="padding: 0 15px;" class="row">
                                    <h5 style="margin-top: 10px;" >امکانات تفریحی</h5>
                                    <div>
                                        @foreach($result->entertainments as $item)
                                        <img data-toggle="tooltip" data-placement="bottom" title="" data-container="body" data-animation="true" data-delay="100" data-original-title="{{$item->title}}" src="{{$item->image_path}}" alt="">
                                        @endforeach
                                    </div>

                                </div>

                                <div style="padding-left: 15px;" class="row">
                                    <h5 style="margin-top: 10px;padding-right: 15px;width: 100%;font-size: 15px;font-family: iran-medium;margin-bottom: 11px;">آدرس مکان</h5>
                                    <img id="image-map" src="/assets/img/icons/location/map.jpg" alt="">
                                    <div style="width: 100%;" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress" id="address-text">
                                        <h5 style="padding:0 15px;margin-top: 5px;text-align: center" itemprop="addressLocality">تهران مطهری تقاطع شیرازی</h5>
                                    </div>
                                    <div itemprop="geo" itemtype="http://schema.org/GeoCoordinates" itemscope>
                                        <meta itemprop="latitude" content="{{$result->lat}}" />
                                        <meta itemprop="longitude" content="{{$result->long}}" />
                                    </div>
                                </div>

                                <div class="adviser">
                                    <h6 style="    font-family: iran-medium;font-size: 15px;">مشاوران این مکان</h6>
                                    <img data-toggle="tooltip" data-placement="bottom" title="" data-container="body" data-animation="true" src="../assets/img/theme/team-1-800x800.jpg" class="rounded-circle img-fluid" style="width: 50px;" data-original-title="حسین فراهانی">
                                    <img data-toggle="tooltip" data-placement="bottom" title="" data-container="body" data-animation="true" src="../assets/img/theme/team-2-800x800.jpg" class="rounded-circle img-fluid" style="width: 50px;" data-original-title="ساناز ایمانی">
                                    <img data-toggle="tooltip" data-placement="bottom" title="" data-container="body" data-animation="true" src="../assets/img/theme/team-3-800x800.jpg" class="rounded-circle img-fluid" style="width: 50px;" data-original-title="علی اکبری">
                                    <img data-toggle="tooltip" data-placement="bottom" title="" data-container="body" data-animation="true" src="../assets/img/theme/team-4-800x800.jpg" class="rounded-circle img-fluid" style="width: 50px;" data-original-title="محمد محدی">
                                </div>

                                <div id="information" class="row">
                                    <h4>

                                        <div itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating" style="display: inline-block" id="star">
                                            <meta itemprop="ratingValue" content="4">
                                            <meta itemprop="reviewCount" content="7">
                                            <img src="/assets/img/icons/star.png" alt="">
                                            <img src="/assets/img/icons/star.png" alt="">
                                            <img src="/assets/img/icons/star-fill.png" alt="">
                                            <img src="/assets/img/icons/star-fill.png" alt="">
                                            <img src="/assets/img/icons/star-fill.png" alt="">
                                        </div>
                                        <div id="like-comment">
                                            <span>{{$result->comments_count}}</span>
                                            <img src="/assets/img/icons/like.png" alt="لایک">
                                            <span style="margin-right:15px;">{{$result->likes_count}}</span>
                                            <img src="/assets/img/icons/chat.png" alt="نظرات">
                                        </div>
                                    </h4>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>


                <div class="card shadow border-0" style="margin: 10px 0;">
                    <div style="padding: 0;padding-bottom: 0px !important;" class="card-body py-5">
                        <div style="position: relative" class="row">

                        @if(isset($result->work_time))
                        @if($result->work_time[0]['sunday']!='null')
                            <?php $item = $result->work_time[0]; ?>
                            <div itemtype="http://schema.org/TouristAttraction" itemscope id="time-tel" style="padding: 20px 30px 0 30px;" class="col-lg-12">


                                    <ul style="direction: rtl;padding-right:5px; ">
                                        <li><img src="/assets/img/icons/time-work.png" alt="ساعت کاری"></li>
                                        <li>
                                            <h6>شنبه</h6>
                                            <h6>{{$item['sunday']}}</h6>
                                            <meta itemprop="openingHours" content="Su 10:00-19:00"/>
                                        </li>
                                        <li>
                                            <h6>یکشنبه</h6>
                                            <h6>{{$item['saturday']}}</h6>
                                            <meta itemprop="openingHours" content="Sa 10:00-19:00"/>
                                        </li>
                                        <li>
                                            <h6>دوشنبه</h6>
                                            <h6>{{$item['monday']}}</h6>
                                            <meta itemprop="openingHours" content="Mo 10:00-19:00"/>
                                        </li>
                                        <li>
                                            <h6>سه شنبه</h6>
                                            <h6>{{$item['tuesday']}}</h6>
                                            <meta itemprop="openingHours" content="Tu 10:00-19:00"/>
                                        </li>
                                        <li>
                                            <h6>چهارشنبه</h6>
                                            <h6>{{$item['wednesday']}}</h6>
                                            <meta itemprop="openingHours" content="We 10:00-19:00"/>
                                        </li>
                                        <li>
                                            <h6>پنج شنبه</h6>
                                            <h6>{{$item['thursday']}}</h6>
                                            <meta itemprop="openingHours" content="Th 10:00-19:00"/>
                                        </li>
                                        <li>
                                            <h6>جمعه</h6>
                                            <h6>{{$item['friday']}}</h6>
                                            <meta itemprop="openingHours" content="Fr 10:00-19:00"/>
                                        </li>
                                    </ul>

                                    <button itemprop="telephone"  style="vertical-align: 7px;" type="button" class="btn btn-outline-primary">شماره تماس : {{$result->tel}}</button>
                            </div>
                            @else
                                 <meta itemprop="publicAccess" content="true" />
                            @endif
                        @endif

                        </div>
                    </div>
                </div>

                <div class="card shadow border-0" style="
    margin: 10px 0;
">

                    <div style="padding: 0;padding-bottom: 0px !important;" class="card-body py-5">

                        <div class="row">

                            <div itemscope itemtype="http://schema.org/TouristAttraction" id="content" style="padding: 30px;" class="col-lg-8">
                                <h1 itemprop="name" style="margin-bottom: 15px;">{{$result->location_name}}</h1>
                                @foreach($result->infos as $content)
                                <h2>{{$content->title}}</h2>
                                <p itemprop="description">{{$content->description}}</p>
                                @endforeach
                            </div>

                            <div id="sidebar-content" class="col-lg-4">
                                <div id="comments">
                                    <div style="padding-top: 10px;" class="row">
                                        <div class="col-lg-3">
                                            <img src="/assets/img/theme/team-2-800x800.jpg" alt="Circle image" class="img-fluid rounded-circle" style="/* width: 99px; */height: 60px;">
                                        </div>
                                        <div id="writer" class="col-lg-8">
                                            <h6>نام فرد</h6>
                                            <p>اطلاعاتی در مورد شخص</p>
                                        </div>
                                    </div>
                                    <div style="padding-top: 10px;" class="row">
                                        <div class="col-lg-3">
                                            <img src="/assets/img/theme/team-2-800x800.jpg" alt="Circle image" class="img-fluid rounded-circle" style="/* width: 99px; */height: 60px;">
                                        </div>
                                        <div id="writer" class="col-lg-8">
                                            <h6>نام فرد</h6>
                                            <p>اطلاعاتی در مورد شخص</p>
                                        </div>
                                    </div>
                                </div>

                                <div style="height: 62px"></div>
                                <div id="send-text" class="row">
                                    <div style="width: 100%">
                                        <input  type="text">
                                        <img id="send-comment" src="/assets/img/icons/send.png" alt="">
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>


            </div>

        </div>

        <div style="height: 100px"></div>

    </div>

</div>



<!-- Core -->
<script src="/assets/vendor/jquery/jquery.min.js"></script>
<script src="/assets/vendor/popper/popper.min.js"></script>
<script src="/assets/vendor/bootstrap/bootstrap.min.js"></script>
<script src="/assets/vendor/headroom/headroom.min.js"></script>
<!-- Optional JS -->
<script src="/assets/vendor/onscreen/onscreen.min.js"></script>
<script src="/assets/vendor/nouislider/js/nouislider.min.js"></script>
<script src="/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<!-- Argon JS -->
<script src="/assets/js/argon.js?v=1.0.0"></script>



<script src="/assets/js/location_show.js"></script>
</body>

</html>