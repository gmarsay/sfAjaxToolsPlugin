    <tr>
      <td>
        <img onclick="get_directory('<?=$current_directory?>/..');" src="http://jquery.bassistance.de/treeview/images/folder.gif"/>
      </td>
      <td>..</td>
      <td></td>
    </tr>
<? foreach ($files as $file): ?>
    <tr>
      <td>
        <? if (is_dir($file)): ?>
          <img onclick="get_directory('<?=$file?>');" src="http://jquery.bassistance.de/treeview/images/folder.gif"/>
        <? else: ?>
          <img src="http://jquery.bassistance.de/treeview/images/file.gif"/>
        <? endif; ?>
      </td>
      <td><?=$file?></td>
      <td><?=date("d/m/Y H:i:s.", filectime($file))?></td>
    </tr>
<? endforeach; ?>
