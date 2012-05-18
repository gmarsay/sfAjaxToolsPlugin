<?php

/**
 * GalleryPhoto filter form base class.
 *
 * @package    lufy
 * @subpackage filter
 * @author     Guillaume Marsay - Futurolan <guillaume@futurolan.net>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseGalleryPhotoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'album_id'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'gallery_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Gallery'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'album_id'   => new sfValidatorPass(array('required' => false)),
      'gallery_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Gallery'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('gallery_photo_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'GalleryPhoto';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'album_id'   => 'Text',
      'gallery_id' => 'ForeignKey',
    );
  }
}
