<?php $posts = new Posts(); ?>

<div class="row">
    <h1 class="m-1">Latest Article</h1>
    <?php  if($posts->getPosts()):?>
    <?php foreach($posts->getPosts() as $post):?>
    <div class="col m-1">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="public/image/<?= $post['post_img']?>"
                alt="<?= strtolower($post['post_name']);?>">
            <div class="card-body">
                <h5 class="card-title"><?= $post['post_name'];?></h5>
                <p class="card-text"><?= substr($post['post_description'],0,90);?>...</p>
                <a href="article.php?postid=<?= $post['post_id']?>"><button class="btn btn-outline-primary">Read Article</button></a>
            </div>
        </div>
      </div>
      <?php endforeach;?>
      <?php endif;?>
</div>

<!-- <div class="col">
            <div class="img">
                <img src="https://source.unsplash.com/300x150/?nature,water" alt="">
              </div>
              <div class="head">
                  <h4 class="py-3">Annapurna Circuit</h4>
                  <a href="' . URLROOT . 'article.php' .'"><button class="btn btn-outline-primary">View Post</button></a>
              </div>
        </div> -->