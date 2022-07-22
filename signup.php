<button id="expand-dp" type="button" class = "d-none" data-bs-toggle = "modal" data-bs-target = "#myModal1"> View image </button>
<label class="d-block pointer" for="expand-dp"> <!-- label trigggers button to trigger modal -->
<div class="modal"  id="myModal1">
	<div class="modal-dialog">
		<div class="modal-content">		
			<div class="modal-header">
				<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
			</div>
			<div class="modal-body">
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
			<h2 class="text-center">Sign Up for our full user experience</h2>
			<div class="form-group my-3">
				<label class="lead"  for="username">Username</label>
				<div class="d-flex align-items-center">
					<input type="text" class="form-control form-control-lg">
				</div>
			</div>
			<div class="form-group my-3">
				<label class="lead"  for="email">Email</label>
				<div class="d-flex align-items-center">
					   <input type="email" class="form-control form-control-lg" placeholder="example@mail.com">
				</div>
			</div>
			<div class="form-group my-3">
				<label class="lead" for="password">Password</label>
				<div class="d-flex align-items-center relative">
					<input type="password" class="form-control form-control-lg">
				</div>
			</div>
			<div class="form-group my-3">
				<label class="lead"  for="confirmpassword">Confirm Password</label>
				<div class="d-flex align-items-center relative">
					<input type="password"  class="form-control form-control-lg">
				</div>
			</div>
			<small class="text-muted">
			* Username must have only letters, numbers, underscore (no whitespace) and contain a minimum of 5 characters<br>
			* The email you enter must be valid<br>
			* Password should be at least 6 characters long<br>
			</small>
			<div class="form-group text-center mt-2">
			   <button type="submit" name="signup-btn" class="btn btn-primary fw-bold my-3 p-2">Submit</button>
			   <p class="text-primary text-center fw-bold">Already a memeber? <a href="./login.php" class="text-decoration-none">Log In</a></p>
			</div>
		</form>
            </div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary fw-bold" data-bs-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>