@extends('zapisi.uskl_sa_zakonima.main')
@section('content')

    <div class="container" style="font-family: 'Verdana'; margin: 0px; margin-right: 20px; padding: 5px; padding-top: 0px; width: auto; height:100%" >
        <table class="table" style="margin: 0px">
            <tr>
                <td  class="col-md-8" align="left">
                    <h3 style="font-family: Tahoma; color:red; padding: 2px; margin: 2px; margin-left: 5px"> Vrednovanje usklađenosti sa zakonskim i drugim zahtevima </h3>
                </td>

                <td  class="col-md-4" align="right">
                    {!! Form::open(['method'=>'GET', 'action'=> ['PreispitRukController@create']]) !!}
                    {!! Form::submit('NOVO', ['class'=>'btn btn-default', 'style'=>'background:#eeeeee']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        </table>
    </div>


@stop
