<?php
/**
 * @author Matthew McNaney <mcnaney at gmail dot com>
 * @version $Id: uninstall.php 7334 2010-03-15 19:52:09Z matt $
 */

function branch_uninstall(&$content)
{
    PHPWS_DB::dropTable('branch_sites');
    PHPWS_DB::dropTable('branch_mod_limit');
    return TRUE;
}


?>