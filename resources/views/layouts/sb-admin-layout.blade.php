<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/litepicker/dist/css/litepicker.css" rel="stylesheet" />
    <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="{{asset('assets/img/favicon.png')}}" />
    <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" crossorigin="anonymous"></script>

    <style>
        tbody tr td img{
            height: 45px !important;
        }
        #union_setup_form .row .col-md-6 div{
            margin-top: 15px;
        }
    </style>
</head>
<body class="nav-fixed">
<x-topnav></x-topnav>
<div id="layoutSidenav">
    <x-sidenav></x-sidenav>
    <div id="layoutSidenav_content">
        <main>
            {{ $slot }}
        </main>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="{{asset('js/scripts.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" crossorigin="anonymous"></script>
<script src="{{asset('assets/demo/chart-area-demo.js')}}"></script>
<script src="{{asset('assets/demo/chart-bar-demo.js')}}"></script>
<script src="{{asset('assets/demo/chart-pie-demo.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/litepicker/dist/bundle.js" crossorigin="anonymous"></script>
<script src="{{asset('js/litepicker.js')}}"></script>
</body>
</html>
