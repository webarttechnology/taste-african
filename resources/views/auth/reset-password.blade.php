<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	  <link rel="icon" type="image/x-icon" href="{{asset('front/img/logos.png')}}">
	<title>African USA Food</title>
	<style>
		.mainDiv {
		display: flex;
		min-height: 100%;
		align-items: center;
		justify-content: center;
		background-color: #f9f9f9;
		font-family: 'Open Sans', sans-serif;
	  }
	 .cardStyle {
		width: 500px;
		border-color: white;
		background: #fff;
		padding: 36px 0;
		border-radius: 4px;
		margin: 30px 0;
		box-shadow: 0px 0 2px 0 rgba(0,0,0,0.25);
	  }
	#signupLogo {
	  max-height: 100px;
	  margin: auto;
	  display: flex;
	  flex-direction: column;
	}
	.formTitle{
	  font-weight: 600;
	  margin-top: 20px;
	  color: #2F2D3B;
	  text-align: center;
	}
	.inputLabel {
	  font-size: 12px;
	  color: #555;
	  margin-bottom: 6px;
	  margin-top: 24px;
	}
	  .inputDiv {
		width: 70%;
		display: flex;
		flex-direction: column;
		margin: auto;
	  }
	input {
	  height: 40px;
	  font-size: 16px;
	  border-radius: 4px;
	  border: none;
	  border: solid 1px #ccc;
	  padding: 0 11px;
	}
	input:disabled {
	  cursor: not-allowed;
	  border: solid 1px #eee;
	}
	.buttonWrapper {
	  margin-top: 40px;
	}
	  .submitButton {
		width: 70%;
		height: 40px;
		margin: auto;
		display: block;
		color: #fff;
		background-color: #065492;
		border-color: #065492;
		text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.12);
		box-shadow: 0 2px 0 rgba(0, 0, 0, 0.035);
		border-radius: 4px;
		font-size: 14px;
		cursor: pointer;
	  }
	.submitButton:disabled,
	button[disabled] {
	  border: 1px solid #cccccc;
	  background-color: #cccccc;
	  color: #666666;
	}
	
	#loader {
	  position: absolute;
	  z-index: 1;
	  margin: -2px 0 0 10px;
	  border: 4px solid #f3f3f3;
	  border-radius: 50%;
	  border-top: 4px solid #666666;
	  width: 14px;
	  height: 14px;
	  -webkit-animation: spin 2s linear infinite;
	  animation: spin 2s linear infinite;
	}
	
	@keyframes spin {
		0% { transform: rotate(0deg); }
		100% { transform: rotate(360deg); }
	}
	</style>
	{{-- Toaster:: --}}
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body>
	<div class="mainDiv">
	 
		<div class="cardStyle">
		     <center> <img src="{{asset('front/img/logos.png')}}" width="100px"></center>
		  <form action="{{ route ('user.reset_password')}}" method="POST" name="signupForm" id="signupForm">
			@csrf
			<img src="" id="signupLogo"/>
			
			<h2 class="formTitle">
			 Reset Your Password
			</h2>
			<input type="hidden" name="token" value="{{ $token }}">

			<div class="inputDiv">
				<label class="inputLabel" for="confirmPassword">E-Mail Address</label>
				 <input type="text" id="email_address" class="form-control" name="email" required autofocus>
				@if ($errors->has('email'))
					<span class="text-danger">{{ $errors->first('email') }}</span>
				@endif
			  </div>
			
		  <div class="inputDiv">
			<label class="inputLabel" for="password">New Password</label>
			<input type="password" id="password" name="password" required>
		  </div>
			
		  <div class="inputDiv">
			<label class="inputLabel" for="confirmPassword">Confirm Password</label>
			<input type="password" id="confirmPassword" name="password_confirmation" required>
		  </div>
		  
		  <div class="buttonWrapper">
			<button type="submit" id="submitButton" class="submitButton pure-button pure-button-primary">
			  <span>Continue</span>
			</button>
		  </div>
			
		</form>
       
		
		</div>
	  </div>
	  {{-- Toaster:: --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<script>
		toastr.options = {
		"closeButton": true,
		"progressBar": true
	}

	@if(Session::has('message'))
		toastr.success("{{ session('message') }}");
	@endif

	@if(Session::has('error'))
		toastr.error("{{ session('error') }}");
	@endif

	@if(Session::has('info'))
		toastr.info("{{ session('info') }}");
	@endif

	@if(Session::has('warning'))
		toastr.warning("{{ session('warning') }}");
	@endif

	@if ($errors->any())
		@foreach ($errors->all() as $error)
			toastr.error("{{ $error }}");
		@endforeach
	@endif
</script>
</body>
</html>