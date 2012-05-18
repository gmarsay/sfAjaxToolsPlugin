<?php

/**
 * Game form base class.
 *
 * @method Game getObject() Returns the current form's model object
 *
 * @package    lufy
 * @subpackage form
 * @author     Guillaume Marsay - Futurolan <guillaume@futurolan.net>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseGameForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'year'         => new sfWidgetFormInputText(),
      'editor_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Editor'), 'add_empty' => false)),
      'game_type_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('GameType'), 'add_empty' => false)),
      'plateform_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Plateform'), 'add_empty' => false)),
      'image_url'    => new sfWidgetFormTextarea(),
      'icon_url'     => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'year'         => new sfValidatorInteger(array('required' => false)),
      'editor_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Editor'))),
      'game_type_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('GameType'))),
      'plateform_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Plateform'))),
      'image_url'    => new sfValidatorString(array('required' => false)),
      'icon_url'     => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('game[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Game';
  }

}
