<!-- To test the 2-step method -->
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);

		body {
			margin:0;
			font-family:'Lato', sans-serif;
			text-align:center;
			color: #999;
		}

		.welcome {
			width: 300px;
			height: 200px;
			position: absolute;
			left: 50%;
			top: 50%;
			margin-left: -150px;
			margin-top: -100px;
		}

		a, a:visited {
			text-decoration:none;
		}

		h1 {
			font-size: 32px;
			margin: 16px 0 0 0;
		}
	</style>
</head>
<body>
		{{ Form::open(array('id'=>'form')) }}
			{{ Form::label('username', 'Username') }}
			{{ Form::text('username', null, ['placeholder' => 'Username', 'class' => 'form-control']) }}
			{{ Form::label('password', 'Password') }}
			{{ Form::password('password', ['placeholder' => 'Password', 'class' => 'form-control']) }}
			{{ HTML::link('recoverpassword', 'Reset Password!') }}
				<center>
					<button name='login' value='Login' id='login' class='btn btn-primary' onclick='linker'> Login </button>
					<button name='register' value='Register' id='register' class='btn btn-default' onclick='linker'> Register </b>
				</center>
		{{ Form::close() }}
		
		
</body>
</html>