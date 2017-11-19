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
            <a target="_blank" href="rss_feeds/<?php echo $url->id; ?>/items"><?php echo $url->name; ?></a><br>
    </span>
    <?php endforeach; ?>
</div>