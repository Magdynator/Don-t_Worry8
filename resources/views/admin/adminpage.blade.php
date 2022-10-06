@extends('admin.admiinsidebar')

@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<header class="header">
    <div class="logo">
      <a href="#">EasyPay</a>
      <div class="search_box">
        <input type="text" placeholder="Search EasyPay">
        <i class="fa-sharp fa-solid fa-magnifying-glass"></i>
      </div>
    </div>

    <div class="header-icons">
      <i class="fas fa-bell"></i>
      <div class="account">
        <img src="./pic/img.jpg" alt="">
        <h4>Jhon Viek</h4>
      </div>
    </div>
  </header>


  <div class="main-body">
      <h2>Dashboard</h2>
      <div class="promo_card">
        <h1>Welcome to Don't 
          worry admin panal</h1>
        
      </div>

      <div class="history_lists">
        <div class="list1">
          <div class="row">
            <h4>Email</h4>
            <a href="admin/email">See all</a>
          </div>
          <table>
          <thead>
            <tr>
              
              <th scope="col">Team Id</th>
              <th scope="col">email</th>
              <th scope="col">password</th>
            </tr>
          </thead>
            <tbody>
            @foreach($emails as $email)

<tr scope="row">
          <td>
          
            {{ $email->id}}
           
          </td>
          <td>
            {{ $email->email}}
           
            </td>
          <td>
          
            {{ $email->password}}
         
          </td>
          


          </td>
          
    
</tr>
</tbody>

@endforeach     
          </table>
        </div>

        <div class="list2">
          <div class="row">
            <h4>games</h4>
            <a href="admin/Games">See all</a>
          </div>
          <table>
            <thead>
              <tr>
                <th>TeamId</th>
                <th>total point</th>
              </tr>
            </thead>
            <tbody>
            @foreach($games as $game)

<tr scope="row">
          <td>
          
            {{ $game->team_id}}
           
          </td>
          <td>
            {{ $game->total_games_point}}
           
            </td>
          
            </tr>

@endforeach 
            </tbody>
          </table>
        </div>

        
      </div>
      <div class="history_lists">
        <div class="list1">
          <div class="row">
            <h4>Exam 1</h4>
            <a href="admin/email">See all</a>
          </div>
          <table>
          <thead>
            <tr>
              
              <th scope="col">TeamId</th>
              <th scope="col">examPoint</th>
              
            </tr>
          </thead>
            <tbody>
            @foreach($exam1 as $exam)

<tr scope="row">
          <td>
          
            {{ $exam->team_id}}
           
          </td>
          <td>
            {{ $email->exam_1_point}}
           
            </td>    
</tr>
</tbody>

@endforeach     
          </table>
        </div>

        <div class="list2">
          <div class="row">
            <h4>Exam 2</h4>
            <a href="admin/Games">See all</a>
          </div>
          <table>
            <thead>
              <tr>
                <th>TeamId</th>
                <th>examPoint</th>
              </tr>
            </thead>
            <tbody>
            @foreach($exam2 as $exam)

<tr scope="row">
          <td>
          
            {{ $exam->team_id}}
           
          </td>
          <td>
            {{ $exam->exam_2_point}}
           
            </td>
          
            </tr>

@endforeach 
            </tbody>
          </table>
        </div>
        
    </div>

    

            </tbody>
          </table>
        </div>
    
  </div>
<!-- <script src="https://cdn.freecodecamp.org/testable-projects-fcc/v1/bundle.js"></script> -->
@endsection()