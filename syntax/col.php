<?php
/**
 * <col> tag component for the Ad Hoc Tables plugin
 *
 * Defines  <col> ... </col> syntax
 * More info: https://developer.mozilla.org/en-US/docs/Web/HTML/Element/col
 *
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * @author     Sascha Leib <sascha.leib(at)kolmio.com>
 */

class syntax_plugin_adhoctables_col extends syntax_plugin_adhoctables_tabstract {

	protected $tag			= 'col';
    protected $special_pattern = '<col\b[^>\r\n]*?/?>';

	/* allow link attributes: */
	function allowAttribute(&$name, &$value) {
		//dbg('<col>:allowAttribute(' . $name . ', "' . $value . '")');
		
		if ($name == 'span' && is_numeric(trim($value))) {
			$value = intval($value);
			return ($value > 0 && $value <= 1000);
		}
		return false;
	}
}