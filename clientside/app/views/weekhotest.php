<?php $posts = new Posts(); ?>

<div class="row">
    <h1 class="my-3">Week's Hottest</h1>
    <?php  if($posts->getPosts()):?>
    <?php foreach($posts->getPosts() as $post):?>
    <div class="col-md-3">
        <div class="card">
            <img class="card-img-top" src="public/image/<?= $post['post_img']?>"
                alt="<?= strtolower($post['post_name']);?>">
            <div class="card-body">
                <h5 class="card-title text-truncate"><?= $post['post_name'];?></h5>
                <p class="card-text text-truncate"><?= substr($post['post_description'],0,90);?>...</p>
                <a href="article.php?postid=<?= $post['post_id']?>"><button class="btn btn-outline-primary">Read Article</button></a>
            </div>
        </div>
      </div>
      <?php endforeach;?>
      <?php endif;?>
</div>
