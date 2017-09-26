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

            <a href='{{ 'qms_podaci' .'/'. \App\Category::findOrFail($child->level)->title .'/'. $child->path }}'>
                {{ $child->title }}
            </a>

        </li>
    @endforeach
</ul>
