<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;

/**
 * @package app\controllers
 */
class SiteController extends Controller
{
    public function home(){
        $params = [
            'name' => 'Konrad'
        ];
        return $this->render('home', $params);
    }

    public function addTask()
    {
        return $this->render('addTask');
    }

    public function handleTask()
    {
        return 'Handling submitted task';
    }
}