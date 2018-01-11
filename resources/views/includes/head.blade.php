<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="shortcut icon" type="image/x-icon" href="{{url('/favicon.ico')}}">
	<title>@yield('title')</title>
	<meta name="Robots" content="@lang('content.robots')">
	<meta name="keywords" content="{{ trans('content.keywords') }}">
	<meta name="description" content="{{ trans('content.description') }}">
	<link rel="author" href="humans.txt" type="text/plain" />
	<meta name="DC.title" content="{{ trans('content.dctitle') }}">
	<meta name="geo.placename" content="{{ trans('content.placename') }}">
	<meta name="geo.region" content="{{ trans('content.region') }}">
	<meta name="geo.position" content="{{ trans('content.position') }}">
	<meta name="ICBM" content="{{ trans('content.icbm') }}">
	<link rel="stylesheet" type="text/css" href="{{mix('css/app.css')}}">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- Chrome, Firefox OS, Opera and Vivaldi -->
	<meta name="theme-color" content="#ff0202">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#ff0202">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#ff0202">

</head>