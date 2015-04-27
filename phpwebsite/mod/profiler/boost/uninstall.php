<?php

/**
 * Uninstall file for profiles
 *
 * @author Matthew McNaney <mcnaney at gmail dot com>
 * @version $Id: uninstall.php 7311 2010-03-10 13:21:15Z matt $
 */

function profiler_uninstall(&$content)
{

    PHPWS_DB::dropTable('profiles');
    PHPWS_DB::dropTable('profiler_division');
    $content[] = dgettext('profiler', 'Profiles table removed.');

    return TRUE;
}

?>
