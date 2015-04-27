<?php

/**
 * @author Matthew McNaney <mcnaney at gmail dot com>
 * @version $Id: unregister.php 7341 2010-03-15 19:57:34Z matt $
 */

function controlpanel_unregister($module, &$content)
{
    PHPWS_Core::initModClass('controlpanel', 'ControlPanel.php');
    return PHPWS_ControlPanel::unregisterModule($module, $content);
}
?>
