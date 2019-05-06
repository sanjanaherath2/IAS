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
        	
			<!-- MAIN CONTENT -->
			<div class="main-content" id="content-wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<div class="col-md-12">
								<div class="first-dash-item">
									<div class="inner-item">
                                        
                                        <?php include('../includes/connection.php'); ?>
                                        
                                        <?php
                                           

                                                include('../includes/connection.php');
                                                include('../includes/session.php');
                                                checkSession();

                                                    // Assign input data from form to variables
                                                    echo "
                                                        <div class=\"row\">
                                                            <div class=\"col-lg-3 clear-padding-xs\" style=\"border: 2px solid #333; padding: 21px;\">
                                                                <div class=\"col-lg-12 clear-padding-xs\">
                                                                    <img src=\"../assets/img/ias-logo-card.png\" width=\"250px\" height=\"80px\" \">
                                                                </div>
                                                                <div class=\"section-divider\" style=\"margin: 88px 15px 30px;\"></div>
                                                                <div class=\"col-lg-12 clear-padding-xs\" style=\"padding-left: 20px;\">
                                                                    <h3><b>MONTHLY FEE RECEIPT</b></h3>
                                                                    <br>
                                                                    <h3>Student ID: <b>".$_SESSION['st_id']."</b></h3>
                                                                    <h3>Subject ID: <b>".$_SESSION['su_id']."</b></h3>
                                                                    <h3>Lecturer ID: <b>".$_SESSION['le_id']."</b></h3>
                                                                    <h3>Amount: <b>".$_SESSION['amt']."</b></h3>
                                                                    <h3>Month: <b>".$_SESSION['mt']."</b></h3>
                                                                    <h3>Year: <b>".$_SESSION['yr']."</b></h3>
                                                                    <h3>Cashier: <b>".$_SESSION['cn']."</b></h3>
                                                                    <br>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    ";
                                                    echo "
                                                    <br>
                                                    <form method=\"POST\" action=\"cashier-student-pay-receipt.php\">
                                                    <input type=\"submit\" class=\"delete-btn\" name=\"finish\" value=\"Finish\">
                                                    </form>";
                                                if(isset($_POST['finish'])) {
                                                    $message = base64_encode(urlencode("Payment Made Successfully"));
                                                    header('Location:cashier-student-list.php?msg=' . $message);
                                                    exit();
                                                }
                                                
                                            
                                        ?>
                                        
                                        
                                        
                                        
                                        
										<div class="clearfix"></div>
									</div>
									<div class="clearfix"></div>
								</div>
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