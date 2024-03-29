<!doctype html>
<html lang="en" class="h-100">

<link href="/css/header.css" rel="stylesheet">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">

    <title>FirstProject</title>

    <link href="/css/bootsrap.css" rel="stylesheet">

    <link href="/css/sticky-footer-navbar.css" rel="stylesheet">
</head>

<style>
    body {
        background: url('http://genchi.info/image/new-york-city-wallpaper-hd-3.jpg');
        height: 100%;
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }

    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        font-weight: 300;
    }

    body {
        font-family: 'Source Sans Pro', sans-serif;
        color: #fff;
        font-size: 300;
    }

    body::-webkit-input-placeholder {
        font-family: 'Source Sans Pro', sans-serif;
        color: #fff;
        opacity: 1;
        font-weight: 300;
    }

    body::-moz-placeholder {
        font-family: 'Source Sans Pro', sans-serif;
        color: #fff;
        opacity: 1;
        font-weight: 300;
    }

    body:-ms-input-placeholder {
        font-family: 'Source Sans Pro', sans-serif;
        color: #fff;
        font-weight: 300;
    }

    .wrapper {
        background: #50a3a2;
        background: linear-gradient(to botton rigt, #50a3a2 0%, #53e3a6 100%);
        position: absolute;
        top: 20%;
        left: 25%;
        width: 70%;
        height: 400px;
        margin-top: -200px;
        overflow: hidden;
        opacity: 0.8;
    }

    .wrapper.form-success .container h1 {
        -webkit-transform: translateY(px);
        transform: translateY(85px);
    }

    .container {
        max-width: 600px;
        margin: auto;
        padding: 30px 0;
        height: 400px;
        text-align: center;
    }

    .container h1 {
        font-size: 40px;
        transition-duration: 1s;
        transition-timing-function: ease-in-put;
        font-weight: 200;
    }

    form {
        padding: 20px 0;
        position: relative;
        z-index: 2;
    }

    form input {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        outline: 0;
        border: 1px solid rgba(255, 255, 255, 0.4);
        background-color: rgba(255, 255, 255, 0.4);
        width: 250px;
        border-radius: 3px;
        padding: 10px 15px;
        margin: auto auto auto;
        display: block;
        text-align: center;
        font-size: 18px;
        color: #fff;
        transition-duration: 0.25s;
        font-weight: 300;
        height: 40px;
    }

    form input:hover {
        background-color: rgba(255, 255, 255, 0.4);
    }

    form input:focus {
        background-color: #fff;
        width: 300px;
        color: #53e3a6;
    }

    form button {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        outline: 0;
        background-color: #fff;
        border: 0;
        padding: 10px 15px;
        color: #0c5460;
        border-radius: 3px;
        width: 250px;
        cursor: pointer;
        font-size: 18px;
        transition-duration: 0.25s;
    }

    form button:hover {
        background-color: #f5f7f9;
    }

    .bg-bubbles {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
    }

    .bg-bubbles li {
        position: absolute;
        list-style: none;
        display: block;
        width: 40px;
        height: 40px;
        background-color: rgba(255, 255, 255, 0.15);
        bottom: -160px;
        -webkit-animation: square 25s infinite;
        animation: square 25s infinite;
        transition-timing-function: linear;
    }

    .bg-bubbles li:nth-child(1) {
        left: 10%;
    }

    .bg-bubbles li:nth-child(2) {
        left: 20%;
        width: 80px;
        height: 80px;
        -webkit-animation-delay: 2s;
        animation-delay: 2s;
        -webkit-animation-duration: 17s;
        animation-duration: 17s;
    }

    .bg-bubbles li:nth-child(3) {
        left: 25%;
        -webkit-animation-delay: 4s;
        animation-delay: 4s;
    }

    .bg-bubbles li:nth-child(4) {
        left: 40%;
        width: 60px;
        height: 60px;
        -webkit-animation-duration: 22s;
        animation-duration: 22s;
        background-color: rgba(255, 255, 255, 0.25);
    }

    .bg-bubbles li:nth-child(5) {
        left: 70%;
    }

    .bg-bubbles li:nth-child(6) {
        left: 80%;
        width: 120px;
        height: 120px;
        -webkit-animation-delay: 3s;
        animation-delay: 3s;
        background-color: rgba(255, 255, 255, 0.2);
    }

    .bg-bubbles li:nth-child(7) {
        left: 32%;
        width: 160px;
        height: 160px;
        -webkit-animation-delay: 7s;
        animation-delay: 7s;
    }

    .bg-bubbles li:nth-child(8) {
        left: 55%;
        width: 20px;
        height: 20px;
        -webkit-animation-delay: 15s;
        animation-delay: 15s;
        -webkit-animation-duration: 40s;
        animation-duration: 40s;
    }

    .bg-bubbles li:nth-child(9) {
        left: 25%;
        width: 10px;
        height: 10px;
        -webkit-animation-delay: 2s;
        animation-delay: 2s;
        -webkit-animation-duration: 40s;
        animation-duration: 40s;
        background-color: rgba(255, 255, 255, 0.3);
    }

    .bg-bubbles li:nth-child(10) {
        left: 90%;
        width: 160px;
        height: 160px;
        -webkit-animation-delay: 11s;
        animation-delay: 11s;
    }

    @-webkit-keyframes square {
        0% {
            -webkit-transform: translateY(0);
            transform: translateY(0);
        }
        100% {
            -webkit-transform: translateY(-700px) rotate(600deg);
            transform: translateY(-700px) rotate(600deg);
        }
    }

    @keyframes square {
        0% {
            -webkit-transform: translateY(0);
            transform: translateY(0);
        }
        100% {
            -webkit-transform: translateY(-700px) rotate(600deg);
            transform: translateY(-700px) rotate(600deg);
        }
    }

</style>

<body>

@include('layouts.header')
@yield('content')

<div class="wrapper container">
    <div class="container">
        <h1>Welcome</h1>

        <form class="form">
            <input type="text" placeholder="Username">
            <p></p>
            <input type="email" placeholder="E-mail">
            <p></p>
            <input type="password" placeholder="Password">
            <p></p>
            <button onclick="return false;">Login</button>
        </form>

    </div>

    <ul class="bg-bubbles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
</div>

</body>




<script src="/js/jquery.js"></script>
<script src="/js/bootsrap.js"></script>
</body>
</html>













