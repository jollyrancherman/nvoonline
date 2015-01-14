@extends('layout.master')

@section('pageTitle')
{{ $resident->resident_id }} {{ $resident->last_name }}, {{ $resident->first_name }}
@stop

@section('page')
<div class="row"  ng-init="resident_id=('{{ $resident->resident_id }}')">
	<div class="col-md-7 clearfix">
		<div class="col-xs-2">
			<div class="row align-center">
				<img src="/img/no-image.jpg" class="img-responsive" alt="">
			</div>
		</div>
		<div class="col-xs-10 ">
			<div class="{{ $resident->stage }} clearfix" style="padding: 10px 5px;">
				<span style="font-size: 1.6em;">{{ $resident->resident_id }} {{ $resident->last_name }}, {{ $resident->first_name }}</span>
			</div>
			<div class="row">
				<div class="col-xs-5 bold">Medications:</div>
				<div class="col-xs-7">None</div>
			</div>
			<div class="row">
				<div class="col-xs-5 bold">Allergies:</div>
				<div class="col-xs-7">None</div>
			</div>
			<div class="row">
				<div class="col-xs-5 bold">SSN:</div>
				<div class="col-xs-7">123-23-1234</div>
			</div>
			<div class="row">
				<div class="col-xs-5 bold">Date of Birth:</div>
				<div class="col-xs-7">{{ $resident->dob }}</div>
			</div>
			
			<hr />

			<div class="row">
				<div class="col-xs-5 bold">Stage:</div>
				<div class="col-xs-7">{{ $resident->stage }}</div>
			</div>
			<div class="row">
				<div class="col-xs-5 bold">Case Manager:</div>
				<div class="col-xs-7">Toles</div>
			</div>
			<div class="row">
				<div class="col-xs-5 bold">Mentor:</div>
				<div class="col-xs-7">Sullivan</div>
			</div>
			
			<!-- Treatment Section -->
			<div ng-controller="JournalCtrl">
				@include('resident._treatment')
			</div>

		</div>
	</div>
	<div class="col-md-5 clearfix">
		<div class="row">
			<div class="col-xs-12">
				@include('resident._activity')
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				
			</div>
		</div>
	</div>
</div>
@stop