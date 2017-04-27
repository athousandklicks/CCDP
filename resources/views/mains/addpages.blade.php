@extends('cabal_layout')

@section('title', '| Add Pages')



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
					{{ Form::textarea('body', null, array('class'=>'form-control', 'required' => '')) }}

					{{ Form::submit('Create Page', array('class'=>'btn btn-success btn-lg', 'style' => 'margin-top: 20px;' )) }}
					{!! Form::close() !!}


						</div>
					</div>
				</div>
    	
          <div class="clearfix"> </div>     
   </div>


@endsection