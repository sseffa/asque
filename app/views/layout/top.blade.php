<div class="blog-header">
    <div class="col-md-9">
        <div class="pull-left">
            {{ link_to_route("dashboard", "Sorular", array(), array("class"=>"btn btn-success btn-xs")) }}
            {{ link_to_route("tag.all", "Etiketler", array(), array("class"=>"btn btn-default btn-xs")) }}
            {{ link_to_route("user.all", "Üyeler", array(), array("class"=>"btn btn-info btn-xs")) }}
            &nbsp;&nbsp;
            {{ link_to_route("most.views", "Çok Görüntülenenler", array(), array("class"=>"btn btn-warning btn-xs")) }}
            {{ link_to_route("most.votes", "Çok Oylananlar", array(), array("class"=>"btn btn-warning btn-xs")) }}
            {{ link_to_route("most.favorites", "Çok Beğenilenler", array(), array("class"=>"btn btn-warning btn-xs")) }}
        </div>

        <div class="pull-right "><i style="color: #c0392b !important;"></i>
            {{ link_to_route("question.ask", "Soru Sor", array(), array("class"=>"btn btn-danger btn-xs")) }}
        </div>
    </div>
</div>
<br>
<br>
<br>