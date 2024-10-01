<html>
<head>
    <title>School Management System</title>
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7f6;
        }
        .sidebar {
            background-color: #0d47a1;
            color: white;
            height: 100vh;
            position: fixed;
            width: 250px;
            padding-top: 20px;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 10px 20px;
        }
        .sidebar a:hover {
            background-color: #1565c0;
        }
        .sidebar .active {
            background-color: #1565c0;
        }
        .content {
            margin-left: 250px;
            padding: 20px;
        }
        .header {
            background-color: white;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #ddd;
        }
        .header .search-bar {
            width: 300px;
        }
        .header .user-info {
            display: flex;
            align-items: center;
        }
        .header .user-info img {
            border-radius: 50%;
            margin-right: 10px;
        }
        .card {
            margin-bottom: 20px;
        }
        .card-header {
            background-color: white;
            border-bottom: 1px solid #ddd;
        }
        .card-body {
            background-color: white;
        }
        .social-card {
            color: white;
            padding: 20px;
            border-radius: 5px;
        }
        .social-card.facebook {
            background-color: #3b5998;
        }
        .social-card.twitter {
            background-color: #1da1f2;
        }
        .social-card.google-plus {
            background-color: #db4437;
        }
        .social-card.linkedin {
            background-color: #0077b5;
        }
        .calendar {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
        }
        .calendar .day {
            display: inline-block;
            width: 40px;
            height: 40px;
            line-height: 40px;
            text-align: center;
            margin: 5px;
            border-radius: 50%;
        }
        .calendar .day.active {
            background-color: #4caf50;
            color: white;
        }
        .calendar .day.event {
            background-color: #f44336;
            color: white;
        }
        .notice-board, .recent-activities {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
        }
        .notice-board .notice, .recent-activities .activity {
            margin-bottom: 10px;
        }
        .notice-board .notice .date, .recent-activities .activity .time {
            font-size: 12px;
            color: #999;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="text-center mb-4">
            <img alt="School Logo" class="img-fluid" height="100" src="https://oaidalleapiprodscus.blob.core.windows.net/private/org-RcpoXHkzChYnDbFAyeQ8tamr/user-ehrvabJ3DufsCu8YJ7PqY5gl/img-IXlgfKHVzLqUxwjYotuX4kby.png?st=2024-09-30T15%3A23%3A07Z&se=2024-09-30T17%3A23%3A07Z&sp=r&sv=2024-08-04&sr=b&rscd=inline&rsct=image/png&skoid=d505667d-d6c1-4a0a-bac7-5c84a87759f8&sktid=a48cca56-e6da-484e-a814-9c849652bcb3&skt=2024-09-30T00%3A59%3A33Z&ske=2024-10-01T00%3A59%3A33Z&sks=b&skv=2024-08-04&sig=XT2PnNsVyAXPT1x06%2Bhc3e7O3qR8RPI5eWhV5DfeffQ%3D" width="100"/>
        </div>
        <a class="active" href="#"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
        <a href="#"><i class="fas fa-user-shield"></i> Admin</a>
        <a href="#"><i class="fas fa-user-graduate"></i> Student</a>
        <a href="#"><i class="fas fa-user-friends"></i> Parents</a>
        <a href="#"><i class="fas fa-chalkboard-teacher"></i> Teachers</a>
        <a href="#"><i class="fas fa-book"></i> Library</a>
        <a href="#"><i class="fas fa-wallet"></i> Account</a>
        <a href="#"><i class="fas fa-school"></i> Class</a>
        <a href="#"><i class="fas fa-book-open"></i> Subject</a>
        <a href="#"><i class="fas fa-calendar-alt"></i> Class Routine</a>
        <a href="#"><i class="fas fa-check-square"></i> Attendance</a>
        <a href="#"><i class="fas fa-file-alt"></i> Exam</a>
        <a href="#"><i class="fas fa-bus"></i> Transport</a>
        <a href="#"><i class="fas fa-bed"></i> Hostel</a>
        <a href="#"><i class="fas fa-bell"></i> Notice</a>
        <a href="#"><i class="fas fa-envelope"></i> Message</a>
        <a href="#"><i class="fas fa-cogs"></i> UI Elements</a>
        <a href="#"><i class="fas fa-map-marker-alt"></i> Map</a>
        <a href="#"><i class="fas fa-user-cog"></i> Account</a>
    </div>
    <div class="content">
        <div class="header">
            <div>
                <h4>Welcome To <span>School Management System</span></h4>
            </div>
            <div class="search-bar">
                <input class="form-control" placeholder="Search Here ..." type="text"/>
            </div>
            <div class="user-info">
                <div class="dropdown">
                    <button aria-expanded="false" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" id="dropdownMenuButton" type="button">English</button>
                    <ul aria-labelledby="dropdownMenuButton" class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">English</a></li>
                        <li><a class="dropdown-item" href="#">Spanish</a></li>
                    </ul>
                </div>
                <div class="ms-3">
                    <i class="fas fa-bell"></i>
                    <i class="fas fa-envelope"></i>
                    <i class="fas fa-cog"></i>
                </div>
                <div class="ms-3">
                    <img alt="User Avatar" height="40" src="https://oaidalleapiprodscus.blob.core.windows.net/private/org-RcpoXHkzChYnDbFAyeQ8tamr/user-ehrvabJ3DufsCu8YJ7PqY5gl/img-K2bLNfxPoMz1wH9GKbuCErQ0.png?st=2024-09-30T15%3A23%3A02Z&se=2024-09-30T17%3A23%3A02Z&sp=r&sv=2024-08-04&sr=b&rscd=inline&rsct=image/png&skoid=d505667d-d6c1-4a0a-bac7-5c84a87759f8&sktid=a48cca56-e6da-484e-a814-9c849652bcb3&skt=2024-09-29T19%3A20%3A38Z&ske=2024-09-30T19%3A20%3A38Z&sks=b&skv=2024-08-04&sig=wAzi4vKg8/blxHY25PyvKXXpYOxCQ6mVp7T%2B62MmX8k%3D" width="40"/>
                    <span>Kazi Fahim</span>
                </div>
            </div>
        </div>
        <div class="container-fluid mt-4">
            <div class="row">
                <div class="col-md-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <i class="fas fa-user-graduate fa-2x text-success"></i>
                            <h3>50,000</h3>
                            <p>Students</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <i class="fas fa-chalkboard-teacher fa-2x text-primary"></i>
                            <h3>10,000</h3>
                            <p>Teachers</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <i class="fas fa-user-friends fa-2x text-warning"></i>
                            <h3>15,000</h3>
                            <p>Parents</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <i class="fas fa-dollar-sign fa-2x text-info"></i>
                            <h3>$30,000</h3>
                            <p>Total Earnings</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">Fees Collection & Expenses</div>
                        <div class="card-body">
                            <canvas id="feesChart"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="social-card facebook">
                                <i class="fab fa-facebook-f fa-2x"></i>
                                <p>Like us on Facebook</p>
                                <h3>30,000</h3>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="social-card twitter">
                                <i class="fab fa-twitter fa-2x"></i>
                                <p>Follow us on Twitter</p>
                                <h3>13,000</h3>
                            </div>
                        </div>
                        <div class="col-md-6 mt-4">
                            <div class="social-card google-plus">
                                <i class="fab fa-google-plus-g fa-2x"></i>
                                <p>Follow us on Google Plus</p>
                                <h3>9,000</h3>
                            </div>
                        </div>
                        <div class="col-md-6 mt-4">
                            <div class="social-card linkedin">
                                <i class="fab fa-linkedin-in fa-2x"></i>
                                <p>Follow us on LinkedIn</p>
                                <h3>18,000</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-6">
                    <div class="calendar">
                        <div class="d-flex justify-content-between align-items-center">
                            <button class="btn btn-light"><i class="fas fa-chevron-left"></i></button>
                            <h5>14 April, 2017</h5>
                            <button class="btn btn-light"><i class="fas fa-chevron-right"></i></button>
                        </div>
                        <div class="d-flex justify-content-between mt-3">
                            <div class="day">Sun</div>
                            <div class="day">Mon</div>
                            <div class="day">Tue</div>
                            <div class="day">Wed</div>
                            <div class="day">Thu</div>
                            <div class="day">Fri</div>
                            <div class="day">Sat</div>
                        </div>
                        <div class="d-flex justify-content-between mt-2">
                            <div class="day">26</div>
                            <div class="day">27</div>
                            <div class="day">28</div>
                            <div class="day">29</div>
                            <div class="day">30</div>
                            <div class="day">31</div>
                            <div class="day">1</div>
                        </div>
                        <div class="d-flex justify-content-between mt-2">
                            <div class="day">2</div>
                            <div class="day">3</div>
                            <div class="day">4</div>
                            <div class="day">5</div>
                            <div class="day">6</div>
                            <div class="day">7</div>
                            <div class="day">8</div>
                        </div>
                        <div class="d-flex justify-content-between mt-2">
                            <div class="day">9</div>
                            <div class="day">10</div>
                            <div class="day">11</div>
                            <div class="day">12</div>
                            <div class="day active">13</div>
                            <div class="day">14</div>
                            <div class="day">15</div>
                        </div>
                        <div class="d-flex justify-content-between mt-2">
                            <div class="day">16</div>
                            <div class="day">17</div>
                            <div class="day">18</div>
                            <div class="day">19</div>
                            <div class="day">20</div>
                            <div class="day">21</div>
                            <div class="day">22</div>
                        </div>
                        <div class="d-flex justify-content-between mt-2">
                            <div class="day">23</div>
                            <div class="day">24</div>
                            <div class="day">25</div>
                            <div class="day event">26</div>
                            <div class="day">27</div>
                            <div class="day">28</div>
                            <div class="day">29</div>
                        </div>
                        <div class="d-flex justify-content-between mt-2">
                            <div class="day">30</div>
                            <div class="day">1</div>
                            <div class="day">2</div>
                            <div class="day">3</div>
                            <div class="day">4</div>
                            <div class="day">5</div>
                            <div class="day">6</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="notice-board">
                        <h5>Notice Board</h5>
                        <div class="notice">
                            <p class="date">16 May, 2017</p>
                            <p><strong>Jennyfar Lopez</strong> 5 min ago</p>
                            <p>Great School managmenesom simply dumy text of the printing.</p>
                        </div>
                        <div class="notice">
                            <p class="date">16 May, 2017</p>
                            <p><strong>Killar Miller</strong> 55 min ago</p>
                            <p>Great School managmenesom simply dumy text of the printing.</p>
                        </div>
                        <div class="notice">
                            <p class="date">16 May, 2017</p>
                            <p><strong>Jennyfar Lopez</strong> 5 min ago</p>
                            <p>Great School managmenesom simply.</p>
                        </div>
                        <div class="notice">
                            <p class="date">16 May, 2017</p>
                            <p><strong>Mike Hussy</strong> 5 min ago</p>
                            <p>Great School managmenesom simply.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="recent-activities">
                        <h5>Recent Activities</h5>
                        <div class="activity">
                            <p class="time">9 minutes ago</p>
                            <p>You followed Olivia Williamson</p>
                        </div>
                        <div class="activity">
                            <p class="time">20 minutes ago</p>
                            <p>You Subscribed to Harold Fuller</p>
                        </div>
                        <div class="activity">
                            <p class="time">30 minutes ago</p>
                            <p>You updated your profile picture</p>
                        </div>
                        <div class="activity">
                            <p class="time">35 minutes ago</p>
                            <p>You deleted homepage.psd</p>
                        </div>
                        <div class="activity">
                            <p class="time">35 minutes ago</p>
                            <p>You deleted homepage.psd</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="text-center mt-4">
            <p>© Copyrights Harra 