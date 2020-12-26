<?php
namespace App\Infrastructure\Persistence\Repositories;
use App\Infrastructure\Persistence\Data\Mysql\Db;
use App\Application\Domain\Post;
class PostRepository
{
    private $_db;
    public function __construct()
    {
        $this->_db = new Db();
    }

    public function Create(Post $entity) : int
    {
       return $this->_db->Insert("wp_posts",(array)$entity);
    }
}