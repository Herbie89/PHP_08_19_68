<?php

/**
 * @author Matthew McNaney <mcnaney at gmail dot com>
 * @version $Id: runtime.php 7343 2010-03-15 20:01:59Z matt $
 */

if (!isset($_REQUEST['module']) || $_REQUEST['module'] == 'webpage') {
    PHPWS_Core::initModClass('webpage', 'User.php');
    Webpage_User::showFrontPage();
    Webpage_User::showFeatured();
}

?>