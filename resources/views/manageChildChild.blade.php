<ul>

    <?php
    // SORTIRANJE POSLEDNJEG NIVOA //
    $childs = array_sort($childs, function ($value) {
        return $value['title'];
    });
    ?>


    @foreach($childs as $child)
        <li>
            @if(count($child->childs))
                {{--<a href='{{ 'qms_podaci' .'/'. \App\Category::findOrFail($child->level)->title .'/'. $child->path }}'>--}}
                <img src="/pic/fldr.png">&nbsp;
                {{--</a>--}}
            @else
                <a href='{{ 'qms_podaci' .'/'. \App\Category::findOrFail($child->level)->title .'/'. $child->path }}'>
                    <?php
                    if(substr_count($child->title, '.', 1, 10) == 1) {
                        echo '<img src="/pic/fldr-doc.png">&nbsp;&nbsp;';
                    } else {
                        echo '<img src="/pic/document.png">&nbsp;';
                    }
                    ?>
                </a>
            @endif

            {{--@php ($test = App\UpravljanjeDok::where('hide',0)->where('sifra',$selected->sifra)->pluck('verzija')->all())--}}

            {{--<a href='{{ '/upravljanje_dok/'. $child->path .'/edit' }}'>--}}

            <a href='{{ 'qms_podaci' .'/'. \App\Category::findOrFail($child->level)->title .'/'. $child->path }}'>
                {{ $child->title }} - {{ $child }}
            </a>

        </li>
    @endforeach
</ul>
