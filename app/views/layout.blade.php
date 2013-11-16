<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @stylesheets('bootstrap')
    @javascripts('startup')
</head>
<body itemscope itemtype="http://schema.org/WebPage">
    @section('modules/navigation')
    @show
    <div class="container wrap">
        @yield('content')
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <span>Our mission is to bring affordable Technology education to people everywhere, in order to help them achieve their dreams and change the world.</span>
            </div>
            <div class="col-md-3">
                <ul>
                    <li>About</li>
                    <li>Link Teamspeak</li>
                    <li>Rules</li>
                    <li>About</li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul>
                    <li>About</li>
                    <li>Link Teamspeak</li>
                    <li>Rules</li>
                    <li>About</li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul>
                    <li>About</li>
                    <li>Link Teamspeak</li>
                    <li>Rules</li>
                    <li>About</li>
                </ul>
            </div>
        </div>
    </div>
    </footer>
    @javascripts('kickstart')
</body>
</html>