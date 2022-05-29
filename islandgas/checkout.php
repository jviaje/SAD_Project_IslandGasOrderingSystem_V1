<html>

<head>
	<title> Island Gas Ordering System</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" type="text/css" href="LandingPage.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<link href="css/page.css" rel="stylesheet" /> </head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light gradient-custom-2 p-4">
		<div class="container">
			<a class="navbar-brand" href="./"><img src="assets/banner.png" height="50" /></a>
			<button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
			<div class="navbar-collapse collapse" id="navbarSupportedContent" style="">
				<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
					<li class="nav-item"> <a class="nav-link text-white" href="#">About Us</a> </li>
					<li class="nav-item dropdown"> <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Product
                    </a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<li><a class="dropdown-item" href="#">Gas</a></li>
							<li><a class="dropdown-item" href="#">Cylinders</a></li>
							<li>
								<hr class="dropdown-divider">
							</li>
							<li><a class="dropdown-item" href="#">Others</a></li>
						</ul>
					</li>
				</ul>
				<div class="d-flex">
					<button type="button" class="btn btn-outline border-0 text-white">Login</button>
					<ul class="navbar-nav mb-2 mb-lg-0">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle position-relative text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <i class="fa-solid fa-cart-shopping"></i> <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            1
                            <span class="visually-hidden">unread messages</span> </span>
							</a>
							<ul class="dropdown-menu dropdown-menu-end dropdown-large" aria-labelledby="navbarDropdown">
								<!-- LOOP YOUR CART HERE -->
								<li class="px-2 islandgas-color">
									<div class="d-flex"> <i class="pt-1 fa-solid fa-cart-shopping"></i> <span class="ms-auto"> Total: <span>&#8369;</span>1,420.69</span>
									</div>
								</li>
								<li>
									<hr class="dropdown-divider">
								</li>
								<li class="px-2">
									<div class="row">
										<div class="col-4"> <img src="assets/product.png" width="75" height="75" /> </div>
										<div class="col-8">
											<div class="fw-bolder"> Island Gas Cylinder</div> <span>&#8369;</span>1,420.69
											<div> Qty. 1</div> <a class="text-danger">(Remove)</a> </div>
									</div>
								</li>
								<!-- END LOOP CART HERE -->
								<li class="m-3">
									<div class="d-grid gap-2">
										<button class="btn btn-danger" type="button"> <i class="pt-1 fa-solid fa-cart-shopping"></i> Checkout</button>
									</div>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</nav>
	<section class="h-100 gradient-custom">
		<div class="container py-5">
			<div class="row d-flex justify-content-center my-4">
			<div class="col-md-8">
				<div class="card mb-4">
				<div class="card-header py-3">
					<h5 class="mb-0">Cart - 2 items</h5>
				</div>
				<div class="card-body">
					<!-- Single item -->
					<div class="row">
					<div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
						<!-- Image -->
						<div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
						<img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/12a.webp"
							class="w-100" alt="Blue Jeans Jacket" />
						<a href="#!">
							<div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
						</a>
						</div>
						<!-- Image -->
					</div>

					<div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
						<!-- Data -->
						<p><strong>Blue denim shirt</strong></p>
						<p>Color: blue</p>
						<p>Size: M</p>
						<button type="button" class="btn btn-primary btn-sm me-1 mb-2" data-mdb-toggle="tooltip"
						title="Remove item">
						<i class="fas fa-trash"></i>
						</button>
						<button type="button" class="btn btn-danger btn-sm mb-2" data-mdb-toggle="tooltip"
						title="Move to the wish list">
						<i class="fas fa-heart"></i>
						</button>
						<!-- Data -->
					</div>

					<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
						<!-- Quantity -->
						<div class="d-flex mb-4" style="max-width: 300px">
						<button class="btn btn-primary px-3 me-2"
							onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
							<i class="fas fa-minus"></i>
						</button>

						<div class="form-outline">
							<input id="form1" min="0" name="quantity" value="1" type="number" class="form-control" />
							<label class="form-label" for="form1">Quantity</label>
						</div>

						<button class="btn btn-primary px-3 ms-2"
							onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
							<i class="fas fa-plus"></i>
						</button>
						</div>
						<!-- Quantity -->

						<!-- Price -->
						<p class="text-start text-md-center">
						<strong>$17.99</strong>
						</p>
						<!-- Price -->
					</div>
					</div>
					<!-- Single item -->

					<hr class="my-4" />

					<!-- Single item -->
					<div class="row">
					<div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
						<!-- Image -->
						<div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
						<img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/13a.webp"
							class="w-100" />
						<a href="#!">
							<div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
						</a>
						</div>
						<!-- Image -->
					</div>

					<div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
						<!-- Data -->
						<p><strong>Red hoodie</strong></p>
						<p>Color: red</p>
						<p>Size: M</p>

						<button type="button" class="btn btn-primary btn-sm me-1 mb-2" data-mdb-toggle="tooltip"
						title="Remove item">
						<i class="fas fa-trash"></i>
						</button>
						<button type="button" class="btn btn-danger btn-sm mb-2" data-mdb-toggle="tooltip"
						title="Move to the wish list">
						<i class="fas fa-heart"></i>
						</button>
						<!-- Data -->
					</div>

					<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
						<!-- Quantity -->
						<div class="d-flex mb-4" style="max-width: 300px">
						<button class="btn btn-primary px-3 me-2"
							onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
							<i class="fas fa-minus"></i>
						</button>

						<div class="form-outline">
							<input id="form1" min="0" name="quantity" value="1" type="number" class="form-control" />
							<label class="form-label" for="form1">Quantity</label>
						</div>

						<button class="btn btn-primary px-3 ms-2"
							onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
							<i class="fas fa-plus"></i>
						</button>
						</div>
						<!-- Quantity -->

						<!-- Price -->
						<p class="text-start text-md-center">
						<strong>$17.99</strong>
						</p>
						<!-- Price -->
					</div>
					</div>
					<!-- Single item -->
				</div>
				</div>
				<div class="card mb-4">
				<div class="card-body">
					<p><strong>Expected shipping delivery</strong></p>
					<p class="mb-0">12.10.2020 - 14.10.2020</p>
				</div>
				</div>
				<div class="card mb-4 mb-lg-0">
				<div class="card-body">
					<p><strong>We accept</strong></p>
					<img class="me-2" width="45px"
					src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/visa.svg"
					alt="Visa" />
					<img class="me-2" width="45px"
					src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/amex.svg"
					alt="American Express" />
					<img class="me-2" width="45px"
					src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/mastercard.svg"
					alt="Mastercard" />
					<img class="me-2" width="45px"
					src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce/includes/gateways/paypal/assets/images/paypal.webp"
					alt="PayPal acceptance mark" />
				</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card mb-4">
				<div class="card-header py-3">
					<h5 class="mb-0">Summary</h5>
				</div>
				<div class="card-body">
					<ul class="list-group list-group-flush">
					<li
						class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
						Products
						<span>$53.98</span>
					</li>
					<li class="list-group-item d-flex justify-content-between align-items-center px-0">
						Shipping
						<span>Gratis</span>
					</li>
					<li
						class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
						<div>
						<strong>Total amount</strong>
						<strong>
							<p class="mb-0">(including VAT)</p>
						</strong>
						</div>
						<span><strong>$53.98</strong></span>
					</li>
					</ul>

					<button type="button" class="btn btn-primary btn-lg btn-block">
					Go to checkout
					</button>
				</div>
				</div>
			</div>
			</div>
		</div>
		</section>
</body>

</html>