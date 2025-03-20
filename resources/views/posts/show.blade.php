
@extends('layout.app')


@section('title')
Show
@endsection

@section('content')

        <div class="card w-80">
            <div class="card-header fs-5 ">
              Post By : {{$post['postBy']}}
            </div>
            <div class="card-body">
              <blockquote class="blockquote mb-0">
                <footer class="blockquote-footer fs-6">Email : <cite title="Source Title">{{$post['email']}}</cite></footer>
                <footer class="blockquote-footer fs-6">Posted at : <cite title="Source Title">{{$post['createdAt']}}</cite></footer>
              </blockquote>
            </div>
        </div>
        <div class="card mt-2">
            <h5 class="card-header">{{$post['title']}}</h5>
            <div class="card-body">
              <h5 class="card-title">{{$post['description']}}</h5>
              <p class="card-text">{{$post['content']}}</p>
              <a href='{{route('posts.index')}}' class="btn btn-primary">Go Back</a>
            </div>
          </div>
          
          
@endsection