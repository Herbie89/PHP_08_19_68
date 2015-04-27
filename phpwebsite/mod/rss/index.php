<?php

/**
 * @author Matthew McNaney <mcnaney at gmail dot com>
 * @version $Id: index.php 7375 2010-03-23 16:27:19Z matt $
 */

if (!defined('PHPWS_SOURCE_DIR')) {
    include '../../core/conf/404.html';
    exit();
}

if ( ( isset($_REQUEST['command']) || isset($_REQUEST['tab']) ) && Current_User::allow('rss')) {
    PHPWS_Core::initModClass('rss', 'Admin.php');
    RSS_Admin::main();
} elseif (isset($_GET['mod_title'])) {
    PHPWS_Core::initModClass('rss', 'RSS.php');
    RSS::viewChannel($_GET['mod_title']);
} elseif (isset($_GET['id'])) {
    PHPWS_Core::initModClass('rss', 'RSS.php');
    RSS::viewChannel($_GET['id']);
} else {
    PHPWS_Core::errorPage('404');
}

?>