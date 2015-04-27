<?php
/**
 * @version $Id: index.php 5472 2007-12-11 16:13:40Z jtickle $
 * @author Matthew McNaney <mcnaney at gmail dot com>
 */

PHPWS_Core::initModClass('rideboard', 'Rideboard.php');
$rideboard = new Rideboard;

if (isset($_REQUEST['aop'])) {
    $rideboard->admin();
} else {
    $rideboard->user();
}

?>