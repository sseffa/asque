<div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a href="{{ route('dashboard') }}" class="navbar-brand">Asque&nbsp;&nbsp;&nbsp;{Ask Question}</a>
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
            <ul class="nav navbar-nav">
                <li @if(isset($active) && $active=="question") class="active" @endif>
                    {{ link_to_route("dashboard", "Sorular") }}
                </li>
                <li @if(isset($active) && $active=="tag") class="active" @endif>
                    {{ link_to_route("tag.all", "Etiketler") }}
                </li>
                <li @if(isset($active) && $active=="user") class="active" @endif>
                    {{ link_to_route("user.all", "Üyeler") }}
                </li>
                <li>
                    {{ link_to_route("rss", "RSS") }}
                </li>
                <li @if(isset($active) && $active=="about") class="active" @endif>
                    {{ link_to_route("about", "Hakkında") }}
                </li>
                <li @if(isset($active) && $active=="faq") class="active" @endif>
                    {{ link_to_route("faq", "SSS") }}
                </li>
                <li @if(isset($active) && $active=="help") class="active" @endif>
                    {{ link_to_route("help", "Yardım") }}
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @if (!Sentry::check())
                <li>{{ link_to_route('user.register', 'Kayıt Ol') }}</li>
                <li>{{ link_to_route('user.login', 'Oturum Aç') }}</li>
                @else
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes">{{ Sentry::getUser()->name }} <span class="caret"></span></a>
                    <ul class="dropdown-menu" aria-labelledby="themes">
                        <li>{{ link_to_route('user.profile', 'Profil') }}</li>
                        <li class="divider"></li>
                        <li>{{ link_to_route('user.logout', 'Çıkış') }}</li>
                    </ul>
                </li>
                @endif
            </ul>
        </div>
    </div>
</div>
