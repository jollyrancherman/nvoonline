<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Metronic | Login Options - Login Form 4</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="/assets/login.min.css" rel="stylesheet" type="text/css" />
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="login">
<!-- BEGIN LOGO -->
<div class="logo">
	<h3 class="form-title" style="color: #FFF;">NVO Online</h3>
</div>
<!-- END LOGO -->
<!-- MESSAGE TO USER -->
<div class="">
</div>
<!-- END MESSAGE TO USER -->

<!-- BEGIN LOGIN -->
<div class="content">
	<!-- BEGIN LOGIN FORM -->
  {{ Form::open(['route' => 'login']) }}

	@if(Session::has('message'))
	<div class="row">
		<div class="col-xs-12">
			<h4>{{ Session::get('message') }}</h4>
			<p>{{Session::get('message2') }}</p>
		</div>
	</div>
	@endif

  <!-- Username/Email -->
  <div class="form-group" style="margin-bottom: 10px;">
    <label class="control-label visible-ie8 visible-ie9">Username</label>
    <div class="input-icon">
			<i class="fa fa-user"></i>
      {{ Form::text('email', null, ['class' => 'form-control placeholder-no-fix', 'placeholder' => 'Email']) }}
      {{ $errors->first('email', '<p class="error-msg">:message</p>'); }}
  	</div>
	</div>

  <!-- PASSWORD -->
  <div class="form-group" style="margin-bottom: 10px;">
		<label class="control-label visible-ie8 visible-ie9">Password</label>
		<div class="input-icon">
			<i class="fa fa-lock"></i>
    {{ Form::password('password', ['class' => 'form-control placeholder-no-fix', 'placeholder' => 'Password', 'autocomplete' => 'off']) }}
    {{ $errors->first('password', '<p class="error-msg">:message</p>'); }}
  	</div>
	</div>


  <!-- SUBMIT -->
  {{ Form::submit('login', ['class' => 'btn btn-primary btn-block']) }}

  {{ Form::close() }}
	<!-- END LOGIN FORM -->
</div>
<!-- END LOGIN -->
<!-- BEGIN COPYRIGHT -->
<div class="copyright">
	 {{-- Carbon::now()->format('Y') --}} &copy; directdemocracy.com
</div>
<!-- END COPYRIGHT -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<script src="/assets/login.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {
  Metronic.init(); // init metronic core components
	Layout.init(); // init current layout
  Login.init();
       // init background slide images
       $.backstretch([
        "/img/bg/1.jpg",
        "/img/bg/2.jpg",
        "/img/bg/3.jpg",
        "/img/bg/4.jpg"
        ], {
          fade: 1000,
          duration: 8000
    }
    );
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>