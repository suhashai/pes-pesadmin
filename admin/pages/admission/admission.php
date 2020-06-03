<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Material Admin - Form Wizard</title>

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
		<link type="text/css" rel="stylesheet" href="../../assets/css/theme-1/libs/wizard/wizard.css?1425466601" />
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
				<section>
					<div class="section-header">
						<ol class="breadcrumb">
							<li class="active">Admission Wizard</li>
						</ol>
					</div>
					<div class="section-body contain-lg">

						<!-- BEGIN INTRO -->
						<div class="row">
							<div class="col-lg-12">
								<h1 class="text-primary">Student Application Form</h1>
							</div><!--end .col -->
							<div class="col-lg-8">
								<article class="margin-bottom-xxl">
									<p class="lead">
										Application Form for Admission. Please fill all the details and submit to us.
									</p>
								</article>
							</div><!--end .col -->
						</div><!--end .row -->
						<!-- END INTRO -->

						<!-- BEGIN VALIDATION FORM WIZARD -->
						<div class="row">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-body ">
										<div id="rootwizard2" class="form-wizard form-wizard-horizontal">
											<form class="form floating-label form-validation" role="form" novalidate="novalidate">
												<div class="form-wizard-nav">
													<div class="progress"><div class="progress-bar progress-bar-primary"></div></div>
													<ul class="nav nav-justified">
														<li class="active"><a href="#step1" data-toggle="tab"><span class="step">1</span> <span class="title">PERSONAL</span></a></li>
														<li><a href="#step2" data-toggle="tab"><span class="step">2</span> <span class="title">PREV STUDY</span></a></li>
														<li><a href="#step3" data-toggle="tab"><span class="step">3</span> <span class="title">FAMILY</span></a></li>
														<li><a href="#step4" data-toggle="tab"><span class="step">4</span> <span class="title">ACADEMIC</span></a></li>
													</ul>
												</div><!--end .form-wizard-nav -->
												<div class="tab-content clearfix">
													<div class="tab-pane active" id="step1">
														<div class="form-group">
															<input type="text" name="name" id="name" class="form-control" data-rule-minlength="3" required>
															<label for="name" class="control-label">Name of Student</label>
														</div>
														<div class="row">
															<div class="col-sm-4">
																<div class="form-group inline-field">
																	<label class="control-label position-r label-inline position-r inline-title-label">Sex:</label>	
																	<label class="radio-inline radio-styled position-r m-top">
																	<input type="radio" name="sex" value="male" id="sexm" class="form-control" required><span>Male</span>
																	</label>
																	<label class="radio-inline radio-styled position-r m-top">
																	<input type="radio" name="sex" value="female" id="sexf" class="form-control"><span>Female</span>
																	</label>
																</div>
															</div>
															<div class="col-sm-2">
																<div class="form-group">
																	<input type="text" name="age" id="age" class="form-control" data-rule-minlength="2" required>
																	<label for="age" class="control-label">Age</label>
																</div>
															</div>
															<div class="col-sm-6">
																<div class="form-group">
																	<input type="text" name="dob" id="dob" class="form-control" data-rule-minlength="2" required>
																	<label for="dob" class="control-label">Date of Birth</label>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-sm-6">
																<div class="form-group">
																	<input type="text" name="pob" id="pob" class="form-control" data-rule-minlength="2" required>
																	<label for="pob" class="control-label">Place of Birth</label>
																</div>
															</div>
															<div class="col-sm-6">
																<div class="form-group">
																	<input type="text" name="nationality" id="nationality" class="form-control" data-rule-minlength="2" required>
																	<label for="nationality" class="control-label">Nationality</label>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-sm-4">
																<div class="form-group">
																	<input type="text" name="religion" id="religion" class="form-control" data-rule-minlength="2" required>
																	<label for="religion" class="control-label">Religion</label>
																</div>
															</div>
															<div class="col-sm-4">
																<div class="form-group">
																	<input type="text" name="cast" id="cast" class="form-control" data-rule-minlength="2" required>
																	<label for="cast" class="control-label">Cast</label>
																</div>
															</div>
															<div class="col-sm-4">
																<div class="form-group">
																	<input type="text" name="mothertongue" id="mothertongue" class="form-control" data-rule-minlength="2" required>
																	<label for="mothertongue" class="control-label">Mother Tongue</label>
																</div>
															</div>
														</div>

														<div class="form-group">
															<input type="text" name="resadd1" id="resadd1" class="form-control" data-rule-minlength="3" required>
															<label for="resadd1" class="control-label">Residential Address</label>
														</div>
														<div class="form-group">
															<input type="text" name="resadd2" id="resadd2" class="form-control" data-rule-minlength="3">
															<label for="resadd2" class="control-label">Street / Landmark</label>
														</div>
														<div class="row">
															<div class="col-sm-4">
																<div class="form-group">
																	<input type="text" name="district" id="district" class="form-control" data-rule-minlength="2" required>
																	<label for="district" class="control-label">District</label>
																</div>
															</div>
															<div class="col-sm-4">
																<div class="form-group">
																	<input type="text" name="state" id="state" class="form-control" data-rule-minlength="2" required>
																	<label for="state" class="control-label">State</label>
																</div>
															</div>
															<div class="col-sm-4">
																<div class="form-group">
																	<input type="text" name="pin" id="pin" class="form-control" data-rule-minlength="2" required>
																	<label for="pin" class="control-label">Pin Code</label>
																</div>
															</div>
														</div>

													</div><!--end #step1 -->
													<div class="tab-pane" id="step2">
														<br/><br/>
														<div class="form-group">
															<input type="text" name="prevschool" id="prevschool" class="form-control" data-rule-minlength="3" required>
															<label for="prevschool" class="control-label">Name of School</label>
														</div>
														<div class="form-group">
															<input type="text" name="prevschooladdr" id="prevschooladdr" class="form-control" data-rule-minlength="3" required>
															<label for="prevschooladdr" class="control-label">Address of School</label>
															<p class="help-block">Enter the place of school</p>
														</div>
														<div class="row">
															<div class="col-sm-4">
																<div class="form-group">
																	<input type="text" name="lastclass" id="lastclass" class="form-control" data-rule-minlength="2" required>
																	<label for="lastclass" class="control-label">Class Last Attended</label>
																</div>
															</div>
															<div class="col-sm-4">
																<div class="form-group">
																	<input type="text" name="tcno" id="tcno" class="form-control" data-rule-minlength="2" required>
																	<label for="tcno" class="control-label">TC No</label>
																</div>
															</div>
															<div class="col-sm-4">
																<div class="form-group">
																	<input type="text" name="tcdate" id="tcdate" class="form-control" data-rule-minlength="2" required>
																	<label for="tcdate" class="control-label">TC Date</label>
																</div>
															</div>
														</div>
													</div><!--end #step2 -->
													<div class="tab-pane" id="step3">
														<br/><br/>
														<div class="row">
															<div class="col-sm-12">
																<div class="form-group inline-field">
																	<label class="control-label">Do you have any of your siblings studying here:</label>	
																	<label class="radio-inline radio-styled position-r m-top">
																	<input type="radio" name="sibling" value="yes" id="siblingyes" class="form-control conditional-radio" required><span>Yes</span>
																	</label>
																	<label class="radio-inline radio-styled position-r m-top">
																	<input type="radio" name="sibling" value="no" id="siblingno" class="form-control conditional-radio-no"><span>No</span>
																	</label>
																</div>
															</div>
															
															<div class="reveal-if-active">
																<label class="control-label clearfix title-line-label">Enter at least 1 Sibling Details:</label>	
																<div class="col-sm-6">
																	<div class="form-group">
																		<input type="text" name="siblingname1" id="siblingname1" class="form-control require-if-active" data-rule-minlength="5"  data-require-pair="#choice-animals-dogs">
																		<label for="siblingname1" class="control-label">Sibling Name</label>
																	</div>
																</div>
																<div class="col-sm-6">
																	<div class="form-group">
																		<input type="text" name="siblingclass1" id="siblingclass1" class="form-control require-if-active" data-rule-minlength="5"  data-require-pair="#choice-animals-dogs">
																		<label for="siblingclass1" class="control-label">Sibling Class</label>
																	</div>
																</div>
																<div class="col-sm-6">
																	<div class="form-group">
																		<input type="text" name="siblingname2" id="siblingname2" class="form-control require-if-active" data-rule-minlength="5">
																		<label for="siblingname2" class="control-label">Sibling Name</label>
																	</div>
																</div>
																<div class="col-sm-6">
																	<div class="form-group">
																		<input type="text" name="siblingclass2" id="siblingclass2" class="form-control require-if-active" data-rule-minlength="5">
																		<label for="siblingclass2" class="control-label">Sibling Class</label>
																	</div>
																</div>
															</div>
														</div>
														<div class="form-group">
															<input type="text" name="fathername" id="fathername" class="form-control" data-rule-minlength="3" required>
															<label for="fathername" class="control-label">Father Name</label>
														</div>
														<div class="row">
															<div class="col-sm-6">
																<div class="form-group">
																	<input type="text" name="fedu" id="fedu" class="form-control" data-rule-minlength="2" required>
																	<label for="fedu" class="control-label">Educational Qualification</label>
																</div>
															</div>
															<div class="col-sm-6">
																<div class="form-group">
																	<input type="text" name="fdesignation" id="fdesignation" class="form-control" data-rule-minlength="2" required>
																	<label for="fdesignation" class="control-label">Designation</label>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-sm-8">
																<div class="form-group">
																	<input type="text" name="faddr" id="faddr" class="form-control" data-rule-minlength="2" required>
																	<label for="faddr" class="control-label">Address</label>
																</div>
															</div>
															<div class="col-sm-4">
																<div class="form-group">
																	<input type="text" name="fpin" id="fpin" class="form-control" data-rule-minlength="2" required>
																	<label for="fpin" class="control-label">Pin Code</label>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-sm-6">
																<div class="form-group">
																	<input type="text" name="fmobile" id="fmobile" class="form-control" data-rule-minlength="2" required>
																	<label for="fmobile" class="control-label">Mobile Number</label>
																</div>
															</div>
															<div class="col-sm-6">
																<div class="form-group">
																	<input type="text" name="flandline" id="flandline" class="form-control" data-rule-minlength="2" required>
																	<label for="flandline" class="control-label">Landline</label>
																</div>
															</div>
														</div>
														<div class="form-group">
															<input type="text" name="mothername" id="mothername" class="form-control" data-rule-minlength="3" required>
															<label for="mothername" class="control-label">Mother Name</label>
														</div>
														<div class="row">
															<div class="col-sm-6">
																<div class="form-group">
																	<input type="text" name="medu" id="medu" class="form-control" data-rule-minlength="2" required>
																	<label for="medu" class="control-label">Educational Qualification</label>
																</div>
															</div>
															<div class="col-sm-6">
																<div class="form-group">
																	<input type="text" name="mdesignation" id="mdesignation" class="form-control" data-rule-minlength="2" required>
																	<label for="mdesignation" class="control-label">Designation</label>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-sm-8">
																<div class="form-group">
																	<input type="text" name="maddr" id="maddr" class="form-control" data-rule-minlength="2" required>
																	<label for="maddr" class="control-label">Address</label>
																</div>
															</div>
															<div class="col-sm-4">
																<div class="form-group">
																	<input type="text" name="mpin" id="mpin" class="form-control" data-rule-minlength="2" required>
																	<label for="mpin" class="control-label">Pin Code</label>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-sm-6">
																<div class="form-group">
																	<input type="text" name="mmobile" id="mmobile" class="form-control" data-rule-minlength="2" required>
																	<label for="mmobile" class="control-label">Mobile Number</label>
																</div>
															</div>
															<div class="col-sm-6">
																<div class="form-group">
																	<input type="text" name="mlandline" id="mlandline" class="form-control" data-rule-minlength="2" required>
																	<label for="mlandline" class="control-label">Landline</label>
																</div>
															</div>
														</div>
														<hr>
														<div class="form-group">
															<input type="text" name="guardname" id="guardname" class="form-control" data-rule-minlength="3" required>
															<label for="guardname" class="control-label">Guardian Name</label>
														</div>
														<div class="row">
															<div class="col-sm-6">
																<div class="form-group">
																	<input type="text" name="guardedu" id="guardedu" class="form-control" data-rule-minlength="2" required>
																	<label for="guardedu" class="control-label">Educational Qualification</label>
																</div>
															</div>
															<div class="col-sm-6">
																<div class="form-group">
																	<input type="text" name="guarddesignation" id="guarddesignation" class="form-control" data-rule-minlength="2" required>
																	<label for="guarddesignation" class="control-label">Designation</label>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-sm-8">
																<div class="form-group">
																	<input type="text" name="guardaddr" id="guardaddr" class="form-control" data-rule-minlength="2" required>
																	<label for="guardaddr" class="control-label">Address</label>
																</div>
															</div>
															<div class="col-sm-4">
																<div class="form-group">
																	<input type="text" name="guardpin" id="guardpin" class="form-control" data-rule-minlength="2" required>
																	<label for="guardpin" class="control-label">Pin Code</label>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-sm-6">
																<div class="form-group">
																	<input type="text" name="guardmobile" id="guardmobile" class="form-control" data-rule-minlength="2" required>
																	<label for="guardmobile" class="control-label">Mobile Number</label>
																</div>
															</div>
															<div class="col-sm-6">
																<div class="form-group">
																	<input type="text" name="guardlandline" id="guardlandline" class="form-control" data-rule-minlength="2" required>
																	<label for="guardlandline" class="control-label">Landline</label>
																</div>
															</div>
														</div>
														<hr>
														<div class="increment-field">
															<div class="form-group" id="increment-element">
																<input type="text" name="alumni" id="alumni" class="form-control" data-rule-minlength="3" required>
																<label for="alumni" class="control-label">Details of Alumni</label>
															</div>
															<span class="add-increment"><i class="fa fa-plus-square" aria-hidden="true"></i> Add additional Alumni Details</span>
														</div>
													</div><!--end #step3 -->
													<div class="tab-pane" id="step4">
														<br/><br/>
														<div class="form-group">
															<select id="class" name="class" class="form-control">
																<option value="">&nbsp;</option>
																<option value="30">1</option>
																<option value="40">2</option>
																<option value="50">3</option>
																<option value="60">4</option>
																<option value="70">5</option>
																<option value="70">6</option>
																<option value="70">7</option>
																<option value="70">8</option>
																<option value="70">9</option>
																<option value="70">10</option>
																<option value="70">+1</option>
																<option value="70">+2</option>
															</select>
															<label for="class">Select the class applying for</label>
															<!-- <p class="help-block">This is supporting text for this field.</p> -->
														</div>
														<span class="form-sub-title">Please Check the Documents Included</span>

														<div class="form-group">
															<div class="checkbox">
																<label class="checkbox">
																	<input type="checkbox" id="sign" name="sign" required> Signature(Scanned Copy)
																</label>
															</div>
															<div class="checkbox">
																<label class="checkbox">
																	<input type="checkbox" id="adhaar" name="adhaar" required> Adhaar Card
																</label>
															</div>
															<div class="checkbox">
																<label class="checkbox">
																	<input type="checkbox" id="bc" name="bc" required> Birth Certificate
																</label>
															</div>
															<div class="checkbox">
																<label class="checkbox">
																	<input type="checkbox" id="photo" name="photo" required> Passport Size Photo(Scanned Copy)
																</label>
															</div>
															<div class="checkbox">
																<label class="checkbox">
																	<input type="checkbox" id="par" name="par" required> Previous Academic Record
																</label>
															</div>
															<div class="checkbox">
																<label class="checkbox">
																	<input type="checkbox" id="tc" name="tc" required> Transfer Certificate
																</label>
															</div>
														</div>
														<div class="form-group">
															<input type="file" name="uploaddocs" id="uploaddocs" class="form-control" data-rule-minlength="3" required>
															<label for="uploaddocs" class="control-label m-tl-40">Upload required documents</label>
															<br><br><br>
															<p class="help-block bt-0">Please include all the documents checked above and upload it as a zip. Please bear in mind that individual upload will consider as invalid. You should name the zipped file as Studentname-dateofbirth-fathername.(For Example: If you are uploading this files for Arun K and his Date of Birth is 25-05-1999 and father name is Mohan Kumar, then the zip file name should be like ARUNK-25051999-MOHANKUMAR). Max file upload size is 3MB</p>
														</div>
														<div class="form-group">
															<textarea name="remarks" id="remarks" class="form-control" rows="3"></textarea>
															<label>Right here if you have anything else to let us know.</label>
															<p class="help-block">Write any remarks / references</p>
														</div>
														<div class="form-group">
															<div class="checkbox">
																<label class="checkbox">
																	<input type="checkbox" id="declare" name="declare" required> By checking this box, you are assuring to us that you and your ward will abide the rules and regulations of this institution. and you are confirming that all the informations filled out above are true to the best of your knowledge. Also you are agreeing abide by the decision of the management with regard to your child's admission and all other related matters. You are getting informed that in case your child leaves the school in the middle of academic year, You will not be entitled to any refund.  
																</label>
															</div>
														</div>
														<div class="form-group">
															<input type="submit" class="btn btn-default" id="apply" name="apply" value="Apply" required>
														</div>
													</div><!--end #step4 -->
												</div><!--end .tab-content -->
												<ul class="pager wizard">
													<!-- <li class="previous first"><a class="btn-raised" href="javascript:void(0);">First</a></li> -->
													<li class="previous"><a class="btn-raised" href="javascript:void(0);">Previous</a></li>
													<!-- <li class="next last"><a class="btn-raised" href="javascript:void(0);">Last</a></li> -->
													<li class="next"><a class="btn-raised" href="javascript:void(0);">Next</a></li>
												</ul>
											</form>
										</div><!--end #rootwizard -->
									</div><!--end .card-body -->
								</div><!--end .card -->
								<em class="text-caption">PES Vidyalaya Admission Form</em>
							</div><!--end .col -->
						</div><!--end .row -->
						<!-- END VALIDATION FORM WIZARD -->

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
									<div class="tile-text">Please fill out all the fields which is as per your records</div>
								</div>
							</li>
							<li class="tile divider-full-bleed">
								<div class="tile-content">
									<div class="tile-text">We consider the date as DD-MM-YYYY formats</div>
								</div>
							</li>
							<li class="tile divider-full-bleed">
								<div class="tile-content">
									<div class="tile-text">Parents details should be a mandatory field</div>
								</div>
							</li>
							<li class="tile divider-full-bleed">
								<div class="tile-content">
									<div class="tile-text">Alumni Details are most considerable during admission</div>
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
		<script src="../../assets/js/libs/nanoscroller/jquery.nanoscroller.min.js"></script>
		<script src="../../assets/js/libs/jquery-validation/dist/jquery.validate.min.js"></script>
		<script src="../../assets/js/libs/jquery-validation/dist/additional-methods.min.js"></script>
		<script src="../../assets/js/libs/wizard/jquery.bootstrap.wizard.min.js"></script>
		<script src="../../assets/js/core/source/App.js"></script>
		<script src="../../assets/js/core/source/AppNavigation.js"></script>
		<script src="../../assets/js/core/source/AppOffcanvas.js"></script>
		<script src="../../assets/js/core/source/AppCard.js"></script>
		<script src="../../assets/js/core/source/AppForm.js"></script>
		<script src="../../assets/js/core/source/AppNavSearch.js"></script>
		<script src="../../assets/js/core/source/AppVendor.js"></script>
		<script src="../../assets/js/core/demo/Demo.js"></script>
		<script src="../../assets/js/core/demo/DemoFormWizard.js"></script>
		<!-- END JAVASCRIPT -->

	</body>
</html>
