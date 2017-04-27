@extends('main')

@section('title', '| List of Page')

@section('stylesheet')

	{!! Html::style('css/style.css') !!}
	{!! Html::style('css/prettyPhoto.css') !!}
	{!! Html::style('css/stylemobile.css') !!}

@endsection


@section('content')

	<div id="content-container">
        <div id="content" class="clearfix">
			<div id="main-content">
				<h1>{{$main->title}}</h1>
				<p class="lead">{{$main->body}}</p>

						<div class="col-md-4">
			<div class="well">
				<dl class="dl-horizontal">
				  <dt>Created at:</dt>
				  <dd>{{$main->created_at->toDayDateTimeString()}}</dd>
				</dl>

				<dl class="dl-horizontal">
				  <dt>Updated at:</dt>
				  <dd>{{$main->updated_at->toDayDateTimeString()}}</dd>
				</dl>

				<hr>
				<div class="row">
					<div class="col-sm-6">
						{!!Html::LinkRoute('mains.edit', 'Edit Pages', array($main->id), array('class' => 'btn btn-primary btn-block'))!!}
						
					</div>
					<div class="col-sm-6">

						{!!Form::open(['route' => ['mains.destroy', $main->id], 'method' => 'DELETE'])
						!!}

						{!! Form::submit('delete', ['class' => 'btn btn-danger btn-block']) 
						!!}

						{!!Form::close()!!}

					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						{!!Html::LinkRoute('mains.index', '<< View All Pages', [], array('class' => 'btn btn-default btn-block btn-h1-spacing'))!!}
					</div>
				</div>
			</div>
		</div>
			</div>
		</div>
	</div>		
		
@endsection