<?php

/**
 * Todo filter form base class.
 *
 * @package    lufy
 * @subpackage filter
 * @author     Guillaume Marsay - Futurolan <guillaume@futurolan.net>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTodoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'description'    => new sfWidgetFormFilterInput(),
      'priority'       => new sfWidgetFormChoice(array('choices' => array('' => '', 'low' => 'low', 'normal' => 'normal', 'hight' => 'hight'))),
      'achieved'       => new sfWidgetFormChoice(array('choices' => array('' => '', 0 => 0, 10 => 10, 20 => 20, 30 => 30, 40 => 40, 50 => 50, 60 => 60, 70 => 70, 80 => 80, 90 => 90, 100 => 100))),
      'is_private'     => new sfWidgetFormChoice(array('choices' => array('' => '', 'no' => 'no', 'yes' => 'yes'))),
      'is_active'      => new sfWidgetFormChoice(array('choices' => array('' => '', 'yes' => 'yes', 'no' => 'no', 'archived' => 'archived'))),
      'todo_parent_id' => new sfWidgetFormFilterInput(),
      'todo_group_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TodoGroup'), 'add_empty' => true)),
      'created_at'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'name'           => new sfValidatorPass(array('required' => false)),
      'description'    => new sfValidatorPass(array('required' => false)),
      'priority'       => new sfValidatorChoice(array('required' => false, 'choices' => array('low' => 'low', 'normal' => 'normal', 'hight' => 'hight'))),
      'achieved'       => new sfValidatorChoice(array('required' => false, 'choices' => array(0 => 0, 10 => 10, 20 => 20, 30 => 30, 40 => 40, 50 => 50, 60 => 60, 70 => 70, 80 => 80, 90 => 90, 100 => 100))),
      'is_private'     => new sfValidatorChoice(array('required' => false, 'choices' => array('no' => 'no', 'yes' => 'yes'))),
      'is_active'      => new sfValidatorChoice(array('required' => false, 'choices' => array('yes' => 'yes', 'no' => 'no', 'archived' => 'archived'))),
      'todo_parent_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'todo_group_id'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TodoGroup'), 'column' => 'id')),
      'created_at'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('todo_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Todo';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'name'           => 'Text',
      'description'    => 'Text',
      'priority'       => 'Enum',
      'achieved'       => 'Enum',
      'is_private'     => 'Enum',
      'is_active'      => 'Enum',
      'todo_parent_id' => 'Number',
      'todo_group_id'  => 'ForeignKey',
      'created_at'     => 'Date',
      'updated_at'     => 'Date',
    );
  }
}
