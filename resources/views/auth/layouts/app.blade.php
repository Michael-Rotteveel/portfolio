<!doctype html>
<html class="is-admin" lang={{ str_replace('_', '-', app()->getLocale()) }}>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{asset('css/app.css')}}>
    <title>Michael Rotteveel | @yield('title')</title>
</head>
<body class="has-navbar-fixed-top">
@include('components.admin-navbar')
@include('components.admin-sidebar')
<main class="column is-9">
    @yield('content')
</main>
</div>
<script src={{asset('js/app.js')}}></script>
</body>
</html>
