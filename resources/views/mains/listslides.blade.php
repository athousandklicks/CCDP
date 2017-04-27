@extends('cabal_layout')

@section('title', '| View All Slides')



@section('content')

<div class="chit-chat-layer1">
  <div class="col-md-12 chit-chat-layer1-left">
               <div class="work-progres">
                <h1>All Slides</h1>
             </div>
    </div>
</div>

  <div class="chit-chat-layer1">
      <div class="col-md-12 chit-chat-layer1-left">
               <div class="work-progres">
                           
                            <div class="table-responsive">
                                <table class="table table-hover">
                                  <thead>
                                    <tr>
                                      <th>#</th>
                                      <th>Thumbnail</th>
                                      <th>Status</th>
                                      <th>Created At</th>
                                      <th>Updated At</th>
                                      <th>View</th>
                                      <th>Delete</th>
                                  </tr>
                              </thead>
                              <tbody>
                             @foreach($slide as $thumbnail) 
                     <tr>

                            <td>{{$thumbnail->id}}</td>
							<td><img src="{{asset('images/cabal/slides/'.$thumbnail->img_scr)}}" height="40" width="40"></td>

                            <td>{{$thumbnail->created_at->toFormattedDateString()}}</td>
                            <td>{{$thumbnail->updated_at->toFormattedDateString()}}
                            </td>
                            <td>{{$thumbnail->status}}</td>
                            <td>
                                  <a href="{{route('slides.show', $thumbnail->id)}}" class="btn btn-default btn-sm btn-success"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </td>

                            <td>
					            {!!Form::open(['route' => ['slides.destroy', $thumbnail->id], 'method' => 'DELETE', 'onsubmit' => 'return ConfirmDelete()'])
					            !!}

					            {!! Form::hidden('id', $thumbnail->id, ['class' => 'form-control']) !!}

					            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i>', ['type' => 'submit', 'class' => 'btn btn-default btn-sm btn-danger']) 
					            !!}

					            {!!Form::close()!!}
					               
                            </td>
                    </tr>
               	@endforeach()
            </tbody>
        </table>
    </div>
</div>

    </div>

     <div class="clearfix"> </div>

<script type="text/javascript">
  @include('partials._cabalmodaljs')
</script>


</div>

@endsection