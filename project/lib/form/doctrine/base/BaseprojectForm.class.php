<?php

/**
 * project form base class.
 *
 * @method project getObject() Returns the current form's model object
 *
 * @package    lufy
 * @subpackage form
 * @author     Guillaume Marsay - Futurolan <guillaume@futurolan.net>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseprojectForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'name'        => new sfWidgetFormInputText(),
      'description' => new sfWidgetFormTextarea(),
      'repository'  => new sfWidgetFormInputText(),
      'is_public'   => new sfWidgetFormChoice(array('choices' => array('yes' => 'yes', 'no' => 'no'))),
      'is_active'   => new sfWidgetFormChoice(array('choices' => array('yes' => 'yes', 'no' => 'no'))),
      'created_at'  => new sfWidgetFormDateTime(),
      'updated_at'  => new sfWidgetFormDateTime(),
      'slug'        => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'name'        => new sfValidatorString(array('max_length' => 50)),
      'description' => new sfValidatorString(array('required' => false)),
      'repository'  => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'is_public'   => new sfValidatorChoice(array('choices' => array(0 => 'yes', 1 => 'no'), 'required' => false)),
      'is_active'   => new sfValidatorChoice(array('choices' => array(0 => 'yes', 1 => 'no'), 'required' => false)),
      'created_at'  => new sfValidatorDateTime(),
      'updated_at'  => new sfValidatorDateTime(),
      'slug'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'project', 'column' => array('slug')))
    );

    $this->widgetSchema->setNameFormat('project[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'project';
  }

}
