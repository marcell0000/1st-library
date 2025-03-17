<?php
// class Guest.php
include_once 'User.php';

class Guest extends User {
    public function getName() {
        return "Guest: " . parent::getName(); // Overriding getName()
    }

    public function getEmail() {
        return "Guest Email: " . parent::getEmail(); // Overriding getEmail()
    }
}
?>
