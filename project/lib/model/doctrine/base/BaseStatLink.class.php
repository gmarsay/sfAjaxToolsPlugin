<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('StatLink', 'doctrine');

/**
 * BaseStatLink
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $name
 * @property string $description
 * @property enum $link_type
 * @property string $short_key
 * @property string $url
 * @property integer $counter
 * 
 * @method string   getName()        Returns the current record's "name" value
 * @method string   getDescription() Returns the current record's "description" value
 * @method enum     getLinkType()    Returns the current record's "link_type" value
 * @method string   getShortKey()    Returns the current record's "short_key" value
 * @method string   getUrl()         Returns the current record's "url" value
 * @method integer  getCounter()     Returns the current record's "counter" value
 * @method StatLink setName()        Sets the current record's "name" value
 * @method StatLink setDescription() Sets the current record's "description" value
 * @method StatLink setLinkType()    Sets the current record's "link_type" value
 * @method StatLink setShortKey()    Sets the current record's "short_key" value
 * @method StatLink setUrl()         Sets the current record's "url" value
 * @method StatLink setCounter()     Sets the current record's "counter" value
 * 
 * @package    lufy
 * @subpackage model
 * @author     Guillaume Marsay - Futurolan <guillaume@futurolan.net>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseStatLink extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('stat_link');
        $this->hasColumn('name', 'string', 50, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 50,
             ));
        $this->hasColumn('description', 'string', null, array(
             'type' => 'string',
             'notnull' => false,
             'length' => '',
             ));
        $this->hasColumn('link_type', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 'in',
              1 => 'out',
             ),
             'notnull' => true,
             ));
        $this->hasColumn('short_key', 'string', 50, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 50,
             ));
        $this->hasColumn('url', 'string', null, array(
             'type' => 'string',
             'notnull' => true,
             'length' => '',
             ));
        $this->hasColumn('counter', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'default' => 0,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}