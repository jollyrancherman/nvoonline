@extends('layout.master')

@section('pageTitle')
Treatment - Forward Thinking
@stop

@section('page')
<div class="row" ng-controller="ForwardThinkingCtrl">
	<div class="col-xs-12">

		<h3>Forward Thinking</h3>
	 	<table ng-cloak class="table">
	 		<tr>
				<th>Resident</th>
				<th>ID</th>
				<th>What Got Me Here</th>
				<th>Responsible Behavior</th>
				<th>Individual Change Plan</th>
				<th>Relationships and Communication</th>
				<th>Handling Difficult Feelings</th>
				<th>Victim Awareness</th>
				<th>Family</th>
				<th>Reentry Planning</th>
	 		</tr>
			<tr ng-repeat="(key, resident) in residents">

				<td><a ng-href="/resident/@{{ resident.resident_id }}"> @{{ resident.last_name }}, @{{ resident.first_name }}</a></td>
				<td><a ng-href="/resident/@{{ resident.resident_id }}"> @{{ resident.resident_id }}</a></td>
				<td style="text-align: center;"  ng-class="(resident.treatment.journal_wgmh) ? 'Transition' : ''">
				<label>
					<input ng-click="assignTreatment('journal_wgmh', resident.resident_id, !resident.treatment.journal_wgmh)" class="" type="checkbox" ng-checked="resident.treatment.journal_wgmh">WGMH
				</label>
				</td>

				<td style="text-align: center;"  ng-class="(resident.treatment.journal_behavior) ? 'Transition' : ''">
					<label>
					<input ng-click="assignTreatment('journal_behavior', resident.resident_id, !resident.treatment.journal_behavior)" class="" type="checkbox" ng-checked="resident.treatment.journal_behavior">RB
					</label>
				</td>

				<td style="text-align: center;"  ng-class="(resident.treatment.journal_change) ? 'Transition' : ''">
					<label>
					<input ng-click="assignTreatment('journal_change', resident.resident_id, !resident.treatment.journal_change)" class="" type="checkbox" ng-checked="resident.treatment.journal_change">ICP
					</label>
				</td>

				<td style="text-align: center;"  ng-class="(resident.treatment.journal_relationships) ? 'Transition' : ''">
					<label>
					<input ng-click="assignTreatment('journal_relationships', resident.resident_id, !resident.treatment.journal_relationships)" class="" type="checkbox" ng-checked="resident.treatment.journal_relationships">RC
					</label>
				</td>

				<td style="text-align: center;"  ng-class="(resident.treatment.journal_feelings) ? 'Transition' : ''">
					<label>
					<input ng-click="assignTreatment('journal_feelings', resident.resident_id, !resident.treatment.journal_feelings)" class="" type="checkbox" ng-checked="resident.treatment.journal_feelings">HDF
					</label>
				</td>

				<td style="text-align: center;" ng-class="(resident.treatment.journal_victim) ? 'Transition' : ''">
					<label >
					<input ng-click="assignTreatment('journal_victim', resident.resident_id, !resident.treatment.journal_victim)" class="" type="checkbox" ng-checked="resident.treatment.journal_victim">VA
					</label>
				</td>

				<td style="text-align: center;" ng-class="(resident.treatment.journal_family) ? 'Transition' : ''">
					<label >
					<input ng-click="assignTreatment('journal_family', resident.resident_id, !resident.treatment.journal_family)" class="" type="checkbox" ng-checked="resident.treatment.journal_family">Fam
					</label>
				</td>

				<td style="text-align: center;" ng-class="(resident.treatment.journal_reentry) ? 'Transition' : ''">
					<label >
					<input ng-click="assignTreatment('journal_reentry', resident.resident_id, !resident.treatment.journal_reentry)" class="" type="checkbox" ng-checked="resident.treatment.journal_reentry">RP
					</label>
				</td>

			</tr>
	 	</table>
	</div>
</div>
@stop