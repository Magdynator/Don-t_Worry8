<head>
 <link rel="stylesheet" type="text/css" href="{{ url('admincss/css.css') }}" />
 <link rel="stylesheet" type="text/css" href="{{  secure_asset('admincss/css.css') }}" />

 <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>   
<div class="login">
	<h1>Login</h1>
    <form action="adminpanal"  method="post">
        @csrf
    	<input type="text" name="email" placeholder="Username" required="required" />
        <input type="password" name="password" placeholder="Password" required="required" />
        <button type="submit" class="btn btn-primary btn-block btn-large">Let me in.</button>
    </form>
</div>