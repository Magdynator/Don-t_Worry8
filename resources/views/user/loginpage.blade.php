<html>
    <head>
    <link rel="stylesheet" type="text/css" href="{{  secure_asset('/css.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{  url('/css.css') }}" />

    <script src="{{ asset('/js.js') }}" defer></script> 
    <script src="{{ secure_asset('/js.js') }}" defer></script> 
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


</head>
<body>

	@if(Session::has('fail'))
    	<div class="alert alert-danger">{{Session::get('fail')}}</div>
    @endif
<div class="container right-panel-active">
	<!-- Sign Up -->
	<div class="container__form container--signup">
		<form action="login" class="form" method="Post">
		@csrf
			<h2 class="form__title">Log In</h2>
			<input type="text" placeholder="Team number" name="teamNumber" class="input" />
			<input type="email" placeholder="Email" name="email"class="input" />
			<input type="password" placeholder="Password"name="password" class="input" />
			<button class="btn">Log in</button>
		</form>
	</div>

	<!-- Sign In -->
	<div class="container__form container--signin">
		<form action="res" class="form" method="Post"id="form2">
		@csrf	
		<h2 class="form__title">اعرف نتيجتك</h2>
			<input type="text" placeholder="Team number" name="teamNumber" class="input" />
			<input type="email" placeholder="Email" name="email" class="input" />
			<input type="password" placeholder="Password"name="password" class="input" />
			<button class="btn">نتيجتك</button>
		</form>
	</div>

	<!-- Overlay -->
	<div class="container__overlay">
		<div class="overlay">
			<div class="overlay__panel overlay--left">
				<button class="btn" id="signIn">نتيجتك</button>
			</div>
			<div class="overlay__panel overlay--right">
				<button class="btn" id="signUp">Log in</button>
			</div>
		</div>
	</div>
</div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</html>
