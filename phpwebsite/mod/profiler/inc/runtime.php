<?php
/**
 * @version $Id: runtime.php 7311 2010-03-10 13:21:15Z matt $
 * @author Matthew McNaney <mcnaney at gmail dot com>
 */

if (!isset($_REQUEST['module'])) {
    PHPWS_Core::initModClass('profiler', 'Profiler.php');

    Profiler::view();
}

?>