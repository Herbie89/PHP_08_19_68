<?php
/**
 * @author Matthew McNaney <mcnaney at gmail dot com>
 * @version $Id: index.php 7311 2010-03-10 13:21:15Z matt $
 */

if (!defined('PHPWS_SOURCE_DIR')) {
    include '../../core/conf/404.html';
    exit();
}


PHPWS_Core::initModClass('blog', 'Blog.php');

if (isset($_GET['xmlrpc']))
{
    PHPWS_Core::initModClass('blog', 'Blog_XML.php');
    $xml = new Blog_XML;
    return;
}


if (isset($_REQUEST['action']) && $_REQUEST['action'] == 'admin') {
    if (Current_User::allow('blog')) {
        PHPWS_Core::initModClass('blog', 'Blog_Admin.php');
        Blog_Admin::main();
    } else {
        Current_User::disallow();
    }
} else {
    Blog_User::main();
}

?>