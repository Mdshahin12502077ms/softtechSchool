@extends('Backend.admin.include.master')

@section('content')
    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area">
            <h3>ADDMISSION FORM</h3>
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>ADDMISSION FORM</li>
            </ul>
        </div>
        <div>
            <div class="container">


                <div class="dashboard-content-one">
                    <!-- Breadcubs Area Start Here -->
                    <div class="breadcrumbs-area">
                        <h3>Students</h3>
                        <ul>
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li>Student Admit Form</li>
                        </ul>
                    </div>
                    <!-- Breadcubs Area End Here -->
                    <!-- Admit Form Area Start Here -->

                    <div class="card height-auto">
                        <div class="card-body">
                            <div class="heading-layout1">
                                <div class="item-title">
                                    <h3>Add New Students Entry</h3>
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                        aria-expanded="false">...</a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#"><i
                                                class="fas fa-times text-orange-red"></i>Close</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                    </div>
                                </div>
                            </div>
                            <form class="new-added-form" action="{{url('Student/insert')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">

                                    <div class="col-xl-12 col-lg-12 col-12" style="background-color: rgb(121, 171, 228)">
                                        <h4 class="mt-4">Course Information</h4>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-12 mt-5 form-group">
                                        <label>Course*</label>
                                        <select name="course_id" class="select2">
                                            <option value="">Please Select Course</option>
                                            @foreach ($course as $course)
                                            <option value="{{$course->id}}">{{$course->course_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-12 mt-5 form-group">
                                        <label>Session*</label>
                                        <select name="session_id" class="select2">
                                            <option value="">Please Select Session</option>
                                            @foreach ($session as $session)
                                            <option value="{{$session->id}}">{{$session->session_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>


                                    <div class="col-xl-12 col-lg-12 col-12" style="background-color: rgb(121, 171, 228)">
                                        <h4 class="mt-4">Educational Qualification</h4>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-12 mt-5 form-group">
                                        <label>Entry Type*</label>
                                        <select name="edu_qualification" class="select2" id="edu_qualification">
                                            <option value="">Please Select Qualification *</option>
                                            <option value="JSC">JSC</option>
                                            <option value="SSC">SSC</option>
                                            <option value="HSC">HSC</option>
                                            <option value="others" >Others</option>
                                        </select>
                                        {{-- <input name="edu_qualification"type="text" placeholder="" class="form-control mt-2" style="display:none"> --}}
                                    </div>
                                    <div class="col-xl-6 col-lg-6 mt-5 col-12 form-group">
                                        <label>Reg No: *</label>
                                        <input name="reg_no" id="other"type="text" placeholder="" class="form-control" >
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                                        <label>Result:*</label>
                                        <input name="result"type="text" placeholder="" class="form-control">
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                                        <label>Reg Board:*</label>
                                        <input name="reg_board"type="text" placeholder="" class="form-control">
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                                        <label>Passing Year:*</label>
                                        <input name="passing_year"type="text" placeholder="" class="form-control">
                                    </div>

                                    <div class="col-xl-12 col-lg-12 mt-5 col-12" style="background-color: rgb(121, 171, 228)">
                                        <h4 class="mt-4">Student Information</h4>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                                        <label>Student Name *</label>
                                        <input name="st_name"type="text" placeholder="" class="form-control">
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                                        <label>Father's Name *</label>
                                        <input type="text" name="f_name" placeholder="" class="form-control">
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                                        <label>Mothers's Name *</label>
                                        <input type="text" name="m_name" placeholder="" class="form-control">
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                                        <label>Gender *</label>
                                        <select name="gender" class="select2">
                                            <option value="">Please Select Gender *</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="other">Others</option>
                                        </select>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                                        <label>Id Type *</label>
                                        <select name="id_type" class="select2">
                                            <option value="">Please Select Id *</option>
                                            <option value="National Id">National Id</option>
                                            <option value="Date Of Birth">Date Of Birth</option>
                                            <option value="others">Others</option>
                                        </select>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                                        <label>Date Of Birth *</label>
                                        <input name="Date_of_birth"type="text" placeholder="dd/mm/yyyy" class="form-control air-datepicker"
                                            data-position='bottom right'>
                                        <i class="far fa-calendar-alt"></i>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                                        <label>Id Number</label>
                                        <input type="text" name="id_number" placeholder="" class="form-control">
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                                        <label>Student Id Number</label>
                                        <input type="text" name="st_id_number" disabled placeholder="" class="form-control">
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                                        <label>Class Roll</label>
                                        <input type="text" name="class_roll" placeholder="" class="form-control">
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                                        <label>Blood Group *</label>
                                        <select name="blood_group"class="select2">
                                            <option value="">Please Select Group *</option>
                                            <option value="A+">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B+">B+</option>
                                            <option value="B-">B-</option>
                                            <option value="AB+">AB+</option>
                                            <option value="AB-">AB-</option>
                                            <option value="O+">O+</option>
                                            <option value="O-">O-</option>
                                        </select>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                                        <label>Religion *</label>
                                        <select name="religion"class="select2">
                                            <option value="">Please Select Religion *</option>
                                            <option value="Islam">Islam</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Christian">Christian</option>
                                            <option value="Buddish">Buddish</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                                        <label>E-Mail</label>
                                        <input type="email" name="email" placeholder="" class="form-control">
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                                        <label>Social Status *</label>
                                        <select name="social_status" class="select2">
                                            <option value="">Please Select Social Status *</option>
                                            <option value="general">General</option>

                                        </select>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                                        <label>Mobile Number</label>
                                        <input name="mobile_no"type="text" placeholder="" class="form-control">
                                    </div>
                                    <div class="col-lg-6 col-12 form-group">
                                        <label>Comments</label>
                                        <textarea name="comment" class="textarea form-control" name="message" id="form-message" cols="10"
                                            rows="9"></textarea>
                                    </div>
                                    <div class="col-lg-6 col-12 form-group mg-t-30">
                                        <label class="text-dark-medium">Upload Student Photo (150px X 150px)</label>
                                        <input type="file" name="student_photo" class="form-control-file">
                                    </div>
                                    <div class="col-lg-6 col-12 form-group mg-t-30">
                                        <label class="text-dark-medium">Natinal Id Card / Birth Certificate </label>
                                        <input type="file" name="id_document" class="form-control-file">
                                    </div>
                                    <div class="col-lg-6 col-12 form-group mg-t-30">
                                        <label class="text-dark-medium">Educational Certificate </label>
                                        <input type="file" name="edu_certificate" class="form-control-file">
                                    </div>
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
        <!-- Social Media End Here -->
    @endsection

@section('js')
<script>
       $(document).ready(function() {
        // alert('hi');
                $("#edu_qualification").click(function(){
                   alert('hi');
                });
              });
</script>


@endsection
