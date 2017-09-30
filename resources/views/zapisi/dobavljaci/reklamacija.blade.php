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
                            <b>Reklamacija</b>
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

                        {!! Form::open(['method'=>'POST', 'action'=> ['DobavljacController@reklamacija_upd']]) !!}
                            {!! Form::hidden('id', $datas->id) !!}
                            {!! Form::hidden('idRef', $datas->idRef) !!}


                            IdRef: {{ $datas->idRef }}


                            <div class="form-group" align="center">
                                <br>
                                <button id="btnDodaj" class="btn btn-success">Zapamti</button>
                            </div>
                        {!! Form::close() !!}

                    </ul>
                </div>
            </div>
        </div>
        {{-- Kraj sekcije--}}

    </div>

@stop
