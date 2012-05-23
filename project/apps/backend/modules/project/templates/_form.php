<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<?php echo jquery_val_form_tag($form, array('action' => url_for('project/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?slug='.$form->getObject()->getSlug() : '')))) ?>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <div class="buttons">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a class="button" href="<?php echo url_for('project/index') ?>">Retour</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Supprimer', 'project/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?', 'class' => 'button')) ?>
          <?php endif; ?>
          <a onclick="$('form').submit()" href="#" class="button">Enregistrer</a>
          </div>
        </td>
      </tr>
    </tfoot>
    <tbody id="sf_admin_container">
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th align="left">Nom du projet</th>
        <td>
          <?php echo $form['name']->renderError() ?>
          <?php echo $form['name'] ?>
        </td>
      </tr>
      <? if (!$form->getObject()->isNew()): ?>
      <tr>
        <th align="left">Identifiant</th>
        <td style="font-style: italic;"><?=$form->getObject()->getSlug()?></td>
      </tr>
      <? endif; ?>
      <tr>
        <th align="left" valign="top">Repository</th>
        <td>
          <?php echo $form['repository']->renderError() ?>
          <?php echo $form['repository'] ?>
        </td>
      </tr>
      <tr>
        <th align="left" valign="top">Description</th>
        <td>
          <?php echo $form['description']->renderError() ?>
          <?php echo $form['description'] ?>
        </td>
      </tr>
      <tr>
        <th align="left">Public ?</th>
        <td>
          <?php echo $form['is_public']->renderError() ?>
          <?php echo $form['is_public'] ?>
        </td>
      </tr>
      <tr>
        <th align="left">Actif ?</th>
        <td>
          <?php echo $form['is_active']->renderError() ?>
          <?php echo $form['is_active'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
