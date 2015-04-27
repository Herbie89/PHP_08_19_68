<?php
/**
 * @author Matthew McNaney <mcnaney at gmail dot com>
 * @version $Id: my_page.php 7341 2010-03-15 19:57:34Z matt $
 */


function my_page()
{
    PHPWS_Core::initModClass('comments', 'My_Page.php');
    $content = Comments_My_Page::main();
    return $content;
}

?>