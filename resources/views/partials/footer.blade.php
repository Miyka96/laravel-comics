@php
$footerLinks = array(

        "DC COMICS"=> array('Characters','Comics','Tv','Games','Videos','News'),
        'DC'=>array('Terms Of Use', 'Privacy policy (New)', 'Ad Choices', 'Advertising', 'Jobs', 'Subscriptions', 'Talent Workshops', 'CPSC Certificates', 'Ratings', 'Shop Help', 'Contact Us'),
        'SITES'=>array('DC', 'MAD Magazine', 'DC Kids', 'DC Universe', 'DC Power Visa'),
        'SHOP'=>array('Shop DC', 'Shop DC Collectibles')
);
@endphp

<footer class="container-fluid">
    <div class="container">
        <ul>
            @foreach ($footerLinks as $key => $val)
                <li>
                    <div id="title">{{ $key }}</div>
                    @foreach ($val as $element) 
                    <div>
                        {{ $element }}
                    </div>
                    @endforeach
                </li>
            @endforeach
        </ul>

        <figure></figure>
    </div>
</footer>
