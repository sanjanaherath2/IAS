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
                                            if(isset($_POST['submit'])){

                                                $student_id = $_POST['student_id'];
                                                $selectusers = "SELECT * FROM students WHERE student_id ='$student_id' ";
                                                $userquery = mysqli_query($connection,$selectusers);
                                                while($row = mysqli_fetch_assoc($userquery)){
                                                    echo "
                                                        <div class=\"row\">
                                                            <div class=\"col-lg-7 clear-padding-xs\" style=\"border: 2px solid #333; padding: 21px;\">
                                                                <div class=\"col-lg-12 clear-padding-xs\">
                                                                    <img src=\"../assets/img/ias-logo-card.png\" width=\"250px\" height=\"80px\" \">
                                                                </div>
                                                                <div class=\"section-divider\" style=\"margin: 88px 15px 30px;\"></div>
                                                                <div class=\"col-lg-4 clear-padding-xs\">
                                                                    <img src=\"../uploads/students/photos/".$row['photo']."\" width=\"400px\" height=\"400px\" \">
                                                                </div>
                                                                <div class=\"col-lg-8 clear-padding-xs\" style=\"padding-left: 200px;\">
                                                                    <br>
                                                                    <h3>Name: <b>".$row['first_name']." ".$row['last_name']."</b></h3>
                                                                    <h3>Student ID Number: <b>".$row['student_id']."</b></h3>
                                                                    <h3>NIC: <b>".$row['nic']."</b></h3>
                                                                    <br>
                                                                    <img src=\"../assets/php/barcode.php?size=50&text=".$row['student_id']."\" width=\"280px\" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    ";
                                                }
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