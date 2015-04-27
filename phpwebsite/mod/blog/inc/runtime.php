<?php
/**
 * @version $Id: runtime.php 7311 2010-03-10 13:21:15Z matt $
 * @author Matthew McNaney <mcnaney at gmail dot com>
 */


if (PHPWS_Settings::get('blog', 'home_page_display')) {
    if (!isset($_REQUEST['module'])) {
        $content = Blog_User::show();
        Layout::add($content, 'blog', 'view', TRUE);
    }
} else {
    Blog_User::showSide();
}

?>