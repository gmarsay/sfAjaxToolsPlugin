<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Event', 'doctrine');

/**
 * BaseEvent
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $name
 * @property string $description
 * @property string $image_url
 * @property timestamp $start_at
 * @property timestamp $end_at
 * @property timestamp $start_registration_at
 * @property timestamp $end_registration_at
 * @property Doctrine_Collection $Visitor
 * 
 * @method string              getName()                  Returns the current record's "name" value
 * @method string              getDescription()           Returns the current record's "description" value
 * @method string              getImageUrl()              Returns the current record's "image_url" value
 * @method timestamp           getStartAt()               Returns the current record's "start_at" value
 * @method timestamp           getEndAt()                 Returns the current record's "end_at" value
 * @method timestamp           getStartRegistrationAt()   Returns the current record's "start_registration_at" value
 * @method timestamp           getEndRegistrationAt()     Returns the current record's "end_registration_at" value
 * @method Doctrine_Collection getVisitor()               Returns the current record's "Visitor" collection
 * @method Event               setName()                  Sets the current record's "name" value
 * @method Event               setDescription()           Sets the current record's "description" value
 * @method Event               setImageUrl()              Sets the current record's "image_url" value
 * @method Event               setStartAt()               Sets the current record's "start_at" value
 * @method Event               setEndAt()                 Sets the current record's "end_at" value
 * @method Event               setStartRegistrationAt()   Sets the current record's "start_registration_at" value
 * @method Event               setEndRegistrationAt()     Sets the current record's "end_registration_at" value
 * @method Event               setVisitor()               Sets the current record's "Visitor" collection
 * 
 * @package    lufy
 * @subpackage model
 * @author     Guillaume Marsay - Futurolan <guillaume@futurolan.net>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseEvent extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('event');
        $this->hasColumn('name', 'string', 45, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 45,
             ));
        $this->hasColumn('description', 'string', null, array(
             'type' => 'string',
             'notnull' => false,
             'length' => '',
             ));
        $this->hasColumn('image_url', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('start_at', 'timestamp', 25, array(
             'type' => 'timestamp',
             'notnull' => false,
             'length' => 25,
             ));
        $this->hasColumn('end_at', 'timestamp', 25, array(
             'type' => 'timestamp',
             'notnull' => false,
             'length' => 25,
             ));
        $this->hasColumn('start_registration_at', 'timestamp', 25, array(
             'type' => 'timestamp',
             'notnull' => false,
             'length' => 25,
             ));
        $this->hasColumn('end_registration_at', 'timestamp', 25, array(
             'type' => 'timestamp',
             'notnull' => false,
             'length' => 25,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Visitor', array(
             'local' => 'id',
             'foreign' => 'event_id'));

        $i18n0 = new Doctrine_Template_I18n(array(
             'fields' => 
             array(
              0 => 'name',
              1 => 'description',
              2 => 'image_url',
             ),
             ));
        $this->actAs($i18n0);
    }
}