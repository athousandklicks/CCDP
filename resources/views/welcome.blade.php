@extends('main')

@section('title', '| Home')


    <head>
        @include('partials._head')
    </head>

<body class="home">

    <nav class="navbar navbar-default">
            @include('partials._nav')
    </nav>

        <div id="slideshow-tabs">
            @include('partials._slideshow')
        </div>

            <div id="content-container">
                <div id="content" class="clearfix">
                    <div id="banner-homepage">
                        <a href="#"><img src="http://placehold.it/1125x150" alt="" /></a>
                    </div>
                    <div id="main-content">
                        <article id="intro">
                            <h1>Welcome to Student Fun University</h1>
                            <figure><img src="http://placehold.it/726x400" alt="Welcome to Student Fun University" /></figure>
                            <p>Morbi fringilla mauris est, ac cursus tellus tristique eget. Maecenas rhoncus lacus quis mollis euismod. Pellentesque mollis molestie sapien, eget sodales dui porta at. Aenean augue massa, facilisis ac semper vel, tristique in nulla. Suspendisse potenti.</p>
                            <a href="#" class="more-intro">- Learn More</a>
                        </article>
                        <div id="sidebar-homepage-left" class="sidebar-homepage">
                            <aside class="widget-container">
                                <div class="widget-wrapper clearfix">
                                    <h3 class="widget-title">Latest Blog</h3>
                                        <ul class="menu news-sidebar">          
                                            <li class="clearfix">
                                                <img src="http://placehold.it/123x94" data-retina="http://placehold.it/246x188" alt="We Sent our Student to Himalaya to Study and Hiking" class="imgframe alignleft" />
                                                <h4><a href="#">We Sent our Student to Himalaya to Study and Hiking</a></h4>
                                                <span class="date-news">October 5, 2013</span>
                                            </li>
                                            <li class="clearfix">
                                                <img src="http://placehold.it/123x94" data-retina="http://placehold.it/246x188" alt="We are opening Modelling Night Course" class="imgframe alignleft" />
                                                <h4><a href="#">We are opening Modelling Night Course</a></h4>
                                                <span class="date-news">October 2, 2013</span>
                                            </li>
                                            <li class="clearfix">
                                                <img src="http://placehold.it/123x94" data-retina="http://placehold.it/246x188" alt="Photography Club 120 Year Birthday Beach Party" class="imgframe alignleft" />
                                                <h4><a href="#">Photography Club 120 Year Birthday Beach Party</a></h4>
                                                <span class="date-news">September 30, 2013</span>
                                            </li>
                                            <li class="clearfix">
                                                <img src="http://placehold.it/123x94" data-retina="http://placehold.it/246x188"      alt="Photography Club 120 Year Birthday Beach Party" class="imgframe alignleft" />
                                                <h4><a href="#">We are opening Medical Faculty in our new Campus</a></h4>
                                                <span class="date-news">September 30, 2013</span>
                                            </li>
                                        </ul>
                                        <a href="newslist.html" class="button-more">Read More Blog Post</a>
                                </div>
                            </aside>
                        </div>
                        <div id="sidebar-homepage-middle" class="sidebar-homepage">
                            <aside class="widget-container">
                                <div class="widget-wrapper clearfix">
                                    <h3 class="widget-title">Latest Event</h3>
                                        <ul class="menu event-sidebar">         
                                            <li class="clearfix">
                                                <div class="event-date-widget">
                                                    <strong>28</strong>
                                                    <span>Nov</span>
                                                </div>
                                                <div class="event-content-widget">
                                                    <article>
                                                        <h4><a href="#">Musicfest 2013</a></h4>
                                                        <p>November 28, 2013 - November 30, 2013<br />
                                                            9:00 AM - 10:00 AM
                                                        </p>
                                                        <em>Campus Auditorium</em>
                                                    </article>
                                                    <article>
                                                        <h4><a href="#">HTML5 &amp; CSS3 Workshop</a></h4>
                                                        <p>November 28, 2013<br />
                                                            11:00 AM - 1:00 PM
                                                        </p>
                                                        <em>IT Center Building E</em>
                                                    </article>
                                                    <article>
                                                        <h4><a href="#">Free TOEFL &amp; IBT Test</a></h4>
                                                        <p>November 28, 2013<br />
                                                            2:00 PM - 2:00 PM
                                                        </p>
                                                        <em>Main English Classroom</em>
                                                    </article>
                                                </div>
                                            </li>
                                            <li class="clearfix">
                                                <div class="event-date-widget">
                                                    <strong>25</strong>
                                                    <span>Nov</span>
                                                </div>
                                                <div class="event-content-widget">
                                                    <article>
                                                        <h4><a href="#">Foodfest 2013</a></h4>
                                                        <p>November 25, 2013 - November 27, 2013<br />
                                                            9:00 AM - 10:00 AM
                                                        </p>
                                                        <em>Campus Canteen</em>
                                                    </article>
                                                    <article>
                                                        <h4><a href="#">Student Festival</a></h4>
                                                        <p>November 25, 2013 - November 26, 2013<br />
                                                            8:00 AM - 9:00 AM
                                                        </p>
                                                        <em>Basketball Court</em>
                                                    </article>
                                                     <article>
                                                        <h4><a href="#">Free TOEFL &amp; IBT Test</a></h4>
                                                        <p>November 28, 2013<br />
                                                            2:00 PM - 2:00 PM
                                                        </p>
                                                        <em>Main English Classroom</em>
                                                    </article>
                                                </div>
                                            </li>
                                        </ul>
                                </div>
                            </aside>
                        </div>
                    </div>
                    <div id="sidebar-homepage-right" class="sidebar-homepage">
                        <ul id="nav-sidebar" class="clearfix">
                            <li><a href="#" class="clearfix">
                                <figure><img src="images/icon-sidebar-1.png" alt="Contact Us" /></figure>
                                <strong class="title-nav-sidebar">Contact Us Now</strong>
                                <strong>Phone:</strong> +62 384856, +62 5456789 <strong>Fax:</strong> +62 45677896
                                </a></li>
                            <li><a href="#" class="clearfix">
                                <figure><img src="images/icon-sidebar-2.png" alt="Location" /></figure>
                                <strong class="title-nav-sidebar">Location</strong>
                                Click here to get direction to our campus location by bus or train
                                </a></li>
                            <li><a href="#" class="clearfix">
                                <figure><img src="images/icon-sidebar-3.png" alt="Location" /></figure>
                                <strong class="title-nav-sidebar">Live Chat</strong>
                                Talk with our Customer Service or our student and alumni
                                </a></li>
                            <li><a href="#" class="clearfix">
                                <figure><img src="images/icon-sidebar-4.png" alt="Library and Research" /></figure>
                                <strong class="title-nav-sidebar">Library and Research</strong>
                                Talk with our Customer Service or our student and alumni
                                </a></li>
                             <li><a href="#" class="clearfix">
                                <figure><img src="images/icon-sidebar-5.png" alt="Library and Research" /></figure>
                                <strong class="title-nav-sidebar">Faculty Department</strong>
                                From Politic, Nuclear and Graphic Design, we have everything.
                                </a></li>
                        </ul>
                        <aside id="gw_gallery-5" class="widget-container widget_gw_gallery">
                        <div class="widget-wrapper clearfix">
                            <h3 class="widget-title">Photo Gallery</h3>  
                            <script type="text/javascript">
                                jQuery(document).ready(function($){
                                    $("#gw_gallery-5-slide").flexslider({
                                        animation: "slide",
                                        animationLoop: false,
                                        pauseOnAction: true
                                    });
                                });
                            </script>
                            <div id="gw_gallery-5-slide" class="flexslider">
                                <ul class="slides">
                                    <li>
                                        <div class="slides-image">
                                            <a href="http://placehold.it/682x480" data-rel="prettyPhoto[pp-gw_gallery-5]"><img src="http://placehold.it/341x240" alt="Beauty in Green"  data-retina="images/img-9-retina.jpg" /></a>
                                        </div>
                                        <h4><a href="http://placehold.it/682x480" data-rel="prettyPhoto[pp-gw_gallery-5-slide]">Things you can bring on Library</a></h4>
                                    </li>
                                    <li>
                                        <div class="slides-image">
                                            <a href="http://placehold.it/682x480" data-rel="prettyPhoto[pp-gw_gallery-5]"><img src="http://placehold.it/341x240" alt="Choose your future jobs correctly"  data-retina="http://placehold.it/682x480" /></a>
                                        </div>
                                        <h4><a href="http://placehold.it/682x480" data-rel="prettyPhoto[pp-gw_gallery-5-slide]">Choose your future jobs correctly</a></h4>
                                    </li>
                                    <li>
                                        <div class="slides-image">
                                            <a href="http://placehold.it/682x480" data-rel="prettyPhoto[pp-gw_gallery-5]"><img src="http://placehold.it/341x240" alt="Choose your future jobs correctly"  data-retina="http://placehold.it/682x480" /></a>
                                        </div>
                                        <h4><a href="http://placehold.it/682x480" data-rel="prettyPhoto[pp-gw_gallery-5-slide]">Battle of code in the midnight to get King of Code</a></h4>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </aside>
                    </div>
                    <article id="intro-principal" class="static-page">
                        <h3 id="title-principal"><strong>Prof. Jane Applegate Phd. -</strong> Principal of School Fun</h3>
                        <figure>
                            <img src="http://placehold.it/322x433" data-retina="http://placehold.it/644x866" alt="Prof. Jane Applegate Phd." />
                        </figure>
                        <div id="content-principal">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ornare, ipsum quis aliquam lobortis, felis sapien rutrum risus, posuere ultrices quam nisi nec nulla. Vestibulum ipsum diam, congue in nunc et, placerat faucibus nunc. Proin consectetur mauris quis tincidunt faucibus. Suspendisse lobortis blandit aliquet. Cras a luctus orci. Aenean pretium venenatis gravida. Morbi varius erat erat, vitae sollicitudin tortor ornare tincidunt.</p>
                            <p>Morbi scelerisque magna ac elit accumsan fringilla. Vivamus enim massa, egestas quis viverra ut, adipiscing eget metus. Etiam neque orci, cursus vitae sem in, rhoncus vestibulum dolor.</p>
                            <p><a href="#" class="more-intro">- Learn More</a></p>
                        </div>
                    </article>
                </div>
            </div>
    
    
<!-- Add javascript partials here -->

        @include('partials._javascript')

</body>
</html>