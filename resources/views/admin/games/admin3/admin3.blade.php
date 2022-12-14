<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ secure_asset('https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap') }}" />

    <link rel="stylesheet" type="text/css" href="{{ url('/admincss/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ secure_asset('/admincss/style.css') }}" />

    <link rel="stylesheet" type="text/css" href="{{ url('/admincss/email/owl.carousel.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ secure_asset('/admincss/email/owl.carousel.min.css') }}" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ url('/admincss/email/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ secure_asset('/admincss/email/bootstrap.min.css') }}" />

    <!-- Style -->
    <link rel="stylesheet" type="text/css" href="{{ url('/admincss/email/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ secure_asset('/admincss/email/style.css') }}" />


    <title>admin 3</title>
    
    
  </head>
  <body>
  <div class="container">
      
      <div class="table-responsive">

        <table class="table table-striped custom-table">
    <h1 Style="text-align: center; background-color:rgb(210, 210, 210);">Game 7</h1><br><br>

          <thead>
            <tr>
              
              <th scope="col">Team Id</th>
              <th scope="col">point</th>
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
                        {{ $game->game_7}}
                      </h2>  
                        </td>
                         <td>  
                          <button type="button" class="btn btn-success" onclick="window.location='{{ url("admin3/". $game->team_id)."/edit/games" }}'">edit</button>
                      </td>
            </tr>
        </tbody>
        
        @endforeach
           
      </div>


    </div>
      <div class="table-responsive">

        <table class="table table-striped custom-table">
      <h1 Style="text-align: center; background-color:rgb(210, 210, 210);">Game 8</h1><br><br>

          <thead>
            <tr>
              <th scope="col">Team Id</th>
              <th scope="col">point</th>
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
                        {{ $game->game_8}}
                      </h2>  
                        </td>
                        <td>  
                          <button type="button" class="btn btn-success" onclick="window.location='{{ url("admin3/". $game->team_id)."/edit/games" }}'">edit</button>
                      </td>
            </tr>
            @endforeach
        </tbody>
        
           
      </div>
    </div>
    </div>
      <div class="table-responsive">

        <table class="table table-striped custom-table">
  <h1 Style="text-align: center; background-color:rgb(210, 210, 210);">Game 9</h1><br><br> 

          <thead>
            <tr>
              
              <th scope="col">Team Id</th>
              <th scope="col">point</th>
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
                        {{ $game->game_9}}
                      </h2>
                      <td>  
                          <button type="button" class="btn btn-success" onclick="window.location='{{ url("admin3/". $game->team_id)."/edit/games" }}'">edit</button>
                      </td>  
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