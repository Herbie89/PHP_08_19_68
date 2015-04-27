<?php

/**
 * @version $Id: index.php 7311 2010-03-10 13:21:15Z matt $
 * @author Matthew McNaney <mcnaney at appstate dot edu>
 */


if (Current_User::allow('whodis')) {
    PHPWS_Core::initModClass('whodis', 'Whodis.php');
    Whodis::admin();
}

?>