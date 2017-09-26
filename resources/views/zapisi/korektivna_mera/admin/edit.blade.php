@extends('zapisi.korektivna_mera.main')

@section('content')

    <div class="container" style="font-family: 'Verdana'; margin: 0px; margin-right: 20px; padding: 5px; padding-top: 0px; width: auto; height:100%" >
        <table class="table" style="margin: 0px">
            <tr>
                <td  class="col-md-1" align="right">
                    <a href="/zapisi" class="btn btn-default" style="padding: 2px; padding-left: 8px; padding-right: 8px">Lista neusaglašenosti</a>
                </td>

                <td  class="col-md-10" align="left">
                    {!! Form::open(['action'=> ['KorMeraController@show']]) !!}
                        {!! Form::hidden('id', $datas->id) !!}
                        {!! Form::hidden('idRef', $datas->idRef) !!}
                        {!! Form::submit('Lista korektivnih mera', ['class'=>'btn btn-default',  'style'=>'padding: 2px; padding-left: 8px; padding-right: 8px']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        </table>
    </div>


    <div class="container" style="font-family: 'Verdana'; margin: 0px; margin-right: 20px; padding: 5px; padding-top: 0px; width: auto; height:100%" >
        {{-- Pocetak sekcije--}}
        <div class="col-md-6" style="margin: 0px; padding: 0px">
            <div class="panel panel-primary" style="margin-bottom: 0px">
                <div class="panel-heading"><strong>Izmena korektivne mere</strong></div>
                <div class="panel-body">
                    <ul id="tree1" style="padding: 20px;padding-top: 0px; padding-bottom: 0px">

                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif
                            {{--{!! Form::open(['route'=>'zapisi.korektivna_mera.admin.edit', $datas->id]) !!}--}}
                        {!! Form::open(['method'=>'PUT', 'action'=> ['KorMeraController@update', $datas->id   ]]) !!}
                                {!! Form::hidden('date_open', $datas->date_open, ['style'=>'display: inline; font-weight: 100;']) !!}
                                {!! Form::hidden('idRef', $datas->idRef, ['style'=>'display: inline; font-weight: 100;']) !!}

                                <div class="row">
                                    <div class="col-md-6" align="left">
                                        Datum: {{ date('d-m-Y', strtotime($datas->date_open)) }}
                                    </div>
                                    <div class="col-md-6" align="right">
                                        Ref: {{ $datas->idRef }}
                                    </div>
                                    <hr style="border: solid 1px cornflowerblue; margin-bottom: 10px">
                                </div>

                                <div>
                                    <h5>Korektivna mera:</h5>
                                    {!! Form::textarea('kor_mera', $datas->kor_mera, ['class'=>'form-control', 'id'=>'txtKor_mera', 'rows'=>'3', 'placeholder'=>'...']) !!}
                                    <br>
                                </div>
                                {{--{{ dd($datas) }}--}}
                                <div>
                                    <h5>Vlasnik:</h5>
                                    {!! Form::text('vlasnik', old('vlasnik'), ['class'=>'form-control', 'id'=>'txtVlasnik', 'placeholder'=>'...']) !!}
                                    <br>
                                </div>
                                <div>
                                    <h5>Rok za sprovodjenje:</h5>
                                    {!! Form::text('date_deadline', old('date_deadline'), ['class'=>'form-control', 'id'=>'txtDate_deadline', 'placeholder'=>'...']) !!}
                                    <br>
                                </div>
                                <div>
                                    <h5>Preispitivano:</h5>
                                    {!! Form::textarea('preispitivano', $datas->preispitivano, ['class'=>'form-control', 'id'=>'txtPreispitivano', 'rows'=>'3', 'placeholder'=>'...']) !!}
                                    <br>
                                </div>
                                <div>
                                    <h5>Datum zatvaranja:</h5>
                                    {!! Form::text('date_close', old('date_close'), ['class'=>'form-control', 'id'=>'txtDate_close', 'placeholder'=>'...']) !!}
                                    <br>
                                </div>

                                <div class="form-group" align="center">
                                    <button id="btnDodaj" class="btn btn-success">Izmeni</button>
                                </div>
                        {!! Form::close() !!}
                    </ul>
                </div>
            </div>

            <br>
            {!! Form::open(['method'=>'DELETE', 'action'=> ['KorMeraController@destroy', $datas->id]]) !!}
            <div align="center">
                {!! Form::submit('Obriši', ['class'=>'btn btn-danger']) !!}
            </div>
            {!! Form::close() !!}

        </div>
        {{-- Kraj sekcije--}}

    </div>

    <script type="text/javascript">
        document.getElementById('txtKor_mera').value = '{{ $datas->kor_mera }}';
        document.getElementById('txtVlasnik').value = '{{ $datas->vlasnik }}';
        document.getElementById('txtDate_deadline').value = '{{ $datas->date_deadline }}';
        document.getElementById('txtPreispitivano').value = '{{ $datas->preispitivano }}';
        document.getElementById('txtDate_close').value = '{{ $datas->date_close }}';
    </script>
@stop
