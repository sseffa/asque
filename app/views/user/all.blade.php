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
        <div class="col-md-12">
            @foreach($users as $user)
            <div style="height: 100px;" class="col-md-3">
                <a class="btn btn-default btn-xs" href="#">{{ $user->username }}</a>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            @endforeach
        </div>
        <div class="col-md-9 col-md-push-3">
            <ul class="pagination">
                {{ $users->links() }}
            </ul>
        </div>
    </div>
    <!-- /.row -->
</div>
<!-- /.container -->
@stop