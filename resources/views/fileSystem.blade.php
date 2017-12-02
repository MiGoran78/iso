@foreach($dir1 as $dir)
    <li>
        <a href="/qms_podaci/{{$dir}}">{{ '/qms_podaci/' . $dir}}</a>
    </li>
@endforeach

<br><br>

@foreach($dir2 as $dir)
    <li>
        <a href="/qms_podaci/{{$dir}}">{{ '/qms_podaci/' . $dir}}</a>
    </li>
@endforeach

<br><br>

@foreach($dir3 as $dir)
    <li>
        <a href="/qms_podaci/{{$dir}}">{{ '/qms_podaci/' . $dir}}</a>
    </li>
@endforeach
<br><br>