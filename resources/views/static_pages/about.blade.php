@extends('main')

@section('title', '| About Us')

@section('content')

	   <div id="content-container">
        <div id="content" class="clearfix">

            <div id="main-content">

                <article class="static-page">
    @foreach($about as $posts)
                    <h1 id="main-title">{!!$posts->title!!}</h1>

                    {!!$posts->body!!}
                    

    @endforeach
                </article>
            </div>
            
            <div id="sidebar">
            @include('partials._sidebar')
            </div>

        </div>
    </div>


@endsection