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
			<!-- header -->
			<?php include('includes/tute-issuer-header.php'); ?>
			<div class="parent-wrapper" id="outer-wrapper">

			<!-- SIDE MENU -->
			<?php include('includes/tute-issuer-sidebar.php'); ?>

			<!-- MAIN CONTENT -->
			<div class="main-content" id="content-wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<h5 class="page-title"><i class="fa fa-users"></i>ISSUED TUTES</h5>
							<div class="section-divider"></div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<div class="col-lg-12">
								<div class="dash-item first-dash-item">
									<h6 class="item-title"><i class="fa fa-user"></i>TUTES</h6>
									<div class="inner-item">
										<table id="attendenceDetailedTable" class="display responsive nowrap" cellspacing="0" width="100%">
											<thead>
												<tr>
													<th><i class="fa fa-book"></i>TUTE ID</th>
													<th><i class="fa fa-user"></i>STUDENT ID</th>
													<th><i class="fa fa-book"></i>SUBJECT ID</th>
													<th><i class="fa fa-cogs"></i>LECTURER ID</th>
                                                    <th><i class="fa fa-user"></i>TUTE ISSUER</th>
												</tr>
											</thead>
											<tbody>
											<?php
											$sql = "SELECT * FROM `tute_issue` ";
											$result = mysqli_query($connection, $sql);

											while($row = $result->fetch_assoc()) {
											 echo 
												"<tr>
                                                    <td> ".$row['student_id']."</td>
                                                    <td> ".$row['tute_id']."</td>";   
                                                
                                                    $lecturer_id = $row['lecturer_id']; 
                                                    $subject_id = $row['subject_id']; 
                                                    $tute_issuer_name = $row['tute_issuer_name']; 
                                                
                                                    $selectsubject = "SELECT * FROM subjects WHERE subject_id='$subject_id'";
                                                    $subjectquery = mysqli_query($connection,$selectsubject);
                                                        while($row = mysqli_fetch_assoc($subjectquery)){                           
                                                                echo "<td>".$row['subject_id'] . " - " . $row['subject_name']."</td>";
                                                        }
                                                                                                     
                                                    $selectlecturer = "SELECT * FROM lecturers WHERE lecturer_id='$lecturer_id'";
                                                    $lecturerquery = mysqli_query($connection,$selectlecturer);
                                                        while($row = mysqli_fetch_assoc($lecturerquery)){                           
                                                                echo "<td>".$row['lecturer_id'] . " - " . $row['first_name'] . " " . $row['last_name']."</td>";
                                                        }
                                                
                                                    echo "
                                                    <td>".$tute_issuer_name."</td>
												</tr>";

												}
												?>												
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