<?php
/**
 * <colgroup> tag component for the Ad Hoc Tables plugin
 *
 * Defines  <colgroup> ... </colgroup> syntax
 * More info: https://developer.mozilla.org/en-US/docs/Web/HTML/Element/colgroup
 *
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * @author     Sascha Leib <sascha.leib(at)kolmio.com>
 */

class syntax_plugin_adhoctables_colgroup extends syntax_plugin_adhoctables_tabstract {

	protected $tag			= 'colgroup';

	/* allow link attributes: */
	function allowAttribute(&$name, &$value) {
		//dbg('<colgroup>:allowAttribute(' . $name . ', "' . $value . '")');
		
		if ($name == 'span' && is_numeric(trim($value))) {
			$value = intval($value);
			return ($value > 0 && $value <= 1000);
		}
		return false;
	}
}