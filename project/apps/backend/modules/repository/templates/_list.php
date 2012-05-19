<table width="400px">
  <thead>
    <tr>
      <th width="16"></th>
      <th width="150px">Nom</th>
      <th>Derni&egrave;re modification</th>
    </tr>
  </thead>
  <tbody>
<? foreach ($files as $file): ?>
    <tr>
      <td><? if (is_dir($repository.$file)): echo '<img src="http://jquery.bassistance.de/treeview/images/folder.gif"/>'; else: echo '<img src="http://jquery.bassistance.de/treeview/images/file.gif"/>'; endif; ?></td>
      <td><?=$file?></td>
      <td><?=date("d/m/Y H:i:s.", filectime($repository.$file))?></td>
    </tr>
<? endforeach; ?>
  </tbody>
</table>
