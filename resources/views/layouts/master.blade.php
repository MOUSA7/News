<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>الخبرية</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('style/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('style/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('style/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('style/css/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('style/css/main.css')}}">
    <link rel="stylesheet" href="http://fonts.googleapis.com/earlyaccess/droidarabickufi?ver=1.0" type="text/css" media="all">
</head>

<body class="text-right" style="direction: rtl;">

<header>
    <div class="row bg-dark m-0">
        <div class="col-md-6">
            <div class="time text-white pr-5 text-right pt-2" style="font-size: 0.8em;"></div>
        </div>
        <div class="col-md-6">
            <div class=" text-dark top-nav pl-5 text-left pt-2">
                <a href="en-index.html" class="text-white ">English</a>
            </div>
        </div>
    </div>
    <div class="main-slider" style="direction: ltr;">
        <h4> : أخبار عاجلة  </h4>
        <div class="container">
            <div class="row">
                <div class="slick-slider" >
                    @foreach($newsl as $row)
                    <div class="iteam"><div class="time-news">{{$row->title}}</div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>

</header>
<div class="container pt-3">

    <div class="row mb-3">
        <div class="col-md-8 pb-4">
            <div class="main-news">
                <a href="">
                    <div class="img-main-news">
                        <img src="/images/news/{{$new->photo->file}}" alt="" class="w-100" height="430">
                    </div>
                    <div class="main-news-body">
                        <h2 class="pr-3">{{$new->title}}</h2>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 100%">
                <ul class="list-group list-group-flush p-0" style="position: relative;">
                    <div class="list-Latest-news-title mr-2 mb-3"> أخر الاخبار</div>
                    @foreach($news as $new)
                    <a href="">
                        <li class="list-group-item d-flex flex-row">
                            <img src="/images/news/{{$new->photo->file}}" alt="" width="85" height="70"> {!! Str::limit($new->title,40) !!}</li>
                    </a>
                        @endforeach


                </ul>
            </div>
        </div>
    </div>


    <div class="row mt-1" style="background: rgba(238, 238, 238, 0.74);">

        <div class="col-md-8 pt-3">
            <div class="list-Latest-news-title mr-2 mb-3">
                <a href="" class="text-white">امريكا</a>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="main-news">
                        <a href="">
                            <div class="img-main-news">
                                <img src="img/f.jpg" alt="" class="w-100" height="400">
                            </div>
                            <div class="main-news-body">
                                <h2 class="pr-3">{{$new->title}}</h2>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-news">
                                <a href="">
                                    <div class="img-main-news">
                                        <img src="img/d.jpg" alt="" class="w-100" height="200">
                                    </div>
                                    <div class="main-news-body h-25">
                                        <h6 class="pr-3">بومبيو:12 مطلبا أميركيا من إيران أبرزها وقف دعم الإرهاب</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="main-news">
                                <a href="">
                                    <div class="img-main-news">
                                        <img src="img/c.jpg" alt="" class="w-100" height="200">
                                    </div>
                                    <div class="main-news-body h-25">
                                        <h6 class="pr-3">بومبيو:12 مطلبا أميركيا من إيران أبرزها وقف دعم الإرهاب</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 pt-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="main-news">
                                <a href="">
                                    <div class="img-main-news">
                                        <img src="img/a.jpg" alt="" class="w-100" height="200">
                                    </div>
                                    <div class="main-news-body h-25">
                                        <h6 class="pr-3">بومبيو:12 مطلبا أميركيا من إيران أبرزها وقف دعم الإرهاب</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="main-news">
                                <a href="">
                                    <div class="img-main-news">
                                        <img src="img/b.jpg" alt="" class="w-100" height="200">
                                    </div>
                                    <div class="main-news-body h-25">
                                        <h6 class="pr-3">بومبيو:12 مطلبا أميركيا من إيران أبرزها وقف دعم الإرهاب</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="main-news">
                                <a href="">
                                    <div class="img-main-news">
                                        <img src="img/d.jpg" alt="" class="w-100" height="200">
                                    </div>
                                    <div class="main-news-body h-25">
                                        <h6 class="pr-3">بومبيو:12 مطلبا أميركيا من إيران أبرزها وقف دعم الإرهاب</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 ">
            <div class="list-Latest-news-title mr-0 my-3">
                <a href="" class="text-white">الاراء</a>
            </div>
            <div class="col-md-12  bg-white">
                <div class="card" style="width: 100%">
                    <ul class="list-group list-group-flush p-0" style="position: relative;">
                        <a href="">
                            <li class="list-group-item d-flex flex-row">
                                <img src="img/a.jpg" alt="" width="85" height="70"> قرقاش: استراتيجية أميركا تتطلب تغيير بوصلة إيران </li>
                        </a>
                        <a href="">
                            <li class="list-group-item d-flex flex-row">
                                <img src="img/b.jpg" alt="" width="85" height="70"> قرقاش: استراتيجية أميركا تتطلب تغيير بوصلة إيران</li>
                        </a>
                        <a href="">
                            <li class="list-group-item d-flex flex-row">
                                <img src="img/c.jpg" alt="" width="85" height="70"> قرقاش: استراتيجية أميركا تتطلب تغيير بوصلة إيران</li>
                        </a>
                        <a href="">
                            <li class="list-group-item d-flex flex-row">
                                <img src="img/d.jpg" alt="" width="85" height="70"> قرقاش: استراتيجية أميركا تتطلب تغيير بوصلة إيران</li>
                        </a>
                        <a href="">
                            <li class="list-group-item d-flex flex-row">
                                <img src="img/a.jpg" alt="" width="85" height="70"> قرقاش: استراتيجية أميركا تتطلب تغيير بوصلة إيران </li>
                        </a>
                        <a href="">
                            <li class="list-group-item d-flex flex-row">
                                <img src="img/b.jpg" alt="" width="85" height="70"> قرقاش: استراتيجية أميركا تتطلب تغيير بوصلة إيران</li>
                        </a>
                        <a href="">
                            <li class="list-group-item d-flex flex-row">
                                <img src="img/c.jpg" alt="" width="85" height="70"> قرقاش: استراتيجية أميركا تتطلب تغيير بوصلة إيران</li>
                        </a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5  bg-light mb-3">
        <div class="list-Latest-news-title mr-2  mb-3" style="display: block; width: calc(100% + 8px); ">
            <a href="" class="text-white">العراق</a>
        </div>
        <div class="col-md-3 col-sm-6">
            <a href="">
                <div class="card" style="width: 100%">
                    <img src="img/e1.jpg" alt="" width="100%" height="250px">
                    <div class="card-title pr-3">
                        عنوان خبر
                    </div>
                    <div class="card-body">
                        <p class="card-text">اكتب بعض التفاصيل عن الخبر اكتب بعض التفاصيل عن الخبر.</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6">
            <a href="">
                <div class="card" style="width: 100%">
                    <img src="img/e2.jpg" alt="" width="100%" height="250px">
                    <div class="card-title pr-3">
                        عنوان خبر
                    </div>
                    <div class="card-body">
                        <p class="card-text">اكتب بعض التفاصيل عن الخبر اكتب بعض التفاصيل عن الخبر.</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6">
            <a href="">
                <div class="card" style="width: 100%">
                    <img src="img/e3.jpg" alt="" width="100%" height="250px">
                    <div class="card-title pr-3">
                        عنوان خبر
                    </div>
                    <div class="card-body">
                        <p class="card-text">اكتب بعض التفاصيل عن الخبر اكتب بعض التفاصيل عن الخبر.</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6">
            <a href="">
                <div class="card" style="width: 100%">
                    <img src="img/e4.jpg" alt="" width="100%" height="250px">
                    <div class="card-title pr-3">
                        عنوان خبر
                    </div>
                    <div class="card-body">
                        <p class="card-text">اكتب بعض التفاصيل عن الخبر اكتب بعض التفاصيل عن الخبر.</p>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="row program mt-5 pt-0" style="background: rgba(238, 238, 238, 0.472); overflow: hidden;">
        <div class="list-Latest-news-title mr-2 mb-3 mb-3" style="display: block; width: calc(100% + 8px); ">
            <a href="" class="text-white">جدول البرامج</a>
        </div>
        <div class="main-slider" style="direction: ltr">
            <div class="container">
                <div class="row">
                    <div class="slick-slider">
                        <div class="iteam"><div class="time-news">22:00 AM</div>
                            <img src="img/mb.jpg" alt="" width="100%" height="300">
                            <div class="program-title">مع هيكل</div>
                        </div>
                        <div class="iteam"><div class="time-news red">22:00 AM</div>
                            <img src="img/mb.jpg" alt="" width="100%" height="300">
                            <div class="program-title">مع هيكل</div>
                        </div>
                        <div class="iteam"><div class="time-news">22:00 AM</div>
                            <img src="img/mb.jpg" alt="" width="100%" height="300">
                            <div class="program-title">مع هيكل</div>
                        </div>
                        <div class="iteam"><div class="time-news">22:00 AM</div>
                            <img src="img/mb.jpg" alt="" width="100%" height="300">
                            <div class="program-title">مع هيكل</div>
                        </div>
                        <div class="iteam"><div class="time-news">22:00 AM</div>
                            <img src="img/mb.jpg" alt="" width="100%" height="300">
                            <div class="program-title">مع هيكل</div>
                        </div>
                        <div class="iteam"><div class="time-news">22:00 AM</div>
                            <img src="img/mb.jpg" alt="" width="100%" height="300">
                            <div class="program-title">مع هيكل</div>
                        </div>
                        <div class="iteam"><div class="time-news">22:00 AM</div>
                            <img src="img/mb.jpg" alt="" width="100%" height="300">
                            <div class="program-title">مع هيكل</div>
                        </div>
                        <div class="iteam"><div class="time-news">22:00 AM</div>
                            <img src="img/mb.jpg" alt="" width="100%" height="300">
                            <div class="program-title">مع هيكل</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <div class="row mt-5   mb-3" style="background: url(./img/ff.jpg); position: relative;">
        <div class="full-background"></div>
        <div class="list-Latest-news-title mr-2  mb-3" style="display: block; width: calc(100% + 8px); z-index: 2;">
            <a href="" class="text-white">ثقافة وفن</a>
        </div>
        <div class="col-md-3 col-sm-6" style="z-index: 2;">
            <a href="">
                <div class="card" style="width: 100%">
                    <img src="img/fa.jpg" alt="" width="100%" height="230px">
                    <div class="card-title pr-3">
                        عنوان خبر
                    </div>
                    <div class="card-body">
                        <p class="card-text">اكتب بعض التفاصيل عن الخبر اكتب بعض التفاصيل عن الخبر.</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6" style="z-index: 2;">
            <a href="">
                <div class="card" style="width: 100%">
                    <img src="img/fb.jpg" alt="" width="100%" height="230px">
                    <div class="card-title pr-3">
                        عنوان خبر
                    </div>
                    <div class="card-body">
                        <p class="card-text">اكتب بعض التفاصيل عن الخبر اكتب بعض التفاصيل عن الخبر.</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6" style="z-index: 2;">
            <a href="">
                <div class="card" style="width: 100%">
                    <img src="img/fc.jpg" alt="" width="100%" height="230px">
                    <div class="card-title pr-3">
                        عنوان خبر
                    </div>
                    <div class="card-body">
                        <p class="card-text">اكتب بعض التفاصيل عن الخبر اكتب بعض التفاصيل عن الخبر.</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6" style="z-index: 2;">
            <a href="">
                <div class="card" style="width: 100%">
                    <img src="img/fb.jpg" alt="" width="100%" height="230px">
                    <div class="card-title pr-3">
                        عنوان خبر
                    </div>
                    <div class="card-body">
                        <p class="card-text">اكتب بعض التفاصيل عن الخبر اكتب بعض التفاصيل عن الخبر.</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
<footer class="mt-5 py-3 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-3 text-center">
                <img src="img/logo.png" width="150" height="150" alt="">
                <ul class="contact text-center" style="list-style: none;">

                    <li style="background: #4167b2;">
                        <a href="#">
                            <i class="fab fa-facebook-f fa-xm"></i>
                        </a>
                    </li>
                    <li style="background: #54a8e5">
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li style="background: red">
                        <a href="#">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                    <li style="background: #e05440">
                        <a href="#">
                            <i class="fab fa-google-plus-g"></i>
                        </a>
                    </li>
                    <li style="background: #ffe35f">
                        <a href="#">
                            <i class="fab fa-snapchat-ghost"></i>
                        </a>
                    </li>
                    <li style="background: #b24eba">
                        <a href="#">
                            <i class="fab fa-instagram fa-1x"></i>
                        </a>
                    </li>
                </ul><br>
                <p style="font-size: 0.7em;">© جميع الحقوق محفوظة لقناة الخبرية 2018
                </p>
            </div>
            <div class="col-md-3">

                <ul style="list-style: none;">
                    <li style="color: rgb(17, 125, 226); font-size: 1.2em; margin-bottom: 10px;   ">الاقسام</li>
                    <li>
                        <a href="#">الاخبار</a>
                    </li>
                    <li>
                        <a href="#">اسواق</a>
                    </li>
                    <li>
                        <a href="#">رياضة</a>
                    </li>
                    <li>
                        <a href="#">منوعات</a>
                    </li>
                    <li>
                        <a href="#">برامج</a>
                    </li>
                    <li>
                        <a href="#">مقالات</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3">

                <ul style="list-style: none;">
                    <li style="color: rgb(17, 125, 226);; font-size: 1.2em; margin-bottom: 10px;   ">المواضيع</li>
                    <li>
                        <a href="#">علم</a>
                    </li>
                    <li>
                        <a href="#">ثقافة وفن</a>
                    </li>
                    <li>
                        <a href="#">تكنولوجيا</a>
                    </li>
                    <li>
                        <a href="#">النشرات</a>
                    </li>
                    <li>
                        <a href="#">اسواق</a>
                    </li>
                    <li>
                        <a href="#">طب وصحة</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-2">

                <ul style="list-style: none;">
                    <li style="color: rgb(17, 125, 226);; font-size: 1.2em; margin-bottom: 10px;   ">اخبار الدول</li>
                    <li>
                        <a href="#">مصر</a>
                    </li>
                    <li>
                        <a href="#">السعودية</a>
                    </li>
                    <li>
                        <a href="#">امريكا</a>
                    </li>
                    <li>
                        <a href="#">المغرب</a>
                    </li>
                    <li>
                        <a href="#">اليمن</a>
                    </li>
                    <li>
                        <a href="#">العراق </a>
                    </li>
                </ul>
            </div>


            <div class="col-md-12 text-center pt-2" style="direction: ltr; text-align: left">
                <a href="http://bragma.com/">
                    <p style="display: inline-block; font-size: 0.9em;" >© Copyright 2018 bragma.com </p>
                    <img src="img/bragmalogo.png" height="30" width="70" alt="bragma">
                </a>
            </div>
        </div>
    </div>
</footer>
<script src="{{asset('style/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('style/js/bootstrap.min.js')}}"></script>
<script src="{{asset('style/js/slick.min.js')}}"></script>
<script src="{{asset('style/js/main.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.slick-slider').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,

        });
    });
</script>
</body>

</html>
