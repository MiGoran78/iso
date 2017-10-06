@extends('zapisi.ostec_imovine.main')
@section('content')

    <div class="container" style="font-family: 'Verdana'; margin: 0px; margin-right: 20px; padding: 5px; padding-top: 0px; width: auto; height:100%" >
        <table class="table" style="margin: 0px">
            <tr>
                <td  class="col-md-8" align="left">
                    <h3 style="font-family: Tahoma; color:red; padding: 2px; margin: 2px; margin-left: 5px">Oštećenje i gubitak imovine naručioca</h3>
                </td>

                <td  class="col-md-4" align="right">
                    {!! Form::open(['method'=>'GET', 'action'=> ['OstecenjeImovineController@create']]) !!}
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
                <th width="10%" style="text-align: center">Ref broj</th>
                <th width="17%" style="text-align: center">Narucilac</th>
                <th width="17%" style="text-align: center">Primalac</th>
                <th width="10%" style="text-align: center">Datum prijema</th>
                <th width="15%" style="text-align: center">Naziv</th>
                <th width="10%" style="text-align: center">Stanje </th>
                <th width="11%" style="text-align: center">Datum rešavanja</th>
                <th width="5%" style="text-align: center">Brisanje</th>
            </tr>
            </thead>

            <tbody>
            @if($datas)
                @foreach($datas as $key=>$data)
                    <tr>
                        <td style="padding: 4px; text-align: center; padding-left: 10px"> {{$key+1}}</td>
                        <td style="padding: 4px; text-align: center"> <a href="{{route('zapisi.ostec_imovine.admin.edit', $data->id)}}">{{$data->idRef}}</a></td>
                        <td style="padding: 4px; text-align: center"> {{ $data->narucilac }}</td>
                        <td style="padding: 4px; text-align: center"> {{ $data->primalac }}</td>
                        <td style="padding: 4px; text-align: center"> {{ $data['datum_prijema']=='' ? '' : date('d.m.Y', strtotime($data->datum_prijema)) }}</td>
                        <td style="padding: 4px; text-align: center"> {{ $data->naziv }}</td>
                        <td style="padding: 4px; text-align: center">
                            @if ($data->stanje=='1') oštećenje @endif
                            @if ($data->stanje=='2') gubitak @endif
                            @if ($data->stanje=='3') neupotrebljivo @endif
                            @if ($data->stanje=='4') mora se dorađiati @endif
                        </td>
                        <td style="padding: 4px; text-align: center"> {{ $data['nacin_resavanja_datum']=='' ? '' : date('d.m.Y', strtotime($data->nacin_resavanja_datum)) }}</td>

                        <td style="padding: 4px; text-align: center">
                            <button type="button" data-toggle="modal" data-target="#delete{{$data->id}}" class="btn btn-danger" style="height:22px; padding-top: 0px; padding-bottom: 0px; padding-left: 5px; padding-right: 6px">X</button>

                            <!-- Modal -->
                            <div class="modal fade" id="delete{{$data->id}}" role="dialog">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content" align="center">
                                        <div class="modal-header">  <h4 style="font-family: 'Lato'" class="modal-title">Sigurni ste da želite da obrišete ?</h4>  </div>
                                        <div class="modal-body">
                                            {!! Form::open(['method'=>'DELETE', 'action'=> ['OstecenjeImovineController@destroy', $data->id]]) !!}
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
