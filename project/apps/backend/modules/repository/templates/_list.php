<table width="800px" id="repository">
  <thead>
    <tr>
      <th width="16"></th>
      <th width="400px">Nom</th>
      <th>Derni&egrave;re modification</th>
      <th width="150"></th>
    </tr>
  </thead>
  <tbody>
<? foreach ($files as $file): ?>
    <tr>
      <td>
        <? if (is_dir($repository.$file)): ?>
          <img onclick="get_directory('<?=$repository.$file?>');" src="http://jquery.bassistance.de/treeview/images/folder.gif"/>
        <? else: ?>
          <img src="http://jquery.bassistance.de/treeview/images/file.gif"/>
        <? endif; ?>
      </td>
      <td><?=$file?></td>
      <td><?=date("d/m/Y H:i:s.", filectime($repository.$file))?></td>
      <td align="right">
        <a class="button small" href="">Editer</a>
        <a class="button small" href="">Supprimer</a>
      </td>
    </tr>
<? endforeach; ?>
  </tbody>
</table>

<script>
function get_directory(path) {
  $.get('http://labs.netha.lan/backend_dev.php/repository/list',
    { path: path },
    function success(data) {
      $('#repository tbody').html(data);
    }
  );
}
</script>
