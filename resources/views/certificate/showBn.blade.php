<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> ইউনিয়ন পরিষদ || কাউন্দিয়া</title>
    <link rel="icon" href="./asset_files/image/cityzen_logo.png" type="image/x-icon">
    <link rel="shortcut icon" href="./image/cityzen_logo.png" type="image/x-icon">

    <!-- <link href="./asset_files/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>


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

        @import url('https://fonts.googleapis.com/css2?family=Tiro+Bangla&display=swap');

        @page {
            margin: 0;
            /* Set the margin to none */
            /* size: 8.5in 11in; */
        }

        * {
            padding: 0;
            margin: 0;
        }

        p,
        h2,
        h1,
        h4 {
            margin: 0;
            padding: 0;
        }

        td,
        th {
            border: 1px solid black;
            padding: 0px 10px;
        }

        body {
            background: #dddd;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            font-family: "Tiro Bangla"
                /* overflow: hidden; */
        }

        .title {
            color: black;
            font-weight: 500;
            font-size: 13px;
        }

        .main-ttitle {
            color: #2D7D61;
            font-size: 20px;
            font-weight: bold;
        }

        .header {
            color: black;
            font-size: 20px !important;
            font-weight: bold;
        }

        .certificate_wrapper {
            width: 8.5in;
            background: white;
            background-position: center;
            background-size: 100% 100%;
            padding: 2rem;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column
        }

        .main_wrapper {
            width: 8.5in;
            height: 5.5in;
            border: 40px solid #125c0e;
            position: relative;
        }

        /* dotted  */
        .main_wrapper .dot1 {
            position: absolute;
            height: 25px;
            width: 25px;
            left: -32.5px;
            top: -32.5px;
            border-radius: 50%;
            background: white;
        }

        .main_wrapper .dot2 {
            position: absolute;
            height: 25px;
            width: 25px;
            right: -32.5px;
            top: -32.5px;
            border-radius: 50%;
            background: white;
        }

        .main_wrapper .dot3 {
            position: absolute;
            height: 25px;
            width: 25px;
            left: -32.5px;
            bottom: -32.5px;
            border-radius: 50%;
            background: white;
        }

        .main_wrapper .dot4 {
            position: absolute;
            height: 25px;
            width: 25px;
            right: -32.5px;
            bottom: -32.5px;
            border-radius: 50%;
            background: white;
        }

        /* text area  */
        .outer_text1 {
            position: absolute;
            left: 50%;
            top: -10px;
            transform: translate(-50%, -50%);
            z-index: 10;
            color: #ffe323;
            width: 100%;
            font-size: 20px;
            text-align: center;
        }

        .outer_text2 {
            position: absolute;
            left: -25px;
            top: 50%;
            z-index: 10;
            color: #ffe323;
            width: 100%;
            font-size: 20px;
            text-align: center;
            transform: translate(-50%, -50%) rotate(270deg);
        }

        .outer_text3 {
            position: absolute;
            left: 50%;
            bottom: -40px;
            transform: translate(-50%, -50%);
            z-index: 10;
            color: #ffe323;
            width: 100%;
            font-size: 20px;
            text-align: center;
        }

        .outer_text4 {
            position: absolute;
            right: -101.4%;
            top: 50%;
            z-index: 10;
            color: #ffe323;
            width: 100%;
            font-size: 20px;
            text-align: center;
            transform: translate(-50%, -50%) rotate(90deg);
        }

        .main_wrapper2 {
            border: 5px solid #6d7fbf;
            height: 100%;
            padding: 10px;
        }

        /* wrapper */
        .main_wrapper2 .wrapper {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .main_wrapper2 .wrapper img {
            height: 5rem;
            width: 5rem;
        }

        .main_wrapper2 .wrapper .middle {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .main_wrapper2 .wrapper .main_header {
            padding: 10px 15px;
            background: #016E40;
            border-radius: 15px;
        }

        .main_wrapper2 .wrapper .main_header span {
            padding: 8px 15px;
            background: #D10A0E;
            border-radius: 15px;
            color: #FFF220;
        }

        /* wrapper2 */
        .wrapper2 {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .wrapper2 .left {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .wrapper2 .left span {
            background: #97BC62FF;
            padding: 0px 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 5px;
        }

        .wrapper2 .left h4 {
            display: flex;
            align-items: center;
        }

        /* wrapper3 */
        .wrapper3 {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 6px;
            position: relative;
        }

        .wrapper3 .minar {
            position: absolute;
            left: 50%;
            top: 49%;
            transform: translate(-50%, -50%);
            height: 11rem;
            width: 15rem;
        }

        .wrapper3 .right img {
            height: 10.5rem;
            width: 10.5rem;
        }

        .wrapper3 .content {
            display: flex;
            align-items: center;
            justify-content: start;
            flex-direction: column;
            margin-left: 10px;
        }

        .wrapper3 .left {
            display: flex;
            justify-content: space-between;
            flex-direction: column;
            gap: 20px;
            margin-top: 0px;
        }

        .btn-success {
            color: #fff;
            background-color: #198754;
            border-color: #198754;
        }

        .certificate_wrapper {
            width: 8.5in;
            background: white;
            background-position: center;
            background-size: 100% 100%;
            padding: 2rem;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            margin: 0;
            font-family: inherit;
            font-size: inherit;
            line-height: inherit;
        }

        *,
        ::after,
        ::before {
            box-sizing: border-box;
        }

        .mt-5 {
            margin-top: 3rem !important;
        }

        .btn {
            /* display: inline-block; */
            /* font-weight: 400; */
            /* line-height: 1.5; */
            /* color: #212529; */
            /* text-align: center; */
            /* text-decoration: none; */
            /* vertical-align: middle; */
            /* cursor: pointer; */
            /* background-color: transparent; */
            /* border: 1px solid transparent; */
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
            padding: .375rem .75rem;
            font-size: 1rem;
            border-radius: .25rem;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        }

        img,
        svg {
            vertical-align: middle;
        }

        .main_wrapper2 .wrapper .main_header span {
            padding: 8px 15px;
            background: #719ad5;
            border-radius: 15px;
            color: #ffe323;
        }
    </style>
</head>

<body data-new-gr-c-s-check-loaded="14.1149.0" data-gr-ext-installed="">
    <div class="certificate_wrapper">
        <div id="contentToCapture" class="main_wrapper">
            <div class="dot1"></div>
            <div class="dot2"></div>
            <div class="dot3"></div>
            <div class="dot4"></div>
            <div class="outer_text1 header">|| অক্সিজেন-ই বাঁচায় প্রাণ, বেশী করে গাছ লাগান ||</div>
            <div class="outer_text2 header">|| দুর্নীতি, মাদক ও বাল্য বিয়েকে না বলুন ||</div>
            <div class="outer_text3 header">|| ৪৫ দিনের মধ্যে জন্ম ও মৃত্যু নিবন্ধন করুন ||</div>
            <div class="outer_text4 header">|| নিয়মিত দিবো কর, ইউনিয়ন হবে স্বনির্ভর ||</div>
            <div class="main_wrapper2">
                <div class="wrapper">
                    <div class="left">
                        <img src="{{ asset('assets/img/logo.png') }}" alt="">
                    </div>
                    <div class="middle">
                        <p class="main-ttitle">গণপ্রজাতন্ত্রী বাংলাদেশ সরকার</p>
                        <h4 class="main_header">
                            <span>কাউন্দিয়া ইউনিয়ন পরিষদ </span>
                        </h4>
                        <p class="main-ttitle"> সাভার, ঢাকা</p>
                    </div>
                    <div class="right">
                        <img src="{{ Storage::url($data->image) }}" alt="">
                    </div>
                </div>
                <div class="wrapper2">
                    <div class="left">
                        <p class="header">মালিকঃ {{ $data->name_bn }} </p>
                        <p class="header">পিতাঃ {{ $data->father_name_bn }} </p>
                        <h4 style="color: #2C5F2D; margin-top:10px;" class="header">হোল্ডিং নংঃ
                            <span>{{ $data->permanent_holding_no }}</span></h4>
                    </div>

                    <div class="left">
                        <p style="opacity: 0" class="header">-</p>
                        <p style="opacity: 0" class="header">-</p>
                        <h4 style="color: #2C5F2D; margin-top:10px;" class="header">ওয়ার্ড নংঃ
                            <span>{{ $data->pb_wordno }}</span></h4>
                    </div>

                    <div class="right">
                        <table>
                            <thead>
                                <tr>
                                    <th style="color: red;" class="title">: জরুরী তথ্য সেবা সমূহ :</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="title text-center" style="margin-bottom: 3px;">
                                        চেয়ারম্যান
                                        <br>
                                        <b>০১৮২-১৬৬২৬২৬</b>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="title text-center" style="margin-bottom: 3px;">
                                        পল্লী বিদ্যুৎ সাভার
                                        <br>
                                        ০১৭৬৯-৪০২২০৫
                                    </td>
                                </tr>
                                <tr>
                                    <td class="title text-center" style="margin-bottom: 3px;">
                                        ফায়ার সার্ভিস সাভার
                                        <br>
                                        ০১৭৩০-০০২২৫০
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="wrapper3">
                    <img class="minar" src="{{ asset('assets/img/minar.png') }}" alt="">
                    <div class="left">
                        <span class="location">
                            <h4 style="margin-bottom: 10px; color:#2D7D61; z-index:10;" class="header mb-1">গ্রাম /
                                মহল্লাঃ {{ $data->pb_gram }} </h4>
                            <h4 style="margin-bottom: 10px; color:#2D7D61; z-index:10;" class="header">রোডের নামঃ
                                {{ $data->pb_rbs }} </h4>
                        </span>
                        <div class="content">
                            <p class="title">সাইফুল আলম খান</p>
                            <p class="title">চেয়ারম্যান</p>
                            <p class="title">কাউন্দিয়া ইউনিয়ন পরিষদ </p>
                            <p class="title"> সাভার, ঢাকা</p>
                        </div>
                    </div>

                    <div class="right">
                        {{-- <img src="asset/img/qr/2024-1.png" alt=""> --}}
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="165" height="165"
                            viewBox="0 0 165 165">
                            <rect x="0" y="0" width="165" height="165" fill="#ffffff" />
                            <g transform="scale(7.857)">
                                <g transform="translate(0,0)">
                                    <path fill-rule="evenodd"
                                        d="M10 0L10 1L8 1L8 3L9 3L9 2L10 2L10 4L8 4L8 8L6 8L6 9L5 9L5 11L4 11L4 10L3 10L3 9L4 9L4 8L3 8L3 9L2 9L2 8L0 8L0 10L1 10L1 11L0 11L0 12L1 12L1 13L4 13L4 12L5 12L5 13L8 13L8 15L9 15L9 17L8 17L8 18L9 18L9 19L8 19L8 21L13 21L13 20L14 20L14 21L18 21L18 20L17 20L17 18L19 18L19 17L20 17L20 19L21 19L21 16L19 16L19 17L17 17L17 16L16 16L16 17L15 17L15 20L14 20L14 19L13 19L13 17L14 17L14 15L13 15L13 13L14 13L14 12L15 12L15 11L16 11L16 10L17 10L17 12L16 12L16 13L15 13L15 15L17 15L17 14L16 14L16 13L18 13L18 11L19 11L19 10L20 10L20 11L21 11L21 9L20 9L20 8L18 8L18 9L17 9L17 8L14 8L14 9L16 9L16 10L14 10L14 12L13 12L13 13L12 13L12 11L13 11L13 9L11 9L11 6L10 6L10 7L9 7L9 5L10 5L10 4L11 4L11 5L12 5L12 3L13 3L13 2L12 2L12 0ZM11 2L11 3L12 3L12 2ZM12 6L12 8L13 8L13 6ZM8 8L8 9L9 9L9 10L8 10L8 11L10 11L10 12L9 12L9 13L10 13L10 14L9 14L9 15L10 15L10 16L12 16L12 17L11 17L11 18L10 18L10 17L9 17L9 18L10 18L10 20L12 20L12 19L11 19L11 18L12 18L12 17L13 17L13 16L12 16L12 14L11 14L11 13L10 13L10 12L11 12L11 11L12 11L12 10L11 10L11 11L10 11L10 8ZM1 9L1 10L2 10L2 9ZM6 9L6 10L7 10L7 9ZM18 9L18 10L19 10L19 9ZM1 11L1 12L4 12L4 11ZM5 11L5 12L7 12L7 11ZM20 13L20 14L18 14L18 15L20 15L20 14L21 14L21 13ZM10 14L10 15L11 15L11 14ZM19 20L19 21L20 21L20 20ZM0 0L0 7L7 7L7 0ZM1 1L1 6L6 6L6 1ZM2 2L2 5L5 5L5 2ZM14 0L14 7L21 7L21 0ZM15 1L15 6L20 6L20 1ZM16 2L16 5L19 5L19 2ZM0 14L0 21L7 21L7 14ZM1 15L1 20L6 20L6 15ZM2 16L2 19L5 19L5 16Z"
                                        fill="#000000" />
                                </g>
                            </g>
                        </svg>
                    </div>
                </div>

            </div>
        </div>

        <button id="captureButton" style="width: 2in;" class="mt-5 btn btn-success no-print">DOWNLOAD</button>
        <img style="opacity:0; position:absolute" id="capturedImage">
    </div>
    <script>
        $(document).ready(function() {
            $('#captureButton').on('click', function() {
                window.print();
            })
        });
    </script>
</body>

</html>
