<?php
/**
 * @version $Id: runtime.php 5472 2007-12-11 16:13:40Z jtickle $
 * @author Matthew McNaney <mcnaney at gmail dot com>
 */

if (PHPWS_Core::atHome()) {
    PHPWS_Core::initModClass('alert', 'Alert.php');
    $alert = new Alert;
    $alert->viewItems();
}

?>