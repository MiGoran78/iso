<link rel="stylesheet" href="/css/css.css?family=Lato:100,300,400,700">
<link rel="stylesheet" href="/css/font-awesome.min.css" />
<link rel="stylesheet" href="/css/bootstrap.min.css">
<link rel="stylesheet" href="/css/dropzone.min.css">
{{--<link rel="stylesheet" type="text/css" href="/css/sheets-of-paper-a4.css">--}}

<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/dropzone.min.js"></script>


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

                    <div class="row">
                        <div class="col-md-12">
                            <h6 style="margin: 0; margin-right: 10px"" align="right"><strong> {{$datas->sifra}} ({{$datas->verzija}}) </strong></h6>
                        </div>

                        <div class="col-md-12">
                            <img src="{{ $datas->logo }}" width="300px">
                        </div>

                        <div class="col-md-12" style="border-bottom: solid 1px #9d9d9d">
                            <h4 style="margin: 10px" align="right"> {{$datas->naziv}} </h4>
                        </div>
                    </div>



                    <div class="col-md-12" style="padding-bottom:15px">
                        <h3 style="margin-bottom: 4px" align="center"><strong>  {{$datas->naslov}} </strong></h3>
                    </div>


                    @if (($datas->sadrzaj))
                        <div class="col-md-12" style="margin-bottom: 10px">
                            <h5 style="margin-bottom: 4px"><strong>
                                SADRŽAJ </strong></h5>
                            {!! Form::textarea('', $datas->sadrzaj, ['id'=>'sadrzaj', 'class'=>'form-control', 'rows'=>'1']) !!}
                        </div>
                    @endif

                    @if (($datas->uvod))
                        <div class="col-md-12" style="margin-bottom: 10px">
                            <h5 style="margin-bottom: 4px"><strong>
                                    1. UVOD / SVRHA </strong></h5>
                            {!! Form::textarea('', $datas->uvod, ['id'=>'uvod', 'class'=>'form-control', 'rows'=>'1']) !!}
                        </div>
                    @endif

                    @if (($datas->ref_dokumenta))
                        <div class="col-md-12" style="margin-bottom: 10px">
                            <h5 style="margin-bottom: 4px"><strong>
                                    2. REFERENTNA DOKUMENTA </strong></h5>
                            {!! Form::textarea('', $datas->ref_dokumenta, ['id'=>'ref_dokumenta', 'class'=>'form-control', 'rows'=>'1']) !!}
                        </div>
                    @endif

                    @if (($datas->definicije))
                        <div class="col-md-12" style="margin-bottom: 10px">
                            <h5 style="margin-bottom: 4px"><strong>
                                    3. DEFINICIJE I POJMOVI </strong></h5>
                            {!! Form::textarea('definicije', $datas->definicije, ['id'=>'definicije', 'class'=>'form-control', 'rows'=>'1']) !!}
                        </div>
                    @endif

                    @if (($datas->opis))
                        <div class="col-md-12" style="margin-bottom: 10px">
                            <h5 style="margin-bottom: 4px"><strong>
                                    4. OPIS PROCEDURE </strong></h5>
                            {!! Form::textarea('definicije', $datas->opis, ['id'=>'opis', 'class'=>'form-control', 'rows'=>'1']) !!}
                        </div>
                    @endif

                    @if (($datas->izmene))
                        <div class="col-md-12" style="margin-bottom: 10px">
                            <h5 style="margin-bottom: 4px"><strong>
                                5. IZMENE </strong></h5>
                            {!! Form::textarea('', $datas->izmene, ['id'=>'izmene', 'class'=>'form-control', 'rows'=>'1']) !!}
                        </div>
                    @endif

                    @if (($datas->pracenje))
                        <div class="col-md-12" style="margin-bottom: 10px">
                            <h5 style="margin-bottom: 4px"><strong>
                                6. PRAĆENJE I MERENJE </strong></h5>
                            {!! Form::textarea('', $datas->pracenje, ['id'=>'pracenje', 'class'=>'form-control', 'rows'=>'1']) !!}
                        </div>
                    @endif

                    @if (($datas->prilozi))
                        <div class="col-md-12" style="margin-bottom: 10px">
                            <h5 style="margin-bottom: 4px;"><strong>
                                7. PRILOZI </strong></h5>
                            {!! Form::textarea('', $datas->prilozi, ['id'=>'prilozi', 'class'=>'form-control nobug', 'rows'=>'1']) !!}
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </page>
</body>



<script>
    if ($('#sadrzaj').length > 0)       auto_grow(sadrzaj);
    if ($('#uvod').length > 0)          auto_grow(uvod);
    if ($('#ref_dokumenta').length > 0) auto_grow(ref_dokumenta);
    if ($('#definicije').length > 0)    auto_grow(definicije);
    if ($('#opis').length > 0)          auto_grow(opis);
    if ($('#izmene').length > 0)        auto_grow(izmene);
    if ($('#pracenje').length > 0)      auto_grow(pracenje);
    if ($('#prilozi').length > 0)       auto_grow(prilozi);

    function auto_grow(element) {
        element.style.height = (parseInt(element.scrollHeight) + 15) + "px";
        element.style.border = '0';
//        element.style.outline = '0';
        element.style.background='white';
        element.disabled = true;
    }

    window.print();
    window.history.back();
</script>
