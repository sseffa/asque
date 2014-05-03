<style>

    .bottom-menu {
        background: none repeat scroll 0 0 #EBEDEF;
        color: #B8BFC7;
        padding: 40px 0;
    }

    .bottom-menu .brand {
        font-size: 23.996px;
        margin-bottom: -6px;
        margin-top: -8px;
    }

    .bottom-menu .title {
        font-size: 14px;
        font-weight: 700;
        margin-top: 0;
    }

    .bottom-menu a {
        color: inherit;
    }

    .active .bottom-menu a, .bottom-menu a:hover, .bottom-menu a:focus {
        color: #1ABC9C;
    }

    .bottom-menu .label, .bottom-menu .badge {
        vertical-align: middle;
    }

    .bottom-icons {
        font-size: 15.988px;
    }

    .bottom-menu-inverse {
        background-color: #34495E;
        color: #677786;
    }

    .bottom-menu-large {
        padding-bottom: 52px;
        padding-top: 52px;
    }

    .bottom-menu-large .brand {
        margin-top: -2px;
    }

    .bottom-menu-large .bottom-links li {
        float: none;
        margin-right: 0;
    }

    .bottom-links, .bottom-icons {
        list-style: none outside none;
        margin: 0;
        padding: 0;
    }

    .bottom-links li, .bottom-icons li {
        display: block;
        float: left;
        margin: 0 18px 0 0;
    }

    @media (max-width: 767px) {
        .bottom-menu {
            margin-left: -20px;
            margin-right: -20px;
            padding-left: 20px;
            padding-right: 20px;
        }

        .bottom-menu .brand, .bottom-menu .bottom-links {
            margin-bottom: 30px;
        }

        .bottom-menu .bottom-links li {
            float: none;
            margin-bottom: 2px;
        }

        .bottom-menu [class*="span"]:last-child .bottom-links {
            margin-bottom: 0;
        }
    }

    .bottom-mail {
        height: 50px !important;
    }

    .bottom-mail-heading {
        color: #FFFFFF !important;
        font-weight: inherit;
        margin-bottom: 30px;
    }

    .bottom-links li {
        margin-right: 30px !important;
    }

    #search_icon {
        cursor: pointer;
        margin-top: 5px;
    }
</style>
<div id="footer">
    <div class="bottom-menu bottom-menu-inverse">
        <div class="container">
            <div class="row">
                <form id="newsletterForm" action="/newsletter" method="post" novalidate="novalidate">
                    <h4 style="font-weight:100;" class="col-md-6 col-md-push-4 bottom-mail-heading">Signup to the our Newsletter</h4>

                    <div class="clearfix"></div>

                    <div class="col-md-5 col-md-push-3">
                        <input type="text" style="border:none !important;" value="" placeholder="Signup to the Newsletter" class="form-control bottom-mail" name="email">
                    </div>

                    <div class="col-md-3 col-md-push-3">
                        <div class="controls">
                            <div class="col-md-9">
                                <button style="border:none !important;height:50px;" class="btn btn-primary btn-lg " href="#fakelink" id="singlebutton">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="row">

                <div style="margin-top:50px;" class="col-md-9 col-md-push-3">
                    <ul class="bottom-links bottom-menu">
                        <li><a href="/">Asque</a></li>
                        <li><a href="/">Sorular</a></li>
                        <li><a href="/">Etiketler</a></li>
                        <li><a href="/">Üyeler</a></li>
                        <li><a href="/">Hakkında</a></li>
                        <li><a href="/">RSS</a></li>
                        <li><a href="/">Yardım</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>