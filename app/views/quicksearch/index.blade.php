@extends('layout.master')

@section('pageTitle')
NVO Online - Quick Search
@stop

@section('top')
<style>
	.quicksearch-input{
		margin-bottom: 5px;
	}
	.voter-row:nth-child(even) {
		background: #EEEEEE ;
	}
</style>
@stop

@section('page')
<div class="row" ng-controller="QuickSearchCtrl">

	<div class="col-xs-12">

		<div class="col-md-3">
			<form class="sidebar-search">
				<div class="form-group">
					<select id="county"  ng-change="query(search)" ng-model="search.county" name="county" class="form-control">
						<option value="">County ctrl+o</option>
						<option value='ALA'>Alachua</option>
						<option value='BAK'>Baker</option>
						<option value='BAY'>Bay</option>
						<option value='BRA'>Bradford</option>
						<option value='BRE'>Brevard</option>
						<option value='BRO'>Broward</option>
						<option value='CAL'>Calhoun</option>
						<option value='CHA'>Charlotte</option>
						<option value='CIT'>Citrus</option>
						<option value='CLA'>Clay</option>
						<option value='CLL'>Collier</option>
						<option value='CLM'>Columbia</option>
						<option value='DAD'>Miami-Dade</option>
						<option value='DES'>Desoto</option>
						<option value='DIX'>Dixie</option>
						<option value='DUV'>Duval</option>
						<option value='ESC'>Escambia</option>
						<option value='FLA'>Flagler</option>
						<option value='FRA'>Franklin</option>
						<option value='GAD'>Gadsden</option>
						<option value='GIL'>Gilchrist</option>
						<option value='GLA'>Glades</option>
						<option value='GUL'>Gulf</option>
						<option value='HAM'>Hamilton</option>
						<option value='HAR'>Hardee</option>
						<option value='HEN'>Hendry</option>
						<option value='HER'>Hernando</option>
						<option value='HIG'>Highlands</option>
						<option value='HIL'>Hillsborough</option>
						<option value='HOL'>Holmes</option>
						<option value='IND'>Indian River</option>
						<option value='JAC'>Jackson</option>
						<option value='JEF'>Jefferson</option>
						<option value='LAF'>Lafayette</option>
						<option value='LAK'>Lake</option>
						<option value='LEE'>Lee</option>
						<option value='LEO'>Leon</option>
						<option value='LEV'>Levy</option>
						<option value='LIB'>Liberty</option>
						<option value='MAD'>Madison</option>
						<option value='MAN'>Manatee</option>
						<option value='MRN'>Marion</option>
						<option value='MRT'>Martin</option>
						<option value='MON'>Monroe</option>
						<option value='NAS'>Nassau</option>
						<option value='OKA'>Okaloosa</option>
						<option value='OKE'>Okeechobee</option>
						<option value='ORA'>Orange</option>
						<option value='OSC'>Osceola</option>
						<option value='PAL'>Palm Beach</option>
						<option value='PAS'>Pasco</option>
						<option value='PIN'>Pinellas</option>
						<option value='POL'>Polk</option>
						<option value='PUT'>Putnam</option>
						<option value='SAN'>Santa Rosa</option>
						<option value='SAR'>Sarasota</option>
						<option value='SEM'>Seminole</option>
						<option value='STJ'>St. Johns</option>
						<option value='STL'>St. Lucie</option>
						<option value='SUM'>Sumter</option>
						<option value='SUW'>Suwannee</option>
						<option value='TAY'>Taylor</option>
						<option value='UNI'>Union</option>
						<option value='VOL'>Volusia</option>
						<option value='WAK'>Wakulla</option>
						<option value='WAL'>Walton</option>
						<option value='WAS'>Washington</option>

					</select>
				</div>
				<input
						id="fname"
						ng-model-options="{debounce: 500}" type="text"
						ng-change="query(search)"
						ng-model="search.first"
						class="quicksearch-input form-control"
						placeholder="First Name  ctrl+f">
				<input
						id="lname"
						ng-model-options="{debounce: 500}" type="text"
						ng-change="query(search)"
						ng-model="search.last"
						class="quicksearch-input form-control"
						placeholder="Last Name  ctrl+l">
				<input
						id="mname"
						ng-model-options="{debounce: 500}" type="text"
						ng-change="query(search)"
						ng-model="search.middle"
						class="quicksearch-input form-control"
						placeholder="Middle Name  ctrl+m">
				<input
						id="street"
						ng-model-options="{debounce: 500}" type="text"
						ng-change="query(search)"
						ng-model="search.street"
						class="quicksearch-input form-control"
						placeholder="Address  ctrl+a">
				<input
						id="city"
						ng-model-options="{debounce: 500}" type="text"
						ng-change="query(search)"
						ng-model="search.city"
						class="quicksearch-input form-control"
						placeholder="City ctrl+c">
				<input
						id="zip"
						ng-model-options="{debounce: 500}" type="text"
						ng-change="query(search)"
						ng-model="search.zip"
						class="quicksearch-input form-control"
						placeholder="Zip  ctrl+z">
				<input
						id="voter"
						ng-model-options="{debounce: 500}" type="text"
						ng-change="query(search)"
						ng-model="search.voter_id"
						class="quicksearch-input form-control"
						placeholder="Voter ID ctrl+v">
				<input
						id="birthday"
						ng-model-options="{debounce: 500}" type="text"
						ng-change="query(search)"
						ng-model="search.birthday"
						class="quicksearch-input form-control"
						placeholder="Birthday (mmddyy) ctrl+b">
			</form>
			<div id="spinner"><i class="fa fa-spinner fa-spin fa-5x" style="color:blue"></i></div>
		</div>

		<div class="col-md-9">
			<div ng-show="voters.length" >
				<div class="row voter-row" ng-repeat="voter in voters">
					<div class="col-sm-4">
						@{{ voter.voter_id }}
						@{{ voter.last | name_cap}},
						@{{ voter.first  | name_cap}}
						@{{ voter.middle  | name_cap}}
					</div>
					<div class="col-sm-5">@{{ voter.street }}, @{{ voter.city | name_cap }} @{{ voter.zip }}</div>
					<div class="col-sm-3">@{{ voter.birthday }}</div>
				</div>
			</div>
			<div ng-show="!voters.length"><h3>No Results Found</h3></div>
		</div>
	</div>

</div>

@stop