	<div class="page-sidebar-wrapper">
		<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
		<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
		<div class="page-sidebar navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
			<!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
			<!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
			<!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
			<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
			<!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
			<!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
			<ul class="page-sidebar-menu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
				<!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
				<li class="sidebar-toggler-wrapper">
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div class="sidebar-toggler">
						<i class="fa fa-th-list fa-2x" style="color: #EEE;"></i>
					</div>
					<!-- END SIDEBAR TOGGLER BUTTON -->
				</li>

				<li class="start ">
					<a href="/dashboard">
					<i class="fa fa-home"></i>
					<span class="title">Dashboard</span>
					</a>
				</li>

				<!-- REPORTS -->
				<li>
					<a href="/reports">
					<i class="fa fa-file-text"></i>
					<span class="title">Reports</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="/reports">
							Summary</a>
						</li>
						<li>
							<a href="/reports/ART">
							ART</a>
						</li>
						<li>
							<a href="/reports/ForwardThinking">
							Character Notes</a>
						</li>
						<li>
							<a href="/reports/ForwardThinking">
							Contact Entries</a>
						</li>
						<li>
							<a href="/reports/ForwardThinking">
							Forward Thinking</a>
						</li>
					</ul>
				</li>

				<!-- DOCUMENTS -->
<!-- 				<li>
					<a href="javascript:;">
					<i class="fa fa-file-text"></i>
					<span class="title">Documents</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="#">
							Empty</a>
						</li>
					</ul>
				</li> -->

				<!-- MEDICAL -->
				<li>
					<a href="javascript:;">
					<i class="fa fa-medkit"></i>
					<span class="title">Medical</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="#">
							Empty</a>
						</li>
					</ul>
				</li>

				<!-- TREATMENT -->
				<li>
					<a href="javascript:;">
					<i class="fa fa-book"></i>
					<span class="title">Treatment</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="#">
							ART</a>
						</li>
						<li>
							<a href="/treatment/forwardThinking">
							Forward Thinking</a>
						</li>
						<li>
							<a href="#">
							Custom</a>
						</li>
					</ul>
				</li>
				<li class="last ">
					<a href="/logout">
						<i class="fa fa-power-off"></i>
						<span class="title">Log Out</span>
					</a>
				</li>



<!-- 				<li class="heading">
					<h3 class="uppercase">Features</h3>
				</li> -->

			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
	</div>