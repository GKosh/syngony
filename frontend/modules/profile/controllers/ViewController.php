<?php 

namespace app\modules\profile\controllers;

use yii\web\Controller;

class ViewController extends Controller
{
	public function actionIndex($message = 'view'){
		
		return $this->render('view', ['message' => $message]);  
	}

}
