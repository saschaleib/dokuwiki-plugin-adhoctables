<?php
/**
 * <caption> tag component for the Ad Hoc Tables plugin
 *
 * Defines  <caption> ... </caption> syntax
 * More info: https://developer.mozilla.org/en-US/docs/Web/HTML/Element/caption
 *
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * @author     Sascha Leib <sascha.leib(at)kolmio.com>
 */

class syntax_plugin_adhoctables_caption extends syntax_plugin_adhoctables_tabstract {

	protected $tag			= 'caption';

    function getPType(){ return 'block';}

}