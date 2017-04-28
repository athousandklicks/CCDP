@extends('cabal_layout')

@section('title', '| Pages Details')



@section('content')

	
    <div class="blank">
    	<h2>{{$main->title}}</h2>
    	<div class="blankpage-main">
    		<p>{!!$main->body!!} </p>
    	</div>
	<hr>
    	<div>
			<table>
				<tr class="col-md-8">
				<td>
				<a href="{{route('mains.index')}}" class="btn btn-default btn-success text-center btn-lg btn-block"><i class="fa fa-eye" aria-hidden="true"></i> Show All</a>
                </td>
                <td>.</td>

				<td>
					<a href="{{route('mains.edit', $main->id)}}" class="btn btn-default btn-primary text-center btn-lg btn-block"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
                </td>
                <td>.</td>
                
                 <td>


		            {!!Form::open(['route' => ['mains.destroy', $main->id], 'method' => 'DELETE', 'onsubmit' => 'return ConfirmDelete()'])
            		!!}

            		{!! Form::hidden('id', $main->id, ['class' => 'form-control']) !!}

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
    		</div>

<script type="text/javascript">
  @include('partials._cabalmodaljs')
</script>


    	</div>




@endsection