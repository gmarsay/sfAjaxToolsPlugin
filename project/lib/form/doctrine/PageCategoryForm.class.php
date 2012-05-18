<?php

/**
 * PageCategory form.
 *
 * @package    lufy
 * @subpackage form
 * @author     Guillaume Marsay - Futurolan <guillaume@futurolan.net>
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class PageCategoryForm extends BasePageCategoryForm
{
  protected $parentId = null;


  public function configure()
  {
    unset($this['root_id'], $this['lft'], $this['rgt'], $this['level']);
    $this->widgetSchema['parent_id'] = new sfWidgetFormDoctrineChoice(array(
      'model' => 'PageCategory',
      'add_empty' => '~ (object is at root level)',
      'order_by' => array('root_id, lft',''),
      'method' => 'getIndentedName'
	      ));
    $this->validatorSchema['parent_id'] = new sfValidatorDoctrineChoice(array(
      'required' => false,
      'model' => 'PageCategory'
      ));
    $this->setDefault('parent_id', $this->object->getParentId());
    $this->widgetSchema->setLabel('parent_id', 'Child of');
  }


  public function updateParentIdColumn($parentId)
  {
    $this->parentId = $parentId;
  }


  protected function doSave($con = null)
  {
    parent::doSave($con);

    $node = $this->object->getNode();

    if ($this->parentId != $this->object->getParentId() || !$node->isValidNode())
    {
      if (empty($this->parentId))
      {
        if ($node->isValidNode())
        {
          $node->makeRoot($this->object['id']);
          $this->object->save($con);
        }
        else
        {
          $this->object->getTable()->getTree()->createRoot($this->object);
        }
      }
      else
      {
        $parent = $this->object->getTable()->find($this->parentId);
        $method = ($node->isValidNode() ? 'move' : 'insert') . 'AsFirstChildOf';
        $node->$method($parent);
      }
    }
  }
}
