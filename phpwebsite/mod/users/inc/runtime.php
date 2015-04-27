<?php
/**
 * @author Matthew McNaney <mcnaney at gmail dot com>
 * @version $Id: runtime.php 7250 2010-01-22 18:56:44Z matt $
 */

if (!class_exists('PHPWS_User')) {
    include '../../core/conf/404.html';
    exit();
}

if (@$_REQUEST['module'] == 'users' && @$_REQUEST['action'] == 'reset') {
    $_SESSION['User'] = new PHPWS_User;
} elseif (!isset($_SESSION['User'])) {
    Current_User::init();
    if (Current_User::allowRememberMe()) {
        if (PHPWS_Settings::get('users', 'allow_remember')) {
            Current_User::rememberLogin();
        }
    }
}

Current_User::loadAuthorization($_SESSION['User']);
Current_User::getLogin();
?>
