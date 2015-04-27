<?php
/**
 * @version $Id: init.php 7338 2010-03-15 19:55:04Z matt $
 * @author Matthew McNaney <mcnaney at gmail dot com>
 */
if (isset($_REQUEST['module']) && $_REQUEST['module'] == 'branch') {
    PHPWS_Core::initModClass('boost', 'Boost.php');
}
?>