<?php

/**
 * PageTable
 *
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class PageTable extends Doctrine_Table
{
  /**
   * Returns an instance of this class.
   *
   * @return object PageTable
   */
  public static function getInstance()
  {
      return Doctrine_Core::getTable('Page');
  }


  public function doSelectForSlug($parameters)
  {
    return $this->findOneBySlugAndCulture($parameters['slug'], $parameters['sf_culture']);
  }


  public function findOneBySlugAndCulture($slug, $culture = 'fr')
  {
    $q = $this->createQuery('a')
      ->leftJoin('a.Translation t')
      ->andWhere('t.lang = ?', $culture)
      ->andWhere('t.slug = ?', $slug);
    return $q->fetchOne();
  }


  public function findOneBySlug($slug)
  {
    return $this->findOneBySlugAndCulture($slug, 'fr');
  }
}
