<?php
/**
 * <th> tag component for the Ad Hoc Tables plugin
 *
 * Defines  <th> ... </th> syntax
 * More info: https://developer.mozilla.org/en-US/docs/Web/HTML/Element/th
 *
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * @author     Sascha Leib <sascha.leib(at)kolmio.com>
 */

class syntax_plugin_adhoctables_th extends syntax_plugin_adhoctables_tabstract {

	protected $tag			= 'th';

    function getPType(){ return 'block';}

	/* allow link attributes: */
	function allowAttribute(&$name, &$value) {
		//dbg('<th>:allowAttribute(' . $name . ', "' . $value . '")');

		switch (trim($name)) {
			case 'colspan':
			case 'rowspan':
				if (is_numeric(trim($value))) {
					$value = intval($value);
					return ($value > 0 && $value < 100);
				}
				break;
			case 'headers':
				return (preg_match('/^([A-Za-z][\w\d]* ?)+$/', trim($value)));
				break;
			case 'abbr':
				return true; // = any value goes
				break;
			case 'scope':
				return in_array(trim($value), array('col','row','rowgroup','colgroup'));
				break;
			default:
				return false;
		}
	}
}