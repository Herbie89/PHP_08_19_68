<?php

/**
 * Uninstall file for webpage
 *
 * @author Matthew McNaney <mcnaney at gmail dot com>
 * @version $Id: uninstall.php 7343 2010-03-15 20:01:59Z matt $
 */

function webpage_uninstall(&$content)
{
    PHPWS_DB::dropTable('webpage_volume');
    PHPWS_DB::dropTable('webpage_page');
    PHPWS_DB::dropTable('webpage_featured');
    $content[] = dgettext('webpage', 'Web Page tables removed.');
    return TRUE;
}

?>