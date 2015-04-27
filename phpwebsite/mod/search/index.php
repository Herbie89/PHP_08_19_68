<?php

/**
 * Steering file
 *
 * @author Matthew McNaney <mcnaney at gmail dot com>
 * @version $Id: index.php 7311 2010-03-10 13:21:15Z matt $
 */

if (!defined('PHPWS_SOURCE_DIR')) {
    include '../../core/conf/404.html';
    exit();
}

if (isset($_REQUEST['tab']) || isset($_REQUEST['command'])) {
    PHPWS_Core::initModClass('search', 'Admin.php');
    Search_Admin::main();
} else {
    Search_User::main();
}

?>