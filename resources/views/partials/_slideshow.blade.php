
<div id="panel-tabs" class="clearfix">
    <ul class="nav-tabs-slideshow">
        <li>
            <a href="#panel-4"><strong>CCDP</strong>
            </a>
        </li>
        <li>
        <p><strong>Empowering the less privileged communities for wholistic and sustainable development to reduce poverty.</strong></p>
        </li>
    </ul>

</div>


<div class="ui-tabs-panel" id="panel-4" style="background:url(images/main1.jpg) no-repeat 50% 0">
    <div class="tabs-blur" style="background:url(http://placehold.it/2000x620) no-repeat 50% 0">
    </div>
    <div class="tabs-container">
        <div class="slider-tabs flexslider">
            <ul class="slides">

                @foreach($slide as $thumbnail)

                <li>
                    <div class="slider-tabs-content">
                        <img src="{{asset('images/cabal/slides/'.$thumbnail->img_scr)}}">
                    </div>
                </li>

                @endforeach

            </ul>

        </div>
    </div>
</div>


