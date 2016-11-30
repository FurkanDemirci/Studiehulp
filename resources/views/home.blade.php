@extends('layout.app')

@section('title', 'Home')

@section('intro')
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center black-text">Studiehulp Begeleiding</h1>
      <div class="row center">
        <h5 class="header col s12 light"></h5>
      </div>
      <div class="row center">
        <a href="#" id="download-button" class="btn-large waves-effect waves-light teal darken-1">Beginnen!</a>
      </div>
      <br><br>
    </div>
  </div>
@stop

@section('content')
<div class="section">
  <div class="row">
    <div class="col s12 m4">
      <div class="icon-block">
        <h2 class="center light-blue-text"><i class="material-icons">flash_on</i></h2>
        <h5 class="center">Lorem ipsum dolor</h5>

        <p class="light">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam</p>
      </div>
    </div>

    <div class="col s12 m4">
      <div class="icon-block">
        <h2 class="center light-blue-text"><i class="material-icons">group</i></h2>
        <h5 class="center">Lorem ipsum dolor</h5>

        <p class="light">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis.</p>
      </div>
    </div>

    <div class="col s12 m4">
      <div class="icon-block">
        <h2 class="center light-blue-text"><i class="material-icons">settings</i></h2>
        <h5 class="center">Lorem ipsum dolor</h5>

        <p class="light">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec.</p>
      </div>
    </div>
  </div>
</div>
<br><br>
@stop