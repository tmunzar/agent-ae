<!doctype html>

<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>
	Agent AE
	</title>
	<meta name="description" content="Enekon" />
	<meta name="keywords" content="responsive, mobile, grid, layout, system, framework, fluid, web design, design" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<link rel="shortcut icon" href="favicon.png" />
	<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<link rel="stylesheet" href="css/normalize.css" />
	<link rel="stylesheet" href="css/fontello.css">
  	<link rel="stylesheet" href="css/animation.css">
  <!--[if IE 7]>
    <link rel="stylesheet" href="css/fontello-ie7.css">
  <![endif]-->
	<link rel="stylesheet" href="css/style.css" />
</head>
<body>
	<div id="header">
		<div class="wrapper">
			<div class="logo">
				<a href="/">
					<img src="img/logo.png" />
				</a>
			</div>
			<nav>
				<a href="#" class="active" >About</a>
				<a href="#">FAQ</a>
				<?php if (!(Sentry::check())) { ?>
				<a href="#" class="toggle-login"><i class="icon-key"></i>Login</a>
				<a href="<?php echo url('/register') ?>"><i class="icon-user"></i>Register</a>
				<?php } else { ?>
				<a href="<?php echo url('/logout') ?>" class="toggle-login">Logout</a>
				<?php } ?>
			</nav>
		</div>
	</div>
	<div id="top-drop" class="login-form">
		<div class="wrapper">
			<div class="sub-block-50-left">
			{{ Form::open(array('route' => 'sessions.store', 'class'=>'display-inline')) }}

				<div class="display-inline-block">
		            <div class="form-inputs {{ ($errors->has('email')) ? 'has-error' : '' }}">
		                {{ Form::text('email', null, array('class' => 'form-control', 'placeholder' => 'Email', 'autofocus')) }}
		                {{ ($errors->has('email') ? $errors->first('email') : '') }}
		            </div>
		            <div class="form-inputs {{ ($errors->has('password')) ? 'has-error' : '' }}">
		                {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password'))}}
		                {{ ($errors->has('password') ?  $errors->first('password') : '') }}
		            </div>
	            </div>
	            <div class="float-right">
		            <label class="checkbox">
		                {{ Form::checkbox('rememberMe', 'rememberMe') }} Remember me
		            </label>
		            <div class="form-actions">
		            {{ Form::submit('Login', array('class' => 'btn btn-primary'))}}
		            </div>
	            </div>
	            
	        {{ Form::close() }}
	        </div>
	        <div class="sub-block-40-right">
	        	<h1>Not a memeber yet?</h1>
	        	<p>
	        		<?php echo link_to('/register', 'Register') ?> to broadcast your own cards, contact other agents, subscribe to specific location streams, and receive paertinent email updates
	        	</p>
	        </div>
        </div>
	</div>
	@section('pre-container')

	@show
	
	<div id="container">
		<div class="wrapper">
			@yield('content')
		</div>
	</div>
	
	<div id="pre-footer">
		<div class="wrapper">
		@section('pre-footer')
			@show
		</div>
	</div>
	<div id="footer">
		<div class="wrapper">
		</div>
	</div>
	<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/swipe.js"></script>
	<script src="js/script.js"></script>
</body>
</html>