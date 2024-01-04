<!DOCTYPE html>
<html lang="en">
<head>
  <base href="./">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>{{ config('app.name', 'Laravel') }}</title>
  <meta name="theme-color" content="#ffffff">
  @vite('resources/sass/app.scss')
</head>

<body>
	
	@include('layouts.sidebar')

	<div class="wrapper d-flex flex-column min-vh-100 bg-light">
	    @include('layouts.header')

	    <div class="body flex-grow-1 px-3">
        <div class="container-fluid">
          @yield('content')
        </div>
	    </div>

	    @include('layouts.footer')
	</div>
	
	<script src="{{ asset('js/coreui.bundle.min.js') }}"></script>

</body>

</html>
