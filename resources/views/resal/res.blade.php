
<link rel="stylesheet" type="text/css" href="{{ url('/admincss/email/addemail.css') }}" />
<link rel="stylesheet" type="text/css" href="{{  secure_asset('/admincss/email/addemail.css') }}" />

<script src="{{ asset('/adminJs/addemailjs.js') }}" defer></script> 
<script src="{{ secure_asset('/adminJs/addemailjs.js') }}" defer></script> 


<div id="registration-form">
	<div class='fieldset'>
    <legend>النتيجة</legend>
		
			<div class='row'>

				<h3 Style="text-align: center; background-color:rgb(210, 210, 210);">game 1</h3>
			</div>
			<div class='row'>

				<input type="text" placeholder="Email" name='email' data-required="true" data-error-message="Your First Name is required">
			</div>

			<div class='row'>

				<input type="text" placeholder="Rule Id" name='ruleid' data-required="true" data-error-message="Your First Name is required">
			</div>
			<div class='row'>
				<input type="text" placeholder="Password"  name='password' data-required="true" data-type="email" data-error-message="Your E-mail is required">
			</div>
			<input type="submit" value="Add email">
	</div>
</div>