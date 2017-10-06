<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<head>
	<meta charset="utf-8"/>
	<title>SB Admin v2.0 in Laravel 5</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport"/>
	<meta content="" name="description"/>
	<meta content="" name="author"/>

	<link rel="stylesheet" href="{{ asset("assets/stylesheets/styles.css") }}" />
 	<link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="//cdn.datatables.net/select/1.2.3/css/select.dataTables.min.css">
</head>
<body>
	@yield('body')
	<script src="{{ asset("assets/scripts/frontend.js") }}" type="text/javascript"></script>
	<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>

	@stack('scripts')
</body>
</html>
