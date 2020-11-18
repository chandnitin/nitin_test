<html>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<script src="js/main.js"></script>

<body>
<div class="row">
    <div class="col-md-6 col-sm-12 col-lg-6 col-md-offset-3">
		<div class="panel panel-primary">
			<div class="panel-heading">Enter Your Details Here
			</div>
			<div class="panel-body">
				<form name="myform" action="Register.php"  method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label for="myName">Full Name *</label>
						<input id="myName" name="myName" class="form-control" type="text" data-validation="required">
						<span id="error_name" class="text-danger"></span>
					</div>
					<div class="form-group">
						<label for="email">Email *</label>
						<input id="email" name="email" class="form-control" type="text" data-validation="email">
						<span id="error_email" class="text-danger"></span>
                    </div>
                    <div class="form-group">
						<label for="password">Password *</label>
						<input id="password" name="password" class="form-control" type="password" data-validation="password">
						<span id="error_password" class="text-danger"></span>
                    </div>
                    <div class="form-group">
						<label for="phone">Phone Number *</label>
						<input type="text" id="phone" name="phone" class="form-control" >
						<span id="error_phone" class="text-danger"></span>
					</div>
					<div class="form-group">
						<label for="country">Country *</label>
						<input id="country" name="country"  class="form-control" type="text" >
						<span id="error_country" class="text-danger"></span>
                    </div>
                    <div class="form-group">
						<label for="state">State *</label>
						<input id="state" name="state"  class="form-control" type="text" >
						<span id="error_state" class="text-danger"></span>
                    </div>
                    <div class="form-group">
						<label for="city">City *</label>
						<input id="city" name="city"  class="form-control" type="text"  >
						<span id="error_city" class="text-danger"></span>
					</div>
					<div class="form-group">
						<label for="pincode">Pin code *</label>
						<input id="pincode" name="pincode"  class="form-control" type="text" >
						<span id="error_pincode" class="text-danger"></span>
					</div>
					<div class="form-group">
						<label for="photo">Photo*</label>
						<input id="photo" name="photo"  class="form-control" type="file"  >
						<span id="error_photo" class="text-danger"></span>
					</div>
					
					<button id="submit" type="submit" value="submit" class="btn btn-primary center">Submit</button>
			
				</form>

			</div>
		</div>
	</div>
</div>
</body>

</html>