<?php
/**
 * @author Matthew McNaney <mcnaney at gmail dot com>
 * @version $Id: index.php 7311 2010-03-10 13:21:15Z matt $
 */

if (!defined('PHPWS_SOURCE_DIR')) {
    include '../../core/conf/404.html';
    exit();
}

if (isset($_REQUEST['user_cmd'])) {
    PHPWS_Core::initModClass('profiler', 'Profiler.php');
    Profiler::user();
} else {
    if (!Current_User::authorized('profiler')) {
        Current_User::disallow();
    }

    PHPWS_Core::initModClass('profiler', 'Profiler.php');
    Profiler::admin();
}

?>