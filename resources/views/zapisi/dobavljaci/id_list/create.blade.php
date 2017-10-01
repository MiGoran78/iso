@extends('zapisi.dobavljaci.main')
@section('content')

    <div class="container" style="font-family: 'Verdana'; margin: 0px; margin-right: 20px; padding: 5px; padding-top: 0px; width: auto; height:100%" >
        <table class="table" style="margin: 0px">
            <tr>
                <td  class="col-md-12" align="left">
                    <a href="/dobavljaci" class="btn btn-default" style="padding: 2px; padding-left: 8px; padding-right: 8px">Lista dobavljača</a>
                </td>
            </tr>
        </table>
    </div>


    <div class="container" style="font-family: 'Verdana'; margin: 0px; margin-right: 20px; padding: 5px; padding-top: 0px; width: auto; height:100%" >
        {{-- Pocetak sekcije--}}
        <div class="col-md-6" style="margin: 0px; padding: 0px">
            <div class="panel panel-primary" style="margin-bottom: 0px">
                <div class="panel-heading" style="padding-bottom: 4px; padding-top: 4px"><b>Novi dobavljač</b></div>
                <div class="panel-body">
                    <ul id="tree1" style="padding: 20px; padding-top: 0px; padding-bottom: 0px;">

                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif

                        {!! Form::open(['route'=>'zapisi.dobavljaci.id_list.store']) !!}
                            {!! Form::hidden('idRef', $idRef) !!}

                            <div style="border-bottom: solid 1px #9d9d9d; padding-bottom:15px">
                                <div class="row">
                                    <div class="col-md-12" style="padding-top: 3px">
                                        {!! Form::radio('dobavljac_tip', 'repromaterijal', false, ['style'=>'width: 20px']) !!}
                                        {!! Form::label('Dobavljač repromaterijala', '', ['style'=>'font-weight: normal']) !!}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12" style="padding-top: 3px">
                                        {!! Form::radio('dobavljac_tip', 'usluga', false, ['style'=>'width: 20px']) !!}
                                        {!! Form::label('Dobavljač usluga', '', ['style'=>'font-weight: normal']) !!}
                                    </div>
                                </div>
                            </div>

                            <div style="border-bottom: solid 1px #9d9d9d; padding-bottom:20px">
                                <h4 align="left" style="padding-left: 20px; padding-bottom: 5px"><strong> Osnovni podaci </strong></h4>

                                <div class="row" style="padding-bottom: 2px">
                                    <div class="col-md-4" style="padding-top: 3px">
                                        Dobavljač
                                    </div>
                                    <div class="col-md-8">
                                        {!! Form::text('dobavljac', '', ['style'=>'width:100%', 'placeholder'=>'...']) !!}
                                    </div>
                                </div>

                                <div class="row" style="padding-bottom: 2px">
                                    <div class="col-md-4" style="padding-top: 3px">
                                        Ulica
                                    </div>
                                    <div class="col-md-8">
                                        {!! Form::text('ulica', '', ['style'=>'width:100%', 'placeholder'=>'...']) !!}
                                    </div>
                                </div>

                                <div class="row" style="padding-bottom: 2px">
                                    <div class="col-md-4" style="padding-top: 3px">
                                        Mesto
                                    </div>
                                    <div class="col-md-8">
                                        {!! Form::text('mesto', '', ['style'=>'width:100%', 'placeholder'=>'...']) !!}
                                    </div>
                                </div>

                                <div class="row" style="padding-bottom: 2px">
                                    <div class="col-md-4" style="padding-top: 3px">
                                        Zemlja
                                    </div>
                                    <div class="col-md-8">
                                        {!! Form::text('zemlja', '', ['style'=>'width:100%', 'placeholder'=>'...']) !!}
                                    </div>
                                </div>

                                <div class="row" style="padding-bottom: 2px">
                                    <div class="col-md-4" style="padding-top: 3px">
                                        Kontakt osoba 1
                                    </div>
                                    <div class="col-md-8">
                                        {!! Form::text('kontakt1', '', ['style'=>'width:100%', 'placeholder'=>'...']) !!}
                                    </div>
                                </div>

                                <div class="row" style="padding-bottom: 2px">
                                    <div class="col-md-4" style="padding-top: 3px">
                                        Kontakt telefon 1
                                    </div>
                                    <div class="col-md-8">
                                        {!! Form::text('telefon1', '', ['style'=>'width:100%', 'placeholder'=>'...']) !!}
                                    </div>
                                </div>

                                <div class="row" style="padding-bottom: 2px">
                                    <div class="col-md-4" style="padding-top: 3px">
                                        Kontakt osoba 2
                                    </div>
                                    <div class="col-md-8">
                                        {!! Form::text('kontakt2', '', ['style'=>'width:100%', 'placeholder'=>'...']) !!}
                                    </div>
                                </div>

                                <div class="row" style="padding-bottom: 2px">
                                    <div class="col-md-4" style="padding-top: 3px">
                                        Kontakt telefon 2
                                    </div>
                                    <div class="col-md-8">
                                        {!! Form::text('telefon2', '', ['style'=>'width:100%', 'placeholder'=>'...']) !!}
                                    </div>
                                </div>
                            </div>


                            <div style="border-bottom: solid 1px #9d9d9d; padding-bottom:20px">
                                <h4 align="left" style="padding-left: 20px; padding-bottom: 5px"><strong> Sertifikati dobavljača </strong></h4>

                                <div class="row" style="padding-bottom: 1px">
                                    <div class="col-md-1">
                                        {!! Form::checkbox('sert_1', 'ISO 9001', false, ['style'=>'width: 15px; height: 15px']) !!}
                                    </div>
                                    <div class="col-md-5" style="padding-top: 1px"> ISO 9001 </div>

                                    <div class="col-md-3" style="padding-top: 1px">
                                        {!! Form::text('sert_br_1', '', ['style'=>'width:100%', 'placeholder'=>'broj']) !!}
                                    </div>
                                    <div class="col-md-3" style="padding-top: 1px">
                                        {!! Form::text('sert_rok_1', '', ['style'=>'width:100%', 'placeholder'=>'rok važenja']) !!}
                                    </div>
                                </div>

                                <div class="row" style="padding-bottom: 1px">
                                    <div class="col-md-1">
                                        {!! Form::checkbox('sert_2', 'ISO 14001', false, ['style'=>'width: 15px; height: 15px']) !!}
                                    </div>
                                    <div class="col-md-5" style="padding-top: 1px"> ISO 14001 </div>

                                    <div class="col-md-3" style="padding-top: 1px">
                                        {!! Form::text('sert_br_2', '', ['style'=>'width:100%', 'placeholder'=>'broj']) !!}
                                    </div>
                                    <div class="col-md-3" style="padding-top: 1px">
                                        {!! Form::text('sert_rok_2', '', ['style'=>'width:100%', 'placeholder'=>'rok važenja']) !!}
                                    </div>
                                </div>

                                <div class="row" style="padding-bottom: 1px">
                                    <div class="col-md-1">
                                        {!! Form::checkbox('sert_3', 'OHSAS 18001', false, ['style'=>'width: 15px; height: 15px']) !!}
                                    </div>
                                    <div class="col-md-5" style="padding-top: 1px"> OHSAS 18001 </div>

                                    <div class="col-md-3" style="padding-top: 1px">
                                        {!! Form::text('sert_br_3', '', ['style'=>'width:100%', 'placeholder'=>'broj']) !!}
                                    </div>
                                    <div class="col-md-3" style="padding-top: 1px">
                                        {!! Form::text('sert_rok_3', '', ['style'=>'width:100%', 'placeholder'=>'rok važenja']) !!}
                                    </div>
                                </div>

                                <div class="row" style="padding-bottom: 1px">
                                    <div class="col-md-1">
                                        {!! Form::checkbox('sert_4', 'FSC COC', false, ['style'=>'width: 15px; height: 15px']) !!}
                                    </div>
                                    <div class="col-md-5" style="padding-top: 1px"> FSC COC </div>

                                    <div class="col-md-3" style="padding-top: 1px">
                                        {!! Form::text('sert_br_4', '', ['style'=>'width:100%', 'placeholder'=>'broj']) !!}
                                    </div>
                                    <div class="col-md-3" style="padding-top: 1px">
                                        {!! Form::text('sert_rok_4', '', ['style'=>'width:100%', 'placeholder'=>'rok važenja']) !!}
                                    </div>
                                </div>

                                <div class="row" style="padding-bottom: 1px">
                                    <div class="col-md-1">
                                        {!! Form::checkbox('sert_5', 'FSC FM', false, ['style'=>'width: 15px; height: 15px']) !!}
                                    </div>
                                    <div class="col-md-5" style="padding-top: 1px"> FSC FM </div>

                                    <div class="col-md-3" style="padding-top: 1px">
                                        {!! Form::text('sert_br_5', '', ['style'=>'width:100%', 'placeholder'=>'broj']) !!}
                                    </div>
                                    <div class="col-md-3" style="padding-top: 1px">
                                        {!! Form::text('sert_rok_5', '', ['style'=>'width:100%', 'placeholder'=>'rok važenja']) !!}
                                    </div>
                                </div>

                                <div class="row" style="padding-bottom: 1px">
                                    <div class="col-md-6" style="padding-top: 1px">
                                        {!! Form::text('sert_6', '', ['style'=>'width:100%', 'placeholder'=>'naziv']) !!}
                                    </div>

                                    <div class="col-md-3" style="padding-top: 1px">
                                        {!! Form::text('sert_br_6', '', ['style'=>'width:100%', 'placeholder'=>'broj']) !!}
                                    </div>
                                    <div class="col-md-3" style="padding-top: 1px">
                                        {!! Form::text('sert_rok_6', '', ['style'=>'width:100%', 'placeholder'=>'rok važenja']) !!}
                                    </div>
                                </div>

                                <div class="row" style="padding-bottom: 1px">
                                    <div class="col-md-6" style="padding-top: 1px">
                                        {!! Form::text('sert_7', '', ['style'=>'width:100%', 'placeholder'=>'naziv']) !!}
                                    </div>

                                    <div class="col-md-3" style="padding-top: 1px">
                                        {!! Form::text('sert_br_7', '', ['style'=>'width:100%', 'placeholder'=>'broj']) !!}
                                    </div>
                                    <div class="col-md-3" style="padding-top: 1px">
                                        {!! Form::text('sert_rok_7', '', ['style'=>'width:100%', 'placeholder'=>'rok važenja']) !!}
                                    </div>
                                </div>

                                <div class="row" style="padding-bottom: 1px">
                                    <div class="col-md-6" style="padding-top: 1px">
                                        {!! Form::text('sert_8', '', ['style'=>'width:100%', 'placeholder'=>'naziv']) !!}
                                    </div>

                                    <div class="col-md-3" style="padding-top: 1px">
                                        {!! Form::text('sert_br_8', '', ['style'=>'width:100%', 'placeholder'=>'broj']) !!}
                                    </div>
                                    <div class="col-md-3" style="padding-top: 1px">
                                        {!! Form::text('sert_rok_8', '', ['style'=>'width:100%', 'placeholder'=>'rok važenja']) !!}
                                    </div>
                                </div>

                            </div>


                            <div class="form-group" align="center">
                                <br><br>
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
        objDatePicker("sert_rok_1");
        objDatePicker("sert_rok_2");
        objDatePicker("sert_rok_3");
        objDatePicker("sert_rok_4");
        objDatePicker("sert_rok_5");
        objDatePicker("sert_rok_6");
        objDatePicker("sert_rok_7");
        objDatePicker("sert_rok_8");
    </script>
    {{-- END DATE PICKER --}}

@stop
