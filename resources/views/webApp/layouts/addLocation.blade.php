<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Design System for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <meta name="_token" id="_token" content="{{ csrf_token() }}" />

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
    <link type="text/css" href="assets/css/addLocation.css" rel="stylesheet">
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

    <h4 class="title-main">اضافه کردن مکان</h4>

    <div class="seprate">
        <div class="fill-seprate"></div>
    </div>

    <div class="col-lg-12">
        <div class="row row-grid">
            <div class="col-lg-12">
                <div class="card shadow border-0">

                    <div class="card-body py-5">

                        <div style="    margin: 25px 0;" class="row images">
                            <h4 style="width: 100%;margin: 0px 0 15px 0;">تصاویر مکان</h4>

                            <div class="col-lg-4 col-sm-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="example3cols1Input">عکس اول</label>
                                    <input id="image-one" type="file" placeholder="عکس اول" class="form-control form-control-alternative image-location">
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="example3cols1Input">عکس دوم</label>
                                    <input id="image-two" type="file" placeholder="عکس اول" class="form-control form-control-alternative image-location">
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="example3cols1Input">عکس سوم</label>
                                    <input id="image-three" type="file" placeholder="عکس سوم" class="form-control form-control-alternative image-location">
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="example3cols1Input">عکس چهارم</label>
                                    <input id="image-four" type="file" placeholder="عکس چهارم" class="form-control form-control-alternative image-location">
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="example3cols1Input">عکس پنجم</label>
                                    <input id="image-five" type="file" placeholder="عکس پنجم" class="form-control form-control-alternative image-location">
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="example3cols1Input">عکس ششم</label>
                                    <input id="image-six" type="file" placeholder="عکس ششم" class="form-control form-control-alternative image-location">
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <h4 style="width: 100%;margin: 0px 15px 15px 0;">
                                اطلاعات مکان
                                <span id="private-mood">
                                    <span style="font-size: 14px;">حالت تجاری</span>
                                    <label class="custom-toggle" style="position: relative;top: 15px;">
                                        <input id="checkbox-private-mood" type="checkbox">
                                        <span class="custom-toggle-slider rounded-circle"></span>
                                    </label>
                                </span>

                            </h4>
                            <div class="col-lg-4 col-sm-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="example3cols1Input">نام مکان</label>
                                    <input id="name" type="text" placeholder="نام مکان" class="form-control form-control-alternative">
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="example3cols1Input">نام استان</label>
                                    <select id="state" type="text"  class="form-control form-control-alternative">
                                        <option value="0">انتخاب کنید</option>
                                    @foreach($states as $state)
                                        <option value="{{$state->id}}">{{$state->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="example3cols1Input">نام شهر</label>
                                    <select id="city" type="text"  class="form-control form-control-alternative">
                                        <option value="0">انتخاب کنید</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-sm-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="example3cols1Input">دسته بندی</label>
                                    <select id="category" type="text"  class="form-control form-control-alternative">
                                        <option value="0">انتخاب کنید</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="example3cols1Input">زیر دسته بندی</label>
                                    <select id="sub-category" type="text"  class="form-control form-control-alternative">
                                        <option value="0">انتخاب کنید</option>

                                    </select>
                                </div>
                            </div>
                            <div style="display: none" id="tel-col-lg" class="col-lg-4 col-sm-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="example3cols1Input">شماره تماس</label>
                                    <input id="tel" type="tel" placeholder="شماره تماس" class="form-control form-control-alternative">
                                </div>
                            </div>

                        </div>

                        <div style="display: none" id="div-time-work" class="row">

                                <h4 style="width: 100%;margin: 0px 15px 15px 0;">ساعت کاری</h4>
                                <div>
                                    <h6 style="text-align: center">شنبه</h6>
                                    <input maxlength="2" minlength="2"  class="work-time" type="number">
                                    <span> : </span>
                                    <input maxlength="2" minlength="2"  class="work-time" type="number">
                                    <span>   تا   </span>
                                    <input maxlength="2" minlength="2"  class="work-time" type="number">
                                    <span> : </span>
                                    <input maxlength="2" minlength="2"  class="work-time" type="number">
                                </div>
                                <div>
                                    <h6 style="text-align: center">یکشنبه</h6>
                                    <input maxlength="2" minlength="2"  class="work-time" type="number">
                                    <span> : </span>
                                    <input maxlength="2" minlength="2"  class="work-time" type="number">
                                    <span>   تا   </span>
                                    <input maxlength="2" minlength="2"  class="work-time" type="number">
                                    <span> : </span>
                                    <input maxlength="2" minlength="2"  class="work-time" type="number">
                                </div>
                                <div>
                                    <h6 style="text-align: center">دوشنبه</h6>
                                    <input maxlength="2" minlength="2"  class="work-time" type="number">
                                    <span> : </span>
                                    <input maxlength="2" minlength="2"  class="work-time" type="number">
                                    <span>   تا   </span>
                                    <input maxlength="2" minlength="2"  class="work-time" type="number">
                                    <span> : </span>
                                    <input maxlength="2" minlength="2"  class="work-time" type="number">
                                </div>
                                <div>
                                    <h6 style="text-align: center">سه شنبه</h6>
                                    <input maxlength="2" minlength="2"  class="work-time" type="number">
                                    <span> : </span>
                                    <input maxlength="2" minlength="2"  class="work-time" type="number">
                                    <span>   تا   </span>
                                    <input maxlength="2" minlength="2"  class="work-time" type="number">
                                    <span> : </span>
                                    <input maxlength="2" minlength="2"  class="work-time" type="number">
                                </div>
                                <div>
                                    <h6 style="text-align: center">چهارشنبه</h6>
                                    <input maxlength="2" minlength="2"  class="work-time" type="number">
                                    <span> : </span>
                                    <input maxlength="2" minlength="2"  class="work-time" type="number">
                                    <span>   تا   </span>
                                    <input maxlength="2" minlength="2"  class="work-time" type="number">
                                    <span> : </span>
                                    <input maxlength="2" minlength="2"  class="work-time" type="number">
                                </div>
                                <div>
                                    <h6 style="text-align: center">پنج شنبه</h6>
                                    <input maxlength="2" minlength="2"  class="work-time" type="number">
                                    <span> : </span>
                                    <input maxlength="2" minlength="2"  class="work-time" type="number">
                                    <span>   تا   </span>
                                    <input maxlength="2" minlength="2"  class="work-time" type="number">
                                    <span> : </span>
                                    <input maxlength="2" minlength="2"  class="work-time" type="number">
                                </div>
                                <div>
                                    <h6 style="text-align: center">جمعه</h6>
                                    <input maxlength="2" minlength="2"  class="work-time" type="number">
                                    <span> : </span>
                                    <input maxlength="2" minlength="2"  class="work-time" type="number">
                                    <span>   تا   </span>
                                    <input maxlength="2" minlength="2"  class="work-time" type="number">
                                    <span> : </span>
                                    <input maxlength="2" minlength="2"  class="work-time" type="number">
                                </div>

                        </div>

                        <div class="row">

                            <h4 style="width: 100%;margin: 17px 15px 15px 0;">حمل و نقل</h4>

                            @foreach($transfer as $item)
                                <div  class="col-lg-2 options">
                                    <img src="{{$item->image_path}}" alt="">
                                    <h6>{{$item->title}}</h6>
                                    <input value="{{$item->id}}" class="transport" type="checkbox">
                                </div>
                            @endforeach

                        </div>
                        <div class="row">

                            <h4 style="width: 100%;margin: 15px 15px 15px 0;">امکانات تفریحی</h4>
                            {{--<div>--}}
                            @foreach($pastime as $item)
                                <div  class="col-lg-2 options">
                                    <img src="{{$item->image_path}}" alt="">
                                    <h6>{{$item->title}}</h6>
                                    <input value="{{$item->id}}" class="transport" type="checkbox">
                                </div>
                            @endforeach

                        </div>


                        <div class="row">

                            <h4 style="width: 100%;margin: 13px 15px -4px 0;">توضیحات</h4>

                            <ul id="description-ul">
                                <li>
                                    <h4>
                                        <img class="plus" src="/assets/img/icons/location/plus.png" alt="">
                                        <img class="min" src="/assets/img/icons/location/minus.png" alt="">
                                        <input id="title-one" type="text" placeholder="تیتر اول" class="form-control"  />
                                    </h4>
                                    <div class="display-none">
                                        <form>
                                            <textarea  class="form-control" id="content-one" rows="3" placeholder="درباره ی عنوان خود توضیح دهید ..."></textarea>
                                        </form>
                                    </div>
                                </li>
                                <li>
                                    <h4>
                                        <img class="plus" src="/assets/img/icons/location/plus.png" alt="">
                                        <img class="min" src="/assets/img/icons/location/minus.png" alt="">
                                        <input id="title-two" type="text" placeholder="تیتر دوم" class="form-control"  />
                                    </h4>
                                    <div class="display-none">
                                        <form>
                                            <textarea class="form-control" id="content-two" rows="3" placeholder="درباره ی عنوان خود توضیح دهید ..."></textarea>
                                        </form>
                                    </div>
                                </li>
                                <li>
                                    <h4>
                                        <img class="plus" src="/assets/img/icons/location/plus.png" alt="">
                                        <img class="min" src="/assets/img/icons/location/minus.png" alt="">
                                        <input id="title-three" type="text" placeholder="تیتر سوم" class="form-control"  />
                                    </h4>
                                    <div class="display-none">
                                        <form>
                                            <textarea  class="form-control" id="content-three" rows="3" placeholder="درباره ی عنوان خود توضیح دهید ..."></textarea>
                                        </form>
                                    </div>
                                </li>
                                <li>
                                    <h4>
                                        <img class="plus" src="/assets/img/icons/location/plus.png" alt="">
                                        <img class="min" src="/assets/img/icons/location/minus.png" alt="">
                                        <input id="title-four" type="text" placeholder="تیتر چهارم" class="form-control"  />
                                    </h4>
                                    <div class="display-none">
                                        <form>
                                            <textarea  class="form-control" id="content-four" rows="3" placeholder="درباره ی عنوان خود توضیح دهید ..."></textarea>
                                        </form>
                                    </div>
                                </li>
                                <li>
                                    <h4>
                                        <img class="plus" src="/assets/img/icons/location/plus.png" alt="">
                                        <img class="min" src="/assets/img/icons/location/minus.png" alt="">
                                        <input id="title-five" type="text" placeholder="تیتر پنجم" class="form-control"  />
                                    </h4>
                                    <div class="display-none">
                                        <form>
                                            <textarea class="form-control" id="content-five" rows="3" placeholder="درباره ی عنوان خود توضیح دهید ..."></textarea>
                                        </form>
                                    </div>
                                </li>

                            </ul>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <button id="alert-success" style="display: none;" type="button" class="btn btn-block btn-warning mb-3" data-toggle="modal" data-target="#modal-notification">Notification</button>
                                <div class="modal fade" id="modal-notification" tabindex="-1" role="dialog" aria-labelledby="modal-notification" style="display: none;" aria-hidden="true">
                                    <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
                                        <div class="modal-content bg-gradient-danger">
                                            <div class="modal-header">
                                                <h6 style="display: table;margin: 0 auto;font-size: 20px;" class="modal-title" id="modal-title-notification">از همکاری شما مشتکریم</h6>

                                            </div>
                                            <div class="modal-body">
                                                <div class="py-3 text-center">
                                                    <i class="ni ni-bell-55 ni-3x"></i>
                                                    <h4 style="font-size: 20px;" class="heading mt-4">مکان با موفقیت ارسال شد</h4>
                                                    <p style="direction: rtl !important;">به زودی اطلاعات ارسال شما درباره ی این مکان توسط تیم ویسیر بررسی خواهد شد.</p>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button style="position: absolute;left: 21px;" type="button" class="btn btn-link text-white " data-dismiss="modal">بستن</button>
                                                <a href="/locations">
                                                    <button style="color: #4e2c8f !important;" type="button" class="btn btn-white ml-auto">رفتن به مکان ها</button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div style="display: none;" id="error-add-location" class="alert col-md-12 alert-danger">

                            </div>
                        </div>

                        <a id="add-location"  href="#" class="col-lg-3 visit-location btn btn-primary mt-4">اضافه کردن مکان</a>



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
<script src="/assets/js/location.js?v=1.0.0"></script>

<script>

</script>

</body>

</html>