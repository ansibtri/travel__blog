<?php 
    ob_start();
    
    
    require 'app/config/config.php';
    require 'app/controller/Database.php';
    require 'app/model/post.php';
    require 'public/head.php';
    require 'app/pageElements/navbar.php';


    if(isset($_POST['email'])){
        require_once 'app/model/submitemail.php';
        $subscribeEmail = new subscribe();
        if($subscribeEmail->submitEmail($_POST['email'])){        
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success !</strong> Subscribed Successfully
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }else{
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Sorry !</strong> Email Invalid
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }

    }

    
    require 'app/pageElements/carousel.php';
    require 'app/views/latestpost.php';
    require 'app/views/weekhotest.php';
    
    require 'app/pageElements/subscribe.php';
    require 'public/foot.php';
    ob_end_flush();
?>