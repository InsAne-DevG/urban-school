<aside class="app-sidebar sticky" id="sidebar">

    <!-- Start::main-sidebar-header -->
    <div class="main-sidebar-header">
        <a href="{{ route('admin-login') }}" class="header-logo">
            <img src="{{ asset('admin/assets/images/logo.png') }}" alt="logo" class="desktop-dark">
        </a>
    </div>
    <!-- End::main-sidebar-header -->

    <!-- Start::main-sidebar -->
    <div class="main-sidebar" id="sidebar-scroll">

        <!-- Start::nav -->
        <nav class="main-menu-container nav nav-pills flex-column sub-open">
            <div class="slide-left" id="slide-left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path> </svg>
            </div>
            <ul class="main-menu">
                <!-- Start::slide__category -->
                <li class="slide__category"><span class="category-name">Dashboard</span></li>
                <!-- End::slide__category -->

                <!-- Start::slide -->
                <li class="slide">
                    <a href="{{ route('school-dashboard') }}" class="side-menu__item">
                        <i class="fe fe-airplay side-menu__icon"></i>
                        <span class="side-menu__label">Dashboard</span>
                    </a>
                </li>
                <!-- End::slide -->

                 <!-- Start::slide__category -->
                 <li class="slide__category"><span class="category-name">Role & Permissions Management</span></li>
                 <!-- End::slide__category -->

                 <li class="slide">
                    <a href="{{ route('school-role-create') }}" class="side-menu__item">
                        <i class="fe fe-box side-menu__icon"></i>
                        <span class="side-menu__label">Create Role</span>
                    </a>
                </li>
                <li class="slide">
                    <a href="{{ route('school-role-list') }}" class="side-menu__item">
                        <i class="fe fe-box side-menu__icon"></i>
                        <span class="side-menu__label">Roles List</span>
                    </a>
                </li>

                <!-- Start::slide__category -->
                <li class="slide__category"><span class="category-name">Department Management</span></li>
                <!-- End::slide__category -->

                <li class="slide">
                    <a href="{{ route('school-department-create') }}" class="side-menu__item">
                        <i class="fe fe-box side-menu__icon"></i>
                        <span class="side-menu__label">Create Department</span>
                    </a>
                </li>

                <li class="slide">
                    <a href="{{ route('school-department-list') }}" class="side-menu__item">
                        <i class="fe fe-box side-menu__icon"></i>
                        <span class="side-menu__label">Department List</span>
                    </a>
                </li>

                <!-- Start::slide__category -->
                <li class="slide__category"><span class="category-name">Employee Managemnet</span></li>
                <!-- End::slide__category -->
                <li class="slide">
                    <a href="{{ route('school-employee-create') }}" class="side-menu__item">
                        <i class="fe fe-box side-menu__icon"></i>
                        <span class="side-menu__label">Create Employee</span>
                    </a>
                </li>
                <li class="slide">
                    <a href="{{ route('school-employee-list') }}" class="side-menu__item">
                        <i class="fe fe-box side-menu__icon"></i>
                        <span class="side-menu__label">Employee List</span>
                    </a>
                </li>
                

                <!-- Start::slide__category -->
                <li class="slide__category"><span class="category-name">Grade Level Managemnet</span></li>
                <!-- End::slide__category -->
                <li class="slide">
                    <a href="{{ route('school-gradelevel-create') }}" class="side-menu__item">
                        <i class="fe fe-box side-menu__icon"></i>
                        <span class="side-menu__label">Create Grade Level</span>
                    </a>
                </li>
                <li class="slide">
                    <a href="{{ route('school-gradelevel-list') }}" class="side-menu__item">
                        <i class="fe fe-box side-menu__icon"></i>
                        <span class="side-menu__label">Grade Level List</span>
                    </a>
                </li>

                <!-- Start::slide__category -->
                <li class="slide__category"><span class="category-name">Subject Managemnet</span></li>
                <!-- End::slide__category -->
                <li class="slide">
                    <a href="{{ route('school-subject-create') }}" class="side-menu__item">
                        <i class="fe fe-box side-menu__icon"></i>
                        <span class="side-menu__label">Create Subject</span>
                    </a>
                </li>
                <li class="slide">
                    <a href="{{ route('school-subject-list') }}" class="side-menu__item">
                        <i class="fe fe-box side-menu__icon"></i>
                        <span class="side-menu__label">Subject List</span>
                    </a>
                </li>

                <!-- Start::slide__category -->
                <li class="slide__category"><span class="category-name">Student Managemnet</span></li>
                <!-- End::slide__category -->

                <!-- Start::slide -->
                <li class="slide">
                    <a href="" class="side-menu__item">
                        <i class="fe fe-box side-menu__icon"></i>
                        <span class="side-menu__label">Student</span>
                        
                    </a>
                    
                </li>
            
            </ul>
            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path> </svg></div>
        </nav>
        <!-- End::nav -->

    </div>
    <!-- End::main-sidebar -->

</aside>