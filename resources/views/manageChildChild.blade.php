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

                        $sifraOznaka = \App\Category::findOrFail($child->parent_id)->sifra;
                        $sifraId = App\UpravljanjeDok::where('sifra',$sifraOznaka)->pluck('id');
                        $sifraId = str_replace('[','',$sifraId);
                        $sifraId = str_replace(']','',$sifraId);
                    if ($sifraId) {
                        $link = '/upravljanje_dok/'. $sifraId .'/edit';
                        ?>
                        <a href='{{ $link }}'>
                            {{ $child->title }}
                        </a>
                        <?php
                    } else {
                        $link='';
                        ?>
                        <a href='{{ $link }}'>
                            {{ $child->title }}
                        </a>
                        <?php
                    }
                } else {
                        echo '<img src="/pic/document.png">&nbsp;';
                        ?>
                        <a href='{{ 'qms_podaci' .'/'. \App\Category::findOrFail($child->level)->title .'/'. $child->path }}'>
                            {{ $child->title }}
                        </a>
                        <?php
                    }
                    ?>
                </a>
            @endif

            {{--<a href='{{ 'qms_podaci' .'/'. \App\Category::findOrFail($child->level)->title .'/'. $child->path }}'>--}}
                {{--{{ $child->title }} - {{ \App\Category::findOrFail($child->parent_id)->sifra }}--}}
            {{--</a>--}}

        </li>
    @endforeach
</ul>
