<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;

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

    public function handleTask(Request $request)
    {
        $body = $request->getBody();
        var_dump($body);
        return 'Handling submitted task';
    }
}