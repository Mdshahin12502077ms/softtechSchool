@extends('Backend.admin.include.master')

@section('content')
    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area">
            <h3>Edit Institute Subscription</h3>
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>Edit Institute Subscription</li>
            </ul>
        </div>
        <div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                           <h3>Edit Institute Subscription</h3>

                            </div>
                            <div class="card-body">
                                <form class="new-added-form" action="{{url('School/subscription/subscription/update',$edit_subscription->id)}}" method="Post" enctype="multipart/form-data">
                                    @csrf
                                     <div class="row">


                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                            <label>Subscription Reg. No</label>
                                            <input type="text" name="sub_reg" value="{{$edit_subscription->subs_reg}}" class="form-control" data-position="bottom right">

                                        </div>

                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                            <label>Institute Reg. No</label>
                                            <input type="text" name="registration_id" value="{{$edit_subscription->branch->registration_id}}" class="form-control" data-position="bottom right">

                                        </div>

                                         {{-- <div class="col-xl-3 col-lg-6 col-12 form-group">
                                             <label>Select Branch</label>
                                             <select name="branch_id" class="select2">
                                                 <option value="{{$edit_subscription->branch_id}}">{{$edit_subscription->branch->institute_name}}</option>
                                                 @foreach ($branchSubs as $branchSubs)
                                                 <option value="{{$branchSubs->id}}">{{$branchSubs->institute_name}}</option>
                                                 @endforeach

                                             </select>
                                         </div> --}}

                                         <div class="col-xl-3 col-lg-6 col-12 form-group">
                                             <label>Select Plan</label>
                                             <select name="plan_id" class="select2">
                                                 <option value="{{$edit_subscription->plan_id}}">{{$edit_subscription->plan->name}}</option>
                                                 @foreach ($plansubs as $planSubs)
                                                 <option value="{{$planSubs->id}}">{{$planSubs->name}}</option>
                                                 @endforeach

                                             </select>
                                         </div>

                                         <div class="col-xl-3 col-lg-6 col-12 form-group">
                                            <label>Starting Date</label>
                                            <input name="starting_date" type="text" placeholder="dd/mm/yyyy" class="form-control air-datepicker" data-position="bottom right">
                                            <i class="far fa-calendar-alt"></i>
                                        </div>

                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                            <label>Ending Date</label>
                                            <input name="expired_date" type="text" placeholder="dd/mm/yyyy" class="form-control air-datepicker" data-position="bottom right">
                                            <i class="far fa-calendar-alt"></i>
                                        </div>

                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                            <label>Update Status</label>
                                            <select name="status" class="select2">
                                                <option value="{{$edit_subscription->status}}">{{$edit_subscription->status}}</option>
                                                <option value="Pending">Pending</option>
                                                <option value="Approved">Approved</option>
                                                <option value="Expired">Expired</option>
                                               {{-- <option value="Cancelled"></option> --}}

                                            </select>
                                        </div>

                                         <div class="col-md-6 form-group"></div>
                                         <div class="col-12 form-group mg-t-8">
                                             <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
                                             <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                                         </div>
                                     </div>
                                 </form>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>
        <!-- Social Media End Here -->
    @endsection
<script>

</script>

