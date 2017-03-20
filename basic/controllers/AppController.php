<?php
namespace app\controllers;

use yii\web\Controller;

class AppController extends Controller
{
    function debug($var){
        echo '<pre>';
        print_r($var);
        echo '</pre>';
    }
}