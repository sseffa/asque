@extends('layout/layout')
@section('content')
{{ HTML::style("/assets/css/font-awesome.min.css") }}
{{ HTML::style("/summernote/css/summernote.css") }}
{{ HTML::script("/summernote/js/summernote.js") }}
{{ HTML::script('momentjs/min/moment-with-langs.min.js') }}
<script type="text/javascript">
    // içerik editörü
    $(function () {
        $('.summernote').summernote({
            height: 200
        });
    });

    moment().format();
    moment.lang('tr');
    jQuery(document).ready(function ($) {
        var now = moment();
        $('.time').each(function (i, e) {

            var time = moment($(e).attr('datetime'));
            $(e).text(time.from(now));

        });
    });
</script>
<style>
    .comment-user {

        border-bottom: 1px dashed #000000;
        padding: 5px 0 5px 0;
    }
</style>
<div style="margin-bottom: 25px;" class="container">
    @include('layout/top')
    <div class="row">
        <div class="col-md-9">
            <div class="post-user">
                <h2>{{ $post->title }}</h2>
                <hr>
                <p>{{ $post->body }}</p>

                @foreach($post->tags as $tag)
                <button class="btn btn-default btn-xs" type="button">{{ $tag->name }}</button>

                @endforeach

                <div class="pull-right "><i style="color: #c0392b !important;"></i>

                    <p><span class="time" datetime="{{ $post->created_at }}"></span> |
                        <a class="noa" target="_blank" href="#"> {{ $post->user->username }}</a></p>
                </div>
                <div style="clear:both; margin-top: 20px;"></div>
                <div class="comment">
                    @foreach($post->comments as $comment)
                    <p class="comment-user">{{ $comment->text }} &nbsp;–&nbsp;<a class="noa" target="_blank" href="#"> {{ $comment->user->username }}</a><span class="relativetime-clean">&nbsp;&nbsp;{{ $comment->created_at }}</span>
                    </p>
                    @endforeach
                </div>
                <a href="#">Yorum Yaz</a>

                <div style="clear:both; margin-top: 100px;"></div>
            </div>

            @if($post->children)
            @foreach($post->children as $post)
            <div class="post-user">
                <h2>{{ $post->title }}</h2>
                <hr>
                <p>{{ $post->body }}</p>

                @foreach($post->tags as $tag)
                <button class="btn btn-default btn-xs" type="button">{{ $tag->name }}</button>

                @endforeach

                <div class="pull-right "><i style="color: #c0392b !important;"></i>

                    <p><span class="time" datetime="{{ $post->created_at }}"></span> |
                        <a class="noa" target="_blank" href="#"> {{ $post->user->username }}</a></p>
                </div>
                <div style="clear:both; margin-top: 20px;"></div>
                <div class="comment">
                    @foreach($post->comments as $comment)
                    <p class="comment-user">{{ $comment->text }} &nbsp;–&nbsp;<a class="noa" target="_blank" href="#"> {{ $comment->user->username }}</a><span class="relativetime-clean">&nbsp;&nbsp;{{ $comment->created_at }}</span>
                    </p>
                    @endforeach
                </div>
                <a href="#">Yorum Yaz</a>

                <div style="clear:both; margin-top: 100px;"></div>
            </div>
            @endforeach
            @endif

            <h4>Senin Sorun</h4>
            <hr>
            {{ Form::open() }}

            <!-- Soru -->
            <div class="control-group {{ $errors->has('body') ? 'has-error' : '' }}">

                <div class="controls">
                    {{ Form::textarea('body', null, array('class'=>'summernote', 'id' => 'body', 'placeholder'=>'Soru', 'value'=>Input::old('body'))) }}
                    @if ($errors->first('body'))
                    <span class="help-block">{{ $errors->first('body') }}</span>
                    @endif
                </div>
            </div>
            <br>
            <br>
            <!-- Form actions -->
            {{ Form::submit('Kaydet', array('class' => 'btn btn-success')) }}
            {{ Form::close() }}
        </div>
        @include('layout/sidebar')
    </div>
    <!-- /.row -->
</div>
<!-- /.container -->
@stop