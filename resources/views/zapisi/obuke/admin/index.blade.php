@extends('zapisi.obuke.main')
@section('content')

    <div class="container" style="font-family: 'Verdana'; margin: 0px; margin-right: 20px; padding: 5px; padding-top: 0px; width: auto; height:100%" >
        <table class="table" style="margin: 0px">
            <tr>
                <td class="col-md-8" align="left">
                    <h3 style="font-family: Tahoma; color:red; padding: 2px; margin: 2px; margin-left: 5px">Obuke</h3>
                </td>

                <td class="col-md-4" align="right">
                    {!! Form::open(['method'=>'GET', 'action'=> ['ObukeController@create']]) !!}
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
                    <th width="20%" style="text-align: left">Naziv obuke</th>
                    <th width="20%" style="text-align: center">Vrsta obuke</th>
                    <th width="20%" style="text-align: center">Izdao zahtev</th>
                    <th width="15%" style="text-align: center">Status</th>
                    <th width="15%" style="text-align: center">Datum početka</th>
                    <th width="5%" style="text-align: center">Brisanje</th>
                </tr>
            </thead>

            <tbody>
            @if($datas)
                @php($no=1)

                @foreach($datas as $key=>$data)
                    <tr>
                        {{--<td style="padding: 4px; text-align: center; padding-left: 10px"> {{$no++}} </td>--}}

                        <td style="padding: 4px; text-align: left">
                            <a class="btn btn-default" style="width: 100%; height:22px; padding-top: 0px; padding-bottom: 0px; padding-left: 5px; padding-right: 6px"
                               href="{{route('zapisi.obuke.admin.edit', $data->id)}}">
                                {{$no++}}
                            </a>
                        </td>

                        @if($data->vrsta == '1')     @php($vrsta = 'redovno')       @elseif($vrsta = '')     @endif
                        @if($data->vrsta == '2')     @php($vrsta = 'vanredno')      @elseif($vrsta = '')     @endif

                        @if($data->status == '1')     @php($status = 'nije započeto')   @elseif($status = '')    @endif
                        @if($data->status == '2')     @php($status = 'u toku')          @elseif($status = '')    @endif
                        @if($data->status == '3')     @php($status = 'završeno')        @elseif($status = '')    @endif
                        @if($data->status == '4')     @php($status = 'otkazano')        @elseif($status = '')    @endif

                        <td style="padding: 4px; text-align: left; padding-left: 10px"> {{$data->naziv}}</td>
                        <td style="padding: 4px; text-align: center; padding-left: 10px"> {{$vrsta}}</td>
                        <td style="padding: 4px; text-align: center; padding-left: 10px"> {{$data->izdao}}</td>
                        <td style="padding: 4px; text-align: center; padding-left: 10px"> {{$status}}</td>
                        <td style="padding: 4px; text-align: center; padding-left: 10px"> {{ date('d-m-Y', strtotime($data->dat_pocetka)) }}</td>

                        <td style="padding: 4px; text-align: center">
                            <button type="button" data-toggle="modal" data-target="#delete{{$data->id}}" class="btn btn-danger" style="height:22px; padding-top: 0px; padding-bottom: 0px; padding-left: 5px; padding-right: 6px">X</button>

                            <!-- Modal -->
                            <div class="modal fade" id="delete{{$data->id}}" role="dialog">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content" align="center">
                                        <div class="modal-header">  <h4 style="font-family: 'Lato'" class="modal-title">Sigurni ste da želite da obrišete ?</h4>  </div>
                                        <div class="modal-body">
                                            {!! Form::open(['method'=>'DELETE', 'action'=> ['ObukeController@destroy', $data->id]]) !!}
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
