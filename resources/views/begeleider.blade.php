@extends('layout.app')

@section('title', 'Begeleider')

@section('intro')
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
    	<div class="row center">
      		<br><br>
      			<h4 class="header center black-text">Begeleider</h4>
      		<br><br>
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
			</tr>
		</thead>

		<tbody>
			<tr>
				<td>Furkan Demirci</td>
				<td>furkan.demirci@live.nl</td>
			</tr>
			<tr>
				<td>Yaime van der Vleuten</td>
				<td>yaimevdv@hotmail.com</td>
			</tr>
			<tr>
				<td>Davey Cornelissen</td>
				<td>d.cornilissen8@gmail.com</td>
			</tr>
			<tr>
				<td>Yessin Ajouaou</td>
				<td>yessin1996@hotmail.com</td>
			</tr>
		</tbody>
	</table>	
</div>

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
</script>

@stop