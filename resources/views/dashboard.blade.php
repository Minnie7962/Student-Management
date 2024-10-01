<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harra School Management System</title>
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            width: 200px;
            background-color: #f0f0f0;
            padding: 20px;
            border-right: 1px solid #ddd;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .sidebar li {
            margin-bottom: 10px;
        }

        .sidebar a {
            text-decoration: none;
            color: #337ab7;
        }

        .sidebar a:hover {
            color: #23527c;
        }

        .dashboard-content {
            margin-left: 200px;
            padding: 20px;
        }

        .card {
            margin-bottom: 20px;
        }

        .card-body {
            padding: 20px;
        }

        .card-title {
            margin-bottom: 10px;
        }

        .list-group {
            margin-bottom: 20px;
        }

        .list-group-item {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        .list-group-item:last-child {
            border-bottom: none;
        }

        .chart-container {
            width: 100%;
            height: 200px;
        }

        .calendar-container {
            width: 100%;
            height: 200px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Your System Name</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Language</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Notifications</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">User Profile</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="sidebar">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Admin</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Student</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Parents</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Teachers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Library</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Account</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Class</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Subject</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Class Routine</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Attendance</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Exam</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Transport</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Hostel</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Notice</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Message</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"> UI Elements</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Map</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Account</a>
            </li>
        </ul>
    </div>
    <div class="dashboard-content">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Key Statistics</h5>
                        <p class="card-text">Some example text.</p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">50,000 Students</li>
                            <li class="list-group-item">10,000 Teachers</li>
                            <li class="list-group-item">15,000 Parents</li>
                            <li class="list-group-item">$30,000 Total Earnings</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Fees Collection & Expenses</h5>
                        <p class="card-text">Some example text.</p>
                        <div class="chart-container">
                            <canvas id="fees-collection-chart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Social Media Stats</h5>
                        <p class="card-text">Some example text.</p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Facebook: 30,000 likes</li>
                            <li class="list-group-item">Twitter: 13,000 followers</li>
                            <li class="list-group-item">Google Plus: 9,000 followers</li>
                            <li class="list-group-item">LinkedIn: 18,000 followers</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Event Calendar</h5>
                        <p class="card-text">Some example text.</p>
                        <div class="calendar-container">
                            <div id="calendar"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Notice Board</h5>
                        <p class="card-text">Some example text.</p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Notice 1</li>
                            <li class="list-group-item">Notice 2</li>
                            <li class="list-group-item">Notice 3</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Recent Activities</h5>
                        <p class="card-text">Some example text.</p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Activity 1</li>
                            <li class="list-group-item">Activity 2</li>
                            <li class="list-group-item">Activity 3</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>