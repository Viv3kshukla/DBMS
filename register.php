<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<title>India Finance</title>
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    
    <!-- Fontawesome Icon font -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- bootstrap.min -->
        <link rel="stylesheet" href="css/jquery.fancybox.css">
    <!-- bootstrap.min -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- bootstrap.min -->
        <link rel="stylesheet" href="css/owl.carousel.css">
    <!-- bootstrap.min -->
        <link rel="stylesheet" href="css/slit-slider.css">
    <!-- bootstrap.min -->
        <link rel="stylesheet" href="css/animate.css">
    <!-- Main Stylesheet -->
        <link rel="stylesheet" href="css/main.css">

    <!-- Modernizer Script for old Browsers -->
        <script src="js/modernizr-2.6.2.min.js"></script>

		<style>
			.main{
				margin:0px;
				padding:0px;
				font-family:Monospace;
				text-align:center;
			}
      .jumbotron{
        background-color:lightblue;
      }
      .class-for-table{
        margin-left:100px;
        margin-right:100px;
        font-size:15px;
        column-width: 20px;
      }
      .container-fluid{
        padding-top:100px;
        padding-bottom: 100px;
        padding-left:250px;
        padding-right:250px;
        font-size:10px;
      }
			input[type="text"],input[type="password"],input[type="email"],input[type="number"],input[type="date"]{
				outline:none;
				padding:10px;
				display:block;
				width:300px;
				border-radius:5px;
				border: 2px solid black;
				margin:20px auto;
			}
			input[type="submit"]{

				padding:10px;
				color:#fff;
				background:#0098cb;
				width:320px;
				margin:20px auto;
				margin-top:0px;
				border:0px;
				border-radius:3px;
				cursor:pointer;
	
			}
			input[type="submit"]:hover{
				background:#00b8eb;
			}
			input[type="checkbox"]{
				outline:none;
				

			}
			select {
    			width: 60%;
    			padding: 16px 20px;
    			border: none;
    			border-radius: 4px;
    			background-color: #f1f1f1;
			}
		</style>
	</head>
	<body>
    <header id="navigation" class="navbar-inverse animated-header">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
                    </button>
          <!-- /responsive nav button -->
          
          <!-- logo 
          <h1 class="navbar-brand">
          <img src="name.jpg" style="width:7cm;height:1.5cm; border-radius: 50%; ">
          </h1>
          <!-- /logo -->
                </div>

        <!-- main nav -->
                <nav class="collapse navbar-collapse navbar-left" role="navigation">

                  <img src="name.jpg" style="width:7cm;height:1.5cm; border-radius: 50%; ">
                  </nav>
                <nav id="navigate" class="collapse navbar-collapse navbar-right" role="navigation">
                
                    <ul id="nav " class="nav navbar-nav" >
                        <li></li>
                        <li id="ng"><a href="home.html#body">HOME</a></li>
                         
                          <li><a href="home.html#service">RATES</a></li>
                        <li><a href="register.php">REGISTER</a></li>
                     </ul>  
                </nav>
        <!-- /main nav -->
        
            </div>
        </header>
        <div class="main">
	<div class="container-fluid">
    <div class="jumbotron ">
		<h2>Register</h2>
		<form action="register_status.php" method="post">
      <table class="table table-striped">
        <tbody class="class-for-table">
          <tr>
            <td class="text-center"><label for="username">Username:</label></td>
            <td class="text-center"><input type="text" class="form-control" id="username" name="USERNAME" required/></td>
          </tr>
          <tr>
            <td class="text-center"><label for="name">Name:</label></td>
            <td class="text-center"><input type="text" class="form-control" id="name"  name="CUST_NAME" required/></td>
          </tr>
          <tr>
            <td class="text-center"><label for="dob">Date of Birth:</label></td>
            <td class="text-center"><input type="date" class="form-control" id="dob" name="DATE_OF_BIRTH" required/></td>
          </tr>
          <tr>
            <td class="text-center"><label for="sex">Sex:</label></td>
            <td class="text-center"><select id="sex" name="SEX">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
          </select></td>
          </tr>
          <tr>
            <td class="text-center"><label for="email">Email:</label></td>
            <td class="text-center"><input type="email" class="form-control" id="email" name="EMAIL" required></td>
          </tr>
          <tr>
            <td class="text-center"><label for="mobile">Mobile No:</label></td>
            <td class="text-center"><input type="number" class="form-control" id="mobile" name="MOBILE_NO" required></td>
          </tr>
          <tr>
            <td class="text-center"><label for="branchid">Branch Id:</label></td>
            <td class="text-center"><input type="number" class="form-control" id="branchid" maxlength="8" name="BRANCH_ID" required></td>
          </tr>
          <tr>
            <td class="text-center"><label for="street">Street/Room No :</label></td>
            <td class="text-center"><input type="text" class="form-control" id="street" name="STREET"></td>
          </tr>
          <tr>
            <td class="text-center"><label for="city">City:</label></td>
            <td class="text-center"><input type="text" class="form-control" id="city" name="CITY" required></td>
          </tr>
          <tr>
            <td class="text-center"> <label for="ac_type">Account Type:</label></td>
            <td class="text-center"><select id="ac_type" name="ACCOUNT_TYPE">
              <option value="current">Current Account</option>
              <option value="savings">Savings Account</option>
            </select></td>
          </tr>
          <tr>
            <td class="text-center"><label for="state">State:</label></td>
            <td class="text-center"><select id="state" name="STATE">
            <option value="Andhra Pradesh">Andhra Pradesh</option>
            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
            <option value="Assam">Assam</option>
          <option value="Bihar">Bihar</option>
          <option value="Chhattisgarh">Chhattisgarh</option>
            <option value="Goa">Goa</option>
            <option value="Gujarat">Gujarat</option>
          <option value="Haryana">Haryana</option>
          <option value="Himachal Pradesh">Himachal Pradesh</option>
            <option value="Jammu and Kashmir">Jammu and Kashmir</option>
            <option value="Jharkhand">Jharkhand</option>
          <option value="Karnataka">Karnataka</option>
          <option value="Kerala">Kerala</option>
            <option value="Madhya Pradesh">Madhya Pradesh</option>
            <option value="Maharashtra">Maharashtra</option>
          <option value="Manipur">Manipur</option>
          <option value="Meghalaya">Meghalaya</option>
            <option value="Mizoram">Mizoram</option>
            <option value="Nagaland">Nagaland</option>
          <option value="Odisha">Odisha</option>
          <option value="Punjab">Punjab</option>
            <option value="Rajasthan">Rajasthan</option>
            <option value="Sikkim">Sikkim</option>
          <option value="Tamil Nadu">Tamil Nadu</option>
          <option value="Telangana">Telangana</option>
          <option value="Tripura">Tripura</option>
            <option value="Uttar Pradesh">Uttar Pradesh</option>
            <option value="Uttarakhand">Uttarakhand</option>
          <option value="West Bengal">West Bengal</option>
          </select></td>
          </tr>
          <tr>
            <td class="text-center"> <label for="pincode">Pincode:</label></td>
            <td class="text-center"><input type="number" class="form-control" id="pincode"  name="PINCODE" required></td>
          </tr>
          <tr>
            <td class="text-center"><label for="password">Password:</label></td>
            <td class="text-center"><input type="password" class="form-control" id="password" name="PASSWORD" required></td>
          </tr>
          <tr>
            <td class="text-center"><label for="password_again">Re-enter Password:</label></td>
            <td class="text-center"><input type="password" class="form-control" id="password_again" name="PASSWORD_AGAIN" required></td>
          </tr>
        </tbody>
      </table>
    		<div class="checkbox">
    			<label><input type="checkbox"  required><span style="font-size:20px"> I accept the <a href="conditions.php" target="_blank">Terms and Conditions</a></span>
           		</label>
    		</div>
			<button type="submit" class="btn btn-default" style="border:1px solid grey; border-radius:3px "><strong>Submit</strong></button>
  		</form>
    </div>
  	</div>
  </div>
  	</body>
</html>

