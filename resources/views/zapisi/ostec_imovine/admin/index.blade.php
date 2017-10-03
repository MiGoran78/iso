@extends('zapisi.ostec_imovine.main')
@section('content')

    <div class="container" style="font-family: 'Verdana'; margin: 0px; margin-right: 20px; padding: 5px; padding-top: 0px; width: auto; height:100%" >
        <table class="table" style="margin: 0px">
            <tr>
                <td  class="col-md-3" align="left">
                    <h4 style="font-family: Tahoma; color:red; padding: 2px; margin: 2px; margin-left: 5px">Oštećenje i gubitak imovine naručioca</h4>
                </td>

                <td  class="col-md-8" align="right">
                    {!! Form::open(['method'=>'POST', 'action'=> ['OstecenjeImovineController@create']]) !!}
                        {{--{!! Form::hidden('id', $id) !!}--}}
                        {{--{!! Form::hidden('idRef', $idRef) !!}--}}
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
                {{--<th width="10%" style="text-align: center">Datum otvaranja</th>--}}
                {{--<th width="10%" style="text-align: center">Rok</th>--}}
                {{--<th width="10%" style="text-align: center">Datum zatvaranja</th>--}}
                {{--<th width="11%" style="text-align: center">Vlasnik</th>--}}
                {{--<th width="22%" style="text-align: center">Korektivna mera</th>--}}
                {{--<th width="22%" style="text-align: center">Preispitivano</th>--}}
            </tr>
            </thead>

            <tbody>
            @if($datas)
                @foreach($datas as $key=>$data)
                    <tr>
                        <td style="padding: 4px; text-align: center; padding-left: 10px"> {{$key+1}}</td>
                        <td style="padding: 4px; text-align: center"> <a href="{{route('zapisi.korektivna_mera.admin.edit', $data->id)}}">{{$data->idRef}}</a></td>
                        {{--<td style="padding: 4px; text-align: center; padding-left: 10px"> {{ date('d.m.Y', strtotime($data->date_open)) }}</td>--}}
                        {{--<td style="padding: 4px; text-align: center"> {{ $data['date_deadline']=='' ? '' : date('d.m.Y', strtotime($data->date_deadline)) }}</td>--}}
                        {{--<td style="padding: 4px; text-align: center"> {{ $data['date_close']=='' ? '' : date('d.m.Y', strtotime($data->date_close)) }}</td>--}}
                        {{--<td style="padding: 4px; text-align: center"> {{$data->vlasnik}}</td>--}}
                        {{--<td style="padding: 4px; text-align: center"> {{$data->kor_mera}}</td>--}}
                        {{--<td style="padding: 4px; text-align: center"> {{$data->preispitivano}}</td>--}}
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>

@stop
