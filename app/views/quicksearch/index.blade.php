@extends('layout.master')

@section('pageTitle')
NVO Online - Quick Search
@stop

@section('top')
<style>
	.quicksearch-input{
		margin-bottom: 5px;
	}
</style>
@stop

@section('page')
<div class="row" ng-controller="QuickSearchCtrl">

	<div class="col-xs-12">

		<div class="col-md-3">
			<form class="sidebar-search">
				<div class="form-group">
					<select  ng-change="query(search)" ng-model="search.county" name="county" class="form-control">
						<option value="">County</option>
						<option value="ALA">Alachua</option>
						<option value="BRE">Brevard</option>
						<option value="BRO">Broward Polk</option>
						<option value="LAK">Lake</option>
						<option value="DAD">Miami-Dade</option>
						<option value="ORA">Orange</option>
						<option value="OSC">Osceola</option>
						<option value="PAL">Palm Beach</option>
						<option value="SEM">Seminole</option>
						<option value="VOL">Volusia</option>
					</select>
				</div>
				<input ng-model-options="{debounce: 500}" type="text" ng-change="query(search)" ng-model="search.first" class="quicksearch-input form-control" placeholder="First Name">
				<input ng-model-options="{debounce: 500}" type="text" ng-change="query(search)" ng-model="search.last" class="quicksearch-input form-control" placeholder="Last Name">
				<input ng-model-options="{debounce: 500}" type="text" ng-change="query(search)" ng-model="search.street" class="quicksearch-input form-control" placeholder="Street">
				<input ng-model-options="{debounce: 500}" type="text" ng-change="query(search)" ng-model="search.city" class="quicksearch-input form-control" placeholder="City Name">
				<input ng-model-options="{debounce: 500}" type="text" ng-change="query(search)" ng-model="search.zip" class="quicksearch-input form-control" placeholder="Zip Name">
				<input ng-model-options="{debounce: 500}" type="text" ng-change="query(search)" ng-model="search.voter_id" class="quicksearch-input form-control" placeholder="Voter ID">
				<input ng-model-options="{debounce: 500}" type="text" ng-change="query(search)" ng-model="search.birthday" class="quicksearch-input form-control" placeholder="Birthday">
			</form>
			<div id="spinner"><i class="fa fa-spinner fa-spin fa-5x" style="color:blue"></i></div>
		</div>

		<div class="col-md-9">
			<div ng-show="voters.length" >
				<div class="row" ng-repeat="voter in voters">
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