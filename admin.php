<?php require "include/header.php"; ?>

<section id="admin">
    <div class="container">
        <div class="row">
            <div class="col-xl-6"></div>
            <div class="col-xl-6 admin-login">
                <h3>Admin Panel</h3>
                <p>For admin use only.</p>
                <form method="POST">
                    <input type="text" name="username" class='form-control' placeholder='Username' required='required'>

                    <input type="password" name="password" class='form-control' placeholder='Username' required='required'>

                    <button name="login" id="login" class="btn btn-outline btn-warning btn-block">Login</button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php require "include/footer.php"; ?>