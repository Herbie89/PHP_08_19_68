<?php

/**
 * Uninstall file for block
 *
 * @author Matthew McNaney <mcnaney at gmail dot com>
 * @version $Id: uninstall.php 7311 2010-03-10 13:21:15Z matt $
 */

function block_uninstall(&$content)
{
    PHPWS_DB::dropTable('block');
    PHPWS_DB::dropTable('block_pinned');
    $content[] = dgettext('block', 'Block tables removed.');
    return true;
}


?>
