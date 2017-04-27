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

	{!!Form::model($main, ['route'=>['mains.update', $main->id], 'method' => 'PUT'])!!}	

		<div class="col-md-8">
			{{Form::label('title', 'Edit Title:')}}
			{{ Form::text('title', null, ['class'=>'form-control input-lg'])}}

			{{Form::label('body', 'Edit Body:', ['class'=>'form-spacing-top'])}}
			{{ Form::textarea('body', null, ['class'=>'form-control'])}}
		</div>
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
						{!!Html::LinkRoute('mains.show', 'Cancel Edit', array($main->id), array('class' => 'btn btn-danger btn-block'))!!}
						
					</div>
					<div class="col-sm-6">
						{{Form::submit('Save Changes', ['class' => 'btn btn-success btn-block'])}}
					</div>
				</div>
			</div>
		</div>
	{!! Form::close() !!}

			</div>
		</div>
	</div>		
		
@endsection