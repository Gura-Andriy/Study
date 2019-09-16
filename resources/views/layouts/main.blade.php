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

</style>

<body class="d-flex flex-column h-100">

@include('layouts.header')
@yield('content')

<h1>All realty in one place</h1>
<h4>Fast, cheap, easy!</h4>

@include('layouts.footer')
<script src="/js/jquery.js"></script>
<script src="/js/bootsrap.js"></script>
</body>
</html>
