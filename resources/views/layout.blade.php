<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- <meta name="description" content="Responsive Bootstrap 4 Admin &amp; Dashboard Template"> -->
	<meta name="author" content="Bootlab">

    <title>My Layout</title>
    <link rel="stylesheet" type="text/css" href="{{ ('/css/classic.css') }}">
</head>

<body>
	<div class="wrapper">
		@include('templates.sidebar')

		<div class="main">

  		@include('templates.topbar')
		@yield('topbar')
		@yield('content')
		@include('templates.footer')
		</div>
	</div>
    <script type="text/javascript" src="{{('/js/app.js')}}"></script>

</body>

</html>