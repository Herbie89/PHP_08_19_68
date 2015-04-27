<?php

/**
 * @author Matthew McNaney <mcnaney at gmail dot com>
 * @version $Id: index.php 7341 2010-03-15 19:57:34Z matt $
 */
if (!defined('PHPWS_SOURCE_DIR')) {
    include '../../core/conf/404.html';
    exit();
}

if (!Current_User::authorized('version')) {
    Current_User::disallow();
    return;
}

PHPWS_Core::initModClass('version', 'Admin.php');
Version_Admin::main();

?>