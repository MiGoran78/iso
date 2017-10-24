@extends('zapisi.upravljanje_dok.main')
@section('content')

    <div class="container" style="font-family: 'Verdana'; margin: 0px; margin-right: 20px; padding: 5px; width: auto; height:100%" >

        <div class="col-md-9" style="margin: 0px; padding: 0px; padding-top: 15px">
            <div class="panel panel-primary" style="margin-bottom: 0px">
                <div class="panel-heading" style="padding-bottom: 4px; padding-top: 4px">
                    <b>Upravljanje dokumentima</b>&nbsp;&nbsp;[Nov zapis]
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
                            {!! Form::hidden('idRef', date("ymdhms")) !!}


                            <div class="row">
                                <div class="col-md-6" align="left">
                                    Datum: {{ date('d.m.Y') }}
                                </div>
                                <div class="col-md-6" align="right">
                                    Ref: {{ date("ymdhms") }}
                                </div>
                                <hr style="border: solid 1px cornflowerblue; margin-bottom: 10px">
                            </div>

                            <div>
                                <h5>Korektivna mera:</h5>
                                {!! Form::textarea('kor_mera', '', ['class'=>'form-control', 'style'=>'resize: vertical', 'rows'=>'3', 'placeholder'=>'...']) !!}
                                <br>
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
