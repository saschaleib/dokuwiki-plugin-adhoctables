<?php
/**
 * <tfoot> tag component for the Ad Hoc Tables plugin
 *
 * Defines  <tfoot> ... </tfoot> syntax
 * More info: https://developer.mozilla.org/en-US/docs/Web/HTML/Element/tfoot
 *
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * @author     Sascha Leib <sascha.leib(at)kolmio.com>
 */

class syntax_plugin_adhoctables_tfoot extends syntax_plugin_adhoctables_tabstract {

	protected $tag			= 'tfoot';

    /**
     * ODT Renderer Functions
     */
    function renderODTElementOpen($renderer, $HTMLelement, $data) {
		$renderer->tabletfoot_open();
    }
    function renderODTElementClose($renderer, $element) {
		$renderer->tabletfoot_close();
    }
}