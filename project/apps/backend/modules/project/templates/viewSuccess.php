<h2>Projet > <?=$project->getName()?></h2>

<div>
  <h3>Pr&eacute;sentation</h3>
  <?=$project->getDescription()?>
</div>

<div>
  <h3>Documentation</h3>
</div>

<div>
  <h3>T&eacute;l&eacute;chargement</h3>
</div>

<div>
  <h3>D&eacute;p&ocirc;t</h3>
  <? include_component('repository', 'list', array('repository' => $project->getRepository()))?>
</div>

<div style="clear: left;"></div>
