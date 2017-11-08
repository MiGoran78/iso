@extends('zapisi.obuke.main')
@section('content')

    <div class="container" style="font-family: 'Verdana'; margin: 0px; margin-right: 20px; padding: 5px; width: auto; height:100%" >

        <div class="col-md-12" style="margin: 0px; padding: 0px; padding-top: 15px">
            <div class="panel panel-primary" style="margin-bottom: 0px">
                <div class="panel-heading" style="padding-bottom: 4px; padding-top: 4px">
                    <b>U.ULR.ZOE &nbsp;- &nbsp;Obuka</b>&nbsp;&nbsp;[Nov zapis]
                </div>

                <div class="panel-body" style="padding-top: 5px">
                    <div id="tree1" style="padding: 20px; padding-top: 0px; padding-bottom: 0px">

                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif

                        {!! Form::open(['method'=>'POST', 'action'=> ['ObukeController@store']]) !!}
                            {!! Form::hidden('idRef', date("ymdhms")) !!}
                            {!! Form::hidden('plan_path', '', ['id'=>'plan_path']) !!}
                            {!! Form::hidden('izvestaj_path', '', ['id'=>'izvestaj_path']) !!}


                            <div style="padding-top:10px; border-bottom: solid 0px #9d9d9d">
                                <div class="row" style="padding-bottom: 2px">
                                    <div class="col-md-2" style="margin-top: 3px">
                                        Naziv obuke
                                    </div>
                                    <div class="col-md-4" align="left">
                                        {!! Form::text('naziv', '', ['class'=>'form-control', 'placeholder'=>'...']) !!}
                                    </div>
                                </div>
                            </div>

                            <div style="padding-top:10px; border-bottom: solid 0px #9d9d9d">
                                <div class="row" style="padding-bottom: 2px">
                                    <div class="col-md-2" style="margin-top: 3px">
                                        Izdao nalog za obuku
                                    </div>
                                    <div class="col-md-4" align="left">
                                        {!! Form::text('izdao', '', ['class'=>'form-control', 'placeholder'=>'...']) !!}
                                    </div>
                                </div>
                            </div>


                            <div style="padding-top:20px; padding-bottom: 10px; border-bottom: solid 0px #9d9d9d">
                                <div class="row" style="padding-bottom: 2px">
                                    <div class="col-md-2" style="margin-top: 5px">
                                        Datum početka obuke
                                    </div>
                                    <div class="col-md-10" align="left">
                                        {!! Form::text('dat_pocetka', '', ['class'=>'form-control', 'style'=>'width:130px; text-align: center', 'placeholder'=>'']) !!}
                                    </div>
                                </div>

                                <div class="row" style="padding-bottom: 2px; padding-top: 10px">
                                    <div class="col-md-2" style="margin-top: 5px">
                                        Datum završetka obuke
                                    </div>
                                    <div class="col-md-10" align="left">
                                        {!! Form::text('dat_zavrsetka', '', ['class'=>'form-control', 'style'=>'width:130px; text-align: center', 'placeholder'=>'']) !!}
                                    </div>
                                </div>
                            </div>


                            <div style="padding-top:5px; padding-bottom: 10px; border-bottom: solid 0px #9d9d9d">
                                <div class="row" style="padding-bottom: 2px">
                                    <div class="col-md-2" style="margin-top: 3px">
                                        Vrsta obuke
                                    </div>
                                    <div class="col-md-10" align="left">
                                        {!! Form::radio('vrsta', '1', '') !!}
                                            interna &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        {!! Form::radio('vrsta', '2', '') !!}
                                            eksterna
                                    </div>
                                </div>
                            </div>


                            <div style="padding-top:10px; padding-bottom: 10px; border-bottom: solid 0px #9d9d9d">
                                <div class="row" style="padding-bottom: 2px">
                                    <div class="col-md-2" style="margin-top: 6px">
                                        Polaznik obuke
                                    </div>
                                    <div class="col-md-10" align="left">
                                        {!! Form::text('polaznik', '', ['class'=>'form-control', 'placeholder'=>'...']) !!}
                                    </div>
                                </div>
                            </div>



                            <div style="padding-top:0px; padding-bottom: 10px; border-bottom: solid 0px #9d9d9d">
                                <div class="row" style="padding-bottom: 0px">
                                    <div class="col-md-2" style="margin-top: 6px">
                                        Sektor
                                    </div>
                                    <div class="col-md-4" align="left">
                                        {!! Form::text('sektor', '', ['class'=>'form-control', 'placeholder'=>'...']) !!}
                                    </div>
                                </div>
                            </div>

                            <div style="padding-top:0px; padding-bottom: 10px; border-bottom: solid 0px #9d9d9d">
                                <div class="row" style="padding-bottom: 0px">
                                    <div class="col-md-2" style="margin-top: 6px">
                                        Mentor
                                    </div>
                                    <div class="col-md-4" align="left">
                                        {!! Form::text('mentor', '', ['class'=>'form-control', 'placeholder'=>'...']) !!}
                                    </div>
                                </div>
                            </div>

                            <div style="padding-top:0px; padding-bottom: 10px; border-bottom: solid 0px #9d9d9d">
                                <div class="row" style="padding-bottom: 0px">
                                    <div class="col-md-2" style="margin-top: 6px">
                                        Instruktor
                                    </div>
                                    <div class="col-md-4" align="left">
                                        {!! Form::text('instruktor', '', ['class'=>'form-control', 'placeholder'=>'...']) !!}
                                    </div>
                                </div>
                            </div>

                            <div style="padding-top:10px; padding-bottom: 10px; border-bottom: solid 1px #9d9d9d">
                                <div class="row" style="padding-bottom: 0px">
                                    <div class="col-md-2" style="margin-top: 6px">
                                        Komisija
                                    </div>
                                    <div class="col-md-10" align="left">
                                        {!! Form::text('komisija', '', ['class'=>'form-control', 'placeholder'=>'...']) !!}
                                    </div>
                                </div>
                            </div>



                            <div hidden class="dropzone" id="dzObj"></div>

                            <div style="padding-top:10px; padding-bottom: 20px; border-bottom: solid 1px #9d9d9d">
                                <div class="row" style="padding-bottom: 2px">
                                    <div class="col-md-6">
                                        PLAN/OPIS OBUKE
                                    </div>
                                    <div class="col-md-6">
                                        TEST OBUKE, SERTIFIKAT ILI IZVEŠTAJ OBUČENOSTI
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-control dropzone" id="dZUpload" style="padding-top: 0px; background: #d3e0e9; margin-top:5px; width:70%; height:170px">
                                            <div class="dz-default dz-message"><br><br> Prevuci dokument</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-control dropzone" id="dZUploadIzv" style="padding-top: 0px; background: #d3e0e9; margin-top:5px; width:70%; height:170px">
                                            <div class="dz-default dz-message"><br><br> Prevuci dokument</div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div style="padding-top:10px; padding-bottom: 10px; border-bottom: solid 1px #9d9d9d">
                                <div class="row" style="padding-bottom: 2px">
                                    <div class="col-md-2" style="margin-top: 0px">
                                        Ocena obučenosti
                                    </div>
                                    <div class="col-md-2" style="margin-top: 5px">
                                        {{--{!! Form::radio('ocena', '1', '') !!}--}}
                                            {{--&nbsp;1. odlično <br>--}}
                                        {!! Form::radio('ocena', '2', '') !!}
                                            &nbsp;1. zadovoljio <br>
                                        {!! Form::radio('ocena', '3', '') !!}
                                            &nbsp;2. nije zadovoljio <br>
                                    </div>
                                    <div class="col-md-8" align="left">
                                        {!! Form::textarea('ocena_napomena', '', ['class'=>'form-control', 'style'=>'resize: vertical', 'rows'=>'3', 'placeholder'=>'Napomena']) !!}
                                    </div>
                                </div>
                            </div>


                            <div style="padding-top:10px; padding-bottom: 10px; border-bottom: solid 1px #9d9d9d">
                                <div class="row" style="padding-bottom: 2px">
                                    <div class="col-md-2" style="margin-top: 0px">
                                        Status obuke
                                    </div>
                                    <div class="col-md-2" style="margin-top: 5px">
                                        {!! Form::radio('status', '1', '') !!}
                                        &nbsp; u planu<br>
                                        {!! Form::radio('status', '2', '') !!}
                                        &nbsp; u toku<br>
                                        {!! Form::radio('status', '3', '') !!}
                                        &nbsp; završeno<br>
                                        {!! Form::radio('status', '4', '') !!}
                                        &nbsp; otkazana<br>
                                    </div>
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




    <script type="text/javascript">

        $(document).ready(function () {
            Dropzone.autoDiscover = false;
            var $prfx_plan = "{{date('ymdhms')}}_Plan_obuke_";

            Dropzone.options.dZUpload = {
                maxFiles:        1,
//                addRemoveLinks: true,
                url: "/upload.php?file=" + $prfx_plan + "&path={{$dir_obuke}}",
                init: function() {
                    this.on("maxfilesexceeded", function(file){
                        this.removeFile(file);
                        alert("Može se dodati samo jedan dokument!");
                    });
                    this.on("addedfile", function(file) {
                        imeFajla = file.name;
                        if(imeFajla) {
//                            file.previewElement.classList.add("dz-success");
                            document.getElementById('plan_path').value = $prfx_plan + file.name;
                        }
                    });
                }
            };
            $("#dZUpload").dropzone({ });
        });




        $(document).ready(function () {
            Dropzone.autoDiscover = false;
            var $prfx_izvestaj = "{{date('ymdhms')}}_Izvestaj_obuke_";

            Dropzone.options.dZUploadIzv = {
                maxFiles:        1,
    //                addRemoveLinks: true,
                url: "/upload.php?file=" + $prfx_izvestaj + "&path={{$dir_obuke}}",
                init: function() {
                    this.on("maxfilesexceeded", function(file){
                        this.removeFile(file);
                        alert("Može se dodati samo jedan dokument!");
                    });
                    this.on("addedfile", function(file) {
                        imeFajla = file.name;
                        if(imeFajla) {
    //                            file.previewElement.classList.add("dz-success");
                            document.getElementById('izvestaj_path').value = $prfx_izvestaj + file.name;
                        }
                    });
                }
            };
            $("#dZUploadIzv").dropzone({ });
        });
    </script>


    <script>
        $(document).ready(function() {
            $('[data-toggle="popover"]').popover({
                placement: 'auto top'
            });
        });
    </script>


    {{-- DATE PICKER --}}
    <script>
        objDatePicker("dat_pocetka");
        objDatePicker("dat_zavrsetka");
    </script>
    {{-- END DATE PICKER --}}

@stop
