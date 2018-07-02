<h1>CMS</h1>
<table>
    {foreach from=$articles item=article}
        <tr>
            <td><p>{$article}</p></td>
            <td><a href="index.php?page=edit&id=1">EDIT</td>
            <td><a href="index.php?page=delete&id=1">DELETE</td>
        </tr>
    {/foreach}
</table>