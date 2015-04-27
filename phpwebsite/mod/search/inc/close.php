<?php

/**
 * @author Matthew McNaney <mcnaney at gmail dot com>
 * @version $Id: close.php 7311 2010-03-10 13:21:15Z matt $
 */

PHPWS_Core::initModClass('search', 'User.php');

Search_User::searchBox();

if (isset($_SESSION['Search_Admin'])) {
    PHPWS_Core::initModClass('search', 'Admin.php');
    Search_Admin::miniAdmin();
}

?>