<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>
        @yield('title')
    </title>
    <style>
       .btn-warning{
         color: white;
       }
    </style>

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light  ">
        <div class="container">
          <a class="navbar-brand" href="/">Todos App</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="nav navbar-nav justify-content-center">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/todos">Todos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/add-todos">Create Todos</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <div class="container">
      @if(session()->has('success'))
        <div class="alert alert-success" id="alert">
           {{ session()->get('success') }}
        </div>
      @endif


        @yield('content') 
    </div>
    
    <script>
        setTimeout(() => {
            var alertDiv = document.getElementById("alert");
            alertDiv.remove();
        }, 1200);
    </script>
</body>
</html>