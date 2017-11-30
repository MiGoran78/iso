@foreach($allDirs as $dir)
    <li>
        <a href="/qms_podaci/{{$dir}}">{{ '/qms_podaci/' . $dir}}</a>
    </li>
@endforeach
