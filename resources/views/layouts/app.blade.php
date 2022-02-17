<!DOCTYPE html>
<html lang="ru">

	@include('inc.head')

<body>
	@include('inc.header')

	@if(Request::is('/'))
		@include('inc.slider')
	@endif

	@yield('content')

	@include('inc.footer')
	<script src="https://getbootstrap.com/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>	
</body>
</html>