<h2>Liste des projets</h2>

<table width="100%">
  <thead>
    <tr>
      <th align="left">Nom du projet</th>
      <th>D&eacute;p&ocirc;t</th>
      <th>Actif</th>
      <th>Public</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($projects as $project): ?>
    <tr>
      <td><a href="<?php echo url_for('project/view?slug='.$project->getSlug()) ?>"><?php echo $project->getName() ?></a></td>
      <td align="center" height="32" width="50"><? if ($project->getRepository() != ''):?><a class="save-small"></a><? endif;?></td>
      <td align="center" height="32" width="50"><? if ($project->getIsActive() == 'yes'):?><a class="save-small"></a><? endif;?></td>
      <td align="center" height="32" width="50"><? if ($project->getIsPublic() == 'yes'):?><a class="save-small"></a><? endif;?></td>
      <td align="right" width="180">
        <a href="<?=url_for('project/view?slug='.$project->getSlug())?>" class="button small left">D&eacute;tails</a>
        <a href="<?=url_for('project/edit?slug='.$project->getSlug())?>" class="button small middle">Modifier</a>
        <a href="<?=url_for('project/delete?slug='.$project->getSlug())?>" class="button small right">Supprimer</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
  <tfoot>
    <tr>
      <td colspan="5" align="center"><?=$projects->count()?> projets</td>
    </tr>
  </tfoot>
</table>

<div class="buttons">
  <a class="button left" href="<?php echo url_for('project/new') ?>">Tous</a>
  <a class="button middle" href="<?php echo url_for('project/new') ?>">Actifs</a>
  <a class="button right" href="<?php echo url_for('project/new') ?>">Publiques</a>
  <a class="button add" href="<?php echo url_for('project/new') ?>">Ajouter un projet</a>
</div>
