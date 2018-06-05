<!DOCTYPE html>
<html lang="pl">
	<head>
		<meta charset="utf8">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge, chrome=1" >
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="bookreader">
		<link rel="stylesheet" href="css/style.css">
		<script src="script/vue.min.js"></script>
		<title><?=$title?></title>
	</head>
	<body>
		<div id="menu">
			<div class="wrap">
				@include('menu')
			</div>
		</div>
		<div class="wrap">
			@section('header')
				<h1>default content section header</h1>
			@show
		</div>
		<div id="contain">
			<div class="wrap">
				<main>
					{{$none}}
					{{$wordToPut}}
					{{$user}}
					<div class="yieldTest">
						@yield('yieldTest', 'default content for yield')
					</div>
				</main>
			</div>
		</div>
		<footer>
			<div class="wrap">
				<div id="footer">
					@include('blocks.footer')
				</div>
			</div>
		</footer>
	</body>
</html>
