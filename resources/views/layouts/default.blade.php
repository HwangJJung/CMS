<!DOCTYPE html>
<html lang="en-GB">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>{{ Config::get('core.name') }} - @section('title')
@show</title>
    {{--@if (Auth::check())--}}
        {{--@include('partials.adminHeader')--}}
    {{--@else--}}
        {{--@include('partials.header')--}}
    {{--@endif--}}
    @include('partials.header')
</head>
<body>
<div id="wrap">
@navigation
<main>
<div class="container">
@section('top')
@show
@include('partials.notifications')
@section('content')
@show
</main>
    {{--@if (Auth::check())--}}
        {{--@include('partials.adminFooter')--}}
    {{--@else--}}
        {{--@include('partials.footer')--}}
    {{--@endif--}}
    @include('partials.footer')

@section('bottom')
@show
</body>
</html>
