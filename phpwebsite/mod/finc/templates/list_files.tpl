<table width="99%" cellpadding="4">
    <tr>
        <th>{TITLE_HEADER} {TITLE_SORT}</th>
        <th>{PATH_HEADER} {PATH_SORT}</th>
        <th>&nbsp;</th>
    </tr>
<!-- BEGIN listrows -->
    <tr {TOGGLE}>
        <td>{TITLE}</td>
        <td>{PATH}</td>
        <td>{ACTION}</td>
    </tr>
    <tr {TOGGLE}>
        <td colspan="3" class="smaller">{DESCRIPTION}</td>
    </tr>
<!-- END listrows -->
</table>
{EMPTY_MESSAGE}
<div class="align-center">
    {TOTAL_ROWS}<br />
    {PAGE_LABEL} {PAGES}<br />
    {LIMIT_LABEL} {LIMITS}
</div>
<div class="align-right">
    {SEARCH}
</div>
