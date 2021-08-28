<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Bootstrap 4 Admin &amp; Dashboard Template">
	<meta name="author" content="Bootlab">

    <title>My Layout</title>
    <!-- <link rel="stylesheet" type="text/css" href="/css/classic.css"> -->
    <link href="{{ ('/css/classic.css') }}" rel="stylesheet">
</head>

<body>
	<div class="wrapper"><!-- endofsidebar -->
		<!-- @yield('sidebar') -->
		<!-- @include('templates.sidebar') -->
		<div class="main"> <!-- startoftopbar -->
		@yield('topbar')
		<!-- @yield('content')    contentofpage -->
		@yield('footer')
		</div> <!-- endoftopbar -->
	</div>
    <script type="text/javascript" src="{{ ('/js/app.js') }}"></script>

</body>

</html>