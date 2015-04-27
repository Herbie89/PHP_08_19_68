<?php

/**
 * Blog init file
 *
 * @author Matthew McNaney <mcnaney at gmail dot com>
 * @version $Id: init.php 7311 2010-03-10 13:21:15Z matt $
 */

PHPWS_Core::configRequireOnce('blog', 'config.php');
PHPWS_Core::initModClass('blog', 'Blog_User.php');

?>