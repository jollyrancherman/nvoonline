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
						<option value='ALA_20150623'>Alachua</option>
						<option value='BAK_20150623'>Baker</option>
						<option value='BAY_20150623'>Bay</option>
						<option value='BRA_20150623'>Bradford</option>
						<option value='BRE_20150623'>Brevard</option>
						<option value='BRO_20150623'>Broward</option>
						<option value='CAL_20150623'>Calhoun</option>
						<option value='CHA_20150623'>Charlotte</option>
						<option value='CIT_20150623'>Citrus</option>
						<option value='CLA_20150623'>Clay</option>
						<option value='CLL_20150623'>Collier</option>
						<option value='CLM_20150623'>Columbia</option>
						<option value='DAD_20150623'>Miami-Dade</option>
						<option value='DES_20150623'>Desoto</option>
						<option value='DIX_20150623'>Dixie</option>
						<option value='DUV_20150623'>Duval</option>
						<option value='ESC_20150623'>Escambia</option>
						<option value='FLA_20150623'>Flagler</option>
						<option value='FRA_20150623'>Franklin</option>
						<option value='GAD_20150623'>Gadsden</option>
						<option value='GIL_20150623'>Gilchrist</option>
						<option value='GLA_20150623'>Glades</option>
						<option value='GUL_20150623'>Gulf</option>
						<option value='HAM_20150623'>Hamilton</option>
						<option value='HAR_20150623'>Hardee</option>
						<option value='HEN_20150623'>Hendry</option>
						<option value='HER_20150623'>Hernando</option>
						<option value='HIG_20150623'>Highlands</option>
						<option value='HIL_20150623'>Hillsborough</option>
						<option value='HOL_20150623'>Holmes</option>
						<option value='IND_20150623'>Indian River</option>
						<option value='JAC_20150623'>Jackson</option>
						<option value='JEF_20150623'>Jefferson</option>
						<option value='LAF_20150623'>Lafayette</option>
						<option value='LAK_20150623'>Lake</option>
						<option value='LEE_20150623'>Lee</option>
						<option value='LEO_20150623'>Leon</option>
						<option value='LEV_20150623'>Levy</option>
						<option value='LIB_20150623'>Liberty</option>
						<option value='MAD_20150623'>Madison</option>
						<option value='MAN_20150623'>Manatee</option>
						<option value='MRN_20150623'>Marion</option>
						<option value='MRT_20150623'>Martin</option>
						<option value='MON_20150623'>Monroe</option>
						<option value='NAS_20150623'>Nassau</option>
						<option value='OKA_20150623'>Okaloosa</option>
						<option value='OKE_20150623'>Okeechobee</option>
						<option value='ORA_20150623'>Orange</option>
						<option value='OSC_20150623'>Osceola</option>
						<option value='PAL_20150623'>Palm Beach</option>
						<option value='PAS_20150623'>Pasco</option>
						<option value='PIN_20150623'>Pinellas</option>
						<option value='POL_20150623'>Polk</option>
						<option value='PUT_20150623'>Putnam</option>
						<option value='SAN_20150623'>Santa Rosa</option>
						<option value='SAR_20150623'>Sarasota</option>
						<option value='SEM_20150623'>Seminole</option>
						<option value='STJ_20150623'>St. Johns</option>
						<option value='STL_20150623'>St. Lucie</option>
						<option value='SUM_20150623'>Sumter</option>
						<option value='SUW_20150623'>Suwannee</option>
						<option value='TAY_20150623'>Taylor</option>
						<option value='UNI_20150623'>Union</option>
						<option value='VOL_20150623'>Volusia</option>
						<option value='WAK_20150623'>Wakulla</option>
						<option value='WAL_20150623'>Walton</option>
						<option value='WAS_20150623'>Washington</option>

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