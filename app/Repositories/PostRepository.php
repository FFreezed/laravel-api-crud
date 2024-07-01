<?php

namespace App\Repositories;

use App\Interface\PostRepositoryInterface;
use App\Models\Post;

class PostRepository implements PostRepositoryInterface
{
    public function all()
    {
        return Post::all();
    }

    public function find($id)
    {
        return Post::find($id);
    }

    public function create(array $data)
    {
        return Post::create($data);
    }

    public function update(array $data, $id)
    {
        $post = Post::find($id);
        if($post){
            $post->update($data);
            return $post;
        }
        return null;
    }

    public function delete($id)
    {
        $post = Post::find($id);
        if ($post) {
            return $post->delete();
        }
        return null;
    }
}
