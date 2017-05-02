
        <nav id="nav" class="clearfix">
                    <a href="#" class="close-menu-big">Close</a>
                    <div id="nav-container">
                        <a href="#" class="close-menu">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>
                        <ul id="nav-main">
                            <li class="{{Request::is('/') ? "current-menu-item" : ""}}"><a href="/">Home</a></li>
                            <li class="{{Request::is('about') ? "current-menu-item" : ""}}"><a href="about">About</a></li>
                            <li class="{{Request::is('programmes') ? "current-menu-item" : ""}}"><a href="programmes">Programmes</a></li>
                            <li class="{{Request::is('event') ? "current-menu-item" : ""}}"><a href="event">Event</a></li>
                            <li class="{{Request::is('portfolio') ? "current-menu-item" : ""}}"><a href="portfolio">Portfolio</a></li>
                            <li class="{{Request::is('gallery') ? "current-menu-item" : ""}}"><a href="gallery">Gallery</a></li>
                           
                            <li class="{{Request::is('contact') ? "current-menu-item" : ""}}"><a href="contact">Contact</a></li>

                        </ul>
                        <a href="http://www.cocin.org/" id="button-registration" target="_blank">COCIN NIGERIA</a>
                    </div>
                </nav>
    </header>