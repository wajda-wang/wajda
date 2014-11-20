<?php

namespace app\controllers;

class ExampleController extends \yii\web\Controller
{
    public function actionIndex()
    {

        echo "ExampleController/actionIndex";
        //return $this->render('index');
    }

    public function actionIndex2()
    {
        return $this->render('index');
    }


}
