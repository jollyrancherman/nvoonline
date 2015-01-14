@extends('layout.master')

@section('pageTitle') 
Reports - Main
@stop

@section('top')
<style>

	.report-percent{
		font-size: 5vw;
		color: #CCCCCC;
	}
@media only screen and (max-width: 992px) {

	.report-percent{
		font-size: 20vw;
		color: #CCCCCC;
	}

}	

</style>
@stop

@section('page')

<h2>Foward Thinking Report</h2>
	<ul>
		<li>Access data related to Forward Thinking</li>
		<li>Show last 7 days of journal signed off to ensure we are meeting programs/clients needs. </li>
		<li>Show how many journals staff has signed off for past 7 days and last 30 days</li>
	</ul>
	

<!-- 	<div class="row">
		<div class="col-xs-12">
			<h3>Forward Thinking</h3>
			<div class="row">
				<div class="col-xs-12">				
					<div class="col-md-1">
						1
					</div>
					<div class="col-md-1">
						1
					</div>
					<div class="col-md-1">
						1
					</div>
					<div class="col-md-1">
						1
					</div>
					<div class="col-md-1">
						1
					</div>
					<div class="col-md-1">
						1
					</div>
					<div class="col-md-1">
						1
					</div>
					<div class="col-md-5 report-percent text-center">103%</div>
					
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12">
			<h3></h3>
			<div class="row">
				<div class="col-xs-12">
					
					
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12">
			<h3></h3>
			<div class="row">
				<div class="col-xs-12">
					
					
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12">
			<h3></h3>
			<div class="row">
				<div class="col-xs-12">
					
					
				</div>
			</div>
		</div>
	</div> -->


@stop

@section('bot')

@stop