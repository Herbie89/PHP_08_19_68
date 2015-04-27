<?php

/**
 * @version $Id: uninstall.php 7375 2010-03-23 16:27:19Z matt $
 * @author Matthew McNaney <mcnaney at gmail dot com>
 */

function rss_uninstall()
{
    PHPWS_DB::dropTable('rss_channel');
    PHPWS_DB::dropTable('rss_feeds');
    return TRUE;
}

?>
