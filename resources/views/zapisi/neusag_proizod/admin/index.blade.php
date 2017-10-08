@extends('zapisi.neusag_proizod.main')
@section('content')

    <div class="container" style="font-family: 'Verdana'; margin: 0px; margin-right: 20px; padding: 5px; padding-top: 0px; width: auto; height:100%" >

        <div class="row" style="font-family: Lato; margin-left: 5px; margin-right: 5px; padding: 0px;" align="right">
            <table class="table" style="font-family: Tahoma; margin: 0px">
                <tr>
                    <td><h3 style="color:red; padding: 2px; margin: 2px; margin-left: 0px">
                            Lista neusaglašenosti</h3>
                    </td>
                    <td> </td>
                    <td style="text-align: right; vertical-align: middle">
                        <a class="btn btn-default" style="background:#eeeeee" href="{{route('zapisi.neusag_proizod.admin.create')}}">
                            NOVA NEUSAGLAŠENOST
                        </a>
                    </td>
                </tr>
            </table>


            <table class="table">
                <thead>
                    <tr>
                        <th width="4%" style="text-align: center">No</th>
                        <th width="7%" style="text-align: center">Ref broj</th>
                        <th width="8%" style="text-align: center">Datum</th>
                        <th width="8%" style="text-align: center">Poreklo</th>
                        <th width="8%" style="text-align: center">Stadndard</th>
                        <th width="5%" style="text-align: center">Korektivne mere</th>
                        <th width="5%" style="text-align: center">8D izveštaj</th>
                        {{--<th width="5%" style="text-align: center">Brisanje</th>--}}
                    </tr>
                </thead>

                <tbody>
                    @if($datas)
                        @foreach($datas as $key=>$data)
                            <tr>
                                <td style="padding: 4px; text-align: center; padding-left: 10px"> {{$key+1}}</td>
                                <td style="padding: 4px; text-align: center">
                                    <a class="btn btn-default" style="width: 150px; height:22px; padding-top: 0px; padding-bottom: 0px; padding-left: 5px; padding-right: 6px"
                                       href="{{route('zapisi.neusag_proizod.admin.edit', $data->id)}}">{{$data->idRef}}</a>
                                </td>
                                <td style="padding: 4px; text-align: center; padding-left: 10px"> {{ date('d.m.Y', strtotime($data->datum)) }}</td>
                                <td style="padding: 4px; text-align: center"> {{($data->kupac_poreklo ? 'Kupac':'')   .   ($data->provera_poreklo ? 'Provera':'')   .   ($data->proces_poreklo ? 'Proces':'') }}</td>
                                <td style="padding: 4px; text-align: center"> {{$data->neusag_std1 . $data->neusag_std2 . $data->neusag_std3 . $data->neusag_std4 }}</td>


                                <td style="padding: 4px; text-align: center">
                                    {!! Form::open(['action'=> ['KorMeraController@show']]) !!}
                                        <div class="">
                                            {!! Form::hidden('id', $data->id) !!}
                                            {!! Form::hidden('idRef', $data->idRef) !!}
                                            @if (count($kms->where('idRef','=',$data->idRef)) == 0)
                                                {!! Form::submit('Korekrivna mera', ['class'=>'btn btn-default',  'style'=>'height:22px; padding-top: 0px; padding-bottom: 0px; padding-left: 5px; padding-right: 6px']) !!}
                                            @else
                                                {!! Form::submit('Korekrivna mera', ['class'=>'btn btn-success',  'style'=>'height:22px; padding-top: 0px; padding-bottom: 0px; padding-left: 5px; padding-right: 6px']) !!}
                                            @endif
                                        </div>
                                    {!! Form::close() !!}
                                </td>


                                <td style="padding: 4px; text-align: center">
                                    {!! Form::open(['action'=> ['KorMeraController@izvestaj_8D']]) !!}
                                        <div class="">
                                            {!! Form::hidden('id', $data->id) !!}
                                            {!! Form::hidden('idRef', $data->idRef) !!}
                                            @if (count($izv8d->where('idRef','=',$data->idRef)) == 0)
                                                {!! Form::submit('8D izveštaj', ['class'=>'btn btn-default',  'style'=>'height:22px; padding-top: 0px; padding-bottom: 0px; padding-left: 5px; padding-right: 6px']) !!}
                                            @else
                                                {!! Form::submit('8D izveštaj', ['class'=>'btn btn-success',  'style'=>'height:22px; padding-top: 0px; padding-bottom: 0px; padding-left: 5px; padding-right: 6px']) !!}
                                            @endif
                                        </div>
                                    {!! Form::close() !!}
                                </td>

                                {{--<td style="padding: 4px; text-align: center">--}}
                                    {{--{!! Form::open(['method'=>'POST', 'action'=> ['NeusagController@edit', $data->id]]) !!}--}}
                                    {{--<div class="">--}}
                                        {{--{!! Form::submit('Izmeni', ['class'=>'btn btn-success',  'style'=>'height:22px; padding-top: 0px; padding-bottom: 0px; padding-left: 5px; padding-right: 6px']) !!}--}}
                                    {{--</div>--}}
                                    {{--{!! Form::close() !!}--}}
                                {{--</td>--}}
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>

        </div>
    </div>

@stop
