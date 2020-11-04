@extends('layouts.admin')

@section('content')
<div class="main-panel">
	<div class="content-wrapper">
		<div class="page-header">
			<h3 class="page-title"> User Registration </h3>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">User</a></li>
					<li class="breadcrumb-item active" aria-current="page">Registration</li>
                </ol>
            </nav>
        </div>
        <div class="col-12 grid-margin stretch-card">
        	<div class="card">
        		<div class="card-body">
                   <!--  <h4 class="card-title">Basic form elements</h4>
                    <p class="card-description"> Basic form elements </p> -->
                    <form class="forms-sample" action="{{url('/admin/user/store')}}" enctype="multipart/form-data" method="post">
                        @csrf
                    	<div class="form-group">
                    		<label for="exampleInputName1">First Name</label>
                    		<input type="text" class="form-control" name="first_name" id="exampleInputName1" placeholder="Enter First Name">
                    	</div>
                        <div class="form-group">
                            <label for="exampleInputName2">Last Name</label>
                            <input type="text" class="form-control" name="last_name" id="exampleInputName2" placeholder="Enter Last Name">
                        </div>
                    	<div class="form-group">
                    		<label for="exampleInputEmail3">Email address</label>
                    		<input type="email" class="form-control" name="email" id="exampleInputEmail3" placeholder="Email">
                    	</div>
                        <div class="form-group">
                    		<label for="exampleSelectGender">Gender</label>
                    		<select class="form-control" id="exampleSelectGender" name="gender">
                                <option>Select Gender</option>
                    			<option value="male">Male</option>
                    			<option value="female">Female</option>
                    		</select>
                    	</div>
                        <div class="form-group">
                            <label class="exampleInputEmail33">Date of Birth</label>
                           
                              <input type="text" class="form-control" name="dob" id="exampleInputEmail33" placeholder="dd-mm/yyyy">
                            
                          </div>
                        <div class="form-group">
                            <label for="exampleInputName5">Mobile Number</label>
                            <input type="text" class="form-control" onkeyup="this.value=this.value.replace(/[^0-9-]/g,'');" maxlength="11" name="mobile" id="exampleInputName5" placeholder="Enter Mobile Number" >
                        </div>

                        <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
              
@endsection