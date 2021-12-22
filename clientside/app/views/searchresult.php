<?php 
    require('app/config/config.php');
    require('app/controller/Database.php');
    require('public/head.php');
    require('app/pageElements/navbar.php');
    require('app/model/search.php');

    $searches = new search();
    $searches->item($_GET['query']);
?>
<div class="container">
    <h3 class="text-left pt-4"><?php echo $_GET['query'];?></h3>
    <p class="text-left text-secondary">Results</p>
</div>
<div class="container">
    <?php if($searches->item($_GET['query'])):?>
    <?php foreach($searches->item($_GET['query']) as $data):?>
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne"><button class="accordion-button" type="button"
                    data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                    aria-controls="collapseOne"><?= $data['post_name']?></button></h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong><?= substr($data['post_description'],0,100)?><span class="text-secondary">...</span> <a href="article.php?postid=<?= $data['post_id']?>">Read More</a></strong>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach;?>
    <?php else: ?>
    <div class="alert alert-warning" role="alert">
        <h4 class="alert-heading">Sorry</h4>
        <p>It looks like there aren't any great matches for your search</p>
        <hr>
        <p class="mb-0">Tip: Try using words that might appear on the page you’re looking for.</p>
    </div>
    <?php endif; ?>
</div>


<?php 
    require('public/foot.php');
?>