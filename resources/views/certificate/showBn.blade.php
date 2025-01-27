
<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> ইউনিয়ন পরিষদ || কাউন্দিয়া</title>
    <link rel="icon" href="./asset_files/image/cityzen_logo.png" type="image/x-icon">
    <link rel="shortcut icon" href="./image/cityzen_logo.png" type="image/x-icon">

    <!-- <link href="./asset_files/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>


    <style media="screen">
        @import url('https://fonts.googleapis.com/css2?family=Tiro+Bangla&display=swap');

        @page {
            margin: 0;
            /* Set the margin to none */
            size: 8.5in 11in;
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
            font-size: 26px;
            font-weight: bold;
            margin: -10px;
            margin-left: 5px;
        }

        .certificate_wrapper {
            height: 11in;
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
            height: 40px;
            width: 68px;
            background: #97BC62FF;
            border-radius: 15px;
            display: flex;
            align-items: center;
            padding-left: 20px;
            margin-left: 14px;
            font-size:30px;
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
            height: 11in;
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
        button, input, optgroup, select, textarea {
            margin: 0;
            font-family: inherit;
            font-size: inherit;
            line-height: inherit;
        }
        *, ::after, ::before {
            box-sizing: border-box;
        }
        .mt-5 {
            margin-top: 3rem!important;
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
            transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
        }
        img, svg {
            vertical-align: middle;
        }
        .main_wrapper2 .wrapper .main_header span {
            padding: 8px 15px;
            background: #719ad5;
            border-radius: 15px;
            color: #ffe323;
        }
    </style>
    <style media="screen">
        @import url('https://fonts.googleapis.com/css2?family=Tiro+Bangla&display=swap');

        @page {
            margin: 0;
            /* Set the margin to none */
            size: 8.5in 11in;
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
            font-size: 26px;
            font-weight: bold;
            margin: -10px;
            margin-left: 5px;
        }

        .certificate_wrapper {
            height: 11in;
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
            height: 40px;
            width: 68px;
            background: #97BC62FF;
            border-radius: 15px;
            display: flex;
            align-items: center;
            padding-left: 20px;
            margin-left: 14px;
            font-size:30px;
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
            height: 11in;
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
        button, input, optgroup, select, textarea {
            margin: 0;
            font-family: inherit;
            font-size: inherit;
            line-height: inherit;
        }
        *, ::after, ::before {
            box-sizing: border-box;
        }
        .mt-5 {
            margin-top: 3rem!important;
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
            transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
        }
        img, svg {
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
                    <img src="asset/img/logo.png" alt="">
                </div>
                <div class="middle">
                    <p class="main-ttitle">গণপ্রজাতন্ত্রী বাংলাদেশ সরকার</p>
                    <h4 class="main_header">
                        <span>কাউন্দিয়া ইউনিয়ন পরিষদ </span>
                    </h4>
                    <p class="main-ttitle"> সাভার,  ঢাকা</p>
                </div>
                <div class="right">
                    <img src="asset/img/pic/2024-1.jpeg" alt="">
                </div>
            </div>
            <div class="wrapper2">
                <div class="left">
                    <p class="header">মালিকঃ সুলতান </p>
                    <p class="header">পিতাঃ মৃত কলম চাঁন </p>
                    <h4 style="color: #2C5F2D; margin-top:10px;" class="header">হোল্ডিং নংঃ <span>৩০/৬</span></h4>
                </div>

                <div class="left">
                    <p style="opacity: 0" class="header">-</p>
                    <p style="opacity: 0" class="header">-</p>
                    <h4 style="color: #2C5F2D; margin-top:10px;" class="header">ওয়ার্ড নংঃ <span>০২</span></h4>
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
                <img class="minar" src="asset/img/minar.png" alt="">
                <div class="left">
                        <span class="location">
                            <h4 style="margin-bottom: 10px; color:#2D7D61; z-index:10;" class="header mb-1">গ্রাম / মহল্লাঃ টিকালারটেক </h4>
                            <h4 style="margin-bottom: 10px; color:#2D7D61; z-index:10;" class="header">রোডের নামঃ কাউন্দিয়া </h4>
                        </span>
                    <div class="content">
                        <p class="title">সাইফুল আলম খান</p>
                        <p class="title">চেয়ারম্যান</p>
                        <p class="title">কাউন্দিয়া ইউনিয়ন পরিষদ </p>
                        <p class="title"> সাভার,  ঢাকা</p>
                    </div>
                </div>

                <div class="right">
                    <img src="asset/img/qr/2024-1.png" alt="">
                </div>
            </div>

        </div>
    </div>

    <button id="captureButton" style="width: 2in;" class="mt-5 btn btn-success">DOWNLOAD</button>
    <img style="opacity:0; position:absolute" id="capturedImage">
</div>
</body>
</html>
