<!DOCTYPE html>
<html lang="en">

<head>
		<meta charset="UTF-8">
		<title>Ranprajum</title>
		<meta content="width=device-width, initial-scale=1.0"
				name="viewport">
		<meta content="ie=edge"
				http-equiv="X-UA-Compatible">
		<meta content="{{ csrf_token() }}"
				name="csrf-token">
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"
				name="viewport">
		<meta content="{{ URL::to('/') }}"
				name="author">
		<link href="{{ asset('assets/images/favicon.ico') }}"
				rel="shortcut icon">
		<meta content
				name="description">
		<link href="{{ asset('assets/common/vali-theme/css/main.min.css') }}"
				rel="stylesheet"
				type="text/css">
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- Font-icon css-->
		<link href="{{ asset('assets/plugins/node_modules/bootstrap-icons/font/bootstrap-icons.css') }}"
				rel="stylesheet"
				type="text/css">
		<link href="{{ asset('assets/plugins/node_modules/@fortawesome/fontawesome-free/css/all.min.css') }}"
				rel="stylesheet"
				type="text/css">
		<link href="{{ asset('assets/plugins/bootstrap-fileinput/css/fileinput.min.css') }}"
				rel="stylesheet"
				type="text/css">
		@if (isset($stylesheets))
				@foreach ($stylesheets as $stylesheet)
						<link href="{{ $stylesheet }}"
								rel="stylesheet">
				@endforeach
		@endif

		@yield('stylesheet-content')

		<link href="{{ asset('assets/common/css/backoffice.style.css') }}"
				rel="stylesheet"
				type="text/css">
</head>

<body class="app sidebar-mini">

		@include('layouts.admin.header')

		<main class="app-content">
				<div class="app-title">
						<div>
								<h1>{!! $body['app_title']['h1'] ?? '' !!}</h1>
								<p>{!! $body['app_title']['p'] ?? '' !!}</p>
						</div>
				</div>
				@yield('app-content')
		</main>

		{{-- Essential javascripts for application to work --}}
		<script src="{{ asset('assets/plugins/node_modules/jquery/dist/jquery.min.js') }}"></script>
		<script src="{{ asset('assets/common/vali-theme/js/popper.min.js') }}"></script>
		<script src="{{ asset('assets/common/vali-theme/js/bootstrap.min.js') }}"></script>


		{{-- krejee bootstrap-fileinput --}}
		<script src="{{ asset('assets/plugins/bootstrap-fileinput/js/plugins/purify.min.js') }}"
				type="text/javascript"></script>
		<script src="{{ asset('assets/plugins/bootstrap-fileinput/js/plugins/sortable.min.js') }}"
				type="text/javascript"></script>
		<script src="{{ asset('assets/plugins/bootstrap-fileinput/js/plugins/piexif.min.js') }}"
				type="text/javascript"></script>
		<script src="{{ asset('assets/plugins/bootstrap-fileinput/js/fileinput.min.js') }}"></script>
		<script src="{{ asset('assets/plugins/bootstrap-fileinput/js/locales/th.js') }}"></script>

		<script src="{{ asset('assets/common/vali-theme/js/main.min.js') }}"></script>

		@if (isset($scripts))
				@foreach ($scripts as $script)
						@if (is_array($script))
								<script {{ $script['defer'] }}
										src="{{ $script['link'] }}"
										type="text/javascript"></script>
						@else
								<script src="{{ $script }}"
										type="text/javascript"></script>
						@endif
				@endforeach
		@endif
		@yield('script-content')
		<script src="{{ asset('assets/common/js/backoffice.script.js') }}"></script>
</body>

</html>
