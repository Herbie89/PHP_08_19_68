<?php
/**
 * @version $Id: init.php 7348 2010-03-16 19:03:44Z matt $
 * @author Matthew McNaney <mcnaney at gmail dot com>
 */

PHPWS_Text::addTag('filecabinet', array('document'));
PHPWS_Core::requireInc('filecabinet', 'parse.php');
PHPWS_Core::requireInc('filecabinet', 'defines.php');
PHPWS_Core::initModClass('filecabinet', 'Cabinet.php');

?>