<?php
include('../includes/connection.php');
include('../includes/session.php');
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
		<link href="../assets/css/jquery.dataTables.min.css" rel="stylesheet" media="screen">
		<link href="../assets/css/responsive.dataTables.min.css" rel="stylesheet" media="screen">
        <link href="../assets/css/style.css" rel="stylesheet" media="screen">

        <!-- Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
        <link href="../assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" media="screen">

</head>
    <body>
		<!-- HEADER -->
        <?php include('includes/cashier-header.php'); ?>
        	
		<div class="parent-wrapper" id="outer-wrapper">
			<!-- SIDE MENU -->
			<?php include('includes/cashier-sidebar.php'); ?>
			
			<!-- MAIN CONTENT -->
			<div class="main-content" id="content-wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<h5 class="page-title"><i class="fa fa-users"></i>INCOME STATMENT</h5>
							<div class="section-divider"></div>
						</div>
						<div class="col-lg-12 clear-padding-xs">
							<h5 class="page-title">STATEMENT OF INCOME AND EXPENSES FOR THE YEAR ENDED 20xx</h5>
							<div class="section-divider"></div>
						</div> 
					</div>
                    <h2 class="error-msg"><?php include_once('../includes/message.php'); ?></h2>
					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<div class="col-lg-12">
								<div class="dash-item first-dash-item">
	
									<div class="inner-item">
                                         <form action="cashier-income-statement.php" method="post">
                                                        <div class="dash-form">
                                                            <div class="col-sm-4">
                                                                <label class="clear-top-margin"><i class="fa fa-user-circle-o"></i>YEAR</label>
                                                                <select name="year" required>
                                                                    <option>-- Select --</option>
                                                                    <option>2016</option>
                                                                    <option>2017</option>
                                                                    <option>2018</option>
                                                                    <option>2019</option>
                                                                    <option>2020</option>
                                                                    <option>2021</option>
                                                                    <option>2022</option>
                                                                    <option>2023</option>
                                                                    <option>2024</option>
                                                                    <option>2025</option>
                                                                    <option>2026</option>
                                                                    <option>2027</option>
                                                                    <option>2028</option>
                                                                    <option>2029</option>
                                                                    <option>2030</option>
                                                                    <option>2031</option>
                                                                    <option>2032</option>
                                                                    <option>2033</option>
                                                                    <option>2034</option>
                                                                    <option>2035</option>
                                                                    <option>2036</option>
                                                                    <option>2037</option>
                                                                    <option>2038</option>
                                                                    <option>2039</option>
                                                                    <option>2040</option>
                                                                    <option>2041</option>
                                                                    <option>2042</option>
                                                                    <option>2043</option>
                                                                    <option>2044</option>
                                                                    <option>2045</option>
                                                                    <option>2046</option>
                                                                    <option>2047</option>
                                                                    <option>2048</option>
                                                                    <option>2049</option>
                                                                    <option>2050</option>
                                                                </select>
                                                                
                                                            </div>
                                                            
                                                            <div class="col-sm-4">
                                                                <br>
                                                                <input style="background-color:#ed1d24; color:#fff; margin-top:8px;" type="submit" value="SEARCH" name="submit">
                                                            </div> 
                                                            
                                                        </div>
                                                    </form>
                                                                            
                                        <div class="col-lg-12"><br></div> 
										<table id="attendenceDetailedTable" - cellspacing="0" width="100%">
										<div class="inner-item">
										
											<thead>
												<tr>
													<th><i class="fa fa-user"></i>DESCRIPTION</th>
													<th><i class="fa fa-id-card"></i>RS.</th>
													
                                                    													
												</tr>
											</thead>
											<tbody>
												<?php 
                                                    if(isset($_POST['submit'])){
													$totalincome = 0;   
													$sqlsubject = "SELECT * FROM `subjects` ";
													$resultsubject = mysqli_query($connection, $sqlsubject);
													while($rowsubject = $resultsubject->fetch_assoc()) {
													
														"<tr>
														<td> ".$rowsubject['subject_id']."</td>";
														$sid = $rowsubject['subject_id'];
														$sqlamount = "SELECT amount FROM `monthly_fee` WHERE subject_id='$sid'";
														$resultamount = mysqli_query($connection, $sqlamount);
														$totalAmount = 0;
														while($rowamount = $resultamount->fetch_assoc()) {                                  
															$totalAmount = $totalAmount + $rowamount['amount']; 
														}
														"<td> ".$totalAmount."</td>";
														$totalincome = $totalincome + $totalAmount;                                               
														
														
														
														}
														echo"</tr>"
														echo"
														<tr>
															<td>TOTAL INCOME (MONTHLY FEES) </td>
															<td>$totalincome</td>
															
														</tr>
														";

														$totalSalary = 0;
														$sqlsubject = "SELECT * FROM `subjects` ";
														$resultsubject = mysqli_query($connection, $sqlsubject);
														while($rowsubject = $resultsubject->fetch_assoc()) {
														 
															"<tr>
															<td> ".$rowsubject['subject_id']."</td>";
															$lid = $rowsubject['subject_id'];
															$sqlamount = "SELECT amount FROM `salary` WHERE subject_id= '$lid' ";
															$resultamount = mysqli_query($connection, $sqlamount);
															$totalAmount = 0;
															while($rowamount = $resultamount->fetch_assoc()) {
																 $totalAmount = $totalAmount + $rowamount['amount']; 
															}
															"<td> ".$totalAmount."</td>"; 
															 $totalSalary = $totalSalary + $totalAmount;
															
															echo"</tr>                                                    
															";
															}
															echo"
															<tr>
																<td>TOTAL EXPENSES (SALARY PAYMENTS)</td>
																<td>$totalSalary</td>
															</tr>
															";
															$profit= 0; 
															echo
                                                                "<tr>
                                                                <td> ".$profit."</td>"; 
															 $profit = $totalincome-$totalSalary ;
															
															echo"</tr>                                                    
															";
															
															echo"
															<tr>
																<td>PROFIT FOR THE YEAR</td>
																<td>$profit</td>
															</tr>
															";
															
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
				

                        <!-- Scripts -->
                        <script src="../assets/js/jQuery_v3_2_0.min.js"></script>
                        <script src="../assets/js/jquery-ui.min.js"></script>
                        <script src="../assets/js/bootstrap.min.js"></script>
                        <script src="../assets/plugins/owl.carousel.min.js"></script>
                        <script src="../assets/plugins/Chart.min.js"></script>
                        <script src="../assets/plugins/jquery.dataTables.min.js"></script>
                        <script src="../assets/plugins/dataTables.responsive.min.js"></script>
                        <script src="../assets/js/js.js"></script>
            </div>
        </div>	
    </body>
<script>'undefined'=== typeof _trfq || (window._trfq = []);'undefined'=== typeof _trfd && (window._trfd=[]),_trfd.push({'tccl.baseHost':'secureserver.net'}),_trfd.push({'ap':'cpsh'},{'server':'a2plcpnl0381'}) // Monitoring performance to make your website faster. If you want to opt-out, please contact web hosting support.</script><script src='../../../../../../img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js'></script>

</html>
