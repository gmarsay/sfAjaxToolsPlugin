<?php

/**
 * TodoHistory filter form base class.
 *
 * @package    lufy
 * @subpackage filter
 * @author     Guillaume Marsay - Futurolan <guillaume@futurolan.net>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTodoHistoryFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'username' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'module'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'action'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'username' => new sfValidatorPass(array('required' => false)),
      'module'   => new sfValidatorPass(array('required' => false)),
      'action'   => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('todo_history_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TodoHistory';
  }

  public function getFields()
  {
    return array(
      'id'       => 'Number',
      'username' => 'Text',
      'module'   => 'Text',
      'action'   => 'Text',
    );
  }
}
