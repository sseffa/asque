<div class="col-xs-6 col-md-4">
    <h2>Kayıt Ol</h2>
    <hr>
    {{ Form::open() }}

    <!-- Name -->
    <div class="control-group {{ $errors->has('name') ? 'has-error' : '' }}">
        <label class="control-label" for="first-name">Adınız Soyadınız</label>

        <div class="controls">
            {{ Form::text('name', null, array('class'=>'form-control', 'id' => 'name', 'placeholder'=>'Adınız Soyadınız', 'value'=>Input::old('name'))) }}
            @if ($errors->first('name'))
            <span class="help-block">{{ $errors->first('name') }}</span>
            @endif
        </div>
    </div>
    <br>

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
    <!-- Confirm Password -->
    <div class="control-group {{ $errors->has('confirm-password') ? 'has-error' : '' }}">
        <label class="control-label" for="confirm-password">Şifreniz (Tekrar)</label>

        <div class="controls">
            {{ Form::password('confirm_password', array('class'=>'form-control', 'id' => 'confirm_password', 'placeholder'=>'Şifreniz (Tekrar)', 'value'=>Input::old('confirm_password'))) }}
            @if ($errors->first('confirm-password'))
            <span class="help-block">{{ $errors->first('confirm-password') }}</span>
            @endif
        </div>
    </div>
    <br>
    <!-- Form actions -->
    {{ Form::submit('Kaydet', array('class' => 'btn btn-success')) }}
    {{ Form::close() }}
</div>