<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<title>Petch Studio - Laravel Framework</title>

		@include('includes.link')

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/ico"/>
        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}"/>
	</head>
	<body class="loader">
		<div id="loader">
			<div class="content">
				@include('includes.loader')
				<svg height="36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 246.688 134.625" style="enable-background:new 0 0 246.688 134.625;" xml:space="preserve">
					<g>
						<polygon style="fill:none;stroke:#777;stroke-width:12;stroke-miterlimit:10;" points="175.125,6.063 123.375,6.063 71.625,6.063 10.875,41.474 123.375,127.043 235.875,41.708"/>
						<polygon style="fill:none;stroke:#777;stroke-width:9;stroke-miterlimit:10;" points="166.564,22.563 123.375,22.563 80.186,22.563 42.704,43.717 123.375,104.245 204.046,43.321 	"/>
					</g>
				</svg>
			</div>
		</div>
		
		<div id="wraper" class="fade">
			@yield('container')
		</div>
		
		@include('includes.script')
		@include('includes.modal')
	</body>
</html>