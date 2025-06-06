@extends('layout.app')


@section('title')
Index
@endsection



@section('content')


<div class="mt-5">
          <div class="text-center">
              <a class="btn btn-success" href="{{route('posts.create')}}">Create Post</a>
  
          </div>
  
          
  
          <div class="position-absolute top-50 start-50 translate-middle w-75 ">
              <table class="table ">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Title</th>
                      <th scope="col">Post by</th>
                      <th scope="col">Created At</th>
                      <th scope="col">Actions</th>
                    </tr>
                  </thead>
                  <tbody>

                
                      @foreach ($posts as $post )
                      
                      <tr>
                      <th scope="row">{{$post->id}}</th>
                      <td>{{$post['title']}}</td>
                      <td>{{$post['postBy']}}</td>
                      <td>{{$post['createdAt']}}</td>
                      <td class="text-center">
                        

                          <a class="btn btn-secondary " href='{{route('posts.show' , $post->id)}}'>Read</a>
                          <a class="btn btn-primary " href="{{route('posts.edit' ,$post->id)}}">Edit</a>
                          <form style="display: inline" action="{{route('posts.destoy', $post->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button  type="submit" class="btn btn-danger">Delete</button>
                          </form>
                        
  
                      </td>
                    </tr>
                      @endforeach
  
                    
                  </tbody>
                </table>
          </div>
  </div>
        
        @endsection