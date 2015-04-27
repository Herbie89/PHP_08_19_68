<?php

/**
 * unregisters deleted keys from categories
 *
 * @author Matthew McNaney <mcnaney at gmail dot com>
 * @version $Id: key.php 5472 2007-12-11 16:13:40Z jtickle $
 */


function categories_unregister_key(&$key)
{
    if (empty($key) || empty($key->id)) {
        return FALSE;
    }

    $db = new PHPWS_DB('category_items');
    $db->addWhere('key_id', (int)$key->id);
    return $db->delete();
}

?>