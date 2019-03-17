@include('kazned.head')
<!DOCTYPE html>
<html>
<head>
	<title>Kazned Exampler</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
	<meta name="csrf-token" content="{{ csrf_token() }}" />

</head>
<body>
@yield('nav')

	@yield('banner')
<div class="container">
	<div class="row">
	@yield('form')

	</div>
</div>
<br>
<div class="placeAjax">
	<div class="container">

	</div>
</div>



	<footer>
		<script
				src="http://code.jquery.com/jquery-3.3.1.min.js"
				integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
				crossorigin="anonymous"></script>
		<script type="text/javascript" src="{{asset('js/main.js')}}"></script>

	</footer>
</body>
</html>