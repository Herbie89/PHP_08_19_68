<?php

/**
 * @author Matthew McNaney <mcnaney at gmail dot com>
 * @version $Id: close.php 7311 2010-03-10 13:21:15Z matt $
 */

if (Current_User::isLogged()) {
    PHPWS_Core::initModClass('notes', 'My_Page.php');

    Notes_My_Page::showUnread();

    $key = Key::getCurrent(false);
    if ($key) {
        Notes_My_Page::miniAdminLink($key);
        Notes_My_Page::showAssociations($key);
    }
}

?>