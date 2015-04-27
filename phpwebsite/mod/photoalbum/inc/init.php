<?php

/**
 * @author Matthew McNaney <mcnaney at gmail dot com>
 * @version $Id: init.php 7341 2010-03-15 19:57:34Z matt $
 */
PHPWS_Core::requireConfig('photoalbum');
PHPWS_Core::initModClass('photoalbum', 'AlbumManager.php');

?>