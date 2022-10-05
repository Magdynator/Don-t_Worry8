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

				<input type="text" placeholder="Game 7" name='game7' value={{$game-> game_7}} >
			</div>
			<div class='row'>
				<input type="text" placeholder="Game 8" name='game8' value={{$game-> game_8}} >
			</div>
			<div class='row'>

				<input type="text" placeholder="Game 9" name='game9' value={{$game-> game_9}} >
			</div>
			<input type="submit" value="Edit point">
		</form>
	</div>
</div>