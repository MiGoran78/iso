@extends('admin.main')
@section('content')

    <div class="container" style="font-family: 'Verdana'; margin: 0px; margin-right: 20px; padding: 5px; width: auto; height:100%" >

        <div class="col-md-6" style="margin: 0px; padding: 0px; padding-top: 15px">
            <div class="panel panel-primary" style="margin-bottom: 0px">
                <div class="panel-heading" style="padding-bottom: 4px; padding-top: 4px">
                    <b>Dodavanje novog zapisa</b>
                </div>

                <div class="panel-body">
                    <ul id="tree1" style="padding: 20px;padding-top: 0px;">

                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif

                                <div class="row" style="">
                                    <div class="col-md-6" style="margin-top: 0px">
                                        {!! Form::label('Dokument') !!}
                                        {!! Form::open(['route'=>'admin.docs.store', 'class'=>'dropzone', 'id'=>'dzObj']) !!}
                                        {!! Form::close() !!}
                                    </div>
                                    <div class="col-md-1" style="margin-top: 0px">
                                    </div>

                        {!! Form::open(['route'=>'add.category']) !!}

                                    <div class="col-md-5" style="margin-top: 0px">
                                        <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                                            <div style="margin-bottom: 4px"><strong> Uputstvo/procedura iz U.PUPD </strong></div>
                                            {!! Form::select('path2', $doc_sifre, old('path2'), ['class'=>'form-control', 'id'=>'path2', 'placeholder'=>'Izaberi']) !!}
                                            <span class="text-danger">{{ $errors->first('title') }}</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row" style="padding-top: 15px; padding-bottom: 20px; border-bottom: solid 1px #9d9d9d">
                                    <div class="col-md-12" style="margin-top: 0px">
                                        Napomena: <br>
                                        <i>Ili prevući eksterni dokument (.doc, .pdf, .xls ...) ili  iz padajućeg menija ("uputstvo/procedura") izabrati P.UPD dokument.</i>
                                    </div>
                                </div>


                            <div class="row" style="padding-top: 20px">
                                <div class="col-md-12" style="margin-top: 0px">
                                    <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                                        {!! Form::label('Naziv') !!}
                                        {!! Form::text('title', old('title'), ['class'=>'form-control', 'id'=>'objTitle', 'placeholder'=>'...']) !!}
                                        <span class="text-danger">{{ $errors->first('title') }}</span>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group {{ $errors->has('parent_id') ? 'has-error' : '' }}">
                                {!! Form::label('Kategorija') !!}
                                {!! Form::select('parent_id', $allCategories, old('parent_id'), ['class'=>'form-control', 'id'=>'objCategory', 'placeholder'=>'Izaberi']) !!}
                                <span class="text-danger">{{ $errors->first('parent_id') }}</span>
                            </div>

                            <div class="form-group {{ $errors->has('path') ? 'has-error' : '' }}" >
                                {{--{!! Form::label('Putanja:') !!}--}}
                                {!! Form::text('path', old('path'), ['class'=>'form-control', 'id'=>'objPath', 'placeholder'=>'Unesi putanju']) !!}
                                {{--<span class="text-danger">{{ $errors->first('title') }}</span>--}}
                            </div>

                            <div class="form-group" align="center">
                                <button id="btnDodaj" class="btn btn-success">Dodaj</button>
                            </div>
                        {!! Form::close() !!}

                    </ul>
                </div>
            </div>
        </div>

    </div>


    <script type="text/javascript">
        Dropzone.options.dzObj = {
            maxFiles:        1,
            autoProcessQueue: true,
            paramName:       "file",
            init: function() {
                this.on("maxfilesexceeded", function(file){
                    this.removeFile(file);
                    alert("Može se dodati samo jedan dokument!");
                });
                this.on("addedfile", function(file) {
                    imeFajla = file.name;
                    if(imeFajla) {
                        document.getElementById('objPath').value = file.name;
                        document.getElementById('objTitle').value = file.name;
                    }
                });
            }
        };

    //    $('#objPath').prop("disabled", true);
        document.getElementById('objPath').style.visibility = 'hidden';
        document.getElementById('dzObj').style.background = "#d3e0e9";
        document.getElementById('btnDodaj').style.width="50%";
    </script>

@stop
