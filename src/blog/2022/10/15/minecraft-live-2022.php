<?php

$article_title = "Minecraft Live 2022";
$article_author = "Dave Computer Geek";
$article_date = "2022-10-15";
$article_time = "19:00";
$article_excerpt = "SPOILER ALERT: This article contains things revealed and discussed during the annual Minecraft Live event. If you have not seen it yet, you should watch it before reading the article. A link to the video is provided at the start of the article for your convenience.";

$article_content = function()
{
?>

<h3>!!! SPOILER ALERT !!!</h3>

<p>This article contains spoilers for Minecraft Live 2022! If you haven't watched it yet, you can watch it here.</p>

<p><a href="https://www.youtube.com/watch?v=iM9KtHaDcUg" target="_blank">Watch Minecraft Live in Full</a></p>

<p><img src="/assets/images/blog/2022/10/15/minecraft-live-2022-poster.JPG" alt="Minecraft Live 2022 Poster"></p>

<?php
};

if( isset( $path_to_input_file ) && basename( $path_to_input_file ) == basename( __FILE__ ) )
    include __DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . "_includes" . DIRECTORY_SEPARATOR . "blog.article.php";
