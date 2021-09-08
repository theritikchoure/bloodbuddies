@extends('admin.layout')

@section('row')
    
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="d-sm-flex align-items-center mb-4">
            <h4 class="card-title mb-sm-0">List of the Donors</h4>
            <a href="{{route('admin.donors.add')}}" class="btn btn-info ml-auto mb-3 mb-sm-0"><i class="icon-user-follow"></i> &nbsp;&nbsp;&nbsp; Add Donor</a>
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
@endsection