@extends('main')

@section('title', '| Events Details')

@section('content')

<div id="content-container">
    <div id="content" class="clearfix">
        <div id="main-content">
            <div id="breadcrumbs" class="clearfix">
                <div itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                    <a href="index.html" itemprop="url" class="icon-home">
                        <span itemprop="title">Home</span>
                    </a> <span class="arrow">&gt;</span>
                </div>  
                <div itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                    <a href="#" itemprop="url">
                        <span itemprop="title">Campus Events</span>
                    </a> <span class="arrow">&gt;</span>
                </div>  
                <span class="last-breadcrumbs">
                    Rock 'n Roll Welcoming 2014 Party Night
                </span>
            </div>
            <article class="static-page" itemscope itemtype="http://data-vocabulary.org/Event">
                <h1 id="main-title" itemprop="summary">Rock 'n Roll Welcoming 2014 Party Night</h1>
                <div id="event-info">
                    <ul class="list-event-slider">
                        <li class="time-slider"><time itemprop="startDate" datetime="10-23-2013">October 23, 2013</time> - <time itemprop="endDate" datetime="10-30-2013">October 30, 2013</time></li>
                        <li class="hour-slider">9:00 AM - 10:00 PM</li>
                        <li class="location-slider"><em itemprop="address" itemscope itemtype="http://data-vocabulary.org/Address">Campus Auditorium</em></li>
                    </ul>
                    <a href="http://placehold.it/540x580" data-rel="prettyPhoto"><img src="http://placehold.it/270x290" data-retina="http://placehold.it/540x580" alt="Rock 'n Roll Welcoming 2014 Party Night" /></a>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ornare, ipsum quis aliquam lobortis, felis sapien rutrum risus, posuere ultrices quam nisi nec nulla. Vestibulum ipsum diam, congue in nunc et, placerat faucibus nunc. Proin consectetur mauris quis tincidunt faucibus. Suspendisse lobortis blandit aliquet. Cras a luctus orci. Aenean pretium venenatis gravida. Morbi varius erat erat, vitae sollicitudin tortor ornare tincidunt.</p>
                <h3>Lorem Ipsum Dolor sit amet</h3>
                <p>Morbi scelerisque magna ac elit accumsan fringilla. Vivamus enim massa, egestas quis viverra ut, adipiscing eget metus. Etiam neque orci, cursus vitae sem in, rhoncus vestibulum dolor. Cras consectetur, tellus vel auctor venenatis, tortor ante imperdiet ipsum, sed iaculis lorem velit ac erat.</p>
                <p>Proin consectetur mauris quis tincidunt faucibus. Suspendisse lobortis blandit aliquet. Cras a luctus orci. Aenean pretium venenatis gravida. Morbi varius erat erat, vitae sollicitudin tortor ornare tincidunt.</p>
                <p>Morbi scelerisque magna ac elit accumsan fringilla. Vivamus enim massa, egestas quis viverra ut, adipiscing eget metus. Etiam neque orci, cursus vitae sem in, rhoncus vestibulum dolor. Cras consectetur, tellus vel auctor venenatis, tortor ante imperdiet ipsum, sed iaculis lorem velit ac erat.</p>
                <p>Proin consectetur mauris quis tincidunt faucibus. Suspendisse lobortis blandit aliquet. Cras a luctus orci. Aenean pretium venenatis gravida. Morbi varius erat erat, vitae sollicitudin tortor ornare tincidunt.</p>
            </article>
        </div>
    </div>
</div>

@endsection