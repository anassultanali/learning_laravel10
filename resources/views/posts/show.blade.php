
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
                <a class="nav-link active" aria-current="page" href="../posts">All Posts</a>
              </li>
              
              </li>
            </ul>
          </div>
        </div>
      </nav>

    <div class="container m-4">
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
        
    </div>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>