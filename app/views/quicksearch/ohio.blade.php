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

						<option value="oh_adams">adams</option>
						<option value="oh_allen">allen</option>
						<option value="oh_ashland">ashland</option>
						<option value="oh_ashtabula">ashtabula</option>
						<option value="oh_athens">athens</option>
						<option value="oh_auglaize">auglaize</option>
						<option value="oh_belmont">belmont</option>
						<option value="oh_brown">brown</option>
						<option value="oh_butler">butler</option>
						<option value="oh_carroll">carroll</option>
						<option value="oh_champaign">champaign</option>
						<option value="oh_clark">clark</option>
						<option value="oh_clermont">clermont</option>
						<option value="oh_clinton">clinton</option>
						<option value="oh_columbiana">columbiana</option>
						<option value="oh_coshocton">coshocton</option>
						<option value="oh_crawford">crawford</option>
						<option value="oh_cuyahoga">cuyahoga</option>
						<option value="oh_darke">darke</option>
						<option value="oh_defiance">defiance</option>
						<option value="oh_delaware">delaware</option>
						<option value="oh_erie">erie</option>
						<option value="oh_fairfield">fairfield</option>
						<option value="oh_fayette">fayette</option>
						<option value="oh_franklin">franklin</option>
						<option value="oh_fulton">fulton</option>
						<option value="oh_gallia">gallia</option>
						<option value="oh_geauga">geauga</option>
						<option value="oh_greene">greene</option>
						<option value="oh_guernsey">guernsey</option>
						<option value="oh_hamilton">hamilton</option>
						<option value="oh_hancock">hancock</option>
						<option value="oh_hardin">hardin</option>
						<option value="oh_harrison">harrison</option>
						<option value="oh_henry">henry</option>
						<option value="oh_highland">highland</option>
						<option value="oh_hocking">hocking</option>
						<option value="oh_holmes">holmes</option>
						<option value="oh_huron">huron</option>
						<option value="oh_jackson">jackson</option>
						<option value="oh_jefferson">jefferson</option>
						<option value="oh_knox">knox</option>
						<option value="oh_lake">lake</option>
						<option value="oh_lawrence">lawrence</option>
						<option value="oh_licking">licking</option>
						<option value="oh_logan">logan</option>
						<option value="oh_lorain">lorain</option>
						<option value="oh_lucas">lucas</option>
						<option value="oh_madison">madison</option>
						<option value="oh_mahoning">mahoning</option>
						<option value="oh_marion">marion</option>
						<option value="oh_medina">medina</option>
						<option value="oh_meigs">meigs</option>
						<option value="oh_mercer">mercer</option>
						<option value="oh_miami">miami</option>
						<option value="oh_monroe">monroe</option>
						<option value="oh_montgomery">montgomery</option>
						<option value="oh_morgan">morgan</option>
						<option value="oh_morrow">morrow</option>
						<option value="oh_muskingum">muskingum</option>
						<option value="oh_noble">noble</option>
						<option value="oh_ottawa">ottawa</option>
						<option value="oh_paulding">paulding</option>
						<option value="oh_perry">perry</option>
						<option value="oh_pickaway">pickaway</option>
						<option value="oh_pike">pike</option>
						<option value="oh_portage">portage</option>
						<option value="oh_preble">preble</option>
						<option value="oh_putnam">putnam</option>
						<option value="oh_richland">richland</option>
						<option value="oh_ross">ross</option>
						<option value="oh_sandusky">sandusky</option>
						<option value="oh_scioto">scioto</option>
						<option value="oh_seneca">seneca</option>
						<option value="oh_shelby">shelby</option>
						<option value="oh_stark">stark</option>
						<option value="oh_summit">summit</option>
						<option value="oh_trumbull">trumbull</option>
						<option value="oh_tuscarawas">tuscarawas</option>
						<option value="oh_union">union</option>
						<option value="oh_vanwert">vanwert</option>
						<option value="oh_vinton">vinton</option>
						<option value="oh_warren">warren</option>
						<option value="oh_washington">washington</option>
						<option value="oh_wayne">wayne</option>
						<option value="oh_williams">williams</option>
						<option value="oh_wood">wood</option>
						<option value="oh_wyandot">wyandot</option>

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
						placeholder="Birthday (mm/dd/yyyy) ctrl+b">
			</form>
			<div id="spinner"><i class="fa fa-spinner fa-spin fa-5x" style="color:blue"></i></div>
		</div>

		<div class="col-md-9">
			<div ng-show="voters.length" >
				<div class="row voter-row" ng-repeat="voter in voters">
					<div class="col-sm-4">
						@{{ voter.f2 }}
						@{{ voter.f3 | name_cap}},
						@{{ voter.f5  | name_cap}}
						@{{ voter.f6  | name_cap}}
					</div>
					<div class="col-sm-5">@{{ voter.f8 }} @{{ voter.f9 }}, @{{ voter.f10 | name_cap }} @{{ voter.f12 }}</div>
					<div class="col-sm-3">@{{ voter.f22 }}</div>
				</div>
			</div>
			<div ng-show="!voters.length"><h3>No Results Found</h3></div>
		</div>
	</div>

</div>

@stop