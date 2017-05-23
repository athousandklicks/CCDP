@extends('cabal_layout')

@section('title', '| Admin Dashboard')



@section('content')

<!--market updates updates-->
<div class="market-updates">
	<div class="col-md-4 market-update-gd">
		<div class="market-update-block clr-block-1">
			<div class="col-md-8 market-update-left">


				<h4>TOTAL PAGES</h4>
				<h3>{{$main->count() + 4}}</h3>

				<h4>EDITABLE PAGES</h4>
				@foreach($main as $page)
				<h4> - {{$page -> page_name}}</h4>
				@endforeach

			</div>
			<div class="col-md-4 market-update-right">
				<i class="fa fa-file-text-o"> </i>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="col-md-4 market-update-gd">
		<div class="market-update-block clr-block-2">
			<div class="col-md-8 market-update-left">
				<h4>TOTAL SLIDES</h4>
				<h3>{{$slide->count()}}</h3>

				<h4>PUBLISHED SLIDES</h4>
				<h3>{{$slide->where('status','=','1')->count()}}</h3>
			</div>
			<div class="col-md-4 market-update-right">
				<i class="fa fa-photo"> </i>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>

	<div class="col-md-4 market-update-gd">
		<div class="market-update-block clr-block-3">
			<div class="col-md-8 market-update-left">


				<h4>TOTAL GALLERY IMAGES</h4>
				<h3>{{$gallery->count()}}</h3>

				<h4>PUBLISHED IMAGES</h4>
				<h3>{{$gallery->where('status','=','1')->count()}}</h3>

			</div>
			<div class="col-md-4 market-update-right">
				<i class="fa fa-photo"> </i>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	

	<div class="clearfix"> </div>
</div>
<!--market updates end here-->
<div class="cleartop"> </div>
<p>.</p>

<div class="market-updates">

	<div class="col-md-4 market-update-gd">
		<div class="market-update-block clr-block-3">
			<div class="col-md-8 market-update-left">


				<h4>TOTAL EVENTS</h4>
				<h3>{{$event->count()}}</h3>

				<h4>UPCOMING EVENTS</h4>
				<h3>{{$event->where('completed','=','0')->count()}}</h3>

				<h4>PUBLISHED EVENTS</h4>
				<h3>{{$event->where('status','=','1')->count()}}</h3>



			</div>
			<div class="col-md-4 market-update-right">
				<i class="fa fa-calendar"> </i>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>

	<div class="clearfix"> </div>
</div>

@endsection

<!--inner block end here-->
