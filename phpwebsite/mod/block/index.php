<?php

/**
 * @version $Id: index.php 7311 2010-03-10 13:21:15Z matt $
 * @author Matthew McNaney <mcnaney at gmail dot com>
 */

if (!defined('PHPWS_SOURCE_DIR')) {
    include '../../core/conf/404.html';
    exit();
}

if (!Current_User::authorized('block')) {
    Current_User::disallow();
    return;
}

PHPWS_Core::initModClass('block', 'Block_Admin.php');
Block_Admin::action();

?>