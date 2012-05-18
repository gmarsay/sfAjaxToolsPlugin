<?php

/**
 * Game filter form base class.
 *
 * @package    lufy
 * @subpackage filter
 * @author     Guillaume Marsay - Futurolan <guillaume@futurolan.net>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseGameFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'year'         => new sfWidgetFormFilterInput(),
      'editor_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Editor'), 'add_empty' => true)),
      'game_type_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('GameType'), 'add_empty' => true)),
      'plateform_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Plateform'), 'add_empty' => true)),
      'image_url'    => new sfWidgetFormFilterInput(),
      'icon_url'     => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'year'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'editor_id'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Editor'), 'column' => 'id')),
      'game_type_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('GameType'), 'column' => 'id')),
      'plateform_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Plateform'), 'column' => 'id')),
      'image_url'    => new sfValidatorPass(array('required' => false)),
      'icon_url'     => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('game_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Game';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'year'         => 'Number',
      'editor_id'    => 'ForeignKey',
      'game_type_id' => 'ForeignKey',
      'plateform_id' => 'ForeignKey',
      'image_url'    => 'Text',
      'icon_url'     => 'Text',
    );
  }
}
