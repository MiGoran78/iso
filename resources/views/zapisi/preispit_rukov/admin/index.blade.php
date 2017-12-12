@extends('zapisi.preispit_rukov.main')
@section('content')

    <div class="container" style="font-family: 'Verdana'; margin: 0px; margin-right: 20px; padding: 5px; padding-top: 0px; width: auto; height:100%" >
        <table class="table" style="margin: 0px">
            <tr>
                <td  class="col-md-8" align="left">
                    <h3 style="font-family: Tahoma; color:red; padding: 2px; margin: 2px; margin-left: 5px">U.POR.LPC &nbsp;- &nbsp;Preispitivanje od strane rukovodsta, ciljevi kvaliteta</h3>
                </td>

                <td  class="col-md-4" align="right">
                    {!! Form::open(['method'=>'GET', 'action'=> ['PreispitRukController@create']]) !!}
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
                <th width="10%" style="text-align: center">No</th>
                <th width="15%" style="text-align: center">Ref broj</th>
                <th width="20%" style="text-align: center">Datum preispitivanja</th>
                <th width="20%" style="text-align: center">Karakter</th>
                <th width="25%" style="text-align: center">Odobreno</th>
                <th width="10%" style="text-align: center">Brisanje</th>
            </tr>
            </thead>

            <tbody>
            @if($datas)
                @foreach($datas as $key=>$data)
                    <tr>
                        <td style="padding: 4px; text-align: center; padding-left: 10px"> {{$key+1}}</td>
                        <td style="padding: 4px; text-align: center">
                            <a class="btn btn-default" style="width: 150px; height:22px; padding-top: 0px; padding-bottom: 0px; padding-left: 5px; padding-right: 6px"
                               href="{{route('zapisi.preispit_rukov.admin.edit', $data->id)}}">{{$data->idRef}}</a>
                        </td>
                        <td style="padding: 4px; text-align: center"> {{ $data['datum']=='' ? '' : date('d.m.Y', strtotime($data->datum)) }}</td>
                        <td style="padding: 4px; text-align: center">
                            @if ($data->karakter=='1') redovno @endif
                            @if ($data->karakter=='2') vanredno @endif
                        </td>
                        <td style="padding: 4px; text-align: center">
                            @if ($data->odobrio_ime=='') ne @else da @endif
                        </td>

                        <td style="padding: 4px; text-align: center">
                            @if(\App\Http\Controllers\HomeController::AdminUsr())
                                <button type="button" data-toggle="modal" data-target="#delete{{$data->id}}" class="btn btn-danger" style="height:22px; padding-top: 0px; padding-bottom: 0px; padding-left: 5px; padding-right: 6px">X</button>
                            @endif

                            <!-- Modal -->
                            <div class="modal fade" id="delete{{$data->id}}" role="dialog">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content" align="center">
                                        <div class="modal-header">  <h4 style="font-family: 'Lato'" class="modal-title">Sigurni ste da želite da obrišete ?</h4>  </div>
                                        <div class="modal-body">
                                            {!! Form::open(['method'=>'DELETE', 'action'=> ['PreispitRukController@destroy', $data->id]]) !!}
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
    </div>

@stop
