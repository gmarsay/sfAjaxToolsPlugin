<?php

/**
 * QuizAnswer form base class.
 *
 * @method QuizAnswer getObject() Returns the current form's model object
 *
 * @package    lufy
 * @subpackage form
 * @author     Guillaume Marsay - Futurolan <guillaume@futurolan.net>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseQuizAnswerForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'is_valid'        => new sfWidgetFormChoice(array('choices' => array('no' => 'no', 'yes' => 'yes'))),
      'position'        => new sfWidgetFormInputText(),
      'quiz_request_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('QuizRequest'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'is_valid'        => new sfValidatorChoice(array('choices' => array(0 => 'no', 1 => 'yes'), 'required' => false)),
      'position'        => new sfValidatorInteger(array('required' => false)),
      'quiz_request_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('QuizRequest'))),
    ));

    $this->widgetSchema->setNameFormat('quiz_answer[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'QuizAnswer';
  }

}
