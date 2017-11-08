@extends('zapisi.preispit_rukov.main')
@section('content')

    <?php
    $str_ul_1   = '1.&nbsp;&nbsp;&nbsp; Status mera iz prethodnih preispitivanja';
    $str_ul_2   = '2.&nbsp;&nbsp;&nbsp; Izmene u eksternim i internim pitanjima koje su relevantne za integrisani sistem menadžmenta';
    $str_ul_2_1 = '2.1&nbsp; Potrebe i očekivanja zainteresovanih strana, uključujući potrebe za usklađenost';
    $str_ul_2_2 = '2.2&nbsp; Značajni aspekti životne sredine i hazardi bezbednosti i zdravlja na radu';
    $str_ul_3   = '3.&nbsp;&nbsp; Informacije o performansama i efektinosti integrisanog sistema, uključujući politiku i trendove:';
    $str_ul_3_1 = '3.1&nbsp; Zadovoljstvom korisnika i povratnim informacijama od relevantnih zainteresovanih strana';
    $str_ul_3_2 = '3.2&nbsp; Obim ispunjenja ciljeva kvaliteta proizvoda, životne sredine i zaštite zdravlja, bezbednosti na radu';
    $str_ul_3_3 = '3.3&nbsp; Performanse procesa i usaglašenost proizvoda';
    $str_ul_3_4 = '3.4&nbsp; Neusaglašenost i korektivne mere';
    $str_ul_3_5 = '3.5&nbsp; Rezultati praćenja i merenja';
    $str_ul_3_6 = '3.6&nbsp; Ispunjenost obaveza za usklađenost';
    $str_ul_3_7 = '3.7&nbsp; Rezultati provera';
    $str_ul_3_8 = '3.8&nbsp; Performanse eksternih isporučilaca';
    $str_ul_3_9 = '3.9&nbsp; Politika IMS';
    $str_ul_4   = '4.&nbsp;&nbsp;&nbsp; Adekvatnost resursa';
    $str_ul_5   = '5.&nbsp;&nbsp;&nbsp; Efektivnost preduzetih mera';
    $str_ul_6   = '6.&nbsp;&nbsp;&nbsp; Reagovanje zainteresovanih strana';
    $str_ul_7   = '7.&nbsp;&nbsp;&nbsp; Prilike za stalna poboljšanja';
    $str_ul_8   = '8.&nbsp;&nbsp;&nbsp; EMS i OHSAS učinak organizacije';
    $str_ul_9   = '9.&nbsp;&nbsp;&nbsp; Status istraživanja incidenata i preventivnih mera OHSAS';
    $str_ul_10  = '10.&nbsp;&nbsp; Rezultati učešća i konsultacija OHSAS';

    $str_iz_1   = '1.&nbsp;&nbsp;&nbsp; Prilike za poboljšanje i potreba za izmenama u integrisanom sistemu upravljanja';
    $str_iz_2   = '2.&nbsp;&nbsp;&nbsp; Potreba za resursima';
    $str_iz_3   = '3.&nbsp;&nbsp;&nbsp; Pogodnost, adekvatnost i efektinost integrisanog sistema menadžmenta';
    $str_iz_4   = '4.&nbsp;&nbsp;&nbsp; Mere ukoliko ciljevi integrisanog sistema nisu ispunjeni';
    $str_iz_5   = '5.&nbsp;&nbsp;&nbsp; Učinak, politika i ciljevi';
    ?>


    <div class="container" style="font-family: 'Verdana'; margin: 0px; margin-right: 20px; padding: 5px; width: auto; height:100%" >

        <div class="col-md-9" style="margin: 0px; padding: 0px; padding-top: 15px">
            <div class="panel panel-primary" style="margin-bottom: 0px">
                <div class="panel-heading" style="padding-bottom: 4px; padding-top: 4px">
                    <b>U.POR.ZPR &nbsp;- &nbsp;Preispitivanje od strane rukovodsta, ciljevi kvaliteta</b>&nbsp;&nbsp;[Nov zapis]
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
                                    {!! Form::text('datum', '', ['class'=>'form-control', 'style'=>'width:130px; height: 28px; text-align: center', 'placeholder'=>'']) !!}
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






                        <div style="padding-top:10px; padding-bottom: 0px; border-top: solid 0px #9d9d9d">
                            <div class="row">
                                <div class="col-md-12"><h4> ULAZNI PODACI </h4></div>
                            </div>
                        </div>

                        <div style="padding-top:15px; padding-bottom: 12px; border-bottom: solid 1px #9d9d9d">
                            <div class="row" style="padding-bottom: 20px">
                                <div class="col-md-12"> {{ $str_ul_1 }} </div>
                                <div class="col-md-12" style="padding-left: 50px">
                                    {!! Form::textarea('ul_1', '', ['style'=>'resize: vertical; width:100%', 'rows'=>'2', 'placeholder'=>'...']) !!}
                                </div>
                            </div>

                            <div class="row" style="padding-bottom: 2px">
                                <div class="col-md-12"> {{ $str_ul_2 }} </div>
                                <div class="col-md-12" style="padding-left: 50px">
                                    {!! Form::textarea('ul_2', '', ['style'=>'resize: vertical; width:100%', 'rows'=>'2', 'placeholder'=>'...']) !!}
                                </div>
                            </div>

                            <div class="row" style="padding-bottom: 2px">
                                <div class="col-md-12"> {{ $str_ul_2_1 }} </div>
                                <div class="col-md-12" style="padding-left: 50px">
                                    {!! Form::textarea('ul_2_1', '', ['style'=>'resize: vertical; width:100%', 'rows'=>'2', 'placeholder'=>'...']) !!}
                                </div>
                            </div>

                            <div class="row" style="padding-bottom: 2px">
                                <div class="col-md-12"> {{ $str_ul_2_2 }} </div>
                                <div class="col-md-12" style="padding-left: 50px">
                                    {!! Form::textarea('ul_2_2', '', ['style'=>'resize: vertical; width:100%', 'rows'=>'2', 'placeholder'=>'...']) !!}
                                </div>
                            </div>

                            <div class="row" style="padding-top: 30px; padding-bottom: 15px">
                                <div class="col-md-12"><strong> {{ $str_ul_3 }} </strong></div>
                            </div>

                            <div class="row" style="padding-bottom: 2px">
                                <div class="col-md-12"> {{ $str_ul_3_1 }} </div>
                                <div class="col-md-12" style="padding-left: 50px">
                                    {!! Form::textarea('ul_3_1', '', ['style'=>'resize: vertical; width:100%', 'rows'=>'2', 'placeholder'=>'...']) !!}
                                </div>
                            </div>

                            <div class="row" style="padding-bottom: 2px">
                                <div class="col-md-12"> {{ $str_ul_3_2 }} </div>
                                <div class="col-md-12" style="padding-left: 50px">
                                    {!! Form::textarea('ul_3_2', '', ['style'=>'resize: vertical; width:100%', 'rows'=>'2', 'placeholder'=>'...']) !!}
                                </div>
                            </div>

                            <div class="row" style="padding-bottom: 2px">
                                <div class="col-md-12"> {{ $str_ul_3_3 }} </div>
                                <div class="col-md-12" style="padding-left: 50px">
                                    {!! Form::textarea('ul_3_3', '', ['style'=>'resize: vertical; width:100%', 'rows'=>'2', 'placeholder'=>'...']) !!}
                                </div>
                            </div>

                            <div class="row" style="padding-bottom: 2px">
                                <div class="col-md-12"> {{ $str_ul_3_4 }} </div>
                                <div class="col-md-12" style="padding-left: 50px">
                                    {!! Form::textarea('ul_3_4', '', ['style'=>'resize: vertical; width:100%', 'rows'=>'2', 'placeholder'=>'...']) !!}
                                </div>
                            </div>

                            <div class="row" style="padding-bottom: 2px">
                                <div class="col-md-12"> {{ $str_ul_3_5 }} </div>
                                <div class="col-md-12" style="padding-left: 50px">
                                    {!! Form::textarea('ul_3_5', '', ['style'=>'resize: vertical; width:100%', 'rows'=>'2', 'placeholder'=>'...']) !!}
                                </div>
                            </div>

                            <div class="row" style="padding-bottom: 2px">
                                <div class="col-md-12"> {{ $str_ul_3_6 }} </div>
                                <div class="col-md-12" style="padding-left: 50px">
                                    {!! Form::textarea('ul_3_6', '', ['style'=>'resize: vertical; width:100%', 'rows'=>'2', 'placeholder'=>'...']) !!}
                                </div>
                            </div>

                            <div class="row" style="padding-bottom: 2px">
                                <div class="col-md-12"> {{ $str_ul_3_7 }} </div>
                                <div class="col-md-12" style="padding-left: 50px">
                                    {!! Form::textarea('ul_3_7', '', ['style'=>'resize: vertical; width:100%', 'rows'=>'2', 'placeholder'=>'...']) !!}
                                </div>
                            </div>

                            <div class="row" style="padding-bottom: 2px">
                                <div class="col-md-12"> {{ $str_ul_3_8 }} </div>
                                <div class="col-md-12" style="padding-left: 50px">
                                    {!! Form::textarea('ul_3_8', '', ['style'=>'resize: vertical; width:100%', 'rows'=>'2', 'placeholder'=>'...']) !!}
                                </div>
                            </div>

                            <div class="row" style="padding-bottom: 2px">
                                <div class="col-md-12"> {{ $str_ul_3_9 }} </div>
                                <div class="col-md-12" style="padding-left: 50px">
                                    {!! Form::textarea('ul_3_9', '', ['style'=>'resize: vertical; width:100%', 'rows'=>'2', 'placeholder'=>'...']) !!}
                                </div>
                            </div>

                            <div class="row" style="padding-top: 20px">
                            </div>

                            <div class="row" style="padding-bottom: 2px">
                                <div class="col-md-12"> {{ $str_ul_4 }} </div>
                                <div class="col-md-12" style="padding-left: 50px">
                                    {!! Form::textarea('ul_4', '', ['style'=>'resize: vertical; width:100%', 'rows'=>'2', 'placeholder'=>'...']) !!}
                                </div>
                            </div>

                            <div class="row" style="padding-bottom: 2px">
                                <div class="col-md-12"> {{ $str_ul_5 }} </div>
                                <div class="col-md-12" style="padding-left: 50px">
                                    {!! Form::textarea('ul_5', '', ['style'=>'resize: vertical; width:100%', 'rows'=>'2', 'placeholder'=>'...']) !!}
                                </div>
                            </div>

                            <div class="row" style="padding-bottom: 2px">
                                <div class="col-md-12"> {{ $str_ul_6 }} </div>
                                <div class="col-md-12" style="padding-left: 50px">
                                    {!! Form::textarea('ul_6', '', ['style'=>'resize: vertical; width:100%', 'rows'=>'2', 'placeholder'=>'...']) !!}
                                </div>
                            </div>

                            <div class="row" style="padding-bottom: 2px">
                                <div class="col-md-12"> {{ $str_ul_7 }} </div>
                                <div class="col-md-12" style="padding-left: 50px">
                                    {!! Form::textarea('ul_7', '', ['style'=>'resize: vertical; width:100%', 'rows'=>'2', 'placeholder'=>'...']) !!}
                                </div>
                            </div>

                            <div class="row" style="padding-bottom: 2px">
                                <div class="col-md-12"> {{ $str_ul_8 }} </div>
                                <div class="col-md-12" style="padding-left: 50px">
                                    {!! Form::textarea('ul_8', '', ['style'=>'resize: vertical; width:100%', 'rows'=>'2', 'placeholder'=>'...']) !!}
                                </div>
                            </div>

                            <div class="row" style="padding-bottom: 2px">
                                <div class="col-md-12"> {{ $str_ul_9 }} </div>
                                <div class="col-md-12" style="padding-left: 50px">
                                    {!! Form::textarea('ul_9', '', ['style'=>'resize: vertical; width:100%', 'rows'=>'2', 'placeholder'=>'...']) !!}
                                </div>
                            </div>

                            <div class="row" style="padding-bottom: 2px">
                                <div class="col-md-12"> {{ $str_ul_10 }} </div>
                                <div class="col-md-12" style="padding-left: 50px">
                                    {!! Form::textarea('ul_10', '', ['style'=>'resize: vertical; width:100%', 'rows'=>'2', 'placeholder'=>'...']) !!}
                                </div>
                            </div>
                        </div>



                        <div style="padding-top:15px; padding-bottom: 0px; border-top: solid 0px #9d9d9d">
                            <div class="row">
                                <div class="col-md-12"><h4> IZLAZNI PODACI </h4></div>
                            </div>
                        </div>

                        <div style="padding-top:15px; padding-bottom: 12px; border-bottom: solid 1px #9d9d9d">
                            <div class="row" style="padding-bottom: 20px">
                                <div class="col-md-12"> {{ $str_iz_1 }} </div>
                                <div class="col-md-12" style="padding-left: 50px">
                                    {!! Form::textarea('iz_1', '', ['style'=>'resize: vertical; width:100%', 'rows'=>'2', 'placeholder'=>'...']) !!}
                                </div>
                            </div>

                            <div class="row" style="padding-bottom: 2px">
                                <div class="col-md-12"> {{ $str_iz_2 }} </div>
                                <div class="col-md-12" style="padding-left: 50px">
                                    {!! Form::textarea('iz_2', '', ['style'=>'resize: vertical; width:100%', 'rows'=>'2', 'placeholder'=>'...']) !!}
                                </div>
                            </div>

                            <div class="row" style="padding-bottom: 2px">
                                <div class="col-md-12"> {{ $str_iz_3 }} </div>
                                <div class="col-md-12" style="padding-left: 50px">
                                    {!! Form::textarea('iz_3', '', ['style'=>'resize: vertical; width:100%', 'rows'=>'2', 'placeholder'=>'...']) !!}
                                </div>
                            </div>

                            <div class="row" style="padding-bottom: 2px">
                                <div class="col-md-12"> {{ $str_iz_4 }} </div>
                                <div class="col-md-12" style="padding-left: 50px">
                                    {!! Form::textarea('iz_4', '', ['style'=>'resize: vertical; width:100%', 'rows'=>'2', 'placeholder'=>'...']) !!}
                                </div>
                            </div>

                            <div class="row" style="padding-bottom: 2px">
                                <div class="col-md-12"> {{ $str_iz_5 }} </div>
                                <div class="col-md-12" style="padding-left: 50px">
                                    {!! Form::textarea('iz_5', '', ['style'=>'resize: vertical; width:100%', 'rows'=>'2', 'placeholder'=>'...']) !!}
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

