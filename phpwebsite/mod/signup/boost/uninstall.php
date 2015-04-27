<?php
/**
 * @version $Id: uninstall.php 5472 2007-12-11 16:13:40Z jtickle $
 * @author Matthew McNaney <mcnaney at gmail dot com>
 */

function signup_uninstall(&$content) {
    PHPWS_DB::dropTable('signup_sheet');
    PHPWS_DB::dropTable('signup_peeps');
    PHPWS_DB::dropTable('signup_slots');
    $content[] = dgettext('signup', 'Signup tables dropped.');
    return true;
}
?>