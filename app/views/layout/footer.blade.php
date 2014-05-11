<div id="footer">
    <div class="bottom-menu bottom-menu-inverse">
        <div class="container">
            <div class="row">
                {{ Form::open(array('action' => 'MaillistController@postMaillist', 'id'=>'newsletterForm', 'novalidate'=>'novalidate')) }}

                    <h4 style="font-weight:100; margin-top: 30px;" class="col-md-6 col-md-push-4 bottom-mail-heading"><b><i>Mail Listesine Kaydolun!</i></b></h4>

                    <div class="clearfix"></div>

                    <div class="col-md-5 col-md-push-3">
                        <input type="text" style="border:none !important;" value="" placeholder="E-posta Adresiniz" class="form-control bottom-mail" name="email">
                    </div>

                    <div class="col-md-3 col-md-push-3">
                        <div class="controls">
                            <div class="col-md-9">
                                <button style="border:none !important;height:50px;" class="btn btn-primary btn-lg " href="#fakelink" id="singlebutton">Kaydet</button>
                            </div>
                        </div>
                    </div>
                {{ Form::close() }}
            </div>
            <div class="row">

                <div style="margin-top:50px; margin-bottom:30px;" class="col-md-9 col-md-push-3">
                    <ul class="bottom-links bottom-menu">
                        <li><a href="{{ route('dashboard') }}">Asque</a></li>

                        <li class="dropdown">
                            {{ link_to_route("dashboard", "Sorular") }}
                        </li>
                        <li>
                            {{ link_to_route("tag.all", "Etiketler") }}
                        </li>
                        <li>
                            {{ link_to_route("user.all", "Üyeler") }}
                        </li>
                        <li>
                            {{ link_to_route("rss", "RSS") }}
                        </li>
                        <li>
                            {{ link_to_route("about", "Hakkında") }}
                        </li>
                        <li>
                            {{ link_to_route("faq", "SSS") }}
                        </li>
                        <li>
                            {{ link_to_route("help", "Yardım") }}
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>