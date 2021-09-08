@extends('admin.layout')

@section('row')
  <!-- Quick Action Toolbar Starts-->
  <div class="row quick-action-toolbar">
    <div class="col-md-12 grid-margin">
      <div class="card">
        <div class="card-header d-block d-md-flex">
          <h5 class="mb-0">Quick Actions</h5>
        </div>
        <div class="d-md-flex row m-0 quick-action-btns" role="group" aria-label="Quick action buttons">
          <div class="col-sm-6 col-md-3 p-3 text-center btn-wrapper">
            <a href="{{route('home')}}" target="_blank">
              <button type="button" class="btn px-0"> <i class="icon-globe mr-2"></i> Your Website</button>
            </a>
          </div>
          <div class="col-sm-6 col-md-3 p-3 text-center btn-wrapper">
            <a href="{{route('admin.donors')}}">
              <button type="button" class="btn px-0"><i class="icon-people mr-2"></i> Donors</button>
            </a>
          </div>
          <div class="col-sm-6 col-md-3 p-3 text-center btn-wrapper">
            <a href="{{route('admin.requests')}}">
              <button type="button" class="btn px-0"><i class="icon-bubble mr-2"></i> Requests</button>
            </a>
          </div>
          <div class="col-sm-6 col-md-3 p-3 text-center btn-wrapper">
            <a href="{{route('admin.logout')}}">
              <button type="button" class="btn px-0"><i class="icon-logout mr-2"></i>Logout</button>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Quick Action Toolbar Ends-->
  
  
  <div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="d-sm-flex align-items-center mb-4">
            <h4 class="card-title mb-sm-0">List of the Donors</h4>
          </div>
          <div class="table-responsive border rounded p-1">
            <table class="table">
              <thead>
                <tr>
                  <th class="font-weight-bold">Donor Name</th>
                  <th class="font-weight-bold">Email</th>
                  <th class="font-weight-bold">Blood Group</th>
                  <th class="font-weight-bold">Age</th>
                  <th class="font-weight-bold">Mobile</th>
                  <th class="font-weight-bold">City</th>
                  <th class="font-weight-bold">Actions</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($donor as $item)
                    <tr>
                        <td>
                        <img class="img-sm rounded-circle" src="/images/donor/{{$item->image}}" alt="profile image">&nbsp;&nbsp; {{$item->name}}
                        </td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->bg}}</td>
                        <td>{{$item->age}}</td>
                        <td>{{$item->mobile}}</td>
                        <td>{{$item->city}}</td>
                        <td>
                            <a href="/admin/donors/details/{{$item->id}}">
                              <button type="button" class="btn btn-inverse-primary btn-rounded btn-icon">
                                  <i class="icon-cursor"></i>
                              </button>
                            </a>
                            <button type="button" class="btn btn-inverse-info btn-icon">
                                <i class="icon-pencil"></i>
                            </button>
                            <a href="/admin/donors/delete/{{$item->id}}">
                                <button type="button" class="btn btn-inverse-danger btn-icon">
                                    <i class="icon-trash"></i>
                                </button>
                            </a>
                        </td>
                    </tr>
                  @endforeach                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
</div>

  <div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="d-sm-flex align-items-center mb-4">
            <h4 class="card-title mb-sm-0">List of the Requests</h4>
          </div>
          <div class="table-responsive border rounded p-1">
            <table class="table">
              <thead>
                <tr>
                  <th class="font-weight-bold">Patient's Name</th>
                  <th class="font-weight-bold">Disease</th>
                  <th class="font-weight-bold">Blood Group</th>
                  <th class="font-weight-bold">Mobile</th>
                  <th class="font-weight-bold">City</th>
                  <th class="font-weight-bold">Request Status</th>
                  <th class="font-weight-bold">Actions</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($requests as $item)
                    <tr>
                        <td>{{$item->p_name}}</td>
                        <td>{{$item->p_disease}}</td>
                        <td>{{$item->p_bg}}</td>
                        <td>{{$item->mobile}}</td>
                        <td>{{$item->p_city}}</td>
                        <td>
                          @if ($item->status == 1)
                          <button type="button" class="btn btn-outline-warning btn-icon-text">
                            <i class="icon-info btn-icon-prepend"></i> Pending </button>
                          @else
                          <button type="button" class="btn btn-outline-info btn-icon-text">
                            <i class="icon-check btn-icon-prepend"></i> Donated </button>
                          @endif
                        </td>
                        <td>
                            <a href="/admin/donors/details/{{$item->id}}">
                              <button type="button" class="btn btn-inverse-primary btn-rounded btn-icon">
                                  <i class="icon-cursor"></i>
                              </button>
                            </a>
                            <button type="button" class="btn btn-inverse-info btn-icon">
                                <i class="icon-pencil"></i>
                            </button>
                            <a href="/admin/requests/delete/{{$item->id}}">
                                <button type="button" class="btn btn-inverse-danger btn-icon">
                                    <i class="icon-trash"></i>
                                </button>
                            </a>
                        </td>
                    </tr>
                  @endforeach                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
</div>

@endsection