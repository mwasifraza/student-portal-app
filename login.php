<?php require "include/header.php"; ?>

<section id="user-login">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-8 mx-auto login-form">
                <h2 class="center">Login</h2>
                <form method="POST">
                    <input type="text" name="username" class='form-control' placeholder='Username' required='required'>

                    <input type="password" name="password" class='form-control' placeholder='Username' required='required'>

                    <div class="center">
                        <input type="checkbox" id="rememberMe" class="">
                        <label for="rememberMe">&nbsp;Remember me</label>
                    </div>
                    
                    <button name="login" id="login" class="btn btn-outline btn-warning btn-block">Login</button>
                </form>
                <div class="center">
                    <a href="#" class="text-primary d-block">Forgot Passsword?</a>
                    <div class="mt-2">
                        <p>Don't have an account?
                        <a href="#">Register Here</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require "include/footer.php"; ?>