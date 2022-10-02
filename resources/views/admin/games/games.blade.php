<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ url('/admincss/style.css') }}" />

    <link rel="stylesheet" type="text/css" href="{{ url('/admincss/email/owl.carousel.min.css') }}" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ url('/admincss/email/bootstrap.min.css') }}" />

    <!-- Style -->
    <link rel="stylesheet" type="text/css" href="{{ url('/admincss/email/style.css') }}" />


    <title>Games</title>
    
    
  </head>
  <body>
  

  <div class="content">
            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif
    <div class="container">
    <button type="button" class="btn btn-primary" onclick="window.location='{{ url("admin/addemail") }}'">Add point</button>
      

      <div class="table-responsive">

        <table class="table table-striped custom-table">
          <thead>
            <tr>
              
              <th scope="col">Team Id</th>
              <th scope="col">game 1</th>
              <th scope="col">game 2</th>
              <th scope="col">game 3</th>
              <th scope="col">game 4</th>
              <th scope="col">game 5</th>
              <th scope="col">game 6</th>
              <th scope="col">game 7</th>
              <th scope="col">game 8</th>
              <th scope="col">game 9</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
          @foreach($games as $game)

            <tr scope="row">
                      <td>
                      <h2 class="post-title">
                        {{ $game->team_id}}
                      </h2>   
                      </td>
                      <td><h2 class="post-title">
                        {{ $game->game_1}}
                      </h2>  
                        </td>
                        <td><h2 class="post-title">
                        {{ $game->game_2}}
                      </h2>  
                        </td>
                        <td><h2 class="post-title">
                        {{ $game->game_3}}
                      </h2>  
                        </td>
                        <td><h2 class="post-title">
                        {{ $game->game_4}}
                      </h2>  
                        </td>
                        <td><h2 class="post-title">
                        {{ $game->game_5}}
                      </h2>  
                        </td>
                        <td><h2 class="post-title">
                        {{ $game->game_6}}
                      </h2>  
                        </td>
                        <td><h2 class="post-title">
                        {{ $game->game_7}}
                      </h2>  
                        </td>
                        <td><h2 class="post-title">
                        {{ $game->game_8}}
                      </h2>  
                        </td>
                        <td><h2 class="post-title">
                        {{ $game->game_9}}
                      </h2>  
                        </td>
                      <td>  
                          <button type="button" class="btn btn-success" onclick="window.location='{{ url("admin/". $game->team_id)."/edit/games" }}'">edit</button>
                      </td>
                    
            </tr>
        </tbody>
        
        @endforeach
           
      </div>


    </div>

  </div>
    
    

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>