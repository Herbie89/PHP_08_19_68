<?php

/**
 * @author Matthew McNaney <mcnaney at gmail dot com>
 * @version $Id: index.php 7311 2010-03-10 13:21:15Z matt $
 */

if (!defined('PHPWS_SOURCE_DIR')) {
    include '../../core/conf/404.html';
    exit();
}

PHPWS_Core::initModClass('categories', 'Action.php');
PHPWS_Core::initModClass('categories', 'Categories.php');

if (isset($_REQUEST['action']) && $_REQUEST['action'] == 'admin'){
    Categories_Action::admin();
} else {
    Categories_Action::user();
}

?>