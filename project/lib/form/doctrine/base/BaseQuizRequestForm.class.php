<?php

/**
 * QuizRequest form base class.
 *
 * @method QuizRequest getObject() Returns the current form's model object
 *
 * @package    lufy
 * @subpackage form
 * @author     Guillaume Marsay - Futurolan <guillaume@futurolan.net>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseQuizRequestForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'       => new sfWidgetFormInputHidden(),
      'position' => new sfWidgetFormInputText(),
      'quiz_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Quiz'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'       => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'position' => new sfValidatorInteger(array('required' => false)),
      'quiz_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Quiz'))),
    ));

    $this->widgetSchema->setNameFormat('quiz_request[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'QuizRequest';
  }

}
