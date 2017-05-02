@extends('main')

@section('title', '| Events')

@section('content')

	<div id="content-container">
        <div id="content" class="clearfix">
            <div id="full-width">
               

                <article class="static-page">
                   
                    <div class="accordion">
				        
                        <h3 class="title-event"></h3>
                        <div class="content-event clearfix">

                        @foreach($event as $posts)
                            <div class="event-container clearfix" itemscope itemtype="http://data-vocabulary.org/Event">

                                <img src="{{asset('images/cabal/events/'.$posts->img_scr)}}" width ="243" height="270" />

                                <h4 itemprop="summary"><a href="{{route('static_pages.eventdetails', $posts->id)}}" itemprop="url">{{$posts -> title}}</a></h4>
                                <div class="panel-event-info">
                                    <ul class="list-event-slider">
                                        <li class="time-slider">{{$posts -> date ->toFormattedDateString()}}  -  {{$posts -> end_date -> toFormattedDateString()}}</li>
                                        <li class="hour-slider">{{$posts -> time}} to {{$posts -> end_time}}</li>
                                        <li class="location-slider" itemprop="location" itemscope itemtype="http://data-vocabulary.org/Organization"><em itemprop="address" itemscope itemtype="http://data-vocabulary.org/Address">{{$posts -> venue}}</em></li>
                                    </ul>
                                    <a href="{{route('static_pages.eventdetails', $posts->id)}}" class="button-detail">View Detail</a>
                                </div>
                            </div>
                        @endforeach
                        
                    
                    </div>
                  </div>
                </article>
            </div>
          
        </div>
    </div>

@endsection