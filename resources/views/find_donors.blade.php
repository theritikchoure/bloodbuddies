<style>
    table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>
@extends('layout')
@section('section')
<section class="padding-bottom-100 padding-top-0">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="cta-section-1 section-secondary-bg text-center theme-custom-box-shadow">
                    <h2 class="text-capitalize">Find Your Donor</h2>
                    <br>
                    <form class="appoinment-form" enctype="multipart/form-data" method="GET" action="">
                        
                        <div class="form-group col-md-6">
                            <input id="your_name" class="form-control" name="location" placeholder="City" type="text" value="{{old ('location') }}" required>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="select-style">
                                
                                    <select class="form-control" name="p_bg" required>
                                        
                                            <option>Requested Blood Group</option>
                                            <option value="Any" selected>Any</option>
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

                        <div class="form-group">
                            <button id="btn_submit" class="btn btn-theme wow bounceIn" type="submit" style="padding: 10px 20px;">Request for Blood</button>
                        </div>  

                    </form>
                    {{-- <a class="btn btn-theme margin-top-24 wow bounceIn" href="{{route('donate')}}">Find Donor</a> --}}
                </div>
            </div>
        </div>
    </div>
</section>

@if(count($donor) < 1)
<section class="padding-bottom-100 padding-top-0">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="alert alert-warning">
                    <strong>Sorry!</strong> No Donor Found.
                </div>      
            </div>
        </div>
    </div>
</section>                                
@else
    <section class="padding-bottom-100 padding-top-0">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h5>List of the Donors</h5>
                    <div style="overflow-x:auto;">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Donor Name</th>
                                    <th>Blood Group</th>
                                    <th>Age</th>
                                    <th>City</th>
                                    <th>Mobile</th>
                                </tr>
                            </thead>
                            
                            @foreach ($donor as $donor)
                            <tr>
                                <td>{{$donor->name}}</td>
                                <td>{{$donor->bg}}</td>
                                <td>{{$donor->age}}</td>
                                <td>{{$donor->city}}</td>
                                <td>
                                    <a href="tel:{{$donor->mobile}}">{{$donor->mobile}}</a>
                                </td>
                            </tr>
                            @endforeach
                        
                        </table>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
@endif

@endsection 