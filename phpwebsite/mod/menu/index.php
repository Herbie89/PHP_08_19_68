<?php
/**
 * @author Matthew McNaney <mcnaney at gmail dot com>
 * @version $Id: index.php 7584 2010-04-22 17:21:01Z matt $
 */

if (!defined('PHPWS_SOURCE_DIR')) {
    include '../../core/conf/404.html';
    exit();
}

if (isset($_REQUEST['site_map'])) {
    Menu::siteMap();
} elseif(Current_User::allow('menu')) {
    Menu::admin();
} else {
    PHPWS_Core::errorPage('404');
}

?>