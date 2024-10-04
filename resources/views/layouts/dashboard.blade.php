<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Student Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet">
    @stack('styles')
</head>
<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-dark text-white" id="sidebar-wrapper">
            <div class="sidebar-heading p-3">
                <img src="/logo.png" alt="Logo" class="img-fluid" style="max-height: 50px;">
                <span class="ms-2">SMS</span>
            </div>
            <div class="list-group list-group-flush">
                @section('sidebar')
                    <a href="{{ route('dashboard') }}" class="list-group-item list-group-item-action bg-dark text-white">
                        <i class='bx bxs-dashboard'></i> Dashboard
                    </a>
                    @if(auth()->user()->isAdmin())
                        <a href="{{ route('departments.index') }}" class="list-group-item list-group-item-action bg-dark text-white">
                            <i class='bx bxs-building'></i> Departments
                        </a>
                        <a href="{{ route('staff.index') }}" class="list-group-item list-group-item-action bg-dark text-white">
                            <i class='bx bxs-user-badge'></i> Staff
                        </a>
                    @endif
                    @if(auth()->user()->isTeacher())
                        <a href="{{ route('courses.index') }}" class="list-group-item list-group-item-action bg-dark text-white">
                            <i class='bx bxs-book'></i> Courses
                        </a>
                        <a href="{{ route('attendance.index') }}" class="list-group-item list-group-item-action bg-dark text-white">
                            <i class='bx bxs-calendar'></i> Attendance
                        </a>
                    @endif
                    <a href="{{ route('students.index') }}" class="list-group-item list-group-item-action bg-dark text-white">
                        <i class='bx bxs-user'></i> Students
                    </a>
                    <a href="{{ route('exams.index') }}" class="list-group-item list-group-item-action bg-dark text-white">
                        <i class='bx bxs-notepad'></i> Exams
                    </a>
                    <a href="{{ route('library.books') }}" class="list-group-item list-group-item-action bg-dark text-white">
                        <i class='bx bxs-book-bookmark'></i> Library
                    </a>
                @show
            </div>
        </div>

        <!-- Page Content -->
        <div id="page-content-wrapper" class="bg-light">
            <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
                <div class="container-fluid">
                    <button class="btn btn-link" id="menu-toggle">
                        <i class='bx bx-menu'></i>
                    </button>
                    <div class="dropdown ms-auto">
                        <button class="btn btn-link dropdown-toggle" type="button" id="userDropdown" data-bs-toggle="dropdown">
                            {{ auth()->user()->name }}
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="container-fluid p-4">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                @yield('content')
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById("menu-toggle").addEventListener("click", function(e) {
            e.preventDefault();
            document.getElementById("wrapper").classList.toggle("toggled");
        });
    </script>
    @stack('scripts')
</body>
</html>