@extends('layout.app')

@section('title', 'Student')

@section('intro')
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
    	<div class="row center">
      		<br>
      			<h4 class="header center black-text">Student</h4>
            <h6 class="header center black-text">Vul hier je preferencies in, aan de hand van deze gegevens zal er een afspraak gemaakt worden.</h6>
    	</div>
    </div>
  </div>
@stop

@section('content')
<div class="container">
<form action="" method="POST">
<ul class="collapsible" data-collapsible="accordion">
    <li>
      <div class="collapsible-header active"><i class="material-icons">thumb_up</i>Wat je leuk vind</div>
      <div class="collapsible-body">
        <div class="container">
          <div class="row">
            <div class="input-field col s12">
              <textarea id="textarea1" class="materialize-textarea"></textarea>
              <label for="textarea1">Vul in</label>
            </div>
          </div>
        </div>
      </div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">thumb_down</i>Wat je niet leuk vind</div>
      <div class="collapsible-body">
        <div class="container">
          <div class="row">
            <div class="input-field col s12">
              <textarea id="textarea1" class="materialize-textarea"></textarea>
              <label for="textarea1">Vul in</label>
            </div>
          </div>
        </div>
      </div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">trending_up</i>Sterke punten</div>
      <div class="collapsible-body">        
        <div class="container">
          <div class="row">
            <div class="input-field col s12">
              <textarea id="textarea1" class="materialize-textarea"></textarea>
              <label for="textarea1">Vul in</label>
            </div>
          </div>
        </div>
      </div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">trending_down</i>Zwakke punten</div>
      <div class="collapsible-body">        
        <div class="container">
          <div class="row">
            <div class="input-field col s12">
              <textarea id="textarea1" class="materialize-textarea"></textarea>
              <label for="textarea1">Vul in</label>
            </div>
          </div>
        </div>
      </div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">whatshot</i>Sterke punten volgens anderen</div>
      <div class="collapsible-body">         
        <div class="container">
          <div class="row">
            <div class="input-field col s12">
              <textarea id="textarea1" class="materialize-textarea"></textarea>
              <label for="textarea1">Vul in</label>
            </div>
          </div>
        </div>
      </div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">invert_colors_off</i>Zwakke punten volgens anderen</div>
      <div class="collapsible-body">        
        <div class="container">
          <div class="row">
            <div class="input-field col s12">
              <textarea id="textarea1" class="materialize-textarea"></textarea>
              <label for="textarea1">Vul in</label>
            </div>
          </div>
        </div>
      </div>
    </li>
  </ul>
  <br>
  <div class="row center">
  <button class="btn waves-effect waves-light teal darken-1" type="submit" name="action">Opslaan
    <i class="material-icons right">send</i>
  </button>
  </div>
</form>
</div>
  <br>


@stop