<?php

/**
 * ShopProduct form base class.
 *
 * @method ShopProduct getObject() Returns the current form's model object
 *
 * @package    lufy
 * @subpackage form
 * @author     Guillaume Marsay - Futurolan <guillaume@futurolan.net>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseShopProductForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'name'        => new sfWidgetFormInputText(),
      'description' => new sfWidgetFormTextarea(),
      'quantity'    => new sfWidgetFormInputText(),
      'sold'        => new sfWidgetFormInputText(),
      'price'       => new sfWidgetFormInputText(),
      'shop_pos_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ShopPos'), 'add_empty' => false)),
      'created_at'  => new sfWidgetFormDateTime(),
      'updated_at'  => new sfWidgetFormDateTime(),
      'slug'        => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'name'        => new sfValidatorString(array('max_length' => 50)),
      'description' => new sfValidatorString(array('required' => false)),
      'quantity'    => new sfValidatorInteger(array('required' => false)),
      'sold'        => new sfValidatorInteger(array('required' => false)),
      'price'       => new sfValidatorNumber(array('required' => false)),
      'shop_pos_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ShopPos'))),
      'created_at'  => new sfValidatorDateTime(),
      'updated_at'  => new sfValidatorDateTime(),
      'slug'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'ShopProduct', 'column' => array('slug')))
    );

    $this->widgetSchema->setNameFormat('shop_product[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ShopProduct';
  }

}
