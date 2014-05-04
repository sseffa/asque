@extends('layout/layout')
@section('content')
{{ HTML::style("/assets/css/font-awesome.min.css") }}
{{ HTML::style("/summernote/css/summernote.css") }}
{{ HTML::script("/summernote/js/summernote.js") }}

{{ HTML::style('tagsinput/css/bootstrap-tagsinput.css') }}
{{ HTML::script('tagsinput/js/bootstrap-tagsinput.js') }}
<script type="text/javascript">

    // içerik editörü
    $(function () {
        $('.summernote').summernote({
            height: 200
        });

        /*
        $('form').on('submit', function (e) {
            alert($('.summernote').code());
        });
        */
    });

    // notification
    $(document).ready(function () {
        $('#notification').show().delay(4000).fadeOut(700);
    });

     // etiketleme
     $(document).ready(function () {

        if ($('#tag').length != 0) {
            var elt = $('#tag');
            elt.tagsinput();
        }
    });
</script>

<div style="margin-bottom: 25px;" class="container">
    {{ Notification::showAll() }}
    @include('layout/top')
    <div class="row">
        <h2>Yeni Soru</h2>
        {{ Form::open() }}

        <!-- Title -->
        <div class="control-group {{ $errors->has('title') ? 'has-error' : '' }}">
            <label class="control-label" for="first-name">Başlık</label>

            <div class="controls">
                {{ Form::text('title', null, array('class'=>'form-control', 'id' => 'title', 'placeholder'=>'Başlık', 'value'=>Input::old('title'))) }}
                @if ($errors->first('title'))
                <span class="help-block">{{ $errors->first('title') }}</span>
                @endif
            </div>
        </div>
        <br>

        <!-- Soru -->
        <div class="control-group {{ $errors->has('body') ? 'has-error' : '' }}">
            <label class="control-label" for="email">Soru</label>

            <div class="controls">
                {{ Form::textarea('body', null, array('class'=>'summernote', 'id' => 'body', 'placeholder'=>'Soru', 'value'=>Input::old('body'))) }}
                @if ($errors->first('body'))
                <span class="help-block">{{ $errors->first('body') }}</span>
                @endif
            </div>
        </div>
        <br>

        <!-- Tag -->
        <div class="control-group {{ $errors->has('tag') ? 'has-error' : '' }}">
            <label class="control-label" for="title">Etiket</label>

            <div class="controls">
                {{ Form::text('tag', null, array('class'=>'form-control', 'id' => 'tag', 'placeholder'=>'Tag', 'value'=>Input::old('tag'))) }}
                @if ($errors->first('tag'))
                <span class="help-block">{{ $errors->first('tag') }}</span>
                @endif
            </div>
        </div>
        <br>

        <br>
        <!-- Form actions -->
        {{ Form::submit('Kaydet', array('class' => 'btn btn-success')) }}
        {{ Form::close() }}
    </div>
    <!-- /.row -->
</div>
<!-- /.container -->
@stop