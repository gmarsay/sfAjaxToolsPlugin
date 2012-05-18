<?php

/**
 * TodoGroupPermission filter form base class.
 *
 * @package    lufy
 * @subpackage filter
 * @author     Guillaume Marsay - Futurolan <guillaume@futurolan.net>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTodoGroupPermissionFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'todo_group_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TodoGroup'), 'add_empty' => true)),
      'sf_guard_permission_id' => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'todo_group_id'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TodoGroup'), 'column' => 'id')),
      'sf_guard_permission_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('todo_group_permission_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TodoGroupPermission';
  }

  public function getFields()
  {
    return array(
      'id'                     => 'Number',
      'todo_group_id'          => 'ForeignKey',
      'sf_guard_permission_id' => 'Number',
    );
  }
}
