<?php

/**
 * Page form base class.
 *
 * @method Page getObject() Returns the current form's model object
 *
 * @package    lufy
 * @subpackage form
 * @author     Guillaume Marsay - Futurolan <guillaume@futurolan.net>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePageForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'               => new sfWidgetFormInputHidden(),
      'status'           => new sfWidgetFormChoice(array('choices' => array('waiting' => 'waiting', 'published' => 'published', 'archived' => 'archived'))),
      'page_category_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('PageCategory'), 'add_empty' => false)),
      'view_counter'     => new sfWidgetFormInputText(),
      'created_at'       => new sfWidgetFormDateTime(),
      'updated_at'       => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'status'           => new sfValidatorChoice(array('choices' => array(0 => 'waiting', 1 => 'published', 2 => 'archived'), 'required' => false)),
      'page_category_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('PageCategory'))),
      'view_counter'     => new sfValidatorPass(array('required' => false)),
      'created_at'       => new sfValidatorDateTime(),
      'updated_at'       => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('page[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Page';
  }

}
