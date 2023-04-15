<?php
/**
 * <td> tag component for the Ad Hoc Tables plugin
 *
 * Defines  <td> ... </td> syntax
 * More info: https://developer.mozilla.org/en-US/docs/Web/HTML/Element/td
 *
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * @author     Sascha Leib <sascha.leib(at)kolmio.com>
 */

class syntax_plugin_adhoctables_td extends syntax_plugin_adhoctables_tabstract {

	protected $tag			= 'td';

    function getPType(){ return 'block';}

	/* allow link attributes: */
	function allowAttribute(&$name, &$value) {
		//dbg('<td>:allowAttribute(' . $name . ', "' . $value . '")');
		
		switch (trim($name)) {
			case 'colspan':
			case 'rowspan':
				if (is_numeric(trim($value))) {
					$value = intval($value);
					return ($value > 0 && $value < 100);
				}
				break;
			case 'headers':
				return (preg_match('/^([A-Za-z]\w+ ?)+/', trim($value)));
				break;
			default:
				return false;
		}
	}
}