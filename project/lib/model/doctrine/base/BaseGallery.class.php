<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Gallery', 'doctrine');

/**
 * BaseGallery
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $name
 * @property string $description
 * @property integer $position
 * @property Doctrine_Collection $GalleryPhoto
 * 
 * @method string              getName()         Returns the current record's "name" value
 * @method string              getDescription()  Returns the current record's "description" value
 * @method integer             getPosition()     Returns the current record's "position" value
 * @method Doctrine_Collection getGalleryPhoto() Returns the current record's "GalleryPhoto" collection
 * @method Gallery             setName()         Sets the current record's "name" value
 * @method Gallery             setDescription()  Sets the current record's "description" value
 * @method Gallery             setPosition()     Sets the current record's "position" value
 * @method Gallery             setGalleryPhoto() Sets the current record's "GalleryPhoto" collection
 * 
 * @package    lufy
 * @subpackage model
 * @author     Guillaume Marsay - Futurolan <guillaume@futurolan.net>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseGallery extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('gallery');
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
        $this->hasColumn('position', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => false,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('GalleryPhoto', array(
             'local' => 'id',
             'foreign' => 'gallery_id'));

        $i18n0 = new Doctrine_Template_I18n(array(
             'fields' => 
             array(
              0 => 'name',
              1 => 'description',
             ),
             ));
        $sluggable1 = new Doctrine_Template_Sluggable(array(
             'fields' => 
             array(
              0 => 'name',
             ),
             ));
        $i18n0->addChild($sluggable1);
        $this->actAs($i18n0);
    }
}