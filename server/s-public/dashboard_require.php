<?php 

    // require('server/s-app/helpers/session.php');
    // require('server/s-public/navigation.php');
    // require('server/s-public/head.php');
    require('s-app/helpers/session.php');
    require('s-public/head.php');
    require('s-public/navigation.php');
    require('s-public/verticalmenu.php');
?>
<div class="container">
    <div class="row my-4">
        <div class="col-sm-12">
            <div class="card">
                <div class="car-body">
                    <h5 class="card-title text-center my-3">Add Post</h5>
                    <div class="m-3">
                        <form action="#" method="post">
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" placeholder="Title">
                            </div>
                            <div class="mb-3">
                                <label for="author" class="form-label">Author</label>
                                <input type="text" class="form-control" id="author" placeholder="Author">
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Article</label>
                                <textarea class="form-control" id="description" rows="3"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Choose Blog Image</label>
                                <input type="file" class="form-control" id="image">
                            </div>
                            <div class="mb-3">
                                <button type="button" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row my-3">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Total Post</h5>
                    <p class="card-text">33</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Total Visitors</h5>
                    <p class="card-text">33</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Total Comments</h5>
                    <p class="card-text">44</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
</div>