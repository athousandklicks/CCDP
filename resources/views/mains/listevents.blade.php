@extends('cabal_layout')

@section('title', '| List of Events')



@section('content')

  <div class="chit-chat-layer1">
  <div class="col-md-12 chit-chat-layer1-left">
               <div class="work-progres">
                <h1>List of Events</h1>
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
                                      <th>Title</th>
                                      <th>Description</th>
                                      <th>Venue</th>
                                      <th>Date</th>
                                      <th>Created At</th>
                                      <th>Updated At</th>
                                      <th>View</th>
                                      <th>Edit</th>
                                      <th>Delete</th>
                                  </tr>
                              </thead>
                              <tbody>
                             @foreach($event as $posts) 
                                <tr>

                              <td>{{$posts->id}}</td>
							<td><img src="{{asset('images/cabal/events/'.$posts->img_scr)}}" height="40" width="40"></td>

                                 
                                  <td>{{$posts->title}}</td>                       
                                  <td>{{strip_tags(str_limit($posts->body, 50, '...'))}}</td>


                                  <td>{{$posts->venue}}</td>
                                  <td>{{$posts->date->toFormattedDateString()}}</td>
                                  <td>{{$posts->created_at->toFormattedDateString()}}</td>
                                  <td>{{$posts->updated_at->toFormattedDateString()}}
                                  </td>
                                  <td>
                                  <a href="{{route('events.show', $posts->id)}}" class="btn btn-default btn-sm btn-success"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                  </td>
                                  <td>
                                  <a href="{{route('events.edit', $posts->id)}}" class="btn btn-default btn-sm btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                  </td>
                                  <td>






            {!!Form::open(['route' => ['events.destroy', $posts->id], 'method' => 'DELETE', 'onsubmit' => 'return ConfirmDelete()'])
            !!}

            {!! Form::hidden('id', $posts->id, ['class' => 'form-control']) !!}

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