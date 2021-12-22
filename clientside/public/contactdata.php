<?php 
    require('app/config/config.php');
    require('app/controller/Database.php');
    require('public/head.php');
    require('app/pageElements/navbar.php');
    require('app/model/contact.php');

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        require_once 'app/model/submitemail.php';
        $feedback = new Contacts();
        if($feedback->regContact($_POST['email'],$_POST['message'])){        
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Successfull sent.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }else{
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Sorry !</strong> Message is not sent.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }

    }

?>
<?php?>
<div class="container">
    <div class="mt-5">
        <h2>Your Feedback is more valuable than gold for us.</h2>
        <form method="POST">
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="example@gmail.com">
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Example textarea</label>
                <textarea class="form-control" name="message" id="message" rows="3" placeholder="Enter Your Text Here...."></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</div>
<?php 
    require('public/foot.php');
?>