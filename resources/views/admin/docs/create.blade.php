<!DOCTYPE html>
<html>
<head>
    <title>ISO 9001</title>
    <link rel="stylesheet" href="/css/font-awesome.min.css" />
    <link rel="stylesheet" href="/css/css.css?family=Lato:100,300,400,700">
    <link rel="stylesheet" href="/css/bootstrap-3.min.css">
    <link rel="stylesheet" href="/css/dropzone.min.css">
    <script src="/js/jquery.js"></script>
    <script src="/js/dropzone.min.js"></script>
</head>

<body style="height:100%">
<div class="container" style="font-family: 'Verdana'; margin: 0px; margin-right: 20px; padding: 5px; width: auto; height:100%" >

    <div class="panel panel-primary" style="margin: 0px">
        <div class="panel-heading" style="background: #5b5b5b; color: #ffffff; border: solid 1px #3b3b3b">
            <h4 style="margin: 0px">
                ISO standard
            </h4>
        </div>
    </div>

    {{-- Pocetak sekcije--}}
    <div class="col-md-6" style="margin: 0px; padding: 0px; padding-top: 15px">
        <div class="panel panel-primary" style="margin-bottom: 0px">
            <div class="panel-heading"><b>Dodavanje novog zapisa</b></div>
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

                    {!! Form::open(['route'=>'add.category']) !!}
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
                    {!! Form::close() !!}

                </ul>
            </div>
        </div>
    </div>
    {{-- Kraj sekcije--}}

</div>
</body>


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

//    imeFajla='';
//    document.getElementById('objTitle').value = "";
//    document.getElementById('objCategory').value = '';
//    document.getElementById('objPath').value = '';
</script>

</html>
