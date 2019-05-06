<?php

include('../includes/connection.php');

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
			<!-- header -->
			<?php include('includes/tute-issuer-header.php'); ?>
			<div class="parent-wrapper" id="outer-wrapper">

			<!-- SIDE MENU -->
			<?php include('includes/tute-issuer-sidebar.php'); ?>

			<!-- MAIN CONTENT -->
			
			<div class="main-content" id="content-wrapper">
			<h2 class="error-msg"><?php include_once('../includes/message.php'); ?></h2>
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<h5 class="page-title"><i class="fa fa-pencil-square-o"></i>MARK TUTE</h5>
							<div class="section-divider"></div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<div class="col-lg-12">
								<div class="dash-item first-dash-item">
									<div class="inner-item dash-search-form">
                                    <?php
                                        if(isset($_POST['mark'])){
                                            $_SESSION['tute'] = $_POST['tute_id'];
                                            $_SESSION['subject-t'] = $_POST['subject_id'];
                                            $_SESSION['lecturer-t'] = $_POST['lecturer_id'];
                                        }
									?>
                                        <form action="php/mark-student-tute-submit.php" method="post">
                                            <div class="col-md-12 col-sm-12">
                                                <label>STUDENT ID</label>
                                                <input type="text" name="student_id" placeholder="xxExx" id="markBox">
                                                <br><br>
                                                Subject Code : <input type="text" value="<?php echo $_SESSION['subject-t']; ?>" name="subject_id">
                                                Lecturer Code : <input type="text" value="<?php echo $_SESSION['lecturer-t']; ?>" name="lecturer_id">
                                                Tute Code : <input type="text" value="<?php echo $_SESSION['tute']; ?>" name="tute_id">
                                            </div>
											<div class="col-md-4 col-md-offset-4">
                                                <button type="submit" class="submit-btn" name="mark"><i class="fa fa-search"></i>MARK</button>
                                            </div>
                                            
                                            <div class="clearfix"></div>
                                        </form>
                                        <div class="col-md-4 col-md-offset-4">
                                                <a href="mark-attendance-subject-select.php"><button class="submit-btn"><i class="fa fa-search"></i> CHANGE</button></a>
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
    
    <script>
        window.onload = function() {
          document.getElementById("markBox").focus();
        };
    </script>


</html>




</form>