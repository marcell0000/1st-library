<?php
// class ImagePost.php
include_once 'Post.php';

class ImagePost extends Post {
    public function getContent() {
        return "<img src='" . parent::getContent() . "' alt='Image Post'>"; // Override untuk menampilkan gambar
    }
}
?>
