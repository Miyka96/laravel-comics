@php
    $menuLinks=
    [
        [
          'img' => "/img/buy-comics-digital-comics.png",
          'href' =>  "#",
          'text' =>  "DIGITAL COMICS",
        ],
        [
          'img' => "/img/buy-comics-merchandise.png",
          'href' =>  "#",
          'text' =>  "DC MERCHANDISE",
        ],
        [
          'img' => "/img/buy-comics-subscriptions.png",
          'href' =>  "#",
          'text' =>  "SUBSCRIPTION",
        ],
        [
          'img' => "/img/buy-comics-shop-locator.png",
          'href' =>  "#",
          'text' =>  "COMIC SHOP LOCATOR",
        ],
        [
          'img' => "/img/buy-dc-power-visa.svg",
          'href' =>  "#",
          'text' =>  "DC POWER VISA",
        ],
    ];
@endphp

<section class="nav-section">
    <div class="container">
      <ul id="nav-ul">
        @foreach($menuLinks as $key => $value)
            <li id="nav-li">
            <figure>
                <img src="{{$value['img']}}"/>
            </figure>
            <a href="#"> {{ $value['text'] }} </a>
            </li>
        @endforeach
      </ul>
    </div>
</section>