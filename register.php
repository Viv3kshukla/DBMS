<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<title>bootstrap tutorial</title>
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

		<style>
			body{
				margin:0px;
				padding:0px;
				font-family:Monospace;
				text-align:center;
			}
			input[type="text"],input[type="password"],input[type="email"],input[type="number"],input[type="date"]{
				outline:none;
				padding:10px;
				display:block;
				width:300px;
				border-radius:3px;
				border: 1px solid #eee;
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
    			width: 30%;
    			padding: 16px 20px;
    			border: none;
    			border-radius: 4px;
    			background-color: #f1f1f1;
			}
		</style>
	</head>
	<body>
	<div class="container">
		<h1>Register</h1>
		<form action="register_status.php" method="post">
    		<div class="form-group">
      			<label for="username">Username:</label>
      			<input type="text" class="form-control" id="username" placeholder="Enter email" name="USERNAME" required/>
    		</div>
    		<div class="form-group">
      			<label for="name">Name:</label>
      			<input type="text" class="form-control" id="name" placeholder="Enter password" name="CUST_NAME" required/>
    		</div>
    		<div class="form-group">
      			<label for="dob">Date of Birth:</label>
      			<input type="date" class="form-control" id="dob" placeholder="Enter email" name="DATE_OF_BIRTH" required/>
    		</div>
    		<div class="form-group">
      			<label for="sex">Sex:</label>
      			<select id="sex" name="SEX">
    				<option value="Male">Male</option>
    				<option value="Female">Female</option>
  				</select>
    		</div>
    		<div class="form-group">
      			<label for="email">Email:</label>
      			<input type="email" class="form-control" id="email" placeholder="Enter email" name="EMAIL" required>
    		</div>
    		<div class="form-group">
      			<label for="mobile">Mobile No:</label>
      			<input type="number" class="form-control" id="mobile" placeholder="Enter email" name="MOBILE_NO" required>
    		</div>
    		<div class="form-group">
      			<label for="branchid">Branch Id:</label>
      			<input type="number" class="form-control" id="branchid" maxlength="8" placeholder="Enter Branch ID" name="BRANCH_ID" required>
    		</div>
    		<div class="form-group">
      			<label for="street">Street/Room No :</label>
      			<input type="text" class="form-control" id="street" placeholder="Enter city" name="STREET">
    		</div>
    		<div class="form-group">
      			<label for="city">City:</label>
      			<input type="text" class="form-control" id="city" placeholder="Enter city" name="CITY" required>
    		</div>
        <div class="form-group">
            <label for="ac_type">Account Type:</label>
            <select id="ac_type" name="ACCOUNT_TYPE">
              <option value="current">Current Account</option>
              <option value="savings">Savings Account</option>
            </select>
        </div>
    		<div class="form-group">
      			<label for="state">State:</label>
      			<select id="state" name="STATE">
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
  				</select>
    		</div>
    		<div class="form-group">
      			<label for="pincode">Pincode:</label>
      			<input type="number" class="form-control" id="pincode" placeholder="Enter email" name="PINCODE" required>
    		</div>
  			<div class="form-group">
      			<label for="password">Password:</label>
      			<input type="password" class="form-control" id="password" placeholder="Enter password" name="PASSWORD" required>
    		</div>
    		<div class="form-group">
      			<label for="password_again">Re-enter Password:</label>
      			<input type="password" class="form-control" id="password_again" placeholder="Re-enter password" name="PASSWORD_AGAIN" required>
    		</div>
    		<div class="checkbox">
    			<label><input type="checkbox" required> I accept the <a href="conditions.php" target="_blank">Terms and Conditions</a>
           		</label>
    		</div>
			<button type="submit" class="btn btn-default">Submit</button>
  		</form>
  	</div>
  	</body>
</html>

