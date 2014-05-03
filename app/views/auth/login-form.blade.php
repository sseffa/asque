<div class="col-xs-6 col-md-4">
    <h2>Oturum Aç</h2>
    <hr>
    {{ Form::open() }}

    @if ($errors->has('login'))
    <div class="alert alert-danger">
        <a class="close" data-dismiss="alert" href="#" aria-hidden="true">&times;</a>{{ $errors->first('login', ':message') }}
    </div>
    @endif

    <!-- Email -->
    <div class="control-group {{ $errors->has('email') ? 'has-error' : '' }}">
        <label class="control-label" for="email">E-posta Adresiniz</label>

        <div class="controls">
            {{ Form::text('email', null, array('class'=>'form-control', 'id' => 'email', 'placeholder'=>'E-posta Adresiniz', 'value'=>Input::old('email'))) }}
            @if ($errors->first('email'))
            <span class="help-block">{{ $errors->first('email') }}</span>
            @endif
        </div>
    </div>
    <br>
    <!-- Password -->
    <div class="control-group {{ $errors->has('password') ? 'has-error' : '' }}">
        <label class="control-label" for="password">Şifreniz</label>

        <div class="controls">
            {{ Form::password('password', array('class'=>'form-control', 'id' => 'password', 'placeholder'=>'Şifreniz', 'value'=>Input::old('password'))) }}
            @if ($errors->first('password'))
            <span class="help-block">{{ $errors->first('password') }}</span>
            @endif
        </div>
    </div>
    <br>


    <label style="text-align: left" class="checkbox">{{ Form::checkbox('rememberMe', 'rememberMe', true) }} Beni Hatırla</label>
    <br>
    <!-- Form actions -->
    {{ Form::submit('Giriş', array('class' => 'btn btn-success')) }}
    {{ Form::close() }}
</div>