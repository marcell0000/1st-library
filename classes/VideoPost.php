<?php
// class VideoPost.php
include_once 'Post.php';

class VideoPost extends Post {
    public function getContent() {
        return "<video src='" . parent::getContent() . "' controls></video>"; // Override untuk menampilkan video
    }
}
?>
