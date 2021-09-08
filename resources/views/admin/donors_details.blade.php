@extends('admin.layout')

@section('row')
    <!-- Quick Action Toolbar Starts-->
    <div class="row quick-action-toolbar">
        <div class="col-md-12 grid-margin">
          <div class="card">
            <div class="card-header d-block d-md-flex">
              <h5 class="mb-0 text-center">Donor Details</h5>
            </div>
            <div class="d-md-flex row m-0 quick-action-btns" role="group" aria-label="Quick action buttons">
              <div class="col-sm-6 col-md-6 p-3 text-center btn-wrapper">
                <button type="button" class="tablinks btn px-0" onclick="openDetail(event, 'Profile')"> <i class="icon-user mr-2"></i> Profile</button>
              </div>
              <div class="col-sm-6 col-md-6 p-3 text-center btn-wrapper">
                <button type="button" class="tablinks btn px-0" onclick="openDetail(event, 'Acceptors')"><i class="icon-docs mr-2"></i> Acceptors</button>
              </div>
            </div>
          </div>
        </div>
    </div>
    <!-- Quick Action Toolbar Ends-->
      
    <div id="Profile" class="tabcontent">
        <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="/images/donor/{{$donor->image}}" alt="Admin" style="width:150px;margin-bottom:5%; ">
                    <div class="mt-3">
                      <h4>{{$donor->name}}</h4>
                      <p class="text-secondary mb-1">{{$donor->email}}</p>
                      @if ($donor->status == 0)
                      <button class="btn btn-danger mt-3">Donated</button>
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
                  {{-- <hr> --}}
                  {{-- <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-theme" target="__blank" href="/donor/profile/edit/{{$donor->id}}" style="padding:2px 15px;border-radius:2px;font-weight:400;">Edit</a>
                      <a class="btn btn-theme" target="__blank" href="https://www.bootdey.com/snippets/view/profile-edit-data-and-skills" style="padding:2px 15px;border-radius:2px;font-weight:400;">Change Password</a>

                    </div>
                  </div> --}}
                </div>
              </div>
            </div>
        </div>
    </div>
      
    <div id="Acceptors" class="tabcontent">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-sm-flex align-items-center mb-4">
                    <h4 class="card-title mb-sm-0">List of All Acceptors</h4>
                  </div>
                  <div class="table-responsive border rounded p-1">
                    <table class="table">
                      <thead>
                        <tr>
                          <th class="font-weight-bold">Patient Name</th>
                          <th class="font-weight-bold">Mobile Number</th>
                          <th class="font-weight-bold">Age</th>
                          <th class="font-weight-bold">Blood Group</th>
                          <th class="font-weight-bold">Disease</th>
                          <th class="font-weight-bold">Hospital</th>
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
                </div>               
              </div>
            </div>
          </div>
    </div>
      

@endsection

<script>
    function openDetail(evt, funcName) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(funcName).style.display = "block";
      evt.currentTarget.className += " active";
    }
    </script>
       