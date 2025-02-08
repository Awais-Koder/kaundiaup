<html lang="en-US">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script>
        window.onbeforeunload = function() {
            return 'আপনি যদি পেজটি  Reload দেন তাহলে আপনাকে নতুন করে ডাটা এন্ট্রি দিতে হবে.';
        };
    </script>
    <!--<base href="https://www.kaundiaup.com/">-->
    <base href="">
    <base href="/">
    <title>Nagorik_Sonodh_Preview </title>
    <link type="text/css" href="{{ asset('upsheba/public/frontend/css/preview.css') }}" rel="stylesheet" />
    <link href="{{ asset('upsheba/public/frontend/css/print_for.css') }}" rel="stylesheet" type="text/css">
    <link type="text/css" href="{{ asset('upsheba/public/backend/css/testimonial.css') }}" rel="stylesheet" />
    <script>
        window["GUARDIO_SENSOR_CONF"] = {
            "click": true
        }
    </script>
    <style>
        @media print {

            .no-print,
            .no-print * {
                visibility: hidden;
            }

            table {
                background: none;
            }
        }
    </style>
</head>

<body data-new-gr-c-s-check-loaded="14.1191.0" data-gr-ext-installed="">
    <div style="left:300px;top:5px;position:middle;background:#666;" align="center" id="bar">
        <a href="" style="margin-right:50px;" title="Back Home Page">
            <img src="{{ asset('upsheba/public/frontend/img/home.png') }}">
        </a>
        <a target="_blank" onclick="window.print()" href="javaScript:window.print();">
            <img src="{{ asset('upsheba/public/frontend/img/print.png') }}">
        </a>
    </div>
    <br>
    <div class="full">
        <div id="wrapper">
            <!-----------top area start--------------->
            <div class="top_area">
                <div class="fix structure top_section">
                    <div id="top_left">
                        <img src="{{ asset('upsheba/public/frontend/img/logo.png') }}" alt="logo" height="120px"
                            width="120px">
                    </div>
                    <div id="top_mid">
                        <h2>কাউন্দিয়া ইউনিয়ন পরিষদ</h2>
                        <p>কাউন্দিয়া <br>
                            সাভার,&nbsp;ঢাকা-১৩৪০<br>
                            ফোন : ০১৮৭৭৭৪৭৭০০,&nbsp;০১৭২৯৮০৭১১৭</p>
                    </div>
                    <div id="top_right">
                        <img src="{{ Storage::url($citizen->image) }}" alt="image">
                    </div>
                </div>
            </div>
            <!-----------top area end--------------->

            <!-----------header area start--------------->
            <div class="header_area">
                <div class="fix structure header_section">
                    <h2> {{ App\Services\DefaultService::getCertificateName($citizen->certificate_id)->name }}
                        Certificate </h2>
                    <span> আবেদনের তারিখ: <input type="text" name="" id="" readonly=""
                            value="{{ $citizen->created_at->format('d/m/y') }}"></span>
                </div>
            </div>
            <!-----------header area end--------------->

            <!-----------application area start--------------->
            <div class="app_area">
                <div class="fix structure app_section">
                    <div id="app_section_left">
                        <form>
                            <p> ট্রেকিং আইডি নং - </p>
                            <span> <input type="text" name="tra_no" id="" readonly=""
                                    value="{{ $citizen->tracking_number }}"> </span>
                        </form>
                    </div>
                    <div id="app_section_right">
                        <table class="table1">
                            <tbody>
                                <tr>
                                    <td>&nbsp; নাম (বাংলা)</td>
                                    <td colspan="3" style="border-left:none;border-bottom:none;">
                                        <span>&nbsp;:&nbsp;{{ $citizen->name_bn }}</span></td>
                                </tr>
                                <tr>
                                    <td>&nbsp; নাম (ইংরেজী)</td>
                                    <td colspan="3" style="border-left:none;">
                                        <span>&nbsp;:&nbsp;{{ $citizen->name_en }}</span></td>
                                </tr>

                                <tr>
                                    <td>&nbsp;পিতারন নাম</td>
                                    <td colspan="3" style="border-left:none;"><span>&nbsp;:&nbsp;
                                            {{ $citizen->father_name_bn }} </span></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;মাতার নাম</td>
                                    <td colspan="3" style="border-left:none;border-bottom:none;">
                                        <span>&nbsp;:&nbsp;{{ $citizen->mother_name_bn }}</span></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;জন্ম তারিখ </td>
                                    <td style="border-left:none;"><span>&nbsp;:&nbsp;{{ $citizen->birth_date }}</span>
                                    </td>
                                    <td style="border-left:none; border-right:none;">ন্যাশনাল আইডি কার্ড নং </td>
                                    <td style="border-left:none;"><span>&nbsp;:&nbsp;{{ $citizen->nid }}</span></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;ধর্ম</td>
                                    <td style="border-left:none;"><span>&nbsp;:&nbsp;{{ $citizen->religion }}</span>
                                    </td>
                                    <td style="border-left:none;">জন্মসনদ নং </td>
                                    <td style="border-left:none;"><span>&nbsp;:&nbsp;{{ $citizen->birth_id }}</span>
                                    </td>
                                    <td style="border-left:none;">হোল্ডিং নং </td>
                                    <td style="border-left:none;">
                                        <span>&nbsp;:&nbsp;{{ $citizen->permanent_holding_no }}</span></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;বৈবাহিক অবস্থা </td>
                                    <td style="border-left:none;">
                                        <span>&nbsp;:&nbsp;{{ $citizen->marital_status }}</span></td>
                                    <td style="border-left:none;border-bottom:none;">পাসপোর্ট নং </td>
                                    <td style="border-left:none;border-bottom:none;">
                                        <span>&nbsp;:&nbsp;{{ $citizen->passport_no }}</span></td>
                                </tr>
                                {{-- <tr style="height:100px;">
                                    <td valign="top">&nbsp;বর্তমান ঠিকানা</td>
                                    <td colspan="3" style="border-left:none;">
                                        <p>
                                            &nbsp;:&nbsp; গ্রাম/মহল্লা  : {{$citizen}},&nbsp;&nbsp;&nbsp;রোড/ব্লক/সেক্টর  :Sequi veniam dolore<br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;পোষ্ট অফিস :2,&nbsp;&nbsp;&nbsp;ওয়ার্ড নং : 3<br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;থানা : 1 <br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;জেলা  : 2
                                        </p>
                                    </td>
                                </tr> --}}
                                <tr style="height:100px;">
                                    <td valign="top" style="border-bottom:none;">&nbsp;স্থায়ী ঠিকানা</td>
                                    <td colspan="3" style="border-left:none; border-bottom:none;">
                                        <p>
                                            &nbsp;:&nbsp; গ্রাম/মহল্লা
                                            :{{ $citizen->moholla_id }},&nbsp;&nbsp;&nbsp;রোড/ব্লক/সেক্টর
                                            :{{ $citizen->permanent_rbs_bn }} <br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;পোষ্ট অফিস
                                            :{{ $citizen->permanent_postoffice_id }},&nbsp;&nbsp;&nbsp;ওয়ার্ড নং :
                                            {{ $citizen->ward_no }}<br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;থানা : {{ $citizen->permanent_upazila_id }}<br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;জেলা : {{ $citizen->permanent_district_id }}
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-----------application area end--------------->
            <div class="attach_area">
                <div class="fix structure attach_section">
                    <table border="0" class="attach_table" width="95%" height="70px" cellpadding="0"
                        cellspacing="0" style="border-collapse:collapse;margin:0px auto;table-layout:fixed;">
                        <tbody>
                            <tr valign="top">
                                <td width="8%"
                                    style="font-size:18px;font-weight:700;font-style:normal;text-indent:20px;">সংযুক্তি
                                </td>
                                <td width="91%"
                                    style="font-size:16px;font-weight:normal;font-style:normal;text-indent:5px;">:&nbsp;
                                    ভোটার হওয়ার জন্য।</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-----------instraction area start--------------->
            <div class="ins_area">
                <div class="fix structure ins_section">
                    <div class="hr_style"> </div>
                    <h2> নির্দেশনাবলী / Instruction </h2>


                    <ol style="padding-left:40px;list-style:none;">
                        <li> ১) &nbsp; এলাকার গন্যমান্য ২ জন ব্যাক্তি এবং ওয়ার্ড মেম্বার কর্তৃক সত্যায়িত করে পরিষদে জমা
                            ।</li>
                        <li> ২) &nbsp;১ কপি পাসপোর্ট সাইজ ছবি,(সত্যায়িত)</li>
                        {{-- <li>৩)&nbsp; আবেদন পত্রের অবস্থান জানার জন্য <font style="color:blue;">www.upsheba.info/natrack</font>  প্রবেশ করান  এবং অবস্থাটি জানুন ।</li> --}}
                    </ol>
                </div>
            </div>
            <!-----------instraction area end--------------->

            <!-----------app_sign area start--------------->
            <div class="app_sign_area">
                <div class="fix structure app_sign_section">
                    <div class="sign_app">
                        <div class="sign_app_inner">
                            আবেদনকারীর স্বাক্ষর
                        </div>
                    </div>
                    <div class="app_sign_section_inner">
                        <h2> সত্যায়ন / verification </h2>
                        <table class="table3" cellspacing="0" cellpadding="0">
                            <tbody>
                                <tr>
                                    <td colspan="3"></td>
                                    <td rowspan="4"
                                        style="height:140px;width:160px; border-top:1px solid black; border-left:1px solid black;">
                                        <br>

                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="165"
                                            height="165" viewBox="0 0 165 165">
                                            <rect x="0" y="0" width="165" height="165" fill="#ffffff" />
                                            <g transform="scale(7.857)">
                                                <g transform="translate(0,0)">
                                                    <path fill-rule="evenodd"
                                                        d="M10 0L10 1L8 1L8 3L9 3L9 2L10 2L10 4L8 4L8 8L6 8L6 9L5 9L5 11L4 11L4 10L3 10L3 9L4 9L4 8L3 8L3 9L2 9L2 8L0 8L0 10L1 10L1 11L0 11L0 12L1 12L1 13L4 13L4 12L5 12L5 13L8 13L8 15L9 15L9 17L8 17L8 18L9 18L9 19L8 19L8 21L13 21L13 20L14 20L14 21L18 21L18 20L17 20L17 18L19 18L19 17L20 17L20 19L21 19L21 16L19 16L19 17L17 17L17 16L16 16L16 17L15 17L15 20L14 20L14 19L13 19L13 17L14 17L14 15L13 15L13 13L14 13L14 12L15 12L15 11L16 11L16 10L17 10L17 12L16 12L16 13L15 13L15 15L17 15L17 14L16 14L16 13L18 13L18 11L19 11L19 10L20 10L20 11L21 11L21 9L20 9L20 8L18 8L18 9L17 9L17 8L14 8L14 9L16 9L16 10L14 10L14 12L13 12L13 13L12 13L12 11L13 11L13 9L11 9L11 6L10 6L10 7L9 7L9 5L10 5L10 4L11 4L11 5L12 5L12 3L13 3L13 2L12 2L12 0ZM11 2L11 3L12 3L12 2ZM12 6L12 8L13 8L13 6ZM8 8L8 9L9 9L9 10L8 10L8 11L10 11L10 12L9 12L9 13L10 13L10 14L9 14L9 15L10 15L10 16L12 16L12 17L11 17L11 18L10 18L10 17L9 17L9 18L10 18L10 20L12 20L12 19L11 19L11 18L12 18L12 17L13 17L13 16L12 16L12 14L11 14L11 13L10 13L10 12L11 12L11 11L12 11L12 10L11 10L11 11L10 11L10 8ZM1 9L1 10L2 10L2 9ZM6 9L6 10L7 10L7 9ZM18 9L18 10L19 10L19 9ZM1 11L1 12L4 12L4 11ZM5 11L5 12L7 12L7 11ZM20 13L20 14L18 14L18 15L20 15L20 14L21 14L21 13ZM10 14L10 15L11 15L11 14ZM19 20L19 21L20 21L20 20ZM0 0L0 7L7 7L7 0ZM1 1L1 6L6 6L6 1ZM2 2L2 5L5 5L5 2ZM14 0L14 7L21 7L21 0ZM15 1L15 6L20 6L20 1ZM16 2L16 5L19 5L19 2ZM0 14L0 21L7 21L7 14ZM1 15L1 20L6 20L6 15ZM2 16L2 19L5 19L5 16Z"
                                                        fill="#000000" />
                                                </g>
                                            </g>
                                        </svg>

                                        <!--<img src="./preview_files/chart" style="height:120px;width:130px;">-->
                                    </td>
                                </tr>
                                <tr style="height:30px;">
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="first_person" disabled=""></td>
                                    <td><input type="text" name="second_person" disabled=""></td>
                                    <td><input type="text" name="third_person" disabled=""></td>
                                </tr>

                                <tr>
                                    <td style="border-bottom:1px solid black;">স্বাক্ষর <br>ওয়ার্ড মেম্বার </td>
                                    <td style="border-bottom:1px solid black;">স্বাক্ষর <br>গন্যমান্য ব্যাক্তি</td>
                                    <td style="border-bottom:1px solid black;">স্বাক্ষর <br>গন্যমান্য ব্যাক্তি</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>


                </div>
            </div>
            <!-----------app_sign area end--------------->


            <!------------------ footer area start-------------------->
            <div class="footer_area">
                <div class="fix structure footer_section">
                    <div id="footer_section_left">
                        {{-- <p> www.upsheba.info<br> --}}

                        {{-- E-mail:&nbsp;&nbsp;<a href="https://upsheba.info/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d2a7a2a1bab7b0b3fcbbbcb4bd92b5bfb3bbbefcb1bdbf">[email&#160;protected]</a> --}}
                        </p>

                    </div>
                    {{-- <div id="footer_section_right">
						<p> Develop By: All Asia IT <br>
							www.upsheba.info
						</p>
					</div> --}}
                </div>
            </div>
            <!------------------ footer area end-------------------->

        </div>
    </div>
    <!--- for print----->
    <div id="print-full-page" class="no-print">
        <div class="print-certificate">
            <a target="" href="javaScript:window.print();" title="প্রিন্ট করুন">
                <img src="{{ asset('upsheba/public/image/print_big.png') }}" alt="প্রিন্ট করুন">
            </a>
        </div>
    </div>
    <!--- end for print------>
    <script data-cfasync="false"
        src="{{ asset('upsheba/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}"></script>
</body>
<grammarly-desktop-integration data-grammarly-shadow-root="true"><template shadowrootmode="open">
        <style>
            div.grammarly-desktop-integration {
                position: absolute;
                width: 1px;
                height: 1px;
                padding: 0;
                margin: -1px;
                overflow: hidden;
                clip: rect(0, 0, 0, 0);
                white-space: nowrap;
                border: 0;
                -moz-user-select: none;
                -webkit-user-select: none;
                -ms-user-select: none;
                user-select: none;
            }

            div.grammarly-desktop-integration:before {
                content: attr(data-content);
            }
        </style>
        <div aria-label="grammarly-integration" role="group" tabindex="-1" class="grammarly-desktop-integration"
            data-content="{&quot;mode&quot;:&quot;full&quot;,&quot;isActive&quot;:true,&quot;isUserDisabled&quot;:false}">
        </div>
    </template></grammarly-desktop-integration>

</html>
