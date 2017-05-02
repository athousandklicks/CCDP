@extends('cabal_layout')

@section('title', '| Add Pages')

@section('links')

<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>

<script>
	tinymce.init({
		  selector: 'textarea',  // change this value according to your HTML

		  plugins: 'link autoresize hr spellchecker searchreplace advlist lists table textcolor textpattern wordcount textcolor colorpicker anchor insertdatetime media'
		});
	</script>

	@endsection

	@section('content')

	
	<div class="inbox">
		<h2>Create New Page </h2>
		
		<div class="col-md-12 compose-right">
			<div class="inbox-details-default">
				<div class="inbox-details-heading">
					
				</div>
				<div class="inbox-details-body">
					<div class="alert alert-info">
						Please all fields are required in order to add new page
					</div>

					{!! Form::open(array('route' => 'mains.store')) !!}

					{{csrf_field()}}

					{{ Form::label('page_name', 'Page Name:') }}
					{{ Form::text('page_name', null, array('class'=>'form-control', 'required' => '', 'maxlength'=>'255')) }}

					{{ Form::label('title', 'Title:') }}
					{{ Form::text('title', null, array('class'=>'form-control', 'required' => '', 'maxlength'=>'255')) }}

					{{ Form::label('body', 'Page Details:') }}
					{{ Form::textarea('body', null, array('class'=>'form-control')) }}

					{{ Form::submit('Create Page', array('class'=>'btn btn-success btn-lg', 'style' => 'margin-top: 20px;' )) }}
					{!! Form::close() !!}


				</div>
			</div>
		</div>
		
		<div class="clearfix"> </div>     
	</div>


	@endsection