<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
abstract class BaseDoctrineArticleAuthor extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('doctrine_article_author');
        $this->hasColumn('article_id', 'integer', null, array('type' => 'integer', 'primary' => true));
        $this->hasColumn('author_id', 'integer', null, array('type' => 'integer', 'primary' => true));
    }

}