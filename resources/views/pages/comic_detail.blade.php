@extends('layouts.default')

@section('content')
    <div class="container-fluid">
        <!-- jumbo -->
        <div id="jumbo">
            <img src="/img/jumbotron.jpg" alt="">
        </div>
        <div class="container-fluid blue_bar">
            <div class="container">
                <div class="blue_bar relative">
                    <img class="detail_poster" src="{{ $comics['thumb'] }}">
                </div>
            </div>
        </div>
        <div class="container">
            <h1>{{ $comics['title'] }}</h1>
        </div>
    </div>
@endsection
