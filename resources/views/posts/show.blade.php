@extends(Config::get('core.default'))

@section('title')
{{ $post->title }}
@stop

@section('top')

    @auth('blog')
    <div class="well clearfix">
        <div class="hidden-xs">
            <div class="col-xs-6">
                <p>
                    <strong>Post Owner:</strong> {!! $post->owner !!}
                </p>
                <a class="btn btn-info" href="{!! URL::route('blog.posts.edit', array('posts' => $post->id)) !!}"><i class="fa fa-pencil-square-o"></i> Edit Post</a> <a class="btn btn-danger" href="#delete_post" data-toggle="modal" data-target="#delete_post"><i class="fa fa-times"></i> Delete Post</a>
            </div>
            <div class="col-xs-6">
                <div class="pull-right">
                    <p>
                        <em>Post Created: {!! HTML::ago($post->created_at) !!}</em>
                    </p>
                    <p>
                        <em>Last Updated: {!! HTML::ago($post->updated_at) !!}</em>
                    </p>
                </div>
            </div>
        </div>
        <div class="visible-xs">
            <div class="col-xs-12">
                <p>
                    <strong>Post Owner:</strong> {!! $post->owner !!}
                </p>
                <p>
                    <strong>Post Created:</strong> {!! HTML::ago($post->created_at) !!}
                </p>
                <p>
                    <strong>Last Updated:</strong> {!! HTML::ago($post->updated_at) !!}
                </p>
                <a class="btn btn-info" href="{!! URL::route('blog.posts.edit', array('posts' => $post->id)) !!}"><i class="fa fa-pencil-square-o"></i> Edit Post</a> <a class="btn btn-danger" href="#delete_post" data-toggle="modal" data-target="#delete_post"><i class="fa fa-times"></i> Delete Post</a>
            </div>
        </div>
    </div>
    <hr>
    @endauth

@stop

@section('content')

@include('sections.post')


{{--<div class="row">--}}
    {{--<div class="hidden-xs">--}}
        {{--<div class="col-md-8 col-xs-6">--}}
            {{--<p class="lead">{!! $post->summary !!}</p>--}}
        {{--</div>--}}
        {{--<div class="col-md-4 col-xs-6">--}}
            {{--<div class="pull-right">--}}
                {{--<p>Author: {!! $post->author !!}</p>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="visible-xs">--}}
        {{--<div class="col-xs-12">--}}
            {{--<p class="lead">{!! $post->summary !!}</p>--}}
            {{--<p>Author: {!! $post->author !!}</p>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--<br>--}}

{{--{!! $post->content !!}--}}
{{--<br><hr>--}}


@stop

@section('bottom')
@auth('blog')
@include('posts.delete')
@endauth
@auth('mod')
<div id="edit_comment" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Edit Comment</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    {!! Form::open(array('id' => 'edit_commentform', 'method' => 'PATCH', 'class' => 'form-vertical', 'data-pk' => '0')) !!}
                        <input id="verion" name="version" value="1" type="hidden">
                        <div class="form-group">
                            <div class="col-xs-12">
                                <textarea id="edit_body" name="edit_body" class="form-control comment-box" placeholder="Type a comment..." rows="3"></textarea>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
            <div class="modal-footer">
                <button id="edit_comment_cancel" type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button id="edit_comment_ok" type="button" class="btn btn-primary">OK</button>
            </div>
        </div>
    </div>
</div>
@endauth
@stop

@section('js')
{!! HTML::script('//cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js') !!}
<script>
var cmsCommentInterval = {!! Config::get('cms.commentfetch') !!};
var cmsCommentTime = {!! Config::get('cms.commenttrans') !!};
</script>
{!! Asset::scripts('comment') !!}
@stop
