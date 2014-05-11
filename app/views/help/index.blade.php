@extends('layout/layout')
@section('content')
<div class="container">

    @include('layout/top')
    <div class="row">
        <div class="col-md-9">
            <h2>Yardım</h2>
            <p><b>Asque</b>, uygulaması ile sisteme üye olup istediğiniz alandaki sorularınızı alanında bilgili kullanıcılara sorabilirsiniz. Aldığınız doğru cevabı işaretleyerek, sizden sonra aynı sorunu yaşayan kullanıcının bu soruna en kolay şekilde ulaşmasına yardımcı olabilirsiniz.</p>
            <br>
            <br>
            <h4>Sistem o kadar kolay ve basit ki bu konuda Yardım içeriğine bile gerek duymuyoruz! ;)</h4>
        </div>
        @include('layout/sidebar')
    </div>
    <!-- /.row -->
</div>
<!-- /.container -->
@stop