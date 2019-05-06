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
		<link href="../assets/css/jquery.dataTables.min.css" rel="stylesheet" media="screen">
		<link href="../assets/css/responsive.dataTables.min.css" rel="stylesheet" media="screen">
        <link href="../assets/css/style.css" rel="stylesheet" media="screen">

        <!-- Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
        <link href="../assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" media="screen">

    </head>
    <body>
	
		<div class="parent-wrapper" id="outer-wrapper">
		<!-- header -->
		<?php include('includes/lecturer-header.php'); ?>

		<!-- SIDE MENU -->
		<?php include('includes/lecturer-sidebar.php'); ?>

		<!-- MAIN CONTENT -->
			<div class="main-content" id="content-wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<h5 class="page-title"><i class="fa fa-calendar"></i>TIMETABLE</h5>
							<div class="section-divider"></div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<div class="col-lg-12">
								<div class="dash-item first-dash-item">
									<h6 class="item-title"><i class="fa fa-calendar"></i>TEACHER TIMETABLE</h6>
									<div class="inner-item">
										<table id="attendenceDetailedTable" class="display responsive nowrap" cellspacing="0" width="100%">
											<thead>
												<tr>
													<th><i class="fa fa-clock-o"></i>TIMINGS</th>
													<th><i class="fa fa-calendar"></i>MONDAY</th>
													<th><i class="fa fa-calendar"></i>TUESDAY</th>
													<th><i class="fa fa-calendar"></i>WEDNESDAY</th>
													<th><i class="fa fa-calendar"></i>THURSDAY</th>
													<th><i class="fa fa-calendar"></i>FRIDAY</th>
													<th><i class="fa fa-calendar"></i>SATURDAY</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>09-10 AM</td>
													<td>
														<span>Lecture: MTH101</span>
														<span>Room: 601</span>
														<span>Class: Std 5</span>
													</td>
													<td>
														
													</td>
													<td>
														<span>Lecture: BIO101</span>
														<span>Room: 302</span>
														<span>Class: Std 6</span>
													</td>
													<td>
														<span>Lecture: PHY101</span>
														<span>Room: 303</span>
														<span>Class: Std 5</span>
													</td>
													<td>
														<span>Lecture: BIO101</span>
														<span>Room: 202</span>
														<span>Class: Std 5</span>
													</td>
													<td>
														
													</td>
												</tr>
												
												<tr>
													<td>010-11 AM</td>
													<td>
														
													</td>
													<td>
														<span>Lecture: MTH101</span>
														<span>Room: 601</span>
														<span>Class: Std 5</span>
													</td>
													<td>
														
													</td>
													<td>
														
													</td>
													<td>
														<span>Lecture: BIO101</span>
														<span>Room: 202</span>
														<span>Class: Std 5</span>
													</td>
													<td>
														<span>Lecture: BIO101</span>
														<span>Room: 302</span>
														<span>Class: Std 6</span>
													</td>
												</tr>
												
												<tr>
													<td>11-12 AM</td>
													<td>
														<span>Lecture: MTH101</span>
														<span>Room: 601</span>
														<span>Class: Std 5</span>
													</td>
													<td>
														
													</td>
													<td>
														<span>Lecture: BIO101</span>
														<span>Room: 302</span>
														<span>Class: Std 6</span>
													</td>
													<td>
														<span>Lecture: PHY101</span>
														<span>Room: 303</span>
														<span>Class: Std 5</span>
													</td>
													<td>
														<span>Lecture: BIO101</span>
														<span>Room: 202</span>
														<span>Class: Std 5</span>
													</td>
													<td>
														
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-12 clear-padding-xs">
							<div class="col-lg-12">
								<div class="dash-item">
									<h6 class="item-title"><i class="fa fa-book"></i>COURSE DETAILS</h6>
									<div class="inner-item">
										<div class="item-header">
											<div class="col-xs-2">
												<h6>COURSE CODE</h6>
											</div>
											<div class="col-xs-4">
												<h6>DESCRIPTION</h6>
											</div>
											<div class="col-xs-2">
												<h6>LECTURE</h6>
											</div>
											<div class="col-xs-2">
												<h6>PRACTICLE</h6>
											</div>
											<div class="col-xs-2">
												<h6>CREDITS</h6>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="tbl-row">
											<div class="col-xs-2">
												<h6>MTH101</h6>
											</div>
											<div class="col-xs-4">
												<h6>Basic Mathematics</h6>
											</div>
											<div class="col-xs-2">
												<h6>3</h6>
											</div>
											<div class="col-xs-2">
												<h6>2</h6>
											</div>
											<div class="col-xs-2">
												<h6>4</h6>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="tbl-row">
											<div class="col-xs-2">
												<h6>PHY101</h6>
											</div>
											<div class="col-xs-4">
												<h6>Current & Electricity</h6>
											</div>
											<div class="col-xs-2">
												<h6>3</h6>
											</div>
											<div class="col-xs-2">
												<h6>2</h6>
											</div>
											<div class="col-xs-2">
												<h6>4</h6>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="tbl-row">
											<div class="col-xs-2">
												<h6>MTH101</h6>
											</div>
											<div class="col-xs-4">
												<h6>Basic Mathematics</h6>
											</div>
											<div class="col-xs-2">
												<h6>3</h6>
											</div>
											<div class="col-xs-2">
												<h6>2</h6>
											</div>
											<div class="col-xs-2">
												<h6>4</h6>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="tbl-row">
											<div class="col-xs-2">
												<h6>PHY101</h6>
											</div>
											<div class="col-xs-4">
												<h6>Current & Electricity</h6>
											</div>
											<div class="col-xs-2">
												<h6>3</h6>
											</div>
											<div class="col-xs-2">
												<h6>2</h6>
											</div>
											<div class="col-xs-2">
												<h6>4</h6>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
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