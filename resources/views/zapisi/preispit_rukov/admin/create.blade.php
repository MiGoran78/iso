@extends('zapisi.preispit_rukov.main')
@section('content')

    <div class="container" style="font-family: 'Verdana'; margin: 0px; margin-right: 20px; padding: 5px; width: auto; height:100%" >

        <div class="col-md-9" style="margin: 0px; padding: 0px; padding-top: 15px">
            <div class="panel panel-primary" style="margin-bottom: 0px">
                <div class="panel-heading" style="padding-bottom: 4px; padding-top: 4px">
                    <b>Preispitivanje od strane rukovodsta, ciljevi kvaliteta</b>&nbsp;&nbsp;[Nov zapis]
                </div>

                <div class="panel-body">
                    <div id="tree1" style="padding: 20px; padding-top: 0px; padding-bottom: 0px">

                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif

                        {!! Form::open(['method'=>'POST', 'action'=> ['PreispitRukController@store']]) !!}
                        {{--{!! Form::hidden('id', $datas->id) !!}--}}
                        {!! Form::hidden('idRef', date("ymdhms")) !!}

                        <div style="padding-bottom: 5px">
                            <div class="row" style="">
                                <div class="col-md-2" style="margin-top: 3px">
                                    Datum
                                </div>
                                <div class="col-md-4" style="padding-left: 0px">
                                    {!! Form::text('datum', '', ['style'=>'width:100px; text-align: center', 'placeholder'=>'']) !!}
                                </div>
                                <div class="col-md-6" align="right">
                                    <button type="button" data-toggle="modal" data-target="#ciljevi_kv" class="btn btn-warning">Ciljevi kvaliteta</button>

                                    <!-- Modal -->
                                    <div class="modal fade" role="dialog" id="ciljevi_kv">
                                        <div class="modal-dialog">
                                            <!-- Modal content-->
                                            <div class="modal-content" align="center">
                                                <div class="modal-header">  <h4 style="font-family: 'Lato'" class="modal-title">Ciljevi kvaliteta</h4>  </div>

                                                <div class="modal-body">
                                                    <div class="row" style="padding-bottom: 2px">
                                                        <div class="col-md-12" style="margin-top: 3px">
                                                            {!! Form::textarea('ciljevi_izvestaj', '', ['style'=>'resize: vertical; width:100%', 'rows'=>'15', 'placeholder'=>'...']) !!}
                                                        </div>
                                                    </div>

                                                    <div class="row" style="padding-bottom: 2px">
                                                        <div class="col-md-4" style="padding-top: 10px">
                                                            {!! Form::text('odobrio_datum', '', ['style'=>'width:100%; text-align:center', 'placeholder'=>'datum odobrenja']) !!}
                                                        </div>
                                                        <div class="col-md-1" style="padding-top: 10px"></div>
                                                        <div class="col-md-7" style="padding-top: 10px">
                                                            {!! Form::text('odobrio_ime', '', ['style'=>'width:100%; text-align:center', 'placeholder'=>'odobrio']) !!}
                                                        </div>
                                                    </div>

                                                </div>
                                                {{--<div class="modal-footer"> </div>--}}
                                            </div>
                                        </div>
                                    </div>
                                    {{--=============--}}
                                </div>
                            </div>
                        </div>

                        <div style="padding-bottom: 5px; padding-top: 15px">
                            <div class="row" style="padding-bottom: 2px">
                                <div class="col-md-12" style="padding-bottom: 5px"><strong> Prisutni članovi </strong></div>

                                <div class="col-md-4" style="padding-top: 2px">
                                    {!! Form::text('clan_1', '', ['style'=>'width:100%', 'placeholder'=>'ime i prezime']) !!}
                                </div>
                                <div class="col-md-3" style="margin-top: 3px; padding-left: 30px">
                                    {!! Form::text('funkcija_1', '', ['style'=>'width:100%', 'placeholder'=>'funkcija']) !!}
                                </div>
                                <div class="col-md-5" style="padding-left: 0px; padding-top: 2px"></div>
                            </div>

                            <div class="row" style="padding-bottom: 2px">
                                <div class="col-md-4" style="padding-top: 2px">
                                    {!! Form::text('clan_2', '', ['style'=>'width:100%', 'placeholder'=>'ime i prezime']) !!}
                                </div>
                                <div class="col-md-3" style="margin-top: 3px; padding-left: 30px">
                                    {!! Form::text('funkcija_2', '', ['style'=>'width:100%', 'placeholder'=>'funkcija']) !!}
                                </div>
                                <div class="col-md-5" style="padding-left: 0px; padding-top: 2px"></div>
                            </div>

                            <div class="row" style="padding-bottom: 2px">
                                <div class="col-md-4" style="padding-top: 2px">
                                    {!! Form::text('clan_3', '', ['style'=>'width:100%', 'placeholder'=>'ime i prezime']) !!}
                                </div>
                                <div class="col-md-3" style="margin-top: 3px; padding-left: 30px">
                                    {!! Form::text('funkcija_3', '', ['style'=>'width:100%', 'placeholder'=>'funkcija']) !!}
                                </div>
                                <div class="col-md-5" style="padding-left: 0px; padding-top: 2px"></div>
                            </div>

                            <div class="row" style="padding-bottom: 2px">
                                <div class="col-md-4" style="padding-top: 2px">
                                    {!! Form::text('clan_4', '', ['style'=>'width:100%', 'placeholder'=>'ime i prezime']) !!}
                                </div>
                                <div class="col-md-3" style="margin-top: 3px; padding-left: 30px">
                                    {!! Form::text('funkcija_4', '', ['style'=>'width:100%', 'placeholder'=>'funkcija']) !!}
                                </div>
                                <div class="col-md-5" style="padding-left: 0px; padding-top: 2px"></div>
                            </div>

                            <div class="row" style="padding-bottom: 2px">
                                <div class="col-md-4" style="padding-top: 2px">
                                    {!! Form::text('clan_5', '', ['style'=>'width:100%', 'placeholder'=>'ime i prezime']) !!}
                                </div>
                                <div class="col-md-3" style="margin-top: 3px; padding-left: 30px">
                                    {!! Form::text('funkcija_5', '', ['style'=>'width:100%', 'placeholder'=>'funkcija']) !!}
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
                                    {!! Form::radio('karakter', '1', '' , ['style'=>'width: 20px']) !!}
                                    redovno
                                </div>
                                <div class="col-md-7">
                                    {!! Form::radio('karakter', '2', '', ['style'=>'width: 20px']) !!}
                                    vanredno
                                </div>
                            </div>
                        </div>


                        <div style="padding-top:15px; padding-bottom: 12px; border-bottom: solid 1px #9d9d9d">
                            <div class="row" style="padding-bottom: 2px">
                                <div class="col-md-3" style="padding-top: 2px"> Politika upravljanja </div>
                                <div class="col-md-9" style="margin-top: 3px; padding-left: 30px">
                                    {!! Form::textarea('politika', '', ['style'=>'resize: vertical; width:100%', 'rows'=>'2', 'placeholder'=>'...']) !!}
                                </div>
                            </div>

                            <div class="row" style="padding-bottom: 2px">
                                <div class="col-md-3" style="padding-top: 2px"> Ciljevi upravljanja </div>
                                <div class="col-md-9" style="margin-top: 3px; padding-left: 30px">
                                    {!! Form::textarea('ciljevi', '', ['style'=>'resize: vertical; width:100%', 'rows'=>'2', 'placeholder'=>'...']) !!}
                                </div>
                            </div>

                            <div class="row" style="padding-bottom: 2px">
                                <div class="col-md-3" style="padding-top: 2px"> Rezultat provera </div>
                                <div class="col-md-9" style="margin-top: 3px; padding-left: 30px">
                                    {!! Form::textarea('rezultat', '', ['style'=>'resize: vertical; width:100%', 'rows'=>'2', 'placeholder'=>'...']) !!}
                                </div>
                            </div>

                            <div class="row" style="padding-bottom: 2px">
                                <div class="col-md-3" style="padding-top: 2px"> Prikupljanje informacija od naručioca posla </div>
                                <div class="col-md-9" style="margin-top: 3px; padding-left: 30px">
                                    {!! Form::textarea('informacije', '', ['style'=>'resize: vertical; width:100%', 'rows'=>'2', 'placeholder'=>'...']) !!}
                                </div>
                            </div>

                            <div class="row" style="padding-bottom: 2px">
                                <div class="col-md-3" style="padding-top: 2px"> Efektivnost procesa i usaglašenost proizvoda </div>
                                <div class="col-md-9" style="margin-top: 3px; padding-left: 30px">
                                    {!! Form::textarea('efektivnost', '', ['style'=>'resize: vertical; width:100%', 'rows'=>'2', 'placeholder'=>'...']) !!}
                                </div>
                            </div>

                            <div class="row" style="padding-bottom: 2px">
                                <div class="col-md-3" style="padding-top: 2px"> Status preventivnih i korektivnih mera </div>
                                <div class="col-md-9" style="margin-top: 3px; padding-left: 30px">
                                    {!! Form::textarea('status', '', ['style'=>'resize: vertical; width:100%', 'rows'=>'2', 'placeholder'=>'...']) !!}
                                </div>
                            </div>

                            <div class="row" style="padding-bottom: 2px">
                                <div class="col-md-3" style="padding-top: 2px"> Vrednovanje usaglašenosti sa zakonskim i dr. zahtevima </div>
                                <div class="col-md-9" style="margin-top: 3px; padding-left: 30px">
                                    {!! Form::textarea('vrednovanje', '', ['style'=>'resize: vertical; width:100%', 'rows'=>'2', 'placeholder'=>'...']) !!}
                                </div>
                            </div>



                            <div class="row" style="padding-bottom: 2px">
                                <div class="col-md-3" style="padding-top: 2px"> Reagovanje zainteresovanih strana </div>
                                <div class="col-md-9" style="margin-top: 3px; padding-left: 30px">
                                    {!! Form::textarea('reakcija', '', ['style'=>'resize: vertical; width:100%', 'rows'=>'2', 'placeholder'=>'...']) !!}
                                </div>
                            </div>

                            <div class="row" style="padding-bottom: 2px">
                                <div class="col-md-3" style="padding-top: 2px"> Učinak EMS i OHSAS </div>
                                <div class="col-md-9" style="margin-top: 3px; padding-left: 30px">
                                    {!! Form::textarea('ucinak', '', ['style'=>'resize: vertical; width:100%', 'rows'=>'2', 'placeholder'=>'...']) !!}
                                </div>
                            </div>

                            <div class="row" style="padding-bottom: 2px">
                                <div class="col-md-3" style="padding-top: 2px"> Mere sa prethodnih ispitivanja </div>
                                <div class="col-md-9" style="margin-top: 3px; padding-left: 30px">
                                    {!! Form::textarea('mere', '', ['style'=>'resize: vertical; width:100%', 'rows'=>'2', 'placeholder'=>'...']) !!}
                                </div>
                            </div>

                            <div class="row" style="padding-bottom: 2px">
                                <div class="col-md-3" style="padding-top: 2px"> Izmene koje mogu uticati na sistem upravljanja </div>
                                <div class="col-md-9" style="margin-top: 3px; padding-left: 30px">
                                    {!! Form::textarea('izmene', '', ['style'=>'resize: vertical; width:100%', 'rows'=>'2', 'placeholder'=>'...']) !!}
                                </div>
                            </div>

                            <div class="row" style="padding-bottom: 2px">
                                <div class="col-md-3" style="padding-top: 2px"> Preporuke za unapređenje </div>
                                <div class="col-md-9" style="margin-top: 3px; padding-left: 30px">
                                    {!! Form::textarea('preporuke', '', ['style'=>'resize: vertical; width:100%', 'rows'=>'2', 'placeholder'=>'...']) !!}
                                </div>
                            </div>

                            <div class="row" style="padding-bottom: 2px">
                                <div class="col-md-3" style="padding-top: 2px"> Ostalo od značaja za sistem upravljanja kvalitetom </div>
                                <div class="col-md-9" style="margin-top: 3px; padding-left: 30px">
                                    {!! Form::textarea('ostalo', '', ['style'=>'resize: vertical; width:100%', 'rows'=>'2', 'placeholder'=>'...']) !!}
                                </div>
                            </div>
                        </div>


                        <div style="padding-top:15px; padding-bottom: 12px; border-bottom: solid 1px #9d9d9d">
                            <div class="row" style="padding-bottom: 2px">
                                <div class="col-md-3" style="padding-top: 2px"> Unapređenje efikasnosti sistema upravljanja </div>
                                <div class="col-md-9" style="margin-top: 3px; padding-left: 30px">
                                    {!! Form::textarea('rez_efikas', '', ['style'=>'resize: vertical; width:100%', 'rows'=>'2', 'placeholder'=>'...']) !!}
                                </div>
                            </div>

                            <div class="row" style="padding-bottom: 2px">
                                <div class="col-md-3" style="padding-top: 2px"> Unapređenje zahteva kupaca koje se odnose na proizvod, EMS i OHSAS </div>
                                <div class="col-md-9" style="margin-top: 3px; padding-left: 30px">
                                    {!! Form::textarea('rez_zahte', '', ['style'=>'resize: vertical; width:100%', 'rows'=>'2', 'placeholder'=>'...']) !!}
                                </div>
                            </div>

                            <div class="row" style="padding-bottom: 2px">
                                <div class="col-md-3" style="padding-top: 2px"> Potreba za resursima </div>
                                <div class="col-md-9" style="margin-top: 3px; padding-left: 30px">
                                    {!! Form::textarea('rez_potreba', '', ['style'=>'resize: vertical; width:100%', 'rows'=>'2', 'placeholder'=>'...']) !!}
                                </div>
                            </div>

                            <div class="row" style="padding-bottom: 2px">
                                <div class="col-md-3" style="padding-top: 2px"> Ciljevi i planovi kvaliteta za naredni period </div>
                                <div class="col-md-9" style="margin-top: 3px; padding-left: 30px">
                                    {!! Form::textarea('rez_ciljevi', '', ['style'=>'resize: vertical; width:100%', 'rows'=>'2', 'placeholder'=>'...']) !!}
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
        objDatePicker("odobrio_datum");
    </script>
    {{-- END DATE PICKER --}}

@stop
