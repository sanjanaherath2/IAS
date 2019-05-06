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
        <?php include('includes/admin-header.php'); ?>
        	
		<div class="parent-wrapper" id="outer-wrapper">
			<!-- SIDE MENU -->
			<?php include('includes/admin-sidebar.php'); ?>
			
			<!-- MAIN CONTENT -->
			<div class="main-content" id="content-wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<h5 class="page-title"><i class="fa fa-users"></i>LECTURE TIMETABLE</h5>
							<div class="section-divider"></div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<div class="col-lg-12">
								<div class="dash-item first-dash-item">
									<h6 class="item-title"><i class="fa fa-search"></i>MAKE SELECTION</h6>
									<div class="inner-item dash-search-form">
										<div class="col-sm-4">
											<label>CLASS</label>
											<select>
												<option>5th STD</option>
												<option>6th STD</option>
												<option>7th STD</option>
											</select>
										</div>
										<div class="col-sm-4">
											<label>SECTION</label>
											<select>
												<option>PTH05A</option>
												<option>PTH05B</option>
												<option>PTH06A</option>
												<option>PTH06B</option>
											</select>
										</div>
										<div class="col-sm-4">
											<button type="submit" class="submit-btn"><i class="fa fa-search"></i>SELECT</button>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="dash-item">
									<h6 class="item-title"><i class="fa fa-edit"></i>EDIT TIMETABLE</h6>
									<div class="inner-item">
										<table id="attendenceDetailedTable" class="display responsive nowrap" cellspacing="0" width="100%">
											<tbody>
												<tr>
                                                    <td>
                                                        <b><i class="fa fa-clock-o"></i> TIME</b>
                                                    </td>
													  <?php
                                                        $sql = "SELECT * FROM `lecture_schedule` ";
											            $result = mysqli_query($connection, $sql);

											             while($row = $result->fetch_assoc()) {
											             echo 
                                                             "<td>".$row['start_time']." - ".$row['end_time']."</td>";
                                                         }
                                                        ?>
                                                    
													<td>
														<span>Lecture: MTH101</span>
														<span>Room: 601</span>
														<span>Teacher: John</span>
													</td> 
													<td>
														<span>Lecture: PHY101</span>
														<span>Room: 303</span>
														<span>Teacher: Lennore</span>
													</td>
													<td>
														<span>Lecture: BIO101</span>
														<span>Room: 302</span>
														<span>Teacher: John</span>
													</td>
													<td>
														<span>Lecture: PHY101</span>
														<span>Room: 303</span>
														<span>Teacher: Lennore</span>
													</td>
													<td>
														<span>Lecture: BIO101</span>
														<span>Room: 202</span>
														<span>Teacher: John</span>
													</td>
													<td>
														<span>Lecture: MTH101</span>
														<span>Room: 601</span>
														<span>Teacher: John</span>
													</td>
                                                    <td>
														<span>Lecture: MTH101</span>
														<span>Room: 601</span>
														<span>Teacher: John</span>
													</td>
												</tr>
                                                <tr>
                                                    <td>
                                                        <b><i class="fa fa-calendar-o"></i> MONDAY</b>
                                                    </td>
													<td>
														<span>Lecture: MTH101</span>
														<span>Room: 601</span>
														<span>Teacher: John</span>
													</td> 
													<td>
														<span>Lecture: PHY101</span>
														<span>Room: 303</span>
														<span>Teacher: Lennore</span>
													</td>
													<td>
														<span>Lecture: MTH101</span>
														<span>Room: 601</span>
														<span>Teacher: John</span>
													</td> 
													<td>
														<span>Lecture: PHY101</span>
														<span>Room: 303</span>
														<span>Teacher: Lennore</span>
													</td>
													<td>
														<span>Lecture: BIO101</span>
														<span>Room: 302</span>
														<span>Teacher: John</span>
													</td>
													<td>
														<span>Lecture: PHY101</span>
														<span>Room: 303</span>
														<span>Teacher: Lennore</span>
													</td>
													<td>
														<span>Lecture: BIO101</span>
														<span>Room: 202</span>
														<span>Teacher: John</span>
													</td>
													<td>
														<span>Lecture: MTH101</span>
														<span>Room: 601</span>
														<span>Teacher: John</span>
													</td>
                                                    <td>
														<span>Lecture: MTH101</span>
														<span>Room: 601</span>
														<span>Teacher: John</span>
													</td>
												</tr>
                                                <tr>
                                                    <td>
                                                        <b><i class="fa fa-calendar-o"></i> TUESDAY</b>
                                                    </td>
													<td>
														<span>Lecture: MTH101</span>
														<span>Room: 601</span>
														<span>Teacher: John</span>
													</td> 
													<td>
														<span>Lecture: PHY101</span>
														<span>Room: 303</span>
														<span>Teacher: Lennore</span>
													</td>
													<td>
														<span>Lecture: MTH101</span>
														<span>Room: 601</span>
														<span>Teacher: John</span>
													</td> 
													<td>
														<span>Lecture: PHY101</span>
														<span>Room: 303</span>
														<span>Teacher: Lennore</span>
													</td>
													<td>
														<span>Lecture: BIO101</span>
														<span>Room: 302</span>
														<span>Teacher: John</span>
													</td>
													<td>
														<span>Lecture: PHY101</span>
														<span>Room: 303</span>
														<span>Teacher: Lennore</span>
													</td>
													<td>
														<span>Lecture: BIO101</span>
														<span>Room: 202</span>
														<span>Teacher: John</span>
													</td>
													<td>
														<span>Lecture: MTH101</span>
														<span>Room: 601</span>
														<span>Teacher: John</span>
													</td>
                                                    <td>
														<span>Lecture: MTH101</span>
														<span>Room: 601</span>
														<span>Teacher: John</span>
													</td>
												</tr>
                                                <tr>
                                                    <td>
                                                        <b><i class="fa fa-calendar-o"></i> WEDNESDAY</b>
                                                    </td>
													<td>
														<span>Lecture: MTH101</span>
														<span>Room: 601</span>
														<span>Teacher: John</span>
													</td> 
													<td>
														<span>Lecture: PHY101</span>
														<span>Room: 303</span>
														<span>Teacher: Lennore</span>
													</td>
													<td>
														<span>Lecture: MTH101</span>
														<span>Room: 601</span>
														<span>Teacher: John</span>
													</td> 
													<td>
														<span>Lecture: PHY101</span>
														<span>Room: 303</span>
														<span>Teacher: Lennore</span>
													</td>
													<td>
														<span>Lecture: BIO101</span>
														<span>Room: 302</span>
														<span>Teacher: John</span>
													</td>
													<td>
														<span>Lecture: PHY101</span>
														<span>Room: 303</span>
														<span>Teacher: Lennore</span>
													</td>
													<td>
														<span>Lecture: BIO101</span>
														<span>Room: 202</span>
														<span>Teacher: John</span>
													</td>
													<td>
														<span>Lecture: MTH101</span>
														<span>Room: 601</span>
														<span>Teacher: John</span>
													</td>
                                                    <td>
														<span>Lecture: MTH101</span>
														<span>Room: 601</span>
														<span>Teacher: John</span>
													</td>
												</tr>
                                                <tr>
                                                    <td>
                                                        <b><i class="fa fa-calendar-o"></i> THURSDAY</b>
                                                    </td>
													<td>
														<span>Lecture: MTH101</span>
														<span>Room: 601</span>
														<span>Teacher: John</span>
													</td> 
													<td>
														<span>Lecture: PHY101</span>
														<span>Room: 303</span>
														<span>Teacher: Lennore</span>
													</td>
													<td>
														<span>Lecture: MTH101</span>
														<span>Room: 601</span>
														<span>Teacher: John</span>
													</td> 
													<td>
														<span>Lecture: PHY101</span>
														<span>Room: 303</span>
														<span>Teacher: Lennore</span>
													</td>
													<td>
														<span>Lecture: BIO101</span>
														<span>Room: 302</span>
														<span>Teacher: John</span>
													</td>
													<td>
														<span>Lecture: PHY101</span>
														<span>Room: 303</span>
														<span>Teacher: Lennore</span>
													</td>
													<td>
														<span>Lecture: BIO101</span>
														<span>Room: 202</span>
														<span>Teacher: John</span>
													</td>
													<td>
														<span>Lecture: MTH101</span>
														<span>Room: 601</span>
														<span>Teacher: John</span>
													</td>
                                                    <td>
														<span>Lecture: MTH101</span>
														<span>Room: 601</span>
														<span>Teacher: John</span>
													</td>
												</tr>
                                                <tr>
                                                    <td>
                                                        <b><i class="fa fa-calendar-o"></i> FRIDAY</b>
                                                    </td>
													<td>
														<span>Lecture: MTH101</span>
														<span>Room: 601</span>
														<span>Teacher: John</span>
													</td> 
													<td>
														<span>Lecture: PHY101</span>
														<span>Room: 303</span>
														<span>Teacher: Lennore</span>
													</td>
													<td>
														<span>Lecture: MTH101</span>
														<span>Room: 601</span>
														<span>Teacher: John</span>
													</td> 
													<td>
														<span>Lecture: PHY101</span>
														<span>Room: 303</span>
														<span>Teacher: Lennore</span>
													</td>
													<td>
														<span>Lecture: BIO101</span>
														<span>Room: 302</span>
														<span>Teacher: John</span>
													</td>
													<td>
														<span>Lecture: PHY101</span>
														<span>Room: 303</span>
														<span>Teacher: Lennore</span>
													</td>
													<td>
														<span>Lecture: BIO101</span>
														<span>Room: 202</span>
														<span>Teacher: John</span>
													</td>
													<td>
														<span>Lecture: MTH101</span>
														<span>Room: 601</span>
														<span>Teacher: John</span>
													</td>
                                                    <td>
														<span>Lecture: MTH101</span>
														<span>Room: 601</span>
														<span>Teacher: John</span>
													</td>
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
		
		<!-- Delete Modal -->
				<div id="deleteDetailModal" class="modal fade" role="dialog">
					<div class="modal-dialog">
						<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title"><i class="fa fa-trash"></i>DELETE SLOT</h4>
							</div>
							<div class="modal-body">
								<div class="table-action-box">
									<a href="#" class="save"><i class="fa fa-check"></i>YES</a>
									<a href="#" class="cancel" data-dismiss="modal"><i class="fa fa-ban"></i>CLOSE</a>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
				</div>
				
				
				<!--Edit details modal-->
				<div id="editDetailModal" class="modal fade" role="dialog">
					<div class="modal-dialog">
						<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title"><i class="fa fa-edit"></i>EDIT SLOT DETAILS</h4>
							</div>
							<div class="modal-body dash-form">
								<div class="col-sm-3">
									<label class="clear-top-margin"><i class="fa fa-clock-o"></i>SLOT</label>
									<select>
										<option>09 - 10 AM </option>
										<option>09 - 10 AM </option>
										<option>10 - 11 AM </option>
										<option>11 - 12 PM </option>
									</select>
								</div>
								<div class="col-sm-3">
									<label class="clear-top-margin"><i class="fa fa-calendar"></i>MONDAY</label>
									<select>
										<option>MTH101 </option>
										<option>PHY101</option>
										<option>BIO101</option>
										<option>CHE101</option>
									</select>
								</div>
								<div class="col-sm-3">
									<label class="clear-top-margin"><i class="fa fa-calendar"></i>TUESDAY</label>
									<select>
										<option>MTH101 </option>
										<option>PHY101</option>
										<option>BIO101</option>
										<option>CHE101</option>
									</select>
								</div>
								<div class="col-sm-3">
									<label class="clear-top-margin"><i class="fa fa-calendar"></i>WEDNESDAY</label>
									<select>
										<option>MTH101 </option>
										<option>PHY101</option>
										<option>BIO101</option>
										<option>CHE101</option>
									</select>
								</div>
								<div class="clearfix"></div>
								<div class="col-sm-3">
									<label><i class="fa fa-calendar"></i>THURSDAY</label>
									<select>
										<option>MTH101 </option>
										<option>PHY101</option>
										<option>BIO101</option>
										<option>CHE101</option>
									</select>
								</div>
								<div class="col-sm-3">
									<label><i class="fa fa-calendar"></i>FRIDAY</label>
									<select>
										<option>MTH101 </option>
										<option>PHY101</option>
										<option>BIO101</option>
										<option>CHE101</option>
									</select>
								</div>
								<div class="col-sm-3">
									<label><i class="fa fa-calendar"></i>SATURDAY</label>
									<select>
										<option>MTH101 </option>
										<option>PHY101</option>
										<option>BIO101</option>
										<option>CHE101</option>
									</select>
								</div>
								<div class="clearfix"></div>
                                <div class="col-sm-3">
									<label><i class="fa fa-calendar"></i>SUNDAY</label>
									<select>
										<option>MTH101 </option>
										<option>PHY101</option>
										<option>BIO101</option>
										<option>CHE101</option>
									</select>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="modal-footer">
								<div class="table-action-box">
									<a href="#" class="save"><i class="fa fa-check"></i>SAVE</a>
									<a href="#" class="cancel" data-dismiss="modal"><i class="fa fa-ban"></i>CLOSE</a>
								</div>
							</div>
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