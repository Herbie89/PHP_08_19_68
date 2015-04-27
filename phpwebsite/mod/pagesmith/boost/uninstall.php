<?php
/**
 * @version $Id: uninstall.php 7307 2010-03-08 14:00:38Z matt $
 * @author Matthew McNaney <mcnaney at gmail dot com>
 */

function pagesmith_uninstall(&$content)
{
    PHPWS_DB::dropTable('ps_block');
    PHPWS_DB::dropTable('ps_text');
    PHPWS_DB::dropTable('ps_page');
    $content[] = 'Tables removed.';
    return TRUE;
}

?>