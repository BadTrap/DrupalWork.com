<?php
/**
 * Created by PhpStorm.
 * User: Viktor
 * Date: 14.11.2017
 * Time: 16:33
 */

<div id="rssfeeds-pager">

	<?php foreach ($urls as $url): ?>
    <span>
            <a target="_blank"
               href="http://<?php echo $url->url; ?>"><?php echo $url->url; ?>
            </a><br>
    </span>
    <?php endforeach; ?>

</div>