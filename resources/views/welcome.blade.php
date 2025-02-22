<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

{{--

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap 3 CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


    <link rel="stylesheet" href="https://lgdhaka.com/public/assets/css/new/easy-autocomplete.css">
    <link rel="stylesheet" href="https://lgdhaka.com/public/assets/css/new/sweetalert.css?">
    <link rel="stylesheet" href="https://lgdhaka.com/public/assets/css/new/sweet-alert-animations.min.css">
    <link rel="stylesheet" href="https://lgdhaka.com/public/assets/css/new/bootstrap-table.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="https://lgdhaka.com/public/assets/css/new/main.css">
    <link rel="stylesheet" href="https://lgdhaka.com/public/assets/css/new/obd.css">
    <link rel="stylesheet" href="https://fonts.maateen.me/kalpurush/font.css">
    <link rel="stylesheet" href="https://lgdhaka.com/public/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://lgdhaka.com/public/assets/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://lgdhaka.com/public/assets/css/flexslider.min.css">
    <link rel="stylesheet" href="https://lgdhaka.com/public/assets/css/animate.min.css">
    <link rel="stylesheet" href="https://lgdhaka.com/public/assets/css/slick.min.css">
    <link rel="stylesheet" href="https://lgdhaka.com/public/assets/css/slick-theme.min.css">
    <link rel="stylesheet" href="https://lgdhaka.com/public/assets/css/mobilenav.min.css">

    <!-- Theme skin -->
    <link rel="stylesheet" href="https://lgdhaka.com/public/assets/css/default.min.css">
    <link rel="stylesheet" href="https://lgdhaka.com/public/assets/css/style.min.css">

    <!-- Owl Carousel Assets -->
    <link rel="stylesheet" href="https://lgdhaka.com/public/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="https://lgdhaka.com/public/assets/css/owl.theme.min.css">

    <!-- This is for menu -->
    <link rel="stylesheet" href="https://lgdhaka.com/public/assets/css/menu/mobilenav.css">
    <link rel="stylesheet" href="https://lgdhaka.com/public/assets/css/menu/style.css">
    <link rel="stylesheet" href="https://lgdhaka.com/public/assets/css/custom.css">
    <link rel="stylesheet" href="https://lgdhaka.com/public/assets/css/responsive.css">
</head> --}}

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="csrf-token" content="SxKcvLE6aFhEvL1aOReyoBtUVKzf2ATgscTwmV2u">
    <meta name="author" content="Innovation IT">
    <meta name="path" content="https://admin.lgdhaka.com">
    <meta name="district_id" content="55">
    <meta name="url" content="https://lgdhaka.com">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
    <meta name="theme-color" content="#ffffff">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="shortcut icon" href="https://lgdhaka.com/assets/images/icon/favicon.png" type="image/png">
    <link rel="stylesheet" href="https://lgdhaka.com/assets/css/new/jquery-ui.min.css">
    <link rel="stylesheet" href="https://lgdhaka.com/assets/css/new/font-awesome.min.css">
    <link rel="stylesheet" href="https://lgdhaka.com/assets/css/new/bootstrap.min.css">
    <link rel="stylesheet" href="https://lgdhaka.com/assets/css/new/select2.min.css">
    <link rel="stylesheet" href="https://lgdhaka.com/assets/css/new/easy-autocomplete.css">
    <link rel="stylesheet" href="https://lgdhaka.com/assets/css/new/sweetalert.css?">
    <link rel="stylesheet" href="https://lgdhaka.com/assets/css/new/sweet-alert-animations.min.css">
    <link rel="stylesheet" href="https://lgdhaka.com/assets/css/new/bootstrap-table.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="https://lgdhaka.com/assets/css/new/main.css">
    <link rel="stylesheet" href="https://lgdhaka.com/assets/css/new/obd.css">
    <link rel="stylesheet" href="https://fonts.maateen.me/kalpurush/font.css">
    <link rel="stylesheet" href="https://lgdhaka.com/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://lgdhaka.com/assets/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://lgdhaka.com/assets/css/flexslider.min.css">
    <link rel="stylesheet" href="https://lgdhaka.com/assets/css/animate.min.css">
    <link rel="stylesheet" href="https://lgdhaka.com/assets/css/slick.min.css">
    <link rel="stylesheet" href="https://lgdhaka.com/assets/css/slick-theme.min.css">
    <link rel="stylesheet" href="https://lgdhaka.com/assets/css/mobilenav.min.css">

    <!-- Theme skin -->
    <link rel="stylesheet" href="https://lgdhaka.com/assets/css/default.min.css">
    <link rel="stylesheet" href="https://lgdhaka.com/assets/css/style.min.css">

    <!-- Owl Carousel Assets -->
    <link rel="stylesheet" href="https://lgdhaka.com/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="https://lgdhaka.com/assets/css/owl.theme.min.css">

    <!-- This is for menu -->
    <link rel="stylesheet" href="https://lgdhaka.com/assets/css/menu/mobilenav.css">
    <link rel="stylesheet" href="https://lgdhaka.com/assets/css/menu/style.css">
    <link rel="stylesheet" href="https://lgdhaka.com/assets/css/custom.css">
    <link rel="stylesheet" href="https://lgdhaka.com/assets/css/responsive.css">

    <script src="https://lgdhaka.com/assets/js/jquery.js"></script>
    <link type="text/css" rel="stylesheet" media="all"
        href="https://upsheba.info/public/frontend/themes/responsive_npf/stylesheets/base.css" />
    <link type="text/css" rel="stylesheet" media="all"
        href="https://upsheba.info/public/frontend/themes/responsive_npf/stylesheets/bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" media="all"
        href="https://upsheba.info/public/frontend/css/bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" media="all"
        href="https://upsheba.info/public/frontend/themes/responsive_npf/stylesheets/skeleton.css" />
    <link type="text/css" rel="stylesheet" media="all"
        href="https://upsheba.info/public/frontend/themes/responsive_npf/stylesheets/style.css" />
    <link type="text/css" rel="stylesheet" media="all"
        href="https://upsheba.info/public/frontend/themes/responsive_npf/stylesheets/meganizr.css" />
    <link type="text/css" rel="stylesheet" media="all"
        href="https://upsheba.info/public/frontend/themes/responsive_npf/stylesheets/demo.css" />
    <link type="text/css" rel="stylesheet" media="all"
        href="https://upsheba.info/public/frontend/npfadmin/public/css/flaticon/flaticon.css" />
    <link type="text/css" rel="stylesheet" media="all"
        href="https://upsheba.info/public/frontend/themes/responsive_npf/templates/ministry/style.css" />
    <link rel="stylesheet"
        href="https://upsheba.info/public/frontend/themes/responsive_npf/stylesheets/responsiveslides.css">
    <link rel="stylesheet"
        href="https://upsheba.info/public/frontend/themes/responsive_npf/templates/ministry/responsive.css">
    <style>
        .panel-body {
            padding: 15px;
            width: 90%;
            margin: 0 auto;
        }
    </style>

    <style>
        .shadow {
            border-radius: 4px;
            padding: 10px;
            margin-left: 10px;
            text-align: center;
            box-shadow: 0 0 3px gray;
        }
    </style>
</head>
{{-- nd heree --}}

<body>
    <header class="site-header">
        <div class="main-header wow fadeIn" data-wow-duration="1s" data-wow-delay=".3s">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 col-sm-2 text-center responsiveA">
                        <a href="https://lgdhaka.com">
                            <img style="width: 50%;margin-top: -10px;"
                                src="https://lgdhaka.com/assets/images/dijital union logo.png">
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-8 text-center">
                        <div style="color:black; padding-bottom:20px;">
                            <h3 class=" textA" style="margin-top:5px;font-family: 'Kalpurush', sans-serif;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Smart UP, Dhaka</font>
                                </font>
                            </h3>


                        </div>
                    </div>
                    <div class="col-md-4 text-center textB">


                    </div>


                </div>

            </div>
        </div>

    </header>
    <section id="page-body">
        <div class="container">
            <section class="our-service mt-4">
                <div class="row">
                    <div class="col-12">
                        <div class="panel panel-info">
                            <div class="panel-heading text-center" style="background-color: #fff">
                                <section id="upservice">
                                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="">
                                            </li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="1" class="">
                                            </li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="2"
                                                class="active"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="3" class="">
                                            </li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="4" class="">
                                            </li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="5" class="">
                                            </li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                                        </ol>
                                        <div class="carousel-inner">
                                            <div class="carousel-item">
                                                <img src="https://lgdhaka.com/assets/images/1.png" class="d-block w-100"
                                                    alt="...">
                                                <div class="carousel-caption d-none d-md-block">
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="https://lgdhaka.com/assets/images/2.png" class="d-block w-100"
                                                    alt="...">
                                                <div class="carousel-caption d-none d-md-block">
                                                </div>
                                            </div>
                                            <div class="carousel-item active">
                                                <img src="https://lgdhaka.com/assets/images/3.png" class="d-block w-100"
                                                    alt="...">
                                                <div class="carousel-caption d-none d-md-block">
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="https://lgdhaka.com/assets/images/4.png" class="d-block w-100"
                                                    alt="...">
                                                <div class="carousel-caption d-none d-md-block">
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="https://lgdhaka.com/assets/images/5.png" class="d-block w-100"
                                                    alt="...">
                                                <div class="carousel-caption d-none d-md-block">
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="https://lgdhaka.com/assets/images/6.png" class="d-block w-100"
                                                    alt="...">
                                                <div class="carousel-caption d-none d-md-block">
                                                </div>
                                            </div>

                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                            data-slide="prev">
                                            <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                            data-slide="next">
                                            <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>

                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="container">
            <section class="our-service mt-4">
                <div class="row">
                    <div class="col-12">
                        <div class="panel panel-info">
                            <div class="panel-heading text-center">
                                <h4 style="font-family: 'Kalpurush', sans-serif;">আবেদন ও সনদ যাচাই করুন</h4>
                                <h4 style="font-family: 'Kalpurush', sans-serif; color:red"> নোটঃ আপনি যদি আবেদন পত্র
                                    যাচাই করতে চান তাহলে <strong style="font-weight: bold"> পিন নং </strong> অথবা সনদ
                                    পত্র যাচাই করতে চাইলে <strong style="font-weight: bold"> সনদ নং </strong> দিয়ে সার্চ
                                    করুন।</h4>
                            </div>

                            <div class="panel-body">
                                <div class="col-md-3 col-sm-12 mt-1">
                                    <label class="col-md-4 form-control-label">ধরন</label>
                                    <div class="col-md-9">
                                        <select class="form-control" id="appType"
                                            style="font-family: 'Kalpurush', sans-serif;">

                                            <option value="">নির্বাচন করুন</option>
                                            <option value="1">আবেদন যাচাই</option>
                                            <option value="2">সনদ যাচাই</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12 mt-1">
                                    <label class="col-md-5 form-control-label">সনদের ধরন</label>
                                    <div class="col-md-9">
                                        <select class="form-control" id="type"
                                            style="font-family: 'Kalpurush', sans-serif;">

                                            <option value="">নির্বাচন করুন</option>
                                            <option value="1">নাগরিক</option>
                                            <option value="3">অবিবাহিত </option>
                                            <option value="4">পূনঃবিবাহ না হওয়া</option>
                                            <option value="5">একই নামের প্রত্যয়ন</option>
                                            <option value="6">সনাতন ধর্ম অবলম্বি</option>
                                            <option value="7">প্রত্যয়ন পত্র</option>
                                            <option value="8">নদী ভাঙনের</option>
                                            <option value="9">চারিত্রিক</option>
                                            <option value="10">ভূমিহীন</option>
                                            <option value="11">বার্ষিক আয়ের প্রত্যয়ন</option>
                                            <option value="12">প্রতিবন্ধি</option>
                                            <option value="13">অনুমতি পত্র</option>
                                            <option value="14">ভোটার আইডি স্থানান্তর</option>
                                            <option value="33">নতুন ভোটার</option>
                                            <option value="17">ওয়ারিশ</option>
                                            <option value="18">পারিবারিক</option>
                                            <option value="19">ট্রেড লাইসেন্স</option>
                                            <option value="20">বিবাহিত</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-12 mt-1">
                                    <label class="col-md-5 form-control-label">সার্চ বক্স</label>
                                    <div class="col-md-12">
                                        <input type="text" id="search-data"
                                            style="font-family: 'Kalpurush', sans-serif;" class="form-control"
                                            placeholder="এখানে সার্চ দিন...">
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-12 mt-1">
                                    <label class="col-md-5 form-control-label">&nbsp;&nbsp;</label>
                                    <div class="col-md-9">
                                        <button class="btn" type="button" id="search"
                                            style="color: #00A5FF; font-family: 'Kalpurush', sans-serif;"><span
                                                style="color: white"> সার্চ করুন</span></button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
        </div>


        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center">Citizen Registration Form</h2>


                    <form action="{{ route('citizens.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="alert alert-warning">* Marked fields are mandatory.</div>
                        {{--
                        <div class="form-group">
                            <label for="certificate">সার্টিফিকেট নির্বাচন করুন <span
                                    class="text-danger">*</span></label>
                            <select name="certificate_id" id="certificate" class="form-control">
                                <option selected disabled>-- সার্টিফিকেট নির্বাচন করুন --</option>
                                @foreach (App\Services\DefaultService::getCertificates() as $certificate)
                                <option value="{{ $certificate->id }}" {{ old('certificate_id')==$certificate->id ?
                                    'selected' : '' }}>
                                    {{ $certificate->name }}
                                </option>
                                @endforeach
                            </select>
                            @error('certificate_id') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group">
                            <label for="name_bn">নাম (বাংলায়) <span class="text-danger">*</span></label>
                            <input type="text" name="name_bn" id="name_bn" class="form-control" placeholder="পুরো নাম"
                                value="{{ old('name_bn') }}">
                            @error('name_bn') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group">
                            <label for="name_en">নাম (ইংরেজিতে) <span class="text-danger">*</span></label>
                            <input type="text" name="name_en" id="name_en" class="form-control" placeholder="Full name"
                                value="{{ old('name_en') }}">
                            @error('name_en') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group">
                            <label for="father_name_en">পিইংরেজিতে বাবার নাম <span class="text-danger">*</span></label>
                            <input type="text" name="father_name_en" id="father_name_en" class="form-control"
                                placeholder="পিতার নাম" value="{{ old('father_name_en') }}">
                            @error('father_name_en') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group">
                            <label for="father_name_en">নাম (ইংরেজিতে) <span class="text-danger">*</span></label>
                            <input type="text" name="father_name_bn" id="father_name_bn" class="form-control"
                                placeholder="নাম (ইংরেজিতে)" value="{{ old('father_name_bn') }}">
                            @error('father_name_bn') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group">
                            <label for="mother_name_bn">মায়ের নাম <span class="text-danger">*</span></label>
                            <input type="text" name="mother_name_bn" id="mother_name_bn" class="form-control"
                                placeholder="মায়ের নাম" value="{{ old('mother_name_bn') }}">
                            @error('mother_name_bn') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group">
                            <label for="image">ছবি</label>
                            <input type="file" name="image" id="image" class="form-control" value="{{ old('image') }}"
                                accept="image/*">
                            @error('image') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group">
                            <label for="mobile">মোবাইল</label>
                            <input type="text" name="mobile" id="mobile" class="form-control"
                                placeholder="ইংরেজিতে লিখুন" value="{{ old('mobile') }}">
                            @error('mobile') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group">
                            <label for="permanent_holding_no">হোল্ডিং নং ( ইংরেজিতে )</label>
                            <input type="text" name="permanent_holding_no" id="permanent_holding_no"
                                class="form-control" placeholder="হোল্ডিং নং ( ইংরেজিতে )"
                                value="{{ old('permanent_holding_no') }}">
                            @error('permanent_holding_no') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group">
                            <label for="ward_no">ওয়ার্ড নং</label>
                            <input type="text" name="ward_no" id="ward_no" class="form-control" placeholder="ওয়ার্ড নং"
                                value="{{ old('ward_no') }}">
                            @error('ward_no') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group">
                            <label for="religion">ধর্ম </label>
                            <input type="text" name="religion" id="religion" class="form-control" placeholder="ধর্ম "
                                value="{{ old('religion') }}">
                            @error('religion') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>



                        <div class="form-group">
                            <label>লিঙ্গ <span class="text-danger">*</span></label>
                            <div class="radio">
                                <label><input type="radio" name="gender" value="male"> পুরুষ</label>
                                <label><input type="radio" name="gender" value="female"> মহিলা</label>
                                <label><input type="radio" name="gender" value="other"> তৃতীয় লিঙ্গ</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="marital_status">বৈবাহিক অবস্থা <span class="text-danger">*</span></label>
                            <select name="marital_status" id="marital_status" class="form-control">
                                <option value="" selected disabled>নির্বাচন করুন</option>
                                <option value="single">অবিবাহিত</option>
                                <option value="married">বিবাহিত</option>
                                <option value="widow">বিধবা</option>
                                <option value="other">অন্যান্য</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="occupation">পেশা</label>
                            <select name="occupation" id="occupation" class="form-control">
                                <option value="">নির্বাচন করুন</option>
                                <option value="1">কৃষক</option>
                                <option value="2">গৃহিণী</option>
                                <option value="3">সরকারি চাকরি</option>
                                <option value="4">বেসরকারি চাকরি</option>
                                <option value="5">ব্যবসায়ী</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="resident">বাসিন্দা</label>
                            <select name="resident" id="resident" class="form-control">
                                <option value="">নির্বাচন করুন</option>
                                <option value="1">অস্থায়ী</option>
                                <option value="2">স্থায়ী</option>
                            </select>
                        </div>


                        <div class="form-group">
                            <label for="District-bangla">জেলা </label>
                            <select id="permanent_district_id" name="permanent_district_id" class="form-control">
                                <option selected="selected" value="">--নির্বাচন করুন--</option>
                                <option value="Chapainawabganj">Chapainawabganj</option>
                                <option value="Rajshahi">Rajshahi</option>
                                <option value="Bogura">Bogura</option>
                                <option value="Natore">Natore</option>
                                <option value="Sirajgonj">Sirajgonj</option>
                                <option value="Pabna">Pabna</option>
                                <option value="Dhaka">Dhaka</option>
                                <option value="Sylhet">Sylhet</option>
                                <option value="Naogaon">Naogaon</option>
                                <option value="Maulvibazar">Maulvibazar</option>
                                <option value="Joypurhat">Joypurhat</option>
                                <option value="Faridpur">Faridpur</option>
                                <option value="Gazipur">Gazipur</option>
                                <option value="Gopalganj">Gopalganj</option>
                                <option value="Kishoreganj">Kishoreganj</option>
                                <option value="Madaripur">Madaripur</option>
                                <option value="Manikganj">Manikganj</option>
                                <option value="Munshiganj">Munshiganj</option>
                                <option value="Narayanganj">Narayanganj</option>
                                <option value="Narsingdi">Narsingdi</option>
                                <option value="Rajbari">Rajbari</option>
                                <option value="Shariatpur">Shariatpur</option>
                                <option value="Tangail">Tangail</option>
                                <option value="Thakurgaon">Thakurgaon</option>
                                <option value="Rangpur">Rangpur</option>
                                <option value="Panchagarh">Panchagarh</option>
                                <option value="Nilphamari">Nilphamari</option>
                                <option value="Lalmonirhat">Lalmonirhat</option>
                                <option value="Kurigram">Kurigram</option>
                                <option value="Gaibandha">Gaibandha</option>
                                <option value="Dinajpur">Dinajpur</option>
                                <option value="Jhenaidah">Jhenaidah</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="birth_date">জন্ম তারিখ <span class="text-danger">*</span></label>
                            <input type="date" name="birth_date" id="birth_date" class="form-control"
                                placeholder="0000-00-00">
                            @error('birth_date') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group">
                            <label for="nid">জাতীয় পরিচয়পত্র নম্বর (ইংরেজিতে) <span
                                    class="text-danger">*</span></label>
                            <input type="text" name="nid" id="nid" class="form-control" placeholder="1616623458679011">
                            @error('nid') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group">
                            <label for="passport_no">পাসপোর্ট নম্বর (ইংরেজিতে) <span
                                    class="text-danger">*</span></label>
                            <input type="text" name="passport_no" id="passport_no" class="form-control"
                                placeholder="1616623458679011">
                            @error('passport_no') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group">
                            <label for="probable_rate">বার্ষিক মূল্যায়ন <span class="text-danger">*</span></label>
                            <input type="number" name="probable_rate" id="probable_rate" class="form-control"
                                placeholder="বার্ষিক মূল্যায়ন">
                            @error('probable_rate') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group">
                            <label for="halson_percentage">ধার্যকৃত কর <span class="text-danger">*</span></label>
                            <span class="help-block">(আইন অনুযায়ী ধার্যকৃত কর ১-৭%)</span>
                            <div class="row">
                                <div class="col-xs-6">
                                    <input type="number" step="any" name="halson_percentage" id="halson_percentage"
                                        class="form-control" placeholder="%">
                                </div>
                                <div class="col-xs-6">
                                    <input type="number" name="halson_tax" id="halson_tax" class="form-control"
                                        placeholder="কর" readonly>
                                </div>
                            </div>
                            @error('halson_percentage') <span class="text-danger">{{ $message }}</span> @enderror
                        </div> --}}
                        <div class="row">
                            <div class="col-sm-12">
                                <!--// iamge uploaded //-->
                                <div class="row">
                                    <div class="col-sm-12" style="margin-bottom:10px;margin-top:10px;">
                                        <div class="form-group">
                                            <label for="Delivery-type" class="col-sm-3 control-label">ছবি </label>
                                            <div class="col-sm-3">
                                                <input id="imgUpload" name="image" class="form-control"
                                                    accept=".jpg, .jpeg, .png, .gif" type="file">
                                                <!-- <input id="profile" class="form-control" name="profile" accept=".jpg, .jpeg, .png, .gif" onchange="loadFile(event);fileValidation()" type="file"> -->
                                                {{-- <span class=" " id="photo_error">
                                                    <p id="error-message"> ছবির সাইজ ১০০kb এর বেশি হয়েছে, ৮০কেবির কম
                                                        পছন্দ করুন। </p>
                                                </span> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--// iamge uploaded  //-->
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">

                                            <label for="certificate" class="col-sm-3 control-label"> সেবার ধরন
                                            </label>
                                            <div class="col-sm-3">
                                                <select name="certificate_id" id="certificate" class="form-control">
                                                    <option selected disabled>-- সার্টিফিকেট নির্বাচন করুন --</option>
                                                    @foreach (App\Services\DefaultService::getCertificates() as $certificate)
                                                    <option value="{{ $certificate->id }}" {{ old('certificate_id')==$certificate->id ?
                                                        'selected' : '' }}>
                                                        {{ $certificate->name }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                                @error('certificate_id') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                            <label for="permanent_holding_no" class="col-sm-3 control-label"> হোল্ডিং নং (
                                                ইংরেজিতে )</label>
                                            <div class="col-sm-3">
                                                <input id="holding" class="form-control" placeholder="" name="permanent_holding_no"
                                                    type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="National-id-english" class="col-sm-3 control-label">ন্যাশনাল
                                                আইডি নং(ইংরেজিতে)</label>
                                            <div class="col-sm-3">
                                                <input id="nid_no" maxlength="17"
                                                    onkeypress="" class="form-control"
                                                    placeholder="" name="nid" type="text">
                                            </div>
                                            <label for="Birth-no" class="col-sm-3 control-label">জন্ম নিবন্ধন নং (
                                                ইংরেজিতে )</label>
                                            <div class="col-sm-3">
                                                <input id="birth_id" maxlength="17"
                                                    onkeypress="" class="form-control"
                                                    placeholder="" name="birth_id" type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="Passport-no" class="col-sm-3 control-label">পাসপোর্ট নং (
                                                ইংরেজিতে )</label>
                                            <div class="col-sm-3">
                                                <input type="text" name="passport_no" id="pno" class="form-control"
                                                    maxlength="17" placeholder=""
                                                    pwa2-uuid="EDITOR/input-E17-D77-AC2BD-091" pwa-fake-editor="">
                                            </div>
                                            <label for="Word-no-bangla" class="col-sm-3 control-label">জম্ম তারিখ
                                                <span>*</span></label>
                                            <div class="col-sm-3">
                                                <input id="date_of_birth" type="date" class="form-control hasDatepicker"
                                                    placeholder="জন্মদিন লিখুন" name="birth_date">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="Name-english" class="col-sm-3 control-label">নাম (ইংরেজিতে)
                                            </label>
                                            <div class="col-sm-3">
                                                <input id="ename" class="form-control" placeholder="" name="name_en"
                                                    type="text">
                                            </div>
                                            <label for="Name-bangla" class="col-sm-3 control-label">নাম ( বাংলায় )
                                                <span>*</span> </label>
                                            <div class="col-sm-3">
                                                <input id="name" class="form-control" placeholder="" name="name_bn"
                                                    type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="Gender" class="col-sm-3 control-label">লিঙ্গ
                                                <span>*</span></label>
                                            <div class="col-sm-3">
                                                <label for="gender_male" class="radio-inline">পুরুষ</label>
                                                <input id="gender" value="male"
                                                    onclick="bybahik_obosthan_show1(this.value);" name="gender"
                                                    type="radio">
                                                <label for="gender_female" class="radio-inline">মহিলা</label>
                                                <input id="gender" value="female"
                                                    onclick="bybahik_obosthan_show1(this.value);" name="gender"
                                                    type="radio">
                                                <label for="gender_other" class="radio-inline">৩য় লিঙ্গ</label>
                                                <input id="gender" value="other"
                                                    onclick="bybahik_obosthan_show1(this.value);" name="gender"
                                                    type="radio">
                                            </div>
                                            <label for="Marital-status" class="col-sm-3 control-label">বৈবাহিক সম্পর্ক
                                                <span>*</span></label>
                                            <div class="col-sm-3">
                                                <select class="form-select" name="marital_status"
                                                    onclick="bybahik_obosthan_show(this.value);">
                                                    <option selected="selected" value="">নির্বাচন করুন</option>
                                                    <option value="1">বিবাহিত</option>
                                                    <option value="2">অবিবাহিত</option>
                                                    <option value="3">তালাক প্রাপ্ত</option>
                                                    <option value="4">বিধবা</option>
                                                    <option value="0">অন্যান্য</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" id="wife" style="display: none;">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="Wife-name-english" class="col-sm-3 control-label">স্ত্রীর নাম
                                                (ইংরেজিতে) </label>
                                            <div class="col-sm-3">
                                                <input type="text" name="wife_name_en" id="eWname" class="form-control"
                                                    placeholder="">
                                            </div>
                                            <label for="Wife-name-bangla" class="col-sm-3 control-label">স্ত্রীর নাম
                                                (বাংলায়)</label>
                                            <div class="col-sm-3">
                                                <input type="text" name="wife_name_bn" id="bWname" class="form-control"
                                                    placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row" id="husband" style="display: none;">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="Husband-name-english" class="col-sm-3 control-label">স্বামীর নাম
                                                (ইংরেজিতে)</label>
                                            <div class="col-sm-3">
                                                <input type="text" name="husband_name_en" id="eHname" class="form-control"
                                                    placeholder="">
                                            </div>
                                            <label for="Husband-name-bangla" class="col-sm-3 control-label"> স্বামী নাম
                                                (বাংলায়)</label>
                                            <div class="col-sm-3">
                                                <input type="text" name="husband_name_bn" id="bHname" class="form-control"
                                                    placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="Father-name-english" class="col-sm-3 control-label">পিতার নাম
                                                (ইংরেজিতে) </label>
                                            <div class="col-sm-3">
                                                <input id="efname" class="form-control" placeholder="" name="father_name_en"
                                                    type="text">
                                            </div>
                                            <label for="Father-name-bangla" class="col-sm-3 control-label">পিতার নাম
                                                (বাংলায়) <span>*</span> </label>
                                            <div class="col-sm-3">
                                                <input id="father" class="form-control" placeholder="" name="father_name_bn"
                                                    type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="Mother-name-english" class="col-sm-3 control-label">মাতার নাম
                                                (ইংরেজিতে) </label>
                                            <div class="col-sm-3">
                                                <input id="emname" class="form-control" placeholder="" name="mother_name_en"
                                                    type="text">
                                            </div>
                                            <label for="Mother-name-bangla" class="col-sm-3 control-label">মাতার নাম
                                                (বাংলায়) <span>*</span> </label>
                                            <div class="col-sm-3">
                                                <input id="mother" class="form-control" placeholder="" name="mother_name_bn"
                                                    type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="profession" class="col-sm-3 control-label">পেশা </label>
                                            <div class="col-sm-3">
                                                <input type="text" name="occupation" id="occupation" class="form-control"
                                                    placeholder=""
                                                    pwa-fake-editor="">
                                            </div>
                                            <label for="Education-qualification" class="col-sm-3 control-label">শিক্ষাগত
                                                যোগ্যতা </label>
                                            <div class="col-sm-3">
                                                <input type="text" name="educational_qualification" id="qualification"
                                                    class="form-control" placeholder=""
                                                    pwa2-uuid="EDITOR/input-AA7-D94-26C92-63A" pwa-fake-editor="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="Religion" class="col-sm-3 control-label">ধর্ম
                                                <span>*</span></label>
                                            <div class="col-sm-3">
                                                <select class="form-select" name="religion">
                                                    <option selected="selected" value="">নির্বাচন করুন</option>
                                                    <option value="4">ইসলাম</option>
                                                    <option value="3">হিন্দু</option>
                                                    <option value="2">বৌদ্ধ ধর্ম</option>
                                                    <option value="1">খ্রিস্ট ধর্ম</option>
                                                    <option value="0">অন্যান্য</option>
                                                </select>
                                            </div>
                                            <label for="Resident" class="col-sm-3 control-label">বাসিন্দা <span>*</span>
                                            </label>
                                            <div class="col-sm-3">
                                                <select class="form-select" name="resident">
                                                    <option selected="selected" value="">নির্বাচন করুন</option>
                                                    <option value="1">অস্থায়ী</option>
                                                    <option value="0">স্থায়ী</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--// Present Address strat //-->
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="app-heading">
                                            <h3 class="text-center">বর্তমান ঠিকানা</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="col-sm-offset-3 col-sm-3">
                                                <div class="app-sub-heading">
                                                    ( ইংরেজিতে )
                                                </div>
                                            </div>
                                            <div class="col-sm-offset-3 col-sm-3">
                                                <div class="app-sub-heading">
                                                    ( বাংলায় )
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="Village-english" class="col-sm-3 control-label">গ্রাম/মহল্লা
                                            </label>
                                            <div class="col-sm-3">
                                                <input id="p_gram" name="p_gram" class="form-control" placeholder=""
                                                    type="text">
                                            </div>
                                            <label for="Village-bangla" class="col-sm-3 control-label">গ্রাম/মহল্লা
                                            </label>
                                            <div class="col-sm-3">
                                                <input id="pb_gram" name="pb_gram" class="form-control" placeholder=""
                                                    type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="Road-block-sector-english"
                                                class="col-sm-3 control-label">রোড/ব্লক/সেক্টর</label>
                                            <div class="col-sm-3">
                                                <input type="text" name="p_rbs" id="p_rbs" class="form-control"
                                                    placeholder="" pwa2-uuid="EDITOR/input-966-494-B091C-F5C"
                                                    pwa-fake-editor="">
                                            </div>
                                            <label for="Road-block-sector-bangla"
                                                class="col-sm-3 control-label">রোড/ব্লক/সেক্টর</label>
                                            <div class="col-sm-3">
                                                <input id="pb_rbs" name="pb_rbs" class="form-control" placeholder=""
                                                    type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="Word-no-english" class="col-sm-3 control-label">ওয়ার্ড
                                                নং</label>
                                            <div class="col-sm-3">
                                                <input id="p_wordno" name="p_wordno"
                                                    onkeypress="return checkaccnumber(event);" class="form-control"
                                                    placeholder="" type="number">
                                            </div>
                                            <label for="Word-no-bangla" class="col-sm-3 control-label">ওয়ার্ড নং</label>
                                            <div class="col-sm-3">
                                                <input id="pb_wordno" name="pb_wordno"
                                                    onkeypress="return checkaccnumber(event);" class="form-control"
                                                    placeholder="" type="number">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="District-bangla" class="col-sm-3 control-label">জেলা </label>
                                            <div class="col-sm-3">
                                                <select id="district" class="form-select" value="selected" name="p_dis">
                                                    <option selected="selected" value="">--নির্বাচন করুন--</option>
                                                    <option value="1">Chapainawabganj</option>
                                                    <option value="2">Rajshahi</option>
                                                    <option value="3">Bogura</option>
                                                    <option value="4">Natore</option>
                                                    <option value="5">Sirajgonj</option>
                                                    <option value="6">Pabna</option>
                                                    <option value="8">Dhaka</option>
                                                    <option value="9">Sylhet</option>
                                                    <option value="10">Naogaon</option>
                                                    <option value="11">Maulvibazar</option>
                                                    <option value="12">Joypurhat</option>
                                                    <option value="13">Faridpur</option>
                                                    <option value="14">Gazipur</option>
                                                    <option value="15">Gopalganj</option>
                                                    <option value="16">Kishoreganj</option>
                                                    <option value="17">Madaripur</option>
                                                    <option value="18">Manikganj</option>
                                                    <option value="19">Munshiganj</option>
                                                    <option value="20">Narayanganj</option>
                                                    <option value="21">Narsingdi</option>
                                                    <option value="22">Rajbari</option>
                                                    <option value="23">Shariatpur</option>
                                                    <option value="24">Tangail</option>
                                                    <option value="27">Thakurgaon</option>
                                                    <option value="28">Rangpur</option>
                                                    <option value="29">Panchagarh</option>
                                                    <option value="30">Nilphamari</option>
                                                    <option value="31">Lalmonirhat</option>
                                                    <option value="32">Kurigram</option>
                                                    <option value="33">Gaibandha</option>
                                                    <option value="34">Dinajpur</option>
                                                    <option value="35">Jhenaidah</option>
                                                </select>
                                            </div>
                                            <label for="District-bangla" class="col-sm-3 control-label">জেলা </label>
                                            <div class="col-sm-3">
                                                <input id="pb_dis" name="pb_dis" class="form-control" placeholder=""
                                                    type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="Thana-bangla" class="col-sm-3 control-label">উপজেলা/থানা</label>
                                            <div class="col-sm-3">
                                                <select id="upozila" name="p_upozila" class="form-select"
                                                    value="selected">
                                                    <option selected="selected" value="">--নির্বাচন করুন--</option>
                                                    <option value="6">Shibganj</option>
                                                    <option value="7">Nachol</option>
                                                    <option value="8">Gomostapur</option>
                                                    <option value="9">Chapainawabganj Sadar</option>
                                                    <option value="10">Volahat</option>
                                                    <option value="11">Bagha</option>
                                                    <option value="12">Baghmara</option>
                                                    <option value="13">Charghat</option>
                                                    <option value="14">Durgapur</option>
                                                    <option value="15">godagadee</option>
                                                    <option value="16">mohnpur</option>
                                                    <option value="17">pba</option>
                                                    <option value="18">puthiya</option>
                                                    <option value="19">tanor</option>
                                                    <option value="20">rajsahee-siti-krporesn</option>
                                                    <option value="21">rajsahee-senanibas</option>
                                                    <option value="22">atrai</option>
                                                    <option value="23">bdlgachee</option>
                                                    <option value="24">dhamirhat</option>
                                                    <option value="25">manda</option>
                                                    <option value="26">Mohadebpur</option>
                                                    <option value="27">Naogaon Sadar</option>
                                                    <option value="28">niyamtpur</option>
                                                    <option value="29">ptneetla</option>
                                                    <option value="30">porsa</option>
                                                    <option value="31">raneengr</option>
                                                    <option value="32">sapahar</option>
                                                    <option value="33">atghriya</option>
                                                    <option value="34">bera</option>
                                                    <option value="35">vangoura</option>
                                                    <option value="36">catmohr</option>
                                                    <option value="37">fridpur</option>
                                                    <option value="38">eeswrdee</option>
                                                    <option value="39">pabna-sdr</option>
                                                    <option value="40">sannthiya</option>
                                                    <option value="41">sujangr</option>
                                                    <option value="42">belkuci</option>
                                                    <option value="43">cehali</option>
                                                    <option value="44">kamarkhnd</option>
                                                    <option value="45">kajipur</option>
                                                    <option value="46">raygnj</option>
                                                    <option value="47">sahjadpur</option>
                                                    <option value="48">sirajgnj-sdr</option>
                                                    <option value="49">taras</option>
                                                    <option value="50">ullapara</option>
                                                    <option value="51">dhaka-senanibas</option>
                                                    <option value="52">dhak-uttr-siti-krporesn</option>
                                                    <option value="53">dhak-dkshin-siti-krporesn</option>
                                                    <option value="54">dhamrai</option>
                                                    <option value="55">dohar</option>
                                                    <option value="56">keraneegnj</option>
                                                    <option value="57">nbabgnj</option>
                                                    <option value="58">savar</option>
                                                    <option value="59">savar-senanibas</option>
                                                    <option value="60">araihajar</option>
                                                    <option value="61">bndr</option>
                                                    <option value="62">narayngnj-siti-kerporesn</option>
                                                    <option value="63">narayngnj-sdr</option>
                                                    <option value="64">ruupgnj</option>
                                                    <option value="65">sonargannoo</option>
                                                    <option value="66">gjariya</option>
                                                    <option value="67">louhjng</option>
                                                    <option value="68">munsignj-sdr</option>
                                                    <option value="69">sirajdikhan</option>
                                                    <option value="70">sreengr</option>
                                                    <option value="71">tngoeebaree</option>
                                                    <option value="72">doultpur</option>
                                                    <option value="73">ghioor</option>
                                                    <option value="74">hrirampur</option>
                                                    <option value="75">manikgnj-sdr</option>
                                                    <option value="76">saturiya</option>
                                                    <option value="77">sibaly</option>
                                                    <option value="78">singgair</option>
                                                    <option value="79">belb</option>
                                                    <option value="80">mnohrdee</option>
                                                    <option value="81">nrsingdee-sdr</option>
                                                    <option value="82">plas</option>
                                                    <option value="83">raypura</option>
                                                    <option value="84">sibpur</option>
                                                    <option value="85">baliyakandi</option>
                                                    <option value="86">goyalnd</option>
                                                    <option value="87">kalukhalee</option>
                                                    <option value="88">pangsa</option>
                                                    <option value="89">rajbaree-sdr</option>
                                                    <option value="90">vedrgnj</option>
                                                    <option value="91">damudza</option>
                                                    <option value="92">gosairhat</option>
                                                    <option value="93">nriya</option>
                                                    <option value="94">sreeytpur-sdr</option>
                                                    <option value="95">jajira</option>
                                                    <option value="96">basail</option>
                                                    <option value="97">vuungapur</option>
                                                    <option value="98">delduyar</option>
                                                    <option value="99">dhnbaree</option>
                                                    <option value="100">ghatail</option>
                                                    <option value="101">ghatail-senanibas</option>
                                                    <option value="102">gopalpur</option>
                                                    <option value="103">kalihatee</option>
                                                    <option value="104">mdhupur</option>
                                                    <option value="105">mirjapur</option>
                                                    <option value="106">nagrpur</option>
                                                    <option value="107">skhipur</option>
                                                    <option value="108">tangoail-sdr</option>
                                                    <option value="109">dasar</option>
                                                    <option value="110">kalkini</option>
                                                    <option value="111">madareepur-sdr</option>
                                                    <option value="112">rajoir</option>
                                                    <option value="113">sibcr</option>
                                                    <option value="114">oshtgram</option>
                                                    <option value="115">bajitpur</option>
                                                    <option value="116">voirb</option>
                                                    <option value="117">hosenpur</option>
                                                    <option value="118">itna</option>
                                                    <option value="119">krimgnj</option>
                                                    <option value="120">ktiyadi</option>
                                                    <option value="121">kisorgnj-sdr</option>
                                                    <option value="122">kuliyarcr</option>
                                                    <option value="123">mithamin</option>
                                                    <option value="124">niklee</option>
                                                    <option value="125">pakundiya</option>
                                                    <option value="126">tarail</option>
                                                    <option value="127">gopalgnj-sdr</option>
                                                    <option value="128">kasiyani</option>
                                                    <option value="129">kotalee-para</option>
                                                    <option value="130">muksudpur</option>
                                                    <option value="131">tunggee-para</option>
                                                    <option value="132">thakurgannoo-sdr</option>
                                                    <option value="133">raneesngkoil</option>
                                                    <option value="134">peergnj</option>
                                                    <option value="135">Horipur</option>
                                                    <option value="136">baliyadanggee</option>
                                                    <option value="137">bdrgnj</option>
                                                    <option value="138">gngoacra</option>
                                                    <option value="139">kauniya</option>
                                                    <option value="140">mithapukur</option>
                                                    <option value="141">peergacha</option>
                                                    <option value="142">peergnj</option>
                                                    <option value="143">rngpur-senanibas</option>
                                                    <option value="144">rngpur-siti-krporesn</option>
                                                    <option value="145">rngpur-sdr</option>
                                                    <option value="146">taragnj</option>
                                                    <option value="147">atoyaree</option>
                                                    <option value="148">boda</option>
                                                    <option value="149">debeegnj</option>
                                                    <option value="150">pncgr-sdr</option>
                                                    <option value="151">tetuliya</option>
                                                    <option value="152">dimla</option>
                                                    <option value="153">deamar</option>
                                                    <option value="154">jldhaka</option>
                                                    <option value="155">kisorgnj</option>
                                                    <option value="156">neelphamaree-sdr</option>
                                                    <option value="157">soiydpur</option>
                                                    <option value="158">soiydpur-senanibas</option>
                                                    <option value="159">aditmaree</option>
                                                    <option value="160">Hatibanda</option>
                                                    <option value="161">Kaliganj</option>
                                                    <option value="162">Lalmonirhat Sadar</option>
                                                    <option value="163">Patgram</option>
                                                    <option value="164">Bhurungamari</option>
                                                    <option value="165">Char Rajibpur</option>
                                                    <option value="166">Chilmari</option>
                                                    <option value="167">Kurigram Sadar</option>
                                                    <option value="168">Nageshwari</option>
                                                    <option value="169">Phulbari</option>
                                                    <option value="170">Rajarhat</option>
                                                    <option value="171">Rowmari</option>
                                                    <option value="172">Ulipur</option>
                                                    <option value="173">Fulchhari</option>
                                                    <option value="174">Gaibandha Sadar</option>
                                                    <option value="175">Gobindaganj</option>
                                                    <option value="176">Palashbari</option>
                                                    <option value="177">Sadullapur</option>
                                                    <option value="178">Saghata</option>
                                                    <option value="179">Sundarganj</option>
                                                </select>
                                            </div>
                                            <label for="Thana-bangla" class="col-sm-3 control-label">উপজেলা/থানা</label>
                                            <div class="col-sm-3">
                                                <input id="pb_thana" name="pb_upozila" class="form-control" placeholder=""
                                                    type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="Post-office-english" class="col-sm-3 control-label">পোষ্ট অফিস
                                            </label>
                                            <div class="col-sm-3">
                                                <input id="p_postof" name="p_postof" class="form-control" placeholder=""
                                                    type="text">
                                            </div>
                                            <label for="Post-office-bangla" class="col-sm-3 control-label">পোষ্ট অফিস
                                            </label>
                                            <div class="col-sm-3">
                                                <input id="pb_postof" name="pb_postof" class="form-control"
                                                    placeholder="" type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--// Present Address end //-->
                                <!--// Permanent Address strat //-->
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="app-heading">
                                            <h3 class="text-center">স্থায়ী ঠিকানা</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="col-sm-offset-3 col-sm-3">
                                                <div class="app-sub-heading">
                                                    ( ইংরেজিতে )
                                                </div>
                                            </div>
                                            <div class="col-sm-offset-3 col-sm-3">
                                                <div class="app-sub-heading">
                                                    ( বাংলায় )
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="Village-english" class="col-sm-3 control-label">গ্রাম/মহল্লা
                                            </label>
                                            <div class="col-sm-3">
                                                <input id="per_gram" name="per_gram" class="form-control" placeholder=""
                                                    type="text">
                                            </div>
                                            <label for="Village-bangla" class="col-sm-3 control-label">গ্রাম/মহল্লা
                                            </label>
                                            <div class="col-sm-3">
                                                <input id="perb_gram" name="perb_gram" class="form-control"
                                                    placeholder="" type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="Road-block-sector-english"
                                                class="col-sm-3 control-label">রোড/ব্লক/সেক্টর</label>
                                            <div class="col-sm-3">
                                                <input type="text" name="per_rbs" id="per_rbs" class="form-control"
                                                    placeholder="" pwa2-uuid="EDITOR/input-10A-996-79B23-9F3"
                                                    pwa-fake-editor="">
                                            </div>
                                            <label for="Road-block-sector-bangla"
                                                class="col-sm-3 control-label">রোড/ব্লক/সেক্টর</label>
                                            <div class="col-sm-3">
                                                <input id="perb_rbs" name="perb_rbs" class="form-control" placeholder=""
                                                    type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="Word-no-english" class="col-sm-3 control-label">ওয়ার্ড
                                                নং</label>
                                            <div class="col-sm-3">
                                                <input id="per_wordno" name="per_wordno"
                                                    onkeypress="return checkaccnumber(event);" class="form-control"
                                                    placeholder="" type="number">

                                            </div>
                                            <label for="Word-no-bangla" class="col-sm-3 control-label">ওয়ার্ড নং</label>
                                            <div class="col-sm-3">
                                                <input id="perb_wordno" name="perb_wordno"
                                                    onkeypress="return checkaccnumber(event);" class="form-control"
                                                    placeholder="" type="number">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="District-english" class="col-sm-3 control-label">জেলা </label>
                                            <div class="col-sm-3">
                                                <input type="text" name="per_dis" id="per_dis" class="form-control"
                                                    placeholder="" pwa2-uuid="EDITOR/input-7BE-9C2-4800D-E1A"
                                                    pwa-fake-editor="">
                                            </div>
                                            <label for="District-bangla" class="col-sm-3 control-label">জেলা </label>
                                            <div class="col-sm-3">
                                                <input id="perb_dis" name="perb_dis" class="form-control" placeholder=""
                                                    type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="Thana-english"
                                                class="col-sm-3 control-label">উপজেলা/থানা</label>
                                            <div class="col-sm-3">
                                                <input id="per_upozila" name="per_upozila" class="form-control"
                                                    placeholder="" type="text">
                                            </div>
                                            <label for="Thana-bangla" class="col-sm-3 control-label">উপজেলা/থানা</label>
                                            <div class="col-sm-3">
                                                <input id="perb_upozila" name="perb_upozila" class="form-control"
                                                    placeholder="" type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="Post-office-english" class="col-sm-3 control-label">পোষ্ট অফিস
                                            </label>
                                            <div class="col-sm-3">
                                                <input id="per_postof" name="per_postof" class="form-control"
                                                    placeholder="" type="text">
                                            </div>
                                            <label for="Post-office-bangla" class="col-sm-3 control-label">পোষ্ট অফিস
                                            </label>
                                            <div class="col-sm-3">
                                                <input id="perb_postof" name="perb_postof" class="form-control"
                                                    placeholder="" type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--// Permanent Address end //-->
                                <div class="row">
                                    <div class="col-sm-12" style="text-align:center;">
                                        <div class="app-heading">
                                            যোগাযোগের ঠিকানা
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="Mobile" class="col-sm-3 control-label">মোবাইল নং (ইংরেজিতে)
                                                <span>*</span></label>
                                            <div class="col-sm-3">
                                                <input id="mobile" class="form-control" maxlength="11" placeholder=""
                                                    name="mobile" type="number">
                                                <!--<input id="mobile" class="form-control" maxlength="11" onkeypress="return checkaccnumber(event);" placeholder="" name="mobile" type="text">-->
                                            </div>
                                            <label for="Email" class="col-sm-3 control-label">ইমেল (ইংরেজিতে)</label>
                                            <div class="col-sm-3">
                                                <input id="email" class="form-control" placeholder="" name="email"
                                                    type="email">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="Designation" class="col-sm-3 control-label">সংযুক্তি (যদি
                                                থাকে)</label>
                                            <div class="col-sm-9">
                                                <textarea name="attachment" class="form-control" rows="3"
                                                    id="attachment"
                                                    placeholder="উদাহরন: চাকুরীর জন্য বা পাসপোর্টের জন্য, .....ইত্যাদি"
                                                    spellcheck="false"></textarea>
                                                <div class="emoji-editor-bar" ng-version="15.2.10">
                                                    <!---->
                                                </div>
                                                <grammarly-extension data-grammarly-shadow-root="true" class="dnXmp"
                                                    style="position: absolute; top: 0px; left: 0px; pointer-events: none; z-index: auto;">
                                                </grammarly-extension>
                                                <grammarly-extension data-grammarly-shadow-root="true" class="dnXmp"
                                                    style="position: absolute; top: 0px; left: 0px; pointer-events: none; z-index: auto;">
                                                </grammarly-extension>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        {{-- <input type="hidden" name="permanent_upazila_id" value="Bogura">
                        <input type="hidden" name="permanent_postoffice_id" value="পোস্ট অফিস ">
                        <input type="hidden" name="moholla_id" value="dhamirhat">
                        <input type="hidden" name="male" value="1">
                        <input type="hidden" name="female" value="1"> --}}

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>

        <div class="container">
            <section class="our-service mt-4">
                <div class="row">
                    <div class="col-12">
                        <div class="panel panel-info">
                            <div class="panel-heading text-center">
                                <h4 style="font-family: 'Kalpurush', sans-serif;">ইউনিয়ন পরিচিতি</h4>
                            </div>

                            <div class="panel-body">
                                <div class="col-sm-2">
                                    <a href="https://lgdhaka.com/chairman">
                                        <div class="text-center">
                                            <div class="service-box" id="1" data-url="citizens-certificate"><img
                                                    src="https://lgdhaka.com/public/assets/images/default.png">
                                                <div style="color: #00A5FF;" class="section-title">চেয়ারম্যান
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-sm-2">
                                    <a href="https://lgdhaka.com/secretary">
                                        <div class="text-center">
                                            <div class="service-box" id="1" data-url="citizens-certificate"><img
                                                    src="https://lgdhaka.com/public/assets/images/default.png">
                                                <div style="color: #00A5FF;" class="section-title">ইউপি প্রশাসনিক
                                                    কর্মকর্তা
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-sm-2">
                                    <a href="https://lgdhaka.com/computer_operator">
                                        <div class="text-center">
                                            <div class="service-box" id="1" data-url="citizens-certificate"><img
                                                    src="https://lgdhaka.com/public/assets/images/default.png">
                                                <div style="color: #00A5FF; font-size: 15px" class="section-title">হিসাব
                                                    সহকারী
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-sm-2">
                                    <a href="https://lgdhaka.com/member">
                                        <div class="text-center">
                                            <div class="service-box" id="1" data-url="citizens-certificate"><img
                                                    src="https://lgdhaka.com/public/assets/images/default.png">
                                                <div style="color: #00A5FF;" class="section-title">মেম্বার
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-sm-2">
                                    <a href="https://lgdhaka.com/village_police">
                                        <div class="text-center">
                                            <div class="service-box" id="1" data-url="citizens-certificate"><img
                                                    src="https://lgdhaka.com/public/assets/images/default.png">
                                                <div style="color: #00A5FF;" class="section-title">গ্রামপুলিশ
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-sm-2">
                                    <a href="https://lgdhaka.com/udc">
                                        <div class="text-center">
                                            <div class="service-box" id="1" data-url="citizens-certificate"><img
                                                    src="https://lgdhaka.com/public/assets/images/default.png">
                                                <div style="color: #00A5FF;" class="section-title">উদ্যোক্তা
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="container">
            <section class="our-service mt-4">
                <div class="row">
                    <div class="col-12">
                        <div class="panel panel-info">
                            <div class="panel-heading text-center">
                                <h4 style="font-family: 'Kalpurush', sans-serif;">ই-সেবা সমূহের আবেদন</h4>
                            </div>

                            <div class="panel-body">
                                <div class="col-sm-2">
                                    <a
                                        href="https://lgdhaka.com/application/eyJpdiI6IkRMalVMSUJORHpwd3VoR2RsUDlDa1E9PSIsInZhbHVlIjoiXC9EeEphWnQ2bGhPdFNuXC9DNCt4VUV3PT0iLCJtYWMiOiI2YTQ1ZjljODI1MTk4YWRlMjQyNjllMTA5NWVkNmQ3Mjc0Y2RkZTMyZmE5OTJjZDJmMTk5NzM3MjE5NjA3Y2EzIn0=">
                                        <div class="text-center">
                                            <div class="service-box" id="1" data-url="citizens-certificate"><img
                                                    src="https://lgdhaka.com/public/assets/images/icon/nagorik.png">
                                                <div style="color: #00A5FF;" class="section-title">নাগরিক সনদ
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-sm-2">
                                    <a
                                        href="https://lgdhaka.com/application/eyJpdiI6Imc4bHlsYkRhZFFramcxK0FxZmJXMnc9PSIsInZhbHVlIjoiUlZGdGpId1dNemphdWVQWHpiZ2VxUT09IiwibWFjIjoiMTU3YmZiNWEwN2UyNmFjNjY5OGZmM2VmOWVkMjI3ZWU1YjUxM2RlMTJkM2RhNGRkMTI2NjE4MzQ4ZDhmYjBkNyJ9">
                                        <div class="text-center">
                                            <div class="service-box" id="3" data-url="trade-license-certificate"><img
                                                    src="https://lgdhaka.com/public/assets/images/icon/Trade License.png">
                                                <div style="color: #00A5FF;" class="section-title">ট্রেড লাইসেন্স
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-sm-2">
                                    <a
                                        href="https://lgdhaka.com/application/eyJpdiI6ImZqVWZ5YU9BRDQwXC9YSHRsYmJSN3dBPT0iLCJ2YWx1ZSI6ImhVeVpmWUpMbXhwZDZURmxMNENmOWc9PSIsIm1hYyI6IjIzMjZkZWY4NjQ1Y2I3MzIzM2EzMjczN2ZhNDI4N2Y2YThhZjM3NThhNTI2NzcxM2U4NDM3YTQ5OWUyNmEyZjYifQ==">
                                        <div class="text-center">
                                            <div class="service-box" id="2" data-url="warrior-certificates"><img
                                                    src="https://lgdhaka.com/public/assets/images/icon/owaris.png">
                                                <div style="color: #00A5FF;" class="section-title">ওয়ারিশ সনদ
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-sm-2">
                                    <a
                                        href="https://lgdhaka.com/application/eyJpdiI6Ik5BNXhMVUtQTVhEcFVJaEI5bkZROWc9PSIsInZhbHVlIjoiVUhIRDBFSkIzM254OG96NHRZbmtzZz09IiwibWFjIjoiYWM2NjMwYzA0ODU3YzE2YzAzNGY4ZTI0MGU2NzA1MTA1NWQ2OTk3MTVkMDgzZTY3NTc2ZDhhYTkzNDM2ZmEyYiJ9">
                                        <div class="text-center">
                                            <div class="service-box" id="4" data-url="character-certificate"><img
                                                    src="https://lgdhaka.com/public/assets/images/icon/character certificate.png">
                                                <div style="color: #00A5FF;" class="section-title">চারিত্রিক সনদ
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-sm-2">
                                    <a
                                        href="https://lgdhaka.com/application/eyJpdiI6IjN1N080M1J3czFyMTMzMmZPQkpkaWc9PSIsInZhbHVlIjoieStXS2hqc0xydFwvbWY1bzJsUm9MaVE9PSIsIm1hYyI6ImNkNGMxNjc3ZmJkY2I1ZmY3NmQyODI5Y2FiZDM5ZDNjNDhkYzJjYjQ1YzFmODczOGM2YWUwMzBiZThmNmI2YWYifQ==">
                                        <div class="text-center">
                                            <div class="service-box" id="4" data-url="new_voter-certificate"><img
                                                    src="https://lgdhaka.com/public/assets/images/icon/votar id.png">
                                                <div style="color: #00A5FF;" class="section-title">নতুন ভোটার</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-sm-2">
                                    <a
                                        href="https://lgdhaka.com/application/eyJpdiI6ImcyOFRpVVwvT2lDcW1KYmdZTVRJVDh3PT0iLCJ2YWx1ZSI6ImJjMHZ0d1d0clJJQ3lpeFplbHRtMUE9PSIsIm1hYyI6IjBmNWRhN2QxZjE2MTgwZTEwNDU3OGQwZjI2YWQyNmM5ZjE5YjFiNDQ1OWJjNDM1ZTY5ZTkxMTBiNTE1MmI5ODAifQ==">
                                        <div class="text-center">
                                            <div class="service-box" id="6" data-url="landless-certificates"><img
                                                    src="https://lgdhaka.com/public/assets/images/icon/landscape.png">
                                                <div style="color: #00A5FF;" class="section-title">ভূমিহীন সনদ
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-sm-2">
                                    <a
                                        href="https://lgdhaka.com/application/eyJpdiI6ImdOTlBRXC9xcEg0WmJ3cHU0bVNTd0RRPT0iLCJ2YWx1ZSI6ImVvK25IVVVFZXdyaGM0eXJWeGNIaWc9PSIsIm1hYyI6ImRmZDhjOTcwMmNhYjUzZjVmZWNhMTNlZWJiNGNjMWI3NTY3ZGEzNjBkZDk0NmQxMGY5MTBjYzQ2ODgwODNkMDUifQ==">
                                        <div class="service-box" id="5" data-url="death-certificate"><img
                                                src="https://lgdhaka.com/public/assets/images/icon/death.png">
                                            <div style="color: #00A5FF;" class="section-title">মৃত্যু প্রত্যয়ন আবেদন
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-sm-2">
                                    <a
                                        href="https://lgdhaka.com/application/eyJpdiI6Im1Od1E1ZWdlMmE0Q0llV1B4azdPQUE9PSIsInZhbHVlIjoiaDlHSWlUTktvSjV1VkhrY3ZUZHU3dz09IiwibWFjIjoiNDM2OGY3OTY5NDM2NDQxNTJjOTNhMDdjOThlODVhNzA4YzZmYmRhODc2ZmYyZWMyYWRiM2E3NmJmYTg4YmI1MSJ9">
                                        <div class="text-center">
                                            <div class="service-box" id="8" data-url="annual-income-certification"><img
                                                    src="https://lgdhaka.com/public/assets/images/icon/yearly income.png">
                                                <div style="color: #00A5FF;" class="section-title">বার্ষিক আয়ের
                                                    প্রত্যয়ন
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-sm-2">
                                    <a
                                        href="https://lgdhaka.com/application/eyJpdiI6InlTeEcwdGJ1U0xlZ3NrdndWYjJsaGc9PSIsInZhbHVlIjoiNlFpYUxzaDNudUtUcGdnaW1TdUtzdz09IiwibWFjIjoiYTg2Yjk0OWJlZjYxNTBlMmQ5NzhjNjQ2OWJhODM1NDQ2ODYxYmJmNjUzODRjZWE0Y2UxNTM4YzdhYTBhZWIyMyJ9">
                                        <div class="text-center">
                                            <div class="service-box" id="9" data-url="family-certification"><img
                                                    src="https://lgdhaka.com/public/assets/images/icon/family.png">
                                                <div style="color: #00A5FF;" class="section-title">পারিবারিক সনদ
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-sm-2">
                                    <a
                                        href="https://lgdhaka.com/application/eyJpdiI6IkdOVXhZd2s5T1I2RWNhTjNzNTVFOXc9PSIsInZhbHVlIjoiRjFcLytSb0VqUnJlUFJNMG1rU0VDdFE9PSIsIm1hYyI6IjllZjI4MjY2Y2ExOGM1Y2YzMmUxOGVkZjVjM2M3YjA3MTE2MzEzZThiM2QzYTRlYjhkNTRkY2M1NjJhNDU0YjYifQ==">
                                        <div class="text-center">
                                            <div class="service-box" id="10" data-url="unmarried-certificates"><img
                                                    src="https://lgdhaka.com/public/assets/images/icon/unmarrage.png">
                                                <div style="color: #00A5FF;" class="section-title">অবিবাহিত সনদ
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-sm-2">
                                    <a
                                        href="https://lgdhaka.com/application/eyJpdiI6Ijc3K0V2OUdiV3B6a0kwRGJtZUdNckE9PSIsInZhbHVlIjoiNWQ0OFpQanVYd1psYW9haUdcLzVoeFE9PSIsIm1hYyI6ImE0ZGU4ZWEyNDc1NDRhMmFhMjFmOTVlODg0ODUxYTBmNGRjMWZkODQzYzkxNmI5OThiOWFjZWFiNGM0ZWFmZmQifQ==">
                                        <div class="text-center">
                                            <div class="service-box" id="10" data-url="unmarried-certificates"><img
                                                    src="https://lgdhaka.com/public/assets/images/icon/bibahito.png">
                                                <div style="color: #00A5FF;" class="section-title">বিবাহিত সনদ
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-sm-2">
                                    <a
                                        href="https://lgdhaka.com/application/eyJpdiI6IjBNb0xUXC8xTElaMlp4MWFBdnF0RFZBPT0iLCJ2YWx1ZSI6Ims3aEl5aFVhZEpjZE9QTEhDSFNmK2c9PSIsIm1hYyI6Ijc2M2U3MWRkM2E0MjA5OTMwZjg0MThhZWUzYzdkMjA4OTc4YmJmMGRiODk0MWUyMmQ0NjAzNjVlZjY1ZGVkZDUifQ==">
                                        <div class="text-center">
                                            <div class="service-box" id="7" data-url="same-name-certification"><img
                                                    src="https://lgdhaka.com/public/assets/images/icon/akenamercertificate.png">
                                                <div style="color: #00A5FF;" class="section-title">একই নামের প্রত্যয়ন
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-sm-2">
                                    <a
                                        href="https://lgdhaka.com/application/eyJpdiI6IjVrUTU5UjNPZVNsRTBrZ2FVb01VNUE9PSIsInZhbHVlIjoiWVFDZTVyZzZETzFUb1JXeU15cE44dz09IiwibWFjIjoiYzI3YzQyZTkzMDIzNWY0MWUxMWY3NWMzNjJjYTk4OGEzOTliOGFlODI1ZTllMTdhZDI1MWRkY2RhZTBhMGU0OCJ9">
                                        <div class="text-center">
                                            <div class="service-box" id="11" data-url="re-marriage-certificate"><img
                                                    src="https://lgdhaka.com/public/assets/images/icon/punno_bibaho.png">
                                                <div style="color: #00A5FF;" class="section-title">পুনঃ বিবাহ না হওয়া
                                                    সনদ
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-sm-2">
                                    <a
                                        href="https://lgdhaka.com/application/eyJpdiI6IkZveFhQcmdkNXVPTUMrWnMzdGQ4c0E9PSIsInZhbHVlIjoiZ1J0bU9COW16bldHSFZhdFEyOHc1dz09IiwibWFjIjoiZWNmYTZhYTJlNDRhZDVmMGQ4MGQzMjVjZjJjMTlmN2IxOGFiNDRlZDc3OWUzN2I4OTc1MWRhZjM2OWU1OWYxMyJ9">
                                        <div class="text-center">
                                            <div class="service-box" id="13" data-url="disability-certificates"><img
                                                    src="https://lgdhaka.com/public/assets/images/icon/potibondi.png">
                                                <div style="color: #00A5FF;" class="section-title">প্রকৃত বাকঁ ও শ্রবন
                                                    প্রতিবন্ধী
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-sm-2">
                                    <a
                                        href="https://lgdhaka.com/application/eyJpdiI6Im5kY2tCRnQ0djJuXC92clJSUDdSNkJBPT0iLCJ2YWx1ZSI6IlJBQ3l1aDdqY1puU3J3VTJ3SVwvejB3PT0iLCJtYWMiOiI4ZTUzNmM0YTQxYjdiMTBlOWE3ODk0NWE4MGU0MmI3OTViMDBkZjJlZTgwM2Y0MGUwMWQzYjE0M2NkZDY1NTM4In0=">
                                        <div class="text-center">
                                            <div class="service-box" id="14" data-url="non-receipt-letter"><img
                                                    src="https://lgdhaka.com/public/assets/images/icon/onapotti.png">
                                                <div style="color: #00A5FF;" class="section-title">অনাপত্তি পত্র
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-sm-2">
                                    <a
                                        href="https://lgdhaka.com/application/eyJpdiI6ImxURUVaYW1udkJLWkhGZWdWWkg1bGc9PSIsInZhbHVlIjoianpiYXZMXC9jOXpcL3E5ZnBpZkNSeFwvUT09IiwibWFjIjoiNTFjZTk5Mzc5MjMxMTdiYmRhNGQ3MDZlZTk0N2FhMzU5YjgxMTg2NTRlZDg5ZTJmYzBiYTk1ZDE5Yzk2YzFlNiJ9">
                                        <div class="text-center">
                                            <div class="service-box" id="15" data-url="certificate"><img
                                                    src="https://lgdhaka.com/public/assets/images/icon/pottoyon.png">
                                                <div style="color: #00A5FF;" class="section-title">প্রত্যয়নপত্র
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-sm-2">
                                    <a
                                        href="https://lgdhaka.com/application/eyJpdiI6IlBsUW14XC9XRERaWkUzSEhXSTNSaHl3PT0iLCJ2YWx1ZSI6IlA4c2QzdkhDNlwvMnhYaTlFZDM1SzVRPT0iLCJtYWMiOiIxYjM4ZWEwODk0YWQwN2ZjNWUzZGRiY2NiODMwZDJiNTJjYTkxZDI0NDQ3YjA1NjcyN2FhN2Q3MDhmZTI1OTUxIn0=">
                                        <div class="text-center">
                                            <div class="service-box" id="12" data-url="permit-certificate"><img
                                                    src="https://lgdhaka.com/public/assets/images/icon/permission.png">
                                                <div style="color: #00A5FF;" class="section-title">অনুমতি পত্র
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-sm-2">
                                    <a
                                        href="https://lgdhaka.com/application/eyJpdiI6IjVXZlVMTlVsRWFPOWJQQ2doc3hCT3c9PSIsInZhbHVlIjoiTzROdGlqRnJwTlhHTkNXUklManFKUT09IiwibWFjIjoiOTdhNDBjMGRhMDRjMWMzYTU3YzEyNzZlYjc4ZGFiZGY0MjM2MzhjY2ZiYjYwNjVmYzRhNDY4YmNmOGMyNjYxNSJ9">
                                        <div class="text-center">
                                            <div class="service-box" id="16" data-url="voter-transfer"><img
                                                    src="https://lgdhaka.com/public/assets/images/icon/votar id.png">
                                                <div style="color: #00A5FF;" class="section-title">ভোটার আইডি স্থানান্তর
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-sm-2">
                                    <a href="javascript:void(0)">
                                        <div class="text-center">
                                            <div class="service-box" id="17"
                                                data-url="permit-for-construction-of-infrastructure"><img
                                                    src="https://lgdhaka.com/public/assets/images/icon/roadexcavation.png">
                                                <div style="color: #00A5FF;" class="section-title">রাস্তা খনন
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-sm-2">
                                    <a
                                        href="https://lgdhaka.com/application/eyJpdiI6Ik13R1luVmVzdlwvbUhQQkplc3RhdU5BPT0iLCJ2YWx1ZSI6IlVGbVVycjNqbytNcEFjTEUrNjZ6cnc9PSIsIm1hYyI6IjNmMzBlMDNmNGUwZjUzZTVjNDBiMjJhZmY3OGE5ODc0NTI5MGI5NGNiOTM4YjZiNjYwMzIyOTc5YWFjYmU4NzYifQ==">
                                        <div class="text-center">
                                            <div class="service-box" id="18" data-url="identity-card-amendment"><img
                                                    src="https://lgdhaka.com/public/assets/images/icon/swastika.png">
                                                <div style="color: #00A5FF;" class="section-title">সনাতন ধর্ম
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-sm-2">
                                    <a
                                        href="https://lgdhaka.com/application/eyJpdiI6ImJ0WVdnWFljYnhyU0ZhaktPalVMaXc9PSIsInZhbHVlIjoiN3lmVG1DVGVvT1BsbVN0SDhaWjdyQT09IiwibWFjIjoiYjM0YmRkNjBhODg3MGM5MjcxM2Q4MzRhNDhlMjYyZWE4ZDMzYzQ5NmYwYjc0NDAzOTZiNTQ0NDI4YTc1YzA4NCJ9">
                                        <div class="text-center">
                                            <div class="service-box" id="19"
                                                data-url="certificate-of-non-inclusion-of-voters"><img
                                                    src="https://lgdhaka.com/public/assets/images/icon/river.png">
                                                <div style="color: #00A5FF;" class="section-title">নদী ভাঙন
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>


                                <div class="col-sm-2">
                                    <a
                                        href="https://lgdhaka.com/application/eyJpdiI6IkwyckcrZGpZQlRpSWlrRlF3aDd0Nnc9PSIsInZhbHVlIjoiQXZTVGxKeWo2THlTbXBYZXZucGVRQT09IiwibWFjIjoiYzYwYTRkZDUwYjI3M2U5YjEzYzcxNDM5MGJhZWY4Yjc4NjJhMGQzOWUxODI4YmMzODgzZDE1NGRiM2ZlZjRmNCJ9">
                                        <div class="text-center">
                                            <div class="service-box" id="15" data-url="certificate"><img
                                                    src="https://lgdhaka.com/public/assets/images/icon/character certificate.png">
                                                <div style="color: #00A5FF;" class="section-title">আনুমানিক বয়স প্রত্যয়ন
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-sm-2">
                                    <a
                                        href="https://lgdhaka.com/application/eyJpdiI6IjM1RG52bEdaNXNYRmFWa3oyaWxaNmc9PSIsInZhbHVlIjoiNG1UTThOOE9Id1p5XC9ESUVpSzhJTXc9PSIsIm1hYyI6ImM2MGJiYzgwNTgwOTkzMWVlYjJlZDk3ZjI0Y2VjYTY2NDUxNmI5MzI1NGNmYTNjYTYwMDczMmI5MDA2ODAyMGMifQ==">
                                        <div class="text-center">
                                            <div class="service-box" id="15" data-url="certificate"><img
                                                    src="https://lgdhaka.com/public/assets/images/icon/pottoyon.png">
                                                <div style="color: #00A5FF;" class="section-title">প্রত্যয়নপত্র
                                                    (অন্যান্য)
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="container">
            <section class="our-service mt-4">
                <div class="row">
                    <div class="col-12">
                        <div class="panel panel-info">
                            <div class="panel-heading text-center">
                                <h4 style="font-family: 'Kalpurush', sans-serif;">সুবিধাসমূহ</h4>
                            </div>

                            <div class="panel-body">
                                <div class="row">

                                    <div class="col-md-3 col-sm-12">

                                        <div class="fiture">

                                            <div>

                                                <img src="https://lgdhaka.com/public/assets/images/jacai.png">

                                            </div>

                                            <h4 style="font-family: 'Kalpurush', sans-serif;">অনলাইনে আবেদন ও সনদ যাচাই
                                            </h4>

                                        </div>

                                    </div>

                                    <div class="col-md-3 col-sm-12">

                                        <div class="fiture">

                                            <div>

                                                <img src="https://lgdhaka.com/public/assets/images/certificate.png">

                                            </div>

                                            <h4 style="font-family: 'Kalpurush', sans-serif;">সনদ বাংলা ও ইংরেজী প্রদান
                                            </h4>

                                        </div>

                                    </div>

                                    <div class="col-md-3 col-sm-12">

                                        <div class="fiture">

                                            <div>

                                                <img src="https://lgdhaka.com/public/assets/images/folder.png"
                                                    style="padding:7px 0; width:60px">

                                            </div>

                                            <h4 style="font-family: 'Kalpurush', sans-serif;">সকল সনদ স্টোরেজ সুবিধা
                                            </h4>

                                        </div>

                                    </div>

                                    <div class="col-md-3 col-sm-12">

                                        <div class="fiture">

                                            <div>

                                                <img src="https://lgdhaka.com/public/assets/images/text-message.png">

                                            </div>

                                            <h4 style="font-family: 'Kalpurush', sans-serif;">সনদ তৈরীর এসএমএস প্রেরণ
                                            </h4>
                                        </div>

                                    </div>

                                    <div class="col-md-3 col-sm-12">

                                        <div class="fiture">

                                            <div>

                                                <img src="https://lgdhaka.com/public/assets/images/smartphone.png">

                                            </div>

                                            <h4 style="font-family: 'Kalpurush', sans-serif;">মোবাইল অ্যাপসের মাধ্যমে
                                                আবেদন ও সনদ যাচাই</h4>

                                        </div>

                                    </div>

                                    <div class="col-md-3 col-sm-12">

                                        <div class="fiture">

                                            <div>

                                                <img src="https://lgdhaka.com/public/assets/images/magnifying-lens.png">

                                            </div>

                                            <h4 style="font-family: 'Kalpurush', sans-serif;">বিশ্বের যে কোনো স্থান থেকে
                                                আবেদন ও সনদ যাচাই </h4>

                                        </div>

                                    </div>

                                    <div class="col-md-3 col-sm-12">

                                        <div class="fiture">

                                            <img src="https://lgdhaka.com/public/assets/images/id-card.png">
                                            <br>
                                            <h4 style="font-family: 'Kalpurush', sans-serif;">প্রত্যয়নপত্র যাচাই সুবিধা
                                            </h4>

                                        </div>

                                    </div>

                                    <div class="col-md-3 col-sm-12">

                                        <div class="fiture">

                                            <div>

                                                <img src="https://lgdhaka.com/public/assets/images/house.png">

                                            </div>

                                            <h4 style="font-family: 'Kalpurush', sans-serif;">ওয়ার্ড ভিত্তিক হোল্ডিং
                                                ট্যাক্স ব্যবস্থাপনা ও রিপোর্ট তৈরী</h4>
                                        </div>

                                    </div>

                                    <div class="col-md-3 col-sm-12">

                                        <div class="fiture">

                                            <div>

                                                <img src="https://lgdhaka.com/public/assets/images/expired.png">

                                            </div>

                                            <h4 style="font-family: 'Kalpurush', sans-serif;">মেয়াদ উত্তীর্ণ ট্রেড
                                                লাইসেন্স <br>৩০ জুনের পর গ্রাহকের নিকট এসএমএস প্রেরণ ব্যবস্থা </h4>

                                        </div>

                                    </div>

                                    <div class="col-md-3 col-sm-12">

                                        <div class="fiture">

                                            <div>

                                                <img src="https://lgdhaka.com/public/assets/images/diploma.png">

                                            </div>

                                            <h4 style="font-family: 'Kalpurush', sans-serif;"> সনদ হারিয়ে বা নষ্ট হলে
                                                অনলাইনে সহজে আবেদন ও সুবিধা প্রাপ্তি</h4>

                                        </div>

                                    </div>

                                    <div class="col-md-3 col-sm-12">

                                        <div class="fiture">

                                            <div>

                                                <img src="https://lgdhaka.com/public/assets/images/salary.png">

                                            </div>

                                            <h4 style="font-family: 'Kalpurush', sans-serif;">রেজিস্টার , আয় -ব্যয় ,
                                                অডিট রিপোর্ট তৈরী ব্যবস্থাপনা </h4>

                                        </div>

                                    </div>

                                    <div class="col-md-3 col-sm-12">

                                        <div class="fiture">

                                            <div>

                                                <img src="https://lgdhaka.com/public/assets/images/shield.png">

                                            </div>

                                            <h4 style="font-family: 'Kalpurush', sans-serif;">সরকারের ডিজিটাল
                                                আর্কিটেকচার উপযোগী এবং উন্নত ডিজিটাল নিরাপত্তা ব্যবস্থা ও তথ্যের
                                                গোপনীয়তা রক্ষা </h4>

                                        </div>

                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="container">
            <section class="our-service mt-4">
                <div class="row">
                    <div class="col-12">
                        <div class="panel panel-info">
                            <div class="panel-heading text-center">
                                <h4 style="font-family: 'Kalpurush', sans-serif;">ঢাকা স্থানীয় সরকার প্রশাসন</h4>
                            </div>

                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-5">
                                        <a href="">
                                            <img src="https://lgdhaka.com/central/public/assets/images/profile/21726722267.jpg"
                                                class="img-fluid rounded-circle dc_image">
                                        </a>
                                        <div class="dc_name"><a href="">
                                                <h4 style=" color: #00A5FF;font-family: 'Kalpurush', sans-serif;">
                                                    <strong>তানভীর আহমেদ</strong><br>
                                                    জেলা প্রশাসক ও জেলা <br>ম্যাজিস্ট্রেট,ঢাকা।
                                                </h4>
                                            </a>
                                        </div>
                                        <div class="col-md-12 col-sm-12">
                                            <h5 style="font-size: 15px;line-height: 20px;font-family: 'Kalpurush', sans-serif;"
                                                class="text-justify"></h5>
                                        </div>
                                    </div>
                                    <div class="col-md-2 borderdc">

                                    </div>
                                    <div class="col-md-5">
                                        <a href="">
                                            <img src="https://lgdhaka.com/central/public/assets/images/profile/31731410272.jpg"
                                                class="rounded-circle ddlg_image">
                                        </a>
                                        <div class="ddlg_name"><a href="">
                                                <h4 style=" color: #00A5FF;font-family: 'Kalpurush', sans-serif;">
                                                    <strong>মোঃ ইকবাল হোসেন</strong><br>
                                                    উপপরিচালক স্থানীয় <br>সরকার,ঢাকা।
                                                </h4>
                                            </a>
                                        </div>
                                        <div class="col-md-12 col-sm-12">
                                            <h5 style="font-size: 15px;line-height: 20px;font-family: 'Kalpurush', sans-serif;"
                                                class="text-justify"></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="container">
            <section class="our-service mt-4">
                <div class="row">
                    <div class="col-12">
                        <div class="panel panel-info">
                            <div class="panel-heading text-center">
                                <h4 style="font-family: 'Kalpurush', sans-serif;">ইউনিয়ন পরিষদ সেবা ব্যবস্থাপনা, ঢাকা
                                </h4>
                            </div>

                            <div class="panel-body">
                                <div class="row">

                                    <div class="col-md-7 col-sm-12 text-justify">


                                        <h5 style="line-height: 25px;font-family: 'Kalpurush', sans-serif;">

                                        </h5>
                                    </div>
                                    <div class="col-md-5">
                                        <img style="width: 100%;height: 75%;"
                                            src="https://lgdhaka.com/public/assets/images/digital_union.jpg">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </section>

    {{--<div class="bg-white mt-1 mb-1">--}}

        {{-- <div class="container">--}}

            {{-- <div class="row pb-3">--}}
                {{-- <div class="col-sm- col- mt-4">--}}

                    {{-- </div>--}}

                {{-- <div class="col-sm-12 col-12 mt-4">--}}

                    {{-- <div class="partner">--}}
                        {{-- <div class="partner-text margin-bottom-0 relative">--}}
                            {{-- <h4 class="mb-0 text-center"><span class="boder-bottom border-primary text-primary"
                                    style="border-bottom: 4px solid #4DBAF5;font-family: 'Kalpurush', sans-serif;">মোবাইল
                                    অ্যাপ্লিকেশন </span></h4>--}}
                            {{-- <div style="border-bottom:1px solid #e0b047; position:absolute; width:100%; top:30px">
                            </div>--}}
                            {{-- </div>--}}
                        {{-- <div style="margin-top: 15px;" class="row">--}}

                            {{-- <div class="col-sm-2 col-2">--}}
                                {{-- <div class="our-partner mt-3 text-center">--}}
                                    {{-- <div> <img style="width: 150px;"
                                            src="https://lgdhaka.com/public/assets/images/apps/app1.png"
                                            class="img-fluid mb-3 img-height"></div>--}}
                                    {{-- </div>--}}
                                {{-- </div>--}}
                            {{-- <div class="col-sm-2 col-2">--}}
                                {{-- <div class="our-partner mt-3 text-center">--}}
                                    {{-- <div> <img style="width: 150px;"
                                            src="https://lgdhaka.com/public/assets/images/apps/app2.png"
                                            class="img-fluid mb-2 img-height-40 mx-auto"></div>--}}
                                    {{-- </div>--}}
                                {{-- </div>--}}
                            {{-- <div class="col-sm-2 col-2">--}}
                                {{-- <div class="our-partner mt-3 text-center">--}}
                                    {{-- <div><img style="width: 150px;"
                                            src="https://lgdhaka.com/public/assets/images/apps/app3.png"
                                            class="img-fluid mb-2 img-height-40 mx-auto"></div>--}}
                                    {{-- </div>--}}
                                {{-- </div>--}}
                            {{-- <div class="col-sm-2 col-2">--}}
                                {{-- <div class="our-partner mt-3 text-center">--}}
                                    {{-- <div><img style="width: 150px;"
                                            src="https://lgdhaka.com/public/assets/images/apps/app4.png"
                                            class="img-fluid mb-2 img-height-40 mx-auto"></div>--}}
                                    {{-- </div>--}}
                                {{-- </div>--}}
                            {{-- <div class="col-sm-2 col-2">--}}
                                {{-- <div class="our-partner mt-3 text-center">--}}
                                    {{-- <div><img style="width: 150px;"
                                            src="https://lgdhaka.com/public/assets/images/apps/app5.png"
                                            class="img-fluid mb-2 img-height-40 mx-auto"></div>--}}
                                    {{-- </div>--}}
                                {{-- </div>--}}
                            {{-- <div class="col-sm-2 col-2">--}}
                                {{-- <br><br><br><br>--}}
                                {{-- <div class="our-partner mt-3 text-center">--}}
                                    {{-- <div>
                                        <h4 style="font-family: 'Kalpurush', sans-serif;">ডাউনলোড করতে গুগল প্লেতে ক্লিক
                                            করুন</h4><a
                                            href="https://play.google.com/store/apps/details?id=com.dhaka.smartUnion"><img
                                                style="width: 150px;"
                                                src="https://lgdhaka.com/public/assets/images/apps/playstore.png"
                                                class="img-fluid mb-2 img-height-40 mx-auto"></a>
                                    </div>--}}
                                    {{-- </div>--}}
                                {{-- </div>--}}
                            {{-- </div>--}}
                        {{-- </div>--}}

                    {{-- </div>--}}
                {{-- </div>--}}

            {{-- </div>--}}

        {{--</div>--}}




    <!-- Bootstrap 3 JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://lgdhaka.com/assets/js/bootstrap.min.js"></script>
    <script src="https://lgdhaka.com/assets/js/bootstrap-datepicker.min.js"></script>
    <script src="https://lgdhaka.com/assets/js/custom.min.js"></script>
    <script src="https://lgdhaka.com/assets/js/sweetalert2@9.min.js"></script>
    <script src="https://lgdhaka.com/assets/js/new/jquery-3.2.1.min.js"></script>
    <script src="https://lgdhaka.com/assets/js/new/popper.min.js"></script>
    <script src="https://lgdhaka.com/assets/js/new/bootstrap.min.js"></script>
    <script src="https://lgdhaka.com/assets/js/new/select2.full.min.js"></script>
    <script src="https://lgdhaka.com/assets/js/new/list.min.js"></script>
</body>

</html>
