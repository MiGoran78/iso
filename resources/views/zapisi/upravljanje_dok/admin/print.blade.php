{{--<html>--}}

    {{--<style>--}}
    {{--body {--}}
        {{--padding: 15px;--}}
    {{--}--}}
        {{--@media print {--}}
        {{--.form-control, .form-control.nobug {--}}
            {{--border: 0;--}}
            {{--outline: 0;--}}
            {{--box-shadow: none;--}}
        {{--}--}}

        {{--.form-control.nobug {--}}
            {{--transition: none;--}}
        {{--}--}}
    {{--}--}}
    {{--</style>--}}



    {{--<head>--}}
        {{--<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet" />--}}
        {{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>--}}
        {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>--}}
    {{--</head>--}}

    {{--<body>--}}
        {{--<button class="btn btn-primary" onclick="window.print()">Print</button>--}}
        {{--<input type="text" class="form-control nobug" value="no bug (disable transition)">--}}
    {{--</body>--}}



<link rel="stylesheet" href="/css/css.css?family=Lato:100,300,400,700">
<link rel="stylesheet" href="/css/font-awesome.min.css" />
<link rel="stylesheet" href="/css/bootstrap.min.css">
<link rel="stylesheet" href="/css/dropzone.min.css">

<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/dropzone.min.js"></script>


<style>
body {
    padding: 15px;
}
@media print {
    .form-control, .form-control.nobug {
        border: 0;
        outline: 0;
        box-shadow: none;
    }
    .form-control.nobug {
        transition: none;
    }
}
</style>
{{--<button class="btn btn-primary" onclick="window.print()">Print</button>--}}
{{--<textarea  class="form-control nobug">test</textarea>--}}





<body style="height:100%">
    <div class="container" style="font-family: 'Tahoma'; width: auto; height:100%" >

        <div class="col-md-6" style="margin: 0px; padding: 0px; padding-top: 15px">
            <div id="tree1" style="padding: 20px; padding-top: 0px; padding-bottom: 0px">

                <div class="row" style="border-bottom: solid 1px #9d9d9d; padding-bottom:0px">
                    <div class="col-md-12" align="left">
                        <img src="{{ $datas->logo }}" width="300px">
                    </div>
                    <div class="col-md-6" align="center">
                        <h4 style="margin-bottom: 4px"> {{$datas->naziv}} </h4>
                    </div>
                    <div class="col-md-6" align="right">
                        <h5 style="margin-bottom: 4px"> {{$datas->sifra}} ({{$datas->verzija}}) </h5>
                    </div>
                </div>



                <div class="col-md-12" align="center">
                    <h3 style="margin-bottom: 4px"><strong>  {{$datas->naslov}} </strong></h3>
                </div>


                @if (($datas->sadrzaj))
                    <div class="col-md-12" style="margin-bottom: 10px">
                        <h5 style="margin-bottom: 4px"><strong>
                            SADRŽAJ </strong></h5>
                        {!! Form::textarea('', $datas->sadrzaj, ['id'=>'sadrzaj', 'class'=>'form-control', 'rows'=>'1']) !!}
                    </div>
                @endif

                <div class="col-md-12" style="margin-bottom: 10px">
                    <h5 style="margin-bottom: 4px"><strong>
                            1. UVOD / SVRHA </strong></h5>
                    {!! Form::textarea('', $datas->uvod, ['id'=>'uvod', 'class'=>'form-control nobug', 'rows'=>'1']) !!}
                </div>

                <div class="col-md-12" style="margin-bottom: 10px">
                    <h5 style="margin-bottom: 4px"><strong>
                            2. REFERENTNA DOKUMENTA </strong></h5>
                    {!! Form::textarea('', $datas->ref_dokumenta, ['id'=>'ref_dokumenta', 'class'=>'form-control', 'rows'=>'1']) !!}
                </div>

                <div class="col-md-12" style="margin-bottom: 10px">
                    <h5 style="margin-bottom: 4px"><strong>
                            3. DEFINICIJE I POJMOVI </strong></h5>
                    {!! Form::textarea('definicije', $datas->definicije, ['id'=>'definicije', 'class'=>'form-control', 'rows'=>'1']) !!}
                </div>

                <div class="col-md-12" style="margin-bottom: 10px">
                    <h5 style="margin-bottom: 4px"><strong>
                            4. OPIS PROCEDURE </strong></h5>
                    {!! Form::textarea('definicije', $datas->opis, ['id'=>'opis', 'class'=>'form-control', 'rows'=>'1']) !!}
                </div>

                <div class="col-md-12" style="margin-bottom: 10px">
                    <h5 style="margin-bottom: 4px"><strong>
                        5. IZMENE </strong></h5>
                    {!! Form::textarea('', $datas->izmene, ['id'=>'izmene', 'class'=>'form-control', 'rows'=>'1']) !!}
                </div>

                <div class="col-md-12" style="margin-bottom: 10px">
                    <h5 style="margin-bottom: 4px"><strong>
                        6. PRAĆENJE I MERENJE </strong></h5>
                    {!! Form::textarea('', $datas->pracenje, ['id'=>'pracenje', 'class'=>'form-control', 'rows'=>'1']) !!}
                </div>

                <div class="col-md-12" style="margin-bottom: 10px">
                    <h5 style="margin-bottom: 4px;"><strong>
                        7. PRILOZI </strong></h5>
                    {!! Form::textarea('', $datas->prilozi, ['id'=>'prilozi', 'class'=>'form-control', 'rows'=>'1']) !!}
                </div>

            </span>
        </div>

    </div>
</body>


<script>
    auto_grow(uvod);
    auto_grow(ref_dokumenta);
    auto_grow(definicije);
    auto_grow(opis);
    auto_grow(izmene);
    auto_grow(pracenje);
    auto_grow(prilozi);

    function auto_grow(element) {
        element.style.height = (parseInt(element.scrollHeight) + 12) + "px";
        element.style.border = 'none';
//        element.style.outline = 'none';
    }
</script>