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
						<option value='ALA_20150107'>Alachua</option>
						<option value='BAK_20150107'>Baker</option>
						<option value='BAY_20150107'>Bay</option>
						<option value='BRA_20150107'>Bradford</option>
						<option value='BRE_20150107'>Brevard</option>
						<option value='BRO_20150107'>Broward</option>
						<option value='CAL_20150107'>Calhoun</option>
						<option value='CHA_20150107'>Charlotte</option>
						<option value='CIT_20150107'>Citrus</option>
						<option value='CLA_20150107'>Clay</option>
						<option value='CLL_20150107'>Collier</option>
						<option value='CLM_20150107'>Columbia</option>
						<option value='DAD_20150107'>Miami-Dade</option>
						<option value='DES_20150107'>Desoto</option>
						<option value='DIX_20150107'>Dixie</option>
						<option value='DUV_20150107'>Duval</option>
						<option value='ESC_20150107'>Escambia</option>
						<option value='FLA_20150107'>Flagler</option>
						<option value='FRA_20150107'>Franklin</option>
						<option value='GAD_20150107'>Gadsden</option>
						<option value='GIL_20150107'>Gilchrist</option>
						<option value='GLA_20150107'>Glades</option>
						<option value='GUL_20150107'>Gulf</option>
						<option value='HAM_20150107'>Hamilton</option>
						<option value='HAR_20150107'>Hardee</option>
						<option value='HEN_20150107'>Hendry</option>
						<option value='HER_20150107'>Hernando</option>
						<option value='HIG_20150107'>Highlands</option>
						<option value='HIL_20150107'>Hillsborough</option>
						<option value='HOL_20150107'>Holmes</option>
						<option value='IND_20150107'>Indian River</option>
						<option value='JAC_20150107'>Jackson</option>
						<option value='JEF_20150107'>Jefferson</option>
						<option value='LAF_20150107'>Lafayette</option>
						<option value='LAK_20150107'>Lake</option>
						<option value='LEE_20150107'>Lee</option>
						<option value='LEO_20150107'>Leon</option>
						<option value='LEV_20150107'>Levy</option>
						<option value='LIB_20150107'>Liberty</option>
						<option value='MAD_20150107'>Madison</option>
						<option value='MAN_20150107'>Manatee</option>
						<option value='MRN_20150107'>Marion</option>
						<option value='MRT_20150107'>Martin</option>
						<option value='MON_20150107'>Monroe</option>
						<option value='NAS_20150107'>Nassau</option>
						<option value='OKA_20150107'>Okaloosa</option>
						<option value='OKE_20150107'>Okeechobee</option>
						<option value='ORA_20150107'>Orange</option>
						<option value='OSC_20150107'>Osceola</option>
						<option value='PAL_20150107'>Palm Beach</option>
						<option value='PAS_20150107'>Pasco</option>
						<option value='PIN_20150107'>Pinellas</option>
						<option value='POL_20150107'>Polk</option>
						<option value='PUT_20150107'>Putnam</option>
						<option value='SAN_20150107'>Santa Rosa</option>
						<option value='SAR_20150107'>Sarasota</option>
						<option value='SEM_20150107'>Seminole</option>
						<option value='STJ_20150107'>St. Johns</option>
						<option value='STL_20150107'>St. Lucie</option>
						<option value='SUM_20150107'>Sumter</option>
						<option value='SUW_20150107'>Suwannee</option>
						<option value='TAY_20150107'>Taylor</option>
						<option value='UNI_20150107'>Union</option>
						<option value='VOL_20150107'>Volusia</option>
						<option value='WAK_20150107'>Wakulla</option>
						<option value='WAL_20150107'>Walton</option>
						<option value='WAS_20150107'>Washington</option>

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