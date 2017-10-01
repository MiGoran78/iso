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
                        {!! Form::hidden('id', $id) !!}
                        {!! Form::hidden('idRef', $ref) !!}
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
                <div class="panel-heading"><strong>Nova korektivna mera</strong></div>
                <div class="panel-body">
                    <ul id="tree1" style="padding: 20px;padding-top: 0px; padding-bottom: 0px">

                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif

                        {!! Form::open(['route'=>'zapisi.korektivna_mera.admin.store']) !!}
                                {!! Form::hidden('date_open', $datum) !!}
                                {!! Form::hidden('idRef', $ref) !!}
                                {!! Form::hidden('client_id', $id) !!}

                                <div class="row">
                                    <div class="col-md-6" align="left">
                                        Datum: {{ date('d-m-Y', strtotime($datum)) }}
                                    </div>
                                    <div class="col-md-6" align="right">
                                        Ref: {{ $ref }}
                                    </div>
                                    <hr style="border: solid 1px cornflowerblue; margin-bottom: 10px">
                                </div>

                                <div>
                                    <h5>Korektivna mera:</h5>
                                    {!! Form::textarea('kor_mera', '', ['class'=>'form-control', 'rows'=>'3', 'placeholder'=>'...']) !!}
                                    <br>
                                </div>
                                <div>
                                    <h5>Vlasnik:</h5>
                                    {!! Form::text('vlasnik', '', ['class'=>'form-control', 'placeholder'=>'...']) !!}
                                    <br>
                                </div>
                                <div>
                                    <h5>Rok za sprovodjenje:</h5>
                                    {!! Form::text('date_deadline', '', ['class'=>'form-control', 'placeholder'=>'dd.mm.yyyy']) !!}
                                    <br>
                                </div>
                                <div>
                                    <h5>Preispitivano:</h5>
                                    {!! Form::textarea('preispitivano', '', ['class'=>'form-control', 'rows'=>'3', 'placeholder'=>'...']) !!}
                                    <br>
                                </div>
                                <div>
                                    <h5>Datum zatvaranja:</h5>
                                    {!! Form::text('date_close', '', ['class'=>'form-control', 'placeholder'=>'dd.mm.yyyy']) !!}
                                    <br>
                                </div>

                                <div class="form-group" align="center">
                                    <button id="btnDodaj" class="btn btn-success">Dodaj</button>
                                </div>
                        {!! Form::close() !!}

                    </ul>
                </div>
            </div>
        </div>
        {{-- Kraj sekcije--}}

    </div>


    {{-- DATE PICKER --}}
    <link rel="stylesheet" href="/css/bootstrap-datepicker3.css"/>
    <script type="text/javascript" src="/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="/js/objDatePicker.js"></script>

    <script>
        objDatePicker("date_deadline");
        objDatePicker("date_close");
    </script>
    {{-- END DATE PICKER --}}


@stop
