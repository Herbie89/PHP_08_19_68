<?php

/**
 * @version $Id: index.php 5472 2007-12-11 16:13:40Z jtickle $
 * @author Matthew McNaney <mcnaney at gmail dot com>
 */

if (!defined('PHPWS_SOURCE_DIR')) {
    header('location: ../../index.php');
    exit();
}

PHPWS_Core::initModClass('alert', 'Alert.php');
$alert = new Alert;

if (isset($_REQUEST['aop'])) {
    $alert->admin();
} else {
    $alert->user();
}

?>