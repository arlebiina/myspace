<?php
class ProfileController {
    public function index() {
        $model = new ProfileModel();
        $profile = $model->getProfileData();
        
        require_once 'views/home.php';
    }
}