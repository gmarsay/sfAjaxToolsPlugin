<?php

/**
 * TodoOwner form base class.
 *
 * @method TodoOwner getObject() Returns the current form's model object
 *
 * @package    lufy
 * @subpackage form
 * @author     Guillaume Marsay - Futurolan <guillaume@futurolan.net>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTodoOwnerForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'               => new sfWidgetFormInputHidden(),
      'todo_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Todo'), 'add_empty' => false)),
      'sf_guard_user_id' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'todo_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Todo'))),
      'sf_guard_user_id' => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('todo_owner[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TodoOwner';
  }

}
