<!DOCTYPE html>
<html>
    <head>
        <title>ISO 9001</title>
        <link rel="stylesheet" href="/css/font-awesome.min.css" />
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/css.css?family=Lato:100,300,400,700">
        <script src="/js/jquery.min.js"></script>
    </head>

    <body style="height:100%">
        <div class="container" style="font-family: 'Verdana'; margin: 0px; margin-right: 20px; padding: 5px; padding-bottom: 0px; width: auto; height:100%" >

            <div class="panel panel-primary" style="margin: 0px">
                <div class="panel-heading" style="background: #5b5b5b; color: #ffffff; border: solid 1px #3b3b3b">
                    <div class="row">
                        <div class="col-md-11" align="left">
                            <h4 style="margin: 0px"> ISO standard </h4>
                        </div>
                        <div class="col-md-1" align="right">
                            @include('menu')
                        </div>
                    </div>
                </div>
            </div>

        </div>

        @yield('content')
    </body>
</html>
