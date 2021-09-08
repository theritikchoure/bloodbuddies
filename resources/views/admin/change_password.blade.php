@extends('admin.layout')    

@section('row')
    
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Change Your Password</h4>
            <br>
            @if (Session::has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success</strong> {{session('success')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @elseif(Session::has('fail'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Oops</strong> {{session('fail')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            
            <form class="forms-sample" action="" method="POST">
                @csrf
                @method('PUT')
              <div class="form-group row">
                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Current Password</label>
                <div class="col-sm-9">
                  <input type="password" name="old_pass" class="form-control" id="exampleInputUsername2" placeholder="Current Password">
                </div>
              </div>
              <div class="form-group row">
                <label for="exampleInputEmail2" class="col-sm-3 col-form-label">New Password</label>
                <div class="col-sm-9">
                  <input type="password" name="new_pass" class="form-control" id="exampleInputEmail2" placeholder="New Password">
                </div>
              </div>
              
              <button type="submit" class="btn btn-primary mr-2">Submit</button>
              <button type="reset" class="btn btn-light">Cancel</button>
            </form>
          </div>
        </div>
      </div>
</div>

@endsection