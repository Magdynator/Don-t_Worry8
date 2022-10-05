<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" type="text/css" href="{{ url('/admincss/email/addemail.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ secure_asset('/admincss/email/addemail.css') }}" />

<script src="{{ asset('/adminJs/addemailjs.js') }}" defer></script> 
<script src="{{ secure_asset('/adminJs/addemailjs.js') }}" defer></script> 


<div id="registration-form">
	<div class='fieldset'>
    <legend>Edit point games</legend>
		<form action="games" method="post" >
        @csrf
             <div class='row'>
				<input type="text" placeholder="Team Id" name='teamId' value={{ $game->team_id}} >
			</div>
			<div class='row'>

				<input type="text" placeholder="Game 4" name='game4' value={{$game-> game_4}} >
			</div>
			<div class='row'>
				<input type="text" placeholder="Game 5" name='game5' value={{$game-> game_5}} >
			</div>
			<div class='row'>

				<input type="text" placeholder="Game 6" name='game6' value={{$game-> game_6}} >
			</div>
			<input type="submit" value="Edit point">
		</form>
	</div>
</div>