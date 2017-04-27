@extends('main')

@section('title', '| Portfolio')

@section('content')

	    <div id="content-container">
        <div id="content" class="clearfix">

            <div id="main-content">

                <article class="static-page">
                    <h1 id="main-title">CCDP - <span>Portfolio</span></h1>
                    <p>COCIN Community Development Programme [CCDP] has the staff strength and efficiency to work with any reputable agency or organization [Local & International] in terms of fund management, service delivery and accountability.</p>

                    <p><strong>Collaborating Partners are:</strong> </p>
                    <ul>
                        <li>Bread for the World, Germany.</li>
                        <li>Tearfund, UK.</li>
                        <li>OXFAM GB.</li>
                    </ul>
 				
								<div class="clear"></div>
                </article>
            </div>

            <div id="sidebar">
            @include('partials._sidebar')
            </div>

        </div>
    </div>

@endsection