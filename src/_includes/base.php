<?php

include __DIR__ . DIRECTORY_SEPARATOR . "config.php";

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title><?php if( isset( $page_title ) && is_string( $page_title ) && $page_title ) echo $page_title . " - "; ?><?php echo $site_name; ?><?php if( ! isset( $page_title ) || ! is_string( $page_title ) || ! $page_title ) echo " - " . $site_tagline; ?></title>

        <?php if( isset( $stylesheets ) && is_array( $stylesheets ) && count( $stylesheets ) > 0 ): ?>
            <?php foreach( $stylesheets as $stylesheet ): ?>
                <link rel="stylesheet" type="text/css" href="<?php echo $stylesheet; ?>">
            <?php endforeach; ?>
        <?php endif; ?>
    </head>
    
    <body>
        <header>
            <div class="container">
                <h1><?php echo $site_name; ?></h1>
                <p><?php echo $site_tagline; ?></p>
            </div>
        </header>

        <nav>
            <div class="container">
                <ul>
                    <li><a href="/"<?php if( isset( $current_page ) && $current_page == "home" ): ?> class="current"<?php endif; ?>>Home</a></li>
                    <li><a href="/contact/"<?php if( isset( $current_page ) && $current_page == "contact" ): ?> class="current"<?php endif; ?>>Contact</a></a>
                    <li><a href="/blog/"<?php if( isset( $current_page ) && $current_page == "blog" ): ?> class="current"<?php endif; ?>>Blog</a></li>
                </ul>
            </div>
        </nav>
    
        <main>
            <div class="container">
                <?php
                
                if( isset( $page_content ) && is_callable( $page_content ) )
                    if( isset( $article_title, $article_author, $article_date, $article_time, $article_content ) )
                        $page_content( $article_title, $article_author, $article_date, $article_time, $article_content );
                    elseif( isset( $articles ) )
                        $page_content( $articles );
                    else
                        $page_content();
                
                ?>
            </div>
        </main>
    
        <section class="lava"></section>
    
        <footer>
            <div class="container">
                <p>Copyright &copy; <?php echo $site_author; ?>.</p>
            </div>
        </footer>

        <?php if( isset( $footer_javascripts ) && is_array( $footer_javascripts ) && count( $footer_javascripts ) > 0 ): ?>
            <?php foreach( $footer_javascripts as $footer_javascript ): ?>
                <script src="<?php echo $footer_javascript; ?>"></script>
            <?php endforeach; ?>
        <?php endif; ?>
    </body>
</html>