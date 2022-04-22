@extends('layouts.default')

@section('content')
    <div class="container-fluid">
        <!-- jumbo -->
        <div id="jumbo">
            <img src="/img/jumbotron.jpg" alt="">
        </div>

        <section class="content-section">
            <div class="container comics">
                <ul>
                    @foreach ($comics as $key => $value)
                        <a href="{{route('comic_detail' , ['id' => $key] ) }}">
                            <li id="comics">
                                <img src="{{ $value['thumb'] }}" />
                                <p> {{ $value['series'] }}</p>
                            </li>
                        </a>
                    @endforeach
                </ul>
            </div>
        </section>

    </div>
@endsection
