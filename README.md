# DokuWiki Plugin *Ad-Hoc Tables*
Add-on to Ad Hoc Tags which enables table markup within DokuWiki

This is an attempt of re-creating some parts of the Wrap plugin on top of the Ad-Hoc Tags plugin. It is still under development.

:exclamation: **IMPORTANT:** This plugin is an extension to [Ad-Hoc Tags](https://github.com/saschaleib/dokuwiki-plugin-adhocwrap), it can not be used without the base plugin!

This plugin adds the following tags to the DokuWiki syntax:

* `<table>` – [base table element](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/table)
* `<caption>` – [table caption](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/caption)
* `<colgroup>` – [table column group](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/colgroup), with optional attribute:
  * `[span=…]` – number of columns the group should span (integer: 1…1000)
* `<col>` – [table column](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/col), with optional attribute:
  * `[span=…]` – number of columns (integer: 1…1000)
* `<thead>` – [table header section](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/thead)
* `<tbody>` – [table body section](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/tbody)
* `<tfoot>` – [table footer section](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/tfoot)
* `<tr>` – [table row](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/tr)
* `<th>` – [table heading cell](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/th), with optional attribute:
  * `[abbr=…]` – a short (“abbreviated”) alternative description of the cell (free-text)
  * `[colspan=…]` – number of columns the cell should span (integer: 1…1000)
  * `[headers=…]` – IDs of higher-level table header cells that this cell is related to (space-separated list of IDs)
  * `[rowspan=…]` – number of columns the cell should span (integer: 1…1000)
  * `[scope=…]` – which cells does the header cell refer to (either `row`, `col`, `rowgroup` or `colgroup`)
* `<td>` – [table cell](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/td), with optional attribute:
  * `[colspan=…]` – number of columns the cell should span (integer: 1…1000)
  * `[headers=…]` – IDs of table header cells that this cell is related to (space-separated list of IDs)
  * `[rowspan=…]` – number of columns the cell should span (integer: 1…1000)

Note that any attribute values that don't match the specifications above will cause the attribute to be ignored.
