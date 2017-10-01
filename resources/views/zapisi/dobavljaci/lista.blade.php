@extends('zapisi.dobavljaci.main')
@section('content')

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <div class="container" style="font-family: 'Verdana'; margin: 0px; margin-right: 20px; padding: 5px; padding-top: 0px; width: auto; height:100%" >

        <div class="row" style="font-family: Lato; margin-left: 5px; margin-right: 5px; padding: 0px;" align="right">
            <table class="table" style="font-family: Tahoma; margin: 0px">
                <tr>
                    <td><h3 style="color:red; padding: 2px; margin: 2px; margin-left: 0px">
                            Lista dobavljača</h3>
                    </td>
                    <td> </td>
                    <td style="text-align: right; vertical-align: middle">
                        {!! Form::open(['method'=>'GET', 'action'=> ['DobavljacController@create']]) !!}
                            {!! Form::submit('NOVI DOBAVLJAČ', ['class'=>'btn btn-default', 'style'=>'background:#eeeeee']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            </table>

            <table class="table">
                <thead>
                    <tr>
                        <th width="3%" style="text-align: center">No</th>
                        <th width="14%" style="text-align: center">Naziv dobavljača</th>
                        <th width="21%" style="text-align: center">Naziv proizvoda / usluge</th>
                        <th width="10%" style="text-align: center">Dobavljač</th>
                        <th width="13%" style="text-align: center">Prihvatljivost</th>
                        <th width="5%" style="text-align: center">Ocena</th>
                        <th width="10%" style="text-align: center">Kontakt</th>
                        <th width="10%" style="text-align: center">Telefon</th>
                        <th width="8%" style="text-align: center">Zapis</th>
                        <th width="3%" style="text-align: center">Brisanje</th>
                    </tr>
                </thead>

                <tbody>
                @if($datas)
                    @foreach($datas as $key=>$data)
                        <tr>
                            <td style="padding: 4px; text-align: center; padding-left: 10px"> {{$key+1}}</td>
                            <td style="padding: 4px; text-align: center"> <a href="{{route('zapisi.dobavljaci.id_list.edit', $data->id)}}">{{$data->dobavljac}}</a></td>
                            <td style="padding: 4px; text-align: center"> {{empty($naziv[$key]) ? '' : $naziv[$key] }} </td>
                            <td style="padding: 4px; text-align: center"> {{$data->dobavljac_tip }}</td>
                            <td style="padding: 4px; text-align: center">
                                {!! Form::open(['method'=>'POST', 'action'=> ['DobavljacController@ocena']]) !!}
                                    <div class="">
                                        {!! Form::hidden('id', $data->id) !!}
                                        {!! Form::hidden('idRef', $data->idRef) !!}
                                        @if (empty($prihatljiv[$key]))
                                            {!! Form::submit('neocenjen', ['class'=>'btn btn-default', 'style'=>'width: 150px; height:22px; padding-top: 0px; padding-bottom: 0px; padding-left: 5px; padding-right: 6px']) !!}
                                        @else
                                            @if ($prihatljiv[$key] == 'prihvatljiv')
                                                {!! Form::submit($prihatljiv[$key], ['class'=>'btn btn-success', 'style'=>'width: 150px; height:22px; padding-top: 0px; padding-bottom: 0px; padding-left: 5px; padding-right: 6px']) !!}
                                            @endif
                                            @if ($prihatljiv[$key] == 'privremeno prihvatljiv')
                                                {!! Form::submit($prihatljiv[$key], ['class'=>'btn btn-warning', 'style'=>'width: 150px; height:22px; padding-top: 0px; padding-bottom: 0px; padding-left: 5px; padding-right: 6px']) !!}
                                            @endif
                                            @if ($prihatljiv[$key] == 'neprihvatljiv')
                                             {!! Form::submit($prihatljiv[$key], ['class'=>'btn btn-danger', 'style'=>'width: 150px; height:22px; padding-top: 0px; padding-bottom: 0px; padding-left: 5px; padding-right: 6px']) !!}
                                            @endif
                                        @endif
                                    </div>
                                {!! Form::close() !!}
                            </td>

                            <td style="padding: 4px; text-align: center"> {{empty($ocene[$key]) ? '0' : $ocene[$key] }}</td>
                            <td style="padding: 4px; text-align: center"> {{$data->kontakt1 }}</td>
                            <td style="padding: 4px; text-align: center"> {{$data->telefon1 }}</td>

                            <td style="padding: 4px; text-align: center">
                                {!! Form::open(['method'=>'POST', 'action'=> ['DobavljacController@reklamacija']]) !!}
                                <div class="">
                                    {!! Form::hidden('idRef', $data->idRef) !!}
                                    @if (count($reklamacija->where('idRef','=',$data->idRef)) == 0)
                                        {!! Form::submit('Reklamacija', ['class'=>'btn btn-default',  'style'=>'height:22px; padding-top: 0px; padding-bottom: 0px; padding-left: 5px; padding-right: 6px']) !!}
                                    @else
                                        {!! Form::submit('Reklamacija', ['class'=>'btn btn-danger',  'style'=>'height:22px; padding-top: 0px; padding-bottom: 0px; padding-left: 5px; padding-right: 6px']) !!}
                                    @endif
                                </div>
                                {!! Form::close() !!}
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
                                                {!! Form::open(['method'=>'DELETE', 'action'=> ['DobavljacController@destroy', $data->id]]) !!}
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
    </div>

@stop

{{--{!! Form::open(['method'=>'POST', 'action'=> ['DobavljacController@reklamacija']]) !!}--}}
{{--{!! Form::submit('Reklamacija', ['class'=>'btn btn-default', 'style'=>'background:#eeeeee']) !!}--}}
{{--{!! Form::close() !!}--}}
