@extends('layouts.admin')

@section('content')
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> Users </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Users</a></li>
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
    
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <a href="{{url('/admin/user/create')}}">
              <button class="btn btn-block btn-lg btn-gradient-primary add_user">+ Add a User</button>
            </a>
            @if(isset($users))
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th> Code </th>
                    <th> Name </th>
                    <th> Email </th>
                    <th> Date of Birth </th>
                    <th> Mobile </th>
                    <th> Gender </th>
                    <th> Date </th>
                    <th> Action </th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($users as $rs)
                    <tr>
                      <td class="py-1"> {{$rs->code}}</td>
                      <td> {{$rs->name}} {{$rs->last_name}} </td>
                      <td> {{ $rs->email}}</td>
                       <td> {{date('d-m-Y', strtotime($rs->dob)) }}</td>
                      <td> {{ $rs->mobile}}</td>
                      <td> {{ $rs->gender}} </td>
                      <td> {{date('d-m-Y', strtotime($rs->created_at)) }}</td>
                      <td>
                        <div class="row icons-list">
                          <div class="col-sm-6 col-md-4 col-lg-3">
                            <a href="{{url('/admin/user/edit')}}/{{$rs->id}}">
                              <i class="mdi mdi-table-edit" title="edit"></i>
                            </a>
                          </div>
                          <div class="col-sm-6 col-md-4 col-lg-3">
                            <i class="mdi mdi-delete-forever delete-user" id="{{$rs->id}}" title="delete" ></i>
                          </div>
                        </div>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
              {!! $users->render() !!}@endif
            </div>
          </div>
        </div>
      </div>
    </div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">CONFIRMATION</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body delete_user_text">
        Are you sure want to delete this user.
      </div>
      <form  action="{{url('/admin/user/delete')}}">
        @csrf
        <div class="modal-footer delete_user_footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary user_delete">YES, DELETE IT</button>
          <input type="hidden" name="user_id" class="user_id">
        </div>
      </form>
    </div>
  </div>
</div>

@endsection