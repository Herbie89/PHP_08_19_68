<?php
/**
 * @version $Id: init.php 7311 2010-03-10 13:21:15Z matt $
 * @author Matthew McNaney <mcnaney at gmail dot com>
 */

PHPWS_Core::initModClass('block', 'Block.php');
require_once PHPWS_SOURCE_DIR . 'mod/block/inc/parse.php';
PHPWS_Text::addTag('block', 'view');

?>