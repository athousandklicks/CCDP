@extends('cabal_layout')

@section('title', '| Add Event')

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
    	  <h2>Add a New Event </h2>
  	 
    	 	<div class="col-md-12 compose-right">
					<div class="inbox-details-default">
						<div class="inbox-details-heading">
							
						</div>
						<div class="inbox-details-body">
							<div class="alert alert-info">
								Please all fields are required in order to successfully create an event
							</div>

					{!! Form::open(array('route' => 'events.store', 'files' => true)) !!}

					{{csrf_field()}}

					{{ Form::label('title', 'Title:') }}
					{{ Form::text('title', null, array('class'=>'form-control', 'required' => '', 'maxlength'=>'255')) }}

					{{ Form::label('body', 'Event Details:') }}
					{{ Form::textarea('body', null, array('class'=>'form-control', 'maxlength'=>'1000')) }}

					{{ Form::label('venue', 'Event Location:') }}
					{{ Form::text('venue', null, array('class'=>'form-control', 'required' => '', 'maxlength'=>'1000')) }}

					{{ Form::label('date', 'Event Start Date:') }}
					{{ Form::input('date', 'date', date('Y-m-d'), ['class'=>'form-control', 'required']) }}
					
					<br/>
					
					{{ Form::label('end_date', 'Event End Date:') }}
					{{ Form::input('date', 'end_date', date('Y-m-d'), ['class'=>'form-control', 'required']) }}
	
					<br/><br/>

					{{ Form::label('time', 'Event Start Time:') }}
					{{ Form::text('time', null, array('class'=>'form-control', 'required' => '', 'maxlength'=>'1000')) }}

					{{ Form::label('end_time', 'Event End Time:') }}
					{{ Form::text('end_time', null, array('class'=>'form-control', 'required' => '', 'maxlength'=>'1000')) }}

					<br/>

					  {{ Form::label('event_flyer','Upload Event Flyer') }}
					  {{ Form::file('event_flyer', array('class'=>'btn btn-success btn-sm')) }}
							<br/>					  
					  
					  <!-- reset buttons -->
					  {{ Form::reset('Reset', array('id'=>'','class'=>'btn btn-success btn-sm')) }}
<br/>

					{{ Form::submit('Create Event', array('class'=>'btn btn-success btn-lg', 'style' => 'margin-top: 20px;' )) }}
					{!! Form::close() !!}


						</div>
					</div>
				</div>
    	
          <div class="clearfix"> </div>     
   </div>

@endsection