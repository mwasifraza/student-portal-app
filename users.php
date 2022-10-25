<?php require "include/header.php"; ?>

<section>
    <div class="container mt-4">
        <h1>Users Data</h1>
        <div class="table-responsive">
            <table class="table text-center table-hover table-dark mt-3">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <!-- <th scope="col">Last Name</th> -->
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Options</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>id</td>
                        <td>name</td>
                        <!-- <td>{{ user.lname }}</td> -->
                        <td>username</td>
                        <td>email</td>
                        <td>gender</td>
                        <td>
                            <a href="#" class="btn btn-outline btn-warning btn-sm">Update</a>
                            <a href="#" class="btn btn-outline btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<?php require "include/footer.php"; ?>