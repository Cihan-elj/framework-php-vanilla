<?php
include_once './templates/includes/html_header.inc.php';
fromInc("menu");
echo $pageContent['html'];
include_once './templates/includes/html_footer.inc.php';

?>

<ul>
    <?php
    foreach ($pageContent["data"]["contact"] as $key =>)
    ?>
</ul>
