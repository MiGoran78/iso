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


                <?php
                $sifraOznaka = \App\Category::findOrFail($child->id)->sifra;
                $sifraId = App\UpravljanjeDok::where('sifra',$sifraOznaka)->where('hide','0')->pluck('id');
                $sifraId = App\UpravljanjeDok::where('sifra',$sifraOznaka)->where('hide','0')->pluck('id');
                $sifraId = str_replace('[','',$sifraId);
                $sifraId = str_replace(']','',$sifraId);
                $link = '/upravljanje_dok/'. $sifraId .'/edit';
                ?>

                {{--<a onclick="window.open('{{ $link }}', '_blank')">> --}}
                    {{$child->title}}
                {{--</a>--}}

            @else

                <img src="/pic/document.png">&nbsp;

                <?php
                $sifraOznaka = \App\Category::findOrFail($child->id)->sifra;
                ?>
                @if ($sifraOznaka=='')
                    <a target="_blank" href='{{ 'qms_podaci' .'/'. \App\Category::findOrFail($child->level)->title .'/'. $child->path }}'> {{ $child->title }} </a>
                @else
                    <a target="_blank" href='{{ $link }}'> {{ $child->title }} </a>
                @endif


                {{--<a href='{{ 'qms_podaci' .'/'. \App\Category::findOrFail($child->level)->title .'/'. $child->path }}'>--}}
                    {{--{{ $child->title }}--}}
                {{--</a>--}}
            @endif


                {{--<a onclick="window.open('{{ $link }}', '_blank')"> {{$child->title}} </a>--}}


            {{--dubina stabla III--}}
            @if(count($child->childs))
                @include('manageChildChild',['childs' => $child->childs])
            @endif

        </li>
    @endforeach
</ul>
