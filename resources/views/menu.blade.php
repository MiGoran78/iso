<script src="/js/bootstrap.min.js"></script>

<div class="container">
        {{--<nav class="navbar navbar-default" role="navigation" style="width: 70px; height: 40px; margin: 0px" align="center">--}}
                <ul class="nav navbar-nav navbar-left" onmouseover="this.childNodes[1].childNodes[1].style.background='#5b5b5b'">
                @foreach(App\Menu::with('children')->where('parent_id','=',0)->get() as $items1)
                    @if($items1->children->count() > 0)
                        <li class="dropdown" style="width: 70px">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="padding:0px; color: white">
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
        {{--</nav>--}}
    </div>
