<?php
/**
 * @author Matthew McNaney <mcnaney at gmail dot com>
 * @version $Id: uninstall.php 7341 2010-03-15 19:57:34Z matt $
 */

function demographics_uninstall(&$content)
{
    PHPWS_DB::dropTable('demographics');
    $content[] = dgettext('demographics', 'Demographics table removed.');
    return TRUE;
}

?>