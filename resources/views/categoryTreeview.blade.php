<!DOCTYPE html>

<html>
<head>
    <title>ISO 9001</title>
    <link rel="stylesheet" href="/css/font-awesome.min.css" />
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/css.css?family=Lato:100,300,400,700">
    <link rel="stylesheet" href="/css/treeview.css">
    <script src="/js/jquery.min.js"></script>
</head>

<body style="height:100%">
<div class="container" style="font-family: 'Verdana'; margin: 5px; margin-right: 20px; padding: 0px; width: auto; height:100%">

    <div class="panel panel-primary" style="margin: 0px">
        <div class="panel-heading" style="background: #5b5b5b; color: #ffffff; border: solid 1px #3b3b3b">
            <h4 style="margin: 0px">
                ISO9001:2008, ISO 14001:2004, BSI OHSAS 18001:2007
            </h4>
        </div>
    </div>

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
                           src="qms_podaci/i nivo/Izjava o politici upravljanja.htm" type="text/html">
                </object>
            </div>

        </div>

</div>


<script src="/js/treeview.js"></script>

</body>
</html>
