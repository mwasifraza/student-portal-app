<?php require "include/header.php"; ?>

<section id="user-setting">
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-11 mx-auto">

                <nav aria-label="breadcrumb" class="mb-4">
                    <ol class="breadcrumb p-3 bg-dark rounded">
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
                                    <a data-bs-toggle="tab" class="nav-link active" href="#profile">
                                        <i class="fas fa-user mr-1"></i> Profile
                                    </a>
                                    <a data-bs-toggle="tab" class="nav-link" href="#account">
                                        <i class="fas fa-user-cog mr-1"></i> Account Settings
                                    </a>
                                    <a data-bs-toggle="tab" class="nav-link" href="#security">
                                        <i class="fas fa-user-shield mr-1"></i> Security
                                    </a>
                                    <a data-bs-toggle="tab" class="nav-link" href="#notification">
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
                                        <a data-bs-toggle="tab" class="nav-link active" href="#profile">
                                            <i class="fas fa-user mr-1"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a data-bs-toggle="tab" class="nav-link" href="#account">
                                            <i class="fas fa-user-cog mr-1"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a data-bs-toggle="tab" class="nav-link" href="#security">
                                            <i class="fas fa-user-shield mr-1"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a data-bs-toggle="tab" class="nav-link" href="#notification">
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
                                    <form action="#" method="POST" class="row g-3 mg-zero">
                                        <div class="form-group col-md-6">
                                            <label for="fname">First Name</label>
                                            <input type="text" name="fname" class='form-control' placeholder='First Name'>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="lname">Last Name</label>
                                            <input type="text" name="lname" class='form-control' placeholder='Last Name'>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="">Your Hometown</label>
                                            <input type="text" class="form-control" id="" placeholder="Hometown">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="">City where you live</label>
                                            <input type="text" class="form-control" id="" placeholder="City">
                                            <small class="form-text text-muted">City where you currently live in.</small>
                                        </div>

                                        <div class="form-group col-lg-4">
                                            <label for="gender">Gender</label>
                                            <select class="form-select">
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select> 
                                        </div>

                                        <div class="form-group col-lg-8">
                                            <label for="">Date of Birth</label>
                                            <div id="birthday" class="row g-3">
                                                <div class="col-md-4">
                                                    <select name="month" id="month" onchange="selectDate(this.value)" class="form-select mb-1">
                                                        <option value="">Month</option>
                                                        <option value="">Jan</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <select name="date" id="date" class="form-select mb-1">
                                                        <option value="">Date</option>
                                                        <option value="">1</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <select name="year" id="year" class="form-select mb-1">
                                                        <option value="">Year</option>
                                                        <option value="">2022</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <small class="form-text text-muted">can be changed limited no. of times</small>
                                        </div>

                                        <div class="form-group d-grid">
                                            <button name="update" id="update" class="btn btn-outline btn-warning btn-block">Update</button>
                                        </div>

                                    </form>
                                </div>
                                <!-- account -->
                                <div class="tab-pane" id="account">
                                    <h6>ACCOUNT SETTINGS</h6>
                                    <hr>
                                    <form action="" method="POST" class="mg-zero">
                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <div class="input-group">
                                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-at"></i></span>
                                                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                            <small class="form-text text-muted">after changing your username, your old one will become avaliable for anyone to claim</small>
                                        </div>

                                        <div class="form-group mt-3">
                                            <label for="email">Email</label>
                                            <div class="input-group">
                                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope"></i></span>
                                                <input type="email" class="form-control" placeholder="name@example.com" aria-label="Email" aria-describedby="basic-addon1">
                                            </div>
                                            <small class="form-text text-muted">please enter only valid email address, otherwise you will not be able to recover your account</small>
                                        </div>

                                        <div class="d-grid mt-3">
                                            <button name="update" id="update" class="btn btn-outline btn-warning btn-block">Update</button>
                                        </div>
                                        
                                    </form>
                                </div>
                                <!-- security -->
                                <div class="tab-pane" id="security">
                                    <h6>SECURITY</h6>
                                    <hr>
                                    <form action="" method="POST" class="mg-zero">
                                        <div class="form-group mb-3">
                                            <label for="password">Password</label>
                                            <input type="password" name="password" class='form-control' placeholder='********'>  
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="password">New Password</label>
                                            <input type="password" name="password" class='form-control' placeholder='********'>           
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="password">Confirm New Password</label>
                                            <input type="password" name="password" class='form-control' placeholder='********'>
                                        </div>
                                        <div class="d-grid">
                                            <button name="update" id="update" class="btn btn-outline btn-warning btn-block">Update</button>
                                        </div>
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