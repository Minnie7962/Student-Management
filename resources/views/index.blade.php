<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Dashboard</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div id="calendar"></div>
            </div>
            <div class="col-md-6">
                <div id="recent-activities"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div id="notice-board"></div>
            </div>
            <div class="col-md-6">
                <div id="social-media-stats"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div id="key-statistics"></div>
            </div>
            <div class="col-md-6">
                <div id="fees-collection-and-expenses"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="event-calendar"></div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>