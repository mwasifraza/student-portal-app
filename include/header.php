<!doctype html>
<html lang="en">
<head><meta charset="utf-8">
<link rel="icon" type="image/png" href="{{ url_for('static', filename='img/ku-logo.png') }}" sizes="16x16">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Student Portal</title>

<!-- CSS -->
<link rel="stylesheet" href="static/css/main.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&display=swap">
<style>
body{
    font-family: 'Raleway', sans-serif;
}
</style>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">ISST STUDENTS PORTAL</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav mr-auto"></ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Notification</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Progress</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user"></i>&nbsp;User
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="#"><i class="fas fa-user-edit"></i>&nbsp; Profile Settings</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#"><i class="fas fa-question-circle"></i>&nbsp;&nbsp;Help</a>
                          <a class="dropdown-item" href="#"><i class="fas fa-info-circle"></i>&nbsp;&nbsp;Support</a>
                          <a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt"></i>&nbsp;&nbsp;Logout</a>
                        </div>
                    </li>
                </ul>

                <!-- <ul class="navbar-nav mr-auto"></ul> -->
                <ul class="navbar-nav">
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="{{ url_for('userspage') }}">
                            <i class="fas fa-users"></i>&nbsp;Users
                        </a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-sign-in-alt"></i>&nbsp;Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-user-plus"></i>&nbsp;Register</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <!-- <section>
        <div class="container">            
            {% with messages = get_flashed_messages(with_categories=true) %}
                {% if messages %}
                    {% for category, message in messages %}
                        <div class="alert alert-{{ category }}" id="alert" style="margin-top: 20px;">
                            <button class="m1-2 mb-1 close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            {{ message }}
                        </div>
                    {% endfor %}
                {% endif %}
            {% endwith %}
        </div>
    </section> -->


