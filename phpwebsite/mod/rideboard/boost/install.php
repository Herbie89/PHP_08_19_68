<?php

/**
 * Uninstall file for blog
 *
 * @author Matthew McNaney <mcnaney at gmail dot com>
 * @version $Id: install.php 7341 2010-03-15 19:57:34Z matt $
 */

function rideboard_install(&$content)
{
    if (PHPWS_Core::initModClass('menu', 'Menu.php')) {
        Menu::pinLink('Ride Board', 'index.php?module=rideboard');
        Menu::enableAdminMode();
    }
    return true;
}

?>
