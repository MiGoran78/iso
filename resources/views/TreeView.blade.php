<!DOCTYPE html>

<html>
<head>
    <link rel="stylesheet" href="/css/font-awesome.min.css" />
    <link rel="stylesheet" href="/css/font-raleway.css" />
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/css.css?family=Lato:100,300,400,700">
    <link rel="stylesheet" href="/css/treeview.css">
    <script src="/js/jquery.min.js"></script>
    {{--<link href="/css/app.css" rel="stylesheet">--}}
</head>

<body style="height:100%">

{{--@if(\App\Http\Controllers\HomeController::AdminUsr())--}}
{{--@endif--}}


<div id="app">
    <nav class="navbar navbar-default navbar-static-top" style="margin: 0">
        <div class="container" style="font-family: Raleway; margin-right: 40px">

            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="padding: 5px">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>


        </div>
    </nav>
</div>



<div class="container" style="font-family: 'Verdana'; margin: 5px; margin-top: 0px; margin-right: 20px; padding: 0px; width: auto; height:100%">

    @include('header')

    <div class="row">
        <div class="panel-body">

            {{-- LEVI PANEL --}}
            <div class="col-md-5">
                <ul id="tree1" style="font-family: 'Calibri'; font-size: 16px">
                    @foreach($categories as $category)
                        <li>
                            <img src="/pic/expand2.png">&nbsp;
                            {{ $category->title }}
                            @if(count($category->childs))
                                @include('manageChild',['childs'=>$category->childs])
                            @endif
                        </li>
                    @endforeach
                </ul>
            </div>


            {{-- DESNI PANEL --}}
            <div class="col-md-7" style="padding: 5px">
                <object align="left">
                    <embed style="margin-left: 5px; padding: 10px; border: solid 1px #cccccc" width=750px height=670px
                           src="qms_podaci/i nivo/Izjava o politici upravljanja1.htm" type="text/html">
                </object>
            </div>

        </div>

</div>


<script src="/js/treeview.js"></script>

</body>
</html>
