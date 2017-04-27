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
				
				<table class="table">
			  <thead>
			  	<th>#</th>
			  	<th>Title</th>
			  	<th>Body</th>
			  	<th>Created At</th>
			  	<th>Title</th>
			  </thead>

			  <tbody>
			  	@foreach($main as $post)
					<tr>
						<th>{{$post->id}}</th>
						<td>{{$post->title}}</td>
						<td>{{str_limit($post->body, 50, '...')}}</td>
						<td>{{$post->created_at->toFormattedDateString()}}</td>
						<td><a href="{{route('mains.show', $post->id)}}" class="btn btn-default btn-sm btn-success">View</a>

						<a href="{{route('mains.edit', $post->id)}}" class="btn btn-default btn-sm">Edit</a>

						{!!Form::open(['route' => ['mains.destroy', $post->id], 'method' => 'DELETE'])
						!!}

						{!! Form::submit('delete', []) 
						!!}
						{!!Form::close()!!}

						</td>
					</tr>
			  	@endforeach
			  </tbody>
			</table>

			</div>
		</div>
	</div>		
		
@endsection