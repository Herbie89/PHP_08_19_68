<?php

/**
 * Uninstall file for blog
 *
 * @author Matthew McNaney <mcnaney at gmail dot com>
 * @version $Id: uninstall.php 7311 2010-03-10 13:21:15Z matt $
 */

function blog_uninstall(&$content)
{
    PHPWS_DB::dropTable('blog_entries');
    $content[] = dgettext('blog', 'Blog tables removed.');
    return TRUE;
}


?>
