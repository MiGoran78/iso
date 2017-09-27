@extends('zapisi.dobavljaci.main')
@section('content')

    {!! Form::open(['method'=>'GET', 'action'=> ['DobavljacController@create']]) !!}
    {!! Form::submit('New', ['class'=>'btn btn-default', 'style'=>'background:#eeeeee']) !!}
    {!! Form::close() !!}

@stop




{{--{!! Form::open(['method'=>'POST', 'action'=> ['DobavljaciController@ocena']]) !!}--}}
{{--{!! Form::submit('Ocena', ['class'=>'btn btn-default', 'style'=>'background:#eeeeee']) !!}--}}
{{--{!! Form::close() !!}--}}


{{--{!! Form::open(['method'=>'POST', 'action'=> ['DobavljaciController@reklamacija']]) !!}--}}
{{--{!! Form::submit('Reklamacija', ['class'=>'btn btn-default', 'style'=>'background:#eeeeee']) !!}--}}
{{--{!! Form::close() !!}--}}


{{--
     GET|HEAD  | dobavljaci                   | zapisi.dobavljaci.id_list.index     | App\Http\Controllers\DobavljaciController@index           | web          |
     POST      | dobavljaci                   | zapisi.dobavljaci.id_list.store     | App\Http\Controllers\DobavljaciController@store           | web          |
     GET|HEAD  | dobavljaci/create            | zapisi.dobavljaci.id_list.create    | App\Http\Controllers\DobavljaciController@create          | web          |
     DELETE    | dobavljaci/{dobavljaci}      | dobavljaci.destroy                  | App\Http\Controllers\DobavljaciController@destroy         | web          |
     PUT|PATCH | dobavljaci/{dobavljaci}      | dobavljaci.update                   | App\Http\Controllers\DobavljaciController@update          | web          |
     GET|HEAD  | dobavljaci/{dobavljaci}      | dobavljaci.show                     | App\Http\Controllers\DobavljaciController@show            | web          |
     GET|HEAD  | dobavljaci/{dobavljaci}/edit | zapisi.dobavljaci.id_list.edit      | App\Http\Controllers\DobavljaciController@edit            | web          |

     POST      | ocena                        | ocena                               | App\Http\Controllers\DobavljaciController@ocena           | web          |
     POST      | ocena_upd                    | ocena_upd                           | App\Http\Controllers\DobavljaciController@ocena_upd       | web          |
     POST      | reklamacija                  | reklamacija                         | App\Http\Controllers\DobavljaciController@reklamacija     | web          |
     POST      | reklamacija_upd              | reklamacija_upd                     | App\Http\Controllers\DobavljaciController@reklamacija_upd | web          |
--}}