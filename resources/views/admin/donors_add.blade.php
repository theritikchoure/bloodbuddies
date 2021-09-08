@extends('admin.layout')

@section('row')

<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="d-sm-flex align-items-center mb-4">
                <h4 class="card-title mb-sm-0">Add Donor</h4>
                <a href="{{route('admin.donors')}}" class="btn btn-info ml-auto mb-3 mb-sm-0"><i class="icon-arrow-left"></i> &nbsp;&nbsp;&nbsp; Back</a>
            </div>
            <form class="forms-sample" action="" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="form-group">
                <label for="exampleInputName1">Name</label>
                <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="name">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail3">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email" name="email">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword4">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Password" name="password">
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Name</label>
                <input type="text" class="form-control" id="exampleInputName1" placeholder="Mobile" name="mobile">
              </div>
              <div class="form-group">
                <label for="exampleSelectGender">Blood Group</label>
                <select class="form-control" id="exampleSelectGender" name="bg">
                    <option>Select Blood Group</option>
                    <option value="A+">A-positive (A+)</option>
                    <option value="A-">A-negative (A-)</option>
                    <option value="B+">B-positive (B+)</option>
                    <option value="B-">B-negative (B-)</option>
                    <option value="AB+">AB-positive (AB+)</option>
                    <option value="AB-">AB-negative (AB-)</option>
                    <option value="O+">O-positive (O+)</option>
                    <option value="O-">O-negative (O-)</option>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleSelectGender">Gender</label>
                <select class="form-control" id="exampleSelectGender" name="gender">
                    <option>Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Age</label>
                <input type="text" class="form-control" id="exampleInputName1" placeholder="Age" name="age">
              </div>
              <div class="form-group">
                <label>Upload Profile Image</label>
                <input type="file" class="form-control"  name="image" id="">
              </div>
              <div class="form-group">
                <label for="exampleInputCity1">Address</label>
                <input type="text" class="form-control" id="exampleInputCity1" placeholder="Address" name="address">
              </div>
              <div class="form-group">
                <label for="exampleInputCity1">City</label>
                <input type="text" class="form-control" id="exampleInputCity1" placeholder="City" name="city">
              </div>
              <div class="form-group">
                <label for="exampleInputCity1">State</label>
                <input type="text" class="form-control" id="exampleInputCity1" placeholder="State" name="state">
              </div>
              <div class="form-group">
                <label for="exampleInputCity1">Zip Code</label>
                <input type="text" class="form-control" id="exampleInputCity1" placeholder="Zip Code" name="zip_code">
              </div>

              <button type="submit" class="btn btn-primary mr-2">Submit</button>
              <button class="btn btn-light">Cancel</button>
            </form>
          </div>
        </div>
      </div>
</div>

@endsection