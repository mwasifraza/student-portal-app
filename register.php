<?php require "include/header.php"; ?>

    <section id="registration">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xl-8 box mt-5">
                    <div class="mp-01 center">
                        <h2 class="mb-4">Easy to Use!</h2>
                        <p>You are Welcome in our Student Portal Application</p>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 box mt-5">
                    <h2 class="mb20">Register yourself here.</h2>
                    <form method="POST" class="row g-2 mg-zero">

                        <div class="form-group col-md-6">
                            <label for="fname">First Name</label>
                            <input type="text" name="fname" class='form-control' placeholder='First Name'>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="lname">Last Name</label>
                            <input type="text" name="lname" class='form-control' placeholder='Last Name'>
                        </div>

                        <div class="form-group">
                            <label for="username">Username</label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-at"></i></span>
                                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class='form-control' placeholder='name@example.com'>
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class='form-control' placeholder='********'>                     
                        </div>

                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <select class="form-select">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>                 
                        </div>
                        
                        <div class="d-grid mt-3">
                            <button name="signup" id="signup" class="btn btn-outline btn-warning btn-block">Sign Up</button>
                        </div>
                    </form>
                    <div style="margin-top: 15px;">
                        <p>Already have an account?
                        <a href="login.php">Login Here</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
<?php require "include/footer.php"; ?>