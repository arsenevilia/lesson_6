<?php

class PostHandler {
    private $posts = [];

    public function addPost($title, $content) {
        $newPost = ['title' => $title, 'content' => $content];
        $this->posts[] = $newPost;
        echo "New post is added";
    }

    public function postCheck() {
        if (empty($this->posts)) {
            echo "No posts found";
        } else {
            echo "These are your posts:";
            foreach ($this->posts as $post) {
                echo "- {$post['title']}\n";
            }
        }
    }
}

?>
