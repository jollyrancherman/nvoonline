<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>CSYC - Homepage</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="CSYC Database"/>
<meta content="" name="Anthony Sullivan"/>
<link href="/assets/all.min.css" rel="stylesheet" type="text/css" />
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>

<!-- Angular -->
<!-- <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.3/angular.min.js"></script> -->

<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
@yield('top')
<style>
	.searchAll-container{
		z-index: 1000;
		position: absolute;
		display: block;
		top:40px;
	}
	.searchAll-link {
		font-size: 1.4em;
		background-color: #FFFFFF;
	}
	.searchAll-link:hover {
		background-color: #EEEEEE;
	}

	.Orientation{
		background-color:#FFFBBA;
	}
	.Adjustment{
		background-color:#9EB3FF;
	}
	.Transition{
		background-color:#C9FFCB;
	}
	.Honors{
		background-color:#EEEEEE;
	}


.activity-widget .panel-body { padding:0px; }
.activity-widget .list-group { margin-bottom: 0; }
.activity-widget .panel-title { display:inline;}
.activity-widget .panel-section {margin: 2px;}
.activity-widget .label-info { float: right; }
.activity-widget li.list-group-item {border-radius: 0;border: 0;border-top: 1px solid #ddd;}
.activity-widget li.list-group-item:hover { background-color: rgba(86,61,124,.1); }
.activity-widget .mic-info { color: #666666;font-size: 11px; }
.activity-widget .action { margin-top:5px; }
.activity-widget .comment-text { font-size: 12px; }
.activity-widget .btn-block { border-top-left-radius:0px;border-top-right-radius:0px; }

</style>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
<!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
<!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
<!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
<!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
<!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
<!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
<body class="page-header-fixed page-quick-sidebar-over-content" ng-app="csycApp">
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
			<p style="color:#FFF; font-size:1.5em;margin:10px 0">NVO Online</p>
			<div class="menu-toggler sidebar-toggler hide">
				<!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->

			</div>
		</div>
		<!-- END LOGO -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
		</a>
		<!-- END RESPONSIVE MENU TOGGLER -->
		<!-- BEGIN TOP NAVIGATION MENU -->
		<div class="top-menu">
		@include('layout._notifications')
		</div>
		<!-- END TOP NAVIGATION MENU -->
	</div>
	<!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>


<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	@include('layout._sidebar')
	<!-- END SIDEBAR -->
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			@include('layout._modal')
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN PAGE CONTENT-->

			<div class="row">
				<div class="col-md-12">

				  @yield('page')
				</div>
			</div>
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->
	<!-- BEGIN QUICK SIDEBAR -->
  {{-- @include('layout._quicksidebar') --}}
	<!-- END QUICK SIDEBAR -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
	<div class="page-footer-inner">
		 {{ Carbon::now()->format('Y') }}&copy; NVO Online
	</div>
	<div class="scroll-to-top">
		<i class="icon-arrow-up"></i>
	</div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="../../assets/global/plugins/respond.min.js"></script>
<script src="../../assets/global/plugins/excanvas.min.js"></script>
<![endif]-->

<script src="/assets/all.min.js" type="text/javascript"></script>

<script>
  jQuery(document).ready(function() {
    Metronic.init(); // init metronic core components
		Layout.init(); // init current layout
		QuickSidebar.init() // init quick sidebar
  });
</script>
@include('layout._app')
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/hogan.js/2.0.0/hogan.js"></script>
<script>
$("#searchAllTab").keydown(function (e) {
    if (e.which == 9) {
        $("#bloodhound").html(this.value);
        this.value = "";
        $("#searchAllTab").focus();
        e.preventDefault();
    }
});
</script>
<script>
	toastr.options.closeButton = true;
	toastr.options.max = 3;
</script>
@yield('bot')
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>