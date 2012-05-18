<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('UserEquipment', 'doctrine');

/**
 * BaseUserEquipment
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $user_id
 * @property enum $equipment_type
 * @property string $name
 * @property string $description
 * @property string $checked_at
 * 
 * @method integer       getUserId()         Returns the current record's "user_id" value
 * @method enum          getEquipmentType()  Returns the current record's "equipment_type" value
 * @method string        getName()           Returns the current record's "name" value
 * @method string        getDescription()    Returns the current record's "description" value
 * @method string        getCheckedAt()      Returns the current record's "checked_at" value
 * @method UserEquipment setUserId()         Sets the current record's "user_id" value
 * @method UserEquipment setEquipmentType()  Sets the current record's "equipment_type" value
 * @method UserEquipment setName()           Sets the current record's "name" value
 * @method UserEquipment setDescription()    Sets the current record's "description" value
 * @method UserEquipment setCheckedAt()      Sets the current record's "checked_at" value
 * @property  $
 * 
 * @package    lufy
 * @subpackage model
 * @author     Guillaume Marsay - Futurolan <guillaume@futurolan.net>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseUserEquipment extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('user_equipment');
        $this->hasColumn('user_id', 'integer', 8, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 8,
             ));
        $this->hasColumn('equipment_type', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 'ecran',
              1 => 'laptop',
              2 => 'desktop',
              3 => 'other',
             ),
             'notnull' => true,
             ));
        $this->hasColumn('name', 'string', null, array(
             'type' => 'string',
             'notnull' => true,
             'length' => '',
             ));
        $this->hasColumn('description', 'string', null, array(
             'type' => 'string',
             'notnull' => false,
             'length' => '',
             ));
        $this->hasColumn('checked_at', 'string', null, array(
             'type' => 'string',
             'notnull' => false,
             'length' => '',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('SfGuardUser', array(
             'local' => 'user_id',
             'foreign' => 'id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}