@extends('zapisi.neusag_proizod.main')

@section('content')

    <div class="container" style="font-family: 'Verdana'; margin: 0px; margin-right: 20px; padding: 5px; padding-top: 0px; width: auto; height:100%" >
        <table class="table" style="margin: 0px">
            <tr>
                <td  class="col-md-12" align="left">
                    <a href="/zapisi" class="btn btn-default" style="padding: 2px; padding-left: 8px; padding-right: 8px">Lista neusaglašenosti</a>
                </td>
            </tr>
        </table>
    </div>


    <div class="container" style="font-family: 'Verdana'; margin: 0px; margin-right: 20px; padding: 5px; padding-top: 0px; width: auto; height:100%" >
        {{-- Pocetak sekcije--}}
        <div class="col-md-6" style="margin: 0px; padding: 0px">
            <div class="panel panel-primary" style="margin-bottom: 0px">
                <div class="panel-heading" style="padding-bottom: 4px; padding-top: 4px"><b>Izmena neusaglašenosti</b></div>
                <div class="panel-body">
                    <ul id="tree1" style="padding: 20px; padding-top: 0px; padding-bottom: 0px">

                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif

                        {!! Form::open(['method'=>'PUT', 'action'=> ['NeusagController@update', $datas->id]]) !!}
                            {!! Form::hidden('datum', $datas->datum) !!}
                            {!! Form::hidden('idRef', $datas->idRef) !!}

                            <div class="row">
                                <div class="col-md-6" align="left">
                                    Datum: {{ date('d-m-Y', strtotime($datas->datum)) }}
                                </div>
                                <div class="col-md-6" align="right">
                                    Ref: {{ $datas->idRef }}
                                </div>
                                <hr style="border: solid 1px cornflowerblue; margin-bottom: 5px; margin-top: 0px">
                            </div>


                            <div style="border-bottom: solid 1px #9d9d9d; padding-bottom:20px">
                                <h4> Poreklo: <br></h4>
                                {!! Form::label('Kupac', '', ['style'=>'font-weight: normal']) !!}
                                {!! Form::text('kupac_poreklo', old('kupac_poreklo'), ['class'=>'form-control', 'id'=>'txtKupac', 'placeholder'=>'...']) !!}
                                <p style="height: 1px"></p>

                                {!! Form::label('Provera', '', ['style'=>'font-weight: normal']) !!}
                                {!! Form::text('provera_poreklo', old('provera_poreklo'), ['class'=>'form-control', 'id'=>'txtProvera', 'placeholder'=>'...']) !!}
                                <p style="height: 1px"></p>

                                {!! Form::label('Proces', '', ['style'=>'font-weight: normal']) !!}
                                {!! Form::text('proces_poreklo', old('proces_poreklo'), ['class'=>'form-control', 'id'=>'txtProces', 'placeholder'=>'...']) !!}
                                {{--<hr style="border: dotted 1px cornflowerblue; margin-bottom: 15px; margin-top: 0px">--}}
                            </div>


                            <div style="border-bottom: solid 1px #9d9d9d; padding-bottom:20px">
                                <h4> Neusaglašenost standarda: <br></h4>
                                <div class="row">
                                    <div class="col-md-3" align="center">
                                        {!! Form::label('9001', '', ['style'=>'font-weight: normal']) !!}
                                        {!! Form::checkbox('neusag_std1', '9001', $datas->neusag_std1, ['class' => 'form-control', 'style'=>'width: 30px']) !!}
                                    </div>
                                    <div class="col-md-3" align="center">
                                        {!! Form::label('14001', '', ['style'=>'font-weight: normal']) !!}
                                        {!! Form::checkbox('neusag_std2', '14001', $datas->neusag_std2, ['class'=>'form-control', 'style'=>'width: 30px']) !!}
                                    </div>
                                    <div class="col-md-3" align="center">
                                        {!! Form::label('18001', '', ['style'=>'font-weight: normal']) !!}
                                        {!! Form::checkbox('neusag_std3', '18001', $datas->neusag_std3, ['class'=>'form-control', 'style'=>'width: 30px']) !!}
                                    </div>
                                    <div class="col-md-3" align="center">
                                        {!! Form::label('FSC', '', ['style'=>'font-weight: normal']) !!}
                                        {!! Form::checkbox('neusag_std4', 'FSC', $datas->neusag_std4, ['class'=>'form-control', 'style'=>'width: 30px']) !!}
                                    </div>
                                </div>
                                {{--<hr style="border: dotted 1px cornflowerblue; margin-bottom: 20px; margin-top:10px">--}}
                            </div>


                            <div style="border-bottom: solid 1px #9d9d9d; padding-bottom:20px">
                                <h4> Opis neusaglašenosti: <br></h4>
                                {!! Form::textarea('opis', $datas->opis, ['class'=>'form-control', 'id'=>'txtOpis', 'rows'=>'3', 'placeholder'=>'...']) !!}
                                {{--<hr style="border: dotted 1px cornflowerblue; margin-top:10px">--}}
                            </div>

                            <div>
                                <h4> Uzrok neusaglašenosti: <br></h4>
                                {!! Form::textarea('uzrok', $datas->uzrok, ['class'=>'form-control', 'id'=>'txtUzrok', 'rows'=>'3', 'placeholder'=>'...']) !!}
                            </div>

                            <br>
                            <div class="form-group" align="center">
                                <button id="btnDodaj" class="btn btn-success">Snimi</button>
                            </div>
                        {!! Form::close() !!}

                    </ul>
                </div>
            </div>

            <br>
            {!! Form::open(['method'=>'DELETE', 'action'=> ['NeusagController@destroy', $datas->id], 'onsubmit'=>'return confirm("Da li ste sigurni?")']) !!}
            <div align="center">
                {!! Form::submit('Obriši', ['class'=>'btn btn-danger']) !!}
            </div>
            {!! Form::close() !!}
        </div>
        {{-- Kraj sekcije--}}

    </div>


    <script type="text/javascript">
        document.getElementById('txtKupac').value = '{{ $datas->kupac_poreklo }}';
        document.getElementById('txtProvera').value = '{{ $datas->provera_poreklo }}';
        document.getElementById('txtProces').value = '{{ $datas->proces_poreklo }}';
        document.getElementById('txtOpis').value = '{{ $datas->opis }}';
        document.getElementById('txtUzrok').value = '{{ $datas->uzrok }}';

//        var $elem_kupac = document.getElementById('txtKupac')
//        var $elem_provera = document.getElementById('txtProvera');
//        var $elem_proces = document.getElementById('txtProces');
//        var $chk_kupac = $('#chkKupac');
//        var $chk_provera = $('#chkProvera');
//        var $chk_proces = $('#chkProces');

//        $chk_kupac.prop("checked", false);
//        $chk_provera.prop("checked", false);
//        $chk_proces.prop("checked", false);

//        $elem_kupac.style.visibility = 'hidden';
//        $elem_kupac.style.height='0px';
//        $elem_kupac.style.padding='0px';
//
//        $elem_provera.style.visibility = 'hidden';
//        $elem_provera.style.height='0px';
//        $elem_provera.style.padding='0px';
//
//        $elem_proces.style.visibility = 'hidden';
//        $elem_proces.style.height='0px';
//        $elem_proces.style.padding='0px';

//        function chkKupacVisib() {
//            if ($chk_kupac.prop("checked")) {
//                $elem_kupac.style.visibility = '';
//                $elem_kupac.style.height = '34px';
//                $elem_kupac.style.padding = '6px 12px';
//            } else {
//                $elem_kupac.style.visibility = 'hidden';
//                $elem_kupac.style.height = '0px';
//                $elem_kupac.style.padding = '0px';
//            }
//        }

//        function chkProveraVisib() {
//            if ($chk_provera.prop("checked")) {
//                $elem_provera.style.visibility = '';
//                $elem_provera.style.height = '34px';
//                $elem_provera.style.padding = '6px 12px';
//            } else {
//                $elem_provera.style.visibility = 'hidden';
//                $elem_provera.style.height = '0px';
//                $elem_provera.style.padding = '0px';
//            }
//        }

//        function chkProcesVisib() {
//            if ($chk_proces.prop("checked")) {
//                $elem_proces.style.visibility = '';
//                $elem_proces.style.height = '34px';
//                $elem_proces.style.padding = '6px 12px';
//            } else {
//                $elem_proces.visibility = 'hidden';
//                $elem_proces.style.height = '0px';
//                $elem_proces.style.padding = '0px';
//            }
//        }
    </script>

@stop
