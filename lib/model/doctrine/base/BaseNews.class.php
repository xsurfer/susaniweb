<?php

/**
 * BaseNews
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $description
 * @property string $title
 * 
 * @method string getDescription() Returns the current record's "description" value
 * @method string getTitle()       Returns the current record's "title" value
 * @method News   setDescription() Sets the current record's "description" value
 * @method News   setTitle()       Sets the current record's "title" value
 * 
 * @package    studiosusani
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseNews extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('news');
        $this->hasColumn('description', 'string', 4000, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 4000,
             ));
        $this->hasColumn('title', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}