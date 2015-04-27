<?php
/**
 * Initializes the menu class
 *
 * @author Matthew McNaney <mcnaney at gmail dot com
 * @version $Id: init.php 7584 2010-04-22 17:21:01Z matt $
 */

PHPWS_Core::requireConfig('menu', 'config.php');
PHPWS_Core::initModClass('menu', 'Menu.php');

?>