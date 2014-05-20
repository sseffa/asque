@extends('layout/layout')
@section('content')
<script type="text/javascript">
    $(document).ready(function () {
        $('#notification').show().delay(4000).fadeOut(700);
    });
</script>
<div class="container">
    {{ Notification::showAll() }}
    @include('layout/top')
    <div class="row">

        @if($auth == "login")
        <div class="pull-right "><i style="color: #c0392b !important;" class="fa fa-user"></i>
            {{ link_to_route('user.edit', 'Profili Düzenle') }}
        </div>
        @endif

        <h2>{{ $user->name }}</h2>
        <hr>
        <div class="col-md-2">
            <h4>Gravatar</h4>
            <img src="{{ gravatarUrl($user->email) }}" alt="{{ $user->email }}"/>
        </div>
        <div class="col-md-4">
            <h4>Bilgiler</h4>
            <table class="table table-striped">
                <tbody>
                <tr>
                    <td><strong>Web Site</strong></td>
                    <td>{{ $user->web_site_url }}</td>
                </tr>
                <tr>
                    <td><strong>E-posta</strong></td>
                    <td>{{ $user->email }}</td>
                </tr>
                <tr>
                    <td><strong>Kullanıcı Adı</strong></td>
                    <td>{{ $user->username }}</td>
                </tr>
                <tr>
                    <td><strong>Yaş</strong></td>
                    <td>{{ $user->age }}</td>
                </tr>
                <tr>
                    <td><strong>Bulunduğunuz Yer</strong></td>
                    <td>{{ $user->location }}</td>
                </tr>
                <tr>
                    <td><strong>Profil Görüntüleme</strong></td>
                    <td>{{ $user->view_count }}</td>
                </tr>
                <tr>
                    <td><strong>Kayıt Tarihi</strong></td>
                    <td>{{ $user->created_at }}</td>
                </tr>
                <tr>
                    <td><strong>Son Giriş Tarihi</strong></td>
                    <td>{{ $user->last_login }}</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-6">
           <h4>Biyografi</h4>
            <p>{{ $user->biography }}</p>
        </div>
    </div>
    <!-- /.row -->
</div>
<!-- /.container -->
@stop