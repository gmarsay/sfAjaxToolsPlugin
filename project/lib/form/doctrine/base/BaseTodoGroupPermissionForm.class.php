<?php

/**
 * TodoGroupPermission form base class.
 *
 * @method TodoGroupPermission getObject() Returns the current form's model object
 *
 * @package    lufy
 * @subpackage form
 * @author     Guillaume Marsay - Futurolan <guillaume@futurolan.net>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTodoGroupPermissionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                     => new sfWidgetFormInputHidden(),
      'todo_group_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TodoGroup'), 'add_empty' => false)),
      'sf_guard_permission_id' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'todo_group_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TodoGroup'))),
      'sf_guard_permission_id' => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('todo_group_permission[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TodoGroupPermission';
  }

}
