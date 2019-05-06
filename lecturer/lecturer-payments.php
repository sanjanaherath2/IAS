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
		<!-- HEADER -->
        <?php include('includes/lecturer-header.php'); ?>
        	
		<div class="parent-wrapper" id="outer-wrapper">
		<!-- SIDE MENU -->
		<?php include('includes/lecturer-sidebar.php'); ?>
			
			<!-- MAIN CONTENT -->
			<div class="main-content" id="content-wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<h5 class="page-title"><i class="fa fa-bar-money"></i>FEES</h5>
							<div class="section-divider"></div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<div class="col-lg-12">
								<div class="dash-item first-dash-item">
									<h6 class="item-title"><i class="fa fa-search"></i>VIEW FEE STATUS</h6>
									<div class="inner-item dash-search-form">
										<div class="col-sm-4">
											<label>SESSION</label>
											<select>
												<option>All</option>
												<option>2016 - 2017</option>
												<option>2017 - 2018</option>
											</select>
										</div>
										<div class="col-sm-4">
											<label>FEE TYPE</label>
											<select>
												<option>All</option>
												<option>Academic</option>
												<option>Transport</option>
												<option>Hostel</option>
											</select>
										</div>
										<div class="col-sm-4">
											<button type="submit" class="submit-btn"><i class="fa fa-search"></i>SEARCH</button>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="dash-item">
									<h6 class="item-title"><i class="fa fa-info-circle"></i>FEE DETAILS</h6>
									<div class="inner-item">
										<table id="attendenceDetailedTable" class="display responsive nowrap" cellspacing="0" width="100%">
											<thead>
												<tr>
													<th><i class="fa fa-cogs"></i>FEE TYPE</th>
													<th><i class="fa fa-calendar"></i>DUE DATE</th>
													<th><i class="fa fa-calendar"></i>PAID DATE</th>
													<th><i class="fa fa-cogs"></i>PAYMENT MODE</th>
													<th><i class="fa fa-user"></i>PAID BY</th>
													<th><i class="fa fa-check"></i>STATUS</th>
													<th><i class="fa fa-ban"></i>RECEIPT</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Academic</td>
													<td>17 Jul 2017</td>
													<td>15 Jul 2017</td>
													<td>Credit Card</td>
													<td>Lennore Doe</td>
													<td class="text-success">PAID</td>
													<td><a href="#"><i class="fa fa-download"></i>DOWNLOAD</a></td>
												</tr>
												<tr>
													<td>Hostel</td>
													<td>17 Jul 2017</td>
													<td>15 Jul 2017</td>
													<td>Cash</td>
													<td>Kamal Pancharathna</td>
													<td class="text-success">PAID</td>
													<td><a href="#"><i class="fa fa-download"></i>DOWNLOAD</a></td>
												</tr>
												<tr>
													<td>Transport</td>
													<td>22 Jul 2017</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td class="text-danger">Over Due</td>
													<td>-</td>
												</tr>
												
											</tbody>
										</table>
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