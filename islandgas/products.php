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
	<section style="background-color: #eee;">
		<div class="text-center container py-5">
            <div class="custom islandgas-color fw-bolder custom-header mb-4 fs-1"> Our Bestsellers! </div>
			<div class="row">
                <!-- LOOP YOUR PRODUCTS HERE -->
				<div class="col-lg-4 col-md-12 mb-4">
					<div class="card">
						<div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light" data-mdb-ripple-color="light"> 
                            <img src="assets/products/prod1.jpg" class="w-100" height="364" style="object-fit:contain;"/>
							<a href="#!">
								<div class="mask">
									<div class="d-flex justify-content-start align-items-end h-100">
										<h5><span class="badge bg-primary ms-2">New</span></h5> </div>
								</div>
								<div class="hover-overlay">
									<div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
								</div>
							</a>
						</div>
						<div class="card-body">
							<a href="" class="text-reset">
								<h5 class="card-title mb-3">{{ PRODUCT NAME }}</h5> </a>
							<a href="" class="text-reset">
								<p>{{ PRODUCT CATEGORY }}</p>
							</a>
							<h6 class="mb-3">
                                <s><span>&#8369;</span> {{ ORIG PRICE }}</s><strong class="ms-2 text-danger"><span>&#8369;</span> {{ SALE PRICE }}</strong>
                            </h6> 
                        </div>
                        <div class="card-actions p-4">
                            <div class="d-grid gap-2">
                                <button class="btn btn-danger" type="button">Add to Cart</button>
                            </div>
                        </div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-4">
					<div class="card">
						<div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light" data-mdb-ripple-color="light"> 
                            <img src="assets/products/prod2.png" height="364" class="w-100" style="object-fit:contain;"/>
							<a href="#!">
								<div class="mask">
									<div class="d-flex justify-content-start align-items-end h-100">
										<h5><span class="badge bg-success ms-2">Eco</span></h5> </div>
								</div>
								<div class="hover-overlay">
									<div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
								</div>
							</a>
						</div>
						<div class="card-body">
							<a href="" class="text-reset">
								<h5 class="card-title mb-3">{{ PRODUCT NAME }}</h5> </a>
							<a href="" class="text-reset">
								<p>{{ PRODUCT CATEGORY }}</p>
							</a>
							<h6 class="mb-3">
                                <s><span>&#8369;</span> {{ ORIG PRICE }}</s><strong class="ms-2 text-danger"><span>&#8369;</span> {{ SALE PRICE }}</strong>
                            </h6> 
                        </div>
                        <div class="card-actions p-4">
                            <div class="d-grid gap-2">
                                <button class="btn btn-danger" type="button">Add to Cart</button>
                            </div>
                        </div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-4">
					<div class="card">
						<div class="bg-image hover-zoom ripple" data-mdb-ripple-color="light"> 
                            <img src="assets/products/prod3.png" class="w-100" height="364" style="object-fit:contain;"/>
							<a href="#!">
								<div class="mask">
									<div class="d-flex justify-content-start align-items-end h-100">
										<h5><span class="badge bg-danger ms-2">-10%</span></h5> </div>
								</div>
								<div class="hover-overlay">
									<div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
								</div>
							</a>
						</div>
						<div class="card-body">
							<a href="" class="text-reset">
								<h5 class="card-title mb-3">{{ PRODUCT NAME }}</h5> </a>
							<a href="" class="text-reset">
								<p>{{ PRODUCT CATEGORY }}</p>
							</a>
							<h6 class="mb-3">
                                <s><span>&#8369;</span> {{ ORIG PRICE }}</s><strong class="ms-2 text-danger"><span>&#8369;</span> {{ SALE PRICE }}</strong>
                            </h6> 
                        </div>
                        <div class="card-actions p-4">
                            <div class="d-grid gap-2">
                                <button class="btn btn-danger" type="button">Add to Cart</button>
                            </div>
                        </div>
					</div>
				</div>
                
			</div>
		</div>
	</section>
</body>

</html>