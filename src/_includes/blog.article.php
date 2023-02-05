<?php

$page_title = $article_title . " - Blog";
$current_page = "blog";

$page_content = function( $article_title, $article_author, $article_date, $article_time, $article_content )
{
    include __DIR__ . DIRECTORY_SEPARATOR . "config.php";
?>

<div class="article">
    <h2 class="title"><?php echo $article_title; ?></h2>
    <p class="metadata">Published by <?php echo $article_author; ?> on <?php echo date( $blog_datetime_format, strtotime( $article_date . " " . $article_time ) ); ?>.</p>
    
    <?php if( is_callable( $article_content ) ) echo $article_content(); ?>
</div>

<?php
};

include __DIR__ . DIRECTORY_SEPARATOR . 'base.php';
