@extends('zapisi.neusag_proizod.main')

@section('content')

    <div class="container" style="font-family: 'Verdana'; margin: 0px; margin-right: 20px; padding: 5px; padding-top: 0px; width: auto; height:100%" >

        <div class="col-md-9" style="margin: 0px; padding: 0px; padding-top: 10px">
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
            @endif

            <div class="panel panel-primary" align="center" style="padding: 0px; margin-bottom: 3px; font-size: 20pt; border-color: white">
                Corrective Actions / 8D Report
            </div>

            {!! Form::open(['method'=>'POST', 'action'=> ['KorMeraController@izvestaj_8D_update']]) !!}
                {!! Form::hidden('id', $datas->id) !!}
                {!! Form::hidden('idRef', $datas->idRef) !!}
                <div class="panel panel-primary" style="margin-top: 5px; margin-bottom: 0px; border-color: black">
                        <div class="panel-heading" align="left" style="margin: 0px; padding: 1px; background: #1f648b; border-color: black"><strong>&nbsp;&nbsp;
                                Basic Information
                        </strong></div>

                        <div class="panel-body" style="padding-top: 2px; padding-bottom: 2px">
                            <table style="width:100%">
                                <tr>
                                    <td style="width:20%; padding-bottom: 5px" >Concern title:</td>
                                    <td style="width:35%; padding-bottom: 5px">{!! Form::textarea('Concern_title', $datas->Concern_title, ['rows'=>'1', 'style'=>'resize: vertical; vertical-align: bottom;width:100%; border:none; border-bottom: solid gray 1px']) !!}</td>
                                    <td style="width:5%; padding-bottom: 5px">&nbsp;</td>
                                    <td style="width:15%; padding-bottom: 5px" valign="bottom">Order No.:</td>
                                    <td style="width:25%; padding-bottom: 5px; margin:0px" valign="bottom">{!! Form::text('Order_no', $datas->Order_no, ['style'=>'width:100%; border:none; border-bottom: solid gray 1px']) !!}</td>
                                </tr>
                                <tr>
                                    <td style="padding-bottom: 5px">Quantity claimed:</td>
                                    <td style="padding-bottom: 5px">{!! Form::text('Quantity_claimed', $datas->Quantity_claimed, ['style'=>'width:100%; border:none; border-bottom: solid gray 1px']) !!}</td>
                                    <td style="padding-bottom: 5px">&nbsp;</td>
                                    <td style="padding-bottom: 5px">Claim number:</td>
                                    <td style="padding-bottom: 5px">{!! Form::text('Claim_number', $datas->Claim_number, ['style'=>'width:100%; border:none; border-bottom: solid gray 1px']) !!}</td>
                                </tr>
                                <tr>
                                    <td style="padding-bottom: 1px">Supplier</td>
                                    <td style="padding-bottom: 1px">{!! Form::text('Supplier', $datas->Supplier, ['style'=>'width:100%; border:none;; border-bottom: solid gray 1px']) !!}</td>
                                    <td style="padding-bottom: 1px">&nbsp;</td>
                                    <td style="padding-bottom: 1px">Nonconformity:</td>
                                    <td style="padding-bottom: 1px">{!! Form::text('Nonconformity', $datas->Nonconformity, ['style'=>'width:100%; border:none; border-bottom: solid gray 1px; font-style: normal']) !!}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    {{--END PANEL--}}

                    {{--PANEL--}}
                    <div class="panel panel-primary" style="margin-top: 5px; margin-bottom: 0px; border-color: black">
                        <div class="panel-heading" align="left" style="margin: 0px; padding: 1px; background: #1f648b; border-color: black"><strong>&nbsp;&nbsp;
                            D1 Team Members
                        </strong></div>

                        <div class="panel-body" style="padding-top: 2px; padding-bottom: 2px">
                            <table>
                                <tr>
                                    <td style="width:36%; padding-bottom: 1px; border-bottom: solid gray 1px">Name</td>
                                    <td style="width:1%; padding-bottom: 1px">&nbsp;</td>
                                    <td style="width:26%; padding-bottom: 1px; border-bottom: solid gray 1px">Department</td>
                                    <td style="width:1%; padding-bottom: 1px">&nbsp;</td>
                                    <td style="width:36%; padding-bottom: 1px; border-bottom: solid gray 1px">Contact methods</td>
                                </tr>
                                <tr>
                                    <td style="width:36%; padding-bottom: 1px">{!! Form::textarea('Names', $datas->Names, ['rows'=>'2', 'style'=>'resize: vertical; width:100%; vertical-align: bottom; border:none; border-bottom: solid gray 1px']) !!}</td>
                                    <td style="width:1%; padding-bottom: 1px">&nbsp;</td>
                                    <td style="width:26%; padding-bottom: 1px">{!! Form::textarea('Departments', $datas->Departments, ['rows'=>'2', 'style'=>'resize: vertical; width:100%; vertical-align: bottom; border:none; border-bottom: solid gray 1px']) !!}</td>
                                    <td style="width:1%; padding-bottom: 1px">&nbsp;</td>
                                    <td style="width:36%; padding-bottom: 1px">{!! Form::textarea('Contacts', $datas->Contacts, ['rows'=>'2', 'style'=>'resize: vertical; width:100%; vertical-align: bottom; border:none; border-bottom: solid gray 1px']) !!}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    {{--END PANEL--}}


                    {{--PANEL--}}
                    <div class="panel panel-primary" style="margin-top: 5px; margin-bottom: 0px; border-color: black">
                        <div class="panel-heading" align="left" style="margin: 0px; padding: 1px; background: #1f648b; border-color: black"><strong>&nbsp;&nbsp;
                            D2 Problem Description
                        </strong></div>

                        <div class="panel-body" style="padding-top: 2px; padding-bottom: 2px">
                            {!! Form::textarea('D2', $datas->D2, ['rows'=>'2', 'style'=>'resize: vertical; width:100%; vertical-align: bottom; border-color: white']) !!}
                        </div>
                    </div>
                    {{--END PANEL--}}


                    {{--PANEL--}}
                    <div class="panel panel-primary" style="margin-top: 5px; margin-bottom: 0px; border-color: black">
                        <div class="panel-heading" align="left" style="margin: 0px; padding: 1px; background: #1f648b; border-color: black"><strong>&nbsp;&nbsp;
                                D3 Containment Actions
                            </strong></div>

                        <div class="panel-body" style="padding-top: 2px; padding-bottom: 2px">
                            <table>
                                <tr>
                                    <td style="width:85%; padding-bottom: 1px">
                                        {!! Form::textarea('D3', $datas->D3, ['rows'=>'2', 'style'=>'resize: vertical; width:100%; vertical-align: bottom; border-color: white']) !!}
                                    </td>
                                    <td style="width:1%; padding-bottom: 1px">&nbsp;</td>
                                    <td style="width:250px ; padding-bottom: 1px">
                                        Finish Date
                                        {!! Form::text('Finish_d3', ($datas->Finish_d3==''?'':date('d.m.Y', strtotime($datas->Finish_d3))), ['style'=>'width:100%; border:none; border-bottom: solid gray 1px']) !!}
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    {{--END PANEL--}}


                    {{--PANEL--}}
                    <div class="panel panel-primary" style="margin-top: 5px; margin-bottom: 0px; border-color: black">
                        <div class="panel-heading" align="left" style="margin: 0px; padding: 1px; background: #1f648b; border-color: black"><strong>&nbsp;&nbsp;
                                D4 Identify the Root Cause
                            </strong></div>

                        <div class="panel-body" style="padding-top: 2px; padding-bottom: 2px">
                            <table>
                                <tr>
                                    <td style="width:85%; padding-bottom: 1px">
                                        {!! Form::textarea('D4', $datas->D4, ['rows'=>'2', 'style'=>'resize: vertical; width:100%; vertical-align: bottom; border-color: white']) !!}
                                    </td>
                                    <td style="width:1%; padding-bottom: 1px">&nbsp;</td>
                                    <td style="width:250px ; padding-bottom: 1px">
                                        Finish Date
                                        {!! Form::text('Finish_d4', ($datas->Finish_d4==''?'':date('d.m.Y', strtotime($datas->Finish_d4))), ['style'=>'width:100%; border:none; border-bottom: solid gray 1px']) !!}
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    {{--END PANEL--}}


                    {{--PANEL--}}
                    <div class="panel panel-primary" style="margin-top: 5px; margin-bottom: 0px; border-color: black">
                        <div class="panel-heading" align="left" style="margin: 0px; padding: 1px; background: #1f648b; border-color: black"><strong>&nbsp;&nbsp;
                                D5 Formulate and Verify Corrective Actions
                            </strong></div>

                        <div class="panel-body" style="padding-top: 2px; padding-bottom: 2px">
                            <table>
                                <tr>
                                    <td style="width:85%; padding-bottom: 1px">
                                        {!! Form::textarea('D5', $datas->D5, ['rows'=>'2', 'style'=>'resize: vertical; width:100%; vertical-align: bottom; border-color: white']) !!}
                                    </td>
                                    <td style="width:1%; padding-bottom: 1px">&nbsp;</td>
                                    <td style="width:250px ; padding-bottom: 1px">
                                        Finish Date
                                        {!! Form::text('Finish_d5', ($datas->Finish_d5==''?'':date('d.m.Y', strtotime($datas->Finish_d5))), ['style'=>'width:100%; border:none; border-bottom: solid gray 1px']) !!}
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    {{--END PANEL--}}


                    {{--PANEL--}}
                    <div class="panel panel-primary" style="margin-top: 5px; margin-bottom: 0px; border-color: black">
                        <div class="panel-heading" align="left" style="margin: 0px; padding: 1px; background: #1f648b; border-color: black"><strong>&nbsp;&nbsp;
                                D6 Implement Corrective Actions and Confirm the Effects
                            </strong></div>

                        <div class="panel-body" style="padding-top: 2px; padding-bottom: 2px">
                            <table>
                                <tr>
                                    <td style="width:85%; padding-bottom: 1px">
                                        {!! Form::textarea('D6', $datas->D6, ['rows'=>'2', 'style'=>'resize: vertical; width:100%; vertical-align: bottom; border-color: white']) !!}
                                    </td>
                                    <td style="width:1%; padding-bottom: 1px">&nbsp;</td>
                                    <td style="width:250px ; padding-bottom: 1px">
                                        Finish Date
                                        {!! Form::text('Finish_d6', ($datas->Finish_d6==''?'':date('d.m.Y', strtotime($datas->Finish_d6))), ['style'=>'width:100%; border:none; border-bottom: solid gray 1px']) !!}
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    {{--END PANEL--}}


                    {{--PANEL--}}
                    <div class="panel panel-primary" style="margin-top: 5px; margin-bottom: 0px; border-color: black">
                        <div class="panel-heading" align="left" style="margin: 0px; padding: 1px; background: #1f648b; border-color: black"><strong>&nbsp;&nbsp;
                                D7 Preventive Actions
                            </strong></div>

                        <div class="panel-body" style="padding-top: 2px; padding-bottom: 2px">
                            <table>
                                <tr>
                                    <td style="width:85%; padding-bottom: 1px">
                                        {!! Form::textarea('D7', $datas->D7, ['rows'=>'2', 'style'=>'resize: vertical; width:100%; vertical-align: bottom; border-color: white']) !!}
                                    </td>
                                    <td style="width:1%; padding-bottom: 1px">&nbsp;</td>
                                    <td style="width:250px ; padding-bottom: 1px">
                                        Finish Date
                                        {!! Form::text('Finish_d7', ($datas->Finish_d7==''?'':date('d.m.Y', strtotime($datas->Finish_d7))), ['style'=>'width:100%; border:none; border-bottom: solid gray 1px']) !!}
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    {{--END PANEL--}}


                    {{--PANEL--}}
                    <div class="panel panel-primary" style="margin-top: 5px; margin-bottom: 0px; border-color: black">
                        <div class="panel-heading" align="left" style="margin: 0px; padding: 1px; background: #1f648b; border-color: black"><strong>&nbsp;&nbsp;
                                D8 Completion and Lessons
                            </strong></div>

                        <div class="panel-body" style="padding-top: 2px; padding-bottom: 2px">
                            <table>
                                <tr>
                                    <td style="width:85%; padding-bottom: 1px">
                                        {!! Form::textarea('D8', $datas->D8, ['rows'=>'2', 'style'=>'resize: vertical; width:100%; vertical-align: bottom; border-color: white']) !!}
                                    </td>
                                    <td style="width:1%; padding-bottom: 1px">&nbsp;</td>
                                    <td style="width:250px ; padding-bottom: 1px">
                                        Finish Date
                                        {!! Form::text('Finish_d8', ($datas->Finish_d8==''?'':date('d.m.Y', strtotime($datas->Finish_d8))), ['style'=>'width:100%; border:none; border-bottom: solid gray 1px']) !!}
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    {{--END PANEL--}}


                    <div class="panel-body" style="padding-top: 10px">
                        <table align="center">
                            <tr>
                                <td style="width: 40% ">
                                    Close date: {!! Form::text('Close_date', ($datas->Close_date==''?'':date('d.m.Y', strtotime($datas->Close_date)))  , ['style'=>'border-style:none; border-bottom:solid 1px; text-align:center']) !!}
                                </td>
                                <td style="width: 20%">&nbsp;</td>
                                <td style="width: 40%">
                                    Reported By: {!! Form::text('Reported_by', $datas->Reported_by, ['style'=>'border:none; border-style:none; border-bottom:solid 1px; text-align:center']) !!}
                                </td>
                            </tr>
                        </table>
                    </div>


                    <div class="form-group" align="center">
                        <button id="btnUpdate" class="btn btn-success">Izmeni</button>
                    </div>
            {!! Form::close() !!}

        </div>
    </div>


    {{-- DATE PICKER --}}
    <script>
        objDatePicker("Finish_d3");
        objDatePicker("Finish_d4");
        objDatePicker("Finish_d5");
        objDatePicker("Finish_d6");
        objDatePicker("Finish_d7");
        objDatePicker("Finish_d8");
        objDatePicker("Close_date");
    </script>
    {{-- END DATE PICKER --}}

@stop
