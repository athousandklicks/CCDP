@extends('cabal_layout')

@section('title', '| Event Details')



@section('content')

    <div class="inbox">
    	  <h2>Event Details</h2>
    	 <div class="col-md-4 compose">   	 	
    	 	<div class="mail-profile">
    	 		<div class="mail-pic">
    	 			<img src="{{asset('images/cabal/events/'.$event->img_scr)}}" height="300" width="280">
    	 		</div>

    	 	    <div class="clearfix"> </div>
    	 	</div>

    	 </div>   	 
    	 	<div class="col-md-8 compose-right">
					<div class="inbox-details-default">
						<div class="inbox-details-heading">
						
						</div>
						<div class="inbox-details-body">

					
					<h1>Event Title: {{$event->title}}</h1>

					<div class="well well-sm">
						<p><b>Event Details:</b> {!!$event->body!!}</p>
					</div>

					<div class="well well-sm"> 
						<p><b>Event Start Date:</b> {{$event->date->toFormattedDateString()}}</p>
					</div>

					<div class="well well-sm"> 
						<p><b>Event End Date:</b> {{$event->end_date->toFormattedDateString()}}</p>
					</div>

					<div class="well well-sm"> 
						<p><b>Event Start Time:</b> {{$event->time}}</p>
					</div>

					<div class="well well-sm"> 
						<p><b>Event End Time:</b> {{$event->end_time}}</p>
					</div>

					<div class="well well-sm"> 
						<p><b>Event was Create At:</b> {{$event->created_at->toFormattedDateString()}}</p>
					</div>

					<div class="well well-sm"> 
						<p><b>Event was Last Updated At:</b> {{$event->updated_at->toFormattedDateString()}}</p>
					</div>



					</div>

 
			<table>
				<tr class="col-md-8">
				<td>
				<a href="{{route('events.index')}}" class="btn btn-default btn-success text-center btn-lg btn-block"><i class="fa fa-eye" aria-hidden="true"></i> Show All</a>
                </td>
                <td>.</td>

				<td>
					<a href="{{route('events.edit', $event->id)}}" class="btn btn-default btn-primary text-center btn-lg btn-block"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
                </td>
                <td>.</td>
                
                 <td>


		            {!!Form::open(['route' => ['events.destroy', $event->id], 'method' => 'DELETE', 'onsubmit' => 'return ConfirmDelete()'])
            		!!}

            		{!! Form::hidden('id', $event->id, ['class' => 'form-control']) !!}

		            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', ['type' => 'submit', 'class' => 'btn btn-default btn-danger text-center btn-lg btn-block', ]) 
		            !!}
		            {!!Form::close()!!}


                 
                </td>
				</tr>
				<tr class="col-md-4">
					
				</tr>
			</table>


<script type="text/javascript">
  @include('partials._cabalmodaljs')
</script>

					</div>
				</div>
    	
          <div class="clearfix"> </div>     
   </div>

@endsection