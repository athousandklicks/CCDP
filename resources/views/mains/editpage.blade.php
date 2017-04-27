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


					{!!Form::model($main, ['route'=>['mains.update', $main->id], 'method' => 'PUT', 'onsubmit' => 'return ConfirmSave()'])!!}	

					{{csrf_field()}}

					{!! Form::hidden('id', $main->id, ['class' => 'form-control']) !!}


					{{Form::label('page_name', 'Page Name:')}}
					{{ Form::text('page_name', null, ['class'=>'form-control', 'required' => '', 'maxlength'=>'255'])}}

					{{ Form::label('title', 'Title:') }}
					{{ Form::text('title', null, array('class'=>'form-control', 'required' => '', 'maxlength'=>'255')) }}

					{{ Form::label('body', 'Page Details:') }}
					{{ Form::textarea('body', null, array('class'=>'form-control', 'required' => '')) }}

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