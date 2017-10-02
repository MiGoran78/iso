<link rel="stylesheet" href="/css/css.css?family=Lato:100,300,400,700">
<link rel="stylesheet" href="/css/font-awesome.min.css" />
<link rel="stylesheet" href="/css/bootstrap.min.css">
<link rel="stylesheet" href="/css/dropzone.min.css">

<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/dropzone.min.js"></script>

{{-- DATE PICKER --}}
<link rel="stylesheet" href="/css/bootstrap-datepicker3.css"/>
<script type="text/javascript" src="/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="/js/objDatePicker.js"></script>


<body style="height:100%">
    <div class="container" style="font-family: 'Verdana'; margin: 0px; margin-right: 20px; padding: 5px; padding-bottom: 0px; width: auto; height:100%" >
        <div class="panel panel-primary" style="margin: 0px">
            <div class="panel-heading" style="background: #5b5b5b; color: #ffffff; border: solid 1px #3b3b3b">

                <div class="row">
                    <div class="col-md-10" align="left">
                        <h4 style="margin: 0px"> ISO standard </h4>
                    </div>
                    <div class="col-md-2">


                        {{--DROPMENU--}}
                            <ul class="nav navbar-nav navbar-right" onmouseover="this.childNodes[1].childNodes[1].style.background='#5b5b5b'">
                                @foreach(App\Menu::with('children')->where('parent_id','=',0)->get() as $items1)
                                    @if($items1->children->count() > 0)
                                        <li class="dropdown" >
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="padding:0px; padding-right:20px; color: white">
                                                {{$items1->title}}  <b class="caret"></b>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                @foreach($items1->children as $submenu1)
                                                    <li><a href="{{$submenu1->link}}" style="padding: 10px">{{$submenu1->title}}</a></li>
                                                    {{--<li role="separator" class="divider" style="padding: 0px; margin: 0px"></li>--}}
                                                @endforeach
                                            </ul>
                                        </li>
                                    @else
                                        <li><a href="">{{$items1->title}}</a></li>
                                    @endif
                                @endforeach
                            </ul>
                        {{--END DROPMENU--}}


                    </div>
                </div>

            </div>
        </div>
    </div>

