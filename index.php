<?php
	include_once './backend/db_connection.php';
	// $result = array();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
	rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
	<link rel="stylesheet" href="./css/style.css">

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<!-- link to Validation.js file -->
	<script src="./js/validation.js" charset="utf-8"></script>

	<title>Afghan Palaw</title>
</head>
<body>
	<!-- Navigation Bar -->
	<nav class="navbar navbar-expand-md bg-light sticky-top">
		<div class="container-fluid">
			<a class="navbar-brand" href="#"><img src="./images/Afghan.png" ></a>
		  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
		     <!-- Navbar Menu -->
		  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item mx-3">
					<a class="nav-link " data-bs-toggle="offcanvas" href="#specialOffers" role="button" aria-controls="specialOffers">Special Offers</a>
				  </li>

			  <li class="nav-item mx-3">
				<a class="nav-link " href="#foodMenu">Food Menu</a>
			  </li>

			  <li class="nav-item mx-3">
				<a class="nav-link " href="#openningHours">Openning Hours</a>
			  </li>

			  <li class="nav-item mx-3">
				<a class="nav-link " href="#footer">Contact Us</a>
			  </li>

			  <li class="nav-item mx-3">
				<a href="#login" class="nav-link "> Sign In</a>
			</li>
		</ul>

 	<!-- Contact details Phone and E-Mail -->
			<ul class="navbar-nav me-auto mb-2">
				<li class="nav-item mx-3"><a href="#" class="nav-link btn btn-outline-danger">(+49)1632435061</a></li>
				<li class="nav-item mx-3"><a href="#" class="nav-link btn btn-outline-danger">Zoneloayls@gmail.com</a></li>
			</ul>

		  </div>
		</div>
	  </nav>

	  <!-- Offcanvas for our special offers -->
	  <div class="offcanvas offcanvas-start" tabindex="-1" id="specialOffers" aria-labelledby="specialOffers">
		<div class="offcanvas-header">
		  <h5 class="offcanvas-title" id="specialOffers">Discounts for This Week:</h5>
		  <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
		</div>
		<!-- Body -->
		<div class="offcanvas-body">

			Please select your favorite food and ordered it.
		<!-- list group for special offers -->
		<ul class="list-group list-group mt-4">
			<li class="list-group-item d-flex justify-content-between align-items-center">
				<a href=" " class="link-offset-2 link-underline link-underline-opacity-0 link-dark">Qabili Palaw </a><span class="badge bg-dark rounded-pill">12%</span>
			</li>
			<li class="list-group-item d-flex justify-content-between align-items-center">
				<a href=" " class="link-offset-2 link-underline link-underline-opacity-0 link-dark"> Manto </a><span class="badge bg-dark rounded-pill">12%</span>
			</li>
			<li class="list-group-item d-flex justify-content-between align-items-center">
				<a href=" " class="link-offset-2 link-underline link-underline-opacity-0 link-dark"> Aschak </a><span class="badge bg-dark rounded-pill">12%</span>
			</li>
			<li class="list-group-item d-flex justify-content-between align-items-center">
				<a href=" " class="link-offset-2 link-underline link-underline-opacity-0 link-dark"> bolani </a><span class="badge bg-dark rounded-pill">12%</span>
			</li>
			<li class="list-group-item d-flex justify-content-between align-items-center">
				<a href=" " class="link-offset-2 link-underline link-underline-opacity-0 link-dark"> Afgani Burger </a><span class="badge bg-dark rounded-pill">12%</span>
			</li>
			<li class="list-group-item d-flex justify-content-between align-items-center">
				<a href=" " class="link-offset-2 link-underline link-underline-opacity-0 link-dark"> Pacha Palaw </a><span class="badge bg-dark rounded-pill">12%</span>
			</li>
		  </ul>
		  <br>

		 <!-- Image -->

			<img src="./images/palaw.jpg.avif" alt="Palaw" class="img-fluid img-thumbnail my-2 ">
			<br>
			<img src="./images/Aschak.jpg" alt="Palaw" class="img-fluid img-thumbnail">

	  </div>
	</div>
		<!-- Website Body  -->
		<!-- Carousel Slider for representing Afghani Foods -->
		<div class="container-fluid">
		<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-indicators">
			  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
			  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
			</div>
			<!-- Images -->
			<div class="carousel-inner ratio ratio-21x9" >
			  <div class="carousel-item active">
				<img src="./images/slider.webp" class="d-block w-100 img-fluid" alt="Aschak">
			  </div>
			  <div class="carousel-item">
				<img src="./images/slider 2.webp" class="d-block mx-auto w-100" alt="Palaw">
			  </div>
			  <div class="carousel-item">
				<img src="./images/slider 3.webp" class="d-block w-100 img-fluid" alt="Aschak">
			  </div>
			</div>
			<!-- Arrow Buttons -->
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
			  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			  <span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
			  <span class="carousel-control-next-icon" aria-hidden="true"></span>
			  <span class="visually-hidden">Next</span>
			</button>
		  </div>
		</div> 	<!-- end of container -->


				<!-- Famous Afghan Dishes -->
			<div class="container-fluid bg-light-subtle p-5 h-50" id="foodMenu">

				<!-- Main Row -->
				<div class="row mt-3">
					<h2 class="text-center ">The most famous Afghan Dishes</h2>
					<small class="lead text-center mb-3">These foods are the mostly ordered foods across Germany...</small>



				<!-- Modal for Menu -->
					<!-- Modal -->
					<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
							<h1 class="modal-title fs-5 text-center" id="exampleModalLabel">Salat</h1>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">

							<!-- Accordion in Model -->
							<form method="post" action="./backend/order.php">
							<div class="accordion" id="size">
								<div class="accordion-item">
								  <h2 class="accordion-header">
									<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									  <h5>Size</h5>
									</button>
								  </h2>
								  <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#size">
									<div class="accordion-body">

									<table class="table table-borderless">

										<tr>
											<td class="text-start"><input type="radio"> small</td>
											<td class="text-end"> 5$ </td>
										</tr>
										<tr>
											<td class="text-start"><input type="radio"> big</td>
											<td class="text-end"> 8$ </td>
										</tr>
									</table>

									</div>
								  </div>
								</div>
								<div class="accordion-item">
								  <h2 class="accordion-header">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">

										<h5>Ingredients</h5>
									</button>
								  </h2>
								  <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
									<div class="accordion-body">

										<table class="table table-borderless">
											<tr>
												<td><input type="radio"> Vinegar</td>
												<td><input type="radio"> Oil</td>
												<td><input type="radio"> Jogurt</td>
												<td><input type="radio"> Spicy</td>
												<td><input type="radio"> Tzaziki</td>
												<td><input type="radio"> Without</td>
											</tr>
										</table>

									</div>
								  </div>
								</div>
								<div class="accordion-item">
								  <h2 class="accordion-header">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									  <h5>Your Choice</h5>
									</button>
								  </h2>
								  <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
									<div class="accordion-body">

										<table class="table table-borderless">
											<tr>
												<td><input type="radio"> Without Vegitables</td>
												<td><input type="radio"> Without Seasoning</td>
												<td><input type="radio"> Without Tomatos</td>

											</tr>


										</table>
										<h6>How Many</h6>
										<select class="form-select" aria-label="selection">

											<option value="1" selected>1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="3">4</option>
											<option value="3">5</option>
											<option value="3">6</option>
										  </select>
									</div>
								  </div>
								</div>
							  </div>

							<!-- End of Accordion -->

							</div>
							<div class="modal-footer">
								<button type="submit" class="btn btn-outline-danger" data-bs-dismiss="modal">Check in</button>
							</div>
						</form>
						</div>
						</div>
					</div>


					<!-- Menu List -->
				<div class="col-md-3 sticky-top">
						<h3 class="display-5 text-center ">Menu list</h3>

					<table class="table table-hover">
						<thead>
						<th class="">No</th>
						<th class="">Name</th>
						<th class="">Price: </th>
						</thead>

						<tbody>

							<?php

							while ($row = mysqli_fetch_array($result)) {
							     $results[] = $row;

							}

							foreach ($results as $key => $row) {

							?>
							<td><?php echo $row["food_code"] ?></td>
								<td> <a href="#" class="btn btn-outline-danger border-0" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><?php echo $row["food_name"] ?></a></td>
								<td><?php echo $row["food_price"] ?></td>
							</tr>

						<?php


							}
 						?>

					</tbody>
					</table>

				</div> <!--end of menu list-->


			<!-- Food Menu -->
			<div class="col-md-6 ">



	<!-- Search functionality -->
					<div class="search-box form-group mb-3">
				   		<input type="text"  class="form-control" autocomplete="off" placeholder="food code..." />
				   		<div class="result"></div>
				   	</div>



				<!-- Food Menu container -->
				<div class="row overflow-y-scroll">


					<?php
			   							foreach ($results as $key => $row) {
								?>

											<div class="col-md-3">
												<div class="card mb-2 first-card">
													<img src="./images/palaw.jpg.avif" class="card-img-top img-fluid" alt="Afghan palaw">
													<div class="card-body">
													<p class="text-center fw-bold"><?php echo  $row['food_name'] ?></p>
													<p class="text-center"><?php echo $row['food_price'] ?> $</p>
													<!-- rating -->
													<div class="rating text-center">
														<i class="bi bi-star-fill"></i>
														<i class="bi bi-star-fill"></i>
														<i class="bi bi-star-fill"></i>
														<i class="bi bi-star-fill"></i>
														<i class="bi bi-star-fill"></i>
													</div>
													</div>
												  </div>
											</div>

											<?php


			   							}
			   ?>

				</div>
			</div> <!--end of food menu-->


			<!-- Order Menu -->
			<div class="col-md-3 sticky-top">
				<h3 class="display-5 text-center">Your Orders</h3>

				<nav>
					<div class="nav nav-tabs hstack gap-5" id="nav-tab" role="tablist">
					  <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-delivery" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Delivery</button>
					  <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-pickup" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Pick Up</button>
					</div>
				  </nav>
				  <div class="tab-content" id="nav-tabContent">
					<div class="tab-pane fade show active" id="nav-delivery" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">

						<form>
							<div class="mb-3 mt-3">
								<label for="name" class="form-label">Your Name</label>
								<input type="text" name="name" id="name" class="form-control">
							  </div>

							<div class="mb-3">
							  <label for="address" class="form-label">Your Address</label>
							  <textarea name="address" id="address" class="form-control"></textarea>
							</div>

							<div class="mb-3">
							  <label for="date" class="form-label">Date</label>
							  <input type="date" class="form-control" id="date">
							</div>
							<div class="mb-3">
							<label for="time" class="form-label">Time</label>
							  <input type="time" class="form-control" id="time">
							</div>

							<button type="submit" class="btn btn-outline-danger d-block text-center">place order</button>
						  </form>


					</div>
					<div class="tab-pane fade" id="nav-pickup" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
						<form>
							<div class="mb-3 mt-3">
								<label for="name" class="form-label">Your Name</label>
								<input type="text" name="name" id="name" class="form-control">
							  </div>

							<div class="mb-3">
							  <label for="date" class="form-label">Date</label>
							  <input type="date" class="form-control" id="date">
							</div>
							<div class="mb-3">
							<label for="time" class="form-label">Time</label>
							  <input type="time" class="form-control" id="time">
							</div>

							<button type="submit" class="btn btn-outline-danger d-block text-center">place order</button>
						  </form>

					</div>
				  </div>
			</div>


				</div><!--Main Row-->

			</div>

		<!-- Opening Hours -->
		<div class="container-fluid bg-light-subtle" id="openningHours">
			<h5 class="display-5 text-center">Openning Hours</h5>
			<p class="lead text-center">We are here to serve you. Make an oder we will take care of it.</p>
			<div class="row">
				<div class="col-md-8 m-auto">
				<table class="table table-borderless text-center p-5 mt-3 shadow-sm bg-body-tertiary bordered rounded-3">
					<thead>
						<th>Day</th>
						<th>Pick Up</th>
						<th>Delivery</th>
					</thead>
					<tr>
						<td>Monday</td>
						<td>11:00 - 22:00</td>
						<td>11:30 - 22:30</td>
					</tr>
					<tr>
						<td>Tuesday</td>
						<td>11:00 - 22:00</td>
						<td>11:30 - 22:30</td>
					</tr>
					<tr>
						<td>Wednesday</td>
						<td>11:00 - 22:00</td>
						<td>11:30 - 22:30</td>
					</tr>
					<tr>
						<td>Thursday</td>
						<td>11:00 - 22:00</td>
						<td>11:30 - 22:30</td>
					</tr>
					<tr>
						<td>Friday</td>
						<td>11:00 - 22:00</td>
						<td>11:30 - 22:30</td>
					</tr>
					<tr>
						<td>Saturday</td>
						<td>11:00 - 22:00</td>
						<td>11:30 - 22:30</td>
					</tr>
					<tfoot>
						<td>Don't hesitate to ask Qeustions! </td>
						<td><a href="" class="btn btn-outline-danger"><span class="bi bi-phone">(+49) 1632435061</span></a></td>
						<td><a href="" class="btn btn-outline-danger"><span class="bi bi-email">Afghan Palaw</span></a></td>
					</tfoot>
				</table>
				</div>

			</div>
		</div>

		<!-- Loyal Customers -->
	<div class="container-fluid" id="login">
		<h5 class="text-center m-5">Become our loyal Customer</h5>
		<p class="lead text-center">By becoming our customer, your purchases are counted each time you buy something.
								When you reach the desired amount you will get discounts like free delivery or free Food.
							so <b>Hurry up </b> and register now!
		</p>
		<div class="row justify-content-around">
			<div class="col-md-3">
				<h5 class="text-center">Login Form</h5>
				<form class="shadow-sm p-3 mb-5 bg-body-tertiary" method="post" action="./backend/login.php">

					<div class="mb-3">
					  <label for="email" class="form-label">Email address</label>
					  <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required>
					  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
					</div>
					<div class="mb-3">
					  <label for="password" class="form-label">Password</label>
					  <input type="password" class="form-control" id="password" name="password" required>
					</div>
					<div class="mb-3 form-check">
					  <input type="checkbox" class="form-check-input" id="exampleCheck1">
					  <label class="form-check-label" for="exampleCheck1">Check me out</label>
					</div>
					<button type="submit" class="btn btn-outline-danger">Login</button>
				  </form>
			</div>


			<div class="col-md-6">
				<h5 class="text-center mb-4">Register</h5>

				<form class="row g-3 shadow-sm p-3 mb-5 bg-body-tertiary" method="post" action="./backend/register.php">
					<div class="col-md-4 mb-3">
					  <label for="name" class="form-label">First name</label>
					  <input type="text" class="form-control" id="name" name="first_name" required>
					</div>

					<div class="col-md-4 mb-3">
					  <label for="lastname" class="form-label">Last name</label>
					  <input type="text" class="form-control" id="lastname" name="last_name"  required>
					</div>

					<div class="col-md-4 mb-3">
					  <label for="email" class="form-label">E-Mail</label>
					  <div class="input-group">
						<span class="input-group-text" id="username"><i class="bi bi-envelope-at-fill"></i></span>
						<input type="email" class="form-control" id="email" name="email" aria-describedby="username" required>
					  </div>
					</div>

					<div class="col-md-4 mb-3">
						<label for="password" class="form-label">password</label>
						<div class="input-group">
						  <input type="password" class="form-control" id="password" name="password" aria-describedby="password" required>
						</div>
					  </div>


					<div class="col-md-6 mb-3">
					  <label for="city" class="form-label">City</label>
					  <input type="text" class="form-control" id="city" name="city" required>
					</div>
					<div class="col-md-3 mb-3">
					  <label for="state" class="form-label">State</label>
					  <select class="form-select" id="state" name="state" required>
						<option selected disabled value="">Choose...</option>
						<option>NRW</option>
						<option>Berlin</option>
						<option>Niedersachsen</option>
						<option>Sachsen Anhalt</option>
						<option>Frankfort</option>
					  </select>
					</div>

					<div class="col-md-3 mb-2">
					  <label for="Zip" class="form-label">Zip</label>
					  <input type="text" class="form-control" id="Zip" name="zip_code" required>
					</div>
					<div class="col-12">
					  <div class="form-check">
						<input class="form-check-input" type="checkbox" id="invalidCheck2" name="terms_conditions" required>
						<label class="form-check-label" for="invalidCheck2">
						  Agree to terms and conditions
						</label>
					  </div>
					</div>
					<div class="col-12">
					  <button class="btn btn-outline-danger" type="submit" name="submit">Register</button>
					</div>
				  </form>
			</div>
		</div>
	</div>

	<!-- Footer -->
	<div class="container-fluid p-5  bg-black text-light" id="footer">
		<div class="row mt-5">
			<!-- Address Section -->
			<div class="col-md-3 text-center">
				<h4 class="text-center">Our Adresses:</h4>
			  <dl>
				<dt>First Adress</dt>
				<dd>Am Gorbach 5, 59394 Nordkirchen</dd>

				<dt>Second Adress</dt>
				<dd>Am Gorbach 5, 59394 Nordkirchen</dd>

				<dt>Third Adress</dt>
				<dd>Am Gorbach 5, 59394 Nordkirchen</dd>

				<dt>Forth Adress</dt>
				<dd>Am Gorbach 5, 59394 Nordkirchen</dd>
			  </dl>
			</div>

			<!-- Logo and Brand -->
			<div class="col-md-6 text-center align-items-center footer">
				<img src="./images/Afghan.png" alt="Logo at the Footer" class="img-fluid">
			</div>

			<!-- Social contacts-->
			<div class="col-md-3 social-contact">
				<h4 class="text-center">Get in Touch</h4>
				 <ul class="text-center list-unstyled">
					<li><i class="bi bi-facebook"></i></li>
					<li><i class="bi bi-instagram"></i></li>
					<li><i class="bi bi-youtube"></i></li>
					<li><i class="bi bi-whatsapp"></i></li>
				 </ul>
			</div>
		</div>
	</div>





  <!-- JQUERY CODE FOR LIVE SEARCH  BEGIN -->
  <script>
  $(document).ready(function(){
      $('.search-box input[type="text"]').on("keyup input", function(){
          /* Get input value on change */
          var inputVal = $(this).val();
          var resultDropdown = $(this).siblings(".result");
          if(inputVal.length){
              $.get("search.php", {term: inputVal}).done(function(data){
                  // Display the returned data in browser
                  resultDropdown.html(data);
              });
          } else{
              resultDropdown.empty();
          }
      });

      // Set search input value on click of result item
      $(document).on("click", ".result p", function(){
          $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
          $(this).parent(".result").empty();
      });
  });
  </script>
  <!-- END OF JQUERY CODE -->


  <!-- jQuery CDN -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
	integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	<!-- Carousel Constructor -->
	<script>
		const myCarouselElement = document.querySelector('#myCarousel')
		const carousel = new bootstrap.Carousel(myCarouselElement, {
		interval: 2000,
		touch: false
	});

	// Modal scirpt
			const myModal = document.getElementById('myModal')
			const myInput = document.getElementById('myInput')

			myModal.addEventListener('shown.bs.modal', () => {
			myInput.focus()
	});
   </script>
</body>
</html>
