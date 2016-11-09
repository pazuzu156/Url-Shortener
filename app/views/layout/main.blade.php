<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>URL Shortener</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/site.min.css') }}">
        <script type="text/javascript" src="{{ asset('js/global.min.js') }}"></script>
    </head>
    <body>
        <nav class="navbar navbar-default navbar-static-top">
            <div class="navbar-inner">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nb-collapse" aria-expanded="flase">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        {!! Html::link('/', 'URL Shortener', ['class' => 'navbar-brand']) !!}
                    </div>
                    <div class="collapse navbar-collapse navbar-right" id="nb-collapse">
                        <ul class="nav navbar-nav">
                            <li>
                                {!! link_to('https://github.com/pazuzu156/url-shortener', 'View on GitHub', ['target' => '_blank']) !!}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <div class="pageContent">
            <div class="container">
                @yield('content')
            </div>
        </div>
        <div class="footer navbar-default navbar-footer">
            <div class="container">
                <div class="footer_text">
                    Site &copy; {{ date('Y') }}
                    {!! link_to('https://kalebklein.com', 'Kaleb Klein', ['target' => '_blank']) !!}
                </div>
            </div>
        </div>
    </body>
</html>
