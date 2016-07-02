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

	.county.name{
		text-transform: capitalize;
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
						<option class="county-name" value="">County ctrl+o</option>

						<option class="county-name" value="oh_adams">Adams</option>
						<option class="county-name" value="oh_allen">Allen</option>
						<option class="county-name" value="oh_ashland">Ashland</option>
						<option class="county-name" value="oh_ashtabula">Ashtabula</option>
						<option class="county-name" value="oh_athens">Athens</option>
						<option class="county-name" value="oh_auglaize">Auglaize</option>
						<option class="county-name" value="oh_belmont">Belmont</option>
						<option class="county-name" value="oh_brown">Brown</option>
						<option class="county-name" value="oh_butler">Butler</option>
						<option class="county-name" value="oh_carroll">Carroll</option>
						<option class="county-name" value="oh_champaign">Champaign</option>
						<option class="county-name" value="oh_clark">Clark</option>
						<option class="county-name" value="oh_clermont">Clermont</option>
						<option class="county-name" value="oh_clinton">Clinton</option>
						<option class="county-name" value="oh_columbiana">Columbiana</option>
						<option class="county-name" value="oh_coshocton">Coshocton</option>
						<option class="county-name" value="oh_crawford">Crawford</option>
						<option class="county-name" value="oh_cuyahoga">Cuyahoga</option>
						<option class="county-name" value="oh_darke">Darke</option>
						<option class="county-name" value="oh_defiance">Defiance</option>
						<option class="county-name" value="oh_delaware">Delaware</option>
						<option class="county-name" value="oh_erie">Erie</option>
						<option class="county-name" value="oh_fairfield">Fairfield</option>
						<option class="county-name" value="oh_fayette">Fayette</option>
						<option class="county-name" value="oh_franklin">Franklin</option>
						<option class="county-name" value="oh_fulton">Fulton</option>
						<option class="county-name" value="oh_gallia">Gallia</option>
						<option class="county-name" value="oh_geauga">Geauga</option>
						<option class="county-name" value="oh_greene">Greene</option>
						<option class="county-name" value="oh_guernsey">Guernsey</option>
						<option class="county-name" value="oh_hamilton">Hamilton</option>
						<option class="county-name" value="oh_hancock">Hancock</option>
						<option class="county-name" value="oh_hardin">Hardin</option>
						<option class="county-name" value="oh_harrison">Harrison</option>
						<option class="county-name" value="oh_henry">Henry</option>
						<option class="county-name" value="oh_highland">Highland</option>
						<option class="county-name" value="oh_hocking">Hocking</option>
						<option class="county-name" value="oh_holmes">Holmes</option>
						<option class="county-name" value="oh_huron">Huron</option>
						<option class="county-name" value="oh_jackson">Jackson</option>
						<option class="county-name" value="oh_jefferson">Jefferson</option>
						<option class="county-name" value="oh_knox">Knox</option>
						<option class="county-name" value="oh_lake">lake</option>
						<option class="county-name" value="oh_lawrence">lawrence</option>
						<option class="county-name" value="oh_loh_icking">licking</option>
						<option class="county-name" value="oh_logan">logan</option>
						<option class="county-name" value="oh_lorain">lorain</option>
						<option class="county-name" value="oh_lucas">lucas</option>
						<option class="county-name" value="oh_madison">madison</option>
						<option class="county-name" value="oh_mahoning">mahoning</option>
						<option class="county-name" value="oh_marion">marion</option>
						<option class="county-name" value="oh_medina">medina</option>
						<option class="county-name" value="oh_meigs">meigs</option>
						<option class="county-name" value="oh_mercer">mercer</option>
						<option class="county-name" value="oh_miami">miami</option>
						<option class="county-name" value="oh_monroe">monroe</option>
						<option class="county-name" value="oh_montgomery">montgomery</option>
						<option class="county-name" value="oh_morgan">morgan</option>
						<option class="county-name" value="oh_morrow">morrow</option>
						<option class="county-name" value="oh_muskingum">muskingum</option>
						<option class="county-name" value="oh_noble">noble</option>
						<option class="county-name" value="oh_ottawa">ottawa</option>
						<option class="county-name" value="oh_paulding">paulding</option>
						<option class="county-name" value="oh_perry">perry</option>
						<option class="county-name" value="oh_pickaway">pickaway</option>
						<option class="county-name" value="oh_pike">pike</option>
						<option class="county-name" value="oh_portage">portage</option>
						<option class="county-name" value="oh_preble">preble</option>
						<option class="county-name" value="oh_putnam">putnam</option>
						<option class="county-name" value="oh_richland">richland</option>
						<option class="county-name" value="oh_ross">ross</option>
						<option class="county-name" value="oh_sandusky">sandusky</option>
						<option class="county-name" value="oh_scioto">scioto</option>
						<option class="county-name" value="oh_seneca">seneca</option>
						<option class="county-name" value="oh_shelby">shelby</option>
						<option class="county-name" value="oh_stark">stark</option>
						<option class="county-name" value="oh_summit">summit</option>
						<option class="county-name" value="oh_trumbull">trumbull</option>
						<option class="county-name" value="oh_tuscarawas">tuscarawas</option>
						<option class="county-name" value="oh_union">union</option>
						<option class="county-name" value="oh_vanwert">vanwert</option>
						<option class="county-name" value="oh_vinton">vinton</option>
						<option class="county-name" value="oh_warren">warren</option>
						<option class="county-name" value="oh_washington">washington</option>
						<option class="county-name" value="oh_wayne">wayne</option>
						<option class="county-name" value="oh_williams">williams</option>
						<option class="county-name" value="oh_wood">wood</option>
						<option class="county-name" value="oh_wyandot">wyandot</option>

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
						@{{ voter.sos_voterid }}
						@{{ voter.last_name | name_cap}},
						@{{ voter.first_name  | name_cap}}
						@{{ voter.middle_name  | name_cap}}
					</div>
					<div class="col-sm-5">@{{ voter.residential_address1 }} @{{ voter.residential_city }}, @{{ voter.residential_state | name_cap }} @{{ voter.residential_zip }}</div>
					<div class="col-sm-3">@{{ voter.date_of_birth }}</div>
				</div>
			</div>
			<div ng-show="!voters.length"><h3>No Results Found</h3></div>
		</div>
	</div>

</div>

@stop