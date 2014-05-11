@extends('layout/layout')
@section('content')
{{ HTML::script('momentjs/min/moment-with-langs.min.js') }}
<script type="text/javascript">
    $(document).ready(function () {
        $('#notification').show().delay(4000).fadeOut(700);
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
<div class="container">
    {{ Notification::showAll() }}
    @include('layout/top')
    <div class="row">
        <div class="col-md-9">

            <div class="clearfix"></div>
            @foreach($posts as $post)
            <div style="color:#c0392b !important;" class="col-xs-1 col-sm-1 col-md-1 col-lg-1 post_date">
                <a href="#" class="noa" target="_blank">
                    {{ $post->day }}
                    <div class="clearfix"></div>
                    {{ $post->month }}
                    <div class="clearfix"></div>
                    {{ $post->year }}
                </a>
            </div>
            <blockquote style="border-color:#c0392b !important;" class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
                <div class="col-md-12 post_header">
                    <div class="pull-left post_title">
                        <a class="noa" href="{{ URL::route('post.show', array('id'=>$post->id, 'slug'=>$post->slug)) }}">
                            {{ $post->title }}
                        </a>
                    </div>
                </div>
                <hr>
                <div class="clearfix"></div>
                <div class="col-xs-12">
                    @foreach($post->tags as $tag)
                    <a class="btn btn-default btn-xs" href="{{ URL::route('tag.show', array('slug'=>$tag->slug)) }}">{{ $tag->name }}</a>
                    @endforeach
                </div>
                <hr>
                <div class="col-xs-3">
                    <p><b>{{ 12 }}</b> Votes</p>
                </div>
                <div class="col-xs-3">
                    <p><b>1</b> Answer</p>
                </div>
                <div class="col-xs-3">
                    <p><b>{{ $post->view_count }}</b> View</p>
                </div>
                <div class="pull-right "><i style="color: #c0392b !important;"></i>
                    <p><span class="time" datetime="{{ $post->created_at }}"></span> | <a class="noa" href="{{ URL::route('user.profile', array('id'=>$post->user->id)) }}"> {{ $post->user->username }}</a></p>
                </div>
            </blockquote>
            @endforeach

            <div class="col-md-9 col-md-push-3">
                <ul class="pagination">
                    {{ $posts->links() }}
                </ul>
            </div>
        </div>
        @include('layout/sidebar')
    </div>
    <!-- /.row -->

</div>
<!-- /.container -->
@stop