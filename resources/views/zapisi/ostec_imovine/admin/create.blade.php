@extends('zapisi.ostec_imovine.main')
@section('content')

    <div class="container" style="font-family: 'Verdana'; margin: 0px; margin-right: 20px; padding: 5px; width: auto; height:100%" >

        <div class="col-md-9" style="margin: 0px; padding: 0px; padding-top: 15px">
            <div class="panel panel-primary" style="margin-bottom: 0px">
                <div class="panel-heading" style="padding-bottom: 4px; padding-top: 4px">
                    <b>Oštećenje i gubutak imovine narućioca</b>
                </div>

                <div class="panel-body">
                    <ul id="tree1" style="padding: 20px; padding-top: 0px; padding-bottom: 0px">

                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif

                        {!! Form::open(['method'=>'POST', 'action'=> ['DobavljacController@ocena_upd']]) !!}
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
                                        {!! Form::select('primalac', ['1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5', '6'=>'6'], '', ['class'=>'form-control',  'placeholder'=>'Izaberi', 'style'=>'height:26px; padding: 0px 6px;']) !!}
                                    </div>
                                    <div class="col-md-6">
                                    </div>
                                </div>
                            </div>



                            <div style="padding-bottom: 5px; padding-top: 10px">
                                <div class="row" style="">
                                    <div class="col-md-2" style="margin-top: 3px">
                                        Naziv imovine
                                    </div>
                                    <div class="col-md-4" style="padding-left: 0px">
                                        {!! Form::text('naziv_imovine', '', ['style'=>'width:100%', 'placeholder'=>'']) !!}
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
                                        {!! Form::text('radni_nalog', '', ['style'=>'width:100%', 'placeholder'=>'']) !!}
                                    </div>
                                    <div class="col-md-6">
                                    </div>
                                </div>
                            </div>



                            {{--<div>--}}
                                {{--<div class="row" style="padding-bottom: 2px">--}}
                                    {{--<div class="col-md-2" style="padding-top: 3px">--}}
                                        {{--Rok važenja--}}
                                    {{--</div>--}}
                                    {{--<div class="col-md-10" >--}}
                                        {{--{!! Form::text('rok_vazenja', $datas->rok_vazenja, ['style'=>'width:40px; text-align: center', 'placeholder'=>'']) !!}--}}
                                        {{--&nbsp;meseci--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div style="border-bottom: solid 1px #9d9d9d; padding-bottom:12px; padding-top:5px">--}}
                                {{--<div class="row" style="padding-bottom: 2px">--}}
                                    {{--<div class="col-md-2" style="padding-top: 3px">--}}
                                        {{--Naziv--}}
                                    {{--</div>--}}
                                    {{--<div class="col-md-10" >--}}
                                        {{--{!! Form::text('naziv', $datas->naziv, ['style'=>'width:50%', 'placeholder'=>'']) !!}--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}


                            {{--<div style="; padding-top:15px">--}}
                                {{--<div class="col-md-3" style="padding-left: 0px; padding-top: 0px">--}}
                                    {{--Poslednja reklamacija--}}
                                {{--</div>--}}
                                {{--<div class="col-md-2" align="center">--}}
                                    {{--{!! Form::radio('status', 'otvorena', ($datas->status=='otvorena' ? true:false) , ['style'=>'width: 20px']) !!}--}}
                                    {{--{!! Form::label('otvorena', '', ['style'=>'font-weight: normal']) !!}--}}
                                {{--</div>--}}
                                {{--<div class="col-md-7">--}}
                                    {{--{!! Form::radio('status', 'zatvorena', ($datas->status=='zatvorena' ? true:false), ['style'=>'width: 20px']) !!}--}}
                                    {{--{!! Form::label('zatvorena', '', ['style'=>'font-weight: normal']) !!}--}}
                                {{--</div>--}}
                            {{--</div>--}}


                            {{--<div style="border-bottom: solid 1px #9d9d9d; padding-bottom:10px">--}}
                                {{--<div class="row">--}}
                                    {{--<div class="col-md-12">--}}
                                        {{--{!! Form::textarea('opis', $datas->opis, ['style'=>'resize: vertical; width:100%', 'rows'=>'3', 'placeholder'=>'...']) !!}--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}


                            {{--<div style="margin-bottom: 5px; padding-top:10px">--}}
                                {{--<div class="row" style="padding-bottom: 2px; height: auto">--}}
                                    {{--<div class="col-md-1" style="padding-right: 0px">--}}
                                        {{--<label style="text-align: center; color: white; background: red; border-radius: 20%; width:25px; height:25px; padding-top: 1px">Q</label>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-md-3" style="padding-left: 0px; padding-top: 2px">--}}
                                        {{--Kvalitet--}}
                                    {{--</div>--}}
                                    {{--<div class="col-md-2" style="padding-left: 0px; padding-top: 2px">--}}
                                        {{--{!! Form::select('q', ['1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5', '6'=>'6', '7'=>'7', '8'=>'8'], $datas->q, ['class'=>'form-control', 'id'=>'q', 'placeholder'=>'Izaberi', 'style'=>'height:26px; padding: 0px 6px;']) !!}--}}
                                    {{--</div>--}}
                                    {{--<div class="col-md-6" style="font-size: 9pt">--}}
                                        {{--Na svaku žalbu KK ili proizvodnje smanjuje se za dve ocene. <br>--}}
                                        {{--Tri dobre isporuke može vratiti ocenu za 1--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}


                            {{--<div class="form-group" align="center">--}}
                                {{--<br>--}}
                                {{--<button id="btnDodaj" class="btn btn-success">Dodaj</button>--}}
                            {{--</div>--}}

                        {!! Form::close() !!}

                    </ul>
                </div>
            </div>
        </div>
        {{-- Kraj sekcije--}}

    </div>


    {{-- DATE PICKER --}}

    <script>
        objDatePicker("datum_prijema");
    </script>
    {{-- END DATE PICKER --}}


@stop
