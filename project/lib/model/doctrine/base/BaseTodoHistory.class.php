<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('TodoHistory', 'doctrine');

/**
 * BaseTodoHistory
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $username
 * @property string $module
 * @property string $action
 * 
 * @method string      getUsername() Returns the current record's "username" value
 * @method string      getModule()   Returns the current record's "module" value
 * @method string      getAction()   Returns the current record's "action" value
 * @method TodoHistory setUsername() Sets the current record's "username" value
 * @method TodoHistory setModule()   Sets the current record's "module" value
 * @method TodoHistory setAction()   Sets the current record's "action" value
 * 
 * @package    lufy
 * @subpackage model
 * @author     Guillaume Marsay - Futurolan <guillaume@futurolan.net>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTodoHistory extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('todo_history');
        $this->hasColumn('username', 'string', 50, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 50,
             ));
        $this->hasColumn('module', 'string', 50, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 50,
             ));
        $this->hasColumn('action', 'string', 100, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 100,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}