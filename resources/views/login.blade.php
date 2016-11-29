@extends('layout.app')

@section('title', 'Login')

@section('content') 

<!-- Inloggen -->	
<div class="section no-pad-bot" id="index-banner">
	<div class="container">
		<div class="row center">
  			<br><br>
  			<h4 class="header center black-text">Inloggen</h4>
  		</div>
	</div>
</div>
<div class="container">
<div id="loginform" class="row">
	<form class="col s12" action="" method="POST">
		<div class="row">
			<div class="input-field col s12">
          		<input id="inlognaam" type="email" class="validate">
          		<label for="inlognaam">Email</label>
        	</div>
		</div>
		<div class="row">
        	<div class="input-field col s12">
          		<input id="password" type="password" class="validate">
          		<label for="password">Password</label>
        	</div>
      	</div>
      	<div class="row right">
        	<button class="btn waves-effect waves-light red darken-4" type="submit">Inloggen
    		<i class="material-icons right">send</i>
  			</button>
  		</div>
	</form>
</div>

<!-- Registreren -->
<div class="container">
	<div class="row center">
  		<h4 class="header center black-text">Registreren</h4>
 	</div>
</div>
<div id="loginform" class="row">
	<form class="col s12" action="" method="POST">
		<div class="row">
			<div class="input-field col s6">
     			<input id="first_name" type="text" class="validate">
      			<label for="first_name">Voornaam</label>
    		</div>
			<div class="input-field col s6">
     			<input id="last_name" type="text" class="validate">
      			<label for="last_name">Achternaam</label>
    		</div>
    	</div>
    	<div class="row">
        	<div class="input-field col s12">
          		<input id="email" type="email" class="validate">
          		<label for="email">Email</label>
        	</div>
      	</div>
      	<div class="row">
      		<div class="input-field col s12">
          	<input id="password" type="password" class="validate">
          	<label for="password">Password</label>
        	</div>
      	</div>
      	<div class="row right">
        	<button class="btn waves-effect waves-light red darken-4" onclick="test();" type="submit">Registreren
    		<i class="material-icons right">send</i>
  			</button>

  			<script type="text/javascript">
  				function test() {
  					swal("Good job!", "You clicked the button!", "success");
  				}
  			</script>
  		</div>
	</form>
</div>
</div>

@stop