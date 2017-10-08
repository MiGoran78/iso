@extends('zapisi.preispit_rukov.main')
@section('content')

    <div class="container" style="font-family: 'Verdana'; margin: 0px; margin-right: 20px; padding: 5px; width: auto; height:100%" >

        <div class="col-md-9" style="margin: 0px; padding: 0px; padding-top: 15px">
            <div class="panel panel-primary" style="margin-bottom: 0px">
                <div class="panel-heading" style="padding-bottom: 4px; padding-top: 4px">
                    <b>Preispitivanje od strane rukovodsta, ciljevi kvaliteta</b>&nbsp;&nbsp;[Izmena zapisa]
                </div>

                <div class="panel-body">
                    <div id="tree1" style="padding: 20px; padding-top: 0px; padding-bottom: 0px">

                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif

                        {!! Form::open(['method'=>'PUT', 'action'=> ['PreispitRukController@update', $datas->id]]) !!}
                        {!! Form::hidden('id', $datas->id) !!}
                        {!! Form::hidden('idRef', date("ymdhms")) !!}

                        <div style="padding-bottom: 5px">
                            <div class="row" style="">
                                <div class="col-md-2" style="margin-top: 3px">
                                    Datum
                                </div>
                                <div class="col-md-4" style="padding-left: 0px">
                                    {!! Form::text('datum', $datas->datum, ['style'=>'width:100px; text-align: center', 'placeholder'=>'']) !!}
                                </div>
                                <div class="col-md-6">
                                </div>
                            </div>
                        </div>

                        <div style="padding-bottom: 5px; padding-top: 15px">
                            <div class="row" style="padding-bottom: 2px">
                                <div class="col-md-12" style="padding-bottom: 5px"><strong> Prisutni članovi </strong></div>

                                <div class="col-md-4" style="padding-top: 2px">
                                    {!! Form::text('clan_1', $datas->clan_1, ['style'=>'width:100%', 'placeholder'=>'ime i prezime']) !!}
                                </div>
                                <div class="col-md-3" style="margin-top: 3px; padding-left: 30px">
                                    {!! Form::text('funkcija_1', $datas->funkcija_1, ['style'=>'width:100%', 'placeholder'=>'funkcija']) !!}
                                </div>
                                <div class="col-md-5" style="padding-left: 0px; padding-top: 2px"></div>
                            </div>

                            <div class="row" style="padding-bottom: 2px">
                                <div class="col-md-4" style="padding-top: 2px">
                                    {!! Form::text('clan_2', $datas->clan_2, ['style'=>'width:100%', 'placeholder'=>'ime i prezime']) !!}
                                </div>
                                <div class="col-md-3" style="margin-top: 3px; padding-left: 30px">
                                    {!! Form::text('funkcija_2', $datas->funkcija_2, ['style'=>'width:100%', 'placeholder'=>'funkcija']) !!}
                                </div>
                                <div class="col-md-5" style="padding-left: 0px; padding-top: 2px"></div>
                            </div>

                            <div class="row" style="padding-bottom: 2px">
                                <div class="col-md-4" style="padding-top: 2px">
                                    {!! Form::text('clan_3', $datas->clan_3, ['style'=>'width:100%', 'placeholder'=>'ime i prezime']) !!}
                                </div>
                                <div class="col-md-3" style="margin-top: 3px; padding-left: 30px">
                                    {!! Form::text('funkcija_3', $datas->funkcija_3, ['style'=>'width:100%', 'placeholder'=>'funkcija']) !!}
                                </div>
                                <div class="col-md-5" style="padding-left: 0px; padding-top: 2px"></div>
                            </div>

                            <div class="row" style="padding-bottom: 2px">
                                <div class="col-md-4" style="padding-top: 2px">
                                    {!! Form::text('clan_4', $datas->clan_4, ['style'=>'width:100%', 'placeholder'=>'ime i prezime']) !!}
                                </div>
                                <div class="col-md-3" style="margin-top: 3px; padding-left: 30px">
                                    {!! Form::text('funkcija_4', $datas->funkcija_4, ['style'=>'width:100%', 'placeholder'=>'funkcija']) !!}
                                </div>
                                <div class="col-md-5" style="padding-left: 0px; padding-top: 2px"></div>
                            </div>

                            <div class="row" style="padding-bottom: 2px">
                                <div class="col-md-4" style="padding-top: 2px">
                                    {!! Form::text('clan_5', $datas->clan_5, ['style'=>'width:100%', 'placeholder'=>'ime i prezime']) !!}
                                </div>
                                <div class="col-md-3" style="margin-top: 3px; padding-left: 30px">
                                    {!! Form::text('funkcija_5', $datas->funkcija_5, ['style'=>'width:100%', 'placeholder'=>'funkcija']) !!}
                                </div>
                                <div class="col-md-5" style="padding-left: 0px; padding-top: 2px"></div>
                            </div>
                        </div>

                        <div style="padding-top:15px; padding-bottom: 12px; border-bottom: solid 1px #9d9d9d">
                            <div class="row" style="padding-bottom: 2px">
                                <div class="col-md-3" style="margin-top: 3px">
                                    Karakter preispitivanja
                                </div>
                                <div class="col-md-2" align="center">
                                    {!! Form::radio('karakter', '1', $datas->karakter==1 ? true : false , ['style'=>'width: 20px']) !!}
                                    redovno
                                </div>
                                <div class="col-md-7">
                                    {!! Form::radio('karakter', '2', $datas->karakter==2 ? true : false, ['style'=>'width: 20px']) !!}
                                    vanredno
                                </div>
                            </div>
                        </div>


                        <div style="padding-bottom: 5px; padding-top: 15px">
                            <div class="row" style="padding-bottom: 2px">
                                <div class="col-md-3" style="padding-top: 2px"> Politika upravljanja </div>
                                <div class="col-md-9" style="margin-top: 3px; padding-left: 30px">
                                    {!! Form::textarea('politika', $datas->politika, ['style'=>'resize: vertical; width:100%', 'rows'=>'2', 'placeholder'=>'...']) !!}
                                </div>
                            </div>

                            <div class="row" style="padding-bottom: 2px">
                                <div class="col-md-3" style="padding-top: 2px"> Ciljevi upravljanja </div>
                                <div class="col-md-9" style="margin-top: 3px; padding-left: 30px">
                                    {!! Form::textarea('ciljevi', $datas->ciljevi, ['style'=>'resize: vertical; width:100%', 'rows'=>'2', 'placeholder'=>'...']) !!}
                                </div>
                            </div>

                            <div class="row" style="padding-bottom: 2px">
                                <div class="col-md-3" style="padding-top: 2px"> Rezultat provera </div>
                                <div class="col-md-9" style="margin-top: 3px; padding-left: 30px">
                                    {!! Form::textarea('rezultat', $datas->rezultat, ['style'=>'resize: vertical; width:100%', 'rows'=>'2', 'placeholder'=>'...']) !!}
                                </div>
                            </div>

                            <div class="row" style="padding-bottom: 2px">
                                <div class="col-md-3" style="padding-top: 2px"> Prikupljanje informacija od naručioca posla </div>
                                <div class="col-md-9" style="margin-top: 3px; padding-left: 30px">
                                    {!! Form::textarea('informacije', $datas->informacije, ['style'=>'resize: vertical; width:100%', 'rows'=>'2', 'placeholder'=>'...']) !!}
                                </div>
                            </div>

                            <div class="row" style="padding-bottom: 2px">
                                <div class="col-md-3" style="padding-top: 2px"> Efektivnost procesa i usaglašenost proizvoda </div>
                                <div class="col-md-9" style="margin-top: 3px; padding-left: 30px">
                                    {!! Form::textarea('efektivnost', $datas->efektivnost, ['style'=>'resize: vertical; width:100%', 'rows'=>'2', 'placeholder'=>'...']) !!}
                                </div>
                            </div>

                            <div class="row" style="padding-bottom: 2px">
                                <div class="col-md-3" style="padding-top: 2px"> Status preventivnih i korektivnih mera </div>
                                <div class="col-md-9" style="margin-top: 3px; padding-left: 30px">
                                    {!! Form::textarea('status', $datas->status, ['style'=>'resize: vertical; width:100%', 'rows'=>'2', 'placeholder'=>'...']) !!}
                                </div>
                            </div>

                            <div class="row" style="padding-bottom: 2px">
                                <div class="col-md-3" style="padding-top: 2px"> Vrednovanje usaglašenosti sa zakonskim i dr. zahtevima </div>
                                <div class="col-md-9" style="margin-top: 3px; padding-left: 30px">
                                    {!! Form::textarea('vrednovanje', $datas->vrednovanje, ['style'=>'resize: vertical; width:100%', 'rows'=>'2', 'placeholder'=>'...']) !!}
                                </div>
                            </div>



                            <div class="row" style="padding-bottom: 2px">
                                <div class="col-md-3" style="padding-top: 2px"> Reagovanje zainteresovanih strana </div>
                                <div class="col-md-9" style="margin-top: 3px; padding-left: 30px">
                                    {!! Form::textarea('reakcija', $datas->reakcija, ['style'=>'resize: vertical; width:100%', 'rows'=>'2', 'placeholder'=>'...']) !!}
                                </div>
                            </div>

                            <div class="row" style="padding-bottom: 2px">
                                <div class="col-md-3" style="padding-top: 2px"> Učinak EMS i OHSAS </div>
                                <div class="col-md-9" style="margin-top: 3px; padding-left: 30px">
                                    {!! Form::textarea('ucinak', $datas->ucinak, ['style'=>'resize: vertical; width:100%', 'rows'=>'2', 'placeholder'=>'...']) !!}
                                </div>
                            </div>

                            <div class="row" style="padding-bottom: 2px">
                                <div class="col-md-3" style="padding-top: 2px"> Mere sa prethodnih ispitivanja </div>
                                <div class="col-md-9" style="margin-top: 3px; padding-left: 30px">
                                    {!! Form::textarea('mere', $datas->mere, ['style'=>'resize: vertical; width:100%', 'rows'=>'2', 'placeholder'=>'...']) !!}
                                </div>
                            </div>

                            <div class="row" style="padding-bottom: 2px">
                                <div class="col-md-3" style="padding-top: 2px"> Izmene koje mogu uticati na sistem upravljanja </div>
                                <div class="col-md-9" style="margin-top: 3px; padding-left: 30px">
                                    {!! Form::textarea('izmene', $datas->izmene, ['style'=>'resize: vertical; width:100%', 'rows'=>'2', 'placeholder'=>'...']) !!}
                                </div>
                            </div>

                            <div class="row" style="padding-bottom: 2px">
                                <div class="col-md-3" style="padding-top: 2px"> Preporuke za unapređenje </div>
                                <div class="col-md-9" style="margin-top: 3px; padding-left: 30px">
                                    {!! Form::textarea('preporuke', $datas->preporuke, ['style'=>'resize: vertical; width:100%', 'rows'=>'2', 'placeholder'=>'...']) !!}
                                </div>
                            </div>

                            <div class="row" style="padding-bottom: 2px">
                                <div class="col-md-3" style="padding-top: 2px"> Ostalo od značaja za sistem upravljanja kvalitetom </div>
                                <div class="col-md-9" style="margin-top: 3px; padding-left: 30px">
                                    {!! Form::textarea('ostalo', $datas->ostalo, ['style'=>'resize: vertical; width:100%', 'rows'=>'2', 'placeholder'=>'...']) !!}
                                </div>
                            </div>

                        </div>





                        <div class="form-group" align="center">
                            <br>
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
        objDatePicker("datum");
    </script>
    {{-- END DATE PICKER --}}

@stop
