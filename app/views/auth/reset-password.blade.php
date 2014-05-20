@extends('layout/layout')
@section('content')
<div class="container">

    @include('layout/top')
    <div class="row">
        <div class="col-md-9">
            <h2>Şifre Sıfırlama</h2>
            {{ Form::open(array('url'=>'user/reset-password', 'class' => 'form-signup', 'id' => 'form-signin')) }}
            @if ($errors->count() > 0)  @foreach( $errors->all() as $message )
            <div class="alert alert-danger">
                <a class="close" data-dismiss="alert" href="#" aria-hidden="true">&times;</a>{{ $message }}
            </div>
            @endforeach
            @endif

            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                    {{ Form::password('password', array('class' => 'form-control','placeholder'=>'Password')) }}
                </div>
            </div>

            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                    {{ Form::password('confirm_password', array('class' => 'form-control','placeholder'=>'Confirm Password')) }}
                </div>
            </div>

            {{ Form::hidden('id', $id) }}
            {{ Form::hidden('code', $code) }}

            {{ Form::submit('Save', array('class' => 'btn btn-sm btn-primary btn-block', 'role'=>'button')) }}
            {{ Form::close() }}
        </div>
        @include('layout/sidebar')
    </div>
    <!-- /.row -->
</div>
<!-- /.container -->
@stop