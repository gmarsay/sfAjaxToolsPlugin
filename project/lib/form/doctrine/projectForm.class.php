<?php

/**
 * project form.
 *
 * @package    lufy
 * @subpackage form
 * @author     Guillaume Marsay - Futurolan <guillaume@futurolan.net>
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class projectForm extends BaseprojectForm
{
  public function configure()
  {
    unset($this['created_at'], $this['updated_at'], $this['slug']);
  }
}
