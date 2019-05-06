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
							<h5 class="page-title"><i class="fa fa-clock-o"></i>LECTURE SCHEDULE</h5>
							<div class="section-divider"></div>
						</div>
					</div>
                    <h2 class="error-msg"><?php include_once('../includes/message.php'); ?></h2>
					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<div class="col-sm-12">
								<div class="dash-item first-dash-item">
									<h6 class="item-title"><i class="fa fa-plus-circle"></i>ADD SLOT</h6>
									<div class="inner-item">
                                        <form method="post" action="php/admin-schedule-create-submit.php">
                                            <div class="dash-form">
                                                    <div class="col-sm-3">
                                                            <label class="clear-top-margin"><i class="fa fa-flag"></i>LECTURER ID</label>
                                                            <select name="lecturer_id">
                                                                <option>-- Select --</option>
                                                                <?php
                                                                    $selectlecturers = "SELECT lecturer_id FROM lecturers";
                                                                    $lecturersquery = mysqli_query($connection,$selectlecturers);
                                                                    while($row = mysqli_fetch_assoc($lecturersquery)){                           echo "<option value=\"{$row['lecturer_id']}\">{$row['lecturer_id']}</option>";
                                                                    }
                                                                ?>
                                                            </select>
                                                    </div>
                                                
                                                <div class="col-sm-3">
                                                            <label class="clear-top-margin"><i class="fa fa-building"></i>HALL NO</label>
                                                            <select name="hall_no">
                                                                <option>-- Select --</option>
                                                                <?php
                                                                    $selectlecturerhalls = "SELECT hall_no FROM lecture_hall";
                                                                    $lecturerhallsquery = mysqli_query($connection,$selectlecturerhalls);
                                                                    while($row = mysqli_fetch_assoc($lecturerhallsquery)){                           echo "<option value=\"{$row['hall_no']}\">{$row['hall_no']}</option>";
                                                                    }
                                                                ?>
                                                            </select>
                                                </div>
                                                <div class="col-sm-3">
                                                            <label class="clear-top-margin"><i class="fa fa-book"></i>SUBJECT ID</label>
                                                            <select name="subject_id">
                                                                <option>-- Select --</option>
                                                                <?php
                                                                    $selectsubjects = "SELECT subject_id FROM subjects";
                                                                    $subjectsquery = mysqli_query($connection,$selectsubjects);
                                                                    while($row = mysqli_fetch_assoc($subjectsquery)){                           echo "<option value=\"{$row['subject_id']}\">{$row['subject_id']}</option>";
                                                                    }
                                                                ?>
                                                            </select>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="col-sm-2">
                                                    <label><i class="fa fa-clock-o"></i>START HOUR</label>
                                                    <select name="start_hour">
                                                        <option>-- Select --</option>
                                                        <option value="00">00</option>
                                                        <option value="01">01</option>
                                                        <option value="02">02</option>
                                                        <option value="03">03</option>
                                                        <option value="04">04</option>
                                                        <option value="05">05</option>
                                                        <option value="06">06</option>
                                                        <option value="07">07</option>
                                                        <option value="08">08</option>
                                                        <option value="09">09</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                        <option value="16">16</option>
                                                        <option value="17">17</option>
                                                        <option value="18">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                        <option value="21">21</option>
                                                        <option value="22">22</option>
                                                        <option value="23">23</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-2">
                                                    <label><i class="fa fa-clock-o"></i>START MINUTES</label>
                                                    <select name="start_mins">
                                                        <option>-- Select --</option>
                                                        <option value="00">00</option>
                                                        <option value="15">15</option>
                                                        <option value="30">30</option>
                                                        <option value="45">45</option>
                                                        
                                                    </select>
                                                </div>
                                                <div class="col-sm-2">
                                                    <label><i class="fa fa-clock-o"></i>END HOUR</label>
                                                    <select name="end_hour">
                                                        <option>-- Select --</option>
                                                        <option value="00">00</option>
                                                        <option value="01">01</option>
                                                        <option value="02">02</option>
                                                        <option value="03">03</option>
                                                        <option value="04">04</option>
                                                        <option value="05">05</option>
                                                        <option value="06">06</option>
                                                        <option value="07">07</option>
                                                        <option value="08">08</option>
                                                        <option value="09">09</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                        <option value="16">16</option>
                                                        <option value="17">17</option>
                                                        <option value="18">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                        <option value="21">21</option>
                                                        <option value="22">22</option>
                                                        <option value="23">23</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-2">
                                                    <label><i class="fa fa-clock-o"></i>END MINUTES</label>
                                                    <select name="end_mins">
                                                        <option>-- Select --</option>
                                                        <option value="00">00</option>
                                                        <option value="15">15</option>
                                                        <option value="30">30</option>
                                                        <option value="45">45</option>
                                                        
                                                    </select>
                                                </div>
                                                
                                                <div class="col-sm-3">
                                                    <label><i class="fa fa-code"></i>DAY</label>
                                                    <select name="day">
                                                        <option>-- Select --</option>
                                                        <option value="Monday">MONDAY</option>
                                                        <option value="Tuesday">TUESDAY</option>
                                                        <option value="Wednesday">WEDNESDAY</option>
                                                        <option value="Thursday">THURSDAY</option>
                                                        <option value="Friday">FRIDAY</option>
                                                        <option value="Saturday">SATURDAY</option>
                                                        <option value="Sunday">SUNDAY</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="col-sm-12 form-top-margin-fix">
                                                        <input style="background-color:#ed1d24; color:#fff;" type="submit" value="ADD LECTURE SCHEDULE" name="submit">
                                                    </div>
											    </div>
                                            </div>
                                        </form>
										<div class="clearfix"></div>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="col-sm-12">
								<div class="dash-item">
									<h6 class="item-title"><i class="fa fa-sliders"></i>ALL SLOTS</h6>
									<div class="inner-item">
										<table id="attendenceDetailedTable" class="display responsive nowrap" cellspacing="0" width="100%">
											<thead>
												<tr>
													<th><i class="fa fa-calendar"></i>LECTURER ID</th>
													<th><i class="fa fa-clock-o"></i>HALL NO</th>
													<th><i class="fa fa-book"></i>SUBJECT ID</th>
                                                    <th><i class="fa fa-book"></i>START TIME</th>
                                                    <th><i class="fa fa-book"></i>END TIME</th>
                                                    <th><i class="fa fa-book"></i>DATE</th>
													<th><i class="fa fa-sliders"></i>ACTION</th>
												</tr>
											</thead>
											<tbody>
                                                <tr>
											<?php
											$sql = "SELECT * FROM `lecture_schedule` ";
											$result = mysqli_query($connection, $sql);

											while($row = $result->fetch_assoc()) {
											 echo 
												"<tr>
                                                    <td> ".$row['lecturer_id']."</td>
                                                    <td>".$row['hall_no']."</td>
                                                    <td>".$row['subject_id']."</td>
                                                    <td>".$row['start_time']."</td>
                                                    <td>".$row['end_time']."</td>
                                                    <td>".$row['day']."</td>
                                                    <td class=\"action-link\">
                                                            <a class=\"edit\" href=\"#\" title=\"Edit\" data-toggle=\"modal\" data-target=\"#editDetailModal\"><i class=\"fa fa-edit\"></i></a>
                                                            <a class=\"delete\" href=\"#\" title=\"Delete\" data-toggle=\"modal\" data-target=\"#deleteDetailModal\"><i class=\"fa fa-remove\"></i></a>
                                                    </td>
												</tr>";

												}
												?>
                                                  
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
				
				<!-- Delete Modal -->
				<div id="deleteDetailModal" class="modal fade" role="dialog">
					<div class="modal-dialog">
						<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title"><i class="fa fa-trash"></i>DELETE SECTION</h4>
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
								<h4 class="modal-title"><i class="fa fa-edit"></i>EDIT LECTURE SCHEDULE</h4>
							</div>
							<div class="modal-body dash-form">
								<div class="col-sm-4">
									<label class="clear-top-margin"><i class="fa fa-book"></i>LECTURER ID</label>
                                    <select name="lecturer_id">
                                        <option>-- Select --</option>
                                            <?php
                                                $selectlecturers = "SELECT lecturer_id FROM lecturers";
                                                $lecturersquery = mysqli_query($connection,$selectlecturers);
                                                while($row = mysqli_fetch_assoc($lecturersquery))
                                                {echo "<option value=\"{$row['lecturer_id']}\">{$row['lecturer_id']}</option>";}
                                            ?>
                                    </select>
									<input type="text" placeholder="SECTION" value="A" />
								</div>
								<div class="col-sm-4">
									<label class="clear-top-margin"><i class="fa fa-code"></i>HALL NO</label>
									<input type="text" placeholder="SECTION CODE" value="PTH05A" />
								</div>
								<div class="col-sm-4">
									<label class="clear-top-margin"><i class="fa fa-user-secret"></i>SUBJECT ID</label>
									<select>
										<option>-- Select --</option>
										<option>5 STD</option>
										<option>6 STD</option>
									</select>
								</div>
								<div class="clearfix"></div>
								<div class="col-sm-12">
									<label><i class="fa fa-info-circle"></i>DESCRIPTION</label>
									<textarea placeholder="Enter Description Here"></textarea>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="modal-footer">
								<div class="table-action-box">
									<a href="php/admin-schedule-edit-submit.php" class="save"><i class="fa fa-check"></i>SAVE</a>
									<a href="admin-schedule-create.php" class="cancel" data-dismiss="modal"><i class="fa fa-ban"></i>CLOSE</a>
								</div>
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