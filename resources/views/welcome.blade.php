<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" value="{{ csrf_token() }}">
  <title>VE - @hasSection('page-title') @yield('page-title') @endif</title>
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
{{--  <link rel="stylesheet" href="{{asset('css/common.css?ver=').time()}}">--}}
  @stack('style')
  <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body @hasSection('custom-class') @yield('custom-class') @endif>
@yield('content')


<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
@stack('script')
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
