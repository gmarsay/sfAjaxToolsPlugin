<?php

/**
 * QuizAnswer filter form base class.
 *
 * @package    lufy
 * @subpackage filter
 * @author     Guillaume Marsay - Futurolan <guillaume@futurolan.net>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseQuizAnswerFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'is_valid'        => new sfWidgetFormChoice(array('choices' => array('' => '', 'no' => 'no', 'yes' => 'yes'))),
      'position'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'quiz_request_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('QuizRequest'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'is_valid'        => new sfValidatorChoice(array('required' => false, 'choices' => array('no' => 'no', 'yes' => 'yes'))),
      'position'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'quiz_request_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('QuizRequest'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('quiz_answer_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'QuizAnswer';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'is_valid'        => 'Enum',
      'position'        => 'Number',
      'quiz_request_id' => 'ForeignKey',
    );
  }
}
