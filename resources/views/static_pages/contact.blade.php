@extends('main')

@section('title', '| Contact')

@section('content')
	
	<div id="content-container">
        <div id="content" class="clearfix">

            <div id="main-content">
                
                <article class="static-page">
                    <h1 id="main-title">Contact CCDP</h1>
                     <div class="colhalf">
                        <h3>CCDP Head office</h3>
                        <p><strong>Fish Farm Road,</strong> Panyam, Mangu LGA. Plateau state, Nigeria.<br />

                        <div class="separator"></div>

                        <h3>COCIN General Secretary</h3>
                        <p><strong>Phone: </strong> +2348130242358<br/>
                        <strong>Email: </strong> mohzoamos@yahoo.com</p>

                        <div class="separator"></div>

                        <h3>CCDP Progamme Coordinator</h3>
                        <p><strong>Phone: </strong> +2347031335227; +2348053607254 <br/>
                        <strong>Email: </strong> josehinegoro@ymail.com</p>
                    </div>

                    <div class="colhalf lastcol">
                        <h3>COCIN Headquarters</h3>
                        <p><strong>PMB 2127,  </strong> No 5, Noad Avenue Jos, Plateau state, Nigeria.<br />

                        <div class="separator"></div>

                        <h3>COCIN Director - Health and Social Services</h3>
                        <p><strong>Phone: </strong> +2348036310854 <br/>
                        <strong>Email: </strong> cocindirectorhealth@yahoo.com</p>
                    </div>
                    <div class="clear"></div>
                   
                    <h2>Contact Form</h2>
                    <form method="post" action="#" id="form-contact" class="clearfix">
                        <div>
                            <label for="text-name">Name <span>*</span></label>
                            <input type="text" name="name" class="input" id="text-name" value="" /><br />
                            <label for="text-email">Email</label>
                            <input type="text" name="email" class="input" id="text-email" value="" /><br />
                            <label for="text-phone">Phone</label>
                            <input type="text" name="phone" class="input" id="text-phone" value="" /><br />
                            <label for="text-message">Message <span>*</span></label>
                            <textarea cols="10" rows="20" class="input textarea" id="text-message" name="message"></textarea><br />
                            <input type="submit" name="submitcontact" class="button" value="Sent Message" />
                        </div>
                    </form>
                </article>
            </div>

			<div id="sidebar">
            @include('partials._sidebar')
            </div>
            

        </div>
    </div>

@endsection