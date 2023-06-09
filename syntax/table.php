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

class syntax_plugin_adhoctables_table extends syntax_plugin_adhoctables_tabstract {

	protected $tag = 'table';

    /**
     * ODT Renderer Functions
     */
    function renderODTElementOpen($renderer, $HTMLelement, $data) {
		$renderer->table_open();
    }
    function renderODTElementClose($renderer, $element) {
		$renderer->table_close();
    }
}