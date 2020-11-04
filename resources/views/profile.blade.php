@extends('layouts.web')
@section('content')
<section class="nandni">
	<div class="container">
		<h2>Nandini(MT159632546)</h2>
	</div>
</section>
<section class="profile_page">
	<div class="container">
		<div class="row">
			<div class="col-md-3 girl">
				<img src="{{asset('public/web/img/girl.jpg')}}" alt="girl" class="img-fluid">
			</div>	
			<div class="col-md-5 data">
				<ul>
					<li><b>Matrimony ID:</b>   - SH005075982</li>
					<li><b>Age:</b>   24yrs.</li>
					<li><b>Hegiht:</b>   5ft 5inc - 165cms</li>
					<li><b>Marital Status:</b>   Single</li>
					<li><b>Language:</b>   Hindi</li>
					<li><b>Religion:</b>   Hindu</li>
					<li><b>Cast:</b></li>
					<li><b>Location:</b>   , Delhi, India</li>
					<li><b>Life Style:</b>   Traditional</li>
					<li><b>Culture:</b>   Other</li>
					<li><b>Education:</b>   Masters</li>
					<li><b>Occupation:</b>  Not Working</li>
					<li><b>Sallery:</b>  Not Working</li>
					<li><b>Contact #:</b>   Visible to Paid member</li>
				</ul>
			</div>
			<div class="col-md-4 register-new m-o p-0">
				<h4>Let's Create Your Profile Now</h4>
				<!-- form -->
						<div class="register-list-new">	
							<form>
								  <div class="form-group">
									<input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter your email address">
								  </div>
								  <div class="form-group">
									<input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Create a Password">
								  </div>
								  <div class="form-group">
									<input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Enter Mobile No.">
								  </div>
								  <div class="form-group">
									  <select class="form-control son" id="exampleFormControlSelect1">
										  <option>Profile Creating For</option>
										  <option>Self</option>
										  <option>Son</option>
										  <option>Daughter</option>
										  <option>Brother</option>
										  <option>Sister</option>					  
									</select>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
										  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="First Name">
									    </div>
									</div>
									<div class="col-md-6">
									    <div class="form-group">
										  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Last Name">
									    </div>
									</div>
								
									<div class="col-md-6">
									    <div class="form-group">
											<select class="form-control son" id="exampleFormControlSelect1">
											  <option>Gender</option>
											  <option>Male</option>
											  <option>Female</option>					  
											</select>
										</div>
									</div>
									<div class="col-md-6">
									    <div class="form-group">
											<select class="form-control son" id="exampleFormControlSelect1">
											  <option>Religion</option>
											  <option>Hindu</option>
											  <option>Muslim</option>
											  <option>Sikh</option>						  
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<select class="form-control son" id="exampleFormControlSelect1">
											  <option>Country</option>
											  <option>India</option>					  
											</select>
										</div>
									</div>
									<div class="col-md-6">
									    <div class="form-group">
											<select class="form-control son" id="exampleFormControlSelect1">
											  <option>Mother Tongue</option>
											  <option>Punjabi</option>
											  <option>Telgu</option>
											  <option>Hindi</option>					  
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<select class="form-control son" id="exampleFormControlSelect1">
											  <option>Your Diet</option>
											  <option>Veg</option>
											  <option>Non Veg</option>
											  <option>Jain</option>
											  <option>Vegain</option>						  
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<select class="form-control son" id="exampleFormControlSelect1">
											  <option>Your Height</option>
											  <option>157cm</option>
											  <option>160cm</option>
											  <option>162cm</option>
											  <option>165cm</option>						  
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<select class="form-control son" id="exampleFormControlSelect1">
											  <option>Marital Status</option>
											  <option>Married</option>
											  <option>Unmarried</option>
											  <option>Divorced</option>					  
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											  <select class="form-control son" id="exampleFormControlSelect1">
												  <option>Education</option>
												  <option>High School</option>
												  <option>Bachelors</option>
												  <option>Masters</option>
												  <option>Associates degree</option>
												  <option>P.H.D</option>					  
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											  <select class="form-control son" id="exampleFormControlSelect1">
												  <option>Culture</option>
												  <option>Indian</option>
												  <option>Other</option>					  
											</select>
										</div>
									</div>
								
									<div class="col-md-6">
										<div class="form-group">
											  <select class="form-control son" id="exampleFormControlSelect1">
												  <option>Life Style</option>
												  <option>Traditional</option>
												  <option>Other</option>					  
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
										  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Occupation">
									    </div>
									</div>
									<div class="col-md-6">
									    <div class="form-group">
										  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Sallery">
									    </div>
									</div>
							    </div><!-- row end-->
							</form>
						</div>
						
						<!-- Modal footer -->
						<div class="form-group">
						  <button type="button" class="btn login">Submit</button>
						</div>
			</div>
		</div>
	</div>
</section>


<section class="my_self">
	<div class="container">
		<h4>About My Self</h4>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing.</p>
	</div>
</section> 

<section class="appearence">
	<div class="container">
		<h4>Lifestyle & Appearnce</h4>
		<div class="row">
			<div class="col-md-4">
				<img src="{{asset('public/web/img/drink.png')}}" alt="drink" class="img-fluid">
				<h6>No drinking</h6>
			</div>
			<div class="col-md-4">
				<img src="{{asset('public/web/img/non_veg.png')}}" alt="drink" class="img-fluid">
				<h6>Non Vegitarian</h6>
			</div>
			<div class="col-md-4">
				<img src="{{asset('public/web/img/smoke.png')}}" alt="drink" class="img-fluid">
				<h6>No Smoking</h6>
			</div>	
		</div>
	</div>
</section>

@endsection