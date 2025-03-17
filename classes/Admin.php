<?php
// class Admin.php
include_once 'User.php';

class Admin extends User {
    public function getName() {
        return "Admin: " . parent::getName(); // Overriding getName()
    }

    public function getEmail() {
        return "Admin Email: " . parent::getEmail(); // Overriding getEmail()
    }
}
?>
