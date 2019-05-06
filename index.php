<!DOCTYPE html>
<html>
    
<head>

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="">
        <title>INSTITUTE FOR ACCOUNTING STUDIES</title>

        <!-- Styles -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
		 <link href="assets/css/chartist.min.css" rel="stylesheet" media="screen">
		<link href="assets/css/owl.carousel.min.css" rel="stylesheet" media="screen">
		<link href="assets/css/owl.theme.default.min.css" rel="stylesheet" media="screen">
        <link href="assets/css/style.css" rel="stylesheet" media="screen">

        <!-- Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
        <link href="assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" media="screen">
    
        <style>
            @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,700);

            body {
              background: #f7f7f7;
              font-family: 'Open Sans', sans-serif;
            }

            .login {
              width: 400px;
              margin: 10% auto;
              font-size: 14px;
            }

            /* Reset top and bottom margins from certain elements */
            .login-header,
            .login p {
              margin-top: 0;
              margin-bottom: 0;
            }

            .login-header {
              background: #ed1d24;
              padding: 20px;
              font-size: 1.4em;
              font-weight: normal;
              text-align: center;
              text-transform: uppercase;
              color: #fff;
            }

            .login-container {
              background: #ebebeb;
              padding: 12px;
              border: solid 1px #ed1d24;
            }

            /* Every row inside .login-container is defined with p tags */
            .login p {
              padding: 12px;
            }

            .login input {
              box-sizing: border-box;
              display: block;
              width: 100%;
              border-width: 1px;
              border-style: solid;
              padding: 16px;
              outline: 0;
              border-color: #bbbbbb;
              font-family: inherit;
              font-size: 0.95em;
            }

            .login input[type="email"],
            .login input[type="password"] {
              background: #fff;
              border-color: #bbb;
              color: #555;
              transition: 0.7s;
            }

            /* Text fields' focus effect */
            .login input[type="email"]:focus,
            .login input[type="password"]:focus {
              border: solid 1px #ed1d24;
            }

            .login input[type="submit"] {
              background: #ed1d24;
              border-color: transparent;
              color: #fff;
              cursor: pointer;
              transition: 0.7s;
            }

            .login input[type="submit"]:hover {
              background: #ad0308;
            }

            /* Buttons' focus effect */
            .login input[type="submit"]:focus {
              border-color: #ad0308;
            }
            

            
        </style>

    </head>
    <body>
        
        <div class="login">  
          <h3 class="login-header">INSTITUTE FOR ACCOUNTING STUDIES</h3>
          
          <form action="index-submit.php" method="post" class="login-container">
            <h2 class="error-msg"><?php include_once('includes/message.php'); ?></h2>
            <p><input type="text" placeholder="User ID" name="id" required></p>
            <p><input type="password" placeholder="Password" name="password" required id="myInput"></p>
            <div class="col-md-12">
              <div class="col-md-5 clear-padding-xs"><b>Show password<b></div>
              <div class="col-md-2 clear-padding-xs" ><input  type="checkbox" onclick="myFunction()"></div>
            </div>
            <br>
            <br>
             <input type="submit" value="LOGIN">
          </form>
        </div>
        
		<!-- Scripts -->
        <script src="assets/js/jQuery_v3_2_0.min.js"></script>
		<script src="assets/js/jquery-ui.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/plugins/owl.carousel.min.js"></script>
		<script src="assets/plugins/Chart.min.js"></script>
		<script src="assets/plugins/jquery.dataTables.min.js"></script>
		<script src="assets/plugins/dataTables.responsive.min.js"></script>
    <script src="assets/js/js.js"></script>
    <script>
        function myFunction() {
          var x = document.getElementById("myInput");
          if (x.type === "password") {
            x.type = "text";
          } 
          else {
             x.type = "password";
          }
        }
      </script>
		
    </body>
    
</html>