<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
abstract class BaseDoctrineComment extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('doctrine_comment');
        $this->hasColumn('article_id', 'integer', null, array('type' => 'integer'));
        $this->hasColumn('author', 'string', 255, array('type' => 'string', 'length' => '255'));
        $this->hasColumn('content', 'clob', null, array('type' => 'clob'));
    }

    public function setUp()
    {
        $this->hasOne('DoctrineArticle as Article', array('local' => 'article_id',
                                                          'foreign' => 'id'));
    }
}