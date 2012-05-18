<?php

/**
 * Plateform filter form base class.
 *
 * @package    lufy
 * @subpackage filter
 * @author     Guillaume Marsay - Futurolan <guillaume@futurolan.net>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasePlateformFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'icon_url' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'icon_url' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('plateform_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Plateform';
  }

  public function getFields()
  {
    return array(
      'id'       => 'Number',
      'icon_url' => 'Text',
    );
  }
}
