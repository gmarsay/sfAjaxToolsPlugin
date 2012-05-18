<?php

/**
 * Todo form base class.
 *
 * @method Todo getObject() Returns the current form's model object
 *
 * @package    lufy
 * @subpackage form
 * @author     Guillaume Marsay - Futurolan <guillaume@futurolan.net>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTodoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'name'           => new sfWidgetFormInputText(),
      'description'    => new sfWidgetFormTextarea(),
      'priority'       => new sfWidgetFormChoice(array('choices' => array('low' => 'low', 'normal' => 'normal', 'hight' => 'hight'))),
      'achieved'       => new sfWidgetFormChoice(array('choices' => array(0 => 0, 10 => 10, 20 => 20, 30 => 30, 40 => 40, 50 => 50, 60 => 60, 70 => 70, 80 => 80, 90 => 90, 100 => 100))),
      'is_private'     => new sfWidgetFormChoice(array('choices' => array('no' => 'no', 'yes' => 'yes'))),
      'is_active'      => new sfWidgetFormChoice(array('choices' => array('yes' => 'yes', 'no' => 'no', 'archived' => 'archived'))),
      'todo_parent_id' => new sfWidgetFormInputText(),
      'todo_group_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TodoGroup'), 'add_empty' => true)),
      'created_at'     => new sfWidgetFormDateTime(),
      'updated_at'     => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'name'           => new sfValidatorString(array('max_length' => 100)),
      'description'    => new sfValidatorString(array('required' => false)),
      'priority'       => new sfValidatorChoice(array('choices' => array(0 => 'low', 1 => 'normal', 2 => 'hight'), 'required' => false)),
      'achieved'       => new sfValidatorChoice(array('choices' => array(0 => 0, 1 => 10, 2 => 20, 3 => 30, 4 => 40, 5 => 50, 6 => 60, 7 => 70, 8 => 80, 9 => 90, 10 => 100), 'required' => false)),
      'is_private'     => new sfValidatorChoice(array('choices' => array(0 => 'no', 1 => 'yes'), 'required' => false)),
      'is_active'      => new sfValidatorChoice(array('choices' => array(0 => 'yes', 1 => 'no', 2 => 'archived'), 'required' => false)),
      'todo_parent_id' => new sfValidatorInteger(array('required' => false)),
      'todo_group_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TodoGroup'), 'required' => false)),
      'created_at'     => new sfValidatorDateTime(),
      'updated_at'     => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('todo[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Todo';
  }

}
