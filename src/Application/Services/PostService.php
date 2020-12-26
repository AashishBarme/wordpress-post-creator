<?php
namespace App\Application\Services;
use App\Infrastructure\Persistence\Repositories\PostRepository;
use App\Application\Domain\Post;

class PostService
{
    private $_postRepository;
    public function __construct()
    {
        $this->_postRepository = new PostRepository();
    }

    public function Create(Post $data): int
    {
       return  $this->_postRepository->Create($data);
    }
}