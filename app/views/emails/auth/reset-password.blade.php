<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
</head>
<body>
<h2>Şifre Sıfırlama Servisi</h2>
<p>Şifrenizi sıfırlamak için <a href="{{ URL::to('user') }}/{{ $userId }}/reset/{{ urlencode($resetCode) }}">tıklayınız</a></p>
<p>Şifre sıfırlama adresi: <br /> {{ URL::to('admin') }}/{{ $userId }}/reset/{{ urlencode($resetCode) }}</p>
<p>Teşekkürler, <br />
    Asque Ekibi</p>
</body>
</html>
