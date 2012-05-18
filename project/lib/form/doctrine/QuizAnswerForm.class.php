<?php

/**
 * QuizAnswer form.
 *
 * @package    lufy
 * @subpackage form
 * @author     Guillaume Marsay - Futurolan <guillaume@futurolan.net>
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class QuizAnswerForm extends BaseQuizAnswerForm
{
  public function configure()
  {
    unset($this['position']);
  }
}
