<?php
/**
 * rolodex - phpwebsite module
 *
 * See docs/AUTHORS and docs/COPYRIGHT for relevant info.
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 * @version $Id: uninstall.php 7311 2010-03-10 13:21:15Z matt $
 * @author Verdon Vaillancourt <verdonv at gmail dot com>
 */

function rolodex_uninstall(&$content) {

    $dir = PHPWS_HOME_DIR . 'images/rolodex/';
    if (PHPWS_File::rmdir($dir)) {
        $content[] = dgettext('rolodex', 'Rolodex images removed.');
    } else {
        $content[] = dgettext('rolodex', 'There was a problem deleting the rolodex images. You may want to do it manually.');
    }
    PHPWS_DB::dropTable('rolodex_member');
    PHPWS_DB::dropTable('rolodex_location');
    PHPWS_DB::dropTable('rolodex_feature');
    PHPWS_DB::dropTable('rolodex_location_items');
    PHPWS_DB::dropTable('rolodex_feature_items');
    $content[] = dgettext('rolodex', 'Rolodex tables dropped.');

    return true;
}
?>