<?php
/**
 * Extension for easy inclusion of prototype and scriptaculous JS, with the ability to turn it on and off in the database and assign it to specific pages if desired.
 *
 * @package Extensions
 * @author Peter Epp
 * @copyright Copyright (c) 2009 Peter Epp (http://teknocat.org)
 * @license GNU Lesser General Public License (http://www.gnu.org/licenses/lgpl.html)
 * @version 2.0
 **/
class Jquery extends AbstractExtension {
	function run() {
		$this->register_js('header','jquery-1.4.1.min.js');
		if ($this->Biscuit->extension_exists("PrototypeJs")) {
			$this->register_js('header','jquery-noconflict.js');
		}
	}
}
?>
