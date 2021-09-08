@extends('layout')

@section('section')
    

<section class="section-content-block section-pure-white-bg">
    
    <div class="container">

        <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 " id="become-donor">
                
                <div class="appointment-form-wrapper theme-custom-box-shadow text-center clearfix wow zoomIn">
                    <h3 class="join-heading join-heading-alt">Donor Login</h3>
                    @if (Session::has('fail'))
                        <div class="alert alert-danger">
                            {{session('fail')}}
                        </div>
                    @endif
                    <form class="appoinment-form" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="form-group col-md-6">
                            <input id="your_name" class="form-control" name="email" placeholder="Email" type="text">
                        </div>
                        <div class="form-group col-md-6">
                            <input id="your_name" class="form-control" name="password" placeholder="Password" type="password">
                        </div>                     

                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                            <button id="btn_submit" class="btn btn-theme" type="submit">Login</button>
                        </div>

                    </form>

                </div>
                <!-- end .appointment-form-wrapper  -->

            </div>

        </div>

    </div>

</section>

@endsection