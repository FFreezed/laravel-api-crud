<?php

namespace App\Services;

use App\Interface\PostRepositoryInterface;
use App\Repositories\PostRepository;

class PostService
{
    protected $postRepository;

    public function __construct(PostRepositoryInterface $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function getAllPosts()
    {
        return $this->postRepository->all();
    }

    public function getPostById($id)
    {
        return $this->postRepository->find($id);
    }

    public function createPost($data)
    {
        return $this->postRepository->create($data);
    }

    public function updatePost($data, $id)
    {
        return $this->postRepository->update($data, $id);
    }

    public function deletePost($id)
    {
        return $this->postRepository->delete($id);
    }
}
