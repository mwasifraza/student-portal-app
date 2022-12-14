<?php require "include/header.php"; ?>

<section id="dashboard">
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-4 col-md-6 box">
                <h2 class="mb-4">Welcome,<br><strong>User</strong></h2>
                <!-- {% include 'include/modal.html' %} -->

                <div>
                    <h4 class="text-success" id="cname" data-course-id="{{ enrolled.id }}">
                        Enrolled in: 
                    </h4>
                    <h4>Teacher: </h4>
                    <h4>Day: </h4>
                    <button class="btn btn-primary btn-sm btn-block" data-toggle="modal" data-target="#Modal-Enroll">
                        Change Course 
                    </button>
                    <button class="btn btn-primary btn-sm btn-block"  data-toggle="modal" data-target="#Modal-Unenroll">
                        Unenroll
                    </button>
                </div>
                <div>
                    <h4 class="text-muted" id="cname" data-course-id="">You are not enrolled in any course at the moment!</h4>
                    <button class="btn btn-primary btn-sm btn-block" data-toggle="modal" data-target="#Modal-Enroll">
                        Select Course 
                    </button>
                </div>
            </div>
            
            <div class="col-lg-8 col-md-6 box">
                <h2 class="mb-4" id="book-sec-head"></h2>
                <div class="card">
                    <div class="card-body" id="book-section">
                        <h5 class="card-title" id="book-title">Nothing Found!</h5>
                        <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
                        <p class="card-text" id="book-text"></p>
                        <a href="#" class="card-link" id="book-link"></a>
                        <a href="#" class="" id="book-read"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php require "include/footer.php"; ?>