<?php

$current_page = "blog";
$page_title = "Blog";

$root_path_to_blog_articles = __DIR__ . DIRECTORY_SEPARATOR . "blog";

$articles = array();

function get_blog_articles( String $path_to_blog_articles, array &$articles, String $root_path_to_blog_articles )
{
    $dir_items = scandir( $path_to_blog_articles );

    foreach( $dir_items as $dir_item )
    {
        if( $dir_item == "." || $dir_item == ".." )
            continue;
        
        $path_to_dir_item = $path_to_blog_articles . DIRECTORY_SEPARATOR . $dir_item;

        if( is_dir( $path_to_dir_item ) )
        {
            get_blog_articles( $path_to_dir_item, $articles, $root_path_to_blog_articles );
            continue;
        }

        if( ! is_file( $path_to_dir_item ) || substr( $dir_item, -4 ) != ".php" )
            continue;
        
        include $path_to_dir_item;

        if( ! isset( $article_title, $article_excerpt, $article_date, $article_time, $article_author ) )
            continue;
        
        $article['title'] = $article_title;
        $article['excerpt'] = $article_excerpt;
        $article['date'] = $article_date;
        $article['time'] = $article_time;
        $article['author'] = $article_author;
        $article['permalink'] = "/blog" . str_replace( array( "\\", ".php" ), "/", substr( $path_to_dir_item, strlen( $root_path_to_blog_articles ) ) );

        $articles[] = $article;
    }
}

get_blog_articles( $root_path_to_blog_articles, $articles, $root_path_to_blog_articles );

$articles = array_reverse( $articles );

$page_content = function( $articles ) {
    include __DIR__ . DIRECTORY_SEPARATOR . "_includes" . DIRECTORY_SEPARATOR . "config.php";
?>

<h2>The Blog</h2>

<section class="articles">
    <?php if( isset( $articles ) && is_array( $articles ) && count( $articles ) > 0 ): ?>
        <?php foreach( $articles as $article ): ?>
            <article>
                <div class="title"><?php echo $article['title']; ?></div>
                <div class="metadata">Published by <?php echo $article['author']; ?> on <?php echo date( $blog_datetime_format, strtotime( $article['date'] . " " . $article['time'] ) ); ?>.</div>
                <div class="excerpt">
                    <?php echo $article['excerpt']; ?>
                </div>
                <div class="buttons">
                    <a href="<?php echo $article['permalink']; ?>">Read More</a>
                </div>
            </article>
        <?php endforeach; ?>
    <?php else: ?>
        <article>
            <div class="title">No Articles</div>
            <div class="excerpt">Sorry, there are currently no blog articles. Please check back later.</div>
        </article>
    <?php endif; ?>
</section>

<?php

};

include __DIR__ . DIRECTORY_SEPARATOR . '_includes' . DIRECTORY_SEPARATOR . 'base.php';
