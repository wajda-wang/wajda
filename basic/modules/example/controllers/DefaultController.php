<?php

namespace app\modules\example\controllers;

use yii\web\Controller;

class DefaultController extends Controller
{
    public function actionIndex()
    {
        echo 200;
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
