@extends('main')

@section('title', '| About Us')

@section('content')

	   <div id="content-container">
        <div id="content" class="clearfix">

            <div id="main-content">

                <article class="static-page">
                    <h1 id="main-title">COCIN Community Development Programme - <span>Profile</span></h1>
                    
                    <p>The Church of Christ in Nations [COCIN] started in 1904 by the Sudan United Mission, U K branch, now Action Partners. The goal of COCIN is to glorify God through meeting Spiritual and Physical needs of the people it serve. </p>
                    <p>COCIN Community Development Programme [CCDP] is the development arm of Church of Christ in Nations [COCIN] which started in 1997 with the merger of the former Rural Health Programme [RHP] and Rural Development Programme [RDP] to deliver community –based Integrated Wholistic development services to communities.</p>
                    <p>RHP was started in 1977 aimed at addressing the health needs of rural communities; while RDP was started in 1957 and named Faith and Farm with the aim of meeting the Agricultural needs of rural communities.
                    <p>The concept of the merger of these two arms of services dates back to the days of Peter Batchelor, founder of Faith and Farm and Dr Norman A Hohl, founder of Rural Health Programme.</p>
<p>In January 2016, the integrated unit [CCDP] was split into 3, each standing as a Unit: <br/>
<strong>COCIN Primary Health Care unit</strong> – Taking care of all the Primary Health Care clinics and maternities.<br/>
<strong>COCIN Hospital Panyam</strong> – Providing   secondary health care services to communities.<br/>
<strong>COCIN Comm. Dev. Programme [CCDP] </strong>- Continues to offer its integrated services to less privileged communities with no discrimination. 
</p>

                </article>
            </div>
            
            <div id="sidebar">
            @include('partials._sidebar')
            </div>

        </div>
    </div>


@endsection