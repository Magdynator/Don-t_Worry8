<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" type="text/css" href="{{ url('/admincss/email/addemail.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ secure_asset('/admincss/email/addemail.css') }}" />

<script src="{{ asset('/adminJs/addemailjs.js') }}" defer></script> 
<script src="{{ secure_asset('/adminJs/addemailjs.js') }}" defer></script> 
<title>add game 2 point</title>

<div id="registration-form">
	<div class='fieldset'>
    <legend>Exam Setting</legend>
		<form action="setting" method="post" >
        @csrf
        <form action="adminpanal"  method="post">
         <h2>exam1</h2> 
        <input type="radio"  name="state" value="open">
        <label for="open">open</label><br>
        <input type="radio"  name="state" value="close">
        <label for="close">close</label><br>
        <h2>exam2</h2> 
        <input type="radio"  name="state2" value="open">
        <label for="open">open</label><br>
        <input type="radio"  name="state2" value="close">
        <label for="close">close</label><br>
			<input type="submit" value="edit">
                        <h2>exam2</h2> 
        <input type="radio"  name="state2" value="open">
        <label for="open">open</label><br>
        <input type="radio"  name="state2" value="close">
        <label for="close">close</label><br>
			<input type="submit" value="edit"><h2>exam2</h2> 
        <input type="radio"  name="state2" value="open">
        <label for="open">open</label><br>
        <input type="radio"  name="state2" value="close">
        <label for="close">close</label><br>
			<input type="submit" value="edit">
		</form>
	</div>
</div>