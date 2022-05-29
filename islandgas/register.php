<?php include('conregister.php')?>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration Form</title>
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="register.css">
</head>

<body>
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
            <form>

              <div class="row">
                <div class="col-md-4 mb-4">

                  <div class="form-outline">
                    <input type="text" id="firstName" class="form-control form-control-lg" />
                    <label class="form-label" for="firstName">First Name</label>
                  </div>

                </div>
                <div class="col-md-4 mb-4">

                  <div class="form-outline">
                    <input type="text" id="middleName" class="form-control form-control-lg" />
                    <label class="form-label" for="middleName">Middle Name</label>
                  </div>

                </div>
                <div class="col-md-4 mb-4">

                  <div class="form-outline">
                    <input type="text" id="lastName" class="form-control form-control-lg" />
                    <label class="form-label" for="lastName">Last Name</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 d-flex align-items-center">

                  <div class="form-outline datepicker w-100">
                    <input
                      type="text"
                      class="form-control form-control-lg"
                      id="birthdayDate"
                    />
                    <label for="birthdayDate" class="form-label">Birthday</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <h6 class="mb-2 pb-1">Gender: </h6>

                  <div class="form-check form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="inlineRadioOptions"
                      id="femaleGender"
                      value="option1"
                      checked
                    />
                    <label class="form-check-label" for="femaleGender">Female</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="inlineRadioOptions"
                      id="maleGender"
                      value="option2"
                    />
                    <label class="form-check-label" for="maleGender">Male</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="inlineRadioOptions"
                      id="otherGender"
                      value="option3"
                    />
                    <label class="form-check-label" for="otherGender">Other</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="email" id="emailAddress" class="form-control form-control-lg" />
                    <label class="form-label" for="emailAddress">Email</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="tel" id="phoneNumber" class="form-control form-control-lg" />
                    <label class="form-label" for="phoneNumber">Phone Number</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-12">

                  <select class="select form-control-lg">
                    <option value="1" disabled>Choose option</option>
                    <option value="2">Subject 1</option>
                    <option value="3">Subject 2</option>
                    <option value="4">Subject 3</option>
                  </select>
                  <label class="form-label select-label">Choose option</label>

                </div>
              </div>

              <div class="mt-4 pt-2">
                <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
	<!-- <form action="register.php" method="post">
		<div class="register-form-container">
			<h1 id="register-header">
				<b>Create an Account</b>
			</h1>

			<table class="register-form-table">
				<tr>
					<td>
						<label><b>Firstname</b></label> <br>
						<input type="text" class="fname" name="fname" required>
					</td>
				</tr>
				<tr>
					<td>
						<label><b>Middlename</b></label> <br>
						<input type="text" class="mname" name="mname" required>
					</td>
				</tr>
				<tr>
					<td>
						<label><b>Lastname</b></label> <br>
						<input type="text" class="lname" name="lname" required>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<label><b>Gender</b></label>
						<select name="gender" id="gender-select">
							<option value="">Select</option>
							<option value="Male">Male</option>
							<option value="Female">Female</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>
						<label><b>Birthdate</b></label> <br>
						<input type="text" class="input" name="bday" required>
					</td>
					<td>
						<label><b>Age</b></label> <br>
						<input type="text" class="input" name="age" required>
					</td>
				</tr>
				<tr>
					<td>
						<label><b>Contact</b></label> <br>
						<input type="text" class="input" name="contact" required>
					</td>
					<td>
					<?php if(isset($email_error)):?> <?php endif?>
						<label><b>Email</b></label> <br>
						<input type="text" class="input" name="email" required>
					<?php if (isset($email_error)): ?>
    					<span><?php echo $email_error; ?></span>
					<?php endif ?>
					</td>
				</tr>
				<tr>
					<td colspan="2">
					<?php if(isset($name_error)):?> <?php endif?>
						<label><b>Username</b></label> <br><br><br>
						<input type="text" class="userpass" name="user" required>
					<?php if (isset($name_error)): ?>
    					<span><?php echo $name_error; ?></span>
					<?php endif ?>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<label><b>Password</b></label> <br><br><br>
						<input type="password" class="userpass1" name="password" required>
					</td>
				</tr>
				<tr>
					<td colspan="2">
					<?php if(isset($error_pass)):?> <?php endif?>
						<label><b>Confirm password</b></label> <br><br><br><br>
						<input type="password" class="userpass2" name="password2" required>
					<?php if (isset($error_pass)): ?>
    					<span><?php echo $error_pass; ?></span>
					<?php endif ?>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<label><b>Full Address</b></label>
						<input type="text" class="address" name="brgy" required>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<label><b>City</b></label>
						<input type="text" class="address1" name="city" required>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<label><b>Country</b></label>
						<input type="text" class="address2" name="country" required>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<label><b>Postal Code</b></label>
						<input type="text" class="address3" name="postal" required>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<center>
							<input type="checkbox" name="terms">
							<label>Agreed to Terms and Conditions</label>
						</center>
					</td>
				</tr>
			</table>
			<center>
				<button type="submit" name="submit" class="btnHome">Submit</button> <br><br>
				<a href="CustomerLoginRevised.php">Already signup?</a>
			</center>
		</div>
	</form> -->
</div>
</body>
</html>