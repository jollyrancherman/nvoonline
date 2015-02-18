@extends('layout.master')

@section('pageTitle')
NVO Online - Quick Search
@stop

@section('top')
<style>
	.user{
		padding: 3px 0;
	}

	.user:nth-child(odd){
		background-color: #EEEEEE;
	}

</style>

@stop

@section('page')
<div class="row" ng-controller="UserCtrl">
	<div class="col-xs-12">

	</div>
	<div class="col-xs-12" style="margin-bottom: 5px;">
		<button class="btn btn-primary">Add User</button>
	</div>

	<div class="col-sm-12 user" ng-repeat="user in users">

		<div class="col-sm-6">
			<i class="fa fa-user"></i> @{{ user.last_name }}, @{{ user.first_name }}
		</div>

		<div class="col-sm-6">

			<button class="btn btn-xs blue">edit</button>
			<button class="btn btn-xs green">active</button>
			<button class="btn btn-xs">delete</button>

		</div>


	</div>

</div>

@stop