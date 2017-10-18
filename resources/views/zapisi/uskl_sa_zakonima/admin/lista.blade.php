@extends('zapisi.uskl_sa_zakonima.main')
@section('content')

    <div class="container" style="font-family: 'Verdana'; margin: 0px; margin-right: 20px; padding: 5px; padding-top: 0px; width: auto; height:100%" >
        <table class="table" style="margin: 0px">
            <tr>
                <td  class="col-md-8" align="left">
                    <h3 style="font-family: Tahoma; color:red; padding: 2px; margin: 2px; margin-left: 5px"> Lista zakona, propisa i zahteva </h3>
                </td>

                {{--<td  class="col-md-4" align="right">--}}
                    {{--{!! Form::open(['method'=>'POST', 'action'=> ['UsklSaZakonimaController@uskl_sa_zakonima_lista_upd']]) !!}--}}
                    {{--{!! Form::submit('NOVO', ['class'=>'btn btn-default', 'style'=>'background:#eeeeee']) !!}--}}
                    {{--{!! Form::close() !!}--}}
                {{--</td>--}}

                <td class="col-md-4" align="right">
                      <button type="button" data-toggle="modal" data-target="#dodaj" class="btn btn-default" style="background:#eeeeee">NOVO</button>

                        <!-- Modal -->
                        <div class="modal fade" role="dialog" id="dodaj">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content" align="center">
                                    {!! Form::open(['method'=>'POST', 'action'=> ['UsklSaZakonimaController@uskl_sa_zakonima_lista_upd']]) !!}
                                        <div class="modal-header" style="background: #dddddd">  <h4 style="font-family: 'Lato'" class="modal-title"> Dodavanje zapisa o zakonu, propisu ili zahtevu </h4>  </div>

                                        <div class="modal-body">
                                            <div class="row" style="padding-bottom: 25px; padding-top: 10px">
                                                <div class="col-md-12" style="margin-top: 3px">
                                                    {!! Form::select('standard', ['1'=>'ISO 9001', '2'=>'ISO 14001', '3'=>'OHSAS 18001', '4'=>'FSC COC', '5'=>'FSC FM'], '', ['class'=>'form-control', 'id'=>'standard', 'placeholder'=>'Izaberi standard...', 'style'=>'height:26px; padding: 0px 6px;']) !!}
{{--                                                    {!! Form::text('standard', '', ['style'=>'resize: vertical; width:100%', 'placeholder'=>'Standard']) !!}--}}
                                                </div>
                                            </div>

                                            <div class="row" style="padding-bottom: 20px">
                                                <div class="col-md-12" style="margin-top: 3px">
                                                    {!! Form::text('naziv', '', ['style'=>'resize: vertical; width:100%; padding-left: 5px', 'placeholder'=>'Naziv zapisa']) !!}
                                                </div>
                                            </div>

                                            <div class="row" style="padding-bottom: 20px">
                                                <div class="col-md-1" style="margin-top: 5px">
                                                    {!! Form::checkbox('preispitivano', '1', '', ['style'=>'width: 15px; height: 15px']) !!}
                                                </div>
                                                <div class="col-md-11" style="padding-top: 6px" align="left"> preispitivano </div>
                                            </div>

                                            <div class="row" style="padding-bottom: 20px">
                                                <div class="col-md-5" style="padding-top: 2px">
                                                    {!! Form::text('datum', '', ['style'=>'width:100%; text-align:center', 'placeholder'=>'Preispitivano / ažurirano']) !!}
                                                </div>
                                                <div class="col-md-1" style="padding-top: 2px"></div>
                                                <div class="col-md-6" style="padding-top: 2px">
                                                    {!! Form::text('popunio', '', ['style'=>'width:100%; text-align:center', 'placeholder'=>'Listu popunio']) !!}
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal-footer">
                                            <div class="row"  align="center">
                                                {!! Form::submit('Dodaj', ['class'=>'btn btn-success']) !!}
                                            </div>
                                        </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                        {{--=============--}}
                </td>



            </tr>
        </table>
    </div>


    {{-- DATE PICKER --}}
    <link rel="stylesheet" href="/css/bootstrap-datepicker3.css"/>
    <script type="text/javascript" src="/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="/js/objDatePicker.js"></script>

    <script>
        objDatePicker("datum");
    </script>
    {{-- END DATE PICKER --}}

@stop
