@extends('layout')

@section('section')
    
<section class="section-content-block section-secondary-bg">
    
    <div class="container">

        <div class="row">

            <form class="appoinment-form" enctype="multipart/form-data" method="POST">
            @csrf
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 " id="become-donor">
                    
                    <div class="appointment-form-wrapper theme-custom-box-shadow text-center clearfix wow zoomIn">
                        <h3 class="join-heading join-heading-alt">Recycle Yourself  Donate Blood</h3>
                            <div class="form-group col-md-6">
                                <input id="your_name" class="form-control" name="name" placeholder="Name" type="text">
                            </div>
                            <div class="form-group col-md-6">
                                <div class="select-style">
                                    <select class="form-control" name="bg">
                                        <option>Blood Group</option>
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
                            </div>
                            <div class="form-group col-md-6">
                                <div class="select-style">
                                    <select class="form-control" name="gender">
                                        <option>Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <input id="your_name" class="form-control" name="age" placeholder="Age" type="text">
                            </div>
                            <div class="form-group col-md-6">
                                <input id="your_date" class="form-control" name="mobile" placeholder="Mobile" type="text">
                            </div>
                            <div class="form-group col-md-6">
                                <input id="your_time" class="form-control" name="address" placeholder="Address" type="text">
                            </div>
                            <div class="form-group col-md-6">
                                <input id="your_time" class="form-control" name="city" placeholder="City" type="text">
                            </div>
                            <div class="form-group col-md-6">
                                <input id="your_time" class="form-control" name="state" placeholder="State" type="text">
                            </div>
                            <div class="form-group col-md-6">
                                <input id="your_time" class="form-control" name="zip" placeholder="Zip Code" type="text">
                            </div>
                            <div class="form-group col-md-6" style="margin-bottom: 25px;">
                                <input id="image" type="file" name="image" placeholder="Profile Image" />
                                <label for="image">Profile Image</label>
                            </div>  
                            
                    </div>

                    <div class="appointment-form-wrapper theme-custom-box-shadow clearfix text-center wow zoomIn" style="padding-top:5%;">
                            
                            <div class="form-group col-md-6">
                                <input id="username" class="form-control" name="email" placeholder="Email" type="text">
                            </div>
                            <div class="form-group col-md-6">
                                <input id="password" class="form-control" name="password" placeholder="Password" type="password">
                            </div>

                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <button id="btn_submit" class="btn btn-theme" type="submit">Become Life Saver</button>
                            </div>
                    </div>
                    <!-- end .appointment-form-wrapper  -->
                </div>
            </form>
        </div>

    </div>

</section>

@endsection