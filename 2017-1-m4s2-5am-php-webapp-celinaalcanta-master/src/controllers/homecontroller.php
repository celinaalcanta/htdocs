<?php
namespace src\controllers;

class HomeController {
    //get / /home /home /index
    public static function index(){
        include '../src/views/home.php';
    }
}