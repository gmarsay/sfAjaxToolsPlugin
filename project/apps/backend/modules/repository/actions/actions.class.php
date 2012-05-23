<?php

/**
 * repository actions.
 *
 * @package    lufy
 * @subpackage repository
 * @author     Guillaume Marsay - Futurolan <guillaume@futurolan.net>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class repositoryActions extends backendActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->forward('main', 'index');
  }

  public function executeList(sfWebRequest $request)
  {
    if (!$request->getParameter('path'))
    {
      echo 'Error, path is empty.';
    }

    $this->files = sfFinder::type('any')->maxDepth(0)->sort_by_type()->prune()->in($request->getParameter('path'));
    $this->current_directory =  $request->getParameter('path');

    if ($request->isXmlHttpRequest())
    {
      $this->setLayout(false);
    }
  }
}
