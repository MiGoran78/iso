<script src="/js/bootstrap.min.js"></script>

<div class="container">
        {{--<nav class="navbar navbar-default" role="navigation" style="width: 70px; height: 40px; margin: 0px" align="center">--}}
                <ul class="nav navbar-nav navbar-left">
                @foreach(App\Menu::with('children')->where('parent_id','=',0)->get() as $item)
                    @if($item->children->count() > 0)
                        <li class="dropdown" style="width: 70px">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="padding:0px; color: white">
                                {{$item->title}}  <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                @foreach($item->children as $submenu)
                                    <li><a href="#" style="padding: 10px">{{$submenu->title}}</a></li>
                                    {{--<li role="separator" class="divider" style="padding: 0px; margin: 0px"></li>--}}
                                @endforeach
                            </ul>
                        </li>
                    @else
                        <li><a href="">{{$item->title}}</a></li>
                    @endif
                @endforeach
            </ul>
        {{--</nav>--}}
    </div>
