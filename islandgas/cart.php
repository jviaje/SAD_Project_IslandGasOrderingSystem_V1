<html>

<head>
	<title> Island Gas Ordering System</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" type="text/css" href="LandingPage.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<link href="css/page.css" rel="stylesheet" /> </head>
	<style>
		.form-check-input:checked{
			border-color: #cf152d !important;
			background-color: #cf152d !important;
		}
	</style>
	<body style="background-color: #eee;">
	<div class="container my-5 py-5">
		
		<div class="row">
			
			<div class="col-lg-8">
				<div class="card py-4">
					<div class="card-body m-3">
						<!-- SHOW IF NOT SIGNED IN -->
						
						<h4 class="mb-3 text-font fw-bold text-uppercase"> 
							<img src="assets/islandgas.jpg" width="50"/> Quick Checkout 
						</h4>
						<h5> Sign-in </h5>
						<div >
							<div class="form-outline mb-4">
								<input type="email" id="loginName" class="form-control" />
								<label class="form-label" for="loginName">Email or username</label>
							</div>

							<!-- Password input -->
							<div class="form-outline mb-4">
								<input type="password" id="loginPassword" class="form-control" />
								<label class="form-label" for="loginPassword">Password</label>
							</div>
						
							<div class="d-grid gap-2 ml-2">
								<button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>
							</div>
						</div>
						
						<div class="separator fw-bold mx-3 my-4">OR</div>
						<!-- AUTO POPULATE BASED ON THE ACCOUNT DELIVERY INFORMATION OR ALLOW USER TO POPULATE -->
						<h5 class="mb-3 text-font fw-bold text-uppercase">Fill-up your Delivery Information</h5>
						<form>

						<div class="row mb-4">
								<!-- Email input -->
							<div class="form-outline">
								<input type="email" id="form11Example5" class="form-control" />
								<label class="form-label" for="form11Example5">Email</label>
							</div>
							<div class="col">
								<div class="form-outline">
								<input type="text" id="form11Example1" class="form-control" />
								<label class="form-label" for="form11Example1">First name</label>
								</div>
							</div>
							<div class="col">
								<div class="form-outline">
								<input type="text" id="form11Example2" class="form-control" />
								<label class="form-label" for="form11Example2">Last name</label>
								</div>
							</div>

							<!-- Text input -->
							<div class="form-outline mb-4">
								<input type="text" id="form11Example3" class="form-control" />
								<label class="form-label" for="form11Example3">Company name</label>
								</div>

							<!-- Text input -->
							<div class="form-outline mb-4">
								<input type="text" id="form11Example4" class="form-control" />
								<label class="form-label" for="form11Example4">Address</label>
							</div>

						

							<!-- Number input -->
							<div class="form-outline mb-4">
							<input type="number" id="form11Example6" class="form-control" />
							<label class="form-label" for="form11Example6">Phone</label>
							</div>

							<!-- Message input -->
							<div class="form-outline mb-4">
							<textarea class="form-control" id="form11Example7" rows="4"></textarea>
							<label class="form-label" for="form11Example7">Additional information</label>
							</div>

							<!-- Checkbox -->
							<div class="form-check d-flex justify-content-center mb-2">
							<input class="form-check-input me-2" type="checkbox" value="" id="form11Example8" checked />
							<label class="form-check-label" for="form11Example8">
								Create an account?
							</label>
							</div>
						</form>
					</div>
				</div>
			</div>	
			</div>	
			<div class="col-lg-4 mb-4">
				<div class="card mb-4">
				<div class="card-header py-3">
					<h5 class="mb-0 text-font">1 item <span class="float-end mt-1"
						style="font-size: 13px ;">Edit</span></h5>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-4">
							<img src="assets/products/prod1.jpg"
							class="rounded-3" style="width: 100px;" alt="product1" />
						</div>
						<div class="col-md-6 ms-3">
							<span class="mb-0 text-price"> <span>&#8369;</span> 750.00</span>
							<p class="mb-0 text-descriptions">Standard &reg; Kalan </p>
							<span class="text-descriptions fw-bold">{{ Category }}}</span> 
							<span class="text-descriptions fw-bold">Single Burner</span>
							<p class="text-descriptions mt-0">Qty:<span class="text-descriptions fw-bold">1</span>
							</p>
						</div>
						<div class="input-group mb-3">
							<span class="input-group-text" id="basic-addon3">Promo Code or Voucher:  </span>
							<input type="text" class="form-control" id="basic-url">
						</div>
					</div>
					<div class="card-footer mt-4">
						<ul class="list-group list-group-flush">
							<li
							class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0 text-muted">
							Subtotal
							<span><span>&#8369;</span>35.00</span>
							</li>
							<li
							class="list-group-item d-flex justify-content-between align-items-center px-0 fw-bold text-uppercase">
							Total to pay
							<span><span>&#8369;</span>35.00</span>
							</li>
						</ul>
						<div class="d-grid gap-2">
							<button type="button" class="btn btn-danger btn-block btn-lg">
								<div class="d-flex justify-content-between">
									<span>$4818.00</span>
									<span>Checkout <i class="fas fa-long-arrow-alt-right ms-2"></i></span>
								</div>
							</button>
						</div>
					</div>


				</div>
				</div>
			</div>




		</div>

	</body>

</html>