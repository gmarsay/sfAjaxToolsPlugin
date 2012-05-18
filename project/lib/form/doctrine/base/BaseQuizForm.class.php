<?php

/**
 * Quiz form base class.
 *
 * @method Quiz getObject() Returns the current form's model object
 *
 * @package    lufy
 * @subpackage form
 * @author     Guillaume Marsay - Futurolan <guillaume@futurolan.net>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseQuizForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'               => new sfWidgetFormInputHidden(),
      'style'            => new sfWidgetFormTextarea(),
      'background_color' => new sfWidgetFormInputText(),
      'is_public'        => new sfWidgetFormChoice(array('choices' => array('no' => 'no', 'yes' => 'yes'))),
      'start_at'         => new sfWidgetFormDate(),
      'end_at'           => new sfWidgetFormDate(),
      'image'            => new sfWidgetFormInputText(),
      'slug'             => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'style'            => new sfValidatorString(array('required' => false)),
      'background_color' => new sfValidatorString(array('max_length' => 7)),
      'is_public'        => new sfValidatorChoice(array('choices' => array(0 => 'no', 1 => 'yes'), 'required' => false)),
      'start_at'         => new sfValidatorDate(array('required' => false)),
      'end_at'           => new sfValidatorDate(array('required' => false)),
      'image'            => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'slug'             => new sfValidatorString(array('max_length' => 250)),
    ));

    $this->widgetSchema->setNameFormat('quiz[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Quiz';
  }

}
