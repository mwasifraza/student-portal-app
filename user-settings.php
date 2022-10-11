<?php require "include/header.php"; ?>

<section id="user-setting">
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-11 mx-auto">

                <nav aria-label="breadcrumb" class="mb-4">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Settings</li>
                    </ol>
                </nav>

                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-4 d-md-block">
                        <div class="card card-left d-md-block d-none">
                            <div class="card-body">
                                <nav class="nav">
                                    <a data-toggle="tab" class="nav-link active" href="#profile">
                                        <i class="fas fa-user mr-1"></i> Profile
                                    </a>
                                    <a data-toggle="tab" class="nav-link" href="#account">
                                        <i class="fas fa-user-cog mr-1"></i> Account Settings
                                    </a>
                                    <a data-toggle="tab" class="nav-link" href="#security">
                                        <i class="fas fa-user-shield mr-1"></i> Security
                                    </a>
                                    <a data-toggle="tab" class="nav-link" href="#notification">
                                        <i class="fas fa-bell mr-1"></i> Notification
                                    </a>
                                </nav>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-9 col-lg-8 col-md-8">
                        <div class="card">
                            <div class="card-header boder-bottom mb-3 d-md-none">
                                <ul class="nav nav-tabs card-header-tabs nav-fill">
                                    <li class="nav-item">
                                        <a data-toggle="tab" class="nav-link active" href="#profile">
                                            <i class="fas fa-user mr-1"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a data-toggle="tab" class="nav-link" href="#account">
                                            <i class="fas fa-user-cog mr-1"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a data-toggle="tab" class="nav-link" href="#security">
                                            <i class="fas fa-user-shield mr-1"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a data-toggle="tab" class="nav-link" href="#notification">
                                            <i class="fas fa-bell mr-1"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="card-body tab-content border-0">
                                <!-- profile -->
                                <div class="tab-pane active" id="profile">
                                    <h6>YOUR PROFILE INFORMATION</h6>
                                    <hr>
                                    <form action="#" method="POST" class="mg-zero">
                                        <div class="form-row mb-3">
                                            <div class="form-group col-md-6">
                                                <label for="fname">First Name</label>
                                                <input type="text" name="fname" class='form-control' placeholder='First Name'>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="lname">Last Name</label>
                                                <input type="text" name="lname" class='form-control' placeholder='Last Name'>
                                            </div>
                                        </div>
                                        <div class="form-row mb-3">
                                            <div class="form-group col-md-6">
                                                <label for="">Your Hometown</label>
                                                <input type="text" class="form-control" id="" placeholder="Hometown">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">City where you live</label>
                                                <input type="text" class="form-control" id="" placeholder="City">
                                                <small class="form-text text-muted">City where you currently live in.</small>
                                            </div>
                                        </div>
                                        <div class="form-row mb-3">
                                            <div class="form-group col-lg-4">
                                                <label for="gender">Gender</label>
                                                <select class="form-control">
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select> 
                                            </div>
                                            <div class="form-group col-lg-8">
                                                <label for="">Date of Birth</label>
                                                <div id="birthday" class="form-row">
                                                    <div class="col-md-4">
                                                        <select name="month" id="month" onchange="selectDate(this.value)" class="form-control mb-1">
                                                            <option value="">Month</option>
                                                            <option value="">Jan</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <select name="date" id="date" class="form-control mb-1">
                                                            <option value="">Date</option>
                                                            <option value="">1</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <select name="year" id="year" class="form-control mb-1">
                                                            <option value="">Year</option>
                                                            <option value="">2022</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <small class="form-text text-muted">can be changed limited no. of times</small>
                                            </div>
                                        </div>
                                        <button name="update" id="update" class="btn btn-outline btn-warning btn-block">Update</button>
                                    </form>
                                </div>
                                <!-- account -->
                                <div class="tab-pane" id="account">
                                    <h6>ACCOUNT SETTINGS</h6>
                                    <hr>
                                    <form action="{{ url_for('user_settings') }}" method="POST" class="mg-zero">
                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fas fa-at"></i></div>
                                                </div>
                                                <input type="text" name="username" class='form-control' placeholder='Username'>
                                            </div>
                                            <small class="form-text text-muted">after changing your username, your old one will become avaliable for anyone to claim</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                  <div class="input-group-text"><i class="fas fa-envelope"></i></div>
                                                </div>
                                                <input type="email" name="email" class='form-control' placeholder='name@example.com'>
                                            </div>
                                            <small class="form-text text-muted">please enter only valid email address, otherwise you will not be able to recover your account</small>
                                        </div>
                                        <button name="update" id="update" class="btn btn-outline btn-warning btn-block">Update</button>
                                    </form>
                                </div>
                                <!-- security -->
                                <div class="tab-pane" id="security">
                                    <h6>SECURITY</h6>
                                    <hr>
                                    <form action="{{ url_for('user_settings') }}" method="POST" class="mg-zero">
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" name="password" class='form-control' placeholder='********'>  
                                        </div>
                                        <div class="form-group">
                                            <label for="password">New Password</label>
                                            <input type="password" name="password" class='form-control' placeholder='********'>           
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Confirm New Password</label>
                                            <input type="password" name="password" class='form-control' placeholder='********'>
                                        </div>
                                        <button name="update" id="update" class="btn btn-outline btn-warning btn-block">Update</button>
                                    </form>
                                </div>
                                <!-- notification -->
                                <div class="tab-pane" id="notification">
                                    <h1 class="text-muted">Notification Settings</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require "include/footer.php"; ?>