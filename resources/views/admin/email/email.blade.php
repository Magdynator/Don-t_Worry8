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


    <title>emails</title>
    
    
  </head>
  <body>
  

  <div class="content">
            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif
    <div class="container">
    <button type="button" class="btn btn-primary" onclick="window.location='{{ url("admin/addemail") }}'">Add email</button>
      

      <div class="table-responsive">

        <table class="table table-striped custom-table">
          <thead>
            <tr>
              
              <th scope="col">Team Id</th>
              <th scope="col">email</th>
              <th scope="col">password</th>
              <th scope="col">edit</th>
              <th scope="col">delete</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
          @foreach($emails as $email)

            <tr scope="row">
                      <td>
                      <h2 class="post-title">
                        {{ $email->id}}
                      </h2>   
                      </td>
                      <td><h2 class="post-title">
                        {{ $email->email}}
                      </h2>  
                        </td>
                      <td>
                      <h2 class="post-title">
                        {{ $email->password}}
                      </h2>  
                      </td>
                      <td>  
                          <button type="button" class="btn btn-success" onclick="window.location='{{ url("email/". $email->id."/edit") }}'">edit</button>
                      </td>
                      <td>
                      <button type="button" class="btn btn-danger" onclick="window.location='{{ url("admin/email/delete/". $email->id) }}'">Delete</button>
        

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