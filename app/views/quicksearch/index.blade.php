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
					<select  ng-model="search.county" name="county" class="form-control">
						<option value="">County</option>
						<option value="ALA">Alachua</option>
						<option value="">Brevard</option>
						<option value="">Broward Polk</option>
						<option value="">Lake</option>
						<option value="">Volusia</option>
						<option value="">Miami-Dade</option>
						<option value="ORA">Orange</option>
						<option value="">Osceola</option>
						<option value="">Palm Beach</option>
						<option value="">Seminole</option>
					</select>
				</div>
				<input type="text" ng-change="query(search)" ng-model="search.first" class="quicksearch-input form-control" placeholder="First Name">
				<input type="text" ng-change="query(search)" ng-model="search.last" class="quicksearch-input form-control" placeholder="Last Name">
				<input type="text" ng-change="query(search)" ng-model="search.street" class="quicksearch-input form-control" placeholder="Street">
				<input type="text" ng-change="query(search)" ng-model="search.city" class="quicksearch-input form-control" placeholder="City Name">
				<input type="text" ng-change="query(search)" ng-model="search.zip" class="quicksearch-input form-control" placeholder="Zip Name">
				<input type="text" ng-change="query(search)" ng-model="search.voter_id" class="quicksearch-input form-control" placeholder="Voter ID">
				<input type="text" ng-change="query(search)" ng-model="search.birthday" class="quicksearch-input form-control" placeholder="Birthday">
			</form>
		</div>

		<div class="col-md-9">
			<div ng-show="voters.length" >
				<div class="row" ng-repeat="voter in voters">
					<div class="col-sm-4">@{{ voter.voter_id }}  @{{ voter.last | name_cap}}, @{{ voter.first }} @{{ voter.middle }}</div>
					<div class="col-sm-5">@{{ voter.street }}, @{{ voter.city }} @{{ voter.zip }}</div>
					<div class="col-sm-3">@{{ voter.birthday }}</div>
				</div>
			</div>
			<div ng-show="!voters.length"><h3>No Results Found</h3></div>
		</div>
	</div>

</div>

@stop