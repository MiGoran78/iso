<link rel="stylesheet" href="/css/font-awesome.min.css" />
<link rel="stylesheet" href="/css/bootstrap.min.css">
<link rel="stylesheet" href="/css/dropzone.min.css">
{{--<link rel="stylesheet" type="text/css" href="/css/sheets-of-paper-a4.css">--}}

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
        margin: 0 auto;
        margin-bottom: 0.5cm;
        box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);

        /*background: white;*/
        /*display: block;*/
        /*margin: 0cm;*/
    }
    /*page[size="A4"] {*/
        /*background: #f5f5f5;*/
        /*height: 21cm;*/
        /*width: 29.7cm;*/
    /*}*/
    page[size="A4"][layout="portrait"] {
        width: 29.7cm;
        /*height: 21cm;*/
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
<page size="A4" layout="portrait">
    <div class="container" style="font-family: 'Verdana'; margin: 0px; margin-right: 20px; padding: 5px; padding-top: 0px; width: auto; height:100%" >
        <div class="row" style="margin-left: 5px; margin-right: 5px; padding: 0px;" align="right">
            <table class="table" style="margin: 0px">
                <tr>
                    <td><h4 style="padding: 2px; margin: 2px; margin-left: 0px"><strong>
                            U.KMC.LDO &nbsp;- &nbsp;Lista dobavljača </strong></h4>
                    </td>
                </tr>
            </table>

            <table class="table" style="font-size: 9pt">
                <thead>
                <tr>
                    <td width="25%" style="text-align: left; vertical-align: bottom">Naziv dobavljača</td>
                    <td width="13%" style="text-align: left; vertical-align: bottom">Dobavljač</td>
                    <td width="18%" style="text-align: left; vertical-align: bottom">Ocena - prihvatljivost </td>
                    <td width="10%" style="text-align: center; vertical-align: bottom">Naziv proizvoda /usluge</td>
                    <td width="10%" style="text-align: center; vertical-align: bottom">Kontakt</td>
                    <td width="8%" style="text-align: center; vertical-align: bottom">Telefon</td>
                </tr>
                </thead>

                <tbody>
                @if($datas)
                    @foreach($datas as $key=>$data)
                        <tr>
                            <td style="padding: 4px; text-align: left"><strong> {{$data->dobavljac}} </strong></td>

                            <td style="padding: 4px; text-align: left"> {{$data->dobavljac_tip }} </td>
                            <td style="padding: 4px; text-align: left">
                                <div class="">
                                    {!! Form::hidden('id', $data->id) !!}
                                    {!! Form::hidden('idRef', $data->idRef) !!}
                                    @if (empty($prihatljiv[$key]))
                                        neocenjen
                                    @else
                                        {{empty($ocene[$key]) ? '0' : $ocene[$key] }} - {{$prihatljiv[$key]}}
                                    @endif
                                </div>
                            </td>

                            <td style="padding: 4px; text-align: center"> {{empty($naziv[$key]) ? '' : $naziv[$key] }} </td>
                            <td style="padding: 4px; text-align: center"> {{$data->kontakt1 }}</td>
                            <td style="padding: 4px; text-align: center"> {{$data->telefon1 }}</td>

                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>

        </div>
    </div>
</body>


