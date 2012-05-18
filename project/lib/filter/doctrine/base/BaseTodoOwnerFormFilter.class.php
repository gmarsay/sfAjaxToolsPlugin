<?php

/**
 * TodoOwner filter form base class.
 *
 * @package    lufy
 * @subpackage filter
 * @author     Guillaume Marsay - Futurolan <guillaume@futurolan.net>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTodoOwnerFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'todo_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Todo'), 'add_empty' => true)),
      'sf_guard_user_id' => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'todo_id'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Todo'), 'column' => 'id')),
      'sf_guard_user_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('todo_owner_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TodoOwner';
  }

  public function getFields()
  {
    return array(
      'id'               => 'Number',
      'todo_id'          => 'ForeignKey',
      'sf_guard_user_id' => 'Number',
    );
  }
}
