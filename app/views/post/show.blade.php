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

        // comment
        $('.add-comment').click(function (event) {

            event.preventDefault();
            event.stopPropagation();

            $('.comment-form').css('display', 'none');

            var id = $(this).attr('data-id');
            $('.comment-form-' + id).css('display', 'inline');
        });

        $('.hidden-comment-form').click(function (event) {

            event.preventDefault();
            event.stopPropagation();

            $('.comment-form').css('display', 'none');
        });

        // favorite
        $(".favorite").bind("click", function (e) {
            var id = $(this).attr('id');
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: "{{ url('/question/" + id + "/toggle-favorite/') }}",
                success: function (response) {

                    window.location = document.URL;
                },
                error: function () {
                    alert("error");
                }
            })
        });

        // accepted answer
        $(".accepted_answer").bind("click", function (e) {
            var parentId = $(this).attr('data-parent-id');
            var id = $(this).attr('data-id');
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: "{{ url('/question/" + parentId + "/toggle-accepted-answer/') }}",
                data: {'accepted_answer_id': id},
                success: function (response) {

                    if (response['result'] == 'success') {

                        $(".accepted").empty();
                        $(".accepted_" + id).append("<img src='{{ url('assets/images/tick-big.png') }}'/>");
                    }
                },
                error: function () {
                    alert("error");
                }
            })
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
                <div class="pull-right">
                    <a href="#" id="{{ $post->id }}" class="favorite">
                        <img id="favorite-image-{{ $post->id }}" src="{{url('/')}}/assets/images/{{ (false) ? 'unfavorite.png' : 'favorite.png'  }}"/>
                    </a>
                </div>
                <h2>{{ $post->title }}</h2>
                <hr>
                <p>{{ $post->body }}</p>

                @foreach($post->tags as $tag)
                <button class="btn btn-default btn-xs" type="button">{{ $tag->name }}</button>

                @endforeach

                <div class="pull-right "><i style="color: #c0392b !important;"></i>

                    <p><span class="time" datetime="{{ $post->created_at }}"></span> |
                        <a class="noa" href="{{ URL::route('user.profile', array('id'=>$post->user->id)) }}"> {{ $post->user->username }}</a>
                    </p>
                </div>
                <div style="clear:both; margin-top: 20px;"></div>
                <div class="comment">
                    @foreach($post->comments as $comment)
                    <p class="comment-user">{{ $comment->comment }} &nbsp;–&nbsp;<a class="noa" href="{{ URL::route('user.profile', array('id'=>$comment->user->id)) }}"> {{ $comment->user->username }}</a><span class="relativetime-clean">&nbsp;&nbsp;{{ $comment->created_at }}</span>
                    </p>
                    @endforeach
                </div>
                <a class="add-comment" data-id="{{ $post->id }}" href="">Yorum Yaz</a>

                <div style="display: none" class="comment-form comment-form-{{ $post->id }}" data-id="{{ $post->id }}">
                    <br>

                    <div class="pull-right">
                        <a class="hidden-comment-form" data-id="{{ $post->id }}" href="#">Gizle</a>

                    </div>
                    <br>
                    {{ Form::open(array('action' => 'CommentController@postComment')) }}

                    {{ Form::textarea('comment', null, array('class'=>'form-control', 'id' => 'commment', 'placeholder'=>'Yorum')) }}

                    <!-- Hidden Fields -->
                    {{ Form::hidden('post_id', $post->id) }}
                    {{ Form::hidden('user_id', ((Sentry::getUser()) ? Sentry::getUser()->id : null)) }}

                    <br>

                    <!-- Form actions -->
                    {{ Form::submit('Yorumu Gönder', array('class' => 'btn btn-success')) }}
                    {{ Form::close() }}
                </div>

                <div style="clear:both; margin-top: 100px;"></div>
            </div>

            @if($post->children)
            @foreach($post->children as $childPost)
            <div class="post-user">
                <hr>

                @if(Sentry::check())
                    @if(Sentry::getUser()->id == $post->user->id)
                    <div class="accepted accepted_{{ $childPost->id }}">
                        @if(($post->accepted_answer_id == $childPost->id) && ($post->accepted_answer_id))
                        <img src="{{ url('assets/images/tick-big.png') }}"/>
                        @else
                        @if(!($post->accepted_answer_id) && !($childPost->user->id == Sentry::getUser()->id))
                        <a class="accepted_answer" data-parent-id="{{ $post->id }}" data-id="{{ $childPost->id }}" href="">
                            <img src="{{ url('assets/images/tick-button-sm.png') }}"/>&nbsp;&nbsp;Çözüm olarak işaretle
                        </a>
                        @endif
                        @endif
                    </div>
                    @endif
                @endif


                <p>{{ $childPost->body }}</p>

                @foreach($childPost->tags as $tag)
                <button class="btn btn-default btn-xs" type="button">{{ $tag->name }}</button>

                @endforeach

                <div class="pull-right"><i style="color: #c0392b !important;"></i>

                    <p><span class="time" datetime="{{ $childPost->created_at }}"></span> |
                        <a class="noa" href="{{ URL::route('user.profile', array('id'=>$childPost->user->id)) }}"> {{ $childPost->user->username }}</a>
                    </p>
                </div>
                <div style="clear:both; margin-top: 20px;"></div>
                <div class="comment">
                    @foreach($childPost->comments as $comment)
                    <p class="comment-user">{{ $comment->comment }} &nbsp;–&nbsp;<a class="noa" href="{{ URL::route('user.profile', array('id'=>$comment->user->id)) }}"> {{ $comment->user->username }}</a><span class="relativetime-clean">&nbsp;&nbsp;{{ $comment->created_at }}</span>
                    </p>
                    @endforeach
                </div>
                <a class="add-comment" data-id="{{ $childPost->id }}" href="">Yorum Yaz</a>

                <div style="display: none" class="comment-form comment-form-{{ $childPost->id }}" data-id="{{ $childPost->id }}">
                    <br>

                    <div class="pull-right">
                        <a class="hidden-comment-form" data-id="{{ $childPost->id }}" href="#">Gizle</a>

                    </div>
                    <br>
                    {{ Form::open(array('action' => 'CommentController@postComment')) }}

                    {{ Form::textarea('comment', null, array('class'=>'form-control', 'id' => 'commment', 'placeholder'=>'Yorum')) }}

                    <!-- Hidden Fields -->
                    {{ Form::hidden('post_id', $post->id) }}
                    {{ Form::hidden('user_id', ((Sentry::getUser()) ? Sentry::getUser()->id : null)) }}

                    <br>

                    <!-- Form actions -->
                    {{ Form::submit('Yorumu Gönder', array('class' => 'btn btn-success')) }}
                    {{ Form::close() }}
                </div>

                <div style="clear:both; margin-top: 100px;"></div>
            </div>
            @endforeach
            @endif

            <h4>Senin Sorun</h4>
            <hr>
            {{ Form::open(array('action' => 'PostController@postAnswer')) }}

            <!-- Soru -->
            <div class="control-group {{ $errors->has('body') ? 'has-error' : '' }}">

                <div class="controls">
                    {{ Form::textarea('body', null, array('class'=>'summernote', 'id' => 'body', 'placeholder'=>'Soru', 'value'=>Input::old('body'))) }}
                    @if ($errors->first('body'))
                    <span class="help-block">{{ $errors->first('body') }}</span>
                    @endif
                </div>
            </div>

            <!-- Hidden Fields -->
            {{ Form::hidden('parent_id', $post->id) }}
            {{ Form::hidden('user_id', ((Sentry::getUser()) ? Sentry::getUser()->id : null)) }}
            {{ Form::hidden('post_type_id', 2) }}

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