<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="{{ asset('../resources/css/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('../resources/css/style.css') }}"> 

<link href="{{ asset('../resources/css/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
<script src="{{asset('/js/vendor/jquery-2.2.4.min.js ') }}"></script>




<title>@yield('title')</title>
</head>
<body>
<div class="main">
  @include('../layouts/header')  {{-- Include header file --}} 
  <div class="main_content">
    @yield("middle_content")
  </div>
  @include('../layouts/footer') {{-- Include footer file --}}  
</div>
</body>
</html>

