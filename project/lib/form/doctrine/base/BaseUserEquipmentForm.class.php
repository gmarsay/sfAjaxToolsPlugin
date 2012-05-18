<?php

/**
 * UserEquipment form base class.
 *
 * @method UserEquipment getObject() Returns the current form's model object
 *
 * @package    lufy
 * @subpackage form
 * @author     Guillaume Marsay - Futurolan <guillaume@futurolan.net>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseUserEquipmentForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'user_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SfGuardUser'), 'add_empty' => false)),
      'equipment_type' => new sfWidgetFormChoice(array('choices' => array('ecran' => 'ecran', 'laptop' => 'laptop', 'desktop' => 'desktop', 'other' => 'other'))),
      'name'           => new sfWidgetFormTextarea(),
      'description'    => new sfWidgetFormTextarea(),
      'checked_at'     => new sfWidgetFormTextarea(),
      'created_at'     => new sfWidgetFormDateTime(),
      'updated_at'     => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'user_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('SfGuardUser'))),
      'equipment_type' => new sfValidatorChoice(array('choices' => array(0 => 'ecran', 1 => 'laptop', 2 => 'desktop', 3 => 'other'))),
      'name'           => new sfValidatorString(),
      'description'    => new sfValidatorString(array('required' => false)),
      'checked_at'     => new sfValidatorString(array('required' => false)),
      'created_at'     => new sfValidatorDateTime(),
      'updated_at'     => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('user_equipment[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'UserEquipment';
  }

}
