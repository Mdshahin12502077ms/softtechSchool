@extends('Backend.admin.include.master')

@section('content')
    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area">
            <h3>ADD DISTRICT</h3>
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>District</li>
            </ul>
        </div>
<div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                <div class="card-header">
                    Add District
                </div>
                <div class="card-body">
                    <form class="mb-5" action="{{ url('district/update',$get_district->id) }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Division Name</label>
                            <br>
                         <select name="division_id" id="" class="form-select form-select-lg mb-3 form-controll">
                            <option value=""selected>Select Division</option>
                            @foreach ($get_division as $division)
                            <option value="{{ $division->id }}" {{($get_district->division_id==$division->id)?'selected':''}}>{{$division->name  }}</option>
                            @endforeach
                         </select>
                          </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label"> District Name</label>
                          <input type="text" name="district_name"class="form-control" placeholder="Enter sub District Name" value="{{$get_district->district_name}}">
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                      </form>
                </div>
              </div>
            </div>


        </div>
    </div>

</div>
        <!-- Social Media End Here -->
    @endsection
