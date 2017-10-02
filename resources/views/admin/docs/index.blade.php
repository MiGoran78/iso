<!DOCTYPE html>
<html>
<head>
    <title>ISO 9001</title>
    <link rel="stylesheet" href="/css/font-awesome.min.css" />
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/css.css?family=Lato:100,300,400,700">
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body style="height:100%">
    <div class="container" style="font-family: 'Verdana'; margin: 0px; margin-right: 20px; padding: 5px; width: auto; height:100%" >

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

        <div class="row" style="font-family: Lato; margin-left: 5px; margin-right: 5px; padding: 0px;" align="right">
            {{--======================================--}}
            {{-- Pocetak hedera--}}
            <table class="table" style="font-family: Tahoma; margin: 0px">
                <tr>
                    <td><h3 style="color:red; padding: 2px; margin: 2px; margin-left: 5px">Upravljanje dokumentima QMS-a</h3></td>
                    <td> </td>
                    <td style="text-align: right; vertical-align: middle">
                        <a class="btn btn-default" style="background:#eeeeee" href="{{route('admin.docs.create')}}">
                            DODAVANJE NOVOG ZAPISA
                        </a>
                    </td>
                </tr>
            </table>

            {{--Pocetak sadrzaja--}}
            <table class="table">
                <thead>
                    <tr>
                        <th width="4%" style="text-align: center">No</th>
                        <th width="3%" style="text-align: center">Nivo</th>
                        <th width="37%" style="text-align: center">Naziv dokumenta</th>
                        <th width="28%" style="text-align: center">Lokacija dokumenta</th>
                        <th width="10%" style="text-align: center">Kreiran</th>
                        <th width="10%" style="text-align: center">Izmenjen</th>
                        <th width="6%" style="text-align: center">Brisanje</th>
                    </tr>
                </thead>

                <tbody>
                @if($docs)
                    @foreach($docs as $key=>$doc)
                        <tr>
                            <td style="padding: 4px; padding-left: 10px; text-align: center"> {{$key+1}}</td>
                            <td style="padding: 4px; padding-left: 10px; text-align: center"> {{$doc->level}}</td>
                            <td style="padding: 4px; text-align: center"> <a href="{{route('admin.docs.edit', $doc->id)}}">{{$doc->title}}</a></td>
                            <td style="padding: 4px; text-align: center"> {{$doc->path}}</td>
                            <td style="padding: 4px; text-align: center"> {{$doc->created_at->diffForHumans()}}</td>
                            <td style="padding: 4px; text-align: center"> {{$doc->updated_at->diffForHumans()}}</td>
                            <td style="padding: 4px; text-align: center">

                                <button type="button" data-toggle="modal" data-target="#delete{{$doc->id}}" class="btn btn-danger" style="height:22px; padding-top: 0px; padding-bottom: 0px; padding-left: 5px; padding-right: 6px">X</button>
                                <!-- Modal -->
                                <div class="modal fade" id="delete{{$doc->id}}" role="dialog">
                                    <div class="modal-dialog">
                                        <!-- Modal content-->
                                        <div class="modal-content" align="center">
                                            <div class="modal-header">  <h4 style="font-family: 'Lato'" class="modal-title">Sigurni ste da želite da obrišete ?</h4>  </div>
                                            <div class="modal-body">
                                                {!! Form::open(['method'=>'DELETE', 'action'=> ['DocController@destroy', $doc->id]]) !!}
                                                    {!! Form::submit('Da', ['class'=>'btn btn-danger']) !!}
                                                {!! Form::close() !!}
                                            </div>
                                            {{--<div class="modal-footer"> </div>--}}
                                        </div>
                                    </div>
                                </div>
                                {{--=============--}}

                            </td>

                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
            {{--Kraj sadrzaja--}}
            {{--======================================--}}
        </div>
    </div>
</body>

</html>
