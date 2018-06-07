<!DOCTYPE html>
<html lang="pl">
	<head>
		<meta charset="utf8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=Edge, chrome=1" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta name="description" content="bookreader"/>
		<link rel="stylesheet" href="css/style.css"/>
		<script src="script/vue.min.js"></script>
		<title>{{$title}}</title>
	</head>
	<body>	
		<div id="header">
			<div class="wrap">
				@section('header')
					<h1>default content section header</h1>
				@show
			</div>
		</div>
		<div id="menu">
			<div class="wrap">
				@include('blocks.menu')
				@include('blocks.user')
				<div class="clear"></div>
			</div>
		</div>
		<div id="content">
			<div class="wrap">
				<main>
					@section('container')
					@show
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
