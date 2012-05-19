<?php

/**
 * repository components.
 *
 * @package    lufy
 * @subpackage repository
 * @author     Guillaume Marsay - Futurolan <guillaume@futurolan.net>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class repositoryComponents extends sfComponents
{
  public function executeList(sfWebRequest $request)
  {
    $this->files = sfFinder::type('any')->maxDepth(0)->relative()->sort_by_type()->prune()->in($this->repository);
  }
}
