<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    {{--<script src="assets/js/echarts.min.js"></script>--}}
    <link rel="stylesheet" href="{{ asset('css/amazeui.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/amazeui.datatables.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    {{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
</head>

@yield("body")
</html>