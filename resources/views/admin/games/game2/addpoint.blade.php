<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" type="text/css" href="{{ url('/admincss/email/addemail.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ secure_asset('/admincss/email/addemail.css') }}" />

<script src="{{ asset('/adminJs/addemailjs.js') }}" defer></script> 
<script src="{{ secure_asset('/adminJs/addemailjs.js') }}" defer></script> 

<div id="registration-form">
	<div class='fieldset'>
    <legend>Add point game 2</legend>
		<form action="addGame2" method="post" >
        @csrf
             <div class='row'>

				<input type="text" placeholder="Team Id" name='teamId'>
			</div>
			<div class='row'>

				<input type="text" placeholder="Game Point" name='game2'>
			</div>
			
			<input type="submit" value="Add point">
		</form>
	</div>
</div>