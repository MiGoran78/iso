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
                <div class="panel-heading" style="padding-bottom: 4px; padding-top: 4px"><b>Izmena podataka o dobavljaču</b></div>
                <div class="panel-body">
                    <ul id="tree1" style="padding: 20px; padding-top: 0px; padding-bottom: 0px;">

                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif

                        {!! Form::open(['method'=>'PUT', 'action'=> ['DobavljacController@update', $datas->id]]) !!}
                            {!! Form::hidden('id', $datas->id) !!}
                            {!! Form::hidden('idRef', $datas->idRef) !!}

                            <div style="border-bottom: solid 1px #9d9d9d; padding-bottom:15px">
                                <div class="row">
                                    <div class="col-md-12" style="padding-top: 3px">
                                        {!! Form::radio('dobavljac_tip', 'repromaterijal', $datas->dobavljac_tip=='repromaterijal' ? true : false, ['style'=>'width: 20px']) !!}
                                        {!! Form::label('Dobavljač repromaterijala', '', ['style'=>'font-weight: normal']) !!}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12" style="padding-top: 3px">
                                        {!! Form::radio('dobavljac_tip', 'usluga', $datas->dobavljac_tip=='usluga' ? true : false, ['style'=>'width: 20px']) !!}
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
                                        {!! Form::text('dobavljac', $datas->dobavljac, ['style'=>'width:100%', 'placeholder'=>'...']) !!}
                                    </div>
                                </div>

                                <div class="row" style="padding-bottom: 2px">
                                    <div class="col-md-4" style="padding-top: 3px">
                                        Ulica
                                    </div>
                                    <div class="col-md-8">
                                        {!! Form::text('ulica', $datas->ulica, ['style'=>'width:100%', 'placeholder'=>'...']) !!}
                                    </div>
                                </div>

                                <div class="row" style="padding-bottom: 2px">
                                    <div class="col-md-4" style="padding-top: 3px">
                                        Mesto
                                    </div>
                                    <div class="col-md-8">
                                        {!! Form::text('mesto', $datas->mesto, ['style'=>'width:100%', 'placeholder'=>'...']) !!}
                                    </div>
                                </div>

                                <div class="row" style="padding-bottom: 2px">
                                    <div class="col-md-4" style="padding-top: 3px">
                                        Zemlja
                                    </div>
                                    <div class="col-md-8">
                                        {!! Form::text('zemlja', $datas->zemlja, ['style'=>'width:100%', 'placeholder'=>'...']) !!}
                                    </div>
                                </div>

                                <div class="row" style="padding-bottom: 2px">
                                    <div class="col-md-4" style="padding-top: 3px">
                                        Kontakt 1
                                    </div>
                                    <div class="col-md-4">
                                        {!! Form::text('kontakt1', $datas->kontakt1, ['style'=>'width:100%', 'placeholder'=>'Ime']) !!}
                                    </div>
                                    <div class="col-md-4">
                                        {!! Form::text('telefon1', $datas->telefon1, ['style'=>'width:100%', 'placeholder'=>'telefon']) !!}
                                    </div>
                                </div>

                                <div class="row" style="padding-bottom: 2px">
                                    <div class="col-md-4" style="padding-top: 3px">
                                        Kontakt 2
                                    </div>
                                    <div class="col-md-4">
                                        {!! Form::text('kontakt2', $datas->kontakt2, ['style'=>'width:100%', 'placeholder'=>'Ime']) !!}
                                    </div>
                                    <div class="col-md-4">
                                        {!! Form::text('telefon2', $datas->telefon2, ['style'=>'width:100%', 'placeholder'=>'telefon']) !!}
                                    </div>
                                </div>
                            </div>


                            <div style="border-bottom: solid 1px #9d9d9d; padding-bottom:20px">
                                <h4 align="left" style="padding-left: 20px; padding-bottom: 5px"><strong> Sertifikati dobavljača </strong></h4>

                                <div class="row" style="padding-bottom: 1px">
                                    <div class="col-md-1">
                                        {!! Form::checkbox('sert_1', 'ISO 9001', $datas->sert_1, ['style'=>'width: 15px; height: 15px']) !!}
                                    </div>
                                    <div class="col-md-5" style="padding-top: 1px"> ISO 9001 </div>

                                    <div class="col-md-3" style="padding-top: 1px">
                                        {!! Form::text('sert_br_1', $datas->sert_br_1, ['style'=>'width:100%', 'placeholder'=>'broj']) !!}
                                    </div>
                                    <div class="col-md-3" style="padding-top: 1px">
                                        {!! Form::text('sert_rok_1', $datas->sert_rok_1, ['style'=>'width:100%', 'placeholder'=>'rok važenja']) !!}
                                    </div>
                                </div>

                                <div class="row" style="padding-bottom: 1px">
                                    <div class="col-md-1">
                                        {!! Form::checkbox('sert_2', 'ISO 14001', $datas->sert_2, ['style'=>'width: 15px; height: 15px']) !!}
                                    </div>
                                    <div class="col-md-5" style="padding-top: 1px"> ISO 14001 </div>

                                    <div class="col-md-3" style="padding-top: 1px">
                                        {!! Form::text('sert_br_2', $datas->sert_br_2, ['style'=>'width:100%', 'placeholder'=>'broj']) !!}
                                    </div>
                                    <div class="col-md-3" style="padding-top: 1px">
                                        {!! Form::text('sert_rok_2', $datas->sert_rok_2, ['style'=>'width:100%', 'placeholder'=>'rok važenja']) !!}
                                    </div>
                                </div>

                                <div class="row" style="padding-bottom: 1px">
                                    <div class="col-md-1">
                                        {!! Form::checkbox('sert_3', 'OHSAS 18001', $datas->sert_3, ['style'=>'width: 15px; height: 15px']) !!}
                                    </div>
                                    <div class="col-md-5" style="padding-top: 1px"> OHSAS 18001 </div>

                                    <div class="col-md-3" style="padding-top: 1px">
                                        {!! Form::text('sert_br_3', $datas->sert_br_3, ['style'=>'width:100%', 'placeholder'=>'broj']) !!}
                                    </div>
                                    <div class="col-md-3" style="padding-top: 1px">
                                        {!! Form::text('sert_rok_3', $datas->sert_rok_3, ['style'=>'width:100%', 'placeholder'=>'rok važenja']) !!}
                                    </div>
                                </div>

                                <div class="row" style="padding-bottom: 1px">
                                    <div class="col-md-1">
                                        {!! Form::checkbox('sert_4', 'FSC COC', $datas->sert_4, ['style'=>'width: 15px; height: 15px']) !!}
                                    </div>
                                    <div class="col-md-5" style="padding-top: 1px"> FSC COC </div>

                                    <div class="col-md-3" style="padding-top: 1px">
                                        {!! Form::text('sert_br_4', $datas->sert_br_4, ['style'=>'width:100%', 'placeholder'=>'broj']) !!}
                                    </div>
                                    <div class="col-md-3" style="padding-top: 1px">
                                        {!! Form::text('sert_rok_4', $datas->sert_rok_4, ['style'=>'width:100%', 'placeholder'=>'rok važenja']) !!}
                                    </div>
                                </div>

                                <div class="row" style="padding-bottom: 1px">
                                    <div class="col-md-1">
                                        {!! Form::checkbox('sert_5', 'FSC FM', $datas->sert_5, ['style'=>'width: 15px; height: 15px']) !!}
                                    </div>
                                    <div class="col-md-5" style="padding-top: 1px"> FSC FM </div>

                                    <div class="col-md-3" style="padding-top: 1px">
                                        {!! Form::text('sert_br_5', $datas->sert_br_5, ['style'=>'width:100%', 'placeholder'=>'broj']) !!}
                                    </div>
                                    <div class="col-md-3" style="padding-top: 1px">
                                        {!! Form::text('sert_rok_5', $datas->sert_rok_5, ['style'=>'width:100%', 'placeholder'=>'rok važenja']) !!}
                                    </div>
                                </div>

                                <div class="row" style="padding-bottom: 1px">
                                    <div class="col-md-6" style="padding-top: 1px">
                                        {!! Form::text('sert_6', $datas->sert_6, ['style'=>'width:100%', 'placeholder'=>'naziv']) !!}
                                    </div>

                                    <div class="col-md-3" style="padding-top: 1px">
                                        {!! Form::text('sert_br_6', $datas->sert_br_6, ['style'=>'width:100%', 'placeholder'=>'broj']) !!}
                                    </div>
                                    <div class="col-md-3" style="padding-top: 1px">
                                        {!! Form::text('sert_rok_6', $datas->sert_rok_6, ['style'=>'width:100%', 'placeholder'=>'rok važenja']) !!}
                                    </div>
                                </div>

                                <div class="row" style="padding-bottom: 1px">
                                    <div class="col-md-6" style="padding-top: 1px">
                                        {!! Form::text('sert_7', $datas->sert_7, ['style'=>'width:100%', 'placeholder'=>'naziv']) !!}
                                    </div>

                                    <div class="col-md-3" style="padding-top: 1px">
                                        {!! Form::text('sert_br_7', $datas->sert_br_7, ['style'=>'width:100%', 'placeholder'=>'broj']) !!}
                                    </div>
                                    <div class="col-md-3" style="padding-top: 1px">
                                        {!! Form::text('sert_rok_7', $datas->sert_rok_7, ['style'=>'width:100%', 'placeholder'=>'rok važenja']) !!}
                                    </div>
                                </div>

                                <div class="row" style="padding-bottom: 1px">
                                    <div class="col-md-6" style="padding-top: 1px">
                                        {!! Form::text('sert_8', $datas->sert_8, ['style'=>'width:100%', 'placeholder'=>'naziv']) !!}
                                    </div>

                                    <div class="col-md-3" style="padding-top: 1px">
                                        {!! Form::text('sert_br_8', $datas->sert_br_8, ['style'=>'width:100%', 'placeholder'=>'broj']) !!}
                                    </div>
                                    <div class="col-md-3" style="padding-top: 1px">
                                        {!! Form::text('sert_rok_8', $datas->sert_rok_8, ['style'=>'width:100%', 'placeholder'=>'rok važenja']) !!}
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

@stop
