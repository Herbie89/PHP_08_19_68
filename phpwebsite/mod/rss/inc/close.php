<?php
/**
 * @author Matthew McNaney <mcnaney at gmail dot com>
 * @version $Id: close.php 7375 2010-03-23 16:27:19Z matt $
 */
$key = Key::getCurrent();

if (empty($key) || $key->isDummy() || $key->restricted) {
    return;
}

PHPWS_Core::initModClass('rss', 'RSS.php');
RSS::showIcon($key);

?>