<?php
if ($_GET['pagination']){
    $pages = getList($connection, 10, $_GET['pagination']);
}else{
    $pages = getList($connection);
}
   $count = getCountPages($connection);

?>

<div class="content">
    <div class="container">
        <div class="content-grids">
            <div class="col-md-8 content-main">
                <div class="content-grid">
                    <?php
                    foreach ($pages as $key => $page):
                        ?>
                        <div class="content-grid-info">
                            <img src="images/post1.jpg" alt=""/>
                            <div class="post-info">
                                <h4><a href="single.html"><?=$page[name]?></a>  July 30, 2014 / 27 Comments</h4>
                                <p><?=newsAnons($page[content])?></p>
                                <a href="/page.php?id=<?=$page[id]?>"><span></span>Подробнее</a>
                            </div>
                        </div>
                    <?php
                    endforeach;
                    ?>
                </div>

                <?php if ($count>10):
                    $pagination = ceil($count/10);
                    ?>
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <?php for ($i=1; $i<=$pagination; $i++):?>
                        <li class="page-item"><a class="page-link" href="?pagination=<?=$i?>"><?=$i?></a></li>
                        <?php endfor; ?>
                    </ul>
                </nav>
                <?php endif; ?>

            </div>
            <div class="col-md-4 content-right">
                <div class="recent">
                    <h3>RECENT POSTS</h3>
                    <ul>
                        <li><a href="#">Aliquam tincidunt mauris</a></li>
                        <li><a href="#">Vestibulum auctor dapibus  lipsum</a></li>
                        <li><a href="#">Nunc dignissim risus consecu</a></li>
                        <li><a href="#">Cras ornare tristiqu</a></li>
                    </ul>
                </div>
                <div class="comments">
                    <h3>RECENT COMMENTS</h3>
                    <ul>
                        <li><a href="#">Amada Doe </a> on <a href="#">Hello World!</a></li>
                        <li><a href="#">Peter Doe </a> on <a href="#"> Photography</a></li>
                        <li><a href="#">Steve Roberts  </a> on <a href="#">HTML5/CSS3</a></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
                <div class="archives">
                    <h3>ARCHIVES</h3>
                    <ul>
                        <li><a href="#">October 2013</a></li>
                        <li><a href="#">September 2013</a></li>
                        <li><a href="#">August 2013</a></li>
                        <li><a href="#">July 2013</a></li>
                    </ul>
                </div>
                <div class="categories">
                    <h3>CATEGORIES</h3>
                    <ul>
                        <li><a href="#">Vivamus vestibulum nulla</a></li>
                        <li><a href="#">Integer vitae libero ac risus e</a></li>
                        <li><a href="#">Vestibulum commo</a></li>
                        <li><a href="#">Cras iaculis ultricies</a></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>