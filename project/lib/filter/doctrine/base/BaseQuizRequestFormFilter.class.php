<?php

/**
 * QuizRequest filter form base class.
 *
 * @package    lufy
 * @subpackage filter
 * @author     Guillaume Marsay - Futurolan <guillaume@futurolan.net>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseQuizRequestFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'position' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'quiz_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Quiz'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'position' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'quiz_id'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Quiz'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('quiz_request_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'QuizRequest';
  }

  public function getFields()
  {
    return array(
      'id'       => 'Number',
      'position' => 'Number',
      'quiz_id'  => 'ForeignKey',
    );
  }
}
