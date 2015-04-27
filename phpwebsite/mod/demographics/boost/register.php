<?php
/**
 * @author Matthew McNaney <mcnaney at gmail dot com>
 * @version $Id: register.php 7341 2010-03-15 19:57:34Z matt $
 */

function demographics_register($module, &$content)
{
    PHPWS_Core::initModClass('demographics', 'Demographics.php');
    $result = Demographics::register($module);
    return $result;
}


?>