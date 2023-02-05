<?php

$page_title = "Contact";
$current_page = "contact";

$footer_javascripts[] = "/assets/js/anti-email-harvesting.js";

$page_content = function() {
?>

<h2>Get In Touch</h2>
<p>You can send me an email anytime: <span class="email_address">contact [at] davecomputergeek [dot] scot</span> or <span class="email_address">davecomputergeek [at] dcg [dot] scot</span></p>

<?php

};

include __DIR__ . DIRECTORY_SEPARATOR . '_includes' . DIRECTORY_SEPARATOR . 'base.php';
