<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Material Admin - Dynamic tables</title>

		<!-- BEGIN META -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="your,keywords">
		<meta name="description" content="Short explanation about this website">
		<!-- END META -->

		<!-- BEGIN STYLESHEETS -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>
		<link type="text/css" rel="stylesheet" href="../../assets/css/theme-1/bootstrap.css?1422792965" />
		<link type="text/css" rel="stylesheet" href="../../assets/css/theme-1/materialadmin.css?1425466319" />
		<link type="text/css" rel="stylesheet" href="../../assets/css/theme-1/font-awesome.min.css?1422529194" />
		<link type="text/css" rel="stylesheet" href="../../assets/css/theme-1/material-design-iconic-font.min.css?1421434286" />
		<link type="text/css" rel="stylesheet" href="../../assets/css/theme-1/libs/DataTables/jquery.dataTables.css?1423553989" />
		<link type="text/css" rel="stylesheet" href="../../assets/css/theme-1/libs/DataTables/extensions/dataTables.colVis.css?1423553990" />
		<link type="text/css" rel="stylesheet" href="../../assets/css/theme-1/libs/DataTables/extensions/dataTables.tableTools.css?1423553990" />
		<!-- END STYLESHEETS -->

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script type="text/javascript" src="../../assets/js/libs/utils/html5shiv.js?1403934957"></script>
		<script type="text/javascript" src="../../assets/js/libs/utils/respond.min.js?1403934956"></script>
		<![endif]-->
	</head>
	<body class="menubar-hoverable header-fixed ">

		<!-- BEGIN HEADER-->
		<header id="header" >
			<div class="headerbar">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="headerbar-left">
					<ul class="header-nav header-nav-options">
						<li class="header-nav-brand" >
							<div class="brand-holder">
								<a href="../../pages/dashboards/dashboard.html">
									<span class="text-lg text-bold text-primary">PES VIDYALAYA</span>
								</a>
							</div>
						</li>
						<li>
							<a class="btn btn-icon-toggle menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
								<i class="fa fa-bars"></i>
							</a>
						</li>
					</ul>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="headerbar-right">
					
					<ul class="header-nav header-nav-profile">
						<li class="dropdown">
							<a href="javascript:void(0);" class="dropdown-toggle ink-reaction" data-toggle="dropdown">
								<img src="../../assets/img/avatar1.jpg?1403934956" alt="" />
								<span class="profile-info">
									Daniel Johnson
									<small>User</small>
								</span>
							</a>
							<ul class="dropdown-menu animation-dock">
								<li class="dropdown-header">Config</li>
								<li><a href="../../pages/pages/profile.html">My profile</a></li>
								<li><a href="../../pages/pages/blog/post.html">My Account</a></li>
								<li><a href="../../pages/pages/calendar.html">Settings</a></li>
								<li class="divider"></li>
								
								<li><a href="../../pages/pages/login.html"><i class="fa fa-fw fa-power-off text-danger"></i> Logout</a></li>
							</ul><!--end .dropdown-menu -->
						</li><!--end .dropdown -->
					</ul><!--end .header-nav-profile -->
					<ul class="header-nav header-nav-toggle">
						<li>
							<a class="btn btn-icon-toggle btn-default" href="#offcanvas-search" data-toggle="offcanvas" data-backdrop="false">
								<i class="fa fa-info-circle" aria-hidden="true"></i>
							</a>
						</li>
					</ul><!--end .header-nav-toggle -->
				</div><!--end #header-navbar-collapse -->
			</div>
		</header>
		<!-- END HEADER-->

		<!-- BEGIN BASE-->
		<div id="base">

			<!-- BEGIN OFFCANVAS LEFT -->
			<div class="offcanvas">
			</div><!--end .offcanvas-->
			<!-- END OFFCANVAS LEFT -->

			<!-- BEGIN CONTENT-->
			<div id="content">
				<section class="style-default-bright">
					<div class="section-header">
						<h2 class="text-primary">Applications list</h2>
					</div>
					<div class="section-body">

						<!-- BEGIN DATATABLE 1 -->
						<div class="row">
							<div class="col-md-8">
								<article class="margin-bottom-xxl">
									<p class="lead">
										This list contains all the admission request generated through your login ID.
									</p>
								</article>
							</div><!--end .col -->
						</div><!--end .row -->
						<div class="row">
							<div class="col-lg-12">
								<div class="table-responsive">
									<table id="datatable1" class="table table-striped table-hover">
										<thead>
											<tr>
												<th>Student Name</th>
												<th>Appn Ref ID</th>
												<th>Date of Apply</th>
												<th class="sort-numeric">Status</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Jithesh</td>
												<td><a href="#">432APN000JITH27052002</a></td>
												<td>21.05.2020</td>
												<td><span class="green">Completed</span></td>
											</tr>
											<tr>
												<td>Joseph</td>
												<td><a href="#">432APN000JITH27052002</a></td>
												<td>21.05.2020</td>
												<td><span class="orange">Pending</span></td>
											</tr>
											<tr>
												<td>Ishaan</td>
												<td><a href="#">432APN000JITH27052002</a></td>
												<td>24.05.2020</td>
												<td><span class="red">Rejected</span></td>
											</tr>
											<tr>
												<td>Mishti</td>
												<td><a href="#">432APN000JITH27052002</a></td>
												<td>24.05.2020</td>
												<td><span class="green">Completed</span></td>
											</tr>
											<tr>
												<td>Janvi</td>
												<td><a href="#">432APN000JITH27052002</a></td>
												<td>27.05.2020</td>
												<td><span class="orange">Pending</span></td>
											</tr>
											<tr>
												<td>Aneej</td>
												<td><a href="#">432APN000JITH27052002</a></td>
												<td>20.05.2020</td>
												<td><span class="red">Rejected</span></td>
											</tr>
										</tbody>
									</table>
								</div><!--end .table-responsive -->
							</div><!--end .col -->
						</div><!--end .row -->
						<!-- END DATATABLE 1 -->

						

					</div><!--end .section-body -->
				</section>
			</div><!--end #content-->
			<!-- END CONTENT -->

			<!-- BEGIN MENUBAR-->
			<div id="menubar" class="menubar-inverse ">
				<div class="menubar-fixed-panel">
					<div>
						<a class="btn btn-icon-toggle btn-default menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
							<i class="fa fa-bars"></i>
						</a>
					</div>
					<div class="expanded">
						<a href="../../pages/dashboards/dashboard.html">
							<span class="text-lg text-bold text-primary ">PES&nbsp;VIDYALAYA</span>
						</a>
					</div>
				</div>
				<div class="menubar-scroll-panel">

					<!-- BEGIN MAIN MENU -->
					<ul id="main-menu" class="gui-controls">

						<!-- BEGIN DASHBOARD -->
						<li>
							<a href="../../pages/dashboards/dashboard.html" >
								<div class="gui-icon"><i class="md md-home"></i></div>
								<span class="title">Dashboard</span>
							</a>
						</li><!--end /menu-li -->
						<!-- END DASHBOARD -->

						<!-- BEGIN ADMISSION -->
						<li class="gui-folder active">
							<a>
								<div class="gui-icon"><span class="glyphicon glyphicon-list-alt"></span></div>
								<span class="title">Admissions</span>
							</a>
							<!--start submenu -->
							<ul>
								<li><a href="../../pages/admission/admission.php" ><span class="title">Apply New</span></a></li>
								<li><a href="../../pages/admission/applications.php" ><span class="title">Applications</span></a></li>
							</ul><!--end /submenu -->
						</li><!--end /menu-li -->
						<!-- END ADMISSION -->						

					</ul><!--end .main-menu -->
					<!-- END MAIN MENU -->

					<div class="menubar-foot-panel">
						<small class="no-linebreak hidden-folded">
							<span class="opacity-75">Copyright &copy; 2020</span> <strong>PES VIDYALAYA</strong>
						</small>
					</div>
				</div><!--end .menubar-scroll-panel-->
			</div><!--end #menubar-->
			<!-- END MENUBAR -->

			<!-- BEGIN OFFCANVAS RIGHT -->
			<div class="offcanvas">

				<!-- BEGIN OFFCANVAS SEARCH -->
				<div id="offcanvas-search" class="offcanvas-pane width-8">
					<div class="offcanvas-head">
						<header class="text-primary">Guidelines</header>
						<div class="offcanvas-tools">
							<a class="btn btn-icon-toggle btn-default-light pull-right" data-dismiss="offcanvas">
								<i class="md md-close"></i>
							</a>
						</div>
					</div>
					<div class="offcanvas-body no-padding">
						<ul class="list ">
							<li class="tile divider-full-bleed">
								<div class="tile-content">
									<div class="tile-text">Applications for admission would be approved based on an offline verification and approval process conducted by the school management.</div>
								</div>
							</li>
							<li class="tile divider-full-bleed">
								<div class="tile-content">
									<div class="tile-text">Time line for the application approval would be depends on the number of applications and could be delayed due to any technical factors</div>
								</div>
							</li>
							<li class="tile divider-full-bleed">
								<div class="tile-content">
									<div class="tile-text">You can all any time on our office timing and enquire about the admission status by telling us your Application reference number.</div>
								</div>
							</li>
							<li class="tile divider-full-bleed">
								<div class="tile-content">
									<div class="tile-text">There will not be any special considerations to speed-up the admission process</div>
								</div>
							</li>
							<li class="tile divider-full-bleed">
								<div class="tile-content">
									<div class="tile-text">You either choose online or offline payment option as per your choice.</div>
								</div>
							</li>
							<li class="tile divider-full-bleed">
								<div class="tile-content">
									<div class="tile-text">This admission form wizard is just a preliminary step prior to the actual admission procedure. You should present your child at school on a fixed appointment date to complete the admission procedure offline.</div>
								</div>
							</li>
							<li class="tile divider-full-bleed">
								<div class="tile-content">
									<div class="tile-text">Please call 0497-2805800 if you find any difficulties during form submission</div>
								</div>
							</li>
						</ul>
					</div><!--end .offcanvas-body -->
				</div><!--end .offcanvas-pane -->
				<!-- END OFFCANVAS SEARCH -->

			</div><!--end .offcanvas-->
			<!-- END OFFCANVAS RIGHT -->

		</div><!--end #base-->
		<!-- END BASE -->

		<!-- BEGIN JAVASCRIPT -->
		<script src="../../assets/js/libs/jquery/jquery-1.11.2.min.js"></script>
		<script src="../../assets/js/libs/jquery/jquery-migrate-1.2.1.min.js"></script>
		<script src="../../assets/js/libs/bootstrap/bootstrap.min.js"></script>
		<script src="../../assets/js/libs/spin.js/spin.min.js"></script>
		<script src="../../assets/js/libs/autosize/jquery.autosize.min.js"></script>
		<script src="../../assets/js/libs/DataTables/jquery.dataTables.min.js"></script>
		<script src="../../assets/js/libs/DataTables/extensions/ColVis/js/dataTables.colVis.min.js"></script>
		<script src="../../assets/js/libs/DataTables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
		<script src="../../assets/js/libs/nanoscroller/jquery.nanoscroller.min.js"></script>
		<script src="../../assets/js/core/source/App.js"></script>
		<script src="../../assets/js/core/source/AppNavigation.js"></script>
		<script src="../../assets/js/core/source/AppOffcanvas.js"></script>
		<script src="../../assets/js/core/source/AppCard.js"></script>
		<script src="../../assets/js/core/source/AppForm.js"></script>
		<script src="../../assets/js/core/source/AppNavSearch.js"></script>
		<script src="../../assets/js/core/source/AppVendor.js"></script>
		<script src="../../assets/js/core/demo/Demo.js"></script>
		<script src="../../assets/js/core/demo/DemoTableDynamic.js"></script>
		<!-- END JAVASCRIPT -->

	</body>
</html>
