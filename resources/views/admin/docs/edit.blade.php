@extends('admin.main')
@section('content')

    <div class="container" style="font-family: 'Verdana'; margin: 0px; margin-right: 20px; padding: 5px; width: auto; height:100%" >

        <div class="col-md-6" style="margin: 0px; padding: 0px; padding-top: 15px">
            <div class="panel panel-primary" style="margin-bottom: 0px">
                <div class="panel-heading" style="padding-bottom: 4px; padding-top: 4px">
                    <b>Izmena zapisa</b>
                </div>

                <div class="panel-body">
                    <ul id="tree1" style="padding: 20px;padding-top: 0px;">

                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif

                        {!! Form::label('Dokument:') !!}
                        {!! Form::open(['route'=>'admin.docs.store', 'class'=>'dropzone', 'id'=>'dzObj']) !!}
                        {!! Form::close() !!}
                        <br>

                        {!! Form::open(['route'=>'edit.category']) !!}
                                <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                                    {!! Form::label('Naziv:') !!}
                                    {!! Form::text('title', old('title'), ['class'=>'form-control', 'id'=>'objTitle', 'placeholder'=>'Unesi naziv']) !!}
                                    <span class="text-danger">{{ $errors->first('title') }}</span>
                                </div>

                                <div class="form-group {{ $errors->has('parent_id') ? 'has-error' : '' }}">
                                    {!! Form::label('Kategorija:') !!}
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
                                {!! Form::text('id', old('id'), ['class'=>'form-control', 'id'=>'objID', 'placeholder'=>'Unesi putanju']) !!}
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
    //                    document.getElementById('objTitle').value = file.name;
                    }
                });
            }
        };


        //$('#objPath').prop("disabled", true);
        document.getElementById('objID').style.visibility = 'hidden';
        document.getElementById('objPath').style.visibility = 'hidden';
        document.getElementById('dzObj').style.background = "#d3e0e9";
        document.getElementById('btnDodaj').style.width="50%";

        @if($selected)
            document.getElementById('objID').value = '{{ $selected->id }}';
            document.getElementById('objTitle').value = '{{ $selected->title }}';
            document.getElementById('objCategory').value = '{{ $selected->parent_id }}';
            document.getElementById('objPath').value = '{{ $selected->path }}';
        @endif
    </script>

@stop
