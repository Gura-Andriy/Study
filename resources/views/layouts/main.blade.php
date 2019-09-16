<!doctype html>
<html lang="en" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">

    <title>FirstProject</title>

    <link href="/css/header.css" rel="stylesheet">

    <link href="/css/fegister-form.css" rel="stylesheet">

    <link href="/css/bootsrap.css" rel="stylesheet">

    <link href="/css/sticky-footer-navbar.css" rel="stylesheet">
</head>

<style>

    body {
        background: url('http://genchi.info/image/new-york-city-wallpaper-hd-3.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        height: 100%;
        background-size: cover;
    }

    h1 {
        text-align: center;
        margin-top: auto;
    }

    h4 {
        text-align: center;
        margin-top: 50px;
    }

    body {
        margin: 0;
    }

    /*.bg-bubbles {*/
    /*    overflow: hidden;*/
    /*    position: absolute;*/
    /*    margin-bottom: -100%;*/
    /*    left: 0;*/
    /*    width: 100%;*/
    /*    height: 100%;*/
    /*    z-index: 1;*/
    /*}*/

    /*.bg-bubbles li {*/
    /*    position: absolute;*/
    /*    list-style: none;*/
    /*    display: block;*/
    /*    width: 40px;*/
    /*    height: 40px;*/
    /*    background-color: rgba(255, 255, 255, 0.15);*/
    /*    bottom: -160px;*/
    /*    -webkit-animation: square 25s infinite;*/
    /*    animation: square 25s infinite;*/
    /*    transition-timing-function: linear;*/
    /*}*/

    /*.bg-bubbles li:nth-child(1) {*/
    /*    left: 10%;*/
    /*}*/

    /*.bg-bubbles li:nth-child(2) {*/
    /*    left: 20%;*/
    /*    width: 80px;*/
    /*    height: 80px;*/
    /*    -webkit-animation-delay: 2s;*/
    /*    animation-delay: 2s;*/
    /*    -webkit-animation-duration: 17s;*/
    /*    animation-duration: 17s;*/
    /*}*/

    /*.bg-bubbles li:nth-child(3) {*/
    /*    left: 25%;*/
    /*    -webkit-animation-delay: 4s;*/
    /*    animation-delay: 4s;*/
    /*}*/

    /*.bg-bubbles li:nth-child(4) {*/
    /*    left: 40%;*/
    /*    width: 60px;*/
    /*    height: 60px;*/
    /*    -webkit-animation-duration: 22s;*/
    /*    animation-duration: 22s;*/
    /*    background-color: rgba(255, 255, 255, 0.25);*/
    /*}*/

    /*.bg-bubbles li:nth-child(5) {*/
    /*    left: 70%;*/
    /*}*/

    /*.bg-bubbles li:nth-child(6) {*/
    /*    left: 80%;*/
    /*    width: 120px;*/
    /*    height: 120px;*/
    /*    -webkit-animation-delay: 3s;*/
    /*    animation-delay: 3s;*/
    /*    background-color: rgba(255, 255, 255, 0.2);*/
    /*}*/

    /*.bg-bubbles li:nth-child(7) {*/
    /*    left: 32%;*/
    /*    width: 160px;*/
    /*    height: 160px;*/
    /*    -webkit-animation-delay: 7s;*/
    /*    animation-delay: 7s;*/
    /*}*/

    /*.bg-bubbles li:nth-child(8) {*/
    /*    left: 55%;*/
    /*    width: 20px;*/
    /*    height: 20px;*/
    /*    -webkit-animation-delay: 15s;*/
    /*    animation-delay: 15s;*/
    /*    -webkit-animation-duration: 40s;*/
    /*    animation-duration: 40s;*/
    /*}*/

    /*.bg-bubbles li:nth-child(9) {*/
    /*    left: 25%;*/
    /*    width: 10px;*/
    /*    height: 10px;*/
    /*    -webkit-animation-delay: 2s;*/
    /*    animation-delay: 2s;*/
    /*    -webkit-animation-duration: 40s;*/
    /*    animation-duration: 40s;*/
    /*    background-color: rgba(255, 255, 255, 0.3);*/
    /*}*/

    /*.bg-bubbles li:nth-child(10) {*/
    /*    left: 90%;*/
    /*    width: 160px;*/
    /*    height: 160px;*/
    /*    -webkit-animation-delay: 11s;*/
    /*    animation-delay: 11s;*/
    /*}*/

    /*@-webkit-keyframes square {*/
    /*    0% {*/
    /*        -webkit-transform: translateY(0);*/
    /*        transform: translateY(0);*/
    /*    }*/
    /*    100% {*/
    /*        -webkit-transform: translateY(-700px) rotate(600deg);*/
    /*        transform: translateY(-700px) rotate(600deg);*/
    /*    }*/
    /*}*/

    /*@keyframes square {*/
    /*    0% {*/
    /*        -webkit-transform: translateY(0);*/
    /*        transform: translateY(0);*/
    /*    }*/
    /*    100% {*/
    /*        -webkit-transform: translateY(-700px) rotate(600deg);*/
    /*        transform: translateY(-700px) rotate(600deg);*/
    /*    }*/
    /*}*/

</style>

<body class="d-flex flex-column h-100">

@include('layouts.header')
@yield('content')

{{--<ul class="bg-bubbles">--}}
{{--    <li></li>--}}
{{--    <li></li>--}}
{{--    <li></li>--}}
{{--    <li></li>--}}
{{--    <li></li>--}}
{{--    <li></li>--}}
{{--    <li></li>--}}
{{--    <li></li>--}}
{{--    <li></li>--}}
{{--    <li></li>--}}
{{--</ul>--}}

<h1>All realty in one place</h1>
<h4>Fast, cheap, easy!</h4>

@include('layouts.footer')
<script src="/js/jquery.js"></script>
<script src="/js/bootsrap.js"></script>
</body>
</html>
