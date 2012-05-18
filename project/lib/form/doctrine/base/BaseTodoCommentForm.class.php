<?php

/**
 * TodoComment form base class.
 *
 * @method TodoComment getObject() Returns the current form's model object
 *
 * @package    lufy
 * @subpackage form
 * @author     Guillaume Marsay - Futurolan <guillaume@futurolan.net>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTodoCommentForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'               => new sfWidgetFormInputHidden(),
      'todo_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Todo'), 'add_empty' => false)),
      'sf_guard_user_id' => new sfWidgetFormInputText(),
      'comment'          => new sfWidgetFormTextarea(),
      'is_active'        => new sfWidgetFormChoice(array('choices' => array('yes' => 'yes', 'no' => 'no'))),
      'created_at'       => new sfWidgetFormDateTime(),
      'updated_at'       => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'todo_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Todo'))),
      'sf_guard_user_id' => new sfValidatorInteger(),
      'comment'          => new sfValidatorString(),
      'is_active'        => new sfValidatorChoice(array('choices' => array(0 => 'yes', 1 => 'no'), 'required' => false)),
      'created_at'       => new sfValidatorDateTime(),
      'updated_at'       => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('todo_comment[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TodoComment';
  }

}
