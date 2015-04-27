<?php

/**
 * @author Matthew McNaney <mcnaney at gmail dot com>
 * @version $Id: my_page.php 7311 2010-03-10 13:21:15Z matt $
 */

function my_page()
{
    PHPWS_Core::initModClass('notes', 'My_Page.php');
    $my_page = new Notes_My_Page;
    $result = $my_page->main();

    return $result;
}

?>