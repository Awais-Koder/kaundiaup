<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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
</head>

<body>






<section id="page-body">

    {{--    <div class="container">--}}
    {{--        <section class="our-service mt-4">--}}
    {{--            <div class="row">--}}
    {{--                <div class="col-12">--}}
    {{--                    <div class="panel panel-info">--}}
    {{--                        <div class="panel-heading text-center">--}}
    {{--                            <h4>সিটিজেন আইডি ও ইউপি ট্যাক্স যাচাই</h4>--}}
    {{--                        </div>--}}

    {{--                        <div class="panel-body">--}}
    {{--                            <form id="tax-verification-form">--}}
    {{--                                <div class="row form-group">--}}
    {{--                                    <label class="col-sm-3 form-control-label">জেলা</label>--}}
    {{--                                    <div class="col-sm-3">--}}
    {{--                                        <select onchange="form_location($(this).val(), 'app_upazila_id', 3 )" name="app_district_id" id="app_district_id" class="form-control" data-parsley-required="" disabled="">--}}
    {{--                                            <option value="" class="app_district_append">জেলা নির্বাচন করুন-</option>--}}

    {{--                                            <option value="9">কুমিল্লা</option>--}}
    {{--                                            <option value="10">ফেনী</option>--}}
    {{--                                            <option value="11">ব্রাহ্মণবাড়িয়া</option>--}}
    {{--                                            <option value="12">রাঙ্গামাটি</option>--}}
    {{--                                            <option value="13">নোয়াখালী</option>--}}
    {{--                                            <option value="14">চাঁদপুর</option>--}}
    {{--                                            <option value="15">লক্ষ্মীপুর</option>--}}
    {{--                                            <option value="16">চট্টগ্রাম</option>--}}
    {{--                                            <option value="17">কক্সবাজার</option>--}}
    {{--                                            <option value="19">বান্দরবান</option>--}}
    {{--                                            <option value="20">সিরাজগঞ্জ</option>--}}
    {{--                                            <option value="21">পাবনা</option>--}}
    {{--                                            <option value="22">বগুড়া</option>--}}
    {{--                                            <option value="23">রাজশাহী</option>--}}
    {{--                                            <option value="24">নাটোর</option>--}}
    {{--                                            <option value="25">জয়পুরহাট</option>--}}
    {{--                                            <option value="26">চাঁপাইনবাবগঞ্জ</option>--}}
    {{--                                            <option value="27">নওগাঁ</option>--}}
    {{--                                            <option value="28">যশোর</option>--}}
    {{--                                            <option value="29">সাতক্ষীরা</option>--}}
    {{--                                            <option value="30">মেহেরপুর</option>--}}
    {{--                                            <option value="31">নড়াইল</option>--}}
    {{--                                            <option value="32">চুয়াডাঙ্গা</option>--}}
    {{--                                            <option value="33">কুষ্টিয়া</option>--}}
    {{--                                            <option value="34">মাগুরা</option>--}}
    {{--                                            <option value="35">খুলনা</option>--}}
    {{--                                            <option value="36">বাগেরহাট</option>--}}
    {{--                                            <option value="37">ঝিনাইদহ</option>--}}
    {{--                                            <option value="38">ঝালকাঠি</option>--}}
    {{--                                            <option value="39">পটুয়াখালী</option>--}}
    {{--                                            <option value="40">পিরোজপুর</option>--}}
    {{--                                            <option value="41">বরিশাল</option>--}}
    {{--                                            <option value="42">ভোলা</option>--}}
    {{--                                            <option value="43">বরগুনা</option>--}}
    {{--                                            <option value="44">সিলেট</option>--}}
    {{--                                            <option value="45">মৌলভীবাজার</option>--}}
    {{--                                            <option value="46">হবিগঞ্জ</option>--}}
    {{--                                            <option value="47">সুনামগঞ্জ</option>--}}
    {{--                                            <option value="48">নরসিংদী</option>--}}
    {{--                                            <option value="49">গাজীপুর</option>--}}
    {{--                                            <option value="50">শরীয়তপুর</option>--}}
    {{--                                            <option value="51">নারায়ণগঞ্জ</option>--}}
    {{--                                            <option value="52">টাঙ্গাইল</option>--}}
    {{--                                            <option value="53">কিশোরগঞ্জ</option>--}}
    {{--                                            <option value="54">মানিকগঞ্জ</option>--}}
    {{--                                            <option value="55" selected="">ঢাকা</option>--}}
    {{--                                            <option value="56">মুন্সিগঞ্জ</option>--}}
    {{--                                            <option value="57">রাজবাড়ী</option>--}}
    {{--                                            <option value="58">মাদারীপুর</option>--}}
    {{--                                            <option value="59">গোপালগঞ্জ</option>--}}
    {{--                                            <option value="60">ফরিদপুর</option>--}}
    {{--                                            <option value="61">পঞ্চগড়</option>--}}
    {{--                                            <option value="62">দিনাজপুর</option>--}}
    {{--                                            <option value="63">লালমনিরহাট</option>--}}
    {{--                                            <option value="64">নীলফামারী</option>--}}
    {{--                                            <option value="65">গাইবান্ধা</option>--}}
    {{--                                            <option value="66">ঠাকুরগাঁও</option>--}}
    {{--                                            <option value="67">রংপুর</option>--}}
    {{--                                            <option value="68">কুড়িগ্রাম</option>--}}
    {{--                                            <option value="69">শেরপুর</option>--}}
    {{--                                            <option value="70">ময়মনসিংহ</option>--}}
    {{--                                            <option value="71">জামালপুর</option>--}}
    {{--                                            <option value="72">নেত্রকোণা</option>--}}
    {{--                                            <option value="5114">খাগড়াছড়ি</option>--}}
    {{--                                            <option value="6366">খাগড়াছড়ি</option>--}}
    {{--                                            <option value="6660">তুরাগ</option>--}}

    {{--                                        </select>--}}
    {{--                                    </div>--}}

    {{--                                    <label class="col-md-3 form-control-label">উপজেলা</label>--}}
    {{--                                    <div class="col-md-3">--}}
    {{--                                        <select onchange="app_union($(this).val(), 'app_union_id' )" name="app_upazila_id" id="app_upazila_id" class="form-control" data-parsley-required=""><option value="">সিলেক্ট করুন</option><option value="437">সাভার</option><option value="438">ধামরাই</option><option value="439">কেরাণীগঞ্জ</option><option value="440">নবাবগঞ্জ</option><option value="441">দোহার</option><option value="6428">ঢাকা দক্ষিণ সিটি কর্পোরেশন</option><option value="6436">ঢাকা উত্তর সিটি কর্পোরেশন</option><option value="6442">ক্যান্টনমেন্ট</option><option value="6516">লিখক্ষেত</option><option value="6541">সাভার পৌরসভা</option><option value="6578">গেন্ডারিয়া</option><option value="6590">আদাবর</option><option value="6616">কামরাঙ্গীরচর</option><option value="6635">রূপনগর</option><option value="6641">পল্লবী</option><option value="6643">সুত্রাপুর</option><option value="6661">তুরাগ</option><option value="6673">ডেমরা</option><option value="6710">ঢাকা পলিটেকনিক ১২০৮</option></select>--}}

    {{--                                        <span id="app_upazila_id_feedback" class="help-block"></span>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}

    {{--                                <div class="row form-group">--}}
    {{--                                    <label class="col-md-3 form-control-label">ইউনিয়ন</label>--}}
    {{--                                    <div class="col-md-3">--}}
    {{--                                        <select onchange="app_word_no($(this).val(), 'app_ward_id')" name="union_id" id="union_id" class="form-control" data-parsley-required="">--}}
    {{--                                            <option value="" id="app_union_append">চিহ্নিত করুন</option>--}}
    {{--                                        </select>--}}

    {{--                                        <span id="app_union_id_feedback" class="text-danger"></span>--}}
    {{--                                    </div>--}}

    {{--                                    <label class="col-md-3 form-control-label">ওয়ার্ড নং</label>--}}
    {{--                                    <div class="col-md-3">--}}
    {{--                                        <select onchange="app_moholla($(this).val(), 'app_moholla' )" name="ward_id" id="ward_id" class="form-control" data-parsley-required="">--}}
    {{--                                            <option value="" id="app_ward_id_append">চিহ্নিত করুন</option>--}}
    {{--                                        </select>--}}

    {{--                                        <span id="app_ward_id_append" class="text-danger"></span>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}

    {{--                                <div class="row form-group">--}}
    {{--                                    <label class="col-md-3 form-control-label">মহল্লা</label>--}}
    {{--                                    <div class="col-md-3">--}}
    {{--                                        <select name="moholla" id="moholla" class="form-control" data-parsley-required="">--}}
    {{--                                            <option value="" id="moholla_append">চিহ্নিত করুন</option>--}}
    {{--                                        </select>--}}

    {{--                                        <span id="moholla_feedback" class="text-danger"></span>--}}
    {{--                                    </div>--}}

    {{--                                    <label class="col-md-3 form-control-label">হোল্ডিং নং</label>--}}
    {{--                                    <div class="col-md-3">--}}
    {{--                                        <input type="text" id="holding_no" name="holding_no" class="form-control" placeholder="হোল্ডিং নং দিন...">--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}

    {{--                                <div class="row">--}}
    {{--                                    <div class="col-md-12">--}}
    {{--                                        <button class="btn btn-success btn-lg btn-block" type="submit">সার্চ করুন</button>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </form>--}}

    {{--                            <div id="tax-verification-info" class="mt-5"></div>--}}
    {{--                        </div>--}}

    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </section>--}}
    {{--    </div>--}}

    <div class="container">
        <section class="our-service mt-4">
            <div class="row">
                <div class="col-12">
                    <div class="panel panel-info">
                        <div class="panel-heading text-center">
                            <h4 style="font-family: 'Kalpurush', sans-serif;">আবেদন ও সনদ যাচাই করুন</h4>
                            <h4 style="font-family: 'Kalpurush', sans-serif; color:red"> নোটঃ আপনি যদি আবেদন পত্র যাচাই করতে চান তাহলে <strong style="font-weight: bold"> পিন নং </strong> অথবা সনদ পত্র যাচাই করতে চাইলে <strong style="font-weight: bold"> সনদ নং </strong> দিয়ে সার্চ করুন।</h4>
                        </div>

                        <div class="panel-body">
                            <div class="col-md-3 col-sm-12 mt-1">
                                <label class="col-md-4 form-control-label">ধরন</label>
                                <div class="col-md-9">
                                    <select class="form-control" id="appType" style="font-family: 'Kalpurush', sans-serif;">

                                        <option value="">নির্বাচন করুন</option>
                                        <option value="1">আবেদন যাচাই</option>
                                        <option value="2">সনদ যাচাই</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12 mt-1">
                                <label class="col-md-5 form-control-label">সনদের ধরন</label>
                                <div class="col-md-9">
                                    <select class="form-control" id="type" style="font-family: 'Kalpurush', sans-serif;">

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
                                    <input type="text" id="search-data" style="font-family: 'Kalpurush', sans-serif;" class="form-control" placeholder="এখানে সার্চ দিন...">
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-12 mt-1">
                                <label class="col-md-5 form-control-label">&nbsp;&nbsp;</label>
                                <div class="col-md-9">
                                    <button class="btn" type="button" id="search" style="color: #00A5FF; font-family: 'Kalpurush', sans-serif;"><span style="color: white"> সার্চ করুন</span></button>
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
            <div class="col-md-8 col-md-offset-2">
                <h2 class="text-center">Citizen Registration Form</h2>


                <form action="{{ route('citizens.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="alert alert-warning">* Marked fields are mandatory.</div>

                    <div class="form-group">
                        <label for="certificate">সার্টিফিকেট নির্বাচন করুন <span class="text-danger">*</span></label>
                        <select name="certificate_id" id="certificate" class="form-control">
                            <option selected disabled>-- সার্টিফিকেট নির্বাচন করুন --</option>
                            @foreach (App\Services\DefaultService::getCertificates() as $certificate)
                                <option value="{{ $certificate->id }}" {{ old('certificate_id') == $certificate->id ? 'selected' : '' }}>
                                    {{ $certificate->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('certificate_id') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="name_bn">নাম (বাংলায়) <span class="text-danger">*</span></label>
                        <input type="text" name="name_bn" id="name_bn" class="form-control" placeholder="পুরো নাম" value="{{ old('name_bn') }}">
                        @error('name_bn') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="name_en">নাম (ইংরেজিতে) <span class="text-danger">*</span></label>
                        <input type="text" name="name_en" id="name_en" class="form-control" placeholder="Full name" value="{{ old('name_en') }}">
                        @error('name_en') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="father_name_en">পিইংরেজিতে বাবার নাম <span class="text-danger">*</span></label>
                        <input type="text" name="father_name_en" id="father_name_en" class="form-control" placeholder="পিতার নাম" value="{{ old('father_name_en') }}">
                        @error('father_name_en') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="father_name_en">নাম (ইংরেজিতে) <span class="text-danger">*</span></label>
                        <input type="text" name="father_name_bn" id="father_name_bn" class="form-control" placeholder="নাম (ইংরেজিতে)" value="{{ old('father_name_bn') }}">
                        @error('father_name_bn') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="mother_name_bn">মায়ের নাম <span class="text-danger">*</span></label>
                        <input type="text" name="mother_name_bn" id="mother_name_bn" class="form-control" placeholder="মায়ের নাম" value="{{ old('mother_name_bn') }}">
                        @error('mother_name_bn') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="image">ছবি</label>
                        <input type="file" name="image" id="image" class="form-control" value="{{ old('image') }}" accept="image/*">
                        @error('image') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="mobile">মোবাইল</label>
                        <input type="text" name="mobile" id="mobile" class="form-control" placeholder="ইংরেজিতে লিখুন" value="{{ old('mobile') }}">
                        @error('mobile') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="permanent_holding_no">হোল্ডিং নং ( ইংরেজিতে )</label>
                        <input type="text" name="permanent_holding_no" id="permanent_holding_no" class="form-control" placeholder="হোল্ডিং নং ( ইংরেজিতে )" value="{{ old('permanent_holding_no') }}">
                        @error('permanent_holding_no') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="ward_no">ওয়ার্ড নং</label>
                        <input type="text" name="ward_no" id="ward_no" class="form-control" placeholder="ওয়ার্ড নং" value="{{ old('ward_no') }}">
                        @error('ward_no') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="religion">ধর্ম </label>
                        <input type="text" name="religion" id="religion" class="form-control" placeholder="ধর্ম " value="{{ old('religion') }}">
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
                        <input type="date" name="birth_date" id="birth_date" class="form-control" placeholder="0000-00-00">
                        @error('birth_date') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="nid">জাতীয় পরিচয়পত্র নম্বর (ইংরেজিতে) <span class="text-danger">*</span></label>
                        <input type="text" name="nid" id="nid" class="form-control" placeholder="1616623458679011">
                        @error('nid') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="passport_no">পাসপোর্ট নম্বর (ইংরেজিতে) <span class="text-danger">*</span></label>
                        <input type="text" name="passport_no" id="passport_no" class="form-control" placeholder="1616623458679011">
                        @error('passport_no') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="probable_rate">বার্ষিক মূল্যায়ন <span class="text-danger">*</span></label>
                        <input type="number" name="probable_rate" id="probable_rate" class="form-control" placeholder="বার্ষিক মূল্যায়ন">
                        @error('probable_rate') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="halson_percentage">ধার্যকৃত কর <span class="text-danger">*</span></label>
                        <span class="help-block">(আইন অনুযায়ী ধার্যকৃত কর ১-৭%)</span>
                        <div class="row">
                            <div class="col-xs-6">
                                <input type="number" step="any" name="halson_percentage" id="halson_percentage" class="form-control" placeholder="%">
                            </div>
                            <div class="col-xs-6">
                                <input type="number" name="halson_tax" id="halson_tax" class="form-control" placeholder="কর" readonly>
                            </div>
                        </div>
                        @error('halson_percentage') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <input type="hidden" name="permanent_upazila_id" value="Bogura">
                    <input type="hidden" name="permanent_postoffice_id" value="পোস্ট অফিস ">
                    <input type="hidden" name="moholla_id" value="dhamirhat">
                    <input type="hidden" name="male" value="1">
                    <input type="hidden" name="female" value="1">

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
                                        <div class="service-box" id="1" data-url="citizens-certificate"><img src="https://lgdhaka.com/public/assets/images/default.png">
                                            <div style="color: #00A5FF;" class="section-title">চেয়ারম্যান
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-2">
                                <a href="https://lgdhaka.com/secretary">
                                    <div class="text-center">
                                        <div class="service-box" id="1" data-url="citizens-certificate"><img src="https://lgdhaka.com/public/assets/images/default.png">
                                            <div style="color: #00A5FF;" class="section-title">ইউপি প্রশাসনিক কর্মকর্তা
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-2">
                                <a href="https://lgdhaka.com/computer_operator">
                                    <div class="text-center">
                                        <div class="service-box" id="1" data-url="citizens-certificate"><img src="https://lgdhaka.com/public/assets/images/default.png">
                                            <div style="color: #00A5FF; font-size: 15px" class="section-title">হিসাব সহকারী
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-2">
                                <a href="https://lgdhaka.com/member">
                                    <div class="text-center">
                                        <div class="service-box" id="1" data-url="citizens-certificate"><img src="https://lgdhaka.com/public/assets/images/default.png">
                                            <div style="color: #00A5FF;" class="section-title">মেম্বার
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-2">
                                <a href="https://lgdhaka.com/village_police">
                                    <div class="text-center">
                                        <div class="service-box" id="1" data-url="citizens-certificate"><img src="https://lgdhaka.com/public/assets/images/default.png">
                                            <div style="color: #00A5FF;" class="section-title">গ্রামপুলিশ
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-2">
                                <a href="https://lgdhaka.com/udc">
                                    <div class="text-center">
                                        <div class="service-box" id="1" data-url="citizens-certificate"><img src="https://lgdhaka.com/public/assets/images/default.png">
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
                                <a href="https://lgdhaka.com/application/eyJpdiI6IkRMalVMSUJORHpwd3VoR2RsUDlDa1E9PSIsInZhbHVlIjoiXC9EeEphWnQ2bGhPdFNuXC9DNCt4VUV3PT0iLCJtYWMiOiI2YTQ1ZjljODI1MTk4YWRlMjQyNjllMTA5NWVkNmQ3Mjc0Y2RkZTMyZmE5OTJjZDJmMTk5NzM3MjE5NjA3Y2EzIn0=">
                                    <div class="text-center">
                                        <div class="service-box" id="1" data-url="citizens-certificate"><img src="https://lgdhaka.com/public/assets/images/icon/nagorik.png">
                                            <div style="color: #00A5FF;" class="section-title">নাগরিক সনদ
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-2">
                                <a href="https://lgdhaka.com/application/eyJpdiI6Imc4bHlsYkRhZFFramcxK0FxZmJXMnc9PSIsInZhbHVlIjoiUlZGdGpId1dNemphdWVQWHpiZ2VxUT09IiwibWFjIjoiMTU3YmZiNWEwN2UyNmFjNjY5OGZmM2VmOWVkMjI3ZWU1YjUxM2RlMTJkM2RhNGRkMTI2NjE4MzQ4ZDhmYjBkNyJ9">
                                    <div class="text-center">
                                        <div class="service-box" id="3" data-url="trade-license-certificate"><img src="https://lgdhaka.com/public/assets/images/icon/Trade License.png">
                                            <div style="color: #00A5FF;" class="section-title">ট্রেড লাইসেন্স
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-2">
                                <a href="https://lgdhaka.com/application/eyJpdiI6ImZqVWZ5YU9BRDQwXC9YSHRsYmJSN3dBPT0iLCJ2YWx1ZSI6ImhVeVpmWUpMbXhwZDZURmxMNENmOWc9PSIsIm1hYyI6IjIzMjZkZWY4NjQ1Y2I3MzIzM2EzMjczN2ZhNDI4N2Y2YThhZjM3NThhNTI2NzcxM2U4NDM3YTQ5OWUyNmEyZjYifQ==">
                                    <div class="text-center">
                                        <div class="service-box" id="2" data-url="warrior-certificates"><img src="https://lgdhaka.com/public/assets/images/icon/owaris.png">
                                            <div style="color: #00A5FF;" class="section-title">ওয়ারিশ সনদ
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-2">
                                <a href="https://lgdhaka.com/application/eyJpdiI6Ik5BNXhMVUtQTVhEcFVJaEI5bkZROWc9PSIsInZhbHVlIjoiVUhIRDBFSkIzM254OG96NHRZbmtzZz09IiwibWFjIjoiYWM2NjMwYzA0ODU3YzE2YzAzNGY4ZTI0MGU2NzA1MTA1NWQ2OTk3MTVkMDgzZTY3NTc2ZDhhYTkzNDM2ZmEyYiJ9">
                                    <div class="text-center">
                                        <div class="service-box" id="4" data-url="character-certificate"><img src="https://lgdhaka.com/public/assets/images/icon/character certificate.png">
                                            <div style="color: #00A5FF;" class="section-title">চারিত্রিক সনদ
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-2">
                                <a href="https://lgdhaka.com/application/eyJpdiI6IjN1N080M1J3czFyMTMzMmZPQkpkaWc9PSIsInZhbHVlIjoieStXS2hqc0xydFwvbWY1bzJsUm9MaVE9PSIsIm1hYyI6ImNkNGMxNjc3ZmJkY2I1ZmY3NmQyODI5Y2FiZDM5ZDNjNDhkYzJjYjQ1YzFmODczOGM2YWUwMzBiZThmNmI2YWYifQ==">
                                    <div class="text-center">
                                        <div class="service-box" id="4" data-url="new_voter-certificate"><img src="https://lgdhaka.com/public/assets/images/icon/votar id.png">
                                            <div style="color: #00A5FF;" class="section-title">নতুন ভোটার</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-2">
                                <a href="https://lgdhaka.com/application/eyJpdiI6ImcyOFRpVVwvT2lDcW1KYmdZTVRJVDh3PT0iLCJ2YWx1ZSI6ImJjMHZ0d1d0clJJQ3lpeFplbHRtMUE9PSIsIm1hYyI6IjBmNWRhN2QxZjE2MTgwZTEwNDU3OGQwZjI2YWQyNmM5ZjE5YjFiNDQ1OWJjNDM1ZTY5ZTkxMTBiNTE1MmI5ODAifQ==">
                                    <div class="text-center">
                                        <div class="service-box" id="6" data-url="landless-certificates"><img src="https://lgdhaka.com/public/assets/images/icon/landscape.png">
                                            <div style="color: #00A5FF;" class="section-title">ভূমিহীন সনদ
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-2">
                                <a href="https://lgdhaka.com/application/eyJpdiI6ImdOTlBRXC9xcEg0WmJ3cHU0bVNTd0RRPT0iLCJ2YWx1ZSI6ImVvK25IVVVFZXdyaGM0eXJWeGNIaWc9PSIsIm1hYyI6ImRmZDhjOTcwMmNhYjUzZjVmZWNhMTNlZWJiNGNjMWI3NTY3ZGEzNjBkZDk0NmQxMGY5MTBjYzQ2ODgwODNkMDUifQ==">
                                    <div class="service-box" id="5" data-url="death-certificate"><img src="https://lgdhaka.com/public/assets/images/icon/death.png">
                                        <div style="color: #00A5FF;" class="section-title">মৃত্যু প্রত্যয়ন আবেদন
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-2">
                                <a href="https://lgdhaka.com/application/eyJpdiI6Im1Od1E1ZWdlMmE0Q0llV1B4azdPQUE9PSIsInZhbHVlIjoiaDlHSWlUTktvSjV1VkhrY3ZUZHU3dz09IiwibWFjIjoiNDM2OGY3OTY5NDM2NDQxNTJjOTNhMDdjOThlODVhNzA4YzZmYmRhODc2ZmYyZWMyYWRiM2E3NmJmYTg4YmI1MSJ9">
                                    <div class="text-center">
                                        <div class="service-box" id="8" data-url="annual-income-certification"><img src="https://lgdhaka.com/public/assets/images/icon/yearly income.png">
                                            <div style="color: #00A5FF;" class="section-title">বার্ষিক আয়ের প্রত্যয়ন
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-2">
                                <a href="https://lgdhaka.com/application/eyJpdiI6InlTeEcwdGJ1U0xlZ3NrdndWYjJsaGc9PSIsInZhbHVlIjoiNlFpYUxzaDNudUtUcGdnaW1TdUtzdz09IiwibWFjIjoiYTg2Yjk0OWJlZjYxNTBlMmQ5NzhjNjQ2OWJhODM1NDQ2ODYxYmJmNjUzODRjZWE0Y2UxNTM4YzdhYTBhZWIyMyJ9">
                                    <div class="text-center">
                                        <div class="service-box" id="9" data-url="family-certification"><img src="https://lgdhaka.com/public/assets/images/icon/family.png">
                                            <div style="color: #00A5FF;" class="section-title">পারিবারিক সনদ
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-2">
                                <a href="https://lgdhaka.com/application/eyJpdiI6IkdOVXhZd2s5T1I2RWNhTjNzNTVFOXc9PSIsInZhbHVlIjoiRjFcLytSb0VqUnJlUFJNMG1rU0VDdFE9PSIsIm1hYyI6IjllZjI4MjY2Y2ExOGM1Y2YzMmUxOGVkZjVjM2M3YjA3MTE2MzEzZThiM2QzYTRlYjhkNTRkY2M1NjJhNDU0YjYifQ==">
                                    <div class="text-center">
                                        <div class="service-box" id="10" data-url="unmarried-certificates"><img src="https://lgdhaka.com/public/assets/images/icon/unmarrage.png">
                                            <div style="color: #00A5FF;" class="section-title">অবিবাহিত সনদ
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-2">
                                <a href="https://lgdhaka.com/application/eyJpdiI6Ijc3K0V2OUdiV3B6a0kwRGJtZUdNckE9PSIsInZhbHVlIjoiNWQ0OFpQanVYd1psYW9haUdcLzVoeFE9PSIsIm1hYyI6ImE0ZGU4ZWEyNDc1NDRhMmFhMjFmOTVlODg0ODUxYTBmNGRjMWZkODQzYzkxNmI5OThiOWFjZWFiNGM0ZWFmZmQifQ==">
                                    <div class="text-center">
                                        <div class="service-box" id="10" data-url="unmarried-certificates"><img src="https://lgdhaka.com/public/assets/images/icon/bibahito.png">
                                            <div style="color: #00A5FF;" class="section-title">বিবাহিত সনদ
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-2">
                                <a href="https://lgdhaka.com/application/eyJpdiI6IjBNb0xUXC8xTElaMlp4MWFBdnF0RFZBPT0iLCJ2YWx1ZSI6Ims3aEl5aFVhZEpjZE9QTEhDSFNmK2c9PSIsIm1hYyI6Ijc2M2U3MWRkM2E0MjA5OTMwZjg0MThhZWUzYzdkMjA4OTc4YmJmMGRiODk0MWUyMmQ0NjAzNjVlZjY1ZGVkZDUifQ==">
                                    <div class="text-center">
                                        <div class="service-box" id="7" data-url="same-name-certification"><img src="https://lgdhaka.com/public/assets/images/icon/akenamercertificate.png">
                                            <div style="color: #00A5FF;" class="section-title">একই নামের প্রত্যয়ন
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-2">
                                <a href="https://lgdhaka.com/application/eyJpdiI6IjVrUTU5UjNPZVNsRTBrZ2FVb01VNUE9PSIsInZhbHVlIjoiWVFDZTVyZzZETzFUb1JXeU15cE44dz09IiwibWFjIjoiYzI3YzQyZTkzMDIzNWY0MWUxMWY3NWMzNjJjYTk4OGEzOTliOGFlODI1ZTllMTdhZDI1MWRkY2RhZTBhMGU0OCJ9">
                                    <div class="text-center">
                                        <div class="service-box" id="11" data-url="re-marriage-certificate"><img src="https://lgdhaka.com/public/assets/images/icon/punno_bibaho.png">
                                            <div style="color: #00A5FF;" class="section-title">পুনঃ বিবাহ না হওয়া সনদ
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-2">
                                <a href="https://lgdhaka.com/application/eyJpdiI6IkZveFhQcmdkNXVPTUMrWnMzdGQ4c0E9PSIsInZhbHVlIjoiZ1J0bU9COW16bldHSFZhdFEyOHc1dz09IiwibWFjIjoiZWNmYTZhYTJlNDRhZDVmMGQ4MGQzMjVjZjJjMTlmN2IxOGFiNDRlZDc3OWUzN2I4OTc1MWRhZjM2OWU1OWYxMyJ9">
                                    <div class="text-center">
                                        <div class="service-box" id="13" data-url="disability-certificates"><img src="https://lgdhaka.com/public/assets/images/icon/potibondi.png">
                                            <div style="color: #00A5FF;" class="section-title">প্রকৃত বাকঁ ও শ্রবন প্রতিবন্ধী
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-2">
                                <a href="https://lgdhaka.com/application/eyJpdiI6Im5kY2tCRnQ0djJuXC92clJSUDdSNkJBPT0iLCJ2YWx1ZSI6IlJBQ3l1aDdqY1puU3J3VTJ3SVwvejB3PT0iLCJtYWMiOiI4ZTUzNmM0YTQxYjdiMTBlOWE3ODk0NWE4MGU0MmI3OTViMDBkZjJlZTgwM2Y0MGUwMWQzYjE0M2NkZDY1NTM4In0=">
                                    <div class="text-center">
                                        <div class="service-box" id="14" data-url="non-receipt-letter"><img src="https://lgdhaka.com/public/assets/images/icon/onapotti.png">
                                            <div style="color: #00A5FF;" class="section-title">অনাপত্তি পত্র
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-2">
                                <a href="https://lgdhaka.com/application/eyJpdiI6ImxURUVaYW1udkJLWkhGZWdWWkg1bGc9PSIsInZhbHVlIjoianpiYXZMXC9jOXpcL3E5ZnBpZkNSeFwvUT09IiwibWFjIjoiNTFjZTk5Mzc5MjMxMTdiYmRhNGQ3MDZlZTk0N2FhMzU5YjgxMTg2NTRlZDg5ZTJmYzBiYTk1ZDE5Yzk2YzFlNiJ9">
                                    <div class="text-center">
                                        <div class="service-box" id="15" data-url="certificate"><img src="https://lgdhaka.com/public/assets/images/icon/pottoyon.png">
                                            <div style="color: #00A5FF;" class="section-title">প্রত্যয়নপত্র
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-2">
                                <a href="https://lgdhaka.com/application/eyJpdiI6IlBsUW14XC9XRERaWkUzSEhXSTNSaHl3PT0iLCJ2YWx1ZSI6IlA4c2QzdkhDNlwvMnhYaTlFZDM1SzVRPT0iLCJtYWMiOiIxYjM4ZWEwODk0YWQwN2ZjNWUzZGRiY2NiODMwZDJiNTJjYTkxZDI0NDQ3YjA1NjcyN2FhN2Q3MDhmZTI1OTUxIn0=">
                                    <div class="text-center">
                                        <div class="service-box" id="12" data-url="permit-certificate"><img src="https://lgdhaka.com/public/assets/images/icon/permission.png">
                                            <div style="color: #00A5FF;" class="section-title">অনুমতি পত্র
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-2">
                                <a href="https://lgdhaka.com/application/eyJpdiI6IjVXZlVMTlVsRWFPOWJQQ2doc3hCT3c9PSIsInZhbHVlIjoiTzROdGlqRnJwTlhHTkNXUklManFKUT09IiwibWFjIjoiOTdhNDBjMGRhMDRjMWMzYTU3YzEyNzZlYjc4ZGFiZGY0MjM2MzhjY2ZiYjYwNjVmYzRhNDY4YmNmOGMyNjYxNSJ9">
                                    <div class="text-center">
                                        <div class="service-box" id="16" data-url="voter-transfer"><img src="https://lgdhaka.com/public/assets/images/icon/votar id.png">
                                            <div style="color: #00A5FF;" class="section-title">ভোটার আইডি স্থানান্তর
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-2">
                                <a href="javascript:void(0)">
                                    <div class="text-center">
                                        <div class="service-box" id="17" data-url="permit-for-construction-of-infrastructure"><img src="https://lgdhaka.com/public/assets/images/icon/roadexcavation.png">
                                            <div style="color: #00A5FF;" class="section-title">রাস্তা খনন
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-2">
                                <a href="https://lgdhaka.com/application/eyJpdiI6Ik13R1luVmVzdlwvbUhQQkplc3RhdU5BPT0iLCJ2YWx1ZSI6IlVGbVVycjNqbytNcEFjTEUrNjZ6cnc9PSIsIm1hYyI6IjNmMzBlMDNmNGUwZjUzZTVjNDBiMjJhZmY3OGE5ODc0NTI5MGI5NGNiOTM4YjZiNjYwMzIyOTc5YWFjYmU4NzYifQ==">
                                    <div class="text-center">
                                        <div class="service-box" id="18" data-url="identity-card-amendment"><img src="https://lgdhaka.com/public/assets/images/icon/swastika.png">
                                            <div style="color: #00A5FF;" class="section-title">সনাতন ধর্ম
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-2">
                                <a href="https://lgdhaka.com/application/eyJpdiI6ImJ0WVdnWFljYnhyU0ZhaktPalVMaXc9PSIsInZhbHVlIjoiN3lmVG1DVGVvT1BsbVN0SDhaWjdyQT09IiwibWFjIjoiYjM0YmRkNjBhODg3MGM5MjcxM2Q4MzRhNDhlMjYyZWE4ZDMzYzQ5NmYwYjc0NDAzOTZiNTQ0NDI4YTc1YzA4NCJ9">
                                    <div class="text-center">
                                        <div class="service-box" id="19" data-url="certificate-of-non-inclusion-of-voters"><img src="https://lgdhaka.com/public/assets/images/icon/river.png">
                                            <div style="color: #00A5FF;" class="section-title">নদী ভাঙন
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>


                            <div class="col-sm-2">
                                <a href="https://lgdhaka.com/application/eyJpdiI6IkwyckcrZGpZQlRpSWlrRlF3aDd0Nnc9PSIsInZhbHVlIjoiQXZTVGxKeWo2THlTbXBYZXZucGVRQT09IiwibWFjIjoiYzYwYTRkZDUwYjI3M2U5YjEzYzcxNDM5MGJhZWY4Yjc4NjJhMGQzOWUxODI4YmMzODgzZDE1NGRiM2ZlZjRmNCJ9">
                                    <div class="text-center">
                                        <div class="service-box" id="15" data-url="certificate"><img src="https://lgdhaka.com/public/assets/images/icon/character certificate.png">
                                            <div style="color: #00A5FF;" class="section-title">আনুমানিক বয়স প্রত্যয়ন
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-2">
                                <a href="https://lgdhaka.com/application/eyJpdiI6IjM1RG52bEdaNXNYRmFWa3oyaWxaNmc9PSIsInZhbHVlIjoiNG1UTThOOE9Id1p5XC9ESUVpSzhJTXc9PSIsIm1hYyI6ImM2MGJiYzgwNTgwOTkzMWVlYjJlZDk3ZjI0Y2VjYTY2NDUxNmI5MzI1NGNmYTNjYTYwMDczMmI5MDA2ODAyMGMifQ==">
                                    <div class="text-center">
                                        <div class="service-box" id="15" data-url="certificate"><img src="https://lgdhaka.com/public/assets/images/icon/pottoyon.png">
                                            <div style="color: #00A5FF;" class="section-title">প্রত্যয়নপত্র (অন্যান্য)
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

                                        <h4 style="font-family: 'Kalpurush', sans-serif;">অনলাইনে আবেদন ও সনদ যাচাই</h4>

                                    </div>

                                </div>

                                <div class="col-md-3 col-sm-12">

                                    <div class="fiture">

                                        <div>

                                            <img src="https://lgdhaka.com/public/assets/images/certificate.png">

                                        </div>

                                        <h4 style="font-family: 'Kalpurush', sans-serif;">সনদ বাংলা ও ইংরেজী প্রদান</h4>

                                    </div>

                                </div>

                                <div class="col-md-3 col-sm-12">

                                    <div class="fiture">

                                        <div>

                                            <img src="https://lgdhaka.com/public/assets/images/folder.png" style="padding:7px 0; width:60px">

                                        </div>

                                        <h4 style="font-family: 'Kalpurush', sans-serif;">সকল সনদ স্টোরেজ সুবিধা</h4>

                                    </div>

                                </div>

                                <div class="col-md-3 col-sm-12">

                                    <div class="fiture">

                                        <div>

                                            <img src="https://lgdhaka.com/public/assets/images/text-message.png">

                                        </div>

                                        <h4 style="font-family: 'Kalpurush', sans-serif;">সনদ তৈরীর এসএমএস প্রেরণ</h4>
                                    </div>

                                </div>

                                <div class="col-md-3 col-sm-12">

                                    <div class="fiture">

                                        <div>

                                            <img src="https://lgdhaka.com/public/assets/images/smartphone.png">

                                        </div>

                                        <h4 style="font-family: 'Kalpurush', sans-serif;">মোবাইল অ্যাপসের মাধ্যমে আবেদন ও সনদ যাচাই</h4>

                                    </div>

                                </div>

                                <div class="col-md-3 col-sm-12">

                                    <div class="fiture">

                                        <div>

                                            <img src="https://lgdhaka.com/public/assets/images/magnifying-lens.png">

                                        </div>

                                        <h4 style="font-family: 'Kalpurush', sans-serif;">বিশ্বের যে কোনো স্থান থেকে আবেদন ও সনদ যাচাই </h4>

                                    </div>

                                </div>

                                <div class="col-md-3 col-sm-12">

                                    <div class="fiture">

                                        <img src="https://lgdhaka.com/public/assets/images/id-card.png">
                                        <br>
                                        <h4 style="font-family: 'Kalpurush', sans-serif;">প্রত্যয়নপত্র যাচাই সুবিধা </h4>

                                    </div>

                                </div>

                                <div class="col-md-3 col-sm-12">

                                    <div class="fiture">

                                        <div>

                                            <img src="https://lgdhaka.com/public/assets/images/house.png">

                                        </div>

                                        <h4 style="font-family: 'Kalpurush', sans-serif;">ওয়ার্ড ভিত্তিক হোল্ডিং ট্যাক্স ব্যবস্থাপনা ও রিপোর্ট তৈরী</h4>
                                    </div>

                                </div>

                                <div class="col-md-3 col-sm-12">

                                    <div class="fiture">

                                        <div>

                                            <img src="https://lgdhaka.com/public/assets/images/expired.png">

                                        </div>

                                        <h4 style="font-family: 'Kalpurush', sans-serif;">মেয়াদ উত্তীর্ণ ট্রেড লাইসেন্স <br>৩০ জুনের পর  গ্রাহকের নিকট এসএমএস প্রেরণ ব্যবস্থা </h4>

                                    </div>

                                </div>

                                <div class="col-md-3 col-sm-12">

                                    <div class="fiture">

                                        <div>

                                            <img src="https://lgdhaka.com/public/assets/images/diploma.png">

                                        </div>

                                        <h4 style="font-family: 'Kalpurush', sans-serif;"> সনদ হারিয়ে বা নষ্ট হলে অনলাইনে সহজে আবেদন ও সুবিধা প্রাপ্তি</h4>

                                    </div>

                                </div>

                                <div class="col-md-3 col-sm-12">

                                    <div class="fiture">

                                        <div>

                                            <img src="https://lgdhaka.com/public/assets/images/salary.png">

                                        </div>

                                        <h4 style="font-family: 'Kalpurush', sans-serif;">রেজিস্টার , আয় -ব্যয় , অডিট রিপোর্ট তৈরী ব্যবস্থাপনা </h4>

                                    </div>

                                </div>

                                <div class="col-md-3 col-sm-12">

                                    <div class="fiture">

                                        <div>

                                            <img src="https://lgdhaka.com/public/assets/images/shield.png">

                                        </div>

                                        <h4 style="font-family: 'Kalpurush', sans-serif;">সরকারের ডিজিটাল আর্কিটেকচার উপযোগী এবং উন্নত ডিজিটাল নিরাপত্তা ব্যবস্থা ও তথ্যের গোপনীয়তা রক্ষা </h4>

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
                                        <img src="https://lgdhaka.com/central/public/assets/images/profile/21726722267.jpg" class="img-fluid rounded-circle dc_image">
                                    </a><div class="dc_name"><a href="">
                                            <h4 style=" color: #00A5FF;font-family: 'Kalpurush', sans-serif;"><strong>তানভীর আহমেদ</strong><br>
                                                জেলা প্রশাসক ও জেলা <br>ম্যাজিস্ট্রেট,ঢাকা।
                                            </h4>
                                        </a>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <h5 style="font-size: 15px;line-height: 20px;font-family: 'Kalpurush', sans-serif;" class="text-justify"></h5>
                                    </div>
                                </div>
                                <div class="col-md-2 borderdc">

                                </div>
                                <div class="col-md-5">
                                    <a href="">
                                        <img src="https://lgdhaka.com/central/public/assets/images/profile/31731410272.jpg" class="rounded-circle ddlg_image">
                                    </a><div class="ddlg_name"><a href="">
                                            <h4 style=" color: #00A5FF;font-family: 'Kalpurush', sans-serif;"><strong>মোঃ ইকবাল হোসেন</strong><br>
                                                উপপরিচালক স্থানীয় <br>সরকার,ঢাকা।
                                            </h4>
                                        </a>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <h5 style="font-size: 15px;line-height: 20px;font-family: 'Kalpurush', sans-serif;" class="text-justify"></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div></div></section>
    </div>

    <div class="container">
        <section class="our-service mt-4">
            <div class="row">
                <div class="col-12">
                    <div class="panel panel-info">
                        <div class="panel-heading text-center">
                            <h4 style="font-family: 'Kalpurush', sans-serif;">ইউনিয়ন পরিষদ সেবা ব্যবস্থাপনা, ঢাকা</h4>
                        </div>

                        <div class="panel-body">
                            <div class="row">

                                <div class="col-md-7 col-sm-12 text-justify">


                                    <h5 style="line-height: 25px;font-family: 'Kalpurush', sans-serif;">

                                    </h5>
                                </div>
                                <div class="col-md-5">
                                    <img style="width: 100%;height: 75%;" src="https://lgdhaka.com/public/assets/images/digital_union.jpg">
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

{{--    <div class="container">--}}

{{--        <div class="row pb-3">--}}
{{--            <div class="col-sm- col- mt-4">--}}

{{--            </div>--}}

{{--            <div class="col-sm-12 col-12 mt-4">--}}

{{--                <div class="partner">--}}
{{--                    <div class="partner-text margin-bottom-0 relative">--}}
{{--                        <h4 class="mb-0 text-center"><span class="boder-bottom border-primary text-primary" style="border-bottom: 4px solid #4DBAF5;font-family: 'Kalpurush', sans-serif;">মোবাইল অ্যাপ্লিকেশন </span></h4>--}}
{{--                        <div style="border-bottom:1px solid #e0b047; position:absolute; width:100%; top:30px"></div>--}}
{{--                    </div>--}}
{{--                    <div style="margin-top: 15px;" class="row">--}}

{{--                        <div class="col-sm-2 col-2">--}}
{{--                            <div class="our-partner mt-3 text-center">--}}
{{--                                <div> <img style="width: 150px;" src="https://lgdhaka.com/public/assets/images/apps/app1.png" class="img-fluid mb-3 img-height"></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-sm-2 col-2">--}}
{{--                            <div class="our-partner mt-3 text-center">--}}
{{--                                <div> <img style="width: 150px;" src="https://lgdhaka.com/public/assets/images/apps/app2.png" class="img-fluid mb-2 img-height-40 mx-auto"></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-sm-2 col-2">--}}
{{--                            <div class="our-partner mt-3 text-center">--}}
{{--                                <div><img style="width: 150px;" src="https://lgdhaka.com/public/assets/images/apps/app3.png" class="img-fluid mb-2 img-height-40 mx-auto"></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-sm-2 col-2">--}}
{{--                            <div class="our-partner mt-3 text-center">--}}
{{--                                <div><img style="width: 150px;" src="https://lgdhaka.com/public/assets/images/apps/app4.png" class="img-fluid mb-2 img-height-40 mx-auto"></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-sm-2 col-2">--}}
{{--                            <div class="our-partner mt-3 text-center">--}}
{{--                                <div><img style="width: 150px;" src="https://lgdhaka.com/public/assets/images/apps/app5.png" class="img-fluid mb-2 img-height-40 mx-auto"></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-sm-2 col-2">--}}
{{--                            <br><br><br><br>--}}
{{--                            <div class="our-partner mt-3 text-center">--}}
{{--                                <div> <h4 style="font-family: 'Kalpurush', sans-serif;">ডাউনলোড করতে গুগল প্লেতে ক্লিক করুন</h4><a href="https://play.google.com/store/apps/details?id=com.dhaka.smartUnion"><img style="width: 150px;" src="https://lgdhaka.com/public/assets/images/apps/playstore.png" class="img-fluid mb-2 img-height-40 mx-auto"></a></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}

{{--    </div>--}}

{{--</div>--}}




<!-- Bootstrap 3 JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>
