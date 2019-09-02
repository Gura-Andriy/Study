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
        background-color: #d6e9f8;
    }

</style>

<body class="d-flex flex-column h-100">

@include('layouts.header')
@yield('content')
@include('layouts.footer')

<script src="/js/jquery.js"></script>
<script src="/js/bootsrap.js"></script>
</body>
</html>
