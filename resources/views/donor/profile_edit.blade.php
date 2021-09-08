
@extends('layout')

@section('section')

<section class="section-content-block" >
    
    <div class="container margin-top-80">
        <div class="row section-heading-wrapper-alt">

            <div class="col-md-12 col-sm-12 text-center no-img-separator">
                <h4 style="color:black;">Edit Your Profile</h4>
                {{-- <span class="heading-separator heading-separator-horizontal"></span> --}}
                <h2 class="extra-large" style="color:black;">{{$donor->name}}</h2>
            </div>
            <!-- end .col-sm-10  -->

        </div>
    

        <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="/images/donor/{{$donor->image}}" alt="Admin" class="rounded-circle" width="150" style="border-radius: 50%;margin-bottom:5%; ">
                    <div class="mt-3">
                      <h4>{{$donor->name}}</h4>
                      <p class="text-secondary mb-1">{{$donor->email}}</p>
                      @if ($donor->status == 0)
                      <button>Donated</button>
                      @endif
                    </div>
                  </div>
                </div>
              </div>
              
            </div>

            {{-- Paste Here --}}
            <div class="col-lg-8">
                <div class="card">
                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Full Name</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" name="name" value="{{$donor->name}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" name="email" value="{{$donor->email}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Mobile</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" name="mobile" value="{{$donor->mobile}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Blood Group</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <select class="form-control" name="bg">
                                        @if ($donor->bg == 'A+')
                                            <option>Request Blood Group</option>
                                            <option value="A+" selected>A-positive (A+)</option>
                                            <option value="A-">A-negative (A-)</option>
                                            <option value="B+">B-positive (B+)</option>
                                            <option value="B-">B-negative (B-)</option>
                                            <option value="AB+">AB-positive (AB+)</option>
                                            <option value="AB-">AB-negative (AB-)</option>
                                            <option value="O+">O-positive (O+)</option>
                                            <option value="O-">O-negative (O-)</option>
                                        @elseif($donor->bg == 'A-')
                                            <option>Request Blood Group</option>
                                            <option value="A+" >A-positive (A+)</option>
                                            <option value="A-"selected>A-negative (A-)</option>
                                            <option value="B+">B-positive (B+)</option>
                                            <option value="B-">B-negative (B-)</option>
                                            <option value="AB+">AB-positive (AB+)</option>
                                            <option value="AB-">AB-negative (AB-)</option>
                                            <option value="O+">O-positive (O+)</option>
                                            <option value="O-">O-negative (O-)</option>
                                        
                                        @elseif($donor->bg == 'B+')
                                            <option>Request Blood Group</option>
                                            <option value="A+" >A-positive (A+)</option>
                                            <option value="A-">A-negative (A-)</option>
                                            <option value="B+" selected>B-positive (B+)</option>
                                            <option value="B-">B-negative (B-)</option>
                                            <option value="AB+">AB-positive (AB+)</option>
                                            <option value="AB-">AB-negative (AB-)</option>
                                            <option value="O+">O-positive (O+)</option>
                                            <option value="O-">O-negative (O-)</option>

                                        @elseif($donor->bg == 'B-')
                                            <option>Request Blood Group</option>
                                            <option value="A+" >A-positive (A+)</option>
                                            <option value="A-">A-negative (A-)</option>
                                            <option value="B+">B-positive (B+)</option>
                                            <option value="B-" selected>B-negative (B-)</option>
                                            <option value="AB+">AB-positive (AB+)</option>
                                            <option value="AB-">AB-negative (AB-)</option>
                                            <option value="O+">O-positive (O+)</option>
                                            <option value="O-">O-negative (O-)</option>

                                        @elseif($donor->bg == 'AB+')
                                            <option>Request Blood Group</option>
                                            <option value="A+" >A-positive (A+)</option>
                                            <option value="A-">A-negative (A-)</option>
                                            <option value="B+">B-positive (B+)</option>
                                            <option value="B-">B-negative (B-)</option>
                                            <option value="AB+" selected>AB-positive (AB+)</option>
                                            <option value="AB-">AB-negative (AB-)</option>
                                            <option value="O+">O-positive (O+)</option>
                                            <option value="O-">O-negative (O-)</option>
                                            
                                        @elseif($donor->bg == 'AB-')
                                            <option>Request Blood Group</option>
                                            <option value="A+" >A-positive (A+)</option>
                                            <option value="A-">A-negative (A-)</option>
                                            <option value="B+">B-positive (B+)</option>
                                            <option value="B-">B-negative (B-)</option>
                                            <option value="AB+">AB-positive (AB+)</option>
                                            <option value="AB-" selected>AB-negative (AB-)</option>
                                            <option value="O+">O-positive (O+)</option>
                                            <option value="O-">O-negative (O-)</option>

                                        @elseif($donor->bg == 'O+')
                                            <option>Request Blood Group</option>
                                            <option value="A+" >A-positive (A+)</option>
                                            <option value="A-">A-negative (A-)</option>
                                            <option value="B+">B-positive (B+)</option>
                                            <option value="B-">B-negative (B-)</option>
                                            <option value="AB+">AB-positive (AB+)</option>
                                            <option value="AB-">AB-negative (AB-)</option>
                                            <option value="O+" selected>O-positive (O+)</option>
                                            <option value="O-">O-negative (O-)</option>

                                        @elseif($donor->bg == 'O-')
                                            <option>Request Blood Group</option>
                                            <option value="A+" >A-positive (A+)</option>
                                            <option value="A-">A-negative (A-)</option>
                                            <option value="B+">B-positive (B+)</option>
                                            <option value="B-">B-negative (B-)</option>
                                            <option value="AB+">AB-positive (AB+)</option>
                                            <option value="AB-">AB-negative (AB-)</option>
                                            <option value="O+">O-positive (O+)</option>
                                            <option value="O-" selected>O-negative (O-)</option>
                                    
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Gender</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <select class="form-control" name="gender">
                                        @if ($donor->gender == 'Male')
                                            <option>Gender</option>
                                            <option value="Male" selected>Male</option>
                                            <option value="Female">Female</option>

                                        @else
                                            <option>Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female" selected>Female</option>
                                    
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Age</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" name="age" value="{{$donor->age}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Address</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" name="address" value="{{$donor->address}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">City</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" name="city" value="{{$donor->city}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">State</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" name="state" value="{{$donor->state}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Zip Code</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" name="zip_code" value="{{$donor->zip_code}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Old Image</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <img src="/images/donor/{{$donor->image}}" alt="" style="width:20%;">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">New Image</h6>
                                </div>
                                <div class="col-sm-9 ">
                                    <input id="r_form" type="file" name="image" placeholder="Upload Profile Image" />
                                    <label for="r_form">Upload Image</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-9 text-secondary">
                                    <button type="submit" class="btn btn-primary px-4" style="background-color: #007bff;border:#007bff;border-radius:2px;padding:10px 20px; " >Save Changes</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
      
    </div>
    
    <!-- end .container  -->

</section>
    
@endsection
