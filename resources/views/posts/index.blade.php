<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">ZIZO Bloge</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">All Posts</a>
              </li>
              
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <div class="container m-4">
      
        <div class="mt-5">
          <div class="text-center">
              <button type="button" class="btn btn-success">Create Post</button>
  
          </div>
  
          
  
          <div class="position-absolute top-50 start-50 translate-middle w-50 ">
              <table class="table">
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
                      <th scope="row">{{$post['id']}}</th>
                      <td>{{$post['title']}}</td>
                      <td>{{$post['postBy']}}</td>
                      <td>{{$post['createdAt']}}</td>
                      <td>
                          <a class="btn btn-secondary" href='{{route('posts.show' , $post['id'])}}'>Read</a>
                          <a class="btn btn-primary" href="">Edit</a>
                          <a class="btn btn-danger" href="">Delete</a>
  
                      </td>
                    </tr>
                      @endforeach
  
                    
                  </tbody>
                </table>
          </div>
        </div>
    </div>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>