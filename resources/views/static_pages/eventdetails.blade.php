@extends('main')

@section('title', '| Events Details')

@section('stylesheet')

@endsection

@section('content')

<div id="content-container">
    <div id="content" class="clearfix">
        <div id="main-content">




            <article class="static-page" itemscope itemtype="http://data-vocabulary.org/Event">
                <h1 id="main-title" itemprop="summary">{!!$event_details->title!!}</h1>
                <div id="event-info">
                    <ul class="list-event-slider">
                        <li class="time-slider"><time itemprop="startDate" datetime="10-23-2013">{!!$event_details -> date ->toFormattedDateString()!!} </time> - <time itemprop="endDate" datetime="10-30-2013"> {!!$event_details -> end_date -> toFormattedDateString()!!}</time></li>
                        <li class="hour-slider">{!!$event_details -> time!!}- {!!$event_details -> end_time!!}</li>
                        <li class="location-slider"><em itemprop="address" itemscope itemtype="http://data-vocabulary.org/Address">{!!$event_details -> venue!!}</em></li>
                    </ul>
                    <a href="http://placehold.it/540x580" data-rel="prettyPhoto"><img src="{!!asset('images/cabal/events/'.$event_details->img_scr)!!}" alt="CCDP Events" /></a>
                </div>
                <p>{!!$event_details -> body!!}</p>
            </article>

        </div>
        <div id="sidebar">
            @include('partials._sidebar')
        </div>
    </div>
</div>

@endsection