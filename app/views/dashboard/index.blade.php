@extends('layout.master')

@section('pageTitle') 

@stop

@section('top')
<style>
	.task-item{
		background-color: #FEFEFE;
		margin: 10px;
		padding: 5px;
		-webkit-box-shadow: 0px 5px 10px 2px rgba(0,0,0,0.5);
		-moz-box-shadow: 0px 5px 10px 2px rgba(0,0,0,0.5);
		box-shadow: 0px 5px 10px 2px rgba(0,0,0,0.5);
	}
</style>

@stop

@section('page')
<div class="row">
	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
		<div class="dashboard-stat blue-madison">
			<div class="visual">
				<i class="fa fa-comments"></i>
			</div>
			<div class="details">
				<div class="number">
					 276/121
				</div>
				<div class="desc">
					 Resident Contacts
				</div>
			</div>
			<a class="more" href="#">
			View Report <i class="m-icon-swapright m-icon-white"></i>
			</a>
		</div>
	</div>

	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
		<div class="dashboard-stat red-intense">
			<div class="visual">
				<i class="fa fa-users"></i>
			</div>
			<div class="details">
				<div class="number">
					 149/72
				</div>
				<div class="desc">
					 Char Notes
				</div>
			</div>
			<a class="more" href="#">
			See All <i class="m-icon-swapright m-icon-white"></i>
			</a>
		</div>
	</div>

	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
		<div class="dashboard-stat green-haze">
			<div class="visual">
				<i class="fa fa-book"></i>
			</div>
			<div class="details">
				<div class="number">
					 103%
				</div>
				<div class="desc">
					 Forward Thinking
				</div>
			</div>
			{{ link_to_route('report.forwardThinking', 'see full report',null,['class' => 'more']) }}
		</div>
	</div>

	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
		<div class="dashboard-stat purple-plum">
			<div class="visual">
				<i class="fa fa-tasks"></i>
			</div>
			<div class="details">
				<div class="number">
					 5
				</div>
				<div class="desc">
					 Remaining Tasks for {{ Carbon::now()->format('M d') }}
				</div>
			</div>
			<a class="more" href="#">
			View All <i class="m-icon-swapright m-icon-white"></i>
			</a>
		</div>
	</div>
</div>



<div class="row">
	<div class="col-sm-6">



			<div class="portlet" ng-controller="TaskCtrl">
				<div class="portlet-title">
					<div class="caption">
						<i class="fa fa-pencil-square-o"></i> Feedback
					</div>
					<div class="tools">
						<a href="javascript:;" class="collapse">
						</a>
						<a href="javascript:;" class="reload">
						</a>
						<a href="javascript:;" class="remove">
						</a>
					</div>
				</div>
				<div class="portlet-body">
					<div class="scroller" style="overflow:auto">

										<div class="col-xs-12 task-item">
											Thanks for the help today! -Lesley Keith
										</div>			


					</div>
				</div>
			</div>

			<div class="portlet" ng-controller="TaskCtrl">
				<div class="portlet-title">
					<div class="caption">
						<i class="fa fa-pencil-square-o"></i> Tasks
						<ng-pluralize count="taskCount"
                when="{'0': 'Great! You have no tasks.',
                       'one': '1 task remaining',
                       'other': '{} tasks remaining.'}">
  					</ng-pluralize>
					</div>
					<div class="tools">
						<a href="javascript:;" class="collapse">
						</a>
						<a href="javascript:;" class="reload">
						</a>
						<a href="javascript:;" class="remove">
						</a>
					</div>
				</div>
				<div class="portlet-body">
					<div class="scroller" style="height:600px">

						<div class="task-container">
							
							<div class="col-xs-12 task-item">
								<div class="col-xs-12">
									<div>
										<span class="bold">
											Complete Schedule
										</span> 
										due {{ Carbon::now()->addDays(4)->format('M d') }}
									</div>
									<div class="small">
										<a href="">completed</a> - 
										<a href="">ask question</a> - <span style="color: #999999" >assigned by</span>
										<a href="">Lesley Keith</a> <span style="color: #999999" >on {{ Carbon::now()->format('M d') }}</span>
									</div>
								</div>							
							</div>

							<div class="col-xs-12 task-item">
								<div class="col-xs-12">
									<div>
										<span class="bold">
											Allow Johnson to call home
										</span> 
										due {{ Carbon::now()->addDays(0)->format('M d') }}
									</div>
									<div class="col-xs-12">		
										Please remind him to have his mother to send a winter coat.
									</div>
									<div class="small">
										<a href="">completed</a> - 
										<a href="">message</a> - <span style="color: #999999" >assigned by</span>
										<a href="">Chris Toles</a> <span style="color: #999999" >on {{ Carbon::now()->format('M d') }}</span>
									</div>
								</div>							
							</div>

							<div class="col-xs-12 task-item">
								<div class="col-xs-12">
									<div>
										<span class="bold">
											Allow Johnson to call home
										</span> 
										due {{ Carbon::now()->addDays(0)->format('M d') }}
									</div>
									<div class="col-xs-12">		
										Please remind him to have his mother to send a winter coat.
									</div>
									<div class="small">
										<a href="">completed</a> - 
										<a href="">message</a> - <span style="color: #999999" >assigned by</span>
										<a href="">Lesley Keith</a> <span style="color: #999999" >on {{ Carbon::now()->format('M d') }}</span>
									</div>
								</div>							
							</div>


						</div>

				</div>
			</div>

	</div>
</div>

<div class="row">
	<div class="col-sm-6">
		

			<div class="portlet" ng-controller="TaskCtrl">
				<div class="portlet-title">
					<div class="caption">
						<i class="fa fa-pencil-square-o"></i> Briefing
					</div>
					<div class="tools">
						<a href="javascript:;" class="collapse">
						</a>
						<a href="javascript:;" class="reload">
						</a>
						<a href="javascript:;" class="remove">
						</a>
					</div>
				</div>
				<div class="portlet-body">
					<div class="scroller" style="height:600px">
							
						<div class="row">
							<div class="col-xs-12">
								<span class="bold">Count:</span> 33 in camp / 7 home visits
							</div>
							<div class="col-xs-12">
								<span class="bold">SOC:</span> Pawling
							</div>
							<div class="col-xs-12">
								<span class="bold">AOC:</span> Garrison
							</div>
						</div>	
							

						<h4>Current IR's</h4>
						<ul>
							<li>Wayne <span class="small">{{ Carbon::now()->addDays(-2)->format('M d') }} - {{ Carbon::now()->addDays(3)->format('M d') }} <a href="">view IR</a></span></li>

							<li>Presley <span class="small">{{ Carbon::now()->addDays(0)->format('M d') }} - {{ Carbon::now()->addDays(2)->format('M d') }} <a href="">view IR</a></span></li>

							<li>Ramirez <span class="small">{{ Carbon::now()->addDays(-2)->format('M d') }} - {{ Carbon::now()->addDays(3)->format('M d') }} <a href="">view IR</a></span></li>
						</ul>

						<h4>BIPS</h4>
						<ul>
							<li>
								<div>Cruz</div>
								<div class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum voluptatem eum fugiat cupiditate voluptas illum, facere perspiciatis quisquam ipsa id culpa nulla saepe libero velit in commodi error. Tempore, consequuntur!</div>
							</li>
							<li>
								<div>Thomas</div>
								<div class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum voluptatem eum fugiat cupiditate voluptas illum, facere perspiciatis quisquam ipsa id culpa nulla saepe libero velit in commodi error. Tempore, consequuntur!</div>
							</li>
						</ul>

						<h3>Graveyard Information</h3>
						<ul>
							<li>Overall Good shift, No major issues.</li>
							<li>Breakfast meds admininstered by RC. Verified by AS.</li>
							<li>AS facilitated FT with (5) residents.</li>
							<li>DS facilitated FT with (6) residetns.</li>
							<li>No call ins</li>
						</ul>

						<h3>Swing Information</h3>
						<ul>
							<li>Overall Good shift, No major issues.</li>
							<li>Breakfast meds admininstered by RC. Verified by AS.</li>
							<li>AS facilitated FT with (5) residents.</li>
							<li>DS facilitated FT with (6) residetns.</li>
						</ul>

				</div>
			</div>

	</div>
</div>


						{{-- RECENT ACTIVITY --}}

					</div>
				</div>
			</div>
@stop