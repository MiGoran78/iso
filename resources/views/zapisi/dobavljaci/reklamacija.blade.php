<link rel="stylesheet" href="/css/css.css?family=Lato:100,300,400,700">
<link rel="stylesheet" href="/css/font-awesome.min.css" />
<link rel="stylesheet" href="/css/bootstrap.min.css">
<link rel="stylesheet" href="/css/dropzone.min.css">

<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/dropzone.min.js"></script>

{{-- DATE PICKER --}}
<link rel="stylesheet" href="/css/bootstrap-datepicker3.css"/>
<script type="text/javascript" src="/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="/js/objDatePicker.js"></script>


<style>
    body {
        /*background: rgb(204,204,204);*/
        padding: 5px;
    }
    page {
        background: white;
        display: block;
        /*margin: 0 auto;*/
        margin: 0cm;
        /*box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);*/
    }
    page[size="A4"] {
        width: 21cm;
        height: 29.7cm;
    }
    @media print {
        body, page {
            box-shadow: none;
            margin: 0;
            transition: none;
        }
        /*.form-control, .form-control.nobug {*/
        /*border: 0;*/
        /*outline: 0;*/
        /*box-shadow: none;*/
        /*}*/
        /*.form-control.nobug {*/
        /*transition: none;*/
        /*}*/
    }
</style>

<body>
    <page size="A4">
        <div class="container" style="font-family: 'Tahoma'; width: 21cm; height:29.7cm" >

            <div class="col-md-12" style="margin: 0px; padding: 0px">
                <div id="tree1" style="padding: 0px">

                    {!! Form::open(['method'=>'POST', 'action'=> ['DobavljacController@reklamacija_upd']]) !!}
                        {!! Form::hidden('id', $datas->id) !!}
                        {!! Form::hidden('idRef', $datas->idRef) !!}

                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-primary" align="center" style="padding: 0px; margin-bottom: 20px; font-size: 20pt; border-color: white">
                                    Reklamacija / Claim
                                </div>
                            </div>
                        </div>

                        <div class="row" style="padding-top: 5px">
                            <div class="col-md-3" align="left" style="padding-top: 6px">
                                Dobavljač / Supplier
                            </div>
                            <div class="col-md-9" align="left">
                                {!! Form::text('', '', ['class'=>'form-control']) !!}
                            </div>
                        </div>

                        <div class="row" style="padding-top: 5px">
                            <div class="col-md-3" align="left" style="padding-top: 6px">
                                Kontakt / Contact
                            </div>
                            <div class="col-md-9" align="left">
                                {!! Form::text('', '', ['class'=>'form-control']) !!}
                            </div>
                        </div>

                        <div class="row" style="padding-top: 5px">
                            <div class="col-md-3" align="left" style="padding-top: 6px">
                                Tel / email
                            </div>
                            <div class="col-md-9" align="left">
                                {!! Form::text('', '', ['class'=>'form-control']) !!}
                            </div>
                        </div>

                        <div class="row" style="padding-top: 5px">
                            <div class="col-md-3" align="left" style="padding-top: 6px">
                                Predmet / Subject
                            </div>
                            <div class="col-md-9" align="left">
                                {!! Form::text('', '', ['class'=>'form-control']) !!}
                            </div>
                        </div>



                        <div class="panel panel-info" style="margin-top: 20px">
                            <div class="panel-heading" style="padding-bottom: 4px; padding-top: 4px">
                                Opis neusaglašenosti / description of non-conformity
                            </div>

                            <div class="panel-body" style="padding: 0px">
                                {!! Form::textarea('opis', '', ['id'=>'opis', 'class'=>'form-control', 'rows'=>'3', 'style'=>'resize: vertical; margin: 0px; padding: 0px; border: 0']) !!}
                            </div>
                        </div>


                        <div class="row" style="padding-top: 10px">
                            <div class="col-md-3" align="left">
                                Vrsta proizvoda/usluga<br>
                                Type of product/service
                            </div>
                            <div class="col-md-9" align="left" style="padding-top: 3px">
                                {!! Form::text('', '', ['class'=>'form-control']) !!}
                            </div>
                        </div>


                        <div class="row" style="padding-top: 15px">
                            <div class="col-md-3" align="left">
                                Broj dokumenta<br>
                                Reference number
                            </div>
                            <div class="col-md-3" align="left" style="padding-top: 4px">
                                {!! Form::text('', '', ['class'=>'form-control', 'style'=>'text-align:left']) !!}
                            </div>

                            <div class="col-md-3" align="right">
                                Datum<br>
                                date
                            </div>
                            <div class="col-md-3" align="left" style="padding-top: 4px">
                                {!! Form::text('date', '', ['id'=>'date', 'class'=>'form-control', 'style'=>'text-align:left']) !!}
                            </div>
                        </div>


                        <div class="row" style="padding-top: 15px">
                            <div class="col-md-3" align="left">
                                Poručena količina<br>
                                Ordered quantity
                            </div>
                            <div class="col-md-3" align="left" style="padding-top: 4px">
                                {!! Form::text('', '', ['class'=>'form-control', 'style'=>'text-align:left']) !!}
                            </div>

                            <div class="col-md-3" align="right">
                                Reklamirana količina<br>
                                Claimed quantity
                            </div>
                            <div class="col-md-3" align="left" style="padding-top: 4px">
                                {!! Form::text('', '', ['class'=>'form-control', 'style'=>'text-align:left']) !!}
                            </div>
                        </div>


                        <div class="row" style="padding-top: 20px">
                            <div class="col-md-3" align="left">
                                Vrednost reklamirane robe<br>
                                Value of claim
                            </div>
                            <div class="col-md-9" align="left" style="padding-top: 3px">
                                {!! Form::text('', '', ['class'=>'form-control']) !!}
                            </div>
                        </div>


                        <div class="panel panel-info" style="margin-top: 20px">
                            <div class="panel-heading" style="padding-bottom: 4px; padding-top: 4px">
                                    Prilozi / attachment
                            </div>

                            <div class="panel-body" style="padding-top: 6px">
                                <div class="col-md-1">
                                    {!! Form::checkbox('', '', false, ['style'=>'width: 15px; height: 15px']) !!}
                                </div>
                                <div class="col-md-11">
                                    Slike neusaglašenog proizvoda / pictures of non-conformity<br>
                                </div>
                            </div>

                            <div class="panel-body" style="padding-top: 0px">
                                <div class="col-md-1">
                                    {!! Form::checkbox('', '', false, ['style'=>'width: 15px; height: 15px']) !!}
                                </div>
                                <div class="col-md-11">
                                    Slike rezultata korišćenja neusaglašenog proizvoda / proof of usage<br>
                                </div>
                            </div>

                            <div class="panel-body" style="padding-bottom: 6px; padding-top: 0px">
                                <div class="col-md-1">
                                    {!! Form::checkbox('', '', false, ['style'=>'width: 15px; height: 15px']) !!}
                                </div>
                                <div class="col-md-11">
                                    Uzorak neusaglašenog proizvoda - samples
                                </div>
                            </div>
                        </div>






                        <div class="row" style="padding-top: 20px">
                            <div class="col-md-1" align="center"> </div>
                            <div class="col-md-4" align="center"> Datum / date: </div>
                            <div class="col-md-2" align="center"> </div>
                            <div class="col-md-4" align="center"> Potpis / signature: </div>
                            <div class="col-md-1" align="center"> </div>
                        </div>

                        <div class="row" style="padding-top: 5px">
                            <div class="col-md-1"> </div>
                            <div class="col-md-4" align="center">
                                {!! Form::text('date_overa', ($datas->date==''?'':date('d.m.Y', strtotime($datas->date_overa)))  , ['id'=>'date_overa', 'style'=>'border-style:none; border-bottom:solid 1px; text-align:center']) !!}
                            </div>
                            <div class="col-md-2" align="center">
                                M.P.
                            </div>
                            <div class="col-md-4" align="center">
                                {!! Form::text('signature', $datas->signature, ['style'=>'border:none; border-style:none; border-bottom:solid 1px; text-align:center']) !!}
                            </div>
                            <div class="col-md-1"> </div>
                        </div>

                        {{--<div class="col-md-2" style="padding-top: 3px">--}}
                        {{--</div>--}}
                        {{--<div class="col-md-2" style="padding-top: 3px">--}}
                        {{--</div>--}}


                        <div class="form-group" align="center" style="padding-top: 30px">
                            <button id="btnUpdate" class="btn btn-success">Izmeni</button>
                        </div>
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </page>
</body>




    {{-- DATE PICKER --}}
    <script>
        objDatePicker("date");
        objDatePicker("date_overa");


        if ($('#opis').length > 0)       auto_grow(opis);

        function auto_grow(element) {
            element.style.height = (parseInt(element.scrollHeight) + 25) + "px";
            element.style.border = '0';
//        element.style.outline = '0';
            element.style.background='white';
            element.disabled = true;
        }

    </script>
    {{-- END DATE PICKER --}}



