@extends('cabal_layout')

@section('title', '| Add Image')



@section('content')

	<div class="inbox">
    	  <h2>Add a Image to Gallery </h2>
  	 
    	 	<div class="col-md-12 compose-right">
					<div class="inbox-details-default">
						<div class="inbox-details-heading">
							
						</div>
						<div class="inbox-details-body">
							<div class="alert alert-info">
								Please upload a valid image type to successfully add Image to Gallery
							</div>

					{!! Form::open(array('route' => 'gallerys.store', 'files' => true)) !!}

					{{ Form::label('title', 'Title:') }}
					{{ Form::text('title', null, array('class'=>'form-control', 'required' => '', 'maxlength'=>'255')) }}

					  {{ Form::label('img_scr','Upload Image to Gallery') }}
					  {{ Form::file('img_scr', array('class'=>'btn btn-success btn-sm')) }}
							<br/>					  
					  
					  <!-- reset buttons -->
					  {{ Form::reset('Reset', array('id'=>'','class'=>'btn btn-success btn-sm')) }}
<br/>

					{{ Form::submit('Add Slider Image', array('class'=>'btn btn-success btn-lg', 'style' => 'margin-top: 20px;' )) }}
					{!! Form::close() !!}


						</div>
					</div>
				</div>
    	
          <div class="clearfix"> </div>     
   </div>

@endsection