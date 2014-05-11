@extends('layout/layout')
@section('content')
<div class="container">

    @include('layout/top')
    <div class="row">
        <div class="col-md-9">
            <h2>Hakkımızda</h2>
            <p>Asque uygulaması Ask Question kelimelerinden türetilmiştir.</p>
            <p>En büyük amacı sorulan sorulara en kolay şekilde cevap bulmaktır.</p>
            <br>
            <h4>En büyük özellikleri</h4>
            <ul>
                <li>Kolay kullanımı</li>
                <li>Üye Sistemi</li>
                <li>Eski sorulara çabuk ulaşım</li>
                <li>Doğru cevaplara en hızlı şekilde ulaşma</li>
            </ul>
        </div>
        @include('layout/sidebar')
    </div>
    <!-- /.row -->
</div>
<!-- /.container -->
@stop