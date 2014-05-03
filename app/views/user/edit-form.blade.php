{{ HTML::style('datepicker/css/datepicker.css') }}
{{ HTML::script('datepicker/js/bootstrap-datepicker.js') }}
<script type="text/javascript">
    $(document).ready(function () {
        $('#birthday').datepicker({
            format: "yyyy-mm-dd",
            todayBtn: "linked",
            orientation: "top auto"
        });
    });
</script>
<div class="col-xs-6 col-md-4">
    <h2>Profili Düzenle</h2>
    <hr>
    {{ Form::open(array('action' => 'UserController@update')) }}

    <!-- Username -->
    <div class="control-group {{ $errors->has('username') ? 'has-error' : '' }}">
        <label class="control-label" for="username">Kullanıcı Adınız</label>

        <div class="controls">
            {{ Form::text('username', $user->username, array('class'=>'form-control', 'id' => 'username', 'placeholder'=>'Kullanıcı Adınız', 'value'=>Input::old('username'))) }}
            @if ($errors->first('username'))
            <span class="help-block">{{ $errors->first('username') }}</span>
            @endif
        </div>
    </div>
    <br>

    <!-- Name -->
    <div class="control-group {{ $errors->has('name') ? 'has-error' : '' }}">
        <label class="control-label" for="first-name">Adınız Soyadınız</label>

        <div class="controls">
            {{ Form::text('name', $user->name, array('class'=>'form-control', 'id' => 'name', 'placeholder'=>'Adınız Soyadınız', 'value'=>Input::old('name'))) }}
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
            {{ Form::text('email', $user->email, array('class'=>'form-control', 'id' => 'email', 'placeholder'=>'E-posta Adresiniz', 'value'=>Input::old('email'))) }}
            @if ($errors->first('email'))
            <span class="help-block">{{ $errors->first('email') }}</span>
            @endif
        </div>
    </div>
    <br>

    <!-- Birthday -->
    <div class="control-group {{ $errors->has('birthday') ? 'has-error' : '' }}">
        <label class="control-label" for="birthday">Doğum Tarihiniz</label>

        <div class="controls">
            {{ Form::text('birthday', explode(' ', $user->birthday)[0], array('class'=>'form-control', 'id' => 'birthday', 'placeholder'=>'Doğum Tarihiniz', 'value'=>Input::old('birthday'))) }}
            @if ($errors->first('birthday'))
            <span class="help-block">{{ $errors->first('birthday') }}</span>
            @endif
        </div>
    </div>
    <br>

    <!-- Web Site -->
    <div class="control-group {{ $errors->has('web_site_url') ? 'has-error' : '' }}">
        <label class="control-label" for="web_site_url">Web Siteniz</label>

        <div class="controls">
            {{ Form::text('web_site_url', $user->web_site_url, array('class'=>'form-control', 'id' => 'web_site_url', 'placeholder'=>'Web Siteniz', 'value'=>Input::old('web_site_url'))) }}
            @if ($errors->first('web_site_url'))
            <span class="help-block">{{ $errors->first('web_site_url') }}</span>
            @endif
        </div>
    </div>
    <br>

    <!-- Location -->
    <div class="control-group {{ $errors->has('location') ? 'has-error' : '' }}">
        <label class="control-label" for="location">Bulunduğunuz Yer</label>

        <div class="controls">
            {{ Form::text('location', $user->location, array('class'=>'form-control', 'id' => 'location', 'placeholder'=>'Bulunduğunuz Yer', 'value'=>Input::old('location'))) }}
            @if ($errors->first('location'))
            <span class="help-block">{{ $errors->first('location') }}</span>
            @endif
        </div>
    </div>
    <br>

    <!-- Bio -->
    <div class="control-group {{ $errors->has('biography') ? 'has-error' : '' }}">
        <label class="control-label" for="email">Biyografiniz</label>

        <div class="controls">
            {{ Form::textarea('biography', $user->biography, array('class'=>'form-control', 'id' => 'biography', 'placeholder'=>'Biyografiniz', 'value'=>Input::old('biography'))) }}
            @if ($errors->first('biography'))
            <span class="help-block">{{ $errors->first('biography') }}</span>
            @endif
        </div>
    </div>
    <br>

    <!-- Form actions -->
    {{ Form::submit('Kaydet', array('class' => 'btn btn-success')) }}
    {{ Form::close() }}
</div>