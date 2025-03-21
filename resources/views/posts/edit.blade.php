@extends('layout.app')



@section('title')Edit @endsection

@section('content')

<form method="post" action="{{route('posts.update' , 1)}}">
    @csrf
    @method('PUT')
    <div class="form-floating mb-3">
        <input name="title" type="text" class="form-control" id="floatingInput" placeholder="The title" required>
        <label for="floatingInput">The title</label>
    </div> 
    <div class="form-floating mb-3">
        <input name="discrption" type="text" class="form-control" id="floatingInput" placeholder="Discrption" required>
        <label for="floatingInput">The Discrption</label>
    </div>    
    <div class="mb-3">  
        <div class="form-floating">
            <textarea name="content" class="form-control" style="height: 200px" placeholder="Content" id="floatingTextarea" required></textarea>
            <label for="floatingTextarea">Content</label>
          </div>
    </div>
    <div class="form-floating">
        <select name="postBy" class="form-select" id="floatingSelect" aria-label="Floating label select example">
          <option selected>Posted By</option>
          <option value="1">Anas</option>
          <option value="2">Osama</option>
          <option value="3">yasser</option>
        </select>
        <label for="floatingSelect">Posted By</label>
      </div>
    <div class="form-check">
        <input class="form-check-input border border-primary" type="checkbox" value="" id="flexCheckDefault" required>
        <label class="form-check-label" for="flexCheckDefault">
          I agree...
        </label>
    </div>
    <div class="col-12">
        <button class="btn btn-primary" type="submit">Update</button>
    </div>

</form>




@endsection