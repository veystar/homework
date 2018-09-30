<?php include_once "header.php" ?>

<div id="templatemo_main">
    <div class="post_section">
        <span class="comment"><a href="blog_post.html">128</a></span>
       <h2><a href="index.php?page=article&id=<?=filter_input(INPUT_GET, 'id') ?>"><?=$article['title'] ?></a></h2>

        <?php include $article['content'].'.php'?>

    </div>
</div>
<?php include_once "footer.php" ?> 