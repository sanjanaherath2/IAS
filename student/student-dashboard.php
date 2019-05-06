<?php

include('../includes/connection.php');

session_start();

$userid = $_SESSION["userID"];
$first_name = ['first_name']
?>
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
        
		<!-- HEADER -->
        <?php include('includes/student-header.php'); ?>
        	
		<div class="parent-wrapper" id="outer-wrapper">
			<!-- SIDE MENU -->
			<?php include('includes/student-sidebar.php'); ?>
			
			<!-- MAIN CONTENT -->
			<div class="main-content" id="content-wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<div class="section-divider"></div>
						</div>
					</div>
                    <div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<div class="col-lg-12">
								<div class="dash-item first-dash-item">
									<div class="inner-item dash-search-form">
                                        <h2 class="error-msg">INSTITUTE FOR ACCOUNTING STUDIES</h2>
                                            <div class="col-md-4 col-md-offset-4">
												<a href="student-attendance.php"><button type="submit" class="submit-btn" name="mark"><i class="fa fa-pencil-square-o"></i>MY ATTENDANCE</button></a>
                    						</div>
										
                                            <div class="col-md-4 col-md-offset-4">
                                                <a href="student-fees-payments.php"><button type="submit" class="submit-btn" name="mark"><i class="fa fa-pencil-square-o"></i>MY FEE PAYMENTS</button></a>
                                            </div>
                                            
                                            <div class="col-md-4 col-md-offset-4">
                                                <a href="student-tutes-download.php"><button type="submit" class="submit-btn" name="mark"><i class="fa fa-pencil-square-o"></i>MY TUTES</button></a>
                                            </div>
                                            <div class="clearfix"></div>
                                        
									</div>
								</div>
							</div>
						</div>
					</div>
                    <h2 class="error-msg"><?php include_once('../includes/message.php'); ?></h2>
					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<div class="col-lg-12">
								<div class="dash-item first-dash-item">
									<h6 class="item-title"><i class="fa fa-user"></i>Profile Details</h6>
									<div class="inner-item">
										<table id="attendenceDetailedTable" class="display responsive nowrap" cellspacing="0" width="100%">
                                            <?php
                                                
                                                $sql = "SELECT * FROM `students` where student_id = '$userid' ";
                                                $result = mysqli_query($connection, $sql);

                                                while($row = $result->fetch_assoc()) {
                                                 echo"   
											<thead>
                                                
											</thead>
											<tbody>";
											
                                                 echo 
                                                    "
													<tr>
                                                    <td><b> IMAGE </b></b></td>
													<td><b> FIRST NAME </b></b></td>
													<td><b> LAST NAME </b></td>
													<td><b> ADDRESS </b></td>
													<td><b> DOB </b></td>
													<td><b> NIC </b></td>
													<td><b> PHONE </b></td>
													<td><b> EMAIL </b></td>
                                                    <td><b> PASSWORD </b></td>
													</tr>
													
													";
													
												echo 
                                                    "
													<tr>
                                                        <td><img src=\"../uploads/students/photos/{$row['photo']}\"></td>
                                                        <td> ".$row['first_name']."</td>
                                                        <td> ".$row['last_name']."</td>
                                                        <td> ".$row['address']."</td>
                                                        <td> ".$row['dob']."</td>
                                                        <td> ".$row['nic']."</td>
                                                        <td> ".$row['phone']."</td>
                                                        <td> ".$row['email']."</td>
                                                        <td><a href=\"student-dashboard-inner.php\"><button type=\"submit\" class=\"submit-btn\" name=\"change\"><i class=\"fa fa-key\"></i>Change Password</button></a></td>
													</tr>
													
                                                    ";
                                                    }
								            echo"												
											</tbody>";
                                            ?>
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