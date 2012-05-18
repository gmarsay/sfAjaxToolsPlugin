<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('TodoOwner', 'doctrine');

/**
 * BaseTodoOwner
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $todo_id
 * @property integer $sf_guard_user_id
 * @property Todo $Todo
 * 
 * @method integer   getTodoId()           Returns the current record's "todo_id" value
 * @method integer   getSfGuardUserId()    Returns the current record's "sf_guard_user_id" value
 * @method Todo      getTodo()             Returns the current record's "Todo" value
 * @method TodoOwner setTodoId()           Sets the current record's "todo_id" value
 * @method TodoOwner setSfGuardUserId()    Sets the current record's "sf_guard_user_id" value
 * @method TodoOwner setTodo()             Sets the current record's "Todo" value
 * 
 * @package    lufy
 * @subpackage model
 * @author     Guillaume Marsay - Futurolan <guillaume@futurolan.net>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTodoOwner extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('todo_owner');
        $this->hasColumn('todo_id', 'integer', 8, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 8,
             ));
        $this->hasColumn('sf_guard_user_id', 'integer', 8, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 8,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Todo', array(
             'local' => 'todo_id',
             'foreign' => 'id'));
    }
}