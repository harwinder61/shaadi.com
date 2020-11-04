@extends('layouts.admin')

@section('content')
<div class="main-panel">
	<div class="content-wrapper">
		<div class="page-header">
			<h3 class="page-title"> Setting </h3>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Setting</a></li>
					<li class="breadcrumb-item active" aria-current="page">Change Password</li>
                </ol>
            </nav>
        </div>
        @if(session('msg_send'))
            <div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success!</strong> {{session('msg_send')}}
            </div>
        @endif

        @if(session('msg_error'))
            <div class="alert alert-danger">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Error!</strong> {{session('msg_error')}}
            </div>
         @endif

        <div class="col-12 grid-margin stretch-card">
        	<div class="card">
        		<div class="card-body">
                   <!--  <h4 class="card-title">Basic form elements</h4>
                    <p class="card-description"> Basic form elements </p> -->
                    <form class="forms-sample" action="{{url('/admin/changepswd')}}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="user_id" value="{{$AuthDetails->id}}">
                    	<div class="form-group">
                    		<label for="exampleInputName1">Old Password</label>
                    		<input type="password" class="form-control" name="old_password" id="exampleInputName1" placeholder="Enter Old Password">
                    	</div>

                        <div class="form-group">
                            <label for="exampleInputName1">New Password</label>
                            <input type="password" class="form-control" name="new_password" id="exampleInputName1" placeholder="Enter New Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Confirm Password</label>
                            <input type="password" class="form-control" name="confirm_password" id="exampleInputName1" placeholder="Enter Confirm Password">
                        </div>
                        

                        <button type="submit" class="btn btn-gradient-primary mr-2">Change Password</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
              
@endsection