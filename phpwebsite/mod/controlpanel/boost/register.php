<?php
/**
 *
 * @author Matthew McNaney <mcnaney at gmail dot com>
 * @version $Id: register.php 7584 2010-04-22 17:21:01Z matt $
 */

function controlpanel_register($module, &$content)
{
    PHPWS_Core::initModClass('controlpanel', 'ControlPanel.php');

    $result = PHPWS_ControlPanel::registerModule($module, $content);
    return $result;
}

?>