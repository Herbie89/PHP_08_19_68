<?php
/**
 * @author Matthew McNaney <mcnaney at gmail dot com>
 * @version $Id: uninstall.php 7311 2010-03-10 13:21:15Z matt $
 */

function whodis_uninstall()
{
    PHPWS_DB::dropTable('whodis');
    PHPWS_DB::dropTable('whodis_filters');
    return true;
}

?>
