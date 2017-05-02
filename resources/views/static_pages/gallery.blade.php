@extends('main')

@section('title', '| Gallery')

@section('content')

<div id="content-container">
    <div id="content" class="clearfix">
        <div id="full-width">

            <article class="static-page">
                <h1 id="main-title">Photo Gallery</h1>
                <p>Duis erat dui, volutpat sed urna et, posuere convallis lectus. Phasellus nec congue quam, non commodo turpis. Duis tincidunt, augue vel ullamcorper posuere, purus eros viverra leo, a bibendum nulla metus sed mauris. Phasellus feugiat nulla eget dignissim interdum. Nam eu lobortis dolor, sed eleifend tortor.</p>
            </article>

            <div class="gallery-group clearfix">

                <ul class="list-gallery-category">
                    @foreach($gallery as $image)

                    <li>
                        <a href="{{asset('images/cabal/gallery/'.$image->img_scr)}}" width="800" height="400" data-rel="prettyPhoto[cat-1]">
                            <img src="{{asset('images/cabal/gallery/'.$image->img_scr)}}" width="160" height="160" data-retina="http://placehold.it/800x400" alt="" />
                            <span>{{$image->title}}</span>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>


@endsection