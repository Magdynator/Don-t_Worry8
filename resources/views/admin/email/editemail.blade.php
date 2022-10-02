
<link rel="stylesheet" type="text/css" href="{{ url('/admincss/email/addemail.css') }}" />
<link rel="stylesheet" type="text/css" href="{{  secure_asset('/admincss/email/addemail.css') }}" />

<script src="{{ asset('/adminJs/addemailjs.js') }}" defer></script> 
<script src="{{ secure_asset('/adminJs/addemailjs.js') }}" defer></script> 


<div id="registration-form">
	<div class='fieldset'>
    <legend>Edit email</legend>
		<form action="edit" method="post" >
        @csrf
             <div class='row'>

				<input type="text" placeholder="id" name='id' value={{$id}} data-required="true" data-error-message="Your First Name is required">
			</div>
			<div class='row'>

				<input type="text" placeholder="Email" name='email' value={{$email}} data-required="true" data-error-message="Your First Name is required">
			</div>
			<div class='row'>
				<input type="text" placeholder="Password"  name='password' value={{$password}} data-required="true" data-type="email" data-error-message="Your E-mail is required">
			</div>
			<input type="submit" value="Edit email">
		</form>
	</div>
</div>