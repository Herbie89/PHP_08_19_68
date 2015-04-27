<?php
/**
 * @author Matthew McNaney <mcnaney at gmail dot com>
 * @version $Id: close.php 7357 2010-03-16 20:45:17Z matt $
 */

// Destroy unused sessions
if (PHPWS_Core::getCurrentModule() != 'users'){
    PHPWS_Core::killSession('Member_Pager');
    PHPWS_Core::killSession('All_Demo');
    PHPWS_Core::killSession('User_Manager');
    PHPWS_Core::killSession('Group_Manager');
}

Current_User::permissionMenu();
?>