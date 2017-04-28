@extends('cabal_layout')

@section('title', '| List of Pages')



@section('content')

  <div class="chit-chat-layer1">
  <div class="col-md-12 chit-chat-layer1-left">
               <div class="work-progres">
                <h1>List of pages</h1>
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
                                      <th>Page Name</th>
                                      <th>Title</th>
                                      <th>Page Body</th>
                                      <th>Created At</th>
                                      <th>Updated At</th>
                                      <th>View</th>
                                      <th>Edit</th>
                                      <th>Delete</th>
                                  </tr>
                              </thead>
                              <tbody>
                             @foreach($main as $page) 
                                <tr>
                                  <td>{{$page->id}}</td>
                                  <td>{{$page->page_name}}</td>
                                  <td>{{$page->title}}</td>                       
                                  <td>{{strip_tags(str_limit($page->body, 200, '...'))}}</td>

  

                                  <td>{{$page->created_at->toFormattedDateString()}}</td>
                                  <td>{{$page->updated_at->toFormattedDateString()}}
                                  </td>
                                  <td>
                                  <a href="{{route('mains.show', $page->id)}}" class="btn btn-default btn-sm btn-success"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                  </td>
                                  <td>
                                  <a href="{{route('mains.edit', $page->id)}}" class="btn btn-default btn-sm btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                  </td>
                                  <td>






            {!!Form::open(['route' => ['mains.destroy', $page->id], 'method' => 'DELETE', 'onsubmit' => 'return ConfirmDelete()'])
            !!}

            {!! Form::hidden('id', $page->id, ['class' => 'form-control']) !!}

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