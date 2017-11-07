@extends('zapisi.upravljanje_dok.main')
@section('content')

    <div class="container" style="font-family: 'Verdana'; margin: 0px; margin-right: 20px; padding: 5px; width: auto; height:100%" >

        <div class="col-md-12" style="margin: 0px; padding: 0px; padding-top: 15px">
            <div class="panel panel-primary" style="margin-bottom: 0px">
                <div class="panel-heading" style="padding-bottom: 4px; padding-top: 4px">
                    <b>Upravljanje dokumentima</b>&nbsp;&nbsp;[Izmena zapisa]
                </div>

                <div class="panel-body">
                    <div id="tree1" style="padding: 20px; padding-top: 0px; padding-bottom: 0px">

                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif

                        {!! Form::open(['method'=>'PUT', 'action'=> ['UpravljanjeDokController@update', $datas->id]]) !!}
                            {!! Form::hidden('logo', $datas->logo) !!}
                            {!! Form::hidden('idRef', $datas->idRef) !!}
                            {!! Form::hidden('potpis', '') !!}
                            {!! Form::hidden('sifra', $datas->sifra) !!}
                            {!! Form::hidden('verzija', $datas->verzija) !!}

                            <div class="row" style="border-bottom: solid 1px #9d9d9d; padding-bottom:10px">
                                <div class="col-md-10" align="left">
                                    <img src="{{ $datas->logo }}" width="300px">
                                </div>
                                <div class="col-md-2" align="right">
                                    <a class="btn btn-warning" style="padding: 8px" href="{{route('upravljanje_dok.show', $datas->id)}}">
                                        <span class="glyphicon glyphicon-print"></span>
                                        Štampanje
                                    </a>
                                </div>
                            </div>


                            <div class="row" style="border-bottom: solid 1px #9d9d9d; padding-bottom:20px">
                                <div class="col-md-2" align="left">
                                    <h5 style="margin-bottom: 4px"><strong> ŠIFRA </strong></h5>
                                    {!! Form::label('', $datas->sifra, ['id'=>'sifra', 'class'=>'form-control', 'style'=>'background:#eeeeee', 'placeholder'=>'...']) !!}
                                </div>
                                <div class="col-md-1" align="left">
                                    <h5 style="margin-bottom: 4px"><strong> VERZIJA </strong></h5>
                                    {!! Form::label('', $datas->verzija, ['id'=>'verzija', 'class'=>'form-control', 'style'=>'background:#eeeeee; text-align:center', 'placeholder'=>'...']) !!}
                                </div>
                                <div class="col-md-9" align="left">
                                    <h5 style="margin-bottom: 4px"><strong> NASLOV DOKUMENTA </strong></h5>
                                    {!! Form::text('naslov', $datas->naslov, ['id'=>'naslov', 'class'=>'form-control', 'style'=>'resize: vertical', 'placeholder'=>'...']) !!}
                                </div>
                                {{--<div class="col-md-9" align="left">--}}
                                    {{--<h5 style="margin-bottom: 4px"><strong> NAZIV DOKUMENTA </strong></h5>--}}
                                    {{--{!! Form::text('naziv', $datas->naziv, ['id'=>'naziv', 'class'=>'form-control', 'id'=>'naziv', 'style'=>'resize: vertical', 'placeholder'=>'Naziv dokumenta']) !!}--}}
                                {{--</div>--}}
                            </div>



                            {{--<div class="row" style="border-bottom: solid 1px #9d9d9d; padding-bottom:20px; padding-top:10px">--}}
                                {{--<div class="col-md-12" align="left">--}}
                                    {{--<h5 style="margin-bottom: 4px"><strong>  NASLOV DOKUMENTA </strong></h5>--}}
                                    {{--<div class="input-group">--}}
                                        {{--<span class="input-group-addon glyphicon glyphicon-hand-right" id="paste-addon" onclick="pasteText()"--}}
                                              {{--data-toggle="popover" data-trigger="hover" data-content="Popuni polje nazivom dokumenta">--}}
                                        {{--</span>--}}
                                        {{--{!! Form::text('naslov', $datas->naslov, ['aria-describedby'=>'paste-addon2', 'id'=>'naslov', 'class'=>'form-control', 'style'=>'resize: vertical', 'placeholder'=>'Naslov']) !!}--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            <div class="row" style="padding-top:0px">
                                <div class="col-md-12" align="left" style="padding-top: 10px">
                                    <h5 style="margin-bottom: 4px;"><strong> SADRŽAJ </strong></h5>
                                    {!! Form::textarea('sadrzaj', $datas->sadrzaj, ['id'=>'sadrzaj', 'class'=>'form-control', 'style'=>'resize: vertical', 'rows'=>'2', 'placeholder'=>'...']) !!}
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12" align="left" style="padding-top: 10px">
                                    <h5 style="margin-bottom: 4px;"><strong>
                                        1. UVOD / SVRHA </strong></h5>
                                    {!! Form::textarea('uvod', $datas->uvod, ['id'=>'uvod', 'class'=>'form-control', 'style'=>'resize: vertical', 'rows'=>'2', 'placeholder'=>'...']) !!}
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12" align="left">
                                    <h5 style="margin-bottom: 4px;"><strong>
                                        2. REFERENTNA DOKUMENTA </strong></h5>
                                    {!! Form::textarea('ref_dokumenta', $datas->ref_dokumenta, ['id'=>'ref_dokumenta', 'class'=>'form-control', 'style'=>'resize: vertical', 'rows'=>'2', 'placeholder'=>'...']) !!}
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12" align="left">
                                    <h5 style="margin-bottom: 4px;"><strong>
                                        3. DEFINICIJE I POJMOVI </strong></h5>
                                    {!! Form::textarea('definicije', $datas->definicije, ['id'=>'definicije', 'class'=>'form-control', 'style'=>'resize: vertical', 'rows'=>'2', 'placeholder'=>'...']) !!}
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12" align="left">
                                    <h5 style="margin-bottom: 4px;"><strong>
                                        4. OPIS PROCEDURE </strong></h5>
                                    {!! Form::textarea('opis', $datas->opis, ['id'=>'opis', 'class'=>'form-control', 'style'=>'resize: vertical', 'rows'=>'2', 'placeholder'=>'...']) !!}
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12" align="left">
                                    <h5 style="margin-bottom: 4px;"><strong>
                                        5. IZMENE </strong></h5>
                                    {!! Form::textarea('izmene', $datas->izmene, ['id'=>'izmene', 'class'=>'form-control', 'style'=>'resize: vertical', 'rows'=>'2', 'placeholder'=>'...']) !!}
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12" align="left">
                                    <h5 style="margin-bottom: 4px;"><strong>
                                        6. PRAĆENJE I MERENJE </strong></h5>
                                    {!! Form::textarea('pracenje', $datas->pracenje, ['id'=>'pracenje', 'class'=>'form-control', 'style'=>'resize: vertical', 'rows'=>'2', 'placeholder'=>'...']) !!}
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12" align="left">
                                    <h5 style="margin-bottom: 4px;"><strong>
                                        7. PRILOZI </strong></h5>
                                    {!! Form::textarea('prilozi', $datas->prilozi, ['id'=>'prilozi', 'class'=>'form-control', 'style'=>'resize: vertical', 'rows'=>'2', 'placeholder'=>'...']) !!}
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




    <script>
        if ($('#sadrzaj').length > 0)       auto_grow(sadrzaj);
        if ($('#uvod').length > 0)          auto_grow(uvod);
        if ($('#ref_dokumenta').length > 0) auto_grow(ref_dokumenta);
        if ($('#definicije').length > 0)    auto_grow(definicije);
        if ($('#opis').length > 0)          auto_grow(opis);
        if ($('#izmene').length > 0)        auto_grow(izmene);
        if ($('#pracenje').length > 0)      auto_grow(pracenje);
        if ($('#prilozi').length > 0)       auto_grow(prilozi);

        function auto_grow(element) {
            element.style.height = (parseInt(element.scrollHeight) + 5) + "px";
        }
    </script>


    {{--<script type="text/javascript">--}}
    {{--document.getElementById('sifra').disabled = true;--}}
    {{--document.getElementById('verzija').disabled = true;--}}

    {{--function pasteText() {--}}
    {{--document.getElementById('naslov').value = document.getElementById('naziv').value;--}}
    {{--}--}}
    {{--</script>--}}


    {{--<script>--}}
        {{--$(document).ready(function() {--}}
            {{--$('[data-toggle="popover"]').popover({--}}
                {{--placement: 'auto top'--}}
            {{--});--}}
        {{--});--}}
    {{--</script>--}}


@stop
