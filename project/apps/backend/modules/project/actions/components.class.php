<?php

/**
 * project components.
 *
 * @package    lufy
 * @subpackage project
 * @author     Guillaume Marsay - Futurolan <guillaume@futurolan.net>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class projectComponents extends sfComponents
{
  public function executeWidgets()
  {
    $this->projects = Doctrine_Core::getTable('project')
      ->createQuery('a')
      ->where('is_active = ?', 'yes')
      ->andWhere('is_public = ?', 'yes')
      ->orderBy('name asc')
      ->execute();
    $this->projects_archived = Doctrine_Core::getTable('project')
      ->createQuery('a')
      ->where('is_active = ?', 'no')
      ->andWhere('is_public = ?', 'yes')
      ->orderBy('name asc')
      ->execute();
  }
}
