<?php
/**
 * @version $Id: runtime.php 7375 2010-03-23 16:27:19Z matt $
 * @author Matthew McNaney <mcnaney at gmail dot com>
 */

PHPWS_Core::initModClass('rss', 'RSS.php');

if (!isset($_REQUEST['module'])) {
    RSS::showFeeds();
}

?>