@extends('cabal_layout')

@section('title', '| Add Slide')



@section('content')

	<div class="inbox">
    	  <h2>Add a New Front Page Slide </h2>
  	 
    	 	<div class="col-md-12 compose-right">
					<div class="inbox-details-default">
						<div class="inbox-details-heading">
							
						</div>
						<div class="inbox-details-body">
							<div class="alert alert-info">
								Please upload a valid image type to successfully add a slide
							</div>

					{!! Form::open(array('route' => 'slides.store', 'files' => true)) !!}

					  {{ Form::label('img_scr','Upload Slider Image') }}
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