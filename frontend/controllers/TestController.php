<?php
namespace frontend\controllers;

use yii\web\Controller;

/**
 * Site controller
 */
class TestController extends Controller
{
    public function actionIndex()
    {
    	echo 'test';
		exit();   
    }

	public function actionTest()
    {
   		echo 'test';
		exit();   
    }
}
