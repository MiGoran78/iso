{{--<!DOCTYPE html>--}}

{{--<html>--}}
{{--<head>--}}
    {{--<title>ISO 9001</title>--}}
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />--}}
    {{--<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">--}}
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>--}}
    {{--<link href="/css/treeview.css" rel="stylesheet">--}}

    {{--<link rel="stylesheet" href="/css/dropzone.css">--}}
    {{--<script type="text/javascript" src="/js/dropzone.min.js"></script>--}}
    {{--<script src="/js/jquery-2.1.4.min.js"></script>--}}
{{--</head>--}}

{{--<style>--}}
    {{--.dropzone {--}}
        {{--border: 2px dashed #0087F7;--}}
        {{--border-radius: 5px;--}}
        {{--background: white;--}}
    {{--}--}}
{{--</style>--}}



{{--<body style="height:100%">--}}
{{--<div class="container" style="font-family: 'Verdana'; margin: 5px; margin-right: 20px; padding: 0px; width: auto; height:100%">--}}

    {{--<div class="panel panel-primary" style="margin: 0px">--}}
        {{--<div class="panel-heading" style="background: #5b5b5b; color: #ffffff; border: solid 1px #3b3b3b"><b>ISO9001:2008, ISO 14001:2004, BSI OHSAS 18001:2007</b></div>--}}
    {{--</div>--}}

    {{--<div class="row">--}}
        {{--<div class="panel-body">--}}

            {{-- LEVI PANEL --}}
            {{--<div class="col-md-7">--}}
                {{--<ul id="tree1" style="font-family: 'Calibri'; font-size: 16px">--}}
                    {{--@foreach($categories as $category)--}}
                        {{--<li>--}}
                            {{--<img src="/pic/expand2.png">&nbsp;--}}
                            {{--{{ $category->title }}--}}
                            {{--@if(count($category->childs))--}}
                                {{--@include('manageChild',['childs' => $category->childs])--}}
                            {{--@endif--}}
                        {{--</li>--}}
                    {{--@endforeach--}}
                {{--</ul>--}}
            {{--</div>--}}


            {{-- DESNI PANEL --}}
            {{--<div class="col-md-5" style="margin: 0px; padding: 0px;">--}}
                {{--<div class="panel panel-primary">--}}
                    {{--<div class="panel-heading"><b>Dodavanje novog zapisa</b></div>--}}
                    {{--<div class="panel-body">--}}
                        {{--<ul id="tree1">--}}

                            {{--{!! Form::open(['route'=>'add.category']) !!}--}}
                                {{--@if ($message = Session::get('success'))--}}
                                    {{--<div class="alert alert-success alert-block">--}}
                                        {{--<button type="button" class="close" data-dismiss="alert">×</button>--}}
                                        {{--<strong>{{ $message }}</strong>--}}
                                    {{--</div>--}}
                                {{--@endif--}}

                                {{--<h5>--}}
                                    {{--<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">--}}
                                        {{--{!! Form::label('Naziv:') !!}--}}
                                        {{--{!! Form::text('title', old('title'), ['class'=>'form-control', 'placeholder'=>'Unesi naziv']) !!}--}}
                                        {{--<span class="text-danger">{{ $errors->first('title') }}</span>--}}
                                    {{--</div>--}}

                                    {{--<div class="form-group {{ $errors->has('parent_id') ? 'has-error' : '' }}">--}}
                                        {{--{!! Form::label('Kategorija:') !!}--}}
                                        {{--{!! Form::select('parent_id', $allCategories, old('parent_id'), ['class'=>'form-control', 'placeholder'=>'Izaberi']) !!}--}}
                                        {{--<span class="text-danger">{{ $errors->first('parent_id') }}</span>--}}
                                    {{--</div>--}}

                                    {{--<div class="form-group {{ $errors->has('path') ? 'has-error' : '' }}">--}}
                                        {{--{!! Form::label('Putanja:') !!}--}}
                                        {{--{!! Form::text('path', old('path'), ['class'=>'form-control', 'placeholder'=>'Unesi putanju']) !!}--}}
                                        {{--<span class="text-danger">{{ $errors->first('title') }}</span>--}}
                                    {{--</div>--}}
                                {{--</h5>--}}

                            {{--<div class="form-group">--}}
                                    {{--<button class="btn btn-success">Dodaj</button>--}}
                                {{--</div>--}}
                            {{--{!! Form::close() !!}--}}

                        {{--</ul>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}

{{--<script src="/js/treeview.js"></script>--}}

{{--<script>--}}
    {{--$(function() {--}}
        {{--Dropzone.autoDiscover = false;--}}
        {{--Dropzone.maxFilesize = 1024;--}}
        {{--var myDropzone = new Dropzone("#my-dropzone",{--}}
            {{--paramName: "file",--}}
            {{--url: 'file-upload.php',--}}
            {{--maxFilesize: 1024, // MB--}}

            {{--sending: function(file, xhr, formData) {--}}
                {{--// Pass token. You can use the same method to pass any other values as well such as a id to associate the image with for example.--}}
            {{--},--}}
            {{--success:function(file,response) {--}}
            {{--}--}}
        {{--});--}}
{{--</script>--}}

{{--</body>--}}
{{--</html>--}}
