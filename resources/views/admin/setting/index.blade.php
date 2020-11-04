@extends('layouts.admin')

@section('content')
<div class="main-panel">
	<div class="content-wrapper">
		<div class="page-header">
			<h3 class="page-title"> Setting </h3>
			<!-- <nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">User</a></li>
					<li class="breadcrumb-item active" aria-current="page">Registration</li>
                </ol>
            </nav> -->
        </div>
        @if(session('msg_send'))
            <div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success!</strong> {{session('msg_send')}}
            </div>
        @endif
        <div class="col-12 grid-margin stretch-card">
        	<div class="card">
        		<div class="card-body">
                   <!--  <h4 class="card-title">Basic form elements</h4>
                    <p class="card-description"> Basic form elements </p> -->
                    <form class="forms-sample" action="{{url('/admin/setting/update')}}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="user_id" value="{{$AuthDetails->id}}">
                    	<div class="form-group">
                    		<label for="exampleInputName1">First Name</label>
                    		<input type="text" class="form-control" value="{{$AuthDetails->name}}" name="first_name" id="exampleInputName1" placeholder="Enter First Name">
                    	</div>
                        <div class="form-group">
                            <label for="exampleInputName2">Last Name</label>
                            <input type="text" class="form-control" value="{{$AuthDetails->last_name}}" name="last_name" id="exampleInputName2" placeholder="Enter Last Name">
                        </div>
                    	<div class="form-group">
                    		<label for="exampleInputEmail3">Email address</label>
                    		<input type="email" class="form-control" value="{{$AuthDetails->email}}" name="email" id="exampleInputEmail3" placeholder="Email">
                    	</div>
                        <div class="form-group">
                    		<label for="exampleSelectGender">Gender</label>
                    		<select class="form-control" id="exampleSelectGender" name="gender">
                                <option>Select Gender</option>
                    			@if($AuthDetails->gender == 'male')
                                    <option value="male" selected="">Male</option>
                                    <option value="female">Female</option>
                                @elseif($AuthDetails->gender == 'female')
                                    <option value="male">Male</option>
                                    <option value="female" selected>Female</option>
                                @else
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                @endif
                    		</select>
                    	</div>

                        <div class="form-group">
                            <label class="exampleInputEmail33">Date of Birth</label>
                           
                              <input type="text" class="form-control" value= "{{$AuthDetails->dob}}" name="dob" id="exampleInputEmail33" placeholder="dd-mm/yyyy">
                            
                          </div>

                        <div class="form-group">
                            <label for="exampleInputName5">Mobile Number</label>
                            <input type="text" class="form-control" value="{{$AuthDetails->mobile}}" name="mobile" id="exampleInputName5" placeholder="Enter Mobile Number" onkeyup="this.value=this.value.replace(/[^0-9-]/g,'');" maxlength="11" >
                        </div>

                        <button type="submit" class="btn btn-gradient-primary mr-2">Update</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
              
@endsection