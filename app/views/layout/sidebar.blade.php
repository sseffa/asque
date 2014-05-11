<div style="margin-bottom: 50px;" class="col-md-3">
    <div class="sidebar-module sidebar-module-inset">
        <h4>En Yeni Sorular</h4>
        @foreach($posts as $post)
        <a href="{{ URL::route('post.show', array('id'=>$post->id, 'slug'=>$post->slug)) }}">{{ $post->title }}</a>
        <hr>
        @endforeach
    </div>
    <div class="sidebar-module">
        <h4>Arşiv</h4>
        <ol class="list-unstyled">
            @foreach($archives as $date => $posts)
            <li><a href="{{ URL::route('post.archive', array('date'=>$date)) }}#">{{ $date }}</a></li>
            @endforeach
        </ol>
    </div>
    <div class="sidebar-module">
        <h4>Etiketler</h4>
        @foreach($tags as $tag)
        <a class="btn btn-default btn-xs" href="{{ URL::route('tag.show', array('slug'=>$tag->slug)) }}">{{ $tag->name }}</a>
        @endforeach
    </div>
</div>
<!-- /.sidebar -->