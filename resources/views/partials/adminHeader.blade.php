<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="{{ Config::get('cms.description') }}">
<meta name="author" content="{{ Config::get('cms.author') }}">

{!! HTML::style('//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css') !!}
{!! HTML::style('//cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css') !!}
{{--<link href='assets/css/main.css' rel='stylesheet' data-skrollr-stylesheet>--}}
{!! Asset::styles('admin') !!}
<link href='http://fonts.googleapis.com/css?family=Lato:400,900,300,700' rel='stylesheet'>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,400italic,700italic' rel='stylesheet'>

<![endif]-->
@section('css')
    @show

<!--[if lt IE 9]>
    {!! HTML::script('//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js') !!}
    {!! HTML::script('//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js') !!}
    <![endif]-->

    {{--<link rel="shortcut icon" href="{!! asset('favicon.ico') !!}">--}}
