@extends('admin.layout')

@section('row')
    
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="d-sm-flex align-items-center mb-4">
            <h4 class="card-title mb-sm-0">List of the Requests</h4>
            <a href="{{url('/#request')}}" class="btn btn-info ml-auto mb-3 mb-sm-0"><i class="icon-user-follow"></i> &nbsp;&nbsp;&nbsp; Add Request</a>
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