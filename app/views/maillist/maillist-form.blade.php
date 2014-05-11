<div class="col-xs-6 col-md-4">
    <h2>Mail Listesi</h2>
    <hr>
    {{ Form::open(array('action' => 'MaillistController@postMaillist')) }}

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
    <!-- Form actions -->
    {{ Form::submit('Kaydet', array('class' => 'btn btn-success')) }}
    {{ Form::close() }}
</div>