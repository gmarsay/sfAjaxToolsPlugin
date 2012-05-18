<?php

/**
 * Plateform form base class.
 *
 * @method Plateform getObject() Returns the current form's model object
 *
 * @package    lufy
 * @subpackage form
 * @author     Guillaume Marsay - Futurolan <guillaume@futurolan.net>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePlateformForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'       => new sfWidgetFormInputHidden(),
      'icon_url' => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'       => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'icon_url' => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('plateform[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Plateform';
  }

}