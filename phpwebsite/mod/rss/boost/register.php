<?php
/**
 *
 * @author Matthew McNaney <mcnaney at gmail dot com>
 * @version $Id: register.php 7584 2010-04-22 17:21:01Z matt $
 */

function rss_register($module, &$content)
{
    PHPWS_Core::initModClass('rss', 'RSS.php');
    return RSS::registerModule($module, $content);
}

?>