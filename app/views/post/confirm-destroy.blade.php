@extends('layout/layout')
@section('content')
<div class="container">

    @include('layout/top')
    <div style="min-height: 500px;" class="row">
        <div class="col-md-9">
            {{ Form::open( array( 'route' => array('post.delete', $post->id ) ) ) }}
            {{ Form::hidden( '_method', 'DELETE' ) }}
            <div class="alert alert-warning">
                <div class="pull-left"><b> Dikkat!</b> <b> {{{ $post->title }}} </b> başlıklı gönderiyi silmek istediğinizden emin misiniz?
                </div>
                <div class="pull-right">
                    {{ Form::submit( 'Evet', array( 'class' => 'btn btn-danger' ) ) }}
                    {{ link_to( URL::previous(), 'Hayır', array( 'class' => 'btn btn-primary' ) ) }}
                </div>
                <div class="clearfix"></div>
            </div>
            {{ Form::close() }}
        </div>
    </div>
    <!-- /.row -->
</div>
<!-- /.container -->
@stop