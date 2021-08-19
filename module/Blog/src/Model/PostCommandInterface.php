<?php

namespace Blog\Model;

interface PostCommandInterface
{
    public function insertPost(Post $post);

    public function updatePost(Post $post);

    public function deletePost(Post $post);
}