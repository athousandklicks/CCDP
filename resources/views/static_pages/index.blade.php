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
                        <a href="#"><img src="images/info.jpg" alt="" /></a>
                    </div>
                    <div id="main-content">
                        <article id="intro">
                            @foreach($index as $posts)
                                <h1>{!!$posts->title!!}</h1>
                           
                                <p>{!!$posts->body!!}</p>
                            @endforeach
                        </article>

                    </div>
                    <div id="sidebar-homepage-right" class="sidebar-homepage">
                        <ul id="nav-sidebar" class="clearfix">
                            <li><a href="contact" class="clearfix">
                                <figure><img src="images/icon-sidebar-1.png" alt="Contact Us" /></figure>
                                <strong class="title-nav-sidebar">Contact Us Now</strong>
                                <strong>Phone Nos:</strong> +2348130242358 || +2348036310854 
                                </a></li>
                        </ul>

                    </div>
                    <article id="intro-principal" class="static-page">
                        <h3 id="title-principal"><strong>COCIN Community Development Programme [CCDP]  - </strong> Panyam</h3>
                        <figure>
                            <img src="images/side.jpg" />
                        </figure>
                        <div id="content-principal">
                            <p><strong>Our Identity: </strong> CCDP is a Christian Wholistic Development arm of COCIN that empowers less privileged communities for secured livelihoods and peaceful co-existence as a demonstration of the love of Jesus Christ.</p>
                            <p><strong>Goal: </strong> To contribute to the reduction of poverty among communities for improved livelihoods; a foretaste of God’s Kingdom on earth.</p>
                            <p><strong>Core Values:</strong> Team work, Accountability, Transparency & Honest</p>
                        </div>
                    </article>
                </div>
            </div>
    
    
<!-- Add javascript partials here -->

        @include('partials._javascript')

</body>
</html>