<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>@yield('title')</title>
		<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet" />
		<link href="{!! asset('css/site.css') !!}" rel="stylesheet" />
	</head>
	<body>
		<div class="container">
			@yield('content')
		</div>
		@yield('scripts')
	</body>
</html>