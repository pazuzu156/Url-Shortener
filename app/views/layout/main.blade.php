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
                    <a href="{{ url('/') }}" class="navbar-brand">URL Shortener</a>
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
