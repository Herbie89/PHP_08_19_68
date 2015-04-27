<?php

/**
 * Uninstall file for menu
 *
 * @author Matthew McNaney <mcnaney at gmail dot com>
 * @version $Id: uninstall.php 7341 2010-03-15 19:57:34Z matt $
 */

function menu_uninstall(&$content)
{
    PHPWS_DB::dropTable('menu_links');
    PHPWS_DB::dropTable('menus');
    PHPWS_DB::dropTable('menu_assoc');

    $content[] = dgettext('menu', 'Menu tables removed.');

    return TRUE;
}
?>
