<div class="col-md-10">

        <article>
                <h1><?=$topic->title?></h1>
                <div>
                        <div><?=kdate($topic->created)?></div>
                        <?=auto_link($topic-> description)?>
                </div>
        </article>
        <div>
                <?php var_dump(base_url());?>
                <?php var_dump(index_page());?>
                <a href="<?php echo base_url("/ci/index.php/topic/add");?>" class="btn btn-default">추가</a>
        </div>

</div>

