<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>delicacy_mobile</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/m.css') }}" rel="stylesheet">
</head>
<body>
<div id="app" class="wrap">

    <router-view></router-view>
    {{--组件封装--}}
    <p_tab></p_tab>

</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/responsive.js') }}"></script>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/slider.js')}}"></script>

</body>
</html>
