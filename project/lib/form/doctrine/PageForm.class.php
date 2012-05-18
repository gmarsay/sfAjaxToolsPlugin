<?php

/**
 * Page form.
 *
 * @package    lufy
 * @subpackage form
 * @author     Guillaume Marsay - Futurolan <guillaume@futurolan.net>
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class PageForm extends BasePageForm
{
  protected $parentId = null;

  public function configure()
  {
    unset(
      $this->widgetSchema['view_counter'],
      $this->widgetSchema['created_at'],
      $this->widgetSchema['updated_at'],
      $this->widgetSchema['lft'],
      $this->widgetSchema['rgt'],
      $this->widgetSchema['level'],
      $this->validatorSchema['view_counter'],
      $this->validatorSchema['created_at'],
      $this->validatorSchema['updated_at'],
      $this->validatorSchema['lft'],
      $this->validatorSchema['rgt'],
      $this->validatorSchema['level']
    );

    $this->embedI18n(array('fr', 'en'));
    $this->widgetSchema->setLabel('en', 'English');
    $this->widgetSchema->setLabel('fr', 'French');
  }
}
