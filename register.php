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
                    <form method="POST" class="mg-zero">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="fname">First Name</label>
                                <input type="text" name="fname" class='form-control' placeholder='First Name'>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="lname">Last Name</label>
                                <input type="text" name="lname" class='form-control' placeholder='Last Name'>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                  <div class="input-group-text"><i class="fas fa-at"></i></div>
                                </div>
                                <input type="text" name="username" class='form-control' placeholder='Username'>
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
                            <select class="form-control">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>                 
                        </div>
                        <button name="signup" id="signup" class="btn btn-outline btn-warning btn-block">Sign Up</button>
                    </form>
                    <div style="margin-top: 15px;">
                        <p>Already have an account?
                        <a href="#">Login Here</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
<?php require "include/footer.php"; ?>