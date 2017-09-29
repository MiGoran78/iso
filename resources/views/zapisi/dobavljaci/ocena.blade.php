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
        <div class="col-md-9" style="margin: 0px; padding: 0px">
            <div class="panel panel-primary" style="margin-bottom: 0px">

                <div class="panel-heading" style="padding-bottom: 4px; padding-top: 4px">
                    <div class="row">
                        <div class="col-md-4" style="padding-top: 3px">
                            <b>Ocena dobavljača</b>
                        </div>
                        <div class="col-md-5" style="padding-top: 3px" align="right">
                            Ocena:
                            {!! Form::label('ocena', $datas->ocena, ['style'=>'font-weight: normal', 'id'=>'ocena']) !!}
                        </div>
                        <div class="col-md-3" style="padding-top: 3px" align="center">
                            {!! Form::label('prihatljiv', $datas->prihatljiv, ['style'=>'font-weight: normal', 'id'=>'prihatljiv']) !!}
                        </div>
                    </div>
                </div>

                <div class="panel-body">
                    <ul id="tree1" style="padding: 20px; padding-top: 0px; padding-bottom: 0px;">

                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif

                        {!! Form::open(['method'=>'POST', 'action'=> ['DobavljacController@ocena_upd']]) !!}
                            {!! Form::hidden('id', $datas->id) !!}
                            {!! Form::hidden('idRef', $datas->idRef) !!}

                            <div style="border-bottom: solid 0px #9d9d9d; padding-bottom:20px">
                                <div class="row" style="padding-bottom: 2px">
                                    <div class="col-md-4">
                                        Datum ocene &nbsp;
                                        {!! Form::text('datum', $datas->datum, ['style'=>'width:100px; text-align: center', 'placeholder'=>'']) !!}
                                    </div>
                                    <div class="col-md-4" align="right">
                                        Rok važenja &nbsp;
                                        {!! Form::text('rok_vazenja', $datas->rok_vazenja, ['style'=>'width:40px; text-align: center', 'placeholder'=>'']) !!}
                                        &nbsp;meseci
                                    </div>
                                    <div class="col-md-4" align="right"></div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-12" style="padding-top: 3px">
                                    {!! Form::label('STATUS:', '', ['style'=>'font-weight: normal']) !!}
                                </div>
                                <div class="col-md-12" style="padding-top: 3px">
                                    {!! Form::radio('status', 'otvorena', ($datas->status=='otvorena' ? true:false) , ['style'=>'width: 20px']) !!}
                                    {!! Form::label('otvorena', '', ['style'=>'font-weight: normal']) !!}
                                </div>
                                <div class="col-md-12" style="padding-top: 3px" align="left">
                                    {!! Form::radio('status', 'zatvorena', ($datas->status=='zatvorena' ? true:false), ['style'=>'width: 20px']) !!}
                                    {!! Form::label('zatvorena', '', ['style'=>'font-weight: normal']) !!}
                                </div>
                            </div>


                            <div style="border-bottom: solid 1px #9d9d9d; padding-bottom:10px">
                                <h5 align="left" style="padding-left: 0px; padding-bottom: 0px; padding-top: 10px"> Poslednja reklamacija </h5>

                                <div class="row" style="padding-bottom: 1px">
                                    <div class="col-md-12" style="padding-top: 1px">
                                        {!! Form::textarea('opis', $datas->opis, ['style'=>'resize: vertical; width:100%', 'rows'=>'4', 'placeholder'=>'...']) !!}
                                    </div>
                                </div>
                            </div>


                            <div style="margin-bottom: 5px; padding-top:10px">
                                <div class="row" style="padding-bottom: 2px; height: auto">
                                    <div class="col-md-1" style="padding-right: 0px">
                                        <label style="text-align: center; color: white; background: red; border-radius: 20%; width:25px; height:25px; padding-top: 1px">Q</label>
                                    </div>
                                    <div class="col-md-3" style="padding-left: 0px">
                                        Kvalitet
                                    </div>
                                    <div class="col-md-2" style="padding-left: 0px">
                                        {!! Form::select('q', ['1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5', '6'=>'6', '7'=>'7', '8'=>'8'], $datas->q, ['class'=>'form-control', 'id'=>'q', 'placeholder'=>'Izaberi', 'style'=>'height:26px; padding: 0px 6px;']) !!}
                                    </div>
                                    <div class="col-md-6" style="font-size: 9pt">
                                        Na svaku žalbu KK ili proizvodnje smanjuje se za dve ocene. <br>
                                        Tri dobre isporuke može vratiti ocenu za 1
                                    </div>
                                </div>
                            </div>

                            <div style="margin-bottom: 5px">
                                <div class="row" style="padding-bottom: 2px; height: auto">
                                    <div class="col-md-1" style="padding-right: 0px">
                                        <label style="text-align: center; color: white; background: red; border-radius: 20%; width:25px; height:25px; padding-top: 2px">E</label>
                                    </div>
                                    <div class="col-md-3" style="padding-left: 0px">
                                        Cena
                                    </div>
                                    <div class="col-md-2" style="padding-left: 0px">
                                        {!! Form::select('e', ['1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5', '6'=>'6'], $datas->e, ['class'=>'form-control', 'id'=>'e', 'placeholder'=>'Izaberi', 'style'=>'height:26px; padding: 0px 6px;']) !!}
                                    </div>
                                    <div class="col-md-6" style="font-size: 9pt">
                                        6 -najpovoljnije <br>
                                        Smanjivanje za jednu ocenu za istu uslugu _____________
                                    </div>
                                </div>
                            </div>

                            <div style="margin-bottom: 5px">
                                <div class="row" style="padding-bottom: 2px; height: auto">
                                    <div class="col-md-1" style="padding-right: 0px">
                                        <label style="text-align: center; color: white; background: red; border-radius: 20%; width:25px; height:25px; padding-top: 2px">R</label>
                                    </div>
                                    <div class="col-md-3" style="padding-left: 0px">
                                        Rok isporuke
                                    </div>
                                    <div class="col-md-2" style="padding-left: 0px">
                                        {!! Form::select('r', ['1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'], $datas->r, ['class'=>'form-control', 'id'=>'r', 'placeholder'=>'Izaberi', 'style'=>'height:26px; padding: 0px 6px;']) !!}
                                    </div>
                                    <div class="col-md-6" style="font-size: 9pt">
                                        Svako kašnjenje smanjuje jednu ocenu <br>
                                        <br>
                                    </div>
                                </div>
                            </div>

                            <div style="margin-bottom: 5px">
                                <div class="row" style="padding-bottom: 2px; height: auto">
                                    <div class="col-md-1" style="padding-right: 0px">
                                        <label style="text-align: center; color: white; background: red; border-radius: 20%; width:25px; height:25px; padding-top: 2px">F</label>
                                    </div>
                                    <div class="col-md-3" style="padding-left: 0px">
                                        Finansijski uslovi
                                    </div>
                                    <div class="col-md-2" style="padding-left: 0px">
                                        {!! Form::select('f', ['1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'], $datas->f, ['class'=>'form-control', 'id'=>'f', 'placeholder'=>'Izaberi', 'style'=>'height:26px; padding: 0px 6px;']) !!}
                                    </div>
                                    <div class="col-md-6" style="font-size: 9pt">
                                        5 -odloženo 6 meseci<br>
                                        1 -avans
                                    </div>
                                </div>
                            </div>

                            <div style="margin-bottom: 5px">
                                <div class="row" style="padding-bottom: 2px">
                                    <div class="col-md-1" style="padding-right: 0px; height: auto">
                                        <label style="text-align: center; color: white; background: red; border-radius: 20%; width:25px; height:25px; padding-top: 2px">D</label>
                                    </div>
                                    <div class="col-md-3" style="padding-left: 0px">
                                        Kompletna dokumentacija
                                    </div>
                                    <div class="col-md-2" style="padding-left: 0px">
                                        {!! Form::select('d', ['1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'], $datas->d, ['class'=>'form-control', 'id'=>'d', 'placeholder'=>'Izaberi', 'style'=>'height:26px; padding: 0px 6px;']) !!}
                                    </div>
                                    <div class="col-md-6" style="font-size: 9pt">
                                        5 -dostalja TDS, MSDS, COC <br>
                                        1 -po zakonu
                                    </div>
                                </div>
                            </div>

                            <div style="border-bottom: solid 1px #9d9d9d; padding-bottom: 5px">
                                <div class="row" style="padding-bottom: 2px; height: auto">
                                    <div class="col-md-1" style="padding-right: 0px">
                                        <label style="text-align: center; color: white; background: red; border-radius: 20%; width:25px; height:25px; padding-top: 2px">P</label>
                                    </div>
                                    <div class="col-md-3" style="padding-left: 0px">
                                        Pakovanje
                                    </div>
                                    <div class="col-md-2" style="padding-left: 0px">
                                        {!! Form::select('o', ['1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'], $datas->o, ['class'=>'form-control', 'id'=>'o', 'placeholder'=>'Izaberi', 'style'=>'height:26px; padding: 0px 6px;']) !!}
                                    </div>
                                    <div class="col-md-6" style="font-size: 9pt">
                                        5 -nemoguće oštetiti proizvod i prisutne su sve potrebne informacije<br>
                                        1 -rinfuz (samo količina)
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


    {{--<script type="text/javascript">--}}
        {{--$q = parseInt(document.getElementById('q').value);--}}
        {{--$e = parseInt(document.getElementById('e').value);--}}
        {{--$r = parseInt(document.getElementById('r').value);--}}
        {{--$f = parseInt(document.getElementById('f').value);--}}
        {{--$d = parseInt(document.getElementById('d').value);--}}
        {{--$o = parseInt(document.getElementById('o').value);--}}
        {{--$sum = $q + $e + $r + $f + $d + $o;--}}
        {{--document.getElementById('ocena').innerText = $sum;--}}

        {{--if ($sum >= 0 && $sum <= 13)  { document.getElementById('prihatljiv').innerText = 'neprihvatljiv'}--}}
        {{--if ($sum >= 14 && $sum <= 21) { document.getElementById('prihatljiv').innerText = 'privremeno prihvatljiv'}--}}
        {{--if ($sum >= 22 && $sum <= 34) { document.getElementById('prihatljiv').innerText = 'prihvatljiv'}--}}
    {{--</script>--}}

@stop
