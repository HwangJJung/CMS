@extends(Config::get('core.default'))

@section('title')
showpieces
@stop

@section('top')

@stop

@section('content')
@include('sections.showpieces')
{!! $links !!}
@stop

@section('bottom')
@auth('blog')
    @include('posts.deletes')
@endauth
@stop
