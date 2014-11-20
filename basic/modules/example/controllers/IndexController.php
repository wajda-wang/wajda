<?php

namespace app\modules\example\controllers;

use yii\web\Controller;

class IndexController extends Controller
{
    public function actionIndex()
    {
        echo 'IndexController';
        echo "<hr>";exit;
        return $this->render('index');
    }
    public function actionA()
    {
        echo "<pre>";
        print_r($_REQUEST);
        print_r($_SERVER);
        echo "</pre>";

        echo 100;

    }
}
