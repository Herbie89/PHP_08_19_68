<?php

/**
 * Uninstall file for access
 *
 * @author Matthew McNaney <mcnaney at gmail dot com>
 * @version $Id: uninstall.php 7311 2010-03-10 13:21:15Z matt $
 */

function access_uninstall(&$content)
{
    PHPWS_DB::dropTable('access_shortcuts');
    PHPWS_DB::dropTable('access_allow_deny');
    $content[] = dgettext('access', 'Access tables removed.');
    return TRUE;
}

?>