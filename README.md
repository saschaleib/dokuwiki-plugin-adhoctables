# DokuWiki Plugin *Ad-Hoc Tables*
Add-on to Ad Hoc Tags which enables table markup within DokuWiki

:bangbang: **IMPORTANT:** This plugin is an extension to the [Ad-Hoc Tags](https://github.com/saschaleib/dokuwiki-plugin-adhocwrap)-plugin. It will not work without it, and may even cause errors! :bangbang:

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
* `<th>` – [table heading cell](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/th), with optional attributes:
  * `[abbr=…]` – a short (“abbreviated”) alternative description of the cell (free-text)
  * `[colspan=…]` – number of columns the cell should span (integer: 1…1000)
  * `[headers=…]` – IDs of higher-level table header cells that this cell is related to (space-separated list of IDs)
  * `[rowspan=…]` – number of columns the cell should span (integer: 1…1000)
  * `[scope=…]` – which cells does the header cell refer to (either `row`, `col`, `rowgroup` or `colgroup`)
* `<td>` – [table cell](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/td), with optional attributes:
  * `[colspan=…]` – number of columns the cell should span (integer: 1…1000)
  * `[headers=…]` – IDs of table header cells that this cell is related to (space-separated list of IDs)
  * `[rowspan=…]` – number of columns the cell should span (integer: 1…1000)

Note that in addition to the specific attributes, also all the general attributes from the [Ad-Hoc Tags](https://github.com/saschaleib/dokuwiki-plugin-adhocwrap)-plugin can be added. This includes: `#id`, `class`, `:lang`, and other extended attributes, like `[style=…]`.

:information_source: Please also see the [DokuWiki page](https://github.com/saschaleib/dokuwiki-plugin-adhoctables) of this plugin.
