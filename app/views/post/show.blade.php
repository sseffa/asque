@extends('layout/layout')
@section('content')
{{ HTML::style("/assets/css/font-awesome.min.css") }}
{{ HTML::style("/summernote/css/summernote.css") }}
{{ HTML::script("/summernote/js/summernote.js") }}
<script type="text/javascript">
    // içerik editörü
    $(function () {
        $('.summernote').summernote({
            height: 200
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
                <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h2>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sollicitudin tortor eget metus aliquam interdum. Nullam nec nibh convallis, volutpat sem eget, laoreet ipsum. Morbi suscipit dui at viverra dignissim. Cras elementum justo ac semper tempor. Vestibulum vel nisl ut magna condimentum facilisis et ut sapien. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque mauris ante, vehicula ut mollis ac, dignissim in nulla. </p>

                <button class="btn btn-default btn-xs" type="button">C#</button>
                <button class="btn btn-default btn-xs" type="button">PHP</button>
                <button class="btn btn-default btn-xs" type="button">Java</button>

                <div class="pull-right "><i style="color: #c0392b !important;"></i>

                    <p><span class="time" datetime="">4 saat önce</span> | <a class="noa" target="_blank" href="#"> sseffa</a></p>
                </div>
                <div style="clear:both; margin-top: 20px;"></div>
                <div class="comment">
                    <p class="comment-user">Morbi suscipit dui at viverra dignissim. Cras elementum justo ac semper tempor. &nbsp;–&nbsp;<a class="noa" target="_blank" href="#"> sseffa</a><span class="relativetime-clean" title="2013-02-15 22:28:04Z">&nbsp;&nbsp;Feb 15 '13 at 22:28</span>
                    </p>

                    <p class="comment-user">Morbi suscipit dui at viverra dignissim. Cras elementum justo ac semper tempor. &nbsp;–&nbsp;<a class="noa" target="_blank" href="#"> sseffa</a><span class="relativetime-clean" title="2013-02-15 22:28:04Z">&nbsp;&nbsp;Feb 15 '13 at 22:28</span>
                    </p>

                    <p class="comment-user">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque mauris ante, vehicula ut mollis ac, dignissim in nulla. &nbsp;–&nbsp;<a class="noa" target="_blank" href="#"> sseffa</a><span class="relativetime-clean" title="2013-02-15 22:28:04Z">&nbsp;&nbsp;Feb 15 '13 at 22:28</span>
                    </p>

                    <p class="comment-user">Morbi suscipit dui at viverra dignissim. Cras elementum justo ac semper tempor. &nbsp;–&nbsp;<a class="noa" target="_blank" href="#"> sseffa</a><span class="relativetime-clean" title="2013-02-15 22:28:04Z">&nbsp;&nbsp;Feb 15 '13 at 22:28</span>
                    </p>

                    <p class="comment-user">Morbi suscipit dui at viverra dignissim. Cras elementum justo ac semper tempor. &nbsp;–&nbsp;<a class="noa" target="_blank" href="#"> sseffa</a><span class="relativetime-clean" title="2013-02-15 22:28:04Z">&nbsp;&nbsp;Feb 15 '13 at 22:28</span>
                    </p>

                    <p class="comment-user">Morbi suscipit dui at viverra dignissim. Cras elementum justo ac semper tempor. &nbsp;–&nbsp;<a class="noa" target="_blank" href="#"> sseffa</a><span class="relativetime-clean" title="2013-02-15 22:28:04Z">&nbsp;&nbsp;Feb 15 '13 at 22:28</span>
                    </p>
                </div>
                <a href="#">Yorum Yaz</a>

                <div style="clear:both; margin-top: 100px;"></div>
            </div>

            <div class="post-user">
                <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h2>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sollicitudin tortor eget metus aliquam interdum. Nullam nec nibh convallis, volutpat sem eget, laoreet ipsum. Morbi suscipit dui at viverra dignissim. Cras elementum justo ac semper tempor. Vestibulum vel nisl ut magna condimentum facilisis et ut sapien. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque mauris ante, vehicula ut mollis ac, dignissim in nulla. </p>

                <button class="btn btn-default btn-xs" type="button">C#</button>
                <button class="btn btn-default btn-xs" type="button">PHP</button>
                <button class="btn btn-default btn-xs" type="button">Java</button>

                <div class="pull-right "><i style="color: #c0392b !important;"></i>

                    <p><span class="time" datetime="">2 saat önce</span> | <a class="noa" target="_blank" href="#"> sseffa</a></p>
                </div>
                <div style="clear:both; margin-top: 20px;"></div>
                <div class="comment">
                    <p class="comment-user">Morbi suscipit dui at viverra dignissim. Cras elementum justo ac semper tempor. &nbsp;–&nbsp;<a class="noa" target="_blank" href="#"> sseffa</a><span class="relativetime-clean" title="2013-02-15 22:28:04Z">&nbsp;&nbsp;Feb 15 '13 at 22:28</span>
                    </p>

                    <p class="comment-user">Morbi suscipit dui at viverra dignissim. Cras elementum justo ac semper tempor. &nbsp;–&nbsp;<a class="noa" target="_blank" href="#"> sseffa</a><span class="relativetime-clean" title="2013-02-15 22:28:04Z">&nbsp;&nbsp;Feb 15 '13 at 22:28</span>
                    </p>

                    <p class="comment-user">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque mauris ante, vehicula ut mollis ac, dignissim in nulla. &nbsp;–&nbsp;<a class="noa" target="_blank" href="#"> sseffa</a><span class="relativetime-clean" title="2013-02-15 22:28:04Z">&nbsp;&nbsp;Feb 15 '13 at 22:28</span>
                    </p>

                    <p class="comment-user">Morbi suscipit dui at viverra dignissim. Cras elementum justo ac semper tempor. &nbsp;–&nbsp;<a class="noa" target="_blank" href="#"> sseffa</a><span class="relativetime-clean" title="2013-02-15 22:28:04Z">&nbsp;&nbsp;Feb 15 '13 at 22:28</span>
                    </p>

                    <p class="comment-user">Morbi suscipit dui at viverra dignissim. Cras elementum justo ac semper tempor. &nbsp;–&nbsp;<a class="noa" target="_blank" href="#"> sseffa</a><span class="relativetime-clean" title="2013-02-15 22:28:04Z">&nbsp;&nbsp;Feb 15 '13 at 22:28</span>
                    </p>

                    <p class="comment-user">Morbi suscipit dui at viverra dignissim. Cras elementum justo ac semper tempor. &nbsp;–&nbsp;<a class="noa" target="_blank" href="#"> sseffa</a><span class="relativetime-clean" title="2013-02-15 22:28:04Z">&nbsp;&nbsp;Feb 15 '13 at 22:28</span>
                    </p>
                </div>
                <a href="#">Yorum Yaz</a>

                <div style="clear:both; margin-top: 100px;"></div>
            </div>
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