<?php

/**
 * @version $Id: uninstall.php 7341 2010-03-15 19:57:34Z matt $
 */

if (!Current_User::isDeity()){
    header("location:index.php");
    exit();
}

function photoalbum_uninstall(&$content) {
    PHPWS_DB::dropTable('mod_photoalbum_albums');
    PHPWS_DB::dropTable('mod_photoalbum_photos');
    $content[] = 'Table uninstalled.';
    return TRUE;
}

?>