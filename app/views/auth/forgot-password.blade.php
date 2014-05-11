@extends('layout/layout')
@section('content')
<div class="container">

    @include('layout/top')
    <div class="row">
        <div class="col-md-9">
            <div class="col-md-5">
                <h2>Şifremi Unuttum</h2>
                {{ Form::open(array('class' => 'form-signup', 'id' => 'form-signin')) }}

                @if ($errors->has('forgot-password'))
                <div class="alert alert-danger">
                    <a class="close" data-dismiss="alert" href="#" aria-hidden="true">&times;</a>{{ $errors->first('forgot-password', ':message') }}
                </div>
                @endif

                @if ($errors->has('email'))
                <div class="alert alert-danger">
                    <a class="close" data-dismiss="alert" href="#" aria-hidden="true">&times;</a>{{ $errors->first('email', ':message') }}
                </div>
                @endif

                <div class="form-group">
                    <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                            </span>
                        {{ Form::text('email', null,array('class' => 'form-control', 'placeholder'=>'E-posta Adresi', 'autofocus'=>'')) }}
                    </div>
                </div>

                {{ Form::submit('Gönder', array('class' => 'btn btn-sm btn-primary btn-block', 'role'=>'button')) }}
                {{ Form::close() }}
            </div>
        </div>
        @include('layout/sidebar')
    </div>
    <!-- /.row -->
</div>
<!-- /.container -->
@stop