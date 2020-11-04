<!doctype html>
<html lang="en">
<head>
	  <title>shubhvivahceremony</title>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- bootstrap css-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<!---fafa icons-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!--script-->
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<!----style.css--->
	<link rel="stylesheet" href="{{asset('public/web/css/style.css')}}">
</head>

<body>
<header>	
	<nav class="navbar navbar-light  menu">
      <div class="container shaddi_belive">
		  <!-- Brand -->
		  <div id="logo">
			<a href="{{url('/')}}"><img src="{{asset('public/web/img/logo.png')}}" alt="logo" class="img-fluid"></a>
		  </div>
		  <div class="bar_item">
			   <ul>
				<li><a href="/help">HELP</a></li>
				<li><a href="#" data-toggle="modal" data-target="#myModal_1">REGISTER FREE!</a></li>
				<div class="modal" id="myModal_1">
					<div class="modal-dialog">
					  <div class="modal-content">
					  
						<!-- Modal Header -->
						<div class="modal-header">
						  <h4 class="modal-title">REGISTER FREE</h4>
						  <button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>

						<!-- form -->
						<div class="login-list">	
							<form>
								  <div class="row">
								  	<div class="col-md-6">
									  <div class="form-group">
										<input type="text" class="form-control" id="formGroupExampleInput" placeholder="First Name">
									  </div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" id="formGroupExampleInput" placeholder="Last Name">
									  	</div>
								  </div>
								</div>
								<div class="form-group">
									  <select class="form-control" id="exampleFormControlSelect1">
										  <option>I am</option>
										  <option>Male</option>
										  <option>Female</option>					  
									</select>
								</div>
								<div class="form-group">
									  <select class="form-control" id="exampleFormControlSelect1">
										  <option>I am Looking For</option>
										  <option>Male</option>
										  <option>Female</option>					  
									</select>
								</div>
								<div class="form-group">
									  <select class="form-control" id="exampleFormControlSelect1">
										  <option>Religion</option>
										  <option>Hindu</option>
										  <option>Muslim</option>
										  <option>Sikh</option>
									</select>
								</div>
								<div class="form-group">
									  <select class="form-control" id="exampleFormControlSelect1">
										  <option>Education</option>
										  <option>High School</option>
										  <option>Bachelors</option>
										  <option>Masters</option>
										  <option>Associates degree</option>
										  <option>P.H.D</option>					  
									</select>
								</div>
								<div class="form-group">
									  <select class="form-control" id="exampleFormControlSelect1">
										  <option>Country</option>
										  <option>India</option>
										  <option>Nepal</option>
										  <option>Bangladesh</option>			  
									</select>
								</div>
								<div class="form-group">
									 <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Mobile No.">
								</div>
								 <div class="form-group">
								     <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Email Address">
								 </div>
								 <div class="form-group">
								     <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Create A Password">
								 </div>  
							</form>
						</div>
						
						<!-- Modal footer -->
						<div class="modal-footer">
						  <button type="button" class="btn login" data-dismiss="modal">Register Now</button>
						</div>
						
					  </div>
					</div>
				  </div>

				  <!-- login button -->
				<i class="fa fa-user log-hom" data-toggle="modal" data-target="#myModal" aria-hidden="true"><a href="#">Login</a></i>
				 <!-- The Modal -->
				  <div class="modal" id="myModal">
					<div class="modal-dialog">
					  <div class="modal-content">
					  
						<!-- Modal Header -->
						<div class="modal-header">
						  <h4 class="modal-title">Login To Your Account</h4>
						  <button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>

						<!-- form -->
						<div class="login-list">	
							<form>
								  <div class="form-group">
									<input type="text" class="form-control" id="formGroupExampleInput" placeholder="Email">
								  </div>
								  <div class="form-group">
									<input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Password">
								  </div>
							</form>
						</div>
						
						<!-- Modal footer -->
						<div class="modal-footer">
						  <button type="button" class="btn login" data-dismiss="modal">Login</button>
						</div>
						
					  </div>
					</div>
				  </div>
			  </ul>
          </div>
			<!-- Toggler/collapsibe Button -->
			  <a class="navbar-toggler "  data-toggle="collapse" data-target="#collapsibleNavbar">
				<i class="fa fa-bars"></i>
			  </a>

			  <!-- Navbar links -->
			  <div class="collapse navbar-collapse" id="collapsibleNavbar">
				<ul class="navbar-nav">
				  <li class="nav-item">
					<a class="nav-link" href="/">Home</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="{{url('/about')}}">About US</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="{{url('/contact')}}">Contact</a>
				  </li>
					<div class="bar_item_1">
						<li><a href="#">HELP</a></li>
						<li><a href="#" data-toggle="modal" data-target="#myModal_4">REGISTER FREE!</a></li>
				<div class="modal" id="myModal_4">
					<div class="modal-dialog">
					  <div class="modal-content">
					  
						<!-- Modal Header -->
						<div class="modal-header">
						  <h4 class="modal-title">REGISTER FREE</h4>
						  <button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>

						<!-- form -->
						<div class="login-list">	
							<form>
								  <div class="row">
								  	<div class="col-md-6">
									  <div class="form-group">
										<input type="text" class="form-control" id="formGroupExampleInput" placeholder="First Name">
									  </div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" id="formGroupExampleInput" placeholder="Last Name">
									  	</div>
								  </div>
								</div>
								<div class="form-group">
									  <select class="form-control" id="exampleFormControlSelect1">
										  <option>I am</option>
										  <option>Male</option>
										  <option>Female</option>					  
									</select>
								</div>
								<div class="form-group">
									  <select class="form-control" id="exampleFormControlSelect1">
										  <option>I am Looking For</option>
										  <option>Male</option>
										  <option>Female</option>					  
									</select>
								</div>
								<div class="form-group">
									  <select class="form-control" id="exampleFormControlSelect1">
										  <option>Religion</option>
										  <option>Hindu</option>
										  <option>Muslim</option>
										  <option>Sikh</option>
									</select>
								</div>
								<div class="form-group">
									  <select class="form-control" id="exampleFormControlSelect1">
										  <option>Education</option>
										  <option>High School</option>
										  <option>Bachelors</option>
										  <option>Masters</option>
										  <option>Associates degree</option>
										  <option>P.H.D</option>					  
									</select>
								</div>
								<div class="form-group">
									  <select class="form-control" id="exampleFormControlSelect1">
										  <option>Country</option>
										  <option>India</option>
										  <option>Nepal</option>
										  <option>Bangladesh</option>			  
									</select>
								</div>
								<div class="form-group">
									 <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Mobile No.">
								</div>
								 <div class="form-group">
								     <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Email Address">
								 </div>
								 <div class="form-group">
								     <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Create A Password">
								 </div>  
							</form>
						</div>
						
						<!-- Modal footer -->
						<div class="modal-footer">
						  <button type="button" class="btn login" data-dismiss="modal">Register Now</button>
						</div>
						
					  </div>
					</div>
				  </div>
						<i class="fa fa-user log-hom" data-toggle="modal" data-target="#myModal" aria-hidden="true"><a href="#">Login</a></i>
						 <!-- The Modal -->
						  <div class="modal" id="myModal_5">
							<div class="modal-dialog">
							  <div class="modal-content">
							  
								<!-- Modal Header -->
								<div class="modal-header">
								  <h4 class="modal-title">Login To Your Account</h4>
								  <button type="button" class="close" data-dismiss="modal">&times;</button>
								</div>

								<!-- form -->
								<div class="login-list">	
									<form>
										  <div class="form-group">
											<input type="text" class="form-control" id="formGroupExampleInput" placeholder="Email">
										  </div>
										  <div class="form-group">
											<input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Password">
										  </div>
									</form>
								</div>
								
								<!-- Modal footer -->
								<div class="modal-footer">
								  <button type="button" class="btn login" data-dismiss="modal">Login</button>
								</div>
								
							  </div>
							</div>
						  </div>
						</div>
				</ul>
			  </div>			  
		</div>
	</nav>
</header>
<!----banner---->