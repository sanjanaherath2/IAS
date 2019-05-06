<!DOCTYPE html>
<html>
    
<head>

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="">
        <title>IAS</title>

        <!-- Styles -->
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
		 <link href="../assets/css/chartist.min.css" rel="stylesheet" media="screen">
		<link href="../assets/css/owl.carousel.min.css" rel="stylesheet" media="screen">
		<link href="../assets/css/owl.theme.default.min.css" rel="stylesheet" media="screen">
        <link href="../assets/css/style.css" rel="stylesheet" media="screen">

        <!-- Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
        <link href="../assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" media="screen">

    </head>
    <body>
			<!-- header -->
			<?php include('includes/cashier-header.php'); ?>
			<div class="parent-wrapper" id="outer-wrapper">

			<!-- SIDE MENU -->
			<?php include('includes/cashier-sidebar.php'); ?>



			<!-- MAIN CONTENT -->
			<div class="main-content" id="content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12 clear-padding-xs">
						<h5 class="page-title"><i class="fa fa-pencil-square-o"></i>MARK PAYMENT</h5>
						<div class="section-divider"></div>
					</div>
				</div>
				<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<div class="col-lg-12">
								<div class="dash-item first-dash-item">
									<div class="inner-item dash-search-form">
                                        
                                            <div class="col-md-4 col-md-offset-4">
												<a href="cashier-student-list.php"><button type="submit" class="submit-btn" name="mark"><i class="fa fa-pencil-square-o"></i>STUDENT FEES</button></a>
                                                
                    						</div>
										
                                            <div class="col-md-4 col-md-offset-4">
                                                <a href="cashier-lecturer-list.php"><button type="submit" class="submit-btn" name="mark"><i class="fa fa-pencil-square-o"></i>LECTURER PAYMENTS</button></a>
                                            </div>
                                            <div class="clearfix"></div>
                                        
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			
			
			<!-- MAIN CONTENT 
			<div class="main-content" id="content-wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<h5 class="page-title"><i class="fa fa-home"></i>HOME</h5>
							<div class="section-divider"></div>
							<div class="dashboard-stats">
								<div class="col-sm-6 col-md-3">
									<div class="stat-item">
										<div class="stats">
											<div class="col-xs-8 count">
												<h1>199</h1>
												<p>STUDENTS</p>
											</div>
											<div class="col-xs-4 icon">
												<i class="fa fa-users ex-icon"></i>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="status">
											<p class="text-ex"><i class="fa fa-pencil-square-o"></i>10 Absent Today</p>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="col-sm-6 col-md-3">
									<div class="stat-item">
										<div class="stats">
											<div class="col-xs-8 count">
												<h1>111</h1>
												<p>TEACHERS</p>
											</div>
											<div class="col-xs-4 icon">
												<i class="fa fa-user-secret danger-icon"></i>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="status">
											<p class="text-danger"><i class="fa fa-exclamation-triangle"></i>5 On Leave Today</p>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="clearfix visible-sm"></div>
								<div class="col-sm-6 col-md-3">
									<div class="stat-item">
										<div class="stats">
											<div class="col-xs-8 count">
												<h1>900</h1>
												<p>EVENTS</p>
											</div>
											<div class="col-xs-4 icon">
												<i class="fa fa-flag look-icon"></i>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="status">
											<p class="text-look"><i class="fa fa-clock-o"></i>1 Event tomorrow</p>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="col-sm-6 col-md-3">
									<div class="stat-item">
										<div class="stats">
											<div class="col-xs-8 count">
												<h1>799</h1>
												<p>MESSAGES</p>
											</div>
											<div class="col-xs-4 icon">
												<i class="fa fa-envelope-o success-icon"></i>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="status">
											<p class="text-success"><i class="fa fa-folder-open-o"></i>10 Unread messages</p>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<div class="col-sm-8">
								<div>
									<div class="my-msg dash-item">
										<h6 class="item-title"><i class="fa fa-bar-chart"></i>STUDENT ATTENDENCE TREND</h6>
										<div class="inner-item">
											<div class="summary-chart">
												<canvas id="studentAttendenceLine" height="100px"></canvas>
												<div class="chart-legends">
													<span class="red">ABSENT</span>
													<span class="orange">ON LEAVE</span>
													<span class="green">PRESENT</span>
												</div>
												<div class="chart-title">
													<h6 class="bottom-title">STUDENT ATTENDENCE TREND</h6>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div>
									<div class="my-msg dash-item">
										<h6 class="item-title"><i class="fa fa-calendar"></i>TODAY'S TASK</h6>
										<div class="inner-item">
											<div class="timetable-item">
												<div class="col-xs-3 clear-padding">
													<p><span class="time">10 AM</span></p>
												</div>
												<div class="col-xs-9">
													<p class="title">Teacher Meeting</p>
													<p class="sent-by"><i class="fa fa-map-marker"></i> ROOM NO - 601</p>
												</div>
												<div class="clearfix"></div>
											</div>
											<div class="timetable-item">
												<div class="col-xs-3 clear-padding">
													<p><span class="time">11 AM</span></p>
												</div>
												<div class="col-xs-9">
													<p class="title">Campus Tour</p>
													<p class="sent-by"><i class="fa fa-map-marker"></i> CAMPUS</p>
													
												</div>
												<div class="clearfix"></div>
											</div>
											<div class="timetable-item">
												<div class="col-xs-3 clear-padding">
													<p><span class="time">12 PM</span></p>
												</div>
												<div class="col-xs-9">
													<p class="title">Parent Meeting</p>
													<p class="sent-by"><i class="fa fa-map-marker"></i> ROOM NO - 601</p>
													
												</div>
												<div class="clearfix"></div>
											</div>
											<div class="timetable-item">
												<div class="col-xs-3 clear-padding">
													<p><span class="time">01 PM</span></p>
												</div>
												<div class="col-xs-9">
													<p class="title">Guest Lecture</p>
													<p class="sent-by"><i class="fa fa-map-marker"></i> ROOM NO - 601</p>
													
												</div>
												<div class="clearfix"></div>
											</div>
											<div class="timetable-item">
												<div class="col-xs-3 clear-padding">
													<p><span class="time">02 PM</span></p>
												</div>
												<div class="col-xs-9">
													<p class="title">Teacher Meeting</p>
													<p class="sent-by"><i class="fa fa-map-marker"></i> ROOM NO - 601</p>
												</div>
												<div class="clearfix"></div>
											</div>
											
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<div class="col-sm-8">
								<div>
									<div class="my-msg dash-item">
										<h6 class="item-title"><i class="fa fa-bar-chart"></i>TODAY'S STUDENT ATTENDENCE</h6>
										<div class="inner-item">
											<div class="summary-chart">
												<canvas id="studentAttendenceBar" height="100px"></canvas>
												<div class="chart-legends">
													<span class="red">ABSENT</span>
													<span class="orange">ON LEAVE</span>
													<span class="green">PRESENT</span>
												</div>
												<div class="chart-title">
													<h6 class="bottom-title">STUDENT ATTENDENCE BAR</h6>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div>
									<div class="my-msg dash-item">
										<h6 class="item-title"><i class="fa fa-pie-chart"></i>TEACHER ATTENDENCE</h6>
										<div class="chart-item">
											<canvas id="studentPie" height = 250px></canvas>
											<div class="chart-legends">
												<span class="red">ABSENT</span>
												<span class="orange">PRESENT</span>
												<span class="green">LEAVE</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<div class="col-md-12">
								<div class="my-msg dash-item">
									<h6 class="item-title"><i class="fa fa-bullhorn"></i>ANNOUNCEMENTS</h6>
									<div class="inner-item dashboard-tabs">
										<ul class="nav nav-tabs">
											<li class="active">
												<a  href="#1" data-toggle="tab"><i class="fa fa-graduation-cap"></i><span>ACADEMICS</span></a>
											</li>
											<li>								
												<a href="#2" data-toggle="tab"><i class="fa fa-users"></i><span>ADMISSIONS</span></a>
											</li>
											<li>								
												<a href="#3" data-toggle="tab"><i class="fa fa-trophy"></i><span>SPORTS</span></a>
											</li>
										</ul>
										<div class="tab-content">
											<div class="tab-pane active" id="1">
												<div class="announcement-item">
													<h5>Guest lecture on fine arts by Smith.<span class="new">New</span></h5>
													<h6><i class="fa fa-clock-o"></i>06-24-2017, 13:34</h6>
													<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
													<div class="posted-by">
														<p>Thanks,</p>
														<h6>Kamal Pancharathna, Principal</h6>
													</div>
												</div>
												<div class="announcement-item">
													<h5>Guest lecture on fine arts by Smith</h5>
													<h6><i class="fa fa-clock-o"></i>06-24-2017, 13:34</h6>
													<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
													<div class="posted-by">
														<p>Thanks,</p>
														<h6>Kamal Pancharathna, Principal</h6>
													</div>
												</div>
											</div>
											<div class="tab-pane" id="2">
												<div class="announcement-item">
													<h5>2</h5>
												</div>
											</div>
											<div class="tab-pane" id="3">
												<div class="announcement-item">
													<h5>3</h5>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>-->
				<div class="menu-togggle-btn">
					<a href="#menu-toggle" id="menu-toggle"><i class="fa fa-bars"></i></a>
				</div>
				<div class="dash-footer col-lg-12">
					<p>IAS. Copyright 2018. All Rights Reserved.</p>
				</div>
			</div>
		</div>
	
		<!-- Scripts -->
        <script src="../assets/js/jQuery_v3_2_0.min.js"></script>
		<script src="../assets/js/jquery-ui.min.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
		<script src="../assets/plugins/owl.carousel.min.js"></script>
		<script src="../assets/plugins/Chart.min.js"></script>
		<script src="../assets/plugins/jquery.dataTables.min.js"></script>
		<script src="../assets/plugins/dataTables.responsive.min.js"></script>
        <script src="../assets/js/js.js"></script>
		
    </body>
<script>'undefined'=== typeof _trfq || (window._trfq = []);'undefined'=== typeof _trfd && (window._trfd=[]),_trfd.push({'tccl.baseHost':'secureserver.net'}),_trfd.push({'ap':'cpsh'},{'server':'a2plcpnl0381'}) // Monitoring performance to make your website faster. If you want to opt-out, please contact web hosting support.</script><script src='../../../../../../img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js'></script>

</html>