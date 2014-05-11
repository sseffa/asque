@extends('layout/layout')
@section('content')
<div class="container">
    @include('layout/top')
    <div class="row">
        <div class="col-md-9">
            <h2>Sonuçlar</h2>
            <hr>
            @foreach( array_slice($paginator->toArray()['data'], (($paginator->getCurrentPage()-1) * $paginator->getPerPage()), $paginator->getPerPage()) as $v )
            <div class="row">
                <div class="col-sm-12">
                    <a href="{{ url($v['url']) }}">
                        <h4>{{ $v['title'] }}</h4>
                    </a>
                    <hr>
                </div>
                <div class="col-sm-12">
                    <p>{{{ mb_substr(strip_tags($v['body']),0,200) }}}</p>
                    <br>
                    <a href="{{ url($v['url']) }}">{{ url($v['url']) }}</a>
                </div>
            </div>
            <hr>
            @endforeach
            <div class="col-md-9 col-md-push-3">
                <ul class="pagination">
                    {{ $paginator->links() }}
                </ul>
            </div>
        </div>
        @include('layout/sidebar')
    </div>
    <!-- /.row -->
</div>
<!-- /.container -->
@stop