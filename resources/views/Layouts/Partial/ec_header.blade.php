<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <meta name="description" content="Emitech Web Solution brings a beautiful web design to your hosting">
  <meta name="keywords" content="Website development, Hosting providers, Domain provider and Email services">
  <meta name="author" content="Emitech Malaysia Group">
<meta name="calonical"   href="{{ url('')}}">
<meta property="url" content="{{ url('')}}">
	<meta name="csrf-token" content="{{ csrf_token() }}">
<title>{{ config('application.name') }} - @yield('title')</title>
	<link rel="stylesheet" href="{{ asset('/Bootsrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	<link rel="stylesheet" href="{{ asset('/vendor/dashboard/css/dashboard.css')}}">
</head>

<body>	