    <!-- Sidebar Area Start Here -->
    <div class="sidebar-main sidebar-menu-one sidebar-expand-md sidebar-color">
        <div class="mobile-sidebar-header d-md-none">
            <div class="header-logo">
                <a href="index.html"><img src="{{ asset('Backend/img/logo1.png') }}" alt="logo"></a>
            </div>
        </div>
        <div class="sidebar-menu-content">
            <ul class="nav nav-sidebar-menu sidebar-toggle-view">
                <li class="nav-item sidebar-nav-item">
                    <a href="#" class="nav-link"><i
                            class="flaticon-dashboard"></i><span>Dashboard</span></a>
                    <ul class="nav sub-group-menu">
                        <li class="nav-item">
                            <a href="index.html" class="nav-link"><i class="fas fa-angle-right"></i>Admin</a>
                        </li>
                        <li class="nav-item">
                            <a href="index3.html" class="nav-link"><i
                                    class="fas fa-angle-right"></i>Students</a>
                        </li>
                        <li class="nav-item">
                            <a href="index4.html" class="nav-link"><i
                                    class="fas fa-angle-right"></i>Parents</a>
                        </li>
                        <li class="nav-item">
                            <a href="index5.html" class="nav-link"><i
                                    class="fas fa-angle-right"></i>Teachers</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item sidebar-nav-item">
                    <a href="#" class="nav-link"><i
                            class="flaticon-classmates"></i><span>Students</span></a>
                    <ul class="nav sub-group-menu">
                        <li class="nav-item">
                            <a href="{{url('Student/all')}}" class="nav-link"><i class="fas fa-angle-right"></i>All
                                Students</a>
                        </li>


                        <li class="nav-item">
                            <a href="{{url('Student/addmission/form')}}" class="nav-link"><i
                                    class="fas fa-angle-right"></i>Admission Form</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{url('Student/stu_reg_view')}}" class="nav-link"><i
                                    class="fas fa-angle-right"></i>Register Student</a>
                        </li>

                        <li class="nav-item">
                            <a href="student-promotion.html" class="nav-link"><i
                                    class="fas fa-angle-right"></i>Student Promotion</a>
                        </li>
                    </ul>
                </li>





                <li class="nav-item sidebar-nav-item">
                    <a href="#" class="nav-link"><i
                            class="flaticon-classmates"></i><span>Branch</span></a>
                    <ul class="nav sub-group-menu">

                        <li class="nav-item">
                            <a href="{{url('branch/all')}}" class="nav-link"><i class="fas fa-angle-right"></i>All
                                Branch</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('add_branch') }}" class="nav-link"><i
                                    class="fas fa-angle-right"></i>Add Branch</a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item sidebar-nav-item">
                    <a href="#" class="nav-link"><i
                            class="flaticon-classmates"></i><span>Institute Subscription</span></a>
                    <ul class="nav sub-group-menu">
                        <li class="nav-item">
                            <a href="{{url('School/subscription/list/all')}}" class="nav-link"><i class="fas fa-angle-right"></i>All
                            Subscription List</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{url('School/subscription/Package/all')}}" class="nav-link"><i class="fas fa-angle-right"></i>All
                                Plan</a>
                        </li>

                    </ul>
                </li>


                <li class="nav-item sidebar-nav-item">
                    <a href="#" class="nav-link"><i
                            class="flaticon-classmates"></i><span>Settings</span></a>
                    <ul class="nav sub-group-menu">
                        <li class="nav-item">
                            <a href="{{ url('add_division') }}" class="nav-link"><i class="fas fa-angle-right"></i>Add Division</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('add_district') }}" class="nav-link"><i class="fas fa-angle-right"></i>Add District</a>
                        </li>

                        <li class="nav-item">
                            <a href="admit-form.html" class="nav-link"><i
                                    class="fas fa-angle-right"></i>Admission Form</a>
                        </li>
                        <li class="nav-item">
                            <a href="student-promotion.html" class="nav-link"><i
                                    class="fas fa-angle-right"></i>Student Promotion</a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item sidebar-nav-item">
                    <a href="#" class="nav-link"><i
                            class="flaticon-multiple-users-silhouette"></i><span>Teachers</span></a>
                    <ul class="nav sub-group-menu">
                        <li class="nav-item">
                            <a href="all-teacher.html" class="nav-link"><i class="fas fa-angle-right"></i>All
                                Teachers</a>
                        </li>
                        <li class="nav-item">
                            <a href="teacher-details.html" class="nav-link"><i
                                    class="fas fa-angle-right"></i>Teacher Details</a>
                        </li>
                        <li class="nav-item">
                            <a href="add-teacher.html" class="nav-link"><i class="fas fa-angle-right"></i>Add
                                Teacher</a>
                        </li>
                        <li class="nav-item">
                            <a href="teacher-payment.html" class="nav-link"><i
                                    class="fas fa-angle-right"></i>Payment</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item sidebar-nav-item">
                    <a href="#" class="nav-link"><i
                            class="flaticon-couple"></i><span>Parents</span></a>
                    <ul class="nav sub-group-menu">
                        <li class="nav-item">
                            <a href="all-parents.html" class="nav-link"><i class="fas fa-angle-right"></i>All
                                Parents</a>
                        </li>
                        <li class="nav-item">
                            <a href="parents-details.html" class="nav-link"><i
                                    class="fas fa-angle-right"></i>Parents Details</a>
                        </li>
                        <li class="nav-item">
                            <a href="add-parents.html" class="nav-link"><i class="fas fa-angle-right"></i>Add
                                Parent</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item sidebar-nav-item">
                    <a href="#" class="nav-link"><i class="flaticon-books"></i><span>Library</span></a>
                    <ul class="nav sub-group-menu">
                        <li class="nav-item">
                            <a href="all-book.html" class="nav-link"><i class="fas fa-angle-right"></i>All
                                Book</a>
                        </li>
                        <li class="nav-item">
                            <a href="add-book.html" class="nav-link"><i class="fas fa-angle-right"></i>Add
                                New
                                Book</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item sidebar-nav-item">
                    <a href="#" class="nav-link"><i
                            class="flaticon-technological"></i><span>Acconunt</span></a>
                    <ul class="nav sub-group-menu">
                        <li class="nav-item">
                            <a href="all-fees.html" class="nav-link"><i class="fas fa-angle-right"></i>All
                                Fees
                                Collection</a>
                        </li>
                        <li class="nav-item">
                            <a href="all-expense.html" class="nav-link"><i
                                    class="fas fa-angle-right"></i>Expenses</a>
                        </li>
                        <li class="nav-item">
                            <a href="add-expense.html" class="nav-link"><i class="fas fa-angle-right"></i>Add
                                Expenses</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item sidebar-nav-item">
                    <a href="#" class="nav-link"><i
                            class="flaticon-maths-class-materials-cross-of-a-pencil-and-a-ruler"></i><span>course</span></a>
                    <ul class="nav sub-group-menu">
                        <li class="nav-item">
                            <a href="{{url('course/all')}}" class="nav-link"><i class="fas fa-angle-right"></i>All
                                course</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('course/add')}}" class="nav-link"><i class="fas fa-angle-right"></i>Add
                                New
                                Course</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item sidebar-nav-item">
                    <a href="#" class="nav-link"><i
                            class="flaticon-maths-class-materials-cross-of-a-pencil-and-a-ruler"></i><span>Session</span></a>
                    <ul class="nav sub-group-menu">
                        <li class="nav-item">
                            <a href="{{url('Session/all')}}" class="nav-link"><i class="fas fa-angle-right"></i>All
                                Session</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('Session/add')}}" class="nav-link"><i class="fas fa-angle-right"></i>Add
                                New
                                Session</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="class-routine.html" class="nav-link"><i
                            class="flaticon-calendar"></i><span>Class
                            Routine</span></a>
                </li>
                <li class="nav-item">
                    <a href="student-attendence.html" class="nav-link"><i
                            class="flaticon-checklist"></i><span>Attendence</span></a>
                </li>
                <li class="nav-item sidebar-nav-item">
                    <a href="#" class="nav-link"><i
                            class="flaticon-shopping-list"></i><span>Exam</span></a>
                    <ul class="nav sub-group-menu">
                        <li class="nav-item">
                            <a href="exam-schedule.html" class="nav-link"><i
                                    class="fas fa-angle-right"></i>Exam
                                Schedule</a>
                        </li>
                        <li class="nav-item">
                            <a href="exam-grade.html" class="nav-link"><i class="fas fa-angle-right"></i>Exam
                                Grades</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="transport.html" class="nav-link"><i
                            class="flaticon-bus-side-view"></i><span>Transport</span></a>
                </li>
                <li class="nav-item">
                    <a href="hostel.html" class="nav-link"><i
                            class="flaticon-bed"></i><span>Hostel</span></a>
                </li>
                <li class="nav-item">
                    <a href="notice-board.html" class="nav-link"><i
                            class="flaticon-script"></i><span>Notice</span></a>
                </li>
                <li class="nav-item">
                    <a href="messaging.html" class="nav-link"><i
                            class="flaticon-chat"></i><span>Messeage</span></a>
                </li>
                <li class="nav-item sidebar-nav-item">
                    <a href="#" class="nav-link"><i class="flaticon-menu-1"></i><span>UI
                            Elements</span></a>
                    <ul class="nav sub-group-menu">
                        <li class="nav-item">
                            <a href="notification-alart.html" class="nav-link"><i
                                    class="fas fa-angle-right"></i>Alart</a>
                        </li>
                        <li class="nav-item">
                            <a href="button.html" class="nav-link"><i
                                    class="fas fa-angle-right"></i>Button</a>
                        </li>
                        <li class="nav-item">
                            <a href="grid.html" class="nav-link"><i class="fas fa-angle-right"></i>Grid</a>
                        </li>
                        <li class="nav-item">
                            <a href="modal.html" class="nav-link"><i class="fas fa-angle-right"></i>Modal</a>
                        </li>
                        <li class="nav-item">
                            <a href="progress-bar.html" class="nav-link"><i
                                    class="fas fa-angle-right"></i>Progress Bar</a>
                        </li>
                        <li class="nav-item">
                            <a href="ui-tab.html" class="nav-link"><i class="fas fa-angle-right"></i>Tab</a>
                        </li>
                        <li class="nav-item">
                            <a href="ui-widget.html" class="nav-link"><i
                                    class="fas fa-angle-right"></i>Widget</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="map.html" class="nav-link"><i
                            class="flaticon-planet-earth"></i><span>Map</span></a>
                </li>
                <li class="nav-item">
                    <a href="account-settings.html" class="nav-link"><i
                            class="flaticon-settings"></i><span>Account</span></a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Sidebar Area End Here -->
