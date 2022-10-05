<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" type="text/css" href="{{ url('/admincss/email/addemail.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ secure_asset('/admincss/email/addemail.css') }}" />

<script src="{{ asset('/adminJs/addemailjs.js') }}" defer></script> 
<script src="{{ secure_asset('/adminJs/addemailjs.js') }}" defer></script> 


<div id="registration-form">
	<div class='fieldset'>
    <legend>masseges</legend>
		<form action="mas" method="post" >
        @csrf
        <label for="img">Select image:</label>
        <input type="file"  name="img"><br>
        <label>massege:</label>
        <input type="text"  name="mass" ><br>
        <input type="submit">

		</form>
	</div>
</div>