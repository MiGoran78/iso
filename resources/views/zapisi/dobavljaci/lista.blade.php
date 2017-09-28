@extends('zapisi.dobavljaci.main')
@section('content')

    <div class="container" style="font-family: 'Verdana'; margin: 0px; margin-right: 20px; padding: 5px; padding-top: 0px; width: auto; height:100%" >

        <div class="row" style="font-family: Lato; margin-left: 5px; margin-right: 5px; padding: 0px;" align="right">
            <table class="table" style="font-family: Lato; margin: 0px">
                <tr>
                    <td><h4 style="color:red; padding: 2px; margin: 2px; margin-left: 0px">
                            <b>Lista dobavljača</b></h4>
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
                    <th width="4%" style="text-align: center">No</th>
                    <th width="15%" style="text-align: center">Naziv dobavljača</th>
                    <th width="7%" style="text-align: center">Prihvatljiost</th>
                    <th width="10%" style="text-align: center">Ocena</th>
                    <th width="15%" style="text-align: center">Dobavljač usluga ili repromaterijala</th>
                    <th width="15%" style="text-align: center">Naziv proizvoda / usluge</th>
                    <th width="8%" style="text-align: center">Kontakt</th>
                    <th width="8%" style="text-align: center">Telefon</th>
                    <th width="5%" style="text-align: center">Brisanje</th>
                </tr>
                </thead>

                <tbody>
                @if($datas)
                    @foreach($datas as $key=>$data)
                        <tr>
                            <td style="padding: 4px; text-align: center; padding-left: 10px"> {{$key+1}}</td>
                            <td style="padding: 4px; text-align: center"> <a href="{{route('zapisi.dobavljaci.id_list.edit', $data->id)}}">{{$data->dobavljac}}</a></td>
                            <td style="padding: 4px; text-align: center"> - </td>
                            <td style="padding: 4px; text-align: center"> - </td>
                            <td style="padding: 4px; text-align: center"> {{$data->dobavljac_tip }}</td>
                            <td style="padding: 4px; text-align: center"> - </td>
                            <td style="padding: 4px; text-align: center"> {{$data->kontakt1 }}</td>
                            <td style="padding: 4px; text-align: center"> {{$data->telefon1 }}</td>

                            <td style="padding: 4px; text-align: center">
                                {!! Form::open(['method'=>'DELETE', 'action'=> ['DobavljacController@destroy', $data->id]]) !!}
                                <div class="">
                                    {!! Form::submit('X', ['class'=>'btn btn-danger',  'style'=>'height:22px; padding-top: 0px; padding-bottom: 0px; padding-left: 5px; padding-right: 6px']) !!}
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




{{--{!! Form::open(['method'=>'POST', 'action'=> ['DobavljaciController@ocena']]) !!}--}}
{{--{!! Form::submit('Ocena', ['class'=>'btn btn-default', 'style'=>'background:#eeeeee']) !!}--}}
{{--{!! Form::close() !!}--}}


{{--{!! Form::open(['method'=>'POST', 'action'=> ['DobavljaciController@reklamacija']]) !!}--}}
{{--{!! Form::submit('Reklamacija', ['class'=>'btn btn-default', 'style'=>'background:#eeeeee']) !!}--}}
{{--{!! Form::close() !!}--}}


{{--
     GET|HEAD  | dobavljaci                   | zapisi.dobavljaci.id_list.index     | App\Http\Controllers\DobavljaciController@index           | web          |
     POST      | dobavljaci                   | zapisi.dobavljaci.id_list.store     | App\Http\Controllers\DobavljaciController@store           | web          |
     GET|HEAD  | dobavljaci/create            | zapisi.dobavljaci.id_list.create    | App\Http\Controllers\DobavljaciController@create          | web          |
     DELETE    | dobavljaci/{dobavljaci}      | dobavljaci.destroy                  | App\Http\Controllers\DobavljaciController@destroy         | web          |
     PUT|PATCH | dobavljaci/{dobavljaci}      | dobavljaci.update                   | App\Http\Controllers\DobavljaciController@update          | web          |
     GET|HEAD  | dobavljaci/{dobavljaci}      | dobavljaci.show                     | App\Http\Controllers\DobavljaciController@show            | web          |
     GET|HEAD  | dobavljaci/{dobavljaci}/edit | zapisi.dobavljaci.id_list.edit      | App\Http\Controllers\DobavljaciController@edit            | web          |

     POST      | ocena                        | ocena                               | App\Http\Controllers\DobavljaciController@ocena           | web          |
     POST      | ocena_upd                    | ocena_upd                           | App\Http\Controllers\DobavljaciController@ocena_upd       | web          |
     POST      | reklamacija                  | reklamacija                         | App\Http\Controllers\DobavljaciController@reklamacija     | web          |
     POST      | reklamacija_upd              | reklamacija_upd                     | App\Http\Controllers\DobavljaciController@reklamacija_upd | web          |
--}}