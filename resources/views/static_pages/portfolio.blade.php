@extends('main')

@section('title', '| Portfolio')

@section('content')

<div id="content-container">
    <div id="content" class="clearfix">

        <div id="main-content">

            <article class="static-page">

            @foreach($post as $posts)

                <h1 id="main-title">{!!$posts->title!!}</h1>

                <p>{!!$posts->body!!}</p>

                <p><strong>Collaborating Partners are:</strong> </p>
                <ul>
                    <li>Bread for the World, Germany.</li>
                    <li>Tearfund, UK.</li>
                    <li>OXFAM GB.</li>
                </ul>
                @endforeach
                <div class="clear"></div>
            </article>
        </div>

        <div id="sidebar">
            @include('partials._sidebar')
        </div>

    </div>
</div>

@endsection