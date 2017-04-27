@extends('cabal_layout')

@section('title', '| Slide Image')



@section('content')



	<!--inner block start here-->

    <div class="blank">
    	<h2>Full Slider Image</h2>
    	<div class="blankpage-main">
    		<img src="{{asset('images/cabal/slides/'.$slide->img_scr)}}" height="500" width="950">
    	</div>

    		<hr>
    	<div>
			<table>
				<tr class="col-md-8">
				<td>
				<a href="{{route('slides.index')}}" class="btn btn-default btn-success text-center btn-lg btn-block"><i class="fa fa-eye" aria-hidden="true"></i> Show All</a>
                </td>
                <td>.</td>
                
                 <td>


		            {!!Form::open(['route' => ['slides.destroy', $slide->id], 'method' => 'DELETE', 'onsubmit' => 'return ConfirmDelete()'])
            		!!}

            		{!! Form::hidden('id', $slide->id, ['class' => 'form-control']) !!}

		            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', ['type' => 'submit', 'class' => 'btn btn-default btn-danger text-center btn-lg btn-block', ]) 
		            !!}
		            {!!Form::close()!!}


                 
                </td>
				</tr>
				<tr class="col-md-4">
					
				</tr>


				<tr>

				</tr>
			</table>

		<script type="text/javascript">
		  @include('partials._cabalmodaljs')
		</script>


    		</div>
    </div>

<!--inner block end here-->
   

@endsection