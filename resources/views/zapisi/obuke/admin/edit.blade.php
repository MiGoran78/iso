@extends('zapisi.obuke.main')
@section('content')

    <div class="container" style="font-family: 'Verdana'; margin: 0px; margin-right: 20px; padding: 5px; width: auto; height:100%" >

        <div class="col-md-12" style="margin: 0px; padding: 0px; padding-top: 15px">
            <div class="panel panel-primary" style="margin-bottom: 0px">
                <div class="panel-heading" style="padding-bottom: 4px; padding-top: 4px">
                    <b>Obuka</b>&nbsp;&nbsp;[Nov zapis]
                </div>

                <div class="panel-body" style="padding-top: 5px">
                    <div id="tree1" style="padding: 20px; padding-top: 0px; padding-bottom: 0px">

                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif

                        {!! Form::open(['method'=>'PUT', 'action'=> ['ObukeController@update', $datas->id]]) !!}
                        {!! Form::hidden('idRef', date("ymdhms")) !!}

                        <div style="padding-top:10px; border-bottom: solid 0px #9d9d9d">
                            <div class="row" style="padding-bottom: 2px">
                                <div class="col-md-2" style="margin-top: 3px">
                                    Naziv obuke
                                </div>
                                <div class="col-md-4" align="left">
                                    {!! Form::text('naziv', $datas->naziv, ['class'=>'form-control', 'placeholder'=>'...']) !!}
                                </div>
                            </div>
                        </div>

                        <div style="padding-top:10px; border-bottom: solid 0px #9d9d9d">
                            <div class="row" style="padding-bottom: 2px">
                                <div class="col-md-2" style="margin-top: 3px">
                                    Izdao nalog za obuku
                                </div>
                                <div class="col-md-4" align="left">
                                    {!! Form::text('izdao', $datas->izdao, ['class'=>'form-control', 'placeholder'=>'...']) !!}
                                </div>
                            </div>
                        </div>


                        <div style="padding-top:20px; padding-bottom: 10px; border-bottom: solid 0px #9d9d9d">
                            <div class="row" style="padding-bottom: 2px">
                                <div class="col-md-2" style="margin-top: 5px">
                                    Datum početka obuke
                                </div>
                                <div class="col-md-10" align="left">
                                    {!! Form::text('dat_pocetka', $datas->dat_pocetka, ['class'=>'form-control', 'style'=>'width:130px; text-align: center', 'placeholder'=>'']) !!}
                                </div>
                            </div>

                            <div class="row" style="padding-bottom: 2px; padding-top: 10px">
                                <div class="col-md-2" style="margin-top: 5px">
                                    Datum završetka obuke
                                </div>
                                <div class="col-md-10" align="left">
                                    {!! Form::text('dat_zavrsetka', $datas->dat_zavrsetka, ['class'=>'form-control', 'style'=>'width:130px; text-align: center', 'placeholder'=>'']) !!}
                                </div>
                            </div>
                        </div>


                        <div style="padding-top:10px; padding-bottom: 10px; border-bottom: solid 0px #9d9d9d">
                            <div class="row" style="padding-bottom: 2px">
                                <div class="col-md-2" style="margin-top: 3px">
                                    Vrsta obuke
                                </div>
                                <div class="col-md-10" align="left">
                                    {!! Form::radio('vrsta', '1', $datas->vrsta==1 ? true:false) !!}
                                    interna &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    {!! Form::radio('vrsta', '2', $datas->vrsta==2 ? true:false) !!}
                                    eksterna
                                </div>
                            </div>
                        </div>


                        <div style="padding-top:10px; padding-bottom: 10px; border-bottom: solid 0px #9d9d9d">
                            <div class="row" style="padding-bottom: 15px; border-bottom: solid 1px #9d9d9d">
                                <div class="col-md-2" style="margin-top: 6px">
                                    Polaznik obuke
                                </div>
                                <div class="col-md-10" align="left">
                                    {!! Form::text('polaznik', $datas->polaznik, ['class'=>'form-control', 'placeholder'=>'...']) !!}
                                </div>
                            </div>
                        </div>


                        <div hidden class="dropzone" id="dzObj"></div>

                        <div style="padding-top:5px; padding-bottom: 15px; border-bottom: solid 1px #9d9d9d">
                            <div class="row" style="padding-bottom: 2px">
                                <div class="col-md-6">
                                    PLAN/OPIS OBUKE
                                </div>
                                <div class="col-md-6">
                                    TEST OBUKE, SERTIFIKAT ILI IZVEŠTAJ OBUČENOSTI
                                </div>

                                <div class="col-md-6" style="margin-top: 10px">
                                    @if($datas->plan_path)
                                        <a target="_blank" href="../../{{$dir_obuke}}/{{$datas->plan_path}}"><img src="/pic/doc.png"></a>
                                        <span style="font-size: 8pt">&nbsp;&nbsp; {{$datas->plan_path}}</span>
                                    @else
                                        <div class="form-control dropzone" id="dZUpload" style="padding-top: 0px; background: #d3e0e9; margin-top:5px; width:70%; height:170px">
                                            <div class="dz-default dz-message"><br><br> Prevuci dokument</div>
                                        </div>
                                    @endif
                                    {!! Form::hidden('plan_path', $datas->plan_path, ['id'=>'plan_path']) !!}
                                </div>

                                <div class="col-md-6" style="margin-top: 10px">
                                    @if($datas->izvestaj_path)
                                        <a target="_blank" href="../../{{$dir_obuke}}/{{$datas->izvestaj_path}}"><img src="/pic/doc.png"></a>
                                        <span style="font-size: 8pt">&nbsp;&nbsp; {{$datas->izvestaj_path}}</span>
                                    @else
                                        <div class="form-control dropzone" id="dZUploadIzv" style="padding-top: 0px; background: #d3e0e9; margin-top:5px; width:70%; height:170px">
                                            <div class="dz-default dz-message"><br><br> Prevuci dokument</div>
                                        </div>
                                    @endif
                                    {!! Form::hidden('izvestaj_path', $datas->izvestaj_path, ['id'=>'izvestaj_path']) !!}
                                </div>
                            </div>
                        </div>


                        <div style="padding-top:10px; padding-bottom: 15px; border-bottom: solid 1px #9d9d9d">
                            <div class="row" style="padding-bottom: 2px">
                                <div class="col-md-2" style="margin-top: 0px">
                                    Ocena obučenosti
                                </div>
                                <div class="col-md-2" style="margin-top: 5px">
                                    {!! Form::radio('ocena', '1', $datas->ocena==1 ? true:false) !!}
                                    &nbsp;1. odlično <br>
                                    {!! Form::radio('ocena', '2', $datas->ocena==2 ? true:false) !!}
                                    &nbsp;2. zadovoljio <br>
                                    {!! Form::radio('ocena', '3', $datas->ocena==3 ? true:false) !!}
                                    &nbsp;3. nije zadovoljio <br>
                                </div>
                                <div class="col-md-8" align="left">
                                    {!! Form::textarea('ocena_napomena', $datas->ocena_napomena, ['class'=>'form-control', 'style'=>'resize: vertical', 'rows'=>'3', 'placeholder'=>'Napomena']) !!}
                                </div>
                            </div>
                        </div>


                        <div style="padding-top:10px; padding-bottom: 10px; border-bottom: solid 1px #9d9d9d">
                            <div class="row" style="padding-bottom: 2px">
                                <div class="col-md-2" style="margin-top: 0px">
                                    Status obuke
                                </div>
                                <div class="col-md-2" style="margin-top: 5px">
                                    {!! Form::radio('status', '1', $datas->status==1 ? true:false) !!}
                                    &nbsp; nije započeto<br>
                                    {!! Form::radio('status', '2', $datas->status==2 ? true:false) !!}
                                    &nbsp; u toku<br>
                                    {!! Form::radio('status', '3', $datas->status==3 ? true:false) !!}
                                    &nbsp; završeno<br>
                                    {!! Form::radio('status', '4', $datas->status==4 ? true:false) !!}
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


    {{-- DATE PICKER --}}
    <script>
        objDatePicker("dat_pocetka");
        objDatePicker("dat_zavrsetka");
    </script>
    {{-- END DATE PICKER --}}

@stop
