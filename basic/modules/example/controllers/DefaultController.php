<?php

namespace app\modules\example\controllers;

use yii\web\Controller;

class DefaultController extends Controller
{
    public function actionIndex()
    {
        echo 200;
        return $this->render('index');
    }
    public function actionA()
    {
        echo 100;

    }
}
