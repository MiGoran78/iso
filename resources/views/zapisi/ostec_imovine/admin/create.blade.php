@extends('zapisi.ostec_imovine.main')
@section('content')

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>--}}
    {{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>--}}
    {{--<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">0</button>--}}
    {{--<div id="demo" class="collapse">--}}
    {{--</div>--}}


    <div class="container" style="font-family: 'Verdana'; margin: 0px; margin-right: 20px; padding: 5px; width: auto; height:100%" >
        <div class="col-md-9" style="margin: 0px; padding: 0px; padding-top: 15px">
            <div class="panel panel-primary" style="margin-bottom: 0px">

                <div class="panel-heading" style="padding-bottom: 4px; padding-top: 4px">
                    <div class="row">
                        <div class="col-md-11" style="margin-top: 3px">
                            <b>Oštećenje i gubutak imovine naručioca</b>&nbsp;&nbsp;[Nov zapis]
                        </div>
                    </div>
                </div>

                <div class="panel-body">
                    <div style="padding: 20px; padding-top: 0px; padding-bottom: 0px">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif

                        {!! Form::open(['method'=>'POST', 'action'=> ['OstecenjeImovineController@store']]) !!}
                            {{--{!! Form::hidden('id', $datas->id) !!}--}}
                            {!! Form::hidden('idRef', date("ymdhms")) !!}

                            <div style="padding-bottom: 5px">
                                <div class="row" style="">
                                    <div class="col-md-2" style="margin-top: 3px">
                                        Datum prijema
                                    </div>
                                    <div class="col-md-4" style="padding-left: 0px">
                                        {!! Form::text('datum_prijema', '', ['style'=>'width:100px; text-align: center', 'placeholder'=>'']) !!}
                                    </div>
                                    <div class="col-md-6">
                                    </div>
                                </div>
                            </div>

                            <div style="padding-bottom: 5px">
                                <div class="row" style="">
                                    <div class="col-md-2" style="margin-top: 3px">
                                        Naručilac
                                    </div>
                                    <div class="col-md-4" style="padding-left: 0px">
                                        {!! Form::text('narucilac', '', ['style'=>'width:100%', 'placeholder'=>'']) !!}
                                    </div>
                                    <div class="col-md-6">
                                    </div>
                                </div>
                            </div>

                            <div style="padding-bottom: 12px; border-bottom: solid 1px #9d9d9d">
                                <div class="row" style="padding-bottom: 2px">
                                    <div class="col-md-2" style="margin-top: 3px">
                                        Primalac
                                    </div>
                                    <div class="col-md-4" style="padding-left: 0px; padding-top: 2px">
                                        {!! Form::text('primalac', '', ['style'=>'width:100%', 'placeholder'=>'']) !!}
{{--                                        {!! Form::select('primalac', ['1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5', '6'=>'6'], '', ['class'=>'form-control',  'placeholder'=>'Izaberi', 'style'=>'height:26px; padding: 0px 6px;']) !!}--}}
                                    </div>
                                    <div class="col-md-6">
                                    </div>
                                </div>
                            </div>



                            <div style="padding-bottom: 5px; padding-top: 12px">
                                <div class="row" style="">
                                    <div class="col-md-2" style="margin-top: 3px">
                                        Naziv imovine
                                    </div>
                                    <div class="col-md-4" style="padding-left: 0px">
                                        {!! Form::text('naziv', '', ['style'=>'width:100%', 'placeholder'=>'']) !!}
                                    </div>
                                    <div class="col-md-6">
                                    </div>
                                </div>
                            </div>

                            <div style="padding-bottom: 5px; padding-top: 5px">
                                <div class="row" style="">
                                    <div class="col-md-2" style="margin-top: 3px">
                                        Radni nalog
                                    </div>
                                    <div class="col-md-4" style="padding-left: 0px">
                                        {!! Form::text('rn', '', ['style'=>'width:100%', 'placeholder'=>'']) !!}
                                    </div>
                                    <div class="col-md-6">
                                    </div>
                                </div>
                            </div>

                            <div style="padding-top:15px; padding-bottom: 12px; border-bottom: solid 1px #9d9d9d">
                                <div class="row" style="padding-bottom: 2px">
                                    <div class="col-md-2" style="margin-top: 3px">
                                        Stanje imovine
                                    </div>
                                    <div class="col-md-2" align="center">
                                        {!! Form::radio('stanje', '1', '' , ['style'=>'width: 20px']) !!}
                                        oštećenje
                                    </div>
                                    <div class="col-md-2">
                                        {!! Form::radio('stanje', '2', '', ['style'=>'width: 20px']) !!}
                                        gubitak
                                    </div>
                                    <div class="col-md-2">
                                        {!! Form::radio('stanje', '3', '' , ['style'=>'width: 20px']) !!}
                                        neupotrebljivo
                                    </div>
                                    <div class="col-md-4">
                                        {!! Form::radio('stanje', '4', '', ['style'=>'width: 20px']) !!}
                                        mora se dorađiati
                                    </div>
                                </div>
                            </div>


                            <div style="padding-top:10px; padding-bottom: 12px; border-bottom: solid 1px #9d9d9d">
                                <div class="row" style="">
                                    <div class="col-md-12" style="margin-top: 3px">
                                        Uzrok promene stanja imovine naručioca
                                    </div>
                                    <div class="col-md-12" style="padding-top: 5px">
                                        {!! Form::textarea('uzrok', '', ['style'=>'resize: vertical; width:100%', 'rows'=>'3', 'placeholder'=>'...']) !!}
                                    </div>

                                    <div class="col-md-3" style="margin-top: 3px">
                                        Datum utvrđivanja
                                    </div>
                                    <div class="col-md-9" style="padding-left: 0px; margin-top: 3px">
                                        {!! Form::text('uzrok_datum', '', ['style'=>'width:100px; text-align: center', 'placeholder'=>'']) !!}
                                    </div>
                                </div>
                            </div>


                            <div style="padding-top:10px; padding-bottom: 12px; border-bottom: solid 1px #9d9d9d">
                                <div class="row" style="">
                                    <div class="col-md-12" style="margin-top: 3px">
                                        Način obaveštavanja naručioca o postojećem stanju
                                    </div>
                                    <div class="col-md-12" style="padding-top: 5px">
                                        {!! Form::textarea('nacin_obav', '', ['style'=>'resize: vertical; width:100%', 'rows'=>'3', 'placeholder'=>'...']) !!}
                                    </div>

                                    <div class="col-md-3" style="margin-top: 3px">
                                        Datum obaveštavanja
                                    </div>
                                    <div class="col-md-9" style="padding-left: 0px; margin-top: 3px">
                                        {!! Form::text('nacin_obav_datum', '', ['style'=>'width:100px; text-align: center', 'placeholder'=>'']) !!}
                                    </div>
                                </div>
                            </div>


                            <div style="padding-top:10px; padding-bottom: 12px; border-bottom: solid 1px #9d9d9d">
                                <div class="row" style="">
                                    <div class="col-md-12" style="margin-top: 3px">
                                        Način rešavanja problema postojećeg stanja imovine naručioca
                                    </div>
                                    <div class="col-md-12" style="padding-top: 5px">
                                        {!! Form::textarea('nacin_resavanja', '', ['style'=>'resize: vertical; width:100%', 'rows'=>'3', 'placeholder'=>'...']) !!}
                                    </div>

                                    <div class="col-md-3" style="margin-top: 3px">
                                        Datum rešavanja problema
                                    </div>
                                    <div class="col-md-9" style="padding-left: 0px; margin-top: 3px">
                                        {!! Form::text('nacin_resavanja_datum', '', ['style'=>'width:100px; text-align: center', 'placeholder'=>'']) !!}
                                    </div>
                                </div>
                            </div>


                            <div class="form-group" align="center">
                                <br><br>
                                <button id="btnDodaj" class="btn btn-success">Dodaj</button>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
        {{-- Kraj sekcije--}}
    </div>





    {{-- DATE PICKER --}}
    <script>
        objDatePicker("datum_prijema");
        objDatePicker("uzrok_datum");
        objDatePicker("nacin_obav_datum");
        objDatePicker("nacin_resavanja_datum");
    </script>
    {{-- END DATE PICKER --}}


@stop
