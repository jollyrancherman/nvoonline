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
					<select name="county" class="form-control">
						<option>County</option>
						<option>Miami-Dade</option>
						<option>Option 3</option>
						<option>Option 4</option>
						<option>Option 5</option>
					</select>
				</div>
				<input type="text" ng-change="query(search)" ng-model="search.first" class="quicksearch-input form-control" placeholder="First Name">
				<input type="text" ng-change="query(search)" ng-model="search.last" class="quicksearch-input form-control" placeholder="Last Name">
				<input type="text" ng-change="query(search)" ng-model="search.street" class="quicksearch-input form-control" placeholder="Street">
				<input type="text" ng-change="query(search)" ng-model="search.city" class="quicksearch-input form-control" placeholder="City Name">
				<input type="text" ng-change="query(search)" ng-model="search.zip" class="quicksearch-input form-control" placeholder="Zip Name">
				<input type="text" ng-change="query(search)" ng-model="search.birthday" class="quicksearch-input form-control" placeholder="Birthday Name">
			</form>
		</div>

	</div>

</div>

@stop