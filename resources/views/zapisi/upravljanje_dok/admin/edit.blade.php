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

                        {!! Form::open(['method'=>'POST', 'action'=> ['UpravljanjeDokController@store']]) !!}
                        {!! Form::hidden('logo', $datas->logo) !!}
                        {!! Form::hidden('idRef', date("ymdhms")) !!}

                        {{--<div class="row">--}}
                        {{--<div class="col-md-6" align="right">--}}
                        {{--Ref: {{ date("ymdhms") }}--}}
                        {{--</div>--}}
                        {{--<hr style="border: solid 1px cornflowerblue; margin-bottom: 10px">--}}
                        {{--</div>--}}

                        <div class="row" style="border-bottom: solid 1px #9d9d9d; padding-bottom:10px">
                            <div class="col-md-12" align="left">
                                <img src="{{ $datas->logo }}" width="300px">
                            </div>
                        </div>

                        <div class="row" style="border-bottom: solid 1px #9d9d9d; padding-bottom:20px">
                            <div class="col-md-2" align="left">
                                <h5 style="margin-bottom: 4px">  </h5>
                                {!! Form::text('sifra', $datas->sifra, ['class'=>'form-control', 'style'=>'resize: vertical', 'placeholder'=>'šifra dokumenta']) !!}
                            </div>
                            <div class="col-md-1" align="left">
                                <h5 style="margin-bottom: 4px">  </h5>
                                {!! Form::text('verzija', $datas->verzija, ['class'=>'form-control', 'style'=>'resize: vertical', 'placeholder'=>'verzija']) !!}
                            </div>
                            <div class="col-md-9" align="left">
                                <h5 style="margin-bottom: 4px">  </h5>
                                {!! Form::text('naziv', $datas->naziv, ['class'=>'form-control', 'style'=>'resize: vertical', 'placeholder'=>'Naziv dokumenta']) !!}
                            </div>

                            <div class="col-md-12" align="left">
                                <h5 style="margin-bottom: 4px">  </h5>
                                {!! Form::text('naslov', $datas->naslov, ['class'=>'form-control', 'style'=>'resize: vertical', 'placeholder'=>'Naslov']) !!}
                            </div>
                        </div>



                        <div class="row">
                            <div class="col-md-12" align="left" style="padding-top: 10px">
                                <h5 style="margin-bottom: 4px;"><strong> SADRŽAJ </strong></h5>
                                {!! Form::textarea('sadrzaj', $datas->sadrzaj, ['class'=>'form-control', 'style'=>'resize: vertical', 'rows'=>'3', 'placeholder'=>'...']) !!}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12" align="left" style="padding-top: 10px">
                                <h5 style="margin-bottom: 4px;"><strong> UVOD </strong></h5>
                                {!! Form::textarea('uvod', $datas->uvod, ['class'=>'form-control', 'style'=>'resize: vertical', 'rows'=>'3', 'placeholder'=>'...']) !!}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12" align="left">
                                <h5 style="margin-bottom: 4px;"><strong> REFERENTNA DOKUMENTA </strong></h5>
                                {!! Form::textarea('ref_dokumenta', $datas->ref_dokumenta, ['class'=>'form-control', 'style'=>'resize: vertical', 'rows'=>'3', 'placeholder'=>'...']) !!}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12" align="left">
                                <h5 style="margin-bottom: 4px;"><strong> DEFINICIJE I POJMOVI </strong></h5>
                                {!! Form::textarea('definicije', $datas->definicije, ['class'=>'form-control', 'style'=>'resize: vertical', 'rows'=>'3', 'placeholder'=>'...']) !!}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12" align="left">
                                <h5 style="margin-bottom: 4px;"><strong> OPIS PROCEDURE </strong></h5>
                                {!! Form::textarea('opis', $datas->opis, ['class'=>'form-control', 'style'=>'resize: vertical', 'rows'=>'3', 'placeholder'=>'...']) !!}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12" align="left">
                                <h5 style="margin-bottom: 4px;"><strong> IZMENE </strong></h5>
                                {!! Form::textarea('izmene', $datas->izmene, ['class'=>'form-control', 'style'=>'resize: vertical', 'rows'=>'3', 'placeholder'=>'...']) !!}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12" align="left">
                                <h5 style="margin-bottom: 4px;"><strong> PRAĆENJE I MERENJE </strong></h5>
                                {!! Form::textarea('pracenje', $datas->pracenje, ['class'=>'form-control', 'style'=>'resize: vertical', 'rows'=>'3', 'placeholder'=>'...']) !!}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12" align="left">
                                <h5 style="margin-bottom: 4px;"><strong> PRILOZI </strong></h5>
                                {!! Form::textarea('prilozi', $datas->prilozi, ['class'=>'form-control', 'style'=>'resize: vertical', 'rows'=>'3', 'placeholder'=>'...']) !!}
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

@stop
