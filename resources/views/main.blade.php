<!DOCTYPE html>
<html lang="en">

	<head>
		@include('partials._head')
	</head>

	<body>
		<nav id="nav" class="clearfix">
			@include('partials._nav')
		</nav>

		<div class="content-container">
			@yield('content')
			@include('partials._footer')
		</div>

		@include('partials._javascript')

		@yield('scripts')
		
	</body>
	
</html>