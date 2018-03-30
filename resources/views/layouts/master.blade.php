<!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="utf-8">

	<title>@yield('title')</title>
	<meta name="description" content="">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<meta property="og:image" content="path/to/image.jpg">
	<link rel="shortcut icon" href="{{URL::to('/img/favicon/favicon.ico')}}" type="image/x-icon">
	<link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">

	<link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#000">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#000">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#000">
	<link rel="stylesheet" href="{{URL::to('/css/main.min.css')}}">
	@yield('links')
</head>
<body>
@yield('content')

<script>
	var Curl = '{{Request::url()}}';
</script>
<script src="{{URL::to('/js/scripts.min.js')}}"></script> 
@yield('scripts')
</body>
</html>