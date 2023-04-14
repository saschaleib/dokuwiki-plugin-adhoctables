<?php
/**
 * <table> tag component for the Ad Hoc Tables plugin
 *
 * Defines  <table> ... </table> syntax
 * More info: https://developer.mozilla.org/en-US/docs/Web/HTML/Element/table
 *
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * @author     Sascha Leib <sascha.leib(at)kolmio.com>
 */

class syntax_plugin_adhoctables_tabstract extends syntax_plugin_adhoctags_abstract {

	protected $pluginName	= 'adhoctables';

	protected function registerTag() { return true;}

}