<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

{{-- <head>
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

    <title>Cashless Smart UP, Dhaka</title>

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
<style>.swal2-popup.swal2-toast{flex-direction:row;align-items:center;width:auto;padding:.625em;overflow-y:hidden;background:#fff;box-shadow:0 0 .625em #d9d9d9}.swal2-popup.swal2-toast .swal2-header{flex-direction:row;padding:0}.swal2-popup.swal2-toast .swal2-title{flex-grow:1;justify-content:flex-start;margin:0 .6em;font-size:1em}.swal2-popup.swal2-toast .swal2-footer{margin:.5em 0 0;padding:.5em 0 0;font-size:.8em}.swal2-popup.swal2-toast .swal2-close{position:static;width:.8em;height:.8em;line-height:.8}.swal2-popup.swal2-toast .swal2-content{justify-content:flex-start;padding:0;font-size:1em}.swal2-popup.swal2-toast .swal2-icon{width:2em;min-width:2em;height:2em;margin:0}.swal2-popup.swal2-toast .swal2-icon .swal2-icon-content{display:flex;align-items:center;font-size:1.8em;font-weight:700}@media all and (-ms-high-contrast:none),(-ms-high-contrast:active){.swal2-popup.swal2-toast .swal2-icon .swal2-icon-content{font-size:.25em}}.swal2-popup.swal2-toast .swal2-icon.swal2-success .swal2-success-ring{width:2em;height:2em}.swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line]{top:.875em;width:1.375em}.swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=left]{left:.3125em}.swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=right]{right:.3125em}.swal2-popup.swal2-toast .swal2-actions{flex-basis:auto!important;width:auto;height:auto;margin:0 .3125em}.swal2-popup.swal2-toast .swal2-styled{margin:0 .3125em;padding:.3125em .625em;font-size:1em}.swal2-popup.swal2-toast .swal2-styled:focus{box-shadow:0 0 0 1px #fff,0 0 0 3px rgba(50,100,150,.4)}.swal2-popup.swal2-toast .swal2-success{border-color:#a5dc86}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line]{position:absolute;width:1.6em;height:3em;transform:rotate(45deg);border-radius:50%}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=left]{top:-.8em;left:-.5em;transform:rotate(-45deg);transform-origin:2em 2em;border-radius:4em 0 0 4em}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=right]{top:-.25em;left:.9375em;transform-origin:0 1.5em;border-radius:0 4em 4em 0}.swal2-popup.swal2-toast .swal2-success .swal2-success-ring{width:2em;height:2em}.swal2-popup.swal2-toast .swal2-success .swal2-success-fix{top:0;left:.4375em;width:.4375em;height:2.6875em}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line]{height:.3125em}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=tip]{top:1.125em;left:.1875em;width:.75em}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=long]{top:.9375em;right:.1875em;width:1.375em}.swal2-popup.swal2-toast .swal2-success.swal2-icon-show .swal2-success-line-tip{-webkit-animation:swal2-toast-animate-success-line-tip .75s;animation:swal2-toast-animate-success-line-tip .75s}.swal2-popup.swal2-toast .swal2-success.swal2-icon-show .swal2-success-line-long{-webkit-animation:swal2-toast-animate-success-line-long .75s;animation:swal2-toast-animate-success-line-long .75s}.swal2-popup.swal2-toast.swal2-show{-webkit-animation:swal2-toast-show .5s;animation:swal2-toast-show .5s}.swal2-popup.swal2-toast.swal2-hide{-webkit-animation:swal2-toast-hide .1s forwards;animation:swal2-toast-hide .1s forwards}.swal2-container{display:flex;position:fixed;z-index:1060;top:0;right:0;bottom:0;left:0;flex-direction:row;align-items:center;justify-content:center;padding:.625em;overflow-x:hidden;transition:background-color .1s;-webkit-overflow-scrolling:touch}.swal2-container.swal2-backdrop-show,.swal2-container.swal2-noanimation{background:rgba(0,0,0,.4)}.swal2-container.swal2-backdrop-hide{background:0 0!important}.swal2-container.swal2-top{align-items:flex-start}.swal2-container.swal2-top-left,.swal2-container.swal2-top-start{align-items:flex-start;justify-content:flex-start}.swal2-container.swal2-top-end,.swal2-container.swal2-top-right{align-items:flex-start;justify-content:flex-end}.swal2-container.swal2-center{align-items:center}.swal2-container.swal2-center-left,.swal2-container.swal2-center-start{align-items:center;justify-content:flex-start}.swal2-container.swal2-center-end,.swal2-container.swal2-center-right{align-items:center;justify-content:flex-end}.swal2-container.swal2-bottom{align-items:flex-end}.swal2-container.swal2-bottom-left,.swal2-container.swal2-bottom-start{align-items:flex-end;justify-content:flex-start}.swal2-container.swal2-bottom-end,.swal2-container.swal2-bottom-right{align-items:flex-end;justify-content:flex-end}.swal2-container.swal2-bottom-end>:first-child,.swal2-container.swal2-bottom-left>:first-child,.swal2-container.swal2-bottom-right>:first-child,.swal2-container.swal2-bottom-start>:first-child,.swal2-container.swal2-bottom>:first-child{margin-top:auto}.swal2-container.swal2-grow-fullscreen>.swal2-modal{display:flex!important;flex:1;align-self:stretch;justify-content:center}.swal2-container.swal2-grow-row>.swal2-modal{display:flex!important;flex:1;align-content:center;justify-content:center}.swal2-container.swal2-grow-column{flex:1;flex-direction:column}.swal2-container.swal2-grow-column.swal2-bottom,.swal2-container.swal2-grow-column.swal2-center,.swal2-container.swal2-grow-column.swal2-top{align-items:center}.swal2-container.swal2-grow-column.swal2-bottom-left,.swal2-container.swal2-grow-column.swal2-bottom-start,.swal2-container.swal2-grow-column.swal2-center-left,.swal2-container.swal2-grow-column.swal2-center-start,.swal2-container.swal2-grow-column.swal2-top-left,.swal2-container.swal2-grow-column.swal2-top-start{align-items:flex-start}.swal2-container.swal2-grow-column.swal2-bottom-end,.swal2-container.swal2-grow-column.swal2-bottom-right,.swal2-container.swal2-grow-column.swal2-center-end,.swal2-container.swal2-grow-column.swal2-center-right,.swal2-container.swal2-grow-column.swal2-top-end,.swal2-container.swal2-grow-column.swal2-top-right{align-items:flex-end}.swal2-container.swal2-grow-column>.swal2-modal{display:flex!important;flex:1;align-content:center;justify-content:center}.swal2-container.swal2-no-transition{transition:none!important}.swal2-container:not(.swal2-top):not(.swal2-top-start):not(.swal2-top-end):not(.swal2-top-left):not(.swal2-top-right):not(.swal2-center-start):not(.swal2-center-end):not(.swal2-center-left):not(.swal2-center-right):not(.swal2-bottom):not(.swal2-bottom-start):not(.swal2-bottom-end):not(.swal2-bottom-left):not(.swal2-bottom-right):not(.swal2-grow-fullscreen)>.swal2-modal{margin:auto}@media all and (-ms-high-contrast:none),(-ms-high-contrast:active){.swal2-container .swal2-modal{margin:0!important}}.swal2-popup{display:none;position:relative;box-sizing:border-box;flex-direction:column;justify-content:center;width:32em;max-width:100%;padding:1.25em;border:none;border-radius:.3125em;background:#fff;font-family:inherit;font-size:1rem}.swal2-popup:focus{outline:0}.swal2-popup.swal2-loading{overflow-y:hidden}.swal2-header{display:flex;flex-direction:column;align-items:center;padding:0 1.8em}.swal2-title{position:relative;max-width:100%;margin:0 0 .4em;padding:0;color:#595959;font-size:1.875em;font-weight:600;text-align:center;text-transform:none;word-wrap:break-word}.swal2-actions{display:flex;z-index:1;flex-wrap:wrap;align-items:center;justify-content:center;width:100%;margin:1.25em auto 0}.swal2-actions:not(.swal2-loading) .swal2-styled[disabled]{opacity:.4}.swal2-actions:not(.swal2-loading) .swal2-styled:hover{background-image:linear-gradient(rgba(0,0,0,.1),rgba(0,0,0,.1))}.swal2-actions:not(.swal2-loading) .swal2-styled:active{background-image:linear-gradient(rgba(0,0,0,.2),rgba(0,0,0,.2))}.swal2-actions.swal2-loading .swal2-styled.swal2-confirm{box-sizing:border-box;width:2.5em;height:2.5em;margin:.46875em;padding:0;-webkit-animation:swal2-rotate-loading 1.5s linear 0s infinite normal;animation:swal2-rotate-loading 1.5s linear 0s infinite normal;border:.25em solid transparent;border-radius:100%;border-color:transparent;background-color:transparent!important;color:transparent!important;cursor:default;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.swal2-actions.swal2-loading .swal2-styled.swal2-cancel{margin-right:30px;margin-left:30px}.swal2-actions.swal2-loading :not(.swal2-styled).swal2-confirm::after{content:"";display:inline-block;width:15px;height:15px;margin-left:5px;-webkit-animation:swal2-rotate-loading 1.5s linear 0s infinite normal;animation:swal2-rotate-loading 1.5s linear 0s infinite normal;border:3px solid #999;border-radius:50%;border-right-color:transparent;box-shadow:1px 1px 1px #fff}.swal2-styled{margin:.3125em;padding:.625em 2em;box-shadow:none;font-weight:500}.swal2-styled:not([disabled]){cursor:pointer}.swal2-styled.swal2-confirm{border:0;border-radius:.25em;background:initial;background-color:#3085d6;color:#fff;font-size:1.0625em}.swal2-styled.swal2-cancel{border:0;border-radius:.25em;background:initial;background-color:#aaa;color:#fff;font-size:1.0625em}.swal2-styled:focus{outline:0;box-shadow:0 0 0 1px #fff,0 0 0 3px rgba(50,100,150,.4)}.swal2-styled::-moz-focus-inner{border:0}.swal2-footer{justify-content:center;margin:1.25em 0 0;padding:1em 0 0;border-top:1px solid #eee;color:#545454;font-size:1em}.swal2-timer-progress-bar-container{position:absolute;right:0;bottom:0;left:0;height:.25em;overflow:hidden;border-bottom-right-radius:.3125em;border-bottom-left-radius:.3125em}.swal2-timer-progress-bar{width:100%;height:.25em;background:rgba(0,0,0,.2)}.swal2-image{max-width:100%;margin:1.25em auto}.swal2-close{position:absolute;z-index:2;top:0;right:0;align-items:center;justify-content:center;width:1.2em;height:1.2em;padding:0;overflow:hidden;transition:color .1s ease-out;border:none;border-radius:0;background:0 0;color:#ccc;font-family:serif;font-size:2.5em;line-height:1.2;cursor:pointer}.swal2-close:hover{transform:none;background:0 0;color:#f27474}.swal2-close::-moz-focus-inner{border:0}.swal2-content{z-index:1;justify-content:center;margin:0;padding:0 1.6em;color:#545454;font-size:1.125em;font-weight:400;line-height:normal;text-align:center;word-wrap:break-word}.swal2-checkbox,.swal2-file,.swal2-input,.swal2-radio,.swal2-select,.swal2-textarea{margin:1em auto}.swal2-file,.swal2-input,.swal2-textarea{box-sizing:border-box;width:100%;transition:border-color .3s,box-shadow .3s;border:1px solid #d9d9d9;border-radius:.1875em;background:inherit;box-shadow:inset 0 1px 1px rgba(0,0,0,.06);color:inherit;font-size:1.125em}.swal2-file.swal2-inputerror,.swal2-input.swal2-inputerror,.swal2-textarea.swal2-inputerror{border-color:#f27474!important;box-shadow:0 0 2px #f27474!important}.swal2-file:focus,.swal2-input:focus,.swal2-textarea:focus{border:1px solid #b4dbed;outline:0;box-shadow:0 0 3px #c4e6f5}.swal2-file::-moz-placeholder,.swal2-input::-moz-placeholder,.swal2-textarea::-moz-placeholder{color:#ccc}.swal2-file:-ms-input-placeholder,.swal2-input:-ms-input-placeholder,.swal2-textarea:-ms-input-placeholder{color:#ccc}.swal2-file::-ms-input-placeholder,.swal2-input::-ms-input-placeholder,.swal2-textarea::-ms-input-placeholder{color:#ccc}.swal2-file::placeholder,.swal2-input::placeholder,.swal2-textarea::placeholder{color:#ccc}.swal2-range{margin:1em auto;background:#fff}.swal2-range input{width:80%}.swal2-range output{width:20%;color:inherit;font-weight:600;text-align:center}.swal2-range input,.swal2-range output{height:2.625em;padding:0;font-size:1.125em;line-height:2.625em}.swal2-input{height:2.625em;padding:0 .75em}.swal2-input[type=number]{max-width:10em}.swal2-file{background:inherit;font-size:1.125em}.swal2-textarea{height:6.75em;padding:.75em}.swal2-select{min-width:50%;max-width:100%;padding:.375em .625em;background:inherit;color:inherit;font-size:1.125em}.swal2-checkbox,.swal2-radio{align-items:center;justify-content:center;background:#fff;color:inherit}.swal2-checkbox label,.swal2-radio label{margin:0 .6em;font-size:1.125em}.swal2-checkbox input,.swal2-radio input{margin:0 .4em}.swal2-validation-message{display:none;align-items:center;justify-content:center;padding:.625em;overflow:hidden;background:#f0f0f0;color:#666;font-size:1em;font-weight:300}.swal2-validation-message::before{content:"!";display:inline-block;width:1.5em;min-width:1.5em;height:1.5em;margin:0 .625em;border-radius:50%;background-color:#f27474;color:#fff;font-weight:600;line-height:1.5em;text-align:center}.swal2-icon{position:relative;box-sizing:content-box;justify-content:center;width:5em;height:5em;margin:1.25em auto 1.875em;border:.25em solid transparent;border-radius:50%;font-family:inherit;line-height:5em;cursor:default;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.swal2-icon .swal2-icon-content{display:flex;align-items:center;font-size:3.75em}.swal2-icon.swal2-error{border-color:#f27474;color:#f27474}.swal2-icon.swal2-error .swal2-x-mark{position:relative;flex-grow:1}.swal2-icon.swal2-error [class^=swal2-x-mark-line]{display:block;position:absolute;top:2.3125em;width:2.9375em;height:.3125em;border-radius:.125em;background-color:#f27474}.swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=left]{left:1.0625em;transform:rotate(45deg)}.swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=right]{right:1em;transform:rotate(-45deg)}.swal2-icon.swal2-error.swal2-icon-show{-webkit-animation:swal2-animate-error-icon .5s;animation:swal2-animate-error-icon .5s}.swal2-icon.swal2-error.swal2-icon-show .swal2-x-mark{-webkit-animation:swal2-animate-error-x-mark .5s;animation:swal2-animate-error-x-mark .5s}.swal2-icon.swal2-warning{border-color:#facea8;color:#f8bb86}.swal2-icon.swal2-info{border-color:#9de0f6;color:#3fc3ee}.swal2-icon.swal2-question{border-color:#c9dae1;color:#87adbd}.swal2-icon.swal2-success{border-color:#a5dc86;color:#a5dc86}.swal2-icon.swal2-success [class^=swal2-success-circular-line]{position:absolute;width:3.75em;height:7.5em;transform:rotate(45deg);border-radius:50%}.swal2-icon.swal2-success [class^=swal2-success-circular-line][class$=left]{top:-.4375em;left:-2.0635em;transform:rotate(-45deg);transform-origin:3.75em 3.75em;border-radius:7.5em 0 0 7.5em}.swal2-icon.swal2-success [class^=swal2-success-circular-line][class$=right]{top:-.6875em;left:1.875em;transform:rotate(-45deg);transform-origin:0 3.75em;border-radius:0 7.5em 7.5em 0}.swal2-icon.swal2-success .swal2-success-ring{position:absolute;z-index:2;top:-.25em;left:-.25em;box-sizing:content-box;width:100%;height:100%;border:.25em solid rgba(165,220,134,.3);border-radius:50%}.swal2-icon.swal2-success .swal2-success-fix{position:absolute;z-index:1;top:.5em;left:1.625em;width:.4375em;height:5.625em;transform:rotate(-45deg)}.swal2-icon.swal2-success [class^=swal2-success-line]{display:block;position:absolute;z-index:2;height:.3125em;border-radius:.125em;background-color:#a5dc86}.swal2-icon.swal2-success [class^=swal2-success-line][class$=tip]{top:2.875em;left:.8125em;width:1.5625em;transform:rotate(45deg)}.swal2-icon.swal2-success [class^=swal2-success-line][class$=long]{top:2.375em;right:.5em;width:2.9375em;transform:rotate(-45deg)}.swal2-icon.swal2-success.swal2-icon-show .swal2-success-line-tip{-webkit-animation:swal2-animate-success-line-tip .75s;animation:swal2-animate-success-line-tip .75s}.swal2-icon.swal2-success.swal2-icon-show .swal2-success-line-long{-webkit-animation:swal2-animate-success-line-long .75s;animation:swal2-animate-success-line-long .75s}.swal2-icon.swal2-success.swal2-icon-show .swal2-success-circular-line-right{-webkit-animation:swal2-rotate-success-circular-line 4.25s ease-in;animation:swal2-rotate-success-circular-line 4.25s ease-in}.swal2-progress-steps{align-items:center;margin:0 0 1.25em;padding:0;background:inherit;font-weight:600}.swal2-progress-steps li{display:inline-block;position:relative}.swal2-progress-steps .swal2-progress-step{z-index:20;width:2em;height:2em;border-radius:2em;background:#3085d6;color:#fff;line-height:2em;text-align:center}.swal2-progress-steps .swal2-progress-step.swal2-active-progress-step{background:#3085d6}.swal2-progress-steps .swal2-progress-step.swal2-active-progress-step~.swal2-progress-step{background:#add8e6;color:#fff}.swal2-progress-steps .swal2-progress-step.swal2-active-progress-step~.swal2-progress-step-line{background:#add8e6}.swal2-progress-steps .swal2-progress-step-line{z-index:10;width:2.5em;height:.4em;margin:0 -1px;background:#3085d6}[class^=swal2]{-webkit-tap-highlight-color:transparent}.swal2-show{-webkit-animation:swal2-show .3s;animation:swal2-show .3s}.swal2-hide{-webkit-animation:swal2-hide .15s forwards;animation:swal2-hide .15s forwards}.swal2-noanimation{transition:none}.swal2-scrollbar-measure{position:absolute;top:-9999px;width:50px;height:50px;overflow:scroll}.swal2-rtl .swal2-close{right:auto;left:0}.swal2-rtl .swal2-timer-progress-bar{right:0;left:auto}@supports (-ms-accelerator:true){.swal2-range input{width:100%!important}.swal2-range output{display:none}}@media all and (-ms-high-contrast:none),(-ms-high-contrast:active){.swal2-range input{width:100%!important}.swal2-range output{display:none}}@-moz-document url-prefix(){.swal2-close:focus{outline:2px solid rgba(50,100,150,.4)}}@-webkit-keyframes swal2-toast-show{0%{transform:translateY(-.625em) rotateZ(2deg)}33%{transform:translateY(0) rotateZ(-2deg)}66%{transform:translateY(.3125em) rotateZ(2deg)}100%{transform:translateY(0) rotateZ(0)}}@keyframes swal2-toast-show{0%{transform:translateY(-.625em) rotateZ(2deg)}33%{transform:translateY(0) rotateZ(-2deg)}66%{transform:translateY(.3125em) rotateZ(2deg)}100%{transform:translateY(0) rotateZ(0)}}@-webkit-keyframes swal2-toast-hide{100%{transform:rotateZ(1deg);opacity:0}}@keyframes swal2-toast-hide{100%{transform:rotateZ(1deg);opacity:0}}@-webkit-keyframes swal2-toast-animate-success-line-tip{0%{top:.5625em;left:.0625em;width:0}54%{top:.125em;left:.125em;width:0}70%{top:.625em;left:-.25em;width:1.625em}84%{top:1.0625em;left:.75em;width:.5em}100%{top:1.125em;left:.1875em;width:.75em}}@keyframes swal2-toast-animate-success-line-tip{0%{top:.5625em;left:.0625em;width:0}54%{top:.125em;left:.125em;width:0}70%{top:.625em;left:-.25em;width:1.625em}84%{top:1.0625em;left:.75em;width:.5em}100%{top:1.125em;left:.1875em;width:.75em}}@-webkit-keyframes swal2-toast-animate-success-line-long{0%{top:1.625em;right:1.375em;width:0}65%{top:1.25em;right:.9375em;width:0}84%{top:.9375em;right:0;width:1.125em}100%{top:.9375em;right:.1875em;width:1.375em}}@keyframes swal2-toast-animate-success-line-long{0%{top:1.625em;right:1.375em;width:0}65%{top:1.25em;right:.9375em;width:0}84%{top:.9375em;right:0;width:1.125em}100%{top:.9375em;right:.1875em;width:1.375em}}@-webkit-keyframes swal2-show{0%{transform:scale(.7)}45%{transform:scale(1.05)}80%{transform:scale(.95)}100%{transform:scale(1)}}@keyframes swal2-show{0%{transform:scale(.7)}45%{transform:scale(1.05)}80%{transform:scale(.95)}100%{transform:scale(1)}}@-webkit-keyframes swal2-hide{0%{transform:scale(1);opacity:1}100%{transform:scale(.5);opacity:0}}@keyframes swal2-hide{0%{transform:scale(1);opacity:1}100%{transform:scale(.5);opacity:0}}@-webkit-keyframes swal2-animate-success-line-tip{0%{top:1.1875em;left:.0625em;width:0}54%{top:1.0625em;left:.125em;width:0}70%{top:2.1875em;left:-.375em;width:3.125em}84%{top:3em;left:1.3125em;width:1.0625em}100%{top:2.8125em;left:.8125em;width:1.5625em}}@keyframes swal2-animate-success-line-tip{0%{top:1.1875em;left:.0625em;width:0}54%{top:1.0625em;left:.125em;width:0}70%{top:2.1875em;left:-.375em;width:3.125em}84%{top:3em;left:1.3125em;width:1.0625em}100%{top:2.8125em;left:.8125em;width:1.5625em}}@-webkit-keyframes swal2-animate-success-line-long{0%{top:3.375em;right:2.875em;width:0}65%{top:3.375em;right:2.875em;width:0}84%{top:2.1875em;right:0;width:3.4375em}100%{top:2.375em;right:.5em;width:2.9375em}}@keyframes swal2-animate-success-line-long{0%{top:3.375em;right:2.875em;width:0}65%{top:3.375em;right:2.875em;width:0}84%{top:2.1875em;right:0;width:3.4375em}100%{top:2.375em;right:.5em;width:2.9375em}}@-webkit-keyframes swal2-rotate-success-circular-line{0%{transform:rotate(-45deg)}5%{transform:rotate(-45deg)}12%{transform:rotate(-405deg)}100%{transform:rotate(-405deg)}}@keyframes swal2-rotate-success-circular-line{0%{transform:rotate(-45deg)}5%{transform:rotate(-45deg)}12%{transform:rotate(-405deg)}100%{transform:rotate(-405deg)}}@-webkit-keyframes swal2-animate-error-x-mark{0%{margin-top:1.625em;transform:scale(.4);opacity:0}50%{margin-top:1.625em;transform:scale(.4);opacity:0}80%{margin-top:-.375em;transform:scale(1.15)}100%{margin-top:0;transform:scale(1);opacity:1}}@keyframes swal2-animate-error-x-mark{0%{margin-top:1.625em;transform:scale(.4);opacity:0}50%{margin-top:1.625em;transform:scale(.4);opacity:0}80%{margin-top:-.375em;transform:scale(1.15)}100%{margin-top:0;transform:scale(1);opacity:1}}@-webkit-keyframes swal2-animate-error-icon{0%{transform:rotateX(100deg);opacity:0}100%{transform:rotateX(0);opacity:1}}@keyframes swal2-animate-error-icon{0%{transform:rotateX(100deg);opacity:0}100%{transform:rotateX(0);opacity:1}}@-webkit-keyframes swal2-rotate-loading{0%{transform:rotate(0)}100%{transform:rotate(360deg)}}@keyframes swal2-rotate-loading{0%{transform:rotate(0)}100%{transform:rotate(360deg)}}body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown){overflow:hidden}body.swal2-height-auto{height:auto!important}body.swal2-no-backdrop .swal2-container{top:auto;right:auto;bottom:auto;left:auto;max-width:calc(100% - .625em * 2);background-color:transparent!important}body.swal2-no-backdrop .swal2-container>.swal2-modal{box-shadow:0 0 10px rgba(0,0,0,.4)}body.swal2-no-backdrop .swal2-container.swal2-top{top:0;left:50%;transform:translateX(-50%)}body.swal2-no-backdrop .swal2-container.swal2-top-left,body.swal2-no-backdrop .swal2-container.swal2-top-start{top:0;left:0}body.swal2-no-backdrop .swal2-container.swal2-top-end,body.swal2-no-backdrop .swal2-container.swal2-top-right{top:0;right:0}body.swal2-no-backdrop .swal2-container.swal2-center{top:50%;left:50%;transform:translate(-50%,-50%)}body.swal2-no-backdrop .swal2-container.swal2-center-left,body.swal2-no-backdrop .swal2-container.swal2-center-start{top:50%;left:0;transform:translateY(-50%)}body.swal2-no-backdrop .swal2-container.swal2-center-end,body.swal2-no-backdrop .swal2-container.swal2-center-right{top:50%;right:0;transform:translateY(-50%)}body.swal2-no-backdrop .swal2-container.swal2-bottom{bottom:0;left:50%;transform:translateX(-50%)}body.swal2-no-backdrop .swal2-container.swal2-bottom-left,body.swal2-no-backdrop .swal2-container.swal2-bottom-start{bottom:0;left:0}body.swal2-no-backdrop .swal2-container.swal2-bottom-end,body.swal2-no-backdrop .swal2-container.swal2-bottom-right{right:0;bottom:0}@media print{body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown){overflow-y:scroll!important}body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown)>[aria-hidden=true]{display:none}body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) .swal2-container{position:static!important}}body.swal2-toast-shown .swal2-container{background-color:transparent}body.swal2-toast-shown .swal2-container.swal2-top{top:0;right:auto;bottom:auto;left:50%;transform:translateX(-50%)}body.swal2-toast-shown .swal2-container.swal2-top-end,body.swal2-toast-shown .swal2-container.swal2-top-right{top:0;right:0;bottom:auto;left:auto}body.swal2-toast-shown .swal2-container.swal2-top-left,body.swal2-toast-shown .swal2-container.swal2-top-start{top:0;right:auto;bottom:auto;left:0}body.swal2-toast-shown .swal2-container.swal2-center-left,body.swal2-toast-shown .swal2-container.swal2-center-start{top:50%;right:auto;bottom:auto;left:0;transform:translateY(-50%)}body.swal2-toast-shown .swal2-container.swal2-center{top:50%;right:auto;bottom:auto;left:50%;transform:translate(-50%,-50%)}body.swal2-toast-shown .swal2-container.swal2-center-end,body.swal2-toast-shown .swal2-container.swal2-center-right{top:50%;right:0;bottom:auto;left:auto;transform:translateY(-50%)}body.swal2-toast-shown .swal2-container.swal2-bottom-left,body.swal2-toast-shown .swal2-container.swal2-bottom-start{top:auto;right:auto;bottom:0;left:0}body.swal2-toast-shown .swal2-container.swal2-bottom{top:auto;right:auto;bottom:0;left:50%;transform:translateX(-50%)}body.swal2-toast-shown .swal2-container.swal2-bottom-end,body.swal2-toast-shown .swal2-container.swal2-bottom-right{top:auto;right:0;bottom:0;left:auto}body.swal2-toast-column .swal2-toast{flex-direction:column;align-items:stretch}body.swal2-toast-column .swal2-toast .swal2-actions{flex:1;align-self:stretch;height:2.2em;margin-top:.3125em}body.swal2-toast-column .swal2-toast .swal2-loading{justify-content:center}body.swal2-toast-column .swal2-toast .swal2-input{height:2em;margin:.3125em auto;font-size:1em}body.swal2-toast-column .swal2-toast .swal2-validation-message{font-size:1em}</style><script src="https://client.crisp.chat/l.js" async=""></script><style>.keyword-info-container{box-sizing:border-box;width:92%;margin-bottom:20px;font-size:12px;border-bottom:1px solid #dee1e5;border:1px solid #f1f3f4;margin:14px 16px;border-radius:2px;padding:20px;position:relative;-webkit-font-smoothing:antialiased}body[data-dt="1"] .keyword-info-container,html[dark] .keyword-info-container{border-color:#3d4042}.keyword-info-container .title{color:#26282d;font-size:16px;font-weight:bold}.keyword-info-container .tabs{list-style:none;display:flex;justify-content:flex-start;border-bottom:1px solid #dee1e5;margin-top:-10px;padding:0px 16px;align-items:center}.keyword-info-container .tabs.tip{border-color:#f8b199 !important;border-radius:2px;border:1px solid}.keyword-info-container .tabs li{padding:8px;padding-left:0;color:#000;cursor:pointer;font-size:12px}.keyword-info-container .tabs li.small{font-size:10px}.keyword-info-container .tabs li:last-child{overflow:hidden}.keyword-info-container .tabs li.active{color:#4285f4;margin:20px 0}table.keyword-info-table{border-collapse:collapse;width:100%;color:#000;font-size:12px;position:relative}.keyword-info-table thead{height:50px}.keyword-info-table th{padding:10px;padding-left:0;font-weight:bold;color:#000;font-size:12px}.keyword-info-table th:first-child{padding-left:16px}.keyword-info-table th:last-child{padding-right:0px}.keyword-info-table td{border-bottom:1px solid #f1f3f4;padding:10px;padding-left:0;height:50px;box-sizing:border-box}.keyword-info-table tr{border-bottom:1px solid #f1f3f4}body[data-dt="1"] .keyword-info-table td,html[dark] .keyword-info-table td{border-color:#3d4042}body[data-dt="1"] .keyword-info-table tr,html[dark] .keyword-info-table tr{border-color:#3d4042}body[data-dt="1"] .keyword-info-table tfoot tr,body[data-dt="1"] .keyword-info-table tfoot td,html[dark] .keyword-info-table tfoot tr,html[dark] .keyword-info-table tfoot td{border:none}.keyword-info-table td:first-child{padding-left:16px}.keyword-info-table td:last-child{padding-right:0px}.keyword-info-table tfoot tr,.keyword-info-table tfoot td{border:none}.ubersuggest-button{color:#0086f7;font-family:Figtree;font-size:14px;font-weight:bold;line-height:29px;padding:8px 30px;border:1px solid #0086f7;background-color:#fff;border-radius:2px;outline:none;border:none;cursor:pointer;margin:4px}.ubersuggest-logo-wrapper{display:flex;align-items:center;justify-content:flex-end;margin:10px 10px 0 0;font-weight:bold;color:#26282d}.ubersuggest-logo{width:182px;height:33px;cursor:pointer}.keyword-info-container .row{display:flex;justify-content:space-between;align-items:center;margin:0;padding:20px 16px}.header h2{color:#000;font-family:Figtree;font-size:24px;font-weight:500}html[dark] .keyword-info-container .title{color:#fff}html[dark] table.keyword-info-table{color:#fff}html[dark] .keyword-info-table th{color:#fff}html[dark] .keyword-info-table tfoot tr:last-child td .button-arrow{border-color:#fff}body[data-dt="1"] .keyword-info-container .title{color:#fff}body[data-dt="1"] .keyword-info-container .tabs{border-color:rgba(255,255,255,.0509803922)}body[data-dt="1"] table.keyword-info-table{color:#fff}body[data-dt="1"] .keyword-info-table th{color:#fff}</style><style>.tippy-box[data-theme~=tip-dark] .tippy-content,.tippy-box[data-theme~=tip-light] .tippy-content{padding:0}.tippy-box[data-theme~=tip-dark]>.tippy-backdrop{background-color:#fff}.tippy-box[data-theme~=tip-dark]>.tippy-arrow:after{border-color:#fff;border-style:solid}.tippy-box[data-theme~=tip-dark][data-placement^=top]>.tippy-arrow:before{border-top-color:#fff}.tippy-box[data-theme~=tip-dark][data-placement^=top]>.tippy-arrow:after{border-top-color:#fff}.tippy-box[data-theme~=tip-dark][data-placement^=bottom]>.tippy-arrow:before{border-bottom-color:#fff;bottom:16px}.tippy-box[data-theme~=tip-dark][data-placement^=bottom]>.tippy-arrow:after{border-bottom-color:#fff}.tippy-box[data-theme~=tip-dark][data-placement^=left]>.tippy-arrow:before{border-left-color:#fff}.tippy-box[data-theme~=tip-dark][data-placement^=left]>.tippy-arrow:after{border-left-color:#fff}.tippy-box[data-theme~=tip-dark][data-placement^=right]>.tippy-arrow:before{border-right-color:#fff}.tippy-box[data-theme~=tip-dark][data-placement^=right]>.tippy-arrow:after{border-right-color:#fff}.tippy-box[data-theme~=tip-dark]>.tippy-svg-arrow{fill:#fff}.tippy-box[data-theme~=tip-light]>.tippy-backdrop{background-color:#202020}.tippy-box[data-theme~=tip-light]>.tippy-arrow:after{border-color:#202020;border-style:solid}.tippy-box[data-theme~=tip-light][data-placement^=top]>.tippy-arrow:before{border-top-color:#202020}.tippy-box[data-theme~=tip-light][data-placement^=top]>.tippy-arrow:after{border-top-color:#202020}.tippy-box[data-theme~=tip-light][data-placement^=bottom]>.tippy-arrow:before{border-bottom-color:#202020;bottom:16px}.tippy-box[data-theme~=tip-light][data-placement^=bottom]>.tippy-arrow:after{border-bottom-color:#202020}.tippy-box[data-theme~=tip-light][data-placement^=left]>.tippy-arrow:before{border-left-color:#202020}.tippy-box[data-theme~=tip-light][data-placement^=left]>.tippy-arrow:after{border-left-color:#202020}.tippy-box[data-theme~=tip-light][data-placement^=right]>.tippy-arrow:before{border-right-color:#202020}.tippy-box[data-theme~=tip-light][data-placement^=right]>.tippy-arrow:after{border-right-color:#202020}.tippy-box[data-theme~=tip-light]>.tippy-svg-arrow{fill:#202020}</style><style>.tippy-box[data-animation=fade][data-state=hidden]{opacity:0}[data-tippy-root]{max-width:calc(100vw - 10px)}.tippy-box{position:relative;background-color:#333;color:#fff;border-radius:4px;font-size:14px;line-height:1.4;white-space:normal;outline:0;transition-property:transform,visibility,opacity}.tippy-box[data-placement^=top]>.tippy-arrow{bottom:0}.tippy-box[data-placement^=top]>.tippy-arrow:before{bottom:-7px;left:0;border-width:8px 8px 0;border-top-color:initial;transform-origin:center top}.tippy-box[data-placement^=bottom]>.tippy-arrow{top:0}.tippy-box[data-placement^=bottom]>.tippy-arrow:before{top:-7px;left:0;border-width:0 8px 8px;border-bottom-color:initial;transform-origin:center bottom}.tippy-box[data-placement^=left]>.tippy-arrow{right:0}.tippy-box[data-placement^=left]>.tippy-arrow:before{border-width:8px 0 8px 8px;border-left-color:initial;right:-7px;transform-origin:center left}.tippy-box[data-placement^=right]>.tippy-arrow{left:0}.tippy-box[data-placement^=right]>.tippy-arrow:before{left:-7px;border-width:8px 8px 8px 0;border-right-color:initial;transform-origin:center right}.tippy-box[data-inertia][data-state=visible]{transition-timing-function:cubic-bezier(0.54, 1.5, 0.38, 1.11)}.tippy-arrow{width:16px;height:16px;color:#333}.tippy-arrow:before{content:"";position:absolute;border-color:rgba(0,0,0,0);border-style:solid}.tippy-content{position:relative;padding:5px 9px;z-index:1}</style><style>.tippy-box[data-theme~=light]{color:#26323d;box-shadow:0 0 20px 4px rgba(154,161,177,.15),0 4px 80px -8px rgba(36,40,47,.25),0 4px 4px -2px rgba(91,94,105,.15);background-color:#fff}.tippy-box[data-theme~=light][data-placement^=top]>.tippy-arrow:before{border-top-color:#fff}.tippy-box[data-theme~=light][data-placement^=bottom]>.tippy-arrow:before{border-bottom-color:#fff}.tippy-box[data-theme~=light][data-placement^=left]>.tippy-arrow:before{border-left-color:#fff}.tippy-box[data-theme~=light][data-placement^=right]>.tippy-arrow:before{border-right-color:#fff}.tippy-box[data-theme~=light]>.tippy-backdrop{background-color:#fff}.tippy-box[data-theme~=light]>.tippy-svg-arrow{fill:#fff}</style><style id="_goober"> @keyframes go2264125279{from{transform:scale(0) rotate(45deg);opacity:0;}to{transform:scale(1) rotate(45deg);opacity:1;}}@keyframes go3020080000{from{transform:scale(0);opacity:0;}to{transform:scale(1);opacity:1;}}@keyframes go463499852{from{transform:scale(0) rotate(90deg);opacity:0;}to{transform:scale(1) rotate(90deg);opacity:1;}}@keyframes go1268368563{from{transform:rotate(0deg);}to{transform:rotate(360deg);}}@keyframes go1310225428{from{transform:scale(0) rotate(45deg);opacity:0;}to{transform:scale(1) rotate(45deg);opacity:1;}}@keyframes go651618207{0%{height:0;width:0;opacity:0;}40%{height:0;width:6px;opacity:1;}100%{opacity:1;height:10px;}}@keyframes go901347462{from{transform:scale(0.6);opacity:0.4;}to{transform:scale(1);opacity:1;}}.go4109123758{z-index:9999;}.go4109123758 > *{pointer-events:auto;}</style><style>.ubersuggest-header-container{box-sizing:border-box;width:100%;font-size:12px;-webkit-font-smoothing:antialiased}@keyframes slideInFromLeft{from{transform:translateX(100%);opacity:0}to{transform:translateX(-4%);opacity:1}}.ubersuggest-header-container .toast-container{animation:slideInFromLeft .5s ease forwards}.ubersuggest-header-container .row{margin:0;padding:15px 16px 15px 16px;display:flex;justify-content:space-between;align-items:center;min-height:30px}.ubersuggest-header-container .row>div{display:flex;flex-wrap:wrap;gap:8px}.ubersuggest-header-container .row>div:first-child>div{flex-wrap:wrap;align-content:space-around}.ue-enable{display:block}.ue-disable,.ue-enable.hide-settings{display:none !important}.ue-disable.hide-settings{display:flex !important}.ubersuggest-header-container .settings{display:flex;align-items:center}.ubersuggest-header-container .settings-label{margin-right:21px}.ubersuggest-header-container .settings-icon{width:21px;height:21px;margin-right:7px}</style><style>.rr--group{display:flex;width:100%;position:relative}.rr--box{display:flex;width:100%;flex-grow:1;-webkit-tap-highlight-color:rgba(0,0,0,0)}.rr--svg{display:flex;aspect-ratio:1;width:100%;flex-grow:1;overflow:clip;pointer-events:none}@supports not (overflow: clip){.rr--svg{overflow:auto}}.rr--box:focus,.rr--box:focus-visible,.rr-reset:focus-visible,.rr-reset:focus{outline:none;box-shadow:none}.rr--focus-reset{outline:6px double #0079ff}.rr--box:focus-visible .rr--svg{outline:6px double #0079ff;isolation:isolate}.rr--reset{position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0, 0, 0, 0);white-space:nowrap;border:0;right:0;bottom:50%}[dir=rtl] .rr--reset{left:0;right:auto}.rr--dir-y .rr--reset{bottom:0;right:50%}.rr--disabled{opacity:.5;cursor:not-allowed}.rr--disabled .rr--svg{pointer-events:none}.rr--pointer .rr--box{cursor:pointer}.rr--dir-x{flex-direction:row}.rr--dir-y{flex-direction:column}.rr--space-sm .rr--svg{padding:8%}.rr--space-md .rr--svg{padding:12.5%}.rr--space-lg .rr--svg{padding:17.5%}.rr--dir-x.rr--gap-sm .rr--svg{margin:0 6.25%}.rr--dir-x.rr--gap-sm .rr--box:focus-visible:after{width:87.5%;left:6.25%}.rr--dir-x.rr--gap-md .rr--svg{margin:0 12.5%}.rr--dir-x.rr--gap-md .rr--box:focus-visible:after{width:75%;left:12.5%}.rr--dir-x.rr--gap-lg .rr--svg{margin:0 25%}.rr--dir-x.rr--gap-lg .rr--box:focus-visible:after{width:50%;left:25%}.rr--dir-y.rr--gap-sm .rr--svg{margin:6.25% 0}.rr--dir-y.rr--gap-md .rr--svg{margin:12.5% 0}.rr--dir-y.rr--gap-lg .rr--svg{margin:25% 0}.rr--rx-sm .rr--svg{border-radius:5%}.rr--rx-md .rr--svg{border-radius:15%}.rr--rx-lg .rr--svg{border-radius:20%}.rr--rx-full .rr--svg{border-radius:100%}.rr--has-stroke .rr--svg{stroke-linecap:round;stroke-linejoin:round}.rr--has-border .rr--svg{border-width:var(--rr--border-width);border-style:solid}.rr--on .rr--svg{fill:var(--rr--fill-on-color, none)}.rr--off .rr--svg{fill:var(--rr--fill-off-color, none)}.rr--has-stroke .rr--on .rr--svg{stroke:var(--rr--stroke-on-color, currentColor)}.rr--has-stroke .rr--off .rr--svg{stroke:var(--rr--stroke-off-color, currentColor)}.rr--on .rr--svg{background-color:var(--rr--box-on-color, none)}.rr--off .rr--svg{background-color:var(--rr--box-off-color, none)}.rr--has-border .rr--off .rr--svg{border-color:var(--rr--border-off-color, currentColor)}.rr--has-border .rr--on .rr--svg{border-color:var(--rr--border-on-color, currentColor)}.rr--fx-colors{--rr--easing: .2s cubic-bezier(.61, 1, .88, 1)}.rr--fx-colors .rr--svg{transition-duration:.2s;transition-timing-function:var(--rr--easing);transition-property:background-color,border-color,fill,stroke}.rr--fx-opacity .rr--off{opacity:.35;transition:opacity var(--rr--easing)}.rr--fx-opacity .rr--on{opacity:1}@media(hover: hover){.rr--fx-opacity .rr--box:hover{opacity:1}}@media(hover: hover){.rr--fx-zoom .rr--box{transition:transform var(--rr--easing);transform:scale(1)}.rr--fx-zoom .rr--box:hover{transform:scale(1.2)}}@media(hover: hover)and (prefers-reduced-motion){.rr--fx-zoom .rr--box:hover{transform:scale(1)}}@media(hover: hover){.rr--fx-position .rr--box{transition:transform var(--rr--easing);transform:translateY(0)}.rr--fx-position .rr--box:hover{transform:translateY(-15%)}}@media(hover: hover)and (prefers-reduced-motion){.rr--fx-position .rr--box:hover{transform:translateY(0)}}.rr--svg-stop-1{stop-color:var(--rr--fill-on-color, rgba(0, 0, 0, 0))}[dir=rtl] .rr--svg-stop-1,.rr--svg-stop-2{stop-color:var(--rr--fill-off-color, rgba(0, 0, 0, 0))}[dir=rtl] .rr--svg-stop-2{stop-color:var(--rr--fill-on-color, rgba(0, 0, 0, 0))}.rr--hf-svg-on{fill:var(--rr--fill-on-color, none)}.rr--hf-svg-off{fill:var(--rr--fill-off-color, none)}.rr--has-stroke .rr--hf-svg-on{stroke:var(--rr--stroke-on-color, currentColor)}.rr--has-stroke .rr--hf-svg-off{stroke:var(--rr--stroke-off-color, currentColor)}.rr--hf-svg-on .rr--svg,.rr--hf-svg-off .rr--svg{background-color:var(--rr--box-off-color, none)}.rr--has-border .rr--hf-svg-on .rr--svg{border-color:var(--rr--border-on-color, currentColor)}.rr--has-border .rr--hf-svg-off .rr--svg{border-color:var(--rr--border-off-color, currentColor)}.rr--dir-x .rr--hf-box-int .rr--svg{background:linear-gradient(to right, var(--rr--box-on-color, none) 50%, var(--rr--box-off-color, none) 50%)}[dir=rtl] .rr--dir-x .rr--hf-box-int .rr--svg{background:linear-gradient(to left, var(--rr--box-on-color, none) 50%, var(--rr--box-off-color, none) 50%)}.rr--dir-y .rr--hf-box-int .rr--svg{background:linear-gradient(to bottom, var(--rr--box-on-color, none) 50%, var(--rr--box-off-color, none) 50%)}.rr--hf-box-on .rr--svg{background-color:var(--rr--box-on-color, none)}.rr--hf-box-off .rr--svg{background-color:var(--rr--box-off-color, none)}.rr--hf-box-on .rr--svg,.rr--hf-box-off .rr--svg,.rr--hf-box-int .rr--svg{fill:var(--rr--fill-off-color, none)}.rr--has-stroke .rr--hf-box-on .rr--svg,.rr--has-stroke .rr--hf-box-off .rr--svg,.rr--has-stroke .rr--hf-box-int .rr--svg{stroke:var(--rr--stroke-off-color, currentColor)}.rr--has-border .rr--hf-box-on .rr--svg,.rr--has-border .rr--hf-box-int .rr--svg{border-color:var(--rr--border-on-color, currentColor)}.rr--has-border .rr--hf-box-off .rr--svg{border-color:var(--rr--border-off-color, currentColor)}</style><style>.keyword-info-section{color:#26282d;font-family:Figtree;font-size:12px;height:100%;display:flex;align-items:center;-webkit-font-smoothing:antialiased}.keyword-info-section img{max-width:none}.keyword-info-section>li{font-weight:600;position:relative;display:flex;align-items:center;gap:6px}.keyword-info-section>li:first-child::after{content:"";width:6px;height:6px;background-color:#e8ebec;border-radius:50%;margin:0px 10px 0px 4px}body[data-dt="1"] .keyword-info-section>li:first-child::after{background-color:#636363}.keyword-info-section.hidden{display:none}.keyword-info-section.google{background-color:rgba(0,0,0,0)}.keyword-info-section.youtube{margin-right:15px;padding:0 0 0 10px;height:100%;background-color:#fff}.keyword-info-section.amazon{padding:13px 0;background-color:#fff}</style><style>.kw-overview-container{box-sizing:border-box;width:673px;padding:0;margin:0;margin-top:14px;font-size:12px;font-family:Figtree;-webkit-font-smoothing:antialiased}.kw-overview-container.youtube{box-sizing:border-box;width:645px;padding:0;margin:0;font-size:12px}</style><style>.bl-info-container{box-sizing:border-box;width:100%;padding:0;margin:0;font-size:12px;font-family:"Figtree";-webkit-font-smoothing:antialiased}.bl-info-header{display:flex;min-height:24px;width:100%;padding:0;justify-content:space-between;box-sizing:border-box;margin-bottom:5px}.bl-info-header .row{display:flex;margin:0;width:100%;justify-content:space-between}.bl-info-header .row.youtube{justify-content:flex-start}.bl-info-content,.kw-info-content{width:97%;display:flex;flex-direction:column;border:1px solid #dee1e5;border-radius:4px;padding-block:16px 10px;justify-items:center;align-items:center;margin-bottom:16px;position:relative}body[data-dt="1"] .kw-info-content,body[data-dt="1"] .bl-info-content{background:rgba(0,0,0,0);border-color:#292929}.bl-info-content img.loading{width:50px;margin:0 auto;margin-bottom:10px}.kw-info-content img.loading{width:50px;margin:0 auto;margin-top:10px;margin-bottom:10px}table.bl-info-table,table.kw-info-table{border-collapse:collapse;width:calc(100% - 32px);color:#808185;font-size:12px}body[data-dt="1"] table.bl-info-table,body[data-dt="1"] table.kw-info-table{color:#fff}.bl-info-table thead,.kw-info-table thead{height:50px;background:#f6f7f7}body[data-dt="1"] table.bl-info-table thead,body[data-dt="1"] table.kw-info-table thead{background:#36373a}.bl-info-table tr,.kw-info-table tr{width:100%;max-width:600px}.bl-info-table th,.kw-info-table th{padding:10px;padding-left:0;font-weight:600;color:#000;font-size:12px;border-bottom:1px solid #f6f7f7}body[data-dt="1"] .bl-info-table th,body[data-dt="1"] .kw-info-table th{color:#fff;border-color:#3d4043}.bl-info-table th:first-child,.kw-info-table th:first-child{padding-left:16px}.bl-info-table th:last-child,.kw-info-table th:last-child{border-right:none;padding-right:16px}.bl-info-table td,.kw-info-table td{border-bottom:1px solid #dee1e5;padding:10px;padding-left:0;max-width:0;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;color:#000}body[data-dt="1"] .bl-info-table td,body[data-dt="1"] .kw-info-table td{color:#fff;border-color:#3d4043}.bl-info-table td:first-child,.kw-info-table td:first-child{border-left:none;padding-left:16px}.bl-info-table tfoot td:first-child,.kw-info-table tfoot td:first-child{padding-left:0;padding-top:12px}.bl-info-table tfoot td:last-child,.kw-info-table tfoot td:last-child{padding-right:0;padding-top:12px}.bl-info-table td:last-child,.kw-info-table td:last-child{border-right:none;padding-right:16px}.bl-info-table tfoot tr:last-child td,.kw-info-table tfoot tr:last-child td{border-bottom:none}.bl-info-container .row{display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap}.bl-info-container .row.start{justify-content:flex-start;gap:10px}.bl-info-container .row.start.tip{border:1px solid #f8b199;border-radius:2px;width:fit-content;padding-right:10px}</style><style>.statistics-graph-container{box-sizing:border-box;width:92%;font-size:12px;border-bottom:1px solid #dee1e5;border:1px solid #f1f3f4;margin:24px 16px;border-radius:2px;padding:20px;padding-bottom:10px;position:relative;-webkit-font-smoothing:antialiased}body[data-dt="1"] .statistics-graph-container{border-color:#3d4042}.statistics-graph-container.tip{border:1px solid #f8b199;border-radius:2px}.statistics-graph-container .row{display:flex;justify-content:space-between;align-items:center;margin:0 0 20px 0}.statistics-graph-container .row.closed{margin-bottom:10px}.statistics-graph-container .row .title{color:#26282d;font-size:16px;font-weight:bold}body[data-dt="1"] .statistics-graph-container .row .title{color:#fff}body[data-dt="1"] .statistics-graph-container .tabs{border-bottom:1px solid #dee1e5}body[data-dt="1"] .statistics-graph-container .tabs li{color:#fff}body[data-dt="1"] .statistics-graph-container .tabs li.active{color:#fff;border-bottom:3px solid #fff}</style><link href="https://client.relay.crisp.chat" rel="dns-prefetch" crossorigin=""><link href="https://client.crisp.chat" rel="preconnect" crossorigin=""><script src="https://client.crisp.chat/static/javascripts/client.js?ade5be4" type="text/javascript" async=""></script><link href="https://client.crisp.chat/static/stylesheets/client_default.css?ade5be4" type="text/css" rel="stylesheet"><link type="text/css" rel="stylesheet" charset="UTF-8" href="https://www.gstatic.com/_/translate_http/_/ss/k=translate_http.tr.26tY-h6gH9w.L.W.O/am=gAE/d=0/rs=AN8SPfoGXBOIjDP5u9X-Fj08BKzEvbDeLg/m=el_main_css"></head>
{{-- nd heree --}}
<body>
    <header class="site-header">
        <div class="main-header wow fadeIn" data-wow-duration="1s" data-wow-delay=".3s">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 col-sm-2 text-center responsiveA">
                        <a href="https://lgdhaka.com">
                            <img style="width: 50%;margin-top: -10px;" src="https://lgdhaka.com/assets/images/dijital union logo.png">
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-8 text-center">
                        <div style="color:black; padding-bottom:20px;">
                            <h3 class=" textA" style="margin-top:5px;font-family: 'Kalpurush', sans-serif;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Smart UP, Dhaka</font></font></h3>


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
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class=""></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="2" class="active"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="3" class=""></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="4" class=""></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="5" class=""></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item">
                                            <img src="https://lgdhaka.com/assets/images/1.png" class="d-block w-100" alt="...">
                                            <div class="carousel-caption d-none d-md-block">
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img src="https://lgdhaka.com/assets/images/2.png" class="d-block w-100" alt="...">
                                            <div class="carousel-caption d-none d-md-block">
                                            </div>
                                        </div>
                                        <div class="carousel-item active">
                                            <img src="https://lgdhaka.com/assets/images/3.png" class="d-block w-100" alt="...">
                                            <div class="carousel-caption d-none d-md-block">
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img src="https://lgdhaka.com/assets/images/4.png" class="d-block w-100" alt="...">
                                            <div class="carousel-caption d-none d-md-block">
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img src="https://lgdhaka.com/assets/images/5.png" class="d-block w-100" alt="...">
                                            <div class="carousel-caption d-none d-md-block">
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img src="https://lgdhaka.com/assets/images/6.png" class="d-block w-100" alt="...">
                                            <div class="carousel-caption d-none d-md-block">
                                            </div>
                                        </div>

                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                        <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
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
