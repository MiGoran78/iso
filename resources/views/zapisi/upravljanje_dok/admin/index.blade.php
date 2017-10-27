@extends('zapisi.upravljanje_dok.main')
@section('content')

    <div class="container" style="font-family: 'Verdana'; margin: 0px; margin-right: 20px; padding: 5px; padding-top: 0px; width: auto; height:100%" >
        <table class="table" style="margin: 0px">
            <tr>
                <td class="col-md-8" align="left">
                    <h3 style="font-family: Tahoma; color:red; padding: 2px; margin: 2px; margin-left: 5px">Upravljanje dokumentima</h3>
                </td>

                <td class="col-md-4" align="right">
                    {!! Form::open(['method'=>'GET', 'action'=> ['UpravljanjeDokController@create']]) !!}
                        {!! Form::submit('NOVO', ['class'=>'btn btn-default', 'style'=>'background:#eeeeee']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        </table>
    </div>

    <div class="container" style="font-family: 'Verdana'; margin: 0px; margin-right: 20px; padding: 5px; padding-top: 0px; width: auto; height:100%" >
        <table class="table">
            <thead>
            <tr>
                <th width="5%" style="text-align: center">No</th>
                <th width="20%" style="text-align: center">Šifra dokumenta</th>
                <th width="65%" style="text-align: left">Naziv</th>
                <th width="5%" style="text-align: center">Štampanje</th>
                <th width="5%" style="text-align: center">Brisanje</th>
            </tr>
            </thead>

            <tbody>
            @if($datas)

                @php($no=1)
                @php($prev = '')

                @foreach($datas as $key=>$data)
                    {{--@if($data->sifra != $prev)--}}
                        <tr>
                            <td style="padding: 4px; text-align: center; padding-left: 10px"> {{$no++}}</td>

                            <td style="padding: 4px; text-align: center">
                                <a class="btn btn-default" style="width: 150px; height:22px; padding-top: 0px; padding-bottom: 0px; padding-left: 5px; padding-right: 6px"
                                    href="{{route('zapisi.upravljanje_dok.admin.edit', $data->id)}}">
                                    {{ $data->sifra }} ({{$data->verzija}})
                                </a>
                            </td>

                            <td style="padding: 4px; text-align: left; padding-left: 10px"> {{$data->naslov}}</td>

                            <td style="padding: 4px">
                                <a class="btn btn-warning" style="width: 130px; height:22px; padding: 0px"
                                    href="{{route('upravljanje_dok.show', $data->id)}}">
                                    <div style="text-align: left; margin-left: 10px">
                                        <span class="glyphicon glyphicon-print" aria-hidden="true" >&nbsp;</span>
                                        <span>{{ $data->sifra }} ({{$data->verzija}})</span>
                                    </div>
                                </a>
                            </td>

                            <td style="padding: 4px; text-align: center">
                                <button type="button" data-toggle="modal" data-target="#delete{{$data->id}}" class="btn btn-danger" style="height:22px; padding-top: 0px; padding-bottom: 0px; padding-left: 5px; padding-right: 6px">X</button>

                                <!-- Modal -->
                                <div class="modal fade" id="delete{{$data->id}}" role="dialog">
                                    <div class="modal-dialog">
                                        <!-- Modal content-->
                                        <div class="modal-content" align="center">
                                            <div class="modal-header">  <h4 style="font-family: 'Lato'" class="modal-title">Sigurni ste da želite da obrišete ?</h4>  </div>
                                            <div class="modal-body">
                                                {!! Form::open(['method'=>'DELETE', 'action'=> ['UpravljanjeDokController@destroy', $data->id]]) !!}
                                                {!! Form::submit('Da', ['class'=>'btn btn-danger']) !!}
                                                {!! Form::close() !!}
                                            </div>
                                            <div class="modal-footer"> </div>
                                        </div>
                                    </div>
                                </div>
                                {{--=============--}}
                            </td>
                        </tr>
                    {{--@endif--}}
                    {{--@php($prev = $data->sifra)--}}
                @endforeach
            @endif
            </tbody>

        </table>
    </div>

@stop
