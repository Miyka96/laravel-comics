@php
$link = [
    [
        'text' => 'Characters',
        'href' => '#',
    ],
    [
        'text' => 'Comics',
        'href' => '#',
    ],
    [
        'text' => 'Movies',
        'href' => '#',
    ],
    [
        'text' => 'TV',
        'href' => '#',
    ],
    [
        'text' => 'Games',
        'href' => '#',
    ],
    [
        'text' => 'collectibles',
        'href' => '#',
    ],
    [
        'text' => 'videos',
        'href' => '#',
    ],
    [
        'text' => 'fans',
        'href' => '#',
    ],
    [
        'text' => 'news',
        'href' => '#',
    ],
    [
        'text' => 'shop',
        'href' => '#',
    ],
];
@endphp

<header class="container-fluid">
    <div class="container">
        <figure>
            <img src="../assets/img/dc-logo.png" alt="" />
        </figure>
        <div class="nav">
            <ul>
                @foreach($link as $el)
                <li>
                    <a href="{{$el['href']}}"> {{$el['text']}} </a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</header>
