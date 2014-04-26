<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Asque</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{ HTML::style('themes/Darkly/bootstrap.css') }}
  </head>
  <body>
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a href="../" class="navbar-brand">Asque</a>
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes">Sorular <span class="caret"></span></a>
              <ul class="dropdown-menu" aria-labelledby="themes">
                <li><a href="">Genel</a></li>
                <li class="divider"></li>
                <li><a href="">C#</a></li>
                <li><a href="">PHP</a></li>
                <li><a href="">Java</a></li>
                <li><a href="">Javascript</a></li>
                <li><a href="">Jquery</a></li>
                <li><a href="">Oracle</a></li>
              </ul>
            </li>
            <li>
              <a href="">Etiketler</a>
            </li>
            <li>
              <a href="">Üyeler</a>
            </li>
            <li>
              <a href="">Yardım</a>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#" target="_blank">Oturum Aç</a></li>
          </ul>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    {{ HTML::script('assets/js/bootstrap.min.js') }}
  </body>
</html>
