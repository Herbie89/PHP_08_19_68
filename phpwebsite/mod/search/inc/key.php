<?php

/**
 * unregisters deleted keys from search
 *
 * @author Matthew McNaney <mcnaney at gmail dot com>
 * @version $Id: key.php 6117 2008-08-12 17:11:02Z matt $
 */


function search_unregister_key(Key $key)
{
    if (empty($key->id)) {
        return FALSE;
    }

    $db = new PHPWS_DB('search');
    $db->addWhere('key_id', (int)$key->id);
    return $db->delete();
}

?>