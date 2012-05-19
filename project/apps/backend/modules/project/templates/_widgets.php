<? foreach ($projects as $project): ?>
  <h3 onclick="$(this).next().slideToggle();">+ <?=$project->getName()?></h3>
  <ul class="list">
    <li><a href="#">Presentation</a></li>
    <li><a href="#">Demonstration</a></li>
    <li><a href="#">Documentation</a></li>
    <li><a href="#">Telechargement</a></li>
    <li><a href="#">Sources</a></li>
  </ul>
<? endforeach; ?>

<? if ($projects_archived->count() > 0): ?>
  <h3 onclick="$(this).next().slideToggle();">+ Projets archiv&eacute;s</h3>
  <ul>
    <? foreach ($projects_archived as $project_archived): ?>
        <li><a href="<?=url_for('project/view?slug='.$project_archived->getSlug())?>"><?=$project_archived->getName()?></a></li>
    <? endforeach; ?>
  </ul>
<? endif; ?>
