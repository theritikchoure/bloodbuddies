
@extends('layout')

@section('section')

<section class="section-content-block" >
    
    <div class="container margin-top-80">
        <div class="row section-heading-wrapper-alt">

            <div class="col-md-12 col-sm-12 text-center no-img-separator">
                <h4 style="color:black;">Welcome To Your Dashboard</h4>
                {{-- <span class="heading-separator heading-separator-horizontal"></span> --}}
                <h2 class="extra-large" style="color:black;">{{$donor->name}}</h2>
            </div>
            <!-- end .col-sm-10  -->

        </div>
    

        <div class="tab">
            <button class="tablinks" onclick="openCity(event, 'London')">Donated</button>
            <button class="tablinks" onclick="openCity(event, 'Paris')">Acceptors</button>
            <button class="tablinks" onclick="openCity(event, 'Tokyo')">Profile</button>
        </div>
        
        <div id="London" class="tabcontent">
            <section class=" section-pure-white-bg">
    
                <div class="container">
            
                    <div class="row">
            
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 " id="become-donor">
                          @if ($donor->status == '1')
                            <div class="appointment-form-wrapper theme-custom-box-shadow text-center clearfix wow zoomIn">
                              <h3 class="join-heading join-heading-alt">Blood Donated</h3>
                              <form class="appoinment-form" enctype="multipart/form-data" method="POST" action="/donor/donated">
                                  @csrf
                                  <div class="form-group col-md-3"></div>
                                  <div class="form-group col-md-6">
                                      <input id="your_name" class="form-control" name="mobile" placeholder="Patient's Mobile Number" type="text">
                                  </div>                  
                                  <div class="form-group col-md-3"></div>
                                  <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                      <button id="btn_submit" class="btn btn-theme" type="submit">Donated</button>
                                  </div>
          
                              </form>
          
                            </div>
                            <!-- end .appointment-form-wrapper  -->
                          @else
                            <div class="appointment-form-wrapper theme-custom-box-shadow text-center clearfix wow zoomIn" style="padding-top:5%;">
                              
                              <p>You Are Already Blood Donated at {{date('d M Y', strtotime($donor->donated_date));}}</p>
          
                            </div>
                            <!-- end .appointment-form-wrapper  -->
                          @endif
                            
            
                        </div>
            
                    </div>
            
                </div>
            
            </section>
        </div>
        
        <div id="Paris" class="tabcontent">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>Patient Name</th>
                <th>Mobile Number</th>
                <th>Age</th>
                <th>Blood Group</th>
                <th>Disease</th>
                <th>Hospital</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($donor->requisitions as $item)
              <tr>
                <td>{{$item->p_name}}</td>
                <td>{{$item->mobile}}</td>
                <td>{{$item->p_age}}</td>
                <td>{{$item->p_bg}}</td>
                <td>{{$item->p_disease}}</td>
                <td>{{$item->hospital}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        
        <div id="Tokyo" class="tabcontent">
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
                <div class="col-md-8">
                  <div class="card mb-3">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Full Name</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          {{$donor->name}}
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Email</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          {{$donor->email}}
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Mobile</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          {{$donor->mobile}}
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-2">
                          <h6 class="mb-0">BG</h6>
                        </div>
                        <div class="col-sm-2 text-secondary">
                            {{$donor->bg}}
                        </div>
                        <div class="col-sm-2">
                            <h6 class="mb-0">Age</h6>
                        </div>
                        <div class="col-sm-2 text-secondary">
                            {{$donor->age}}
                        </div>
                        <div class="col-sm-2">
                            <h6 class="mb-0">Gender</h6>
                        </div>
                        <div class="col-sm-2 text-secondary">
                            {{$donor->gender}}
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Address</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          {{$donor->address}} {{$donor->city}}
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-12">
                          <a class="btn btn-theme" target="__blank" href="/donor/profile/edit/{{$donor->id}}" style="padding:2px 15px;border-radius:2px;font-weight:400;">Edit</a>
                          <a class="btn btn-theme" target="__blank" href="https://www.bootdey.com/snippets/view/profile-edit-data-and-skills" style="padding:2px 15px;border-radius:2px;font-weight:400;">Change Password</a>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
      
    </div>
    
    <!-- end .container  -->

</section>
    
@endsection


<script>
    function openCity(evt, cityName) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += " active";
    }
</script>