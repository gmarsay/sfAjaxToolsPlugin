<?php

/**
 * Quiz filter form base class.
 *
 * @package    lufy
 * @subpackage filter
 * @author     Guillaume Marsay - Futurolan <guillaume@futurolan.net>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseQuizFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'style'            => new sfWidgetFormFilterInput(),
      'background_color' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'is_public'        => new sfWidgetFormChoice(array('choices' => array('' => '', 'no' => 'no', 'yes' => 'yes'))),
      'start_at'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'end_at'           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'image'            => new sfWidgetFormFilterInput(),
      'slug'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'style'            => new sfValidatorPass(array('required' => false)),
      'background_color' => new sfValidatorPass(array('required' => false)),
      'is_public'        => new sfValidatorChoice(array('required' => false, 'choices' => array('no' => 'no', 'yes' => 'yes'))),
      'start_at'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'end_at'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'image'            => new sfValidatorPass(array('required' => false)),
      'slug'             => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('quiz_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Quiz';
  }

  public function getFields()
  {
    return array(
      'id'               => 'Number',
      'style'            => 'Text',
      'background_color' => 'Text',
      'is_public'        => 'Enum',
      'start_at'         => 'Date',
      'end_at'           => 'Date',
      'image'            => 'Text',
      'slug'             => 'Text',
    );
  }
}
