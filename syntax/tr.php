<?php
/**
 * <tr> tag component for the Ad Hoc Tables plugin
 *
 * Defines  <tr> ... </tr> syntax
 * More info: https://developer.mozilla.org/en-US/docs/Web/HTML/Element/tr
 *
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * @author     Sascha Leib <sascha.leib(at)kolmio.com>
 */

class syntax_plugin_adhoctables_tr extends syntax_plugin_adhoctables_tabstract {

	protected $tag			= 'tr';

    /**
     * ODT Renderer Functions
     */
    function renderODTElementOpen($renderer, $HTMLelement, $data) {
		$renderer->tablerow_open();
    }
    function renderODTElementClose($renderer, $element) {
		$renderer->tablerow_close();
    }
}