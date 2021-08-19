<?php $article = new Posts();?>
<?php $datas = $article->getSelectedPost($_GET['postid']); ?>
<div class="container-fluid absolute">
    <img class="card-img-top img" src="public/image/<?= $datas['post_img']?>"
        alt="<?= strtolower($datas['post_name']);?>">
</div>
<div class="container articleContent">
    <div class="row">


        <div class="card">
            <div class="card-body p-5">
                <h2 class="card-title text-center p-3"><?= $datas['post_name'];?></h2>
                <p class="card-text text-secondary font-italic">Author: writer </p>
                <p class="card-text"><?= $datas['post_description'];?></p>
            </div>
        </div>
    </div>
</div>