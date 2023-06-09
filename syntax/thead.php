<?php
/**
 * <thead> tag component for the Ad Hoc Tables plugin
 *
 * Defines  <thead> ... </thead> syntax
 * More info: https://developer.mozilla.org/en-US/docs/Web/HTML/Element/thead
 *
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * @author     Sascha Leib <sascha.leib(at)kolmio.com>
 */

class syntax_plugin_adhoctables_thead extends syntax_plugin_adhoctables_tabstract {

	protected $tag			= 'thead';

    /**
     * ODT Renderer Functions
     */
    function renderODTElementOpen($renderer, $HTMLelement, $data) {
		$renderer->tablethead_open();
    }
    function renderODTElementClose($renderer, $element) {
		$renderer->tablethead_close();
    }
}