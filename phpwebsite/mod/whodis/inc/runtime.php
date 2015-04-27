<?php

/**
 * @version $Id: runtime.php 7311 2010-03-10 13:21:15Z matt $
 * @author Matthew McNaney <mcnaney at appstate dot edu>
 */

if (!isset($_SESSION['Whodis'])) {
    PHPWS_Core::initModClass('whodis', 'Whodis.php');
    Whodis::record();
    $_SESSION['Whodis'] = true;
}

?>