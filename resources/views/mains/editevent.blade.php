@extends('cabal_layout')

@section('title', '| Edit Page')



@section('content')

				 <div class="inbox">
    	  <h2>Edit Page </h2>
  	 
    	 	<div class="col-md-12 compose-right">
					<div class="inbox-details-default">
						<div class="inbox-details-heading">
							
						</div>
						<div class="inbox-details-body">
							<div class="alert alert-info">
								Please all fields are required in order to add new page
							</div>
					{!!Form::model($event, ['route' => ['events.update', $event->id], 'files' => true, 'method' => 'PUT', 'onsubmit' => 'return ConfirmSave()'])!!}	

					{{csrf_field()}}

					{!! Form::hidden('id', $event->id, ['class' => 'form-control']) !!}

					{{ Form::label('title', 'Title:') }}
					{{ Form::text('title', null, array('class'=>'form-control', 'required' => '', 'maxlength'=>'255')) }}

					{{ Form::label('body', 'Event Details:') }}
					{{ Form::text('body', null, array('class'=>'form-control', 'required' => '', 'maxlength'=>'1000')) }}

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

					{{ Form::submit('Save Changes', array('class'=>'btn btn-success btn-lg', 'style' => 'margin-top: 20px;' )) }}

					{!! Form::close() !!}



						</div>
					</div>
				</div>
    	
          <div class="clearfix"> </div>  

	<script type="text/javascript">
	  @include('partials._cabalmodaljs')
	</script>
   
   </div>

@endsection