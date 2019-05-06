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
							<h5 class="page-title"><i class="fa fa-bar-chart"></i>ATTENDANCE REPORT</h5>
							<div class="section-divider"></div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-lg-12">
							<div class="col-md-6">
								<div class="dash-item">
									<h6 class="item-title"><i class="fa fa-line-chart"></i>GRAPH REPORT</h6>
									<div class="inner-item">
                                        <form action="admin-report-attendance.php" method="post">
                                                        <div class="dash-form">
                                                           
                                                            <div class="col-sm-6">
                                                                <label class="clear-top-margin"><i class="fa fa-calendar-alt"></i>MONTH</label><input type="date" name="calendar" required>
                                                                
                                                            </div>
                                                         
                                                            
                                                            <div class="col-sm-6">
                                                                <br>
                                                                <input style="background-color:#ed1d24; color:#fff; margin-top:8px;" type="submit" value="SEARCH" name="submit">
                                                            </div> 
                                                            
                                                            </div>
                                            </form>
                                        
                                           <canvas id="myChart"></canvas>
                                        
                                        										
										<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
                                            <div class="container">
                                              
                                            </div>
                                        
                                            <script>                                               
                                                
                                                let myChart = document.getElementById('myChart').getContext('2d');

                                                // Global Options
                                                Chart.defaults.global.defaultFontFamily = 'Lato';
                                                Chart.defaults.global.defaultFontSize = 18;
                                                Chart.defaults.global.defaultFontColor = '#777';
                                               
                                                        

                                                let massPopChart = new Chart(myChart, {
                                                  type:'bar', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
                                                  data:{
                                                    labels:[<?php
                                                                include('../includes/connection.php');

                                                                if(isset($_POST['submit'])){  
                                                                    $date = $_POST['calendar'];
                                                                    
                                                                    $sql = "SELECT subject_id, COUNT(*) AS total
                                                                            FROM student_attendance    
                                                                            WHERE date(timestamp) = '$date'
                                                                            GROUP BY subject_id  
                                                                            ORDER BY `student_attendance`.`subject_id` ASC";
                                                                    $resultattendance = mysqli_query($connection, $sql);
                                                                    while($row = $resultattendance->fetch_assoc()){
                                                                        echo "'".$row['subject_id']."',";
                                                                    }
                                                                }
                                                            ?>
                                                           ],
                                                    datasets:[{
                                                      label:'Student Attendance',
                                                    data:[
                                                       <?php
                                                                include('../includes/connection.php');

                                                                if(isset($_POST['submit'])){
                                                                    $date = $_POST['calendar'];
                                                                    $sql = "SELECT subject_id, COUNT(*) AS total
                                                                            FROM student_attendance    
                                                                            WHERE date(timestamp) = '$date'
                                                                            GROUP BY subject_id  
                                                                            ORDER BY `student_attendance`.`subject_id` ASC";
                                                                    $resultattendance = mysqli_query($connection, $sql);
                                                                    while($row = $resultattendance->fetch_assoc()){
                                                                        echo "'".$row['total']."',";
                                                                    }
                                                                }
                                                            ?>                                                   
                                                        ],
                                                      //backgroundColor:'green',
                                                      backgroundColor:[
                                                        'rgba(255, 99, 132, 0.6)',
                                                        'rgba(54, 162, 235, 0.6)',
                                                        'rgba(255, 206, 86, 0.6)',
                                                        'rgba(75, 192, 192, 0.6)',
                                                        'rgba(153, 102, 255, 0.6)',
                                                        'rgba(255, 159, 64, 0.6)',
                                                        'rgba(255, 99, 132, 0.6)'
                                                      ],
                                                      borderWidth:1,
                                                      borderColor:'#777',
                                                      hoverBorderWidth:3,
                                                      hoverBorderColor:'#000'
                                                    }]
                                                  },
                                                    
                                                
                                                  options:{
                                                    
                                                    title:{
                                                      display:false,
                                                      text:'Student Attendance',
                                                      fontSize:25
                                                    },
                                                    legend:{
                                                      display:true,
                                                      position:'right',
                                                      labels:{
                                                        fontColor:'#000'
                                                      }
                                                    },
                                                    layout:{
                                                      padding:{
                                                        left:50,
                                                        right:0,
                                                        bottom:0,
                                                        top:0
                                                      }
                                                    },
                                                    tooltips:{
                                                      enabled:true
                                                    },
                                                      
                                                    scales: {
                                                    yAxes: [{
                                                        scaleLabel: {
                                                        display: true,
                                                        labelString: 'No. of Students Present'
                                                      },
                                                        ticks:{
                                                            beginAtZero: true
                                                        }
                                                        
                                                      }],
                                                    xAxes: [{
                                                        scaleLabel: {
                                                        display: true,
                                                        labelString: 'Subjects'
                                                      },
                                                      }]
                                                  }                            
                                                }
                                                });
                                              </script>
                                        
                                      
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="dash-item">
									<h6 class="item-title"><i class="fa fa-list"></i>TABLE REPORT</h6>
									<div class="inner-item">
                                        <form action="admin-report-attendance.php" method="post">
                                                        <div class="dash-form">
                                                           
                                                            <div class="col-sm-4">
                                                                <label class="clear-top-margin"><i class="fa fa-calendar-alt"></i>MONTH</label>
                                                                <select name="month" required>
                                                                    <option>-- Select --</option>
                                                                    <option value="01">January</option>
                                                                    <option value="02">February</option>
                                                                    <option value="03">March</option>
                                                                    <option value="04">April</option>
                                                                    <option value="05">May</option>
                                                                    <option value="06">June</option>
                                                                    <option value="07">July</option>
                                                                    <option value="08">August</option>
                                                                    <option value="09">September</option>
                                                                    <option value="10">October</option>
                                                                    <option value="11">November</option>
                                                                    <option value="12">December</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <label class="clear-top-margin"><i class="fa fa-user-circle-o"></i>YEAR</label>
                                                                <select name="year" required>
                                                                    <option>-- Select --</option>
                                                                    <option value="2016">2016</option>
                                                                    <option value="2017">2017</option>
                                                                    <option value="2018">2018</option>
                                                                    <option value="2019">2019</option>
                                                                    <option value="2020">2020</option>
                                                                    <option value="2021">2021</option>
                                                                    <option value="2022">2022</option>
                                                                    <option value="2023">2023</option>
                                                                    <option value="2024">2024</option>
                                                                    <option value="2025">2025</option>
                                                                    <option value="2026">2026</option>
                                                                    <option value="2027">2027</option>
                                                                    <option value="2028">2028</option>
                                                                    <option value="2029">2029</option>
                                                                    <option value="2030">2030</option>
                                                                    <option value="2031">2031</option>
                                                                    <option value="2032">2032</option>
                                                                    <option value="2033">2033</option>
                                                                    <option value="2034">2034</option>
                                                                    <option value="2035">2035</option>
                                                                    <option value="2036">2036</option>
                                                                    <option value="2037">2037</option>
                                                                    <option value="2038">2038</option>
                                                                    <option value="2039">2039</option>
                                                                    <option value="2040">2040</option>
                                                                    <option value="2041">2041</option>
                                                                    <option value="2042">2042</option>
                                                                    <option value="2043">2043</option>
                                                                    <option value="2044">2044</option>
                                                                    <option value="2045">2045</option>
                                                                    <option value="2046">2046</option>
                                                                    <option value="2047">2047</option>
                                                                    <option value="2048">2048</option>
                                                                    <option value="2049">2049</option>
                                                                    <option value="2050">2050</option>
                                                                </select>
                                                                
                                                            </div>
                                                            
                                                            
                                                            <div class="col-sm-4">
                                                                <br>
                                                                <input style="background-color:#ed1d24; color:#fff; margin-top:8px;" type="submit" value="SEARCH" name="submit2">
                                                            </div> 
                                                         </div>
                                                    </form>
                                        <div class="col-lg-12"><br></div> 
										<div>
											<table id="attendenceDetailedTable" class="display responsive nowrap" cellspacing="0" width="100%">
												<thead>
													<tr>
														<th><i class="fa fa-calendar"></i>SUBJECT</th>
														<th><i class="fa fa-check"></i>PRESENT</th>
													</tr>
												</thead>
												<tbody>
													<?php 
                                                    if(isset($_POST['submit2'])){
                                                        $total = 0;
                                                        $month = $_POST['month'];
                                                        $year = $_POST['year'];
                                                        $search_string = $year."-".$month;
                                                        echo $search_string;
                                                    
                                                        $sqlattendance = "SELECT * FROM `subjects` ";
                                                        $resultattendance = mysqli_query($connection, $sqlattendance);
                                                            while($rowattendance = $resultattendance->fetch_assoc()) {
                                                                $subject = $rowattendance['subject_id']; 
                                                                $sqlsearch = "SELECT COUNT(subject_id) FROM student_attendance WHERE subject_id='$subject' AND timestamp LIKE '$search_string%'";
                                                                $resultsearch = mysqli_query($connection, $sqlsearch);
                                                                
                                                                    while($rowsearch = $resultsearch->fetch_assoc()) {
                                                                            $count = $rowsearch['COUNT(subject_id)'];
                                                                             echo 
                                                                                "<tr>
                                                                                <td> ".$subject."</td>";
                                                                            echo
                                                                                "<td>".$count."</td>";
                                                                                $total = $total + $count;
                                                                                
                                                                            echo    
                                                                                "</tr>";
                                                                    }
                                                            }
                                                        echo "
                                                        <tr>
                                                            <td><b>TOTAL NO. OF STUDENTS PRESENT<b></td>
                                                            <td>".$total."</td>
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



select * from students order by length(student_id), student_id