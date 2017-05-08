
<aside class="widget-container">
    <div class="widget-wrapper clearfix">
        <h3 class="widget-title">Upcoming Events</h3>
        <ul class="menu event-sidebar">	

@foreach($event as $posts)
            <li class="clearfix">
                <div class="event-date-widget">
                    <strong>{{$posts->created_at->toFormattedDateString()}}</strong>
                  
                </div>
                <div class="event-content-widget">
                    <article>
                        <h4><a href="#">Musicfest 2013</a></h4>
                        <p>{{$posts->body}}
                        </p>
                        <em>Venue: </em>
                    </article>
                    <article>

                </div>
            </li>
@endforeach


        </ul>
        <a href="event" class="button-more">More Event</a>
    </div>
</aside>
