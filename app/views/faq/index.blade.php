@extends('layout/layout')
@section('content')
<div class="container">
    @include('layout/top')
    <div class="row">
        <div class="col-md-9">
            <h2>Sıkça Sorulan Sorular</h2>
            <hr>
            <h4>Sisteme üyelik ücretli midir?</h4>

            <p>Hayır, sistemi tamamen ücretsiz olarak kullanabilirsiniz :)</p>
            <hr>
            <h4>Nasıl soru sorabilirim?</h4>

            <p>Soru sorabilmek için öncelikle sisteme üye olmanız gerekmektedir. Sağ üstte yer alan Kayıt Ol butonuna
                tıklayarak açılan sayfadan bilgilerinizi girip sisteme üye olduktan sonra oturum açıp soru
                sorabilirsiniz</p>
            <hr>
            <h4>Sorduğum soruya verilen doğru cevabı nasıl işaretlerim?</h4>

            <p>Sorunuza verilen cevapların üstünde "Çözüm olarak işaretle" linki otomatik olarak oluşmaktadır. Bu linke
                tıklayarak doğru cevabı işaretleyip, sizden sonra aynı sorun ile karşılaşanların direk cevaba ulaşmasını
                sağlayabilirsiniz.</p>
            <hr>
        </div>
        @include('layout/sidebar')
    </div>
    <!-- /.row -->
</div>
<!-- /.container -->
@stop