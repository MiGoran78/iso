@extends('zapisi.upravljanje_dok.main')
@section('content')

    <div class="container" style="font-family: 'Verdana'; margin: 0px; margin-right: 20px; padding: 5px; width: auto; height:100%" >

        <div class="col-md-12" style="margin: 0px; padding: 0px; padding-top: 15px">
            <div class="panel panel-primary" style="margin-bottom: 0px">
                <div class="panel-heading" style="padding-bottom: 4px; padding-top: 4px">
                    <b>Upravljanje dokumentima</b>&nbsp;&nbsp;[Nov zapis]
                </div>

                <div class="panel-body" style="padding-top: 5px">
                    <div id="tree1" style="padding: 20px; padding-top: 0px; padding-bottom: 0px">

                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif

                        {!! Form::open(['method'=>'POST', 'action'=> ['UpravljanjeDokController@store']]) !!}
                            {!! Form::hidden('logo',  $logopath ) !!}
                            {!! Form::hidden('idRef', date("ymdhms")) !!}
                            {!! Form::hidden('potpis', '') !!}

                            {{--<div class="row">--}}
                                {{--<div class="col-md-6" align="right">--}}
                                    {{--Ref: {{ date("ymdhms") }}--}}
                                {{--</div>--}}
                                {{--<hr style="border: solid 1px cornflowerblue; margin-bottom: 10px">--}}
                            {{--</div>--}}

                            {{--<div class="row" style="border-bottom: solid 1px #9d9d9d; padding-bottom:10px">--}}
                                {{--<div class="col-md-12" align="left">--}}
                                    {{--<img src="{{ $logopath }}" width="300px">--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            <div class="row" style="border-bottom: solid 1px #9d9d9d; padding-bottom:20px">
                                <div class="col-md-2" align="left">
                                    <h5 style="margin-bottom: 4px"><strong> ŠIFRA </strong></h5>
                                    {!! Form::text('sifra', '', ['id'=>'sifra', 'class'=>'form-control', 'style'=>'resize: vertical', 'placeholder'=>'...']) !!}
                                </div>
                                <div class="col-md-1" align="left">
                                    <h5 style="margin-bottom: 4px"><strong> VERZIJA </strong></h5>
                                    {!! Form::text('verzija', '1', ['class'=>'form-control', 'style'=>'text-align:center']) !!}
                                </div>
                                <div class="col-md-9" align="left">
                                    <h5 style="margin-bottom: 4px"><strong> NASLOV DOKUMENTA </strong></h5>
                                    {!! Form::text('naslov', '', ['id'=>'naslov', 'class'=>'form-control', 'style'=>'resize: vertical', 'placeholder'=>'...']) !!}
                                </div>
                                {{--<div class="col-md-9" align="left">--}}
                                    {{--<h5 style="margin-bottom: 4px"><strong> NAZIV DOKUMENTA </strong></h5>--}}
                                    {{--{!! Form::text('naziv', '', ['id'=>'naziv', 'class'=>'form-control', 'style'=>'resize: vertical', 'placeholder'=>'Naziv dokumenta']) !!}--}}
                                {{--</div>--}}
                            </div>



                            {{--<div class="row">--}}
                                {{--<div class="col-md-12" align="left" style="border-bottom: solid 1px #9d9d9d; padding-bottom:20px; padding-top: 10px">--}}
                                    {{--<h5 style="margin-bottom: 4px"><strong>  NASLOV DOKUMENTA </strong></h5>--}}
                                    {{--<div class="input-group">--}}
                                        {{--<span class="input-group-addon glyphicon glyphicon-hand-right" id="paste-addon" onclick="pasteText()"--}}
                                              {{--data-toggle="popover" data-trigger="hover" data-content="Popuni polje nazivom dokumenta">--}}
                                        {{--</span>--}}
                                        {{--{!! Form::text('naslov', '', ['aria-describedby'=>'paste-addon2', 'id'=>'naslov', 'class'=>'form-control', 'style'=>'resize: vertical', 'placeholder'=>'Naslov']) !!}--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            <div class="row">
                                <div class="col-md-12" align="left" style="padding-top: 10px">
                                    <h5 style="margin-bottom: 4px;"><strong>
                                            SADRŽAJ </strong></h5>
                                    {!! Form::textarea('sadrzaj', '', ['class'=>'form-control', 'style'=>'resize: vertical', 'rows'=>'3', 'placeholder'=>'...']) !!}
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12" align="left" style="padding-top: 10px">
                                    <h5 style="margin-bottom: 4px;"><strong>
                                            1. UVOD / SVRHA </strong></h5>
                                    {!! Form::textarea('uvod', '', ['class'=>'form-control', 'style'=>'resize: vertical', 'rows'=>'3', 'placeholder'=>'...']) !!}
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12" align="left">
                                    <h5 style="margin-bottom: 4px;"><strong>
                                            2. REFERENTNA DOKUMENTA </strong></h5>
                                    {!! Form::textarea('ref_dokumenta', '', ['class'=>'form-control', 'style'=>'resize: vertical', 'rows'=>'3', 'placeholder'=>'...']) !!}
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12" align="left">
                                    <h5 style="margin-bottom: 4px;"><strong>
                                            3. DEFINICIJE I POJMOVI </strong></h5>
                                    {!! Form::textarea('definicije', '', ['class'=>'form-control', 'style'=>'resize: vertical', 'rows'=>'3', 'placeholder'=>'...']) !!}
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12" align="left">
                                    <h5 style="margin-bottom: 4px;"><strong>
                                            4. OPIS PROCEDURE </strong></h5>
                                    {!! Form::textarea('opis', '', ['class'=>'form-control', 'style'=>'resize: vertical', 'rows'=>'3', 'placeholder'=>'...']) !!}
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12" align="left">
                                    <h5 style="margin-bottom: 4px;"><strong>
                                            5. IZMENE </strong></h5>
                                    {!! Form::textarea('izmene', '', ['class'=>'form-control', 'style'=>'resize: vertical', 'rows'=>'3', 'placeholder'=>'...']) !!}
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12" align="left">
                                    <h5 style="margin-bottom: 4px;"><strong>
                                            6. PRAĆENJE I MERENJE </strong></h5>
                                    {!! Form::textarea('pracenje', '', ['class'=>'form-control', 'style'=>'resize: vertical', 'rows'=>'3', 'placeholder'=>'...']) !!}
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12" align="left">
                                    <h5 style="margin-bottom: 4px;"><strong>
                                            7. PRILOZI </strong></h5>
                                    {!! Form::textarea('prilozi', '', ['class'=>'form-control', 'style'=>'resize: vertical', 'rows'=>'3', 'placeholder'=>'...']) !!}
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

    </div>



    {{--<script type="text/javascript">--}}
        {{--function pasteText() {--}}
            {{--document.getElementById('naslov').value = document.getElementById('naziv').value;--}}
        {{--}--}}
    {{--</script>--}}

    <script>
        $(document).ready(function() {
            $('[data-toggle="popover"]').popover({
                placement: 'auto top'
            });
        });
    </script>

@stop
