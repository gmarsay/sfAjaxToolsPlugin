<?php

/**
 * PageTranslationIndex form base class.
 *
 * @method PageTranslationIndex getObject() Returns the current form's model object
 *
 * @package    lufy
 * @subpackage form
 * @author     Guillaume Marsay - Futurolan <guillaume@futurolan.net>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePageTranslationIndexForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'keyword'  => new sfWidgetFormInputHidden(),
      'field'    => new sfWidgetFormInputHidden(),
      'position' => new sfWidgetFormInputHidden(),
      'id'       => new sfWidgetFormInputHidden(),
      'lang'     => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'keyword'  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('keyword')), 'empty_value' => $this->getObject()->get('keyword'), 'required' => false)),
      'field'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('field')), 'empty_value' => $this->getObject()->get('field'), 'required' => false)),
      'position' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('position')), 'empty_value' => $this->getObject()->get('position'), 'required' => false)),
      'id'       => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'lang'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('lang')), 'empty_value' => $this->getObject()->get('lang'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('page_translation_index[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PageTranslationIndex';
  }

}
