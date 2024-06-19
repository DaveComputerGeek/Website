---
site_name: Dave Computer Geek
site_tagline: Gamer. Web Developer. Technology Geek.
site_author: Dave Computer Geek
stylesheets: /assets/css/main.css
javascripts: /assets/js/anti-email-harvesting.js
content_placeholder: {{ content }}
---
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title><?php if( isset( $metadata[ 'article_title' ] ) && $metadata[ 'article_title' ] ) echo $metadata[ 'article_title' ] . ' - '; if( isset( $metadata[ 'page_title' ] ) && $metadata[ 'page_title' ] ) echo $metadata[ 'page_title' ] . ' - '; echo $metadata[ 'site_name' ]; if( ( ! isset( $metadata[ 'article_title' ] ) || ! $metadata[ 'article_title' ] ) && ( ! isset( $metadata[ 'page_title' ] ) || ! $metadata[ 'page_title' ] ) ) echo ' - ' . $metadata[ 'site_tagline' ]; ?></title>
        
        <?php if( isset( $metadata[ 'stylesheets' ] ) && $metadata[ 'stylesheets' ] ): ?>
            <?php $stylesheets = explode( '::', $metadata[ 'stylesheets' ] ); ?>

            <?php foreach( $stylesheets as $stylesheet ): ?>
                <link rel="stylesheet" type="text/css" href="<?php echo $stylesheet; ?>">
            <?php endforeach; ?>
        <?php endif; ?>
    </head>
    
    <body>
        <header>
            <div class="container">
                <h1>--- metadata.site_name ---</h1>
                <p>--- metadata.site_tagline ---</p>
            </div>
        </header>

        <nav>
            <div class="container">
                <ul>
                    <li><a href="/"<?php if( isset( $metadata[ 'current_nav_item' ] ) && $metadata[ 'current_nav_item' ] == 'home' ) echo ' class="current"'; ?>>Home</a></li>
                    <li><a href="/contact"<?php if( isset( $metadata[ 'current_nav_item' ] ) && $metadata[ 'current_nav_item' ] == 'contact' ) echo ' class="current"'; ?>>Contact</a></li>
                    <li><a href="/blog"<?php if( isset( $metadata[ 'current_nav_item' ] ) && $metadata[ 'current_nav_item' ] == 'blog' ) echo ' class="current"'; ?>>Blog</a></li>
                </ul>
            </div>
        </nav>
    
        <main>
            <div class="container">
                <?php if( isset( $metadata[ 'article_title' ] ) ): ?>
                    <div class="article">
                        <h2 class="title">--- metadata.article_title ---</h2>
                        <p class="metadata">Published by --- metadata.article_author --- on --- metadata.article_date --- at --- metadata.article_time ---.</p>
    
                        {{ content }}
                    </div>
                <?php else: ?>
                    {{ content }}
                <?php endif; ?>
            </div>
        </main>
    
        <section class="lava"></section>
    
        <footer>
            <div class="container">
                <p>Copyright &copy; --- metadata.site_author ---.</p>
            </div>
        </footer>

        <?php if( isset( $metadata[ 'javascripts' ] ) && $metadata[ 'javascripts' ] ): ?>
            <?php $javascripts = explode( '::', $metadata[ 'javascripts' ] ); ?>

            <?php foreach( $javascripts as $javascript ): ?>
                <script type="text/javascript" src="<?php echo $javascript; ?>"></script>
            <?php endforeach; ?>
        <?php endif; ?>
    </body>
</html>
