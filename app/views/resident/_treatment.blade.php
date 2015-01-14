			<h3 style="border-bottom: thin solid #DDDDDD;">Treatment (@{{ totalPer | percentage }}) <small class="pull-right"><a href="/treatment/forwardThinking">assign treatment</a></small></h3>

@if($resident->treatment)
    <div class="row"  ng-init="resident_id={{ $resident->resident_id }}">
        <div class="col-md-12">
            <div class="panel-group" id="accordion">

	           @if($resident->treatment->journal_wgmh)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                            </span>What Got Me Here</a>
                            <span ng-cloak class="pull-right">@{{ JournalWGMHPer | percentage }}</span>
                        </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse">
                        <div class="panel-body">

                    		<div class="col-xs-12" ng-repeat="(k,v) in JournalWGMH">
                    			<label>
                    				<input  ng-click="updateJournal(data.resident_id, 'JournalWgmh', k, !data.rx_what_got_me_here[k])" class="icheck" type="checkbox" ng-checked=" data.rx_what_got_me_here[k]"> @{{ v }}
                    			</label>
                    		</div>

                        </div>
                    </div>
                </div>
				@endif


				@if($resident->treatment->journal_behavior)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                            </span>Responsible Behavior</a>
                            <span ng-cloak class="pull-right">@{{ JournalBehaviorPer | percentage }}</span>
                        </h4>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse">
                        <div class="panel-body">

                            <div class="col-xs-12" ng-repeat="(k,v) in JournalBehavior">
                                <label>
                                    <input  ng-click="updateJournal(data.resident_id, 'JournalBehavior', k, !data.rx_responsible[k])" class="icheck" type="checkbox" ng-checked=" data.rx_responsible[k]"> @{{ v }}
                                </label>
                            </div>

                        </div>
                    </div>
                </div>

				@endif
				@if($resident->treatment->journal_change)

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                            </span>Individual Change Plan</a>
                            <span class="pull-right">@{{ JournalChangePer | percentage }}</span>
                        </h4>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse">
                        <div class="panel-body">

                            <div class="col-xs-12" ng-repeat="(k,v) in JournalChange">
                                <label>
                                    <input  ng-click="updateJournal(data.resident_id, 'JournalChange', k, !data.rx_change[k])" class="icheck" type="checkbox" ng-checked=" data.rx_change[k]"> @{{ v }}
                                </label>
                            </div>

                        </div>
                    </div>
                </div>

				@endif
				@if($resident->treatment->journal_feelings)

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                            </span>Handling Difficult Feelings</a>
                            <span class="pull-right">@{{ JournalFeelingsPer | percentage }}</span>
                        </h4>
                    </div>
                    <div id="collapse4" class="panel-collapse collapse">
                        <div class="panel-body">

                            <div class="col-xs-12" ng-repeat="(k,v) in JournalFeelings">
                                <label>
                                    <input  ng-click="updateJournal(data.resident_id, 'JournalFeelings', k, !data.rx_feelings[k])" class="icheck" type="checkbox" ng-checked=" data.rx_feelings[k]"> @{{ v }}
                                </label>
                            </div>

                        </div>
                    </div>
                </div>


				@endif
				@if($resident->treatment->journal_family)

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
                            </span>Family</a>
                            <span class="pull-right">@{{ JournalFamilyPer | percentage }}</span>
                        </h4>
                    </div>
                    <div id="collapse5" class="panel-collapse collapse">
                        <div class="panel-body">

                           <div class="col-xs-12" ng-repeat="(k,v) in JournalFamily">
                                <label>
                                    <input  ng-click="updateJournal(data.resident_id, 'JournalFamily', k, !data.rx_family[k])" class="icheck" type="checkbox" ng-checked=" data.rx_family[k]"> @{{ v }}
                                </label>
                            </div>

                        </div>
                    </div>
                </div>

				@endif
				@if($resident->treatment->journal_relationships)

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">
                            </span>Relationships and Communication</a>
                            <span class="pull-right">@{{ JournalRelationshipsPer | percentage }}</span>
                        </h4>
                    </div>
                    <div id="collapse6" class="panel-collapse collapse">
                        <div class="panel-body">

                            <div class="col-xs-12" ng-repeat="(k,v) in JournalRelationships">
                                <label>
                                    <input  ng-click="updateJournal(data.resident_id, 'JournalRelationships', k, !data.rx_relationships[k])" class="icheck" type="checkbox" ng-checked=" data.rx_relationships[k]"> @{{ v }}
                                </label>
                            </div>

                        </div>
                    </div>
                </div>

				@endif
				@if($resident->treatment->journal_victim)

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">
                            </span>Victim Awareness</a>
                            <span class="pull-right">@{{ JournalVictimPer | percentage }}</span>
                        </h4>
                    </div>
                    <div id="collapse7" class="panel-collapse collapse">
                        <div class="panel-body">

                            <div class="col-xs-12" ng-repeat="(k,v) in JournalVictim">
                                <label>
                                    <input  ng-click="updateJournal(data.resident_id, 'JournalVictim', k, !data.rx_victim[k])" class="icheck" type="checkbox" ng-checked=" data.rx_victim[k]"> @{{ v }}
                                </label>
                            </div>

                        </div>
                    </div>
                </div>

				@endif
				@if($resident->treatment->journal_reentry)

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse8">
                            </span>Reentry Planning</a>
                            <span class="pull-right">@{{ JournalReentryPer | percentage }}</span>
                        </h4>
                    </div>
                    <div id="collapse8" class="panel-collapse collapse">
                        <div class="panel-body">

                            <div class="col-xs-12" ng-repeat="(k,v) in JournalReentry">
                                <label>
                                    <input  ng-click="updateJournal(data.resident_id, 'JournalReentry', k, !data.rx_reentry[k])" class="icheck" type="checkbox" ng-checked=" data.rx_reentry[k]"> @{{ v }}
                                </label>
                            </div>

                        </div>
                    </div>
                </div>

				@endif
			@else
				<div class="row">
					<div class="col-xs-12 bold">
						<p style="font-size: 1.5em;">No treatment has been assigned.</p>
					</div>
				</div>
			@endif

            </div>
        </div>
    </div>
