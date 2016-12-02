@extends('layout.app')

@section('title', 'Begeleider')

@section('intro')
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
    	<div class="row center">
      		<br>
      			<h4 class="header center black-text">Begeleider</h4>
      		<br>
    	</div>
    </div>
  </div>
@stop

@section('content')
<div class="container">
	<div class="row">
		<div class="col s12">
			<div class="row">
				<div class="input-field">
          			<input id="search" type="search" onkeyup="searchFunction()" placeholder="Zoek naar namen.." required>
          			<label for="search"><i class="material-icons">search</i></label>
          			<i class="material-icons">close</i>
        		</div>
        	</div>
        </div>
	</div>

	<table id="myTable" class="bordered highlight centered">
		<thead>
			<tr>
				<th>Volledige naam</th>
				<th>Email</th>
				<th>Open</th>
			</tr>
		</thead>

		<tbody>
			<tr>
				<td>Furkan Demirci</td>
				<td>furkan.demirci@live.nl</td>
				<td><a class="waves-effect waves-circle waves-light btn-floating teal darken-1 modal-trigger" href="#modal"><i class="material-icons">toc</i></a></td>
			</tr>
			<tr>
				<td>Yaime van der Vleuten</td>
				<td>yaimevdv@hotmail.com</td>
				<td><a class="waves-effect waves-circle waves-light btn-floating teal darken-1 modal-trigger" href="#modal"><i class="material-icons">toc</i></a></td>
			</tr>
			<tr>
				<td>Davey Cornelissen</td>
				<td>d.cornilissen8@gmail.com</td>
				<td><a class="waves-effect waves-circle waves-light btn-floating teal darken-1 modal-trigger" href="#modal"><i class="material-icons">toc</i></a></td>
			</tr>
			<tr>
				<td>Yessin Ajouaou</td>
				<td>yessin1996@hotmail.com</td>
				<td><a class="waves-effect waves-circle waves-light btn-floating teal darken-1 modal-trigger" href="#modal"><i class="material-icons">toc</i></a></td>
			</tr>
		</tbody>
	</table>	
</div>
<br><br>

	<!-- Modal Structure -->
<div id="modal" class="modal">
	<div class="modal-content">
		<div class="row center">
			<h4>Voornaam Achternaam</h4>
			<p>Gegevens</p>
		</div>
		<div class="row">
			<div class="col s6">
				<blockquote>
      				Email
    			</blockquote>
			</div>
			<div class="col s6">

			</div>
		</div>
	</div>
	<div class="modal-footer">
		<div class="fixed-action-btn horizontal">
			<a class="waves-effect waves-light btn-floating btn-large teal darken-1">
				<i class="large material-icons">mode_edit</i>
			</a>
			<ul>
				<li><a class="waves-effect waves-light btn-floating green"><i class="material-icons">subject</i></a></li>
				<li><a class="waves-effect waves-light btn-floating blue"><i class="material-icons">email</i></a></li>
			</ul>
		</div>
	</div>
</div>

	<!-- JavaScript en Jquery -->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript">
function searchFunction() {
	var input, filter, table, tr, td, i;
	input = document.getElementById("search");
		filter = input.value.toUpperCase();
		table = document.getElementById("myTable");
		tr = table.getElementsByTagName("tr");

		for (i = 0; i < tr.length; i++) {
		td = tr[i].getElementsByTagName("td")[0];
		if (td) {
				if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
				tr[i].style.display = "";
				} else {
				tr[i].style.display = "none";
				}
		} 
	}
}

 $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
  });

</script>

@stop