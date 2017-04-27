@extends('main')

@section('title', '| Create New Page')

@section('stylesheet')

	{!! Html::style('css/style.css') !!}
	{!! Html::style('css/prettyPhoto.css') !!}
	{!! Html::style('css/stylemobile.css') !!}

@endsection


@section('content')

		   <div id="content-container">
        <div id="content" class="clearfix">

            <div id="main-content">
			<h1>Create New Post</h1>
		<hr>
				{!! Form::open(array('route' => 'mains.store', 'data-parsley-validate' => '')) !!}

					{{ Form::label('page_name', 'Page Name:') }}
					{{ Form::text('page_name', null, array('class'=>'form-control', 'required' => '', 'maxlength'=>'255')) }}

					{{ Form::label('title', 'Page Title:') }}
					{{ Form::text('title', null, array('class'=>'form-control', 'required' => '', 'maxlength'=>'255')) }}

					{{ Form::label('body', 'Page Body:') }}
					{{ Form::textarea('body', null, array('class'=>'form-control', 'required' => '')) }}

					{{ Form::submit('Create Page', array('class'=>'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;' )) }}
				{!! Form::close() !!}
		</div>
	</div>
	</div>



@endsection