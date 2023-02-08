<?php

$page_title = "Not Found (404)";
$friendly_urls = false;

$page_content = function() {
?>

<h2>Not Found (404)</h2>
<p>That's an error, it means nothing can be found here. You can keep trying to find what you are looking for manually, or you can go to the <a href="/">home</a> page, which is often much easier.</p>

<?php

};

include __DIR__ . DIRECTORY_SEPARATOR . '_includes' . DIRECTORY_SEPARATOR . 'base.php';
